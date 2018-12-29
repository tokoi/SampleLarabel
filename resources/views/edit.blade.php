<!DOCTYPE html>
<html lang="en">
<head>


</head>

<body>
    
    <h1>Update Your Profile</h1>
    
  <form action="{{ url('edit/edit')}}" method="POST">
    
    <!-- item_name --> 
    <div class="form-group"> 
    <label for="name">ユーザ</label>
    
    <input type="text" id="user_name" name="user_name" 
class="form-control" value="{{$use->name}}"> </div> 

    </form>


</body>


