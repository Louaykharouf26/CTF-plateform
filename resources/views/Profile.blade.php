@extends('layouts.afterlog')
@section('signin')
<div class="register ">
  @if (Auth::check())
  {{ Auth::user()->name }}<br>
 <a class="team" href="{{ url('/TeamProfile') }}"> {{ \App\Models\Teams::find(Auth::user()->team_id)->teamname }} </a><br>
  {{Auth::user()->rank}} th place<br>
  {{Auth::user()->score}} points
@endif
</div>



@endsection