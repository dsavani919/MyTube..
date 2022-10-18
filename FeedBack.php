
<?php session_start();
include('dp.php');
if(isset($_POST['ok']))
{
  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $email=$_POST['email'];
  $contact=$_POST['country'];
  $text=$_POST['text'];
  
$sql=mysqli_query($con,"select id from feedback where email='$email'");
$row=mysqli_num_rows($sql);
if($row>0)
{
  echo "<script>alert('Email id already exist with another account. Please try with other email id');</script>";
} else{
  $msg=mysqli_query($con,"insert into feedback(fname,lname,email,country,text) values('$fname','$lname','$email','$country',
    '$text')");

if($msg)
{
  echo "<script>alert('Register successfully');</script>";
     header('location:index.php');
}
}
}
 
 
?>


<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">    
<style>    
* {    
  box-sizing: border-box;    
}    
    
input[type=text], select, textarea {    
  width: 100%;    
  padding: 12px;    
  border: 1px solid rgb(70, 68, 68);    
  border-radius: 4px;    
  resize: vertical;    
}    
input[type=email], select, textarea {    
  width: 100%;    
  padding: 12px;    
  border: 1px solid rgb(70, 68, 68);    
  border-radius: 4px;    
  resize: vertical;    
}    
    
label {    
  padding: 12px 12px 12px 0;    
  display: inline-block;    
}    
    
input[type=submit] {    
  background-color: rgb(37, 116, 161);    
  color: white;    
  padding: 12px 20px;    
  border: none;    
  border-radius: 4px;    
  cursor: pointer;    
  float: right;    
}    
    
input[type=submit]:hover {    
  background-color: #45a049;    
}    
    
.container {    
  border-radius: 5px;    
  background-color: #f2f2f2;    
  padding: 20px;    
}    
    
.col-25 {    
  float: left;    
  width: 25%;    
  margin-top: 6px;    
}    
    
.col-75 {    
  float: left;    
  width: 75%;    
  margin-top: 6px;    
}    
    
/* Clear floats after the columns */    
.row:after {    
  content: "";    
  display: table;    
  clear: both;    
}    
    </style>
</head>
<body>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyTube</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <nav class="flex-div">
         <div class="nav-left flex-div">
             <img src="images/menu.png" class="menu-icon"> 
             <img src="images/logo1.png" class="logo">
         </div>
         <div class="nav-middle flex-div">
         <div class="search-box flex-div">
         <input type="text" placeholder="search">
          <img src="images/search.png">
           </div>
                <img src="images/voice-search.png" class="mic-icon"> 
         </div>
         
         <p>Welcome <?php echo $_SESSION['name'];?></p>
         <a href="Login/logout.php">Logout</a>

         <div class="nav-right">
         
         <a href="video-/upload.php">  
         <img src="images/upload.png"></a>
        <img src="images/more.png">
            <img src="images/notification.png">
            <a href="Login/login.php">
            <img src="images/user.png" class="user-icon"></a>
         </div>
         
    </nav>

    <!-----------------slidebar-------->

    <div class="sidebar">
        <div class="shortcut-links">
            <hr>
        </div>
        <div class="subscribe-list">
            <h3>SUBSCRIBED</h3>
            
            <?php
               include("dp.php");
               $q="select fname from users";
               $r=mysqli_query($con,$q);
               while($row=mysqli_fetch_array($r))
               {
                ?>
                <a href=""><img src="images/user.png"><p> <?php echo $row['fname']; ?> </p></a>
<?php
               }
     ?>       
             <div>
                <p>------------------------</p>
                <br><br>
                 <a href="FeedBack.php"><img src="images/messages.png"><p>Feedbcak</p></a>
                 <a href="index.php"><img src="images/show-more.png"><p> Back </p></a>
            </div>
           
            
        </div>
    </div>


    <!-----------------main--------------->


      <div class="container" >
        <div class="banner">
     <center>  <h2>FEED BACK FORM</h2> </center>   
<div class="container">    
  <form name="FeedBack" method="post" action="" enctype="multipart/form-data">
    <div class="row">    
      <div class="col-25">    
        <label for="fname">First Name</label>    
      </div>    
      <div class="col-75">    
        <input type="text" id="fname" name="fname" placeholder="Your name..">    
      </div>    
    </div>    
    <div class="row">    
      <div class="col-25">    
        <label for="lname">Last Name</label>    
      </div>    
      <div class="col-75">    
        <input type="text" id="lname" name="lname" placeholder="Your last name..">    
      </div>    
    </div>    
    <div class="row">    
        <div class="col-25">    
          <label for="email">Mail Id</label>    
        </div>    
        <div class="col-75">    
          <input type="email" id="email" name="email" placeholder="Your mail id..">    
        </div>    
      </div>    
    <div class="row">    
      <div class="col-25">    
        <label for="country">Country</label>    
      </div>    
      <div class="col-75">    
        <input type="text" name="country" id="country" placeholder="your country..">
        </div>    
    </div>    
    <div class="row">    
      <div class="col-25">    
        <label for="feed_back">Feed Back</label>    
      </div>    
      <div class="col-75">    
       <input id="text" name="text" placeholder="Write something.." style="height:200px;width: 100%;"/>    
      </div>    
    </div>    
    <div class="row">    
      <input type="submit" value="Submit" name="ok">    
    </div>    
  </form>    
</div>    

</body>
</html>
