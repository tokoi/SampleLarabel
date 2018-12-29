<html>
    <head>
        <meta charset='utf-8'>
        
    </head>
    
    <body>
        <h1>パスワードリセットフォーム</h1>
        
        <form name="registform" action="/auth/register" method="post">
        
        {{csrf_field()}}
     
     メールアドレス:<input type="text" name="email" size="30"><span>{{ $errors->first('email') }}</span><br />
     <button type='submit' name="action" value="send">送信</button>        
    

    </form>
    </body>
    
    
</html>