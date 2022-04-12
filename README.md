ThinkPHP 5.0 PHPExcel
===============

[![Total Downloads](https://poser.pugx.org/topthink/think/downloads)](https://packagist.org/packages/topthink/think)
[![Latest Stable Version](https://poser.pugx.org/topthink/think/v/stable)](https://packagist.org/packages/topthink/think)
[![Latest Unstable Version](https://poser.pugx.org/topthink/think/v/unstable)](https://packagist.org/packages/topthink/think)
[![License](https://poser.pugx.org/topthink/think/license)](https://packagist.org/packages/topthink/think)

1.简介：股票信息爬虫，基于雪球网的获取多支股票基本信息，基础页面PC端，手机通用，数据可作用于统计和分析选股策略。目前只测试了当日收盘后的数据无误（有错误欢迎小伙伴来纠正），当日9:00-15：00交易中，理论上也是可以获取的，获取的数据都是实时的，还未测试。
<br><br>
2.试用网址链接：http://deciduous.top/gup/public/index.php/home/gup/get
<br><br>
3.技术栈：ThinkPHP5.0 PHPExcel Html JQ
<br><br>
4.结果数据格式分两种，1为Excel表格格式，2为数据库。可自行选择代码中注释部分。源码在application\home\controller\gup.php中，注释已加。可以直接该文件中get接口处添加修改股票代码，获取自己想要获取的股票信息。
<br><br>
5.单股信息包含：详细代码，名称，获取数据时间,当前价格,涨跌额,涨跌幅,振幅,量比,成交额,今开,最高,最低,52周最高,52周最低,涨停,跌停,昨收,换手,代码,货币单位,价格2,股息(TTM),股息率(TTM),每股收益,交易所,流通值,流通股,总市值,每股净资产,市净率,市盈率(TTM),总股本,当日获取数据时状态：交易中,休市中,已收盘。


ThinkPHP5在保持快速开发和大道至简的核心理念不变的同时，PHP版本要求提升到5.4，对已有的CBD模式做了更深的强化，优化核心，减少依赖，基于全新的架构思想和命名空间实现，是ThinkPHP突破原有框架思路的颠覆之作，其主要特性包括：


## 目录结构

初始的目录结构如下：

~~~
www  WEB部署目录（或者子目录）
├─application           应用目录
│  ├─common             公共模块目录（可以更改）
│  ├─home        模块目录
│  │  ├─config.php      模块配置文件
│  │  ├─common.php      模块函数文件
│  │  ├─controller      控制器目录 主要文件在这！！！！！！！！
│  │  ├─model           模型目录
│  │  ├─view            视图目录  主要文件在这！！！！！！！！
│  │  └─ ...            更多类库目录
│  │
│  ├─command.php        命令行工具配置文件
│  ├─common.php         公共函数文件
│  ├─config.php         公共配置文件
│  ├─route.php          路由配置文件
│  ├─tags.php           应用行为扩展定义文件
│  └─database.php       数据库配置文件
│
├─public                WEB目录（对外访问目录）
│  ├─index.php          入口文件
│  ├─router.php         快速测试文件
│  └─.htaccess          用于apache的重写
│
├─extend                扩展类库目录
├─runtime               应用的运行时目录（可写，可定制）
├─vendor                第三方类库目录（Composer依赖库）  PHPExcel类库放这！！！！！！！
├─build.php             自动生成定义文件（参考）
├─composer.json         composer 定义文件
├─LICENSE.txt           授权说明文件
├─README.md             README 文件
├─think                 命令行入口文件
~~~
ps:源码仅供各位参考学习使用 望不要商用 谢谢！ 有疑问或者有可改进的地方，可加群互相探讨，看到会第一时间回复。Q群：964868143

同时也欢迎小伙伴进群互相交流分享创业经验
