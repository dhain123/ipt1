@extends('base')

@section('content')

<style>
    body{
        background: url(blackmirror.jpg);
        overflow: hidden;
        
    }
</style>
<div class = "container">
<div class="row">
    <div class="col-md-4 offset-md-4">
        
            <div class="card-header bg-dark bg-dark text-white">
                <h3 class="card-title">User Login</h3>
            </div>
            <div class="card-body text-white">
                <form action="{{url('/login')}}" method="post">
                    {{csrf_field()}}
                    <div class="mb-3">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control">
                    </div>
                   
                    <button class="btn btn-dark bg-gradient" type="submit">Login</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>


@stop