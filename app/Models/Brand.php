<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'brand_code', 'description'];

    // instans value

    // relation
    public function products()
    {
        return $this->hasMany(Product::class, 'brand_id');
    }

    // boot
    public static function boot()
    {
        parent::boot();

        self::deleted(function ($brand) {
            foreach ($brand->products as $index => $product) {
                $product->update([
                    'brand_id' => NULL
                ]);
            }
        });
    }
}