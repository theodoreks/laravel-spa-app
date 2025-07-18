<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking; // Import the Booking model
use Midtrans\Config;
use Midtrans\Notification;

class MidtransController extends Controller
{
    /**
     * Handle Midtrans payment notifications (webhook).
     */
    public function callback(Request $request)
    {
        // 1. Set Midtrans configuration
        Config::$serverKey = config('midtrans.server_key');
        Config::$isProduction = config('midtrans.is_production');
        
        // 2. Create a Midtrans notification instance
        $notification = new Notification();

        // 3. Extract order ID and check transaction status
        // The order ID is in the format "BOOKING-ID-TIMESTAMP"
        $order = explode('-', $notification->order_id);
        $booking_id = $order[1]; // Get the booking ID
        
        $status = $notification->transaction_status;
        $fraud = $notification->fraud_status;

        // 4. Find the booking in your database
        $booking = Booking::find($booking_id);

        if ($booking) {
            // 5. Check the transaction status from Midtrans
            if ($status == 'capture' || $status == 'settlement') {
                // If successful, update the payment status to 'Lunas'
                $booking->update(['status_pembayaran' => 'Lunas']);
            } else if ($status == 'pending') {
                $booking->update(['status_pembayaran' => 'Pending']);
            } else if ($status == 'deny' || $status == 'expire' || $status == 'cancel') {
                $booking->update(['status_pembayaran' => 'Gagal']);
            }
        }
        
        // Return a response to Midtrans to acknowledge receipt
        return response()->json(['message' => 'Notification handled.']);
    }
}