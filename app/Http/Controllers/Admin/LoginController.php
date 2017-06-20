<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class LoginController extends CommonController
{
    public function index(Request $request)
    {
        $input = $request->all();
        if($input){

            $rules = [
                'username' => 'required|max:255',
                'password' => 'required|between:6,20',
                'code' => 'required|captcha',
            ];

            $validator = Validator::make($input,$rules);

            $admin = [];
            if($this->checkLogin($input)){
                $admin = $this->checkLogin($input);
            }

            if($validator->fails()){
//                dd($validator->errors());
                return back()->withErrors($validator);
            }else{
//                dd($admin);
                session(['admin'=>$admin]);
                return redirect('admin/index');
            }
        }elseif(session('admin')){
            return redirect('admin/info');
        }else{
            return view('admin.login');
        }


    }
    //验证码
    public function code()
    {
        return Captcha();
    }

    public function test()
    {
        $str = 'd7m7m';
//       echo  mb_strtolower($str, 'UTF-8');
//        echo password_verify($str,session('captcha.key'));
        echo password_hash($str,PASSWORD_BCRYPT,['cost'=>10]);
//        encrypt
//        $admin = DB::table('admin')->get()->toArray();
//        dd($admin);
    }

    public function register()
    {
        $data = [
            'username'=>'admin',
            'password'=>encrypt('123123'),
            'email'=>''
        ];
        $admin = DB::table('admin')->insert($data);

        dd($admin);
    }

    /*
    *注销账户
    *
     */
    public function logout()
    {
        session(['admin'=>'null']);
        return redirect('admin/login');
    }

    private function checkLogin($params)
    {
        $admin = DB::table('admin')->where('username','=',$params['username'])->first();

        if(!$admin)
            return false;
        $password = decrypt($admin->password);

        if($params['password'] != $password)
            return false;
        return $admin;
    }

}
