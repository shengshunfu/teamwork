@extends('layout')

@section('css')
<style type="text/css">
#sidebar ul {
    list-style: none;
    padding: 0;
}

#sidebar ul li {
    padding: 8px 10px;
}

#sidebar ul li p {
    margin: 0;
}

#document {
    padding: 0 30px;
}

</style>
@stop

@section('content')

<div class="row">
    <div id="sidebar" class="col-sm-3 well well-sm">
        {!! $sidebarNavHtml !!}
    </div>

    <div id="document" class="col-sm-9">
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