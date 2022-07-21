<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\EditRequest;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //
    public function index(){
        $users=User::all();
        return view("admin/profile", ['users'=>$users]);
    }
    public function edit(User $user ){
        return view("admin/profileEdit", ['user'=>$user]);
    } 
    
    public function updateProfile(EditRequest $request, User $user){
        $newsUpdate=$user->fill($request->only(['name','email','is_admin']))->save();
        if($newsUpdate){
            return redirect()->route('sortProfile')
            ->with('success','Запись успешно отредактирована');
        }
        return  back()->with('error','неполучилось')->withInput();




        // return view('admin.news.edit',['news'=>$request]);
    }
}
