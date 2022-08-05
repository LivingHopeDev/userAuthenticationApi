@extends('users.layout')
@section('content')
<div class="card">
    <div class="card-header">Edit user</div>
    <div class="card-body">

        <form action="{{ url('user/update' ) }}" method="post">
            {!! csrf_field() !!}
            @method("PATCH")
            <input type="hidden" name="id" id="id" id="id" />
            <label>Name</label></br>
            <input type="text" name="name" id="name" class="form-control"></br>
            <label>Email</label></br>
            <input type="text" name="email" id="email" class="form-control"></br>
            <label>Phone</label></br>
            <input type="text" name="phone" id="phone" class="form-control"></br>
            <input type="submit" value="Update" class="btn btn-success"></br>
        </form>

    </div>
</div>
@stop