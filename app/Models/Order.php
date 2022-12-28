<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Order extends Model
{
    use HasFactory;
    protected $keyType = 'string';
    protected $fillable = ['transaction_id', 'payment_token', 'payment_type'];

    // instant value

    // relations
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function detail()
    {
        return $this->hasMany(OrderDetail::class, 'order_id');
    }
    // bootable
    public static function boot()
    {
        parent::boot();

        self::creating(function ($model) {
            $model->id = Str::random(6);
            $model->gross_amount = 0;
            $model->user_id = auth()->user()->id;
            $model->name = auth()->user()->name;
            $model->email = auth()->user()->email;
            $model->phone = auth()->user()->phone;
            foreach (request()->orders as $key => $value) {
                $model->gross_amount += ($value['amount'] * $value['price']);
            }
        });

        self::created(function ($model) {
            foreach (request()->orders as $key => $value) {
                $model->detail()->create([
                    'product' => $value['product'],
                    'price' => $value['price'],
                    'amount' => $value['amount'],
                    'subtotal' => $value['price'] * $value['price']
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
            $model->detail()->delete();
        });
    }
}
