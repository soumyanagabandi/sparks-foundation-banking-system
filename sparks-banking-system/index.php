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
       <li class="nav-item"><a class="nav-link" style="color:white;" href="createuser.php"><i class="fas fa-user"></i>Create User </a></li>
       <li class="nav-item"><a class="nav-link" style="color:white;" href="transfer.php"><i class="fas fa-exchange-alt"></i> Transfer Money </a></li>
      
       <li class="nav-item"><a class="nav-link"  style="color:white;" href="transactionhis.php"><i class="fas fa-history"></i>Transaction History </a></li>
       <li class="nav-item"><a class="nav-link" style="color:white;" href="#contacts"><i class="fas fa-address-card"></i> Contact Us </a></li>
       
    </ul>
</div>
  </nav>
  <!--navbar ends-->
  <div class="container-fluid">
    <div class="row intro py-1" style="background:#99ddff;">
       <div class="col-sm-12 col-md">
         <div class="heading text-center my-3">
          <marquee width=50%; direction="left"> <h3 style="animation-delay:2s;font-size:2rem;color:;"> Welcome to Sparks bank </he> </marquee>
        </div>
      </div>
    </div> 
</div> 
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/slide3.jpg" alt="First slide">
      <h2 class="animate__animated animate__backInLeft" style="animation-delay:1s;padding-top:6%;padding-left:6%;">Create Account To Transfer</h2>
      <p class="animate_animated animate__bounceInLeft" style="animation-delay:2s;position:absolute;top:35%;left:15%;">       <a class="btn btn-primary btn-lg" href="#">Create User</a></p>
  
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/slide6.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/slide5.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!--pics-->
<div class="container">
<div class="col-md-12  img">
    <img src="images/bank.png" align="left" class="img-fluid pt-2" style="align-items:center;justify-content:center;">
    <div class="spark"> <h1> Sparks Bank </h1></div>
    <div class="info"><h4>The sparks foundation is working to bring parity in education, making sure children have equal opportunity at success, irrespective of the financial background.
</h4></div>
</div>
</div>
<!--Activity-->
<div class="activity-image col-md-12">
    <div><img src="images/user.jpg"  class="img-fluid">
    <div><a href="createuser.php"><button class="button"> Create a user</button></a></div></div>
     <div><img src="images/transfer.jpg" class="img-fluid">
     <div><a href="transfer.php"><button class="button">Make a Transaction</button></a></div></div>
    <div> <img src="images/history.jpg" class="img-fluid">
     <div><a href="transhistory.php"><button class="button">Transaction History</button></a></div></div>
</div>
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
     <input type="text" class="form-control mt-4 pl-4" placeholder="Name" name="name1" style="width:350px;" required>
     <input type="email" class="form-control mt-4 pl-4" placeholder="Email" name="email1" required>
     <textarea class="form-control mt-4 pl-4"  placeholder="comments if any" name='text' style="height:150px;"></textarea>
     <button class="button mt-3" id="send" style="width:40%;"> Send </button>
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