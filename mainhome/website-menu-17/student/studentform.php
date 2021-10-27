




<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!---<title> Responsive Registration Form | CodingLab </title>--->
    <link rel="stylesheet" href="style.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    

  <?php

$db=new mysqli("localhost","root","","job");
if(isset($_POST['sf'])){
    $name=$_POST['name'];
    $college=$_POST['college'];
    $graduation=$_POST['graduation'];
    $branch=$_POST['branch'];
    $emailid=$_POST['emailid'];
    $skills=$_POST['skills'];
    $nativeplace=$_POST['nativeplace'];
    $phno=$_POST['phno'];
    $link=$_POST['link'];


    
   

    $q=$db->query("INSERT INTO `students`(`sid`,`name`,`college`,`graduation`,`branch`,`emailid`,`skills`,`nativeplace`,`phno`,`link`) VALUES ('','$name','$college','$graduation','$branch','$emailid','$skills','$nativeplace','$phno','$link')");
    if($q>0){
      echo '
      
      <!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.alert {
  padding: 20px;
  background-color: #4BB543;
  color: white;
}

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}
</style>
</head>
<body>



<div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display=`none`;">&times;</span> 
  <strong>SUCCESS!</strong> You have successfully submitted your data.
</div>

</body>
</html>
      
      ';
    }
    else{
        echo '
        
        <!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.alert {
  padding: 20px;
  background-color: #f44336;
  color: white;
}

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}
</style>
</head>
<body>



<div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display=`none`;">&times;</span> 
  <strong>ERROR!</strong> Sorry, something went wrong please try again.
</div>

</body>
</html>

        
        ';
    }
    
}
 
?>


    <div class="content">
      <form action="studentform.php" method="post">
        <div class="user-details">
                <div class="input-box">
            
                <h2>Registration</h2>
              </div>
              <div class="input-box">
                <div class="button1">
                    <button style="width: 50%;float: right" onclick="window.location.href='../../../index.html'" > Back </button>
                  </div>
                  <br><br><br>
              </div>

          <div class="input-box">
            
            <span class="details">Full Name</span>
            <input type="text" name="name" placeholder="Enter your name" required>
          </div>
          <div class="input-box">
            <span class="details">College</span>
            <input type="text" name="college" placeholder="Enter your College" required>
          </div>
          <div class="input-box">
            <span class="details">Degree</span>
            <input type="text" name="graduation" placeholder="Enter your Degree" required>
          </div>
          <div class="input-box">
            <span class="details">Specialization</span>
            <input type="text" name="branch" placeholder="Enter your Specialization" required>
          </div>
          <div class="input-box">
            <span class="details">Email Id</span>
            <input type="text" name="emailid" placeholder="Enter your Email Id" required>
          </div>
          <div class="input-box">
            <span class="details">Skills</span>
            <input type="text" name="skills" placeholder="Enter your Skills" required>
          </div>



          <div class="input-box">
            <span class="details">Native Place</span>
            <input type="text" name="nativeplace" placeholder="Enter your Native Place" required>
          </div>
          <div class="input-box">
            <span class="details">Phone no</span>
            <input type="text" name="phno" placeholder="Enter your Phone no" required>
          </div>
          <div class="input-box">
            <span class="details">LinkedIn</span>
            <input type="text" style="width: 640px; " name="link" placeholder="Enter your LinkedIn" required>
          </div>
        </div>
        
        <div class="button">
          <input type="submit" name="sf" value="Register">
        </div>
      </form>
    </div>
  </div>

</body>
</html>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins',sans-serif;
}
body{
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 10px;
  background: linear-gradient(135deg, #71b7e6, #9b59b6);
}
.container{
  max-width: 700px;
  width: 100%;
  background-color: #fff;
  padding: 25px 30px;
  border-radius: 5px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.15);
}
.container .title{
  font-size: 25px;
  font-weight: 500;
  position: relative;
}
.container .title::before{
  content: "";
  position: absolute;
  left: 0;
  bottom: 0;
  height: 3px;
  width: 30px;
  border-radius: 5px;
  background: linear-gradient(135deg, #71b7e6, #9b59b6);
}
.content form .user-details{
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  margin: 20px 0 12px 0;
}
form .user-details .input-box{
  margin-bottom: 15px;
  width: calc(100% / 2 - 20px);
}
form .input-box span.details{
  display: block;
  font-weight: 500;
  margin-bottom: 5px;
}
.user-details .input-box input{
  height: 45px;
  width: 100%;
  outline: none;
  font-size: 16px;
  border-radius: 5px;
  padding-left: 15px;
  border: 1px solid #ccc;
  border-bottom-width: 2px;
  transition: all 0.3s ease;
}
.user-details .input-box input:focus,
.user-details .input-box input:valid{
  border-color: #9b59b6;
}
 form .gender-details .gender-title{
  font-size: 20px;
  font-weight: 500;
 }
 form .category{
   display: flex;
   width: 80%;
   margin: 14px 0 ;
   justify-content: space-between;
 }
 form .category label{
   display: flex;
   align-items: center;
   cursor: pointer;
 }
 form .category label .dot{
  height: 18px;
  width: 18px;
  border-radius: 50%;
  margin-right: 10px;
  background: #d9d9d9;
  border: 5px solid transparent;
  transition: all 0.3s ease;
}
 #dot-1:checked ~ .category label .one,
 #dot-2:checked ~ .category label .two,
 #dot-3:checked ~ .category label .three{
   background: #9b59b6;
   border-color: #d9d9d9;
 }
 form input[type="radio"]{
   display: none;
 }
 form .button{
   height: 45px;
   margin: 35px 0
 }
 form .button1{
   height: 25px;
 
 }
 form .button input{
   height: 100%;
   width: 100%;
   border-radius: 5px;
   border: none;
   color: #fff;
   font-size: 18px;
   font-weight: 500;
   letter-spacing: 1px;
   cursor: pointer;
   transition: all 0.3s ease;
   background: linear-gradient(135deg, #71b7e6, #9b59b6);
 }
 form .button input:hover{
  /* transform: scale(0.99); */
  background: linear-gradient(-135deg, #71b7e6, #9b59b6);
  }



  form .button1 button{
   height: 100%;
   border-radius: 5px;
   border: none;
   color: #fff;
   font-size: 18px;
   font-weight: 500;
   letter-spacing: 1px;
   cursor: pointer;
   transition: all 0.3s ease;
   background: linear-gradient(135deg, #71b7e6, #9b59b6);
   padding: 0;
 }
 form .button1 input:hover{
  /* transform: scale(0.99); */
  background: linear-gradient(-135deg, #71b7e6, #9b59b6);
  }
 @media(max-width: 584px){
 .container{
  max-width: 100%;
}
form .user-details .input-box{
    margin-bottom: 15px;
    width: 100%;
  }
  form .category{
    width: 100%;
  }
  .content form .user-details{
    max-height: 300px;
    overflow-y: scroll;
  }
  .user-details::-webkit-scrollbar{
    width: 5px;
  }
  }
  @media(max-width: 459px){
  .container .content .category{
    flex-direction: column;
  }
}

</style>