<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\Console\Input\Input;

class UsersController extends Controller
{
    //
    public function index(){
        $users = User::get();
        if(count(User::Where('role',1)->get())>0)
            $count = 1;
        else
            $count = 0;
        return view("users.index",['users'=>$users,'count'=>$count]);
    }

    public function create(){
        $users = User::get();
        return view('users.create', ['login'=>0,'edituser'=>0,'users'=>$users,'selectName'=>null,'selectCardID'=>null,'selectStudentID'=>null]);
    }

    public function store(CreateUserRequest $request){
        $name = $request->input('name');
        $cardID = $request->input('cardID');
        $StudentID = $request->input('studentID');

        $user = User::updateOrcreate(['name' => $name],[
            'name' => $name,
            'cardID' => $cardID,
            'studentID' => $StudentID,
        ]);
        return redirect("/users");
    }

    public function edit($id,$role){
        $user = User::findOrFail($id);
        $user->role = $role;
        $user->save();
        return redirect('users');
    }

    public function edituser($id){
        $login = Auth::check();
        $user = User::findOrFail($id);
        $selectName = $user->name;
        $selectCardID = $user->cardID;
        $selectStudentID = $user->studentID;
        return view('users.edit',['login'=>$login,'edituser'=>1,'user'=>$user,'selectName'=>$selectName,'selectCardID'=>$selectCardID,'selectStudentID'=>$selectStudentID]);
    }

    public function update($id,CreateUserRequest $request){
        $user = User::findOrFail($id);
        $user->name = $request->input('name');
        $user->cardID = $request->input('cardID');
        $user->studentID = $request->input('studentID');
        $user->save();
        return redirect('users');
    }

    public function destroy($id){
        $user = User::findOrFail($id);
        $user->delete();

        return redirect('users');
    }
}
