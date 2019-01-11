<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="">
  <meta name="keyword" content="">
  <meta name="author" content="Jhon James Montaño ">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Admin-Links</title>

  <title>Laravel</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
<link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
<link href="{{asset('css/app.css')}}" rel="stylesheet">

</head>
<body>
  <div id="VueApp" class="container">
      <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">  <router-link :to="{name:'DashBoard'}" class="linkExactActiveClass"> Crear Link   </router-link>   </li>
          <li class="nav-item ">  <router-link :to="{name:'Listar'}" > &nbsp; &nbsp; &nbsp; Listado   </router-link>   </li>
        </ul>



      </div>
    </nav>

    <router-view>
    </router-view>
  </div>

<script src="{{ asset('js/jquery331.js') }}"></script>
<script src="{{ asset('js/bootstrap.popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ mix('js/Vue-App.js') }}"></script>
<script src="{{ mix('js/app.js') }}"></script>

</body>
</html>
