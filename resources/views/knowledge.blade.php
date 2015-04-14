@extends('layout')

@section('content')

<div class="row">
    <div id="sidebar" class="col-sm-3">
        <ul class="nav nav-pills nav-stacked">
        {!! $sidebarNavHtml !!}
        </ul>
    </div>

    <div class="col-sm-9">
        {!! $documentHtml !!}
    </div>

</div>
@stop

@section('js')
<script>
$(function(){

    var urlPre = location.origin + '/knowledge';
    var locationHref = location.href;
    var locationUrlPreLength = locationHref.lastIndexOf('/');

    $('#sidebar a').each(function(i, a){
        a.href = urlPre + a.href.substring(locationUrlPreLength);
    });

});
</script>
@stop