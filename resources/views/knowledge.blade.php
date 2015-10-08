@extends('layout')

@section('css')
<link href="/css/highlight/styles/solarized_dark.css" rel="stylesheet">
<style type="text/css">
#sidebar-nav ul {
    list-style: none;
    padding: 0;
}

#sidebar-nav ul li {
    padding: 8px 10px;
}

#sidebar-nav ul li p {
    margin: 0;
}

#document {
    padding: 0 30px;
}

#document pre {
    padding: 0;
}

</style>
@stop

@section('content')

<div class="row knowledge">
    <div class="col-sm-3 well well-sm">
        <a id="edit-contents" class="btn btn-sm btn-primary pull-right" href="https://github.com/Datartisan/knowledge/edit/master/contents.md">编辑目录</a>
        <div id="sidebar-nav">
        {!! $sidebarNavHtml !!}
        </div>
    </div>

    <div id="document" class="col-sm-9">
        <div class="btn-group pull-right">
            <!--
            <a class="btn btn-default" href="https://tower.im/projects/54131c44c7d842cbbdda77a9e9be30d3/lists/b304e4af1cee464d9325527a47a365e4/show/" target="_blank">问题反馈</a>
            -->
            <a class="btn btn-primary" href="https://github.com/Datartisan/knowledge/edit/master/{{ $page }}">编辑</a>
        </div>

        {!! $documentHtml !!}
    </div>

</div>
@stop

@section('js')
<script src="/js/libs/highlight.pack.js"></script>
<script>
$(function(){

    var urlPre = location.origin + '/knowledge';
    var locationHref = location.href;
    var locationUrlPreLength = locationHref.lastIndexOf('/');

    $('#sidebar-nav a').each(function(i, a){
        a.href = urlPre + a.href.substring(locationUrlPreLength);
    });

    $('pre code').each(function(i, block) {
        hljs.highlightBlock(block);
    });

});
</script>
@stop