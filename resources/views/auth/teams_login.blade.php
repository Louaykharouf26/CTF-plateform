<!--<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset=UTF-8>
  <meta name=viewport content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Teams</title>
</head>
<body>-->
@extends('layouts.plateformlayout')
@section('teamjoin')
<p class="register ">Join A Team </p>
    <div class="container">
      <div class="row justify-content-center mt-4">
          <div class="col-md-4">
            
                <form id="sign_in_adm" method="POST" action="{{ route('teams.login.submit') }}">
                  {{ csrf_field() }}
                <h1 class="typewriter">Login to Join a Team </h1>
                <div >
                  <input id="name" type="text" name=email class="form-control" placeholder="TeamName"  required autofocus>
                </div>
                @if ($errors->has('email'))
                <span ><strong>{{ $errors->first('email') }}</strong></span>
                @endif
                <br>
                <div >
                  <input id="password" type="password" name="password" class="form-control" required>
                </div>
                <br>
                <div >
                  <button type="submit" class="btn btn-primary bouton2">Join Team</button>
                </div>
                </form>
              </div>
            </div>
          </div>
      </div>
    </div>

    @endsection
    <!--
</body>
</html>-->