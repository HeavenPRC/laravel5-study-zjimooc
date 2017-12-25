<!-- common下放页面布局文件 -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Laravel入门 -@yield('title')</title>

	<link rel="stylesheet" type="text/css" href="{{asset('static/bootstrap/bootstrap.min.css')}}">
	@section('style')

	@show
</head>
<body>
<!-- 头部 -->
@section('header')
  <div class="jumbotron">
  	  <div class="container">
  	  	  <h2>Laravel学习进行时</h2>

  	  	  <p>-laravel表单模块-</p>
  	  </div>
  </div>
@show
<!-- 中间内容区域 -->
<div class="container">
	<div class="row">

         <!-- 左侧菜单域 -->
        <div class="col-md-3">
            <div class="list-group">
                <a href="#" class="list-group-item active">
                    <i class="fa fa-fw fa-users"></i> 学生列表
                </a>
                <a href="#" class="list-group-item">
                    <i class="fa fa-fw fa-plus"></i> 新增学生
                </a>
            </div>
        </div>

         <!-- 右侧内容区域 -->
         <div class="col-md-9">


             @yield('content')


         </div>
	</div>
</div>

<!-- 尾部 -->
@section('footer')
	<footer class="container-fluid">
	    <i class="fa fa-fw fa-copyright"></i> 2017 imooc
	</footer>
@show
<!-- jQuery文件 -->
<script type="text/javascript" src="{{ asset('static/jQuery/jquery-1.12.4.min.js') }}"></script>
<!-- Bootstrap JavaScript 文件 -->
<script type="text/javascript" src="{{ asset('static/bootstrap/bootstrap.min.js')}}"></script>

@section('javascript')
@show

</body>
</html>