@if(session()->has('success'))
    <div class="alert alert-success">{{session()->get('success')}}</div>
@endif
@if(session()->has('error'))
    <div class="alert alert-danger">{{session()->get('error')}}</div>
@endif
@if (session()->get('user-verify'))
    <div class="alert alert-dark text-center mb-0">Please confirm your email</div>
@endif
