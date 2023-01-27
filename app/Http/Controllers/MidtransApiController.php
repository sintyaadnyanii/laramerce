<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MidtransApiController extends Controller
{
    public function paymentNotif(Request $request)
    {
        $json = json_decode($request->getContent());
        $signatureKey = hash('SHA512', $json->order_id . $json->status_code . $json->gross_amount . config('midtrans.server_key'));
        if ($signatureKey == $json->signature_key) {
            $updated = Order::find($json->order_id)->update([
                'transaction_status' => $json->transaction_status
            ]);

            // if ($updated) {
            //     Mail::to(Order::find($json->order_id)->email)->send(new OrderNotify(Order::find($json->order_id)));
            // }

            return 'same';
        }
        return 'not same';
    }
}
