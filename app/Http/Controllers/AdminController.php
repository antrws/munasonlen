<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Http\Request;
use App\Mail\NotifPaymentMunas;
use App\User;
use App\Biodata;
use App\Payment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Exports\UsersExport;
use Illuminate\Support\Facades\App;
use Maatwebsite\Excel\Facades\Excel;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = User::all();

        return view('admin.home', compact('user'));
    }

    public function datauser()
    {
        $user = User::all();
        return view('admin.list', compact('user'));
    }

    public function datauserid($uuid)
    {
        // $user = User::find(auth()->user()->id);
        $user = User::where('uuid', $uuid)->first();
        // dd($user);
        $payment = Payment::where('uuid', $uuid)->first();
        // dd($payment);
        return view('admin.lihatuser', compact('user', 'payment'));
    }

    public function datauserupdate(Request $request, $uuid)
    {
        $user = User::where('uuid', $uuid)->first();
        $user->update($request->all());
        \Mail::to($user->email)->send(new NotifPaymentMunas);
        // if($user->pembayaran == 0)
        //     $user->update(['pembayaran' => '1']);
        // else
        //     $user->update(['pembayaran' => '0']);
        return redirect()->back()->with('success', 'Data berhasil di update');
    }

    public function export()
    {
        return Excel::download(new UsersExport, 'Admins.xlsx');
    }

    public function import(Request $request)
    {
        Excel::import(new \App\Imports\dataPenduduk,$request->file('dataPenduduk'));
        // dd($request->all());
    }

    public function delete($uuid)
    {
        $user = User::where('uuid', $uuid)->delete();
        $datauser = Payment::where('uuid', $uuid)->delete();

        return redirect()->back()->with('success', 'User berhasil dihapus');
    }

    public function createAdmin()
    {
        return view('admin.createAdmin.index');
    }

    public function createAdminStore(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required|email|unique:admins',
        ]);
        $admin = Admin::create([
            'role' => 'admin',
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt('munasfkmpi'),
        ]);

        return redirect()->back()->with('success', 'Admin berhasil dibuat');
    }

    public function changePasswordAdmin()
    {
        return view('authAdmin.changepassword');
    }

    public function changePasswordAdminPost(Request $request)
    {
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

        return redirect()->back()->with('success', '<script>swal.fire({title: "Success",text: "Changed Password Successfully",type: "success"});</script>');
    }

    public function dataAdmin()
    {
        $admin = Admin::where(['role' => 'admin'])->get();
        return view('admin.createAdmin.dataAdmin', compact('admin'));
    }

    public function deleteAdmin($id)
    {
        $admin = Admin::find($id);
        $admin->delete(['role' => 'admin']);

        return redirect()->back()->with('success', 'Data berhasil dihapus');
    }
    
    public function deletePayment($uuid)
    {
        $datauser = Payment::where('uuid', $uuid)->delete();
        $user = User::find(auth()->user()->id);
        if($user->pembayaran == 3){
            $user->update(['pembayaran'=> 0]);
        }
        return redirect()->back()->with('success', 'Data berhasil dihapus');
    }

}
