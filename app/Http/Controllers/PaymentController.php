<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;

class PaymentController extends Controller
{
    public function fetchPayment($gymId)
    {
        $payments = Payment::where('gym_id', $gymId)->get();
        return response()->json($payments);
    }

    public function savePayment(Request $request)
    {
        $data = $request->input('payments');
        $gymId = $request->input('gym_id');

        Payment::where('gym_id', $gymId)->delete(); // old payments delete karanawa (optional)

        foreach ($data as $item) {
            Payment::create([
                'gym_id' => $gymId,
                'member_name' => $item['member_name'],
                'package' => $item['package'],
                'payment_status' => $item['payment_status'],
                'payment_date' => $item['payment_date'],
            ]);
        }

        return response()->json(['message' => 'Payment records saved successfully.']);
    }
}
