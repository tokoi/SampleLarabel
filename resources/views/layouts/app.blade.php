<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <title>| Ruby on Rails Tutorial Sample App</title>
    
    {{csrf_field()}}
    
        

<!-- CSS と JavaScript --> 

<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>





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
            
            
            
            @yield('content') 
            
        </div>
        
        
        
        
    </header>
  
</body>
</html>