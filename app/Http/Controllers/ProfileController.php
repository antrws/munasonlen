<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Biodata;
use App\User;
use Auth;
class ProfileController extends Controller
{
    public function editprofile(Request $request, $uuid)
    {
        // $user = User::where('uuid', $uuid)->get();
        $user = User::find(auth()->user()->id);
        // $user = Auth::id();
        // dd($user);
        return view('user.profile.edit', ['user' => $user]);
    }

    public function updateprofile(Request $request, $uuid)
    {
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required',
            'nim' => 'required',
            'agama' => 'required',
            'ttl' => 'required',
            'alamat' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $biodata = Biodata::where('uuid', $uuid)->first();
        $user = User::where('uuid', $uuid)->first();
        $biodata->update($request->all());
        $user->update($request->all());

        if ($request->hasFile('gambar')) {
            $file_name = random_int(10000, 100000) . $request->file('gambar')->getClientOriginalName();
            $request->file('gambar')->move('frontend/assets/img/profiles/', $file_name);
            $biodata->gambar = $file_name;
            $biodata->save();
        }

        return redirect('/home')->with('success', '<script>swal.fire({title: "Success",text: "Berhasil update profile!",type: "success"});</script>');
    }
}
