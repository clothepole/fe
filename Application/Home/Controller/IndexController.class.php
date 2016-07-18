<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function test()
    {
        $db = M('WorkerInfo');
        var_dump($db->select());
    }
}