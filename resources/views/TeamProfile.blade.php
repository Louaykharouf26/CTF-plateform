@extends('layouts.afterlog')
@section('TeamProfile')
<p class="register ">
  @if (Auth::check())
  {{ \App\Models\Teams::find(Auth::user()->team_id)->teamname }} <br>
  {{ \App\Models\Teams::find(Auth::user()->team_id)->rank }}th place <br>
  {{ \App\Models\Teams::find(Auth::user()->team_id)->score }} points <br>
@endif
</p>
<div class="container">
Members
@if (Auth::check())
<table class="table table-borderless">
      <thead>
                      <tr>
                        <th scope="col" class="fw-bold">User Name</th>
                         
                        <th scope="col">Score </th>
                      </tr>
                      <tbody>
                      @foreach (\App\Models\User::where('team_id', Auth::user()->team_id)->get() as $user)
                      <tr>
                      <td >{{$user->name}}</td>
                      <td >{{$user->score}}</td>
                      </tr>
                      @endforeach
                      </tbody>
                    </thead>
      </table>
@endif
</div>



@endsection