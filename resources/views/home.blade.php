
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

<a href='/auth/reset'>forgot password!</a>




 <form action="{{ url('edit/'.\Auth::user()->id)}}" method="POST"> 
{{csrf_field()}} 
<button type="submit" class="btn btn-primary">
  <?php

$id = \Auth::user()->id;

var_dump($id);

?>
<input type="hidden" name="id" value="{{ $id }}"> 


<i class="glyphicon glyphicon-pencil"></i> 更新 </button> 
</form> </td>

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
  <a href="/auth/login"><button class="btn btn-default">Log in</button></a>
    
  
  @endif
  
@endsection


 
