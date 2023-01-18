<?php

namespace App\Models;

use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $primaryKey = 'product_code';
    protected $keyType = 'string';
    protected $fillable = ['name', 'product_code', 'category_id', 'condition', 'price', 'weight', 'stock', 'brand_id', 'description'];

    // instant value
    public static function popular()
    {
        return Product::all()->map(function ($item) {
            if ($item->loved->count()) {
                return $item;
            }
        });
    }

    public function sold()
    {
        return OrderDetail::where('product_id', $this->id)->count();
    }


    //relations
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class, 'brand_id');
    }

    public function loved()
    {
        return $this->hasMany(Whislist::class, 'product_code');
    }

    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }
    // boot
    public static function boot()
    {
        parent::boot();

        self::creating(function ($product) {
            $product->id = request()->product_code;
        });

        self::created(function ($product) {
            foreach (request()->file('images') ?? [] as $key => $image) {
                $uploaded = Image::uploadImage($image);
                $product->images()->create([
                    'thumb' => 'thumbnails/' . $uploaded['thumb']->basename,
                    'src' => 'images/' . $uploaded['src']->basename,
                    'alt' => Image::getAlt($image)
                ]);
            }
        });

        self::updating(function ($product) {
            $img_array = explode(',', request()->deleted_images);
            array_pop($img_array);

            // dd($img_array);
            // dd(Image::whereIn('id', $img_array)->get());
            foreach ($img_array as $key => $image_id) {
                $will_deleted_image = Image::find($image_id);
                if (!is_null($will_deleted_image)) {
                    $will_deleted_image->delete();
                }
            }

            foreach (request()->file('images') ?? [] as $key => $image) {
                $uploaded = Image::uploadImage($image);
                $product->images()->create([
                    'thumb' => 'thumbnails/' . $uploaded['thumb']->basename,
                    'src' => 'images/' . $uploaded['src']->basename,
                    'alt' => Image::getAlt($image),
                ]);
            }
        });

        self::updated(function ($model) {
            Cart::where('product_id', 'id')->update(['product_id', $model->id]);
        });

        self::deleting(function ($product) {
            foreach ($product->images as $key => $image) {
                $image->delete();
            }
        });

        self::deleted(function ($model) {
            Cart::where('product_id', 'id')->delete();
        });
    }
}
