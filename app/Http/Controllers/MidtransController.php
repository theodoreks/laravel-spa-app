<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Booking;
use Midtrans\Config;
use Midtrans\Notification;

class MidtransController extends Controller
{
    public function callback(Request $request)
    {
        // Set konfigurasi server key
        Config::$serverKey = config('midtrans.server_key');
        Config::$isProduction = config('midtrans.is_production');
        
        // Buat instance notifikasi
        $notification = new Notification();

        // Ambil order_id dan status transaksi
        $order = explode('-', $notification->order_id);
        $booking_id = $order[1]; // Ekstrak ID booking dari order_id
        $status = $notification->transaction_status;
        $fraud = $notification->fraud_status;

        // Cari booking berdasarkan ID
        $booking = Booking::find($booking_id);

        if ($status == 'capture' || $status == 'settlement') {
            // Jika transaksi berhasil, update status pembayaran di database
            $booking->update(['status_pembayaran' => 'Lunas']);
        } else if ($status == 'pending') {
            // Biarkan status 'Belum Bayar' atau ubah ke 'Pending'
            $booking->update(['status_pembayaran' => 'Pending']);
        } else if ($status == 'deny' || $status == 'expire' || $status == 'cancel') {
            // Jika transaksi gagal atau dibatalkan, update status
            $booking->update(['status_pembayaran' => 'Gagal']);
        }

        return response()->json(['message' => 'Notification handled']);
    }
}