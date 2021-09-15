<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        return view('backend.users.index', compact('users'));
    }



    public function create()
    {
        return view('backend.users.create');
    }


    public function store(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required',
                'phone' => 'required',
                'address' => 'required',
                'email' => 'required | unique:users,email',
                'password' => 'required | confirmed',
            ]);

            $newName = 'users_' . time() . '.' . $request->file('photo')->getClientOriginalExtension();
            $request->photo->move('uploads/users/', $newName);

            $inputs = [

                'name' => $request->input('name'),
                'phone' => $request->input('phone'),
                'address' => $request->input('address'),
                'email' => $request->input('email'),
                'password' => Hash::make($request->input('password')),
                'role' => 'admin',
                'photo' => $newName

            ];


            User::create($inputs);
            return redirect()->route('admin.users');

        } catch (\Exception $exception) {
            $errors = $exception->validator->getMessageBag();
            return redirect()->back()->withErrors($errors)->withInput();

        }
    }



    public function delete($id){
        $users = User::find($id);
        if(file_exists('uploads/users/'.$users->photo)){
            unlink('uploads/users/'.$users->photo);
        }

        $users->delete();
        return redirect()->back();
    }







}
