<?php
include 'config.php';
if(isset($_POST['submit']))
{
  $name=$_POST['name'];
  $email=$_POST['email'];
  $balance=$_POST['balance'];
  $sql = "insert into users (email,name,Balance) values ('{$email}','{$name}','{$balance}')";
  $result = mysqli_query($conn,$sql);
  if($result)
  {
    $_SESSION['status'] = "Account Created Successfully";
   echo "<script> alert('Account Created Successfully'); 
   window.location='transfer.php';</script>";
   
  }
  else
  {
    $_SESSION['status'] = "Something Went Wrong";
   $_SESSION['status']="Something Went Wrong";
    $_SESSION['status_code']="error";
    header('Location:createuser.php');

  }
  
}
?>
 <!DOCTYPE html>
<head>
    <title> Basic Banking System </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" style="index.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
    <link rel="stylesheet" href='css/navbar.css'>
    <link rel="stylesheet" href='css/index.css'>
    <link rel="stylesheet" href='css/createuser.css'>
    <script src="js/sweetalert.min.js"></script>
  
</head>
<body>
  <!--navbar starts-->
  <nav class="navbar navbar-expand-md navbar-light">
    <a href="#" class="navbar-brand" style="color:white;"><h4 class="animate__animated animate__bounce" 
    style="animation-delay:1s"> <b><i class="fas fa-university fa fa-1.5x"></i>Sparks Bank </b></h4> </a>
    <button class="navbar-toggler" style="color:white;" data-toggle="collapse" data-target="#navbarmenu">
      <span class="navbar-toggler-icon" style="color:white;"></span>
</button>
    <div class="collapse navbar-collapse" id="navbarmenu">
    <ul class="navbar-nav">
       <li class="nav-item"><a class="nav-link" style="color:white;" href="index.php"><i class="fas fa-home"></i> Home </a></li>
       <li class="nav-item"><a class="nav-link" style="color:white;" href="createuser.php"><i class="fas fa-user"></i>Create User</a></li>
       <li class="nav-item"><a class="nav-link" style="color:white;" href="transfer.php"><i class="fas fa-exchange-alt"></i> Transfer Money </a></li>
       <li class="nav-item"><a class="nav-link"  style="color:white;" href="transactionhis.php"><i class="fas fa-history"></i>Transaction History </a></li>
       <li class="nav-item"><a class="nav-link" style="color:white;" href="#contacts"><i class="fas fa-address-card"></i> Contact Us </a></li>
       
    </ul>
</div>
  </nav>
  <h2 class="text-center pt-4" style="color:blue;"> Create a User </h2>
  <!--form-->
  <center>
  <div class="background mt-4">
      <div class="container">
          <img class="img-fluid" width=15% src="images/user2.jpg" style="border:none;border-radius:50%;position:relative;top:-30px;">
          <form class="form-group" method="post">
              <div class="name pt-3">
              <input class="form-control" placeholder="Name" name="name" type="text" required></div>
              <div class="name pt-3">
              <input class="form-control" placeholder="Email" name="email" type="email" required></div>
              <div class="name pt-3">
              <input class="form-control" placeholder="Balance" name="balance" type="number" required></div>
              <br>
              <div class="buttons">
              <input class="reset" type="submit" style="width:30%;" name="submit" value="Submit">
                <input class="reset" type="reset" style="width:30%;" name="reset" value="Reset">
              </div>
          </form>
      </div>
  </div>

</center>
<div class="contacts" id="contacts">
<h2 class="text-center mt-5" style="color:blue;font-weight:bold;"> Contact Us </h2>
<div class="modals pt-3">
  <img src="images/checked.png"  style="object-fit:fill;width:50px;height:50px;">
   <div class="meaasge pt-3"> Message has been sent Successfully</div>
   <button class="button mt-3 ml-4" id="ok"> Ok </button>
</div>
<div class="container mt-3">
  
   <div class="contact img">
     <img src="images/map1.png" class="img-fluid mt-4">
   </div> 
   <div class="contact-details">
     <form>
     <input type="text" class="form-control mt-4 pl-4" placeholder="Name" name="name1" style="width:350px;" required>
     <input type="email" class="form-control mt-4 pl-4" placeholder="Email" name="email1">
     <textarea class="form-control mt-4 pl-4"  placeholder="comments if any" name='text' style="height:150px;" required></textarea>
     <button class="button mt-3" id="send" style="width:40%;"> Send </button>
     </form>
</div> 
</div>
</div>
  <!--footer-->
<center>
<p style="padding-top:50px;">&copy 2021. Made by <b><i class="far fa-heart"></i> SOUMYA SREE</b>
</center>
<script>
  var send = document.getElementById('send');
  send.addEventListener('click',
  function()
  {
    document.querySelector('.modals').style.display="block";
  });
  close= document.getElementById('ok');
  close.addEventListener('click',
  function()
  {
    document.querySelector('.modals').style.display="none";
  })
  </script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  
</body>
</html>
