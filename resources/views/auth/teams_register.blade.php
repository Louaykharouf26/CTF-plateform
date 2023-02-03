<!--<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset=UTF-8>
  <meta name=viewport content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Admin</title>
</head>
<body>-->
@extends('layouts.plateformlayout')
@section('teamcreate')
<p class="register ">Create a Team</p>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
           
                <p class=" typewriter">{{ __('Here you can Create a Team') }}</p>

                
                    <form method="POST" action="{{ route('teams.register.create') }}">
                        @csrf

                        <div class="row mb-3">
              

                            <div class="col-md-6">
                                <input id="name" type="text" placeholder="Teamname" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">

                            <div class="col-md-6">
                                <input id="university" type="text" placeholder="University (optional)" class="form-control " name="university" value="{{ old('university') }}"  autocomplete="name" autofocus>
                            </div>
                        </div>
                        <div class="row mb-3">

                            <div class="col-md-6">
                                <input id="city" type="text" placeholder="City (optional)" class="form-control " name="city" value="{{ old('city') }}"  autocomplete="name" autofocus>
                            </div>
                        </div>

                      <!--  <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
-->
                        <div class="row mb-3">

                            <div class="col-md-6">
                                <input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">

                            <div class="col-md-6">
                                <input id="password-confirm" placeholder="Confirm Password" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary bouton1">
                                    {{ __('Create Team') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection
<!--</body>
</html>-->