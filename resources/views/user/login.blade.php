<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="Datartisan">
    <meta name="author" content="Datartisan">
    <link rel="icon" href="favicon.ico">

    <title>Teamwork | Datartisan</title>

    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/app.css" rel="stylesheet">

    @yield('css')

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="/js/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="/js/libs/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  	<div class="container">

<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Datartisan Teamwork - 登录</div>
				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> 用户名或密码错误！
							<!--
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
							-->
						</div>
					@endif

					<form class="form-horizontal" role="form" method="POST" action="{{ url('/user/login') }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							<label class="col-md-3 control-label">邮箱</label>
							<div class="col-md-6">
							<div class="input-group">
								<input type="text" class="form-control" name="username" value="{{ old('username') }}">
								<div class="input-group-addon">@datartisan.com</div>
							</div>
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-3 control-label">密码</label>
							<div class="col-md-6">
								<input type="password" class="form-control" name="password">
							</div>
						</div>


						<div class="form-group">
							<div class="col-md-6 col-md-offset-3">
								<button type="submit" class="btn btn-primary">登录</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/js/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="/js/libs/ie10-viewport-bug-workaround.js"></script>

    <script src="/js/app.js"></script>
    @yield('js')
  </body>
</html>
