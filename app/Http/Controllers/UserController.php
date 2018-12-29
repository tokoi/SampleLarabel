<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;


class UserController extends Controller
{
    
    public function edit()
    {
    
       return view('edit');

    }
    
    public function update()
    {
        
       $id = $_REQUEST['id'];
       
       $user = User::find($id);
       
       return view('update', ['user' => $user]);

  
    }
    
    public function updateExecute(Request $request){
        
    $this->validator($request->all())->validate();  
    
        //データ更新
       $user = User::find($request->id);
       $user->name = $request->name; 
       $user->email = $request->email; 
       $user->password = $request->password; 
       
       $user->save();
       return redirect('/');
    }
    
    protected function Validator(array $data)
    {
        return Validator::make($data,[
            
           'name'=>  'required',
           'email'=> 'required',
           'password'=> 'required',

            ]);
    }
}



?>