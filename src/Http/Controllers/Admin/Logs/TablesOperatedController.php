<?php
/**
 * Created by PhpStorm.
 * User: kevin
 * Date: 2019/11/5
 * Time: 1:50 下午
 */


namespace Z1px\App\Http\Controllers\Admin\Logs;


use Z1px\App\Http\Controllers\Controller;
use Z1px\App\Http\Services\TablesOperatedService;

class TablesOperatedController extends Controller
{

    protected function __construct()
    {
        $this->model = TablesOperatedService::class;
    }

    /**
     * 数据库表操作日志列表
     */
    public function index()
    {
        return $this->_index();
    }

    /**
     * 数据库表操作日志信息
     */
    public function info()
    {
        return $this->_info();
    }

}
