@extends('layouts.afterlog')

@section('content')
<p class="register ">Create Or Join A Team </p>
<div class="container">
    <div class="row justify-content-center">
<p class="cjteam">
    Join a team if you already have or create a new team 
</p>
<div class="boutons">
<a class="btn btn-primary" href="{{url('/teams/login')}}" role="button">Join a Team</a>
<a class="btn btn-primary" href="{{url('/teams/register')}}" role="button">Create a Team</a>
</dic>
    </div>
</div>
@endsection
