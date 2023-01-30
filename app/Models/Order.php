<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Order extends Model
{
    use HasFactory;
    protected $keyType = 'string';
    public $incrementing = false;
    protected $fillable = ['transaction_id', 'payment_token', 'payment_type', 'transaction_status'];

    // instant value

    // relations
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function details()
    {
        return $this->hasMany(OrderDetail::class, 'order_id');
    }

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, function ($query, $search) {
            return $query->where('name', 'like', '%' . $search . '%')->orWhereHas('details', function ($query) use ($search) {
                $query->where('name', 'like', '%' . $search . '%')->orWhere('product_id', '=', $search);
            })->orWhereHas('user', function ($query) use ($search) {
                $query->where('name', 'like', '%' . $search . '%')->orWhere('phone', 'like', '%' . $search . '%');
            });
        });
    }

    // method
    public static function generate($customer, $shipping, $item, $transaction)
    {
        $order = new Order();
        $order->id = $transaction['order_id'];
        // customer
        $order->user_id = auth()->user()->id;
        $order->name = $customer['name'];
        $order->phone = $customer['phone'];
        $order->email = $customer['email'];
        // shipping
        $order->address = $shipping['address'];
        $order->province = $shipping['province'];
        $order->city = $shipping['city'];
        $order->cost = $shipping['cost'];
        // transaction
        $order->gross_amount = $transaction['gross_amount'];
        $order->transaction_id = $transaction['order_id'];
        $order->payment_token = SnapToken::claim($transaction, $customer, $item, $shipping);
        // etc
        $order->comments = request()->has('comments') ? request()->comments : null;
        $order->save();

        foreach ($item as $key => $product) {
            $order->details()->create([
                'product_id' => $product['id'],
                'name' => $product['name'],
                'price' => $product['price'],
                'quantity' => $product['quantity'],
            ]);
        }

        return $order;
    }
    // bootable
    public static function boot()
    {
        parent::boot();

        self::creating(function ($model) {
        });

        self::created(function ($model) {
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