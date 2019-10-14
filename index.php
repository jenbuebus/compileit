<!DOCTYPE html>
<html>
<head>
  
    
        <meta charset="utf-8">
        <!DOCTYPE html>
<style>
td.bg
{
	background-image: url(r.jpg);
	no-repeat center center fixed;
  -webkit-background-size: 100%;
  -moz-background-size: 100%;
  -o-background-size: 100%;
  background-size: 100%;"
}
</style>
</head>
<body>
	
<center>
<table width="85%" style="background-color: White;">

<tr>


<tr width = "100%">
	<td style="font-family: Tahoma; font-size:190%; font-weight:bold; width:100%; height:10%;
	  color:white; 
	  text-align: center;
	  background-color: #C0C0C0;">
	  <text style="display: block; color: Black;
	  text-align: left;
	  padding:2.5%">
			<h3>Compile Now!</h3>
			</td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			
	  </text></td>
</tr>
<tr width = "100%" height="20%"><td></td>
</tr>
  </center>
</table>
<br>


        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="icon" type="image/png" href="img/ruet.png">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
        <script src="js/vendor/jquery-1.12.0.min.js"></script>








<center>

<div class="col-sm-1">

</div>

<div class="col-sm-1">
  
</div>

</div>




<div class="row cspace">
<div class="col-sm-8">
<div class="form-group">
<form action="compile.php" id="form" name="f2" method="POST" >
<label for="lang">Choose Language</label>

<select class="form-control" name="language">
<option value="c">C</option>
<option value="cpp">C++</option>
<option value="java">Java</option>


</select><br><br>

<label for="ta">Write Your Code</label>
<textarea class="form-control" name="code" rows="10" cols="50"></textarea><br><br>
<label for="out">Output</label>
<textarea id='div' class="form-control" name="output" rows="10" cols="50"></textarea><br><br>

<input type="submit" id="st" class="btn btn-success" value="Run Code"><br><br><br>


</form>

<script type="text/javascript">
  
  $(document).ready(function(){

     $("#st").click(function(){
  
           $("#div").html("Loading ......");


     });

  });


</script>

<script>
//wait for page load to initialize script
$(document).ready(function(){
    //listen for form submission
    $('form').on('submit', function(e){
      //prevent form from submitting and leaving page
      e.preventDefault();

      // AJAX 
      $.ajax({
            type: "POST", //type of submit
            cache: false, //important or else you might get wrong data returned to you
            url: "compile.php", //destination
            datatype: "html", //expected data format from process.php
            data: $('form').serialize(), //target your form's data and serialize for a POST
            success: function(result) { // data is the var which holds the output of your process.php

                // locate the div with #result and fill it with returned data from process.php
                $('#div').html(result);
            }
        });
    });
});
</script>
</center>
<center>
<table width="85%" style="background-color: #C0C0C0;">
<tr width = "100%">
	<td style="font-family: Tahoma; font-size:190%; font-weight:bold; width:100%; height:10%;
	  color:white; 
	  text-align: center;
	  background-color: #C0C0C0;">
	  <text style="display: block; color: Black;
	  text-align: left;
	  padding:2.5%">
	<text style="text-align: left; display: block; color:Black; ">
	 <center><h4>All rights reserved 2019 <br>
	  Philippines</h4>
	  </text></td>
</tr>
<tr width = "100%" height="20%"><td></td>
</tr>
</center>
</table>
</body>
</html>


