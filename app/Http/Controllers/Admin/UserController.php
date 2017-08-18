<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Validator;
use DB;
class UserController extends Controller
{
    public function userlist(){
        return View('admin.users');
    }

    public function profile(){
        return View('admin.profile');
    }

    public function add(Request $request){
        $username = $request->input('username');
        $mobile = $request->input('mobile');
        $validator = Validator::make($request->all(), [
            'username' => 'bail|required|min:6|max:18|regex:/^[a-zA-Z0-9_]+$/',
            'mobile' => 'bail|required|unique:user,mobile',
        ]);
        if($validator->fails()){
            return array('status'=>0,'msg'=>$validator->errors()->all()[0]);
        }
        $data = array(
            'username' => $username,
            'mobile' => $mobile,
            'password' => 123456,
            'status' => 1,
            'add_time' => time()
        );
        $result = DB::table('user')->insert($data);
        if($result){
            return array('status'=>1);
        }
        return array('status'=>0);

    }
}