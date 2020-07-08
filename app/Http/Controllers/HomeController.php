<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Biodata;
use App\Payment;
use Auth;
use Hash;
use PDF;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
     {
        $this->middleware(['auth', 'verified']);
     }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = User::find(auth()->user()->id);
        return view('user.home.home',compact('user'));
    }

    public function useredit($uuid)
    {
        // $user = User::where('uuid', $uuid)->first();
        $user = User::find(auth()->user()->id);
        // dd($user);
        return view('user.home.profile', ['user' => $user]);
    }

    public function userupdate(Request $request)
    {
        $this->validate($request,[
            'uuid' => 'unique:biodata',
            'nim' => 'required|unique:biodata',
            'ttl' => 'required',
            'jk' => 'required',
            'alamat' => 'required',
            'jurusan' => 'required',
            'prodi' => 'required',
            'perguruan' => 'required',
        ]);

        $b = Biodata::create($request->all());
        $u = User::find($request->user_id)->update(['status' => 1]);
        //Payment::where($request->user_id)->update();

        return redirect('/home')->with('success', '<script>swal.fire({title: "Success",text: "Anda berhasil melengkapi profile!",type: "success"});</script>');
    }

    public function showChangePasswordForm()
    {
        return view('auth.changepassword');
    }

    public function changePassword(Request $request){

        if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
            // The passwords matches
            return redirect()->back()->with('error', '<script>swal.fire({title: "error",text: "Data password anda tidak ada, Silahkan coba lagi!!",type: "error"});</script>');
        }

        if(strcmp($request->get('current-password'), $request->get('new-password')) == 0){
            //Current password and new password are same
            return redirect()->back()->with('error', '<script>swal.fire({title: "error",text: "Kata sandi baru tidak boleh sama dengan kata sandi Anda saat ini. Silakan pilih kata sandi yang berbeda",type: "error"});</script>');
        }

        $validatedData = $request->validate([
            'current-password' => 'required',
            'new-password' => 'required|string|min:6|confirmed',
        ]);

        //Change Password
        $user = Auth::user();
        $user->password = bcrypt($request->get('new-password'));
        $user->save();

        return redirect()->back()->with("success","Password changed successfully !");

    }

    public function pdf()
    {
        $user = User::findOrFail(auth()->user()->id);
        $pdf = PDF::loadView('user.pdf.register', ['user' => $user]);
        return $pdf->download('Register.pdf');
    }
}
