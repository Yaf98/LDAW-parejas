@if(session('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
    <button class="btn btn-primary"></button>
@endif


@if(session('warning'))
    <div class="alert alert-sucess" role="alert">
        {{session('warning')}}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-sucess" role="alert">
        {{session('error')}}
    </div>
@endif