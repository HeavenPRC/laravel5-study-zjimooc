@extends('common.layouts')

<!-- 重写区块 -->
@section('content')
          @include('common.message')
          <!-- 自定义内容区域 -->
            <div class="panel panel-default">
                <div class="panel-heading"><i class="fa fa-fw fa-users"></i> 学生列表</div>
                <table class="table table-responsive table-hover">
                    <tr>
                        <th>ID</th>
                        <th>姓名</th>
                        <th>性别</th>
                        <th>年龄</th>
                        <th>操作</th>
                    </tr>
                    <tr>
                        <td>1001</td>
                        <td>欧阳锋</td>
                        <td>男</td>
                        <td>18</td>
                        <td>
                            <a href="">详情</a>
                            <a href="">修改</a>
                            <a href="">删除</a>
                        </td>
                    </tr>
                    <tr>
                        <td>1001</td>
                        <td>欧阳锋</td>
                        <td>男</td>
                        <td>18</td>
                        <td>
                            <a href="">详情</a>
                            <a href="">修改</a>
                            <a href="">删除</a>
                        </td>
                    </tr>
                    <tr>
                        <td>1001</td>
                        <td>欧阳锋</td>
                        <td>男</td>
                        <td>18</td>
                        <td>
                            <a href="">详情</a>
                            <a href="">修改</a>
                            <a href="">删除</a>
                        </td>
                    </tr>
                </table>

            </div>

            <!-- 分页 -->
            <nav aria-label="..." class="pull-right">
                <ul class="pagination pagination-sm">
                    <li>
                    	<a href="#" aria-label="Previous">
                    		<span aria-hidden="true">&laquo;</span></a>
                    	</li>
                    <li class="active"><a href="#">1 </a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li>
                    	<a href="#" aria-label="Next">
                    		<span aria-hidden="true">&raquo;</span>
                    	</a>
                    </li>
                </ul>
            </nav>
@stop