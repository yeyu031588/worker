<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
class LoginController extends Controller
{
    /**
     * 登录
     *
     * @param int $id
     * @return Response
     */
    public function doLogin(Request $request)
    {
        $name = $request->input('name');
        $password = $request->input('password');
        $user = DB::table('Admin')
            ->where(array('username'=>$name))
            ->select('username', 'admin_id','password')
            ->get();
        $user = $user[0];
        if(!$user){
            return redirect('/AdminLogin')->withErrors(array('用户不存在'))->withInput();
        }else{
            if($user->password == md5($password)){
                $request->session()->put('admin_id',$user->admin_id);
                $request->session()->put('admin_name',$user->username);
                return redirect('/Admin');
            }else{
                return redirect('/AdminLogin')->withErrors(array('密码错误'))->withInput();
            }
        }
    }
}