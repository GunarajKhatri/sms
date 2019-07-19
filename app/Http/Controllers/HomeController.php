<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission; 


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
           
         // Role::create(['name'=>'editor']);
        //  $permission= Permission::create(['name'=>'delete post']);
        //  $role=Role::findById(1);
        //  $role->givePermissionTo($permission);
         //auth()->user()->givePermissionTo('edit post');
        // auth()->user()->assignRole('editor ');
        // return auth()->user()->getpermissionsViaRoles();
       return User::role('writer')->get();
         return view('home'); 
        //return view('welcome'); 
    }
}
