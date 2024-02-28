<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('login');
    }

    public function register()
    {
        return view('register');
    }

    // public function saveRegister(Request $request)
    // {
    //     $data = $request -> validate([
    //         'username'=>'required',
    //         'name'=>'required',
    //         'email'=>'required',
    //         'password'=>'required'
    //     ]);


    //     $simpan = 
    //     [
    //         'username'=>$data['username'],
    //         'name'=>$data=['name'],
    //         'email'=>$data=['email'],
    //         'password'=>bcrypt($data,'password'),
    //     ];
       

    //     User::create ($simpan);
    //     return redirect('/');
    // }

    public function prosesLogin(Request $request){
        $request->validate([
            'username'=>'required',
            'password'=>'required',
        ]);

        $data = $request->only(['username','password']);
        if (Auth::attempt($data)) {
            return redirect('/galery');
        } else {
            return redirect('/');
        }
        
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
        $data = [
            'name' =>$request->name,
            'username' =>$request->username,
            'email' =>$request->email,
            'password' =>Hash::make($request->password),
        ];
        // dd($data);
        $user = User::create($data);
        Auth::login($user);

        return redirect ('/galery');
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
    public function update(Request $request, $id)
    {
        //
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

    public function logout()
    {
        Auth::logout('/logout');
        session()->flush();
        return redirect('/');
    }
}
