
@extends('layouts.app') 

@section('content') 

@if(Auth::check())


<br>

<div class="center jumbotron"> 
こんにちは！

<br>

プロフィール：
<br>
メールアドレス→{{ \Auth::user()->email }}
<br>
名前→{{ \Auth::user()->name }}

<br>
<br>
<br>
<a href="/auth/logout">ログアウト</a>



  @else
  <h1>Welcome to the Sample App</h1>


  <h2>
    This is the home page for the
    <a href="https://railstutorial.jp/">Ruby on Rails Tutorial</a>
    sample application.
  </h2>
  <br>
  <br>
  <a href="/auth/register"><button class="btn btn-default">Sign up!!</button></a>
  <a href='/auth/login'><button class="btn btn-default">Log in</button></a>
    
  
  @endif
  
@endsection


 
