
@extends('layouts.app') 

@section('content') 

<div class="center jumbotron"> 
@if(Auth::check())
<h1>Welcome to the Sample App</h1>


  <h2>
    This is the home page for the
    <a href="https://railstutorial.jp/">Ruby on Rails Tutorial</a>
    sample application.
  </h2>
  
 <a href='/auth/login'><button class="btn btn-default">Log in</button></a>
    
  <!--<p><a href='http://rubyonrails.org'><img src="/mypage/resources/picture/btn027_05.gif" alt=""></a></p>-->

  @else
  <h1>Welcome to the Sample App</h1>


  <h2>
    This is the home page for the
    <a href="https://railstutorial.jp/">Ruby on Rails Tutorial</a>
    sample application.
  </h2>
  <a href="/auth/register">Sign up!!</a>
  @endif
  
@endsection


 
