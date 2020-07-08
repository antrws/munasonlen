<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Payment;
use App\User;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function payment($uuid)
    {
        $user = User::find(auth()->user()->id);
        // $user = User::where('uuid', $uuid)->first();
        return view('user.home.pyment', compact('user'));
    }

    public function paymentupdate(Request $request, $uuid)
    {
        $this->validate($request, [
            'uuid' => 'unique:payment',
            'nama_pengirim' => 'required',
            'no_tujuan' => 'required',
            'gambar' => 'required|mimes:jpeg,png,jpg|max:2048',
            'berkas' => 'required|mimes:pdf|max:5012',
        ]);
        $pa = Payment::create($request->all());
        $pembayaran = User::where('uuid', $uuid)->first();
        if ($pembayaran->pembayaran == 0) {
            $pembayaran->update(['pembayaran' => '3']);
        }

        if ($request->hasFile('gambar')) {
            $file_name = 'Payment' . '_' . random_int(10000, 100000) . $request->file('gambar')->getClientOriginalName();
            $request->file('gambar')->move('frontend/assets/img/payments/', $file_name);
            $pa->gambar = $file_name;
            $pa->save();
        }

        if ($request->hasFile('berkas')) {
            $file_name = 'Berkas' . '_' . random_int(10000, 100000) . $request->file('berkas')->getClientOriginalName();
            $request->file('berkas')->move('frontend/assets/pdf/payments/', $file_name);
            $pa->berkas = $file_name;
            $pa->save();
        }

        return redirect('/home')->with('berhasil', 'Berhasil!! Tunggu confirmasi dari admin.');
    }
}
