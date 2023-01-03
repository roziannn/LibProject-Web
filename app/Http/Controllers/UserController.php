<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {


        return view('user.pengaturan.index', ['data' => $request->user()]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        $user = Auth::user();

        //spesific for avatar
        $request->validate([
            'username' => 'max:25',
            'name' => 'max:50',
            'bio' => 'max:255',
            'avatar' => 'image|mimes:jpeg,png,jpg'
        ]);


        $imageName = $user->avatar;
        
        if ($request->avatar) {
            $avatar_img = $request->avatar;
            $imageName = $user->username . '-' . time() . '.' . $avatar_img->extension();
            $avatar_img->move(public_path('img/avatar'), $imageName);
        }

        //HARUS DI VALIDATE
        $request->user()->update([
            'username' => $request->username,
            'name' => $request->name,
            'bio' => $request->bio,
            'avatar' => $imageName
        ]
        );

        

        $request->accepts('session');
        session()->flash('success', 'Berhasil mengubah profil!');

        return redirect()->back();
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function dashboard_user()
    {

        $data = DB::select("SELECT * FROM users order by name asc");

        return view('dashboard.layouts.admin.user.index', compact('data'));
    }

    public function dashboard_user_update(Request $request, $id)
    {
        // $data = User::find($id);
        User::find($id)->update([
            'roles' => $request->roles
        ]);


        $request->accepts('session');
        session()->flash('success', 'Berhasil diubah!');

        return redirect()->back();
    }
}
