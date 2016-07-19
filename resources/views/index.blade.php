@extends('layout')

@section('content')

<div class="row">
    <div class="col-sm-12">

    <div class="page-header">
        <h2>导航 <small> 工作相关网址导航</small></h2>
    </div>

    <ul class="nav nav-pills">
        <li><a href="http://mbox.datartisan.com/" target="_blank"> 工作邮箱（Web） </a></li>
        <li><a href="https://tower.im/teams/86fbaaddb88c4053bdeac8dded814347/projects/" target="_blank"> Tower 在线协作 </a></li>
        <li><a href="https://github.com/Datartisan" target="_blank"> GitHub 在线协作 </a></li>
        <li><a href="/knowledge"> 团队知识库 </a></li>
        <li><a href="https://note.wiz.cn/login" target="_blank"> 团队文档库（Web） </a></li>
        <li><a href="https://mp.weixin.qq.com" target="_blank"> 微信公众平台管理 </a></li>
        <li><a href="http://weibo.com/u/3968170429" target="_blank"> 官方微博 </a></li>
    </ul>

    <hr>

    <div class="page-header">
        <h2>团队文档库 <small> 保存、归档各种资料文档</small></h2>
    </div>

    <div>
        <p>团队使用 Wiz 作为团队文档库工具</p>
        <p class="text-info">网页版地址：<a href="https://note.wiz.cn/login" target="_blank">https://note.wiz.cn/login</a></p> 
        <p class="text-info">桌面版下载地址：<a href="http://www.wiz.cn/download.html" target="_blank">http://www.wiz.cn/download.html</a></p>  
        <p class="text-info">团队公共账号： <span class="label label-primary">wiz@datartisan.com</span> </p>
        <p class="text-info">密码： <span class="label label-primary">da@wiz</span> </p>
    </div>

    <hr>

    <div class="page-header">
        <h2>持续集成 <small> 各项目持续集成构建状态</small></h2>
    </div>

    <ul class="nav nav-pills">
        <li><a href="https://github.com/Datartisan/datartisan-website" target="_blank">
            <strong>datartisan</strong> <img class="ci-status-img" src="https://codeship.com/projects/fbdf5910-4267-0133-bae5-42cacc6c25da/status?branch=develop"></a>
        </li>
        <li><a href="https://github.com/Datartisan/teamwork" target="_blank">
            <strong>teamwork</strong> <img class="ci-status-img" src="https://codeship.com/projects/3e9bf800-4268-0133-1fe6-42cacc6c25da/status?branch=develop"></a>
        </li>
        <li><a href="https://github.com/Datartisan/datartery" target="_blank">
            <strong>datartery</strong> <img class="ci-status-img" src="https://codeship.com/projects/57b3f490-4268-0133-1fe6-42cacc6c25da/status?branch=develop"></a>
        </li>
        <li><a href="https://github.com/Datartisan/roclaws" target="_blank">
            <strong>roclaws</strong> <img class="ci-status-img" src="https://codeship.com/projects/58d50fd0-4322-0133-891b-1e208d677ac2/status?branch=develop"></a>
        </li>
    </ul>

    <hr>

    <div class="page-header">
        <h2>Web UI 组件模板预览 <small> 浏览现有的成体系的 Web UI 组件</small></h2>
    </div>

    <ul class="nav nav-pills">
        <li><a href="/preview/inspinia/index.html" target="_blank"> Web UI 01 </a></li>
        <li><a href="/preview/neuboard/index.html" target="_blank"> Web UI 02 </a></li>
        <li><a href="/preview/velonic/index.html" target="_blank"> Web UI 03 </a></li>
        <li><a href="/preview/mvp/templates/admin/index.html" target="_blank"> Web UI 04 </a></li>
        <li><a href="/preview/wolf-1.1/index.html" target="_blank"> Wolf 1.1 </a></li>
        <li><a href="/preview/inspinia-2.4/index.html" target="_blank"> Inspinia 2.4 </a></li>
        <li><a href="/preview/inspinia-2.5/index.html" target="_blank"> Inspinia 2.5 </a></li>
        <li><a href="/preview/mvp-2.1/index.html" target="_blank"> MVP 2.1 </a></li>
    </ul>

    <hr>

    <div class="page-header">
        <h2>通讯录 <small> 团队成员联系方式</small></h2>
    </div>

    <table class="table table-striped table-hover">
      <thead>
        <tr>
          <th>工号</th>
          <th>姓名</th>
          <th>邮件地址</th>
          <th>电话</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">01</th>
          <td>郭鹏</td>
          <td>guopeng@datartisan.com</td>
          <td>18959210680</td>
        </tr>
        <tr>
          <th scope="row">02</th>
          <td>戴颖</td>
          <td>daiying@datartisan.com</td>
          <td></td>
        </tr>
        <tr>
          <th scope="row">03</th>
          <td>王绍锐</td>
          <td>wangshaorui@datartisan.com</td>
          <td>18659121374</td>
        </tr>
        <tr>
          <th scope="row">04</th>
          <td>范新妍</td>
          <td>fanxinyan@datartisan.com</td>
          <td>13599509002</td>
        </tr>
        <tr>
          <th scope="row">05</th>
          <td>蔡越</td>
          <td>caiyue@datartisan.com</td>
          <td></td>
        </tr>
        <tr>
          <th scope="row">06</th>
          <td>骆翔宇</td>
          <td>luoxiangyu@datartisan.com</td>
          <td></td>
        </tr>
        <tr>
          <th scope="row">07</th>
          <td>许斯敏</td>
          <td>xusimin@datartisan.com</td>
          <td>18850152076</td>
        </tr>
        <tr>
          <th scope="row">08</th>
          <td>张耀</td>
          <td>zhangyao@datartisan.com</td>
          <td></td>
        </tr>
        <tr>
          <th scope="row">09</th>
          <td>李泽卿</td>
          <td>lizeqing@datartisan.com</td>
          <td>15659876850</td>
        </tr>
        <tr>
          <th scope="row">10</th>
          <td>张昌冰</td>
          <td>zhangchangbing@datartisan.com</td>
          <td></td>
        </tr>
        <tr>
          <th scope="row">11</th>
          <td>盛舜赋</td>
          <td>shengshunfu@datartisan.com</td>
          <td>13328975330</td>
        </tr>
      </tbody>
    </table>

    <hr>


    </div>
</div>
@stop
