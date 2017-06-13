<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

class IndexController extends CommonController
{
    //
    public function index()
    {
//        dd(session('admin'));
        return view('admin.index');
    }

    public function info()
    {
//        return 111;

        $info = [
            '操作系统'=>'',
            '运行环境'=>'',
            'PHP运行方式'=>'',
            '上传附件限制'=>'',
            '北京时间'=>date('Y-m-d H:m:s',time()),
            '服务器域名/IP'=>$_SERVER['SERVER_NAME'].'['.$_SERVER['SERVER_ADDR'].']',
        ];
//        dd($info);
        return view('admin.info',/*['info'=>$info],*/compact('info'));
    }
}
