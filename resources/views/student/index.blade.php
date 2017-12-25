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
                        <th>生成时间</th>
                        <th>操作</th>
                    </tr>
                @foreach($students as $student)
                    <tr>
                        <td>{{$student->id}}</td>
                        <td>{{$student->name}}</td>
                        <td>{{$student->sex($student->sex)}}</td>
                        <td>{{$student->age}}</td>
                        <td>{{date('Y-m-d H:i:s',$student->created_at)}}</td>
                        <td>
                            <a href="">详情</a>
                            <a href="">修改</a>
                            <a href="">删除</a>
                        </td>
                    </tr>
                @endforeach
                </table>

            </div>

            <!-- 分页 -->
            <div class="pull-right">
               {{ $students->render() }}
            </div>

@stop