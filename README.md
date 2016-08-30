<img src="http://immobiliare.github.io/ApnsPHP/images/logo.png" width="48"> RnsApp App is developed by Laravel & Angularjs
------
Preface !
------
Everybody is good, I will always to do this project, hope can get everybody's support, I love is just a technical engineer
------
why RnsApp ?
------
System deployment app background management system, reasonable deployment file, decoupling design, code, no longer extend difficulties, truly achieve the MVC separation, RnsApp is divided into three parts.

* 1、App background management system
* 2、App front-end display page
* 3、Interface monitoring system

RnsApp also includes all kinds of interface debugging tools, safety inspection.

Project Dir !
------
```shell
|-- app
    |-- Commands
    |-- Console
    |-- Events
    |-- Exceptions
    |-- Handlers
    |-- Http
        |-- Controller 控制器
            |-- Admin 后台控制器目录
            |-- Api   接口控制器目录
            |-- Module 模块目录
        |-- Middleware
        |-- Requests
        |-- Routes 接口路由目录
            .... php-files 路由文件
        |-- ApiRoutes.php 接口路由主文件
        |-- functions.php 通用函数
        |-- ModuleRoutes.php 模块路由
    |-- Libary  服务目录
        |-- Contracts 核心服务
        |-- .. 扩展类
    |-- Model
        |-- Contracts 核心模型
        |-- .. 基础模型
    |-- Providers
    |-- Services
|-- bootstarp
|-- config
|-- database
    |-- migrations
    |-- seeds
|-- public
    |-- admin   后台资源文件
    |-- angulr  测试资源文件
|-- resources
    |-- assets
    |-- lang  语言目录
    |-- views 模版目录
|-- storage
|-- tests
|-- vendor
```
Architecture !
------
<img src="https://github.com/CrazyCodes/RnsApp/blob/master/architecture.png?raw=true">
