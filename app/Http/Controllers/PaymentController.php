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

        Payment::where('gym_id', $gymId)->delete();

        foreach ($data as $item) {
            Payment::create([
                'gym_id' => $gymId,
                'member_name' => $item['name'],
                'package' => $item['package'],
                'payment_status' => $item['paidStatus'],
                'payment_date' => $item['date'],
            ]);
        }

        return response()->json(['message' => 'Payment records saved successfully.']);
    }
}
