<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class LoginController extends CommonController
{
    //
    public function index(Request $request)
    {
        $input = $request->all();
//        $validator = Validator::make($request->all(), [
//            'username' => 'required|unique:posts|max:255',
//            'password' => 'required|min:6',
//            'code' => 'required',
//        ]);
//        if ($validator->fails()) {
//            return redirect('admin/login')
//                ->withErrors($validator)
//                ->withInput();
//        }
        //
        $rules = [
            'username' => 'required|unique:posts|max:255',
            'password' => 'required|min:6',
            'code' => 'required|captcha',
        ];
//        Validator
        $code = captcha();
//        dd($code);

        var_dump($input['code']);
        return view('admin.login');
    }
    //验证码
    public function code()
    {
        return Captcha();
    }

    public function test()
    {
        $str = '123123';
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
}
