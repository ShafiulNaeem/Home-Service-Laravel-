<div class="panel-body">
    @if (session('status'))
        <div class="alert alert-success">
                <strong style="">{{ session('status') }}</strong>
        </div>
            @elseif(session('deleted'))
                <div class="alert alert-danger">
                        <strong style="">{{ session('deleted') }}</strong>
                </div>
    @endif


</div>
