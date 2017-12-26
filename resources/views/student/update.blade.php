@extends('common.layouts')

<!-- 重写区块 -->
@section('content')

        <!-- 右侧内容区域 -->
        <div class="col-md-9">

            @include('common/validator')

            <!-- 自定义内容区域 -->
            <div class="panel panel-default">
                <div class="panel-heading">修改信息</div>
                <div class="panel-body">
                    @include('student._form')
                </div>
            </div>

        </div>
@stop