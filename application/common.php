<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件
// 
/*
 * 根据post数组自动生成对应变量
 */
function generatePostParamVars()
{
    if (!$_POST) {
        return;
    }
    foreach ($_POST as $k => $v) {
        $params[$k] = I('post.' . $k);
    }
    return $params;
}

/*
 * 根据get数组自动生成对应变量
 */
function generateGetParamVars()
{
    if (!$_GET) {
        return;
    }
    foreach ($_GET as $k => $v) {
        $params[$k] = I('get.' . $k);
    }
    return $params;
}

function generateRequestParamVars()
{
    if (!$_REQUEST) {
        return array();
    }
    foreach ($_REQUEST as $k => $v) {
        $params[$k] = $v;
    }
    return $params;
}
define('APPID','wx70c5664904f5580b');
define('SECRET','691393835aec33c300df8b3a3aa1bfcf');
