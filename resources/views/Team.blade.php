@extends('layouts.plateformlayout')
@section('TeamsList')
<p class="register ">Teams</p>

     
      <div class="card-body pb-0">
      <table class="table table-borderless">
      <thead>
                      <tr>
                        <th scope="col">Rank</th>
                        <th scope="col">Team Name</th>   
                        <th scope="col">University</th>
                        <th scope="col">City</th>
                        <th scope="col">Score</th>
                      </tr>
                      <tbody>
                      @foreach($teamlist as $teams)
                      <tr>
                      <td class="fw-bold">1</td>
                      <td >{{$teams->teamname}}</td>
                      <td >{{$teams->university}}</td>
                      <td >{{$teams->city}}</td>
                      <td >{{$teams->score}}</td>
                      </tr>
                      @endforeach
                      </tbody>
                    </thead>
      </table>
      
      </div>

@endsection