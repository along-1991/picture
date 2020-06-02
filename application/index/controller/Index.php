<?php

namespace app\index\controller;

use think\Controller;

/**
 * 应用入口控制器
 * @author Anyon <zoujingli@qq.com>
 */
class Index extends Controller
{

    public function index()
    {
        $this->redirect('@admin/login');
    }
}
