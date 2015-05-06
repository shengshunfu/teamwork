@extends('layout')

@section('content')

<div class="row">
    <div class="col-sm-12">

    <div class="page-header">
        <h1>导航 <small> 工作相关网址导航</small></h1>
    </div>

    <ul class="nav nav-pills">
        <li><a href="http://mbox.datartisan.com/" target="_blank"> 工作邮箱（Web） </a></li>
        <li><a href="https://tower.im/teams/86fbaaddb88c4053bdeac8dded814347/projects/" target="_blank"> Tower 在线协作 </a></li>
        <li><a href="/knowledge"> 团队知识库 </a></li>
        <li><a href="https://mp.weixin.qq.com" target="_blank"> 微信公众平台管理 </a></li>
        <li><a href="http://weibo.com/u/3968170429" target="_blank"> 官方微博 </a></li>
    </ul>

    <hr>

    <div class="page-header">
        <h1>通讯录 <small> 团队成员联系方式</small></h1>
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
          <td>刘晓葳</td>
          <td>liuxiaowei@datartisan.com</td>
          <td>18050086099</td>
        </tr>
        <tr>
          <th scope="row">03</th>
          <td>戴颖</td>
          <td>daiying@datartisan.com</td>
          <td></td>
        </tr>
        <tr>
          <th scope="row">04</th>
          <td>王绍锐</td>
          <td>wangshaorui@datartisan.com</td>
          <td>18659121374</td>
        </tr>
        <tr>
          <th scope="row">05</th>
          <td>张未未</td>
          <td>zhangweiwei@datartisan.com</td>
          <td></td>
        </tr>
        <tr>
          <th scope="row">06</th>
          <td>范新妍</td>
          <td>fanxinyan@datartisan.com</td>
          <td>13599509002</td>
        </tr>
        <tr>
          <th scope="row">07</th>
          <td>蔡越</td>
          <td>caiyue@datartisan.com</td>
          <td></td>
        </tr>
        <tr>
          <th scope="row">08</th>
          <td>骆翔宇</td>
          <td>luoxiangyu@datartisan.com</td>
          <td></td>
        </tr>
      </tbody>
    </table>

    <hr>

    <div class="page-header">
        <h1>持续集成 <small> 各项目持续集成构建状态</small></h1>
    </div>

    <ul class="nav nav-pills">
        <li><a href="https://bitbucket.org/Glosure/datartisan" target="_blank">
            <strong>datartisan</strong> <img class="ci-status-img" src="https://codeship.com/projects/d65d91f0-d5de-0132-74aa-1e0a7d4d648e/status?branch=develop"></a>
        </li>
        <li><a href="https://bitbucket.org/Glosure/teamwork" target="_blank">
            <strong>teamwork</strong> <img class="ci-status-img" src="https://codeship.com/projects/0c56a9f0-bffb-0132-f15e-7eb09717a41c/status?branch=develop"></a>
        </li>
    </ul>

    <hr>

    <div class="page-header">
        <h1>Web UI 组件模板预览 <small> 浏览现有的成体系的 Web UI 组件</small></h1>
    </div>

    <ul class="nav nav-pills">
        <li><a href="/preview/inspinia/index.html" target="_blank"> Web UI 01 </a></li>
        <li><a href="/preview/neuboard/index.html" target="_blank"> Web UI 02 </a></li>
    </ul>

    </div>
</div>
@stop
