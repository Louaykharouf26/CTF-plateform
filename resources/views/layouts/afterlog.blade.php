<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>CTF plateform </title>
        <link rel="icon" type="image/png" href="/img/CTF.png" />
        <link href="/css/main.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href='https://fonts.googleapis.com/css?family=Cairo' rel='stylesheet'>
</head>
<body>
<nav class="navbar navbar-expand-lg navigation navbar-light ">
  <div class="container-fluid">
    <a class=" logo" href="{{ url('/') }}"><i class="fa fa-flag" aria-hidden="true"></i>CTF</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="#">Rules</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/userlist') }}">Users</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/teamslist') }}">Teams</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Scoreboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/challenges') }}">Challenges</a>
        </li>
      </ul>
      <div class="d-flex">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
          <a class="nav-link" href="{{ url('/TeamProfile') }}"><i class="fa fa-users" aria-hidden="true"></i>Team</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/profile') }}"><i class="fa fa-user" aria-hidden="true"></i>Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('logout') }}"><i class="fa fa-sign-out" aria-hidden="true"></i></a>
        </li>
      </ul>
      </div>
    </div>
  </div>
</nav>
    @yield('signin')
    @yield('content')
    @yield('challenges')
    @yield('TeamProfile')
</body>