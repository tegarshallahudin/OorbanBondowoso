<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.backend.header')
</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
    @include('layouts.backend.navbar')
    @include('layouts.backend.sidebar')
    @yield('content')
    @include('layouts.backend.footer')
