<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admindashboard</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="login.css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script>
    var room = 1;
function education_fields() {
 
    room++;
    var objTo = document.getElementById('education_fields')
    var divtest = document.createElement("div");
	divtest.setAttribute("class", "form-group removeclass"+room);
	var rdiv = 'removeclass'+room;
    divtest.innerHTML = '<div class="col-sm-3 nopadding"><div class="form-group"> <input type="text" class="form-control" id="Name" name="Name[]" value="" placeholder="Name of the employee" required></div></div><div class="col-sm-3 nopadding"><div class="form-group"> <input type="text" class="form-control" id="Email" name="Email[]" value="" placeholder="Email" required></div></div><div class="col-sm-3 nopadding"><div class="form-group"> <input type="text" class="form-control" id="Phone Number" name="Phone Number[]" value="" placeholder="Phone Number" required></div></div><div class="col-sm-3 nopadding"><div class="form-group"><input type="text" class="form-control" id="Address" name="Address[]" value="" placeholder="Address" required></div></div><div class="col-sm-3 nopadding"><div class="form-group"><input type="date" class="form-control" id="Date of joining" name="Dateofjoining[]" value="" /></div></div><div class="col-sm-3 nopadding"><div class="form-group"><input type="date" class="form-control" id="Date of Birth" name="DOB[]" value="DOB"></div></div><div class="col-sm-3 nopadding"><div class="form-group"><input type="text" class="form-control" id="Religion" name="Religion[]" value="" placeholder="Religion" required></div></div><div class="col-sm-3 nopadding"><div class="form-group"><input type="text" class="form-control" id="Reference" name="Reference[]" value="" placeholder="Reference" required></div></div><div class="col-sm-3 nopadding"><div class="form-group"><div class="input-group"> <div class="input-group-btn"> <button class="btn btn-danger" type="button" onclick="remove_education_fields('+ room +');"> <span class="glyphicon glyphicon-minus" aria-hidden="true"></span> </button></div></div></div></div><div class="clear"></div><br><br><br><br><br><br><br><br>';
    
    objTo.appendChild(divtest)
}
   function remove_education_fields(rid) {
	   $('.removeclass'+rid).remove();
   }
    
    
    </script>
</head>

<body>
<div class="panel panel-default">
  <!--<div class="panel-heading">Add Employees</div>-->

    <?php
   include('navbar.php');
    
    ?>
    
        
    
<div class="panel-body">
  
  <div id="education_fields">
          
        </div>
      <form> 
       <div class="col-sm-3 nopadding">
  <div class="form-group">
    <input type="text" class="form-control" id="Name" name="Name[]" value="" placeholder="Name of the employee" required>
  </div>
</div>
<div class="col-sm-3 nopadding">
  <div class="form-group">
    <input type="text" class="form-control" id="Email" name="Email[]" value="" placeholder="Email" required>
  </div>
</div>
<div class="col-sm-3 nopadding">
  <div class="form-group">
    <input type="text" class="form-control" id="Phone Number" name="Phone Number[]" value="" placeholder="Phone Number" required>
  </div>
</div>
<div class="col-sm-3 nopadding">
  <div class="form-group">
    <input type="text" class="form-control" id="Address" name="Address[]" value="" placeholder="Address" required>
  </div>
</div>
<div class="col-sm-3 nopadding">
  <div class="form-group">
    <input type="date" class="form-control" id="Date of joining" name="Dateofjoining[]" value="<?php date_default_timezone_set('Asia/Kolkata');
$date1= date("Y-m-d"); 
$_SESSION['DATE']=$date1;
echo $date1;
?>" />
  </div>
</div>
<div class="col-sm-3 nopadding">
  <div class="form-group">
    <input type="date" class="form-control" id="Date of Birth" name="DOB[]" value="DOB">
  </div>
</div>
<div class="col-sm-3 nopadding">
  <div class="form-group">
    <input type="text" class="form-control" id="Religion" name="Religion[]" value="" placeholder="Religion" required>
  </div>
</div>
<div class="col-sm-3 nopadding">
  <div class="form-group">
    <input type="text" class="form-control" id="Reference" name="Reference[]" value="" placeholder="Reference" required>
  </div>
</div>
<div class="col-sm-3 nopadding">
  <div class="form-group">
    <div class="input-group">
        
     <!-- <select class="form-control" id="educationDate" name="educationDate[]">
      
        <option value="">Date</option>
        <option value="2015">2015</option>
        <option value="2016">2016</option>
        <option value="2017">2017</option>
        <option value="2018">2018</option>
      </select>-->
      <div class="input-group-btn">
        <a class="btn btn-success" type="button"  onclick="education_fields();"> <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> </a>
      </div>
    </div>
  </div>
</div>
          <div class="form-group">
                                    <input type="submit"    name="submit" class="form-control btn btn-primary "/>
                                </div> 
      </form>
<div class="clear"></div>
  
  </div>
    
</div>   
    
</body>
</html>


