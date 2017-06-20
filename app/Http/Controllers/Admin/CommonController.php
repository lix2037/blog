<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommonController extends Controller
{
    //

    function article_review()
    {
        $arr = [
//            '审核状态 0=>发布代审核 1=>已发布 2=> 已下架'
        '发布待审核','已发布','已下架'
        ];

        return $arr;
    }
}
