@if(session('success'))
    <span class="alert alert-success">{{session('success')}}</span>
@endif
@if(session('failed'))
    <span class="alert alert-danger">{{session('failed')}}</span>
@endif
