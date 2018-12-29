<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
</head>   
<body>
       ユーザ情報更新画面
 <form action="{{ url('user/updateexecute')}}" method="POST">      
<form action="" method="POST">
<div class="form-group"> 
  <label for="amount" class="col-sm-3 control-label">名前</label> 
  <input type="text" name="name" value="{{$user->name}}">

  </div> 
<div class="form-group"> 
  <label for="name" class="col-sm-3 control-label">メール</label> 
  <input type="text" name="email" value="<?php echo htmlspecialchars($user->email); ?>">
  </div> 
<div class="form-group"> 
  <label for="password" class="col-sm-3 control-label">パスワード</label> 
  <input type="text" name="password" value="<?php echo htmlspecialchars($user->password); ?>">
  </div> 
  
  <div class="well well-sm"> 
    <button type="submit" class="btn btn-primary">Save</button>
    
    
</div> 



  <!-- id 値 を 送信 --> 
<input type="hidden" name="id" value="{{$user->id}}" /> 
<!--/ id 値 を 送信 --> 
  
  <!-- value値がフォームの値として送られていく --> 
  <!-- idは他の処理で使う用、valueは内容物、nameは識別用--> 
  
  
{{csrf_field()}} 

</form>
  
</body>
</html>