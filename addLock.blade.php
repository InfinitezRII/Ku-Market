<!DOCTYPE html>
<html>
<head>
  <title>Add Lock</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>

  <!-- Fonts -->
  <link rel="dns-prefetch" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.css" rel="stylesheet">
  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
<style>

body {font-family: Arial;
  background-color: #ffffff;
}
.ui.celled.table
{
  border-collapse: collapse;
  width: 100%;
  height: 50;
}
.ui.celled.table, .ptd, .pth,.ptr {
  padding: 5px;
}
.pth,.ptd {text-align: left;
  width: 30%;
  padding: 15px;
}
.center {text-align: center;
}
</style>
</head>
<body>


  <div class="ui segment">
    <img width="100%" src="<?php echo asset('img/02.gif'); ?>">
        <main class="py-4">

                <div class="ui green inverted huge menu">
            <div class="header item">
              KU SRC Night Market
          </div>
          <a class="item" href='settime'>
            ตั้งเวลา
          </a>
          <a class="item" href='print'>
            พิมพ์รายงาน
          </a>
          <a class="item" href='add'>
            เพิ่มรายชื่อ
          </a>
          <a class="item" href='addAdmin'>
            เพิ่มผู้ดูแลระบบ
          </a>
          <a class="item" href='addLock'>
            เพิ่มล็อกว่าง
          </a>
          <a class="item" href='edit'>
            แก้ไขรายชื่อ
          </a>
          <a class="item" href='ban'>
            รายชื่อผู้ถูกระงับ
          </a>

          <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>

                        @else
                            <li>


                                <div class="ui item" aria-labelledby="navbarDropdown">
                                     <a>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <a class="ui green button" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('ออกจากระบบ') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
            </div>
        </main>


@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}
</div><br />
  @endif

    <form method="post" action="{{ route('addLock.store') }}">
        @csrf

        <div class="form-group row">
            <label for="lock" class="col-md-4 col-form-label text-md-right">{{ __('ล๊อกที่') }}</label>

            <div class="col-md-6">
                <input id="lock" type="text" class="form-control{{ $errors->has('lock') ? ' is-invalid' : '' }}" name="lock" value="{{ old('lock') }}" required autofocus>

                @if ($errors->has('lock'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('lock') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('เพิ่มล๊อกว่าง') }}
                </button>
            </div>
        </div>
    </form>

<div>
@endsection
