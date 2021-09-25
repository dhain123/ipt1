@extends('base')

@section('content')
<style>
    body{
        background: url(blackmirror.jpg);
    }
    </style>
<div class = "container">
<div class="row">
    <div class="col-md-4 offset-md-4">
       
            <div class="bg-dark bg-gradient text-white">
                <h3 class="title">User Registration</h3>
            </div>
            <div class="card-body text-white">
                <form action="{{url('/register')}}" method="post">
                    {{csrf_field()}}
                    <div class="mb-3">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="phone_number">Phone Number</label>
                        <input type="phone_number" name="phone_number" placeholder="63...." id="phone_number" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control">
                    </div>
                    <button class="btn btn-dark bg-gradient" type="submit">Register</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>


@stop