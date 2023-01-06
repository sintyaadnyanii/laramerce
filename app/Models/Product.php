<?php

namespace App\Models;

use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $primaryKey = 'code';
    protected $keyType = 'string';
    protected $fillable = ['name', 'code', 'category_id', 'condition', 'price', 'weight', 'stock'];

    // instant value
    public static function popular()
    {
        return Product::all()->map(function ($item) {
            if ($item->loved->count()) {
                return $item;
            }
        });
    }

    //relations
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function loved()
    {
        return $this->hasMany(Whislist::class, 'product_code');
    }

    // boot
    public static function boot()
    {
        parent::boot();

        self::creating(function ($model) {
            // ... code here
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

        self::updating(function ($model) {
            // ... code here
        });

        self::updated(function ($model) {
            // ... code here
        });

        self::deleting(function ($model) {
            // ... code here
        });

        self::deleted(function ($model) {
            // ... code here
        });
    }
}
