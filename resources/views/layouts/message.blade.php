@if(count($errors) > 0)
    @foreach($errors->all() as $error)
        <div class="alert alert-danger">
            {{$error}}
        </div>
    @endforeach

@endif

@if(session('deny') )

<div class="mx-3 my-4 alert alert-danger  ">

    {{session('deny')}}

</div>

@endif

@if(session('approved') )

<div class="alert alert-success mx-3 my-4">
    {{session('approved')}}
</div>

@endif

@if(session('pending') )

<div class="alert alert-warning mx-3 my-4">
    {{session('pending')}}
</div>

@endif
