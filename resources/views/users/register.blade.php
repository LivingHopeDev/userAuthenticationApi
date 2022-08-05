@extends('users.layout')
@section('content')
<div class="card">
    <div class="card-header"></div>
    <div class="card-body">

        <h1 class="mb-5">Register</h1>

        <form action="{{ url('/api/user/create') }}" method="post">
            {!! csrf_field() !!}
            <label>Name</label></br>
            <input type="text" name="name" id="name" class="form-control"></br>
            <label>Email</label></br>
            <input type="text" name="email" id="email" class="form-control"></br>
            <label>Password</label></br>
            <input type="password" name="password" id="password" class="form-control"></br>
            <label>Confirm Password</label></br>
            <input type="password" name="confirm-password" id="confirm-password" class="form-control"></br>
            <input type="submit" value="Register" class="btn btn-success"></br></br>




        </form>

    </div>
</div>
@stop