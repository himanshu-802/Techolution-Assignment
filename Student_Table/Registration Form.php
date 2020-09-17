<!DOCTYPE html>
<html>
<head>
	<?php
         include 'Links/links.php';
         ?>
	<meta charset="utf-8">
	<meta name="viewport" content="width-device-width">
	<title>
		Registration form
	</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="form-validation.js"></script>
</head>

<body  onload="document.registration.first.focus();">
<form name ='registration' onsubmit="return formValidation()">
        <div class="container">
            <div class="inner">

                <div class="title">
                    <h3>Registration Form</h3>
                </div>
                      
                <div class="content">
                    <div class="txt">
                        <input type="text" id="txtfirst" name="first" placeholder="First Name" required="">
                        <span id="c1" class="glyphicon glyphicon-user"></span>
                    </div>
                       
                    <div class="txt">
                        <input type="text" id="txtlast" name="last" placeholder="Last Name" required>
                        <span id="c2" class="glyphicon glyphicon-envelope"></span>
                    </div>
                    
                    <div class="txt">
                        <input type="text" id="txtclass" name="class" placeholder="Class"required>
                        <span id="c3" class="glyphicon glyphicon-lock"></span>
                    </div>
                
                    <div class="txt">
                        <input type="text" id="txtyop" name="yop" placeholder="Year of Passing" required>
                        <span id="c4" class="glyphicon glyphicon-lock"></span>
                    </div>
                    

                    <div class="txt">
                        <input type="text" id="txtpercentage" name="percentage" placeholder="Percentage" required>
                        <span id="c4" class="glyphicon glyphicon-lock"></span>
                    </div>
                    
                </div>
                
                <div class="btnsub">
                    <input type="submit" name="submit" id="btnsub" value="Submit">
                </div>
            </div> 

        </div>      
    </form>



</body>
</html>