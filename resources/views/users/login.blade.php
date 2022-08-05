@extends('users.layout')
@section('content')
<div class="card">
    <div class="card-header"></div>
    <div class="card-body">

        <h1 class="mb-5">Login</h1>
        <form action="{{ url('user/register') }}" method="get">
            {!! csrf_field() !!}
            <label>Email</label></br>
            <input type="text" name="email" id="email" class="form-control"></br>
            <label>Password</label></br>
            <input type="password" name="password" id="password" class="form-control"></br>

            <input type="submit" value="Login" class="btn btn-success"></br>
        </form>

    </div>
</div>
@stop