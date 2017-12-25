 @if (Session::has('success'))
        <!-- 成功提示框 -->
        <div class="alert alert-success alert-dismissible fade in" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>成功!</strong> {{Session::get('success')}}
        </div>
@elseif (Session::has('error'))
    <!-- 失败提示框 -->
    <div class="alert alert-danger alert-dismissible fade in" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong>失败!</strong> 操作失败提示！
    </div>
@endif