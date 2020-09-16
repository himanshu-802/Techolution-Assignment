

<!DOCTYPE html>
<html>
   <head>
      <link rel="stylesheet" type="text/css" href="form_style.css">
      
      <script type="text/javascript">
         function validate(){
           var letters =  /^[A-Za-z]+$/;
           var var1=document.myForm.firstname.value;
           
           if(! var1.match(letters) || var1.length()>21 ){
              alert( "(accepts only alphabets a-zA-Z, max character size:20)" );
              console.log("firstname");
              document.myForm.firstname.focus() ;
              return false;
           }
         
            var var2=document.myForm.lastname.value;
           
           if(! var2.match(letters) || var2.length()>21 ){
              alert( "(accepts only alphabets a-zA-Z, max character size:20)" );
              console.log("lastname");
              document.myForm.lastname.focus() ;
              return false;
           }
         
           var var3= document.myForm.yop.value;
           var numbers = /^[0-9]+$/;
           if(!var3.match(numbers) || var3>2016){
             alert( "accepts only numbers and  should be less than 2017");
             console.log("yop");
              document.myForm.yop.focus() ;
              return false;
           }
         
           var var4= document.myForm.percentage.value;
           if(!var4.match(numbers))
           {
             alert("accepts only numbers");
             document.myForm.percentage.focus();
             return false;
           }
         
          return true();
         
         }
      </script>
      <meta name="viewport" content="width=device-width, initial-scale=1">
   </head>
   <body>
      <div class="container">
         <center>
            <h1> Student Admission Form</h1>
         </center>
         <hr>
         <form name="myForm" onsubmit="return(validate());">
            <label> Firstname </label> 
            <input type="text" name="firstname" placeholder= "Firstname" size="20" required /> 
            <label> Lastname: </label>  
            <input type="text" name="lastname" placeholder="Lastname" size="20"required /> 
            <label> Class: </label>  
            <input type="text" name="class" placeholder="Class" size="15"required />  
            <label> Year of Passing: </label>  
            <input type="text" name="yop" placeholder="Year of Passing" size="15"required />  
            <label> Percentage: </label>  
            <input type="text" name="percentage" placeholder="Percentage" size="15"required /> 
            <button type="submit" value="Submit"class="registerbtn">Register</button>
      </div>
      </form>
   </body>
</html>

