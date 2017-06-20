<?php

namespace App\Http\Controllers\Admin;

use App\Admin;
use App\Node;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Validator;
class IndexController extends CommonController
{
    //
    public function index()
    {
//        dd(session('admin')->username);
        $datas = (new Node() )->getALlNodeList();

        return view('admin.index',compact('datas'));
    }

    public function info()
    {
        $info = array(
            '操作系统'=>PHP_OS,
            '运行环境'=>$_SERVER["SERVER_SOFTWARE"],
            'PHP运行方式'=>php_sapi_name(),
            '上传附件限制'=>ini_get('upload_max_filesize'),
            '执行时间限制'=>ini_get('max_execution_time').'秒',
            '服务器时间'=>date("Y年n月j日 H:i:s"),
            '北京时间'=>gmdate("Y年n月j日 H:i:s",time()+3600*8),
            '服务器域名/IP'=>$_SERVER['SERVER_NAME'].' [ '.gethostbyname($_SERVER['SERVER_NAME']).' ]',
            '剩余空间'=>round((@disk_free_space(".")/(1024*1024)),2).'M',
//            'register_globals'=>get_cfg_var("register_globals")=="1" ? "ON" : "OFF",
//            'magic_quotes_gpc'=>(1===get_magic_quotes_gpc())?'YES':'NO',
//            'magic_quotes_runtime'=>(1===get_magic_quotes_runtime())?'YES':'NO',
        );
//        dd($info);
//        $ip = $_SERVER['REMOTE_ADDR'];

//        dump(Redis::hget('article:'.$ip,1));

        return view('admin.info',/*['info'=>$info],*/compact('info'));
    }

    public function pass()
    {
        if($input = Input::except('_token')){
            $rules = [
                'password'=>'required|between:6,20|confirmed'
            ];
            $message = [
                'password.required'=>'新密码不能为空!',
                'password.between'=>'新密码必须在6到16位之间!',
                'password.confirmed'=>'新密码和确认密码不一致!'
            ];


            $validator = Validator::make($input,$rules,$message);
            if($validator->passes()){
                $user = Admin::first();
                $_password = decrypt($user->password);
                if($input['password_o'] == $_password){
                    $user->password = encrypt($input['password']);
                    $user->update();
                    session(['admin'=>'']);
                    return redirect('admin/login');
//                    return back()->with('errors','密码修改成功!');
                }else{
                    return back()->with('errors','原密码错误!');
                }
            }else{
                return back()->withErrors($validator);
            }
        }

        return view('admin.pass');
    }
}
