

<!DOCTYPE html>
<html>
   <head>
      <?php
         include 'Links/links.php';
         include 'CSS/style.php';
         ?>
      <script type="text/javascript">
         function func(){
                $.getJSON("stud.json",
                       
                       function(data){
         
                        var tbval=document.getElementById('tbval');
                        var i; var max_marks=0, row_num;
                        for( i=1;i <4;i++){
         
                          var x=tbval.insertRow();
                          x.insertCell(0);
                          tbval.rows[i].cells[0].innerHTML= data[i-1]['name'];
                     
                            x.insertCell(1)
                            tbval.rows[i].cells[1].innerHTML= data[i-1]['rollNumber'];
                        
                            
                            var obj = data[i-1]['marks'];
                            var marks=0; var fail=0;
                            $.each(obj,function(key,value){
                                   if(value<20){
                                    fail=1;
                                   }
                                   else{
                                    console.log(key + ' '+ value);
                                    marks=marks + parseInt(value);
                                   }
                            });
                             console.log(marks);
                            x.insertCell(2);
                          tbval.rows[i].cells[2].innerHTML= marks;
                          
                           
                            x.insertCell(3);
                            if(fail==1)
                            {
                          tbval.rows[i].cells[3].innerHTML='Fail';
                          for(j=0;j<4;j++)
                            {
                            tbval.rows[i].cells[j].style.color="#FF0000";
                            }
                            }
                            else{
                              tbval.rows[i].cells[3].innerHTML='Pass';
                             
                            }
                           if(max_marks<marks){
                            max_marks=marks;
                           }
                           if(max_marks==marks){
                            row_num=i;
         
                           }
         
                        }
         
                        for(j=0;j<4;j++)
                        {
                        tbval.rows[row_num].cells[j].style.color="#008000";
                        }
                        tbval.rows[row_num].cells[3].innerHTML='Topper';
         
         
                       }
                  );
         }
      </script>
   </head>
   <body onload="func()">
      <div class="main_header">
         <div class="row r-100 w-100">
            <div class="col-lg-5 col-md-5 col-12 order-lg-1 
               order-2 mt-3">
               <div class="leftside w-100 h-100 d-flex justify-content-center align-items-center">
                  <img src="images/ss.jpg" width="150" height="150">
               </div>
            </div>
            <div class="col-lg-7 col-md-7 col-12 order-lg-2
               order-1">
               <div class="rightside w-100 h-100 d-flex justify-content-center align-items-center">
                  <h1>
                     Maintain Social Distance
                  </h1>
               </div>
            </div>
         </div>
      </div>
      <br>
      <br><br>
      <section class="container-fluid ">
         <div class="mb-3">
            <h3 class="text-uppercase  text-center">Students Result Board</h3>
            <div class=" table-responsive">
               <table class=" table table-bordered table-stripped text-center " id="tbval">
                  <tr>
                     <th>Student Name</th>
                     <th>Roll Number</th>
                     <th>Total Marks</th>
                     <th>Status</th>
                  </tr>
               </table>
            </div>
         </div>
      </section>
      <footer>
         <div class="footer_style text-white text-center container-fluid">
            <p>
               copyright by Himanshu Rathore
            </p>
         </div>
      </footer>
   </body>
</html>

