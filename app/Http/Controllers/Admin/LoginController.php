<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class LoginController extends CommonController
{
    //
    public function __construct()
    {
//        $admin = DB::table('table');
    }
    public function index(Request $request)
    {
        $input = $request->all();
        if($input){
            $rules = [
                'username' => 'required|max:255',
                'password' => 'required|min:6',
                'code' => 'required|captcha',
            ];

            $validator = Validator::make($input,$rules);

            if($this->checkLogin($input)){
                $admin = $this->checkLogin($input);
            }
            if($validator->fails()){
//                dd($validator->errors());
                return back()->withErrors($validator);
            }else{
                session(['admin'=>$admin]);
                return redirect('admin/index');
            }
        }

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
