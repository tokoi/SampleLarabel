<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <title>| Ruby on Rails Tutorial Sample App</title>
    
    {{csrf_field()}}
    
        

<!-- CSS と JavaScript --> 

<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<style>
    
h1 {
    text-align: center;
}

form {
    
    text-align: center; 
    
}


ul li{
    
    list-style: none;
    


}

    label {

    width:200px;
  
    }

email{
    
      float: left;
}

pass{
    
    float: left;
}
    
</style>



</head>
<body>
    
    <header class="navbar navbar-fixed-top navbar-inverse">
        
        <div class="container">
            
            <a href="https://railstutorial.jp/">sample app</a>
             <div class="container">
                 <nav>
                     <ul class="nav navbar-nav navbar-right">
                 <li><a href="https://railstutorial.jp/">home</a></li>
                  <li><a href="https://railstutorial.jp/">help</a></li>
                  <li><a href="https://railstutorial.jp/">login</a></li>
                     </ul>
                 </nav>
                 
             </div>
  
        </div>

    </header>
      <div class="a"><h1>LOG IN</h1></div>
      <br>
      <br>
      <form name="loginform" action="/auth/login" method="post">
        <ul class="form">
               {{ csrf_field() }}
  
        <li class="email">メールアドレス:<br><input type="text" name="email" size="30" value="{{ old('email') }}"><br /></li>
        <li class="pass">パスワード:<br><input type="password" name="password" size="30"><br /></li>
        <li><button type="submit" name="action" value="send">ログイン</button></li>       
       </ul>
     <br>
     
  
      
    </form>
     
    
     
   
       
       
  
</body>
</html>