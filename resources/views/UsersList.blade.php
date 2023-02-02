@extends('layouts.plateformlayout')
@section('userlist')
<p class="register ">Users</p>

     
      <div class="card-body pb-0">
      <table class="table table-borderless">
      <thead>
                      <tr>
                        <th scope="col">Rank</th>
                        <th scope="col">Name</th>   
                        <th scope="col">Score</th>
                      </tr>
                      <tbody>
                      @foreach($userlist as $user)
                      <tr>
                      <td class="fw-bold">{{$user->rank}}</td>
                      <td >{{$user->name}}</td>
                      <td >{{$user->score}}</td>
                      </tr>
                      @endforeach
                      </tbody>
                    </thead>
      </table>
      
      </div>

@endsection