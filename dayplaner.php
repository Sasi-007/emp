<?php
include("employee.php");
?>
<!DOCTYPE html>
<html lang="">
<head>
   <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script
  src="https://code.jquery.com/jquery-3.4.1.slim.js"
  integrity="sha256-BTlTdQO9/fascB1drekrDVkaKd9PkwBymMlHOiG+qLI="
  crossorigin="anonymous"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="style.css">
    <title>Day Planner</title>
</head>

<body>
   	<div class="w3-main" style="margin-left:300px;margin-top:20px;">
       <div class="row">
       <div class="col-sm-2">
        <button type="submit" data-toggle="collapse" name="task" class="btn btn-primary" data-target="#demo">Today's Task</button>
        </div>
        <div class="col-sm-2">
            <button style="border-radius: 12%;" type="button" class="btn btn-primary">Completion</button>
        </div>
        <div class="col-sm-2">
            <button type="button" class="btn btn-primary">Done</button>
        </div>
        <div class="col-sm-2">
            <button type="button" class="btn btn-primary">Remaining</button>
        </div>                 
        <div class="col-sm-2">
            <button type="button" class="btn btn-primary">Pending</button>
        </div>
    </div>
    <div id="demo" class="collapse">
    <center>Today's Task</center>
    <div class="row" style="padding-top:20px">
    <div class="col-sm-8" id="demo">
      <form class="form-group" method="post" action="">
     <input class="form-control"  type="text" name="text">
        </form>        
    </div>
    </div>
        </div>
 </div>
 <footer>
     <button class="btn btn-primary" style="postion:relative;margin-top:600px;margin-left:1455px;"><i class="fas fa-plus-circle fa-3x"></i></button>
    </footer>
</body>
</html>
