<?php namespace Longzhan\Auth2\Facades;

use Illuminate\Support\Facades\Facade;

class Auth2 extends Facade
{
    /**
     * 获取组件的注册名称。
     *
     * @return string
     */
    protected static function getFacadeAccessor() { return 'Auth2'; }
}