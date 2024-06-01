<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Monolog\Handler\RotatingFileHandler;

class UserController extends Controller{
    public function index(){
        $lst=User::paginate();
        //dd($lst);
        return view('admin.users-index', compact('lst'))->with('i', (request()->input('page', 1)-1)*5);
    }

    public function show(User $user){
        return view('admin.users-show', ['p' => $user]);
    }

    public function create(){
        return view('admin.users-create');
    }

    public function store(StoreUserRequest $request){
        $p = User::create([
            'name' => $request->name,
            'email'=> $request->email,
            'address'=>$request->address,
            'password' => $request->merge(['password' => Hash::make($request->password)]),
            'phone' => $request->phone,
            'role' => $request->role
        ]);

        return redirect()->route('users.index');
    }

    public function destroy(User $user){
        $user->delete();
        return redirect()->route('users.index');
    }

    public function edit(User $user){
        return view('admin.users-edit', ['p'=>$user]);
    }

    public function update(UpdateUserRequest $request, User $user){
        $user->fill([
            'name'=> $request->name,
            'address' => $request->address,
            'phone' => $request->phone
        ]);

        $user->save();
        return redirect()->route('users.index', ['user'=>$user]);
    }

    public function detail(User $user){
        return view('pages.user-show', compact('user'));
    }
}