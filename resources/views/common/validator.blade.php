@if (count($errors))
<div class="alert alert-danger">
  <ul>
  	  @foreach ($errors->all() as $error)
  	     <li> {{$error}} </li>
  	  @endforeach
  </ul>
</div>

@endif


        <!-- <li>姓名不能为空</li>
        <li>年龄只能为整数</li>
        <li>请选择性别</li>
 -->
