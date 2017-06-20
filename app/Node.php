<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Node extends Model
{
    //
    protected $table = 'node';
    protected $primaryKey = 'node_id';
    public $timestamps=false;
    protected $fillable = ['node_pid'];

    public function getNodeList($search)
    {
        $node = $this->where($search)->orderBy('px', 'asc')->get();

        return $node->toArray();
    }

    public function insertArray($input)
    {
        $node_id = $input['node_pid'];

        if($node_id > 0 ){
            $node_path = $this->where('node_id', $node_id)->value('node_pid_path');

            $input['node_pid_path'] = $node_path.$node_id.',';

        }

        $res = $this->insert($input);
        if ($res)
            return true;
        else
            return false;
    }

    public function getALlNodeList()
    {
        $datas = $this->orderBy('px','asc')->get()->toArray();
//        dd($datas);
        $datas = list_to_tree($datas,'node_id', 'node_pid', '_sub');
        return $datas;
    }
}
