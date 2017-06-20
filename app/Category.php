<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $table = 'category';
    protected $primaryKey = 'cate_id';
    public $timestamps=false;
    protected $fillable = ['cate_pid'];

    public function getAllNodeList()
    {
        $cates = $this->where('cate_pid',0)->orderBy('cate_order','asc')->get();

        return $cates;
    }
}
