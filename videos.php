

<body style="background-image:url('images/thumbnail1.png');background-size:cover">
<form  method="POST" name="f1" enctype="multipart/form-data">

   <?php




  if(isset($_POST['ok']))
  {
    include("dp.php");
    $t=$_FILES["photo"]["name"];
    if(file_exists("videos/".$_FILES["photo"]["name"]))
    {
    $rand_name=md5(time());
    $rand_name=rand(0,999999999);
    $pic=$rand_name;
    $pic="videos/".$rand_name.$_FILES["photo"]["name"];
    move_uploaded_file($_FILES['photo']['tmp_name'],$pic);
    }
    else
    {
    $pic="videos/".$_FILES["photo"]["name"];
    move_uploaded_file($_FILES['photo']['tmp_name'],$pic);
    }
    $q="insert into video(id,photo)values(NULL,'$pic')";
    $r=mysqli_query($con,$q);
    if($r)
    {
      echo "<script>alert('data inserted successfully')</script>";
    }
  }

?>

<center>

<b><h1><u>Video upload</u></h1></b>
<h2>video name&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<input type= "text" name = "name" id = "name " ><br><br></h2>
<h2>video  Description
<input type= "text" name = "dis" id = "dis " ><br><br></h2>

<input type="file" name="photo" id="photo" value="Image"><br><br>
 	<input type="submit" name="ok" value="submit">
</center> 	
 </form>