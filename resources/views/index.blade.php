@extends('layouts.home')

@section('navbar')
  <x-navbar status="active"/>
@endsection

@section('content')

  <h1 class="cover-heading">Welcome</h1>
  <p class="lead">
    Greetings,<br>
      <span id="typed"></span>
  </p>

  <p class="lead">
    <a href="#instagram" class="btn btn-lg btn-secondary" data-toggle="modal" data-target="#instagram">
      <img src="/img/icons/instagram.svg" alt="" width="32" height="32" title="instagram">
    </a>
    <a href="https://www.linkedin.com/in/ucky/" class="btn btn-lg btn-secondary" target="_blank">
      <img src="/img/icons/linkedin.png" alt="" width="36" height="32" title="linkedin">
    </a>
    <a href="#formquestion" class="btn btn-lg btn-secondary" data-toggle="modal" data-target="#formquestion">
      <img src="/img/icons/personal.svg" alt="" width="32" height="32" title="personal">
    </a>
  </p>

  <x-modal />
  <x-instagram />
  
@endsection