<?php
include 'config.php';
$sql = "select * from users";
$result = mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<head>
    <title> Basic Banking System </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" style="index.css">

    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
    <link rel="stylesheet" href='css/navbar.css'>
    <link rel="stylesheet" href='css/index.css'>
    <link rel="stylesheet" href='css/createuser.css'>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
       <link href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css" rel="stylesheet">
       
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">

     
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>


    <script type="text/javascript">
   $(document).ready(function()
   {
      $('#datatable').dataTable();
   });
  </script>
</head>
<body>
     <!--navbar starts-->
     <nav class="navbar navbar-expand-md navbar-light">
    <a href="#" class="navbar-brand" style="color:white;"><h4 class="animate__animated animate__bounce" 
    style="animation-delay:1s"> <b><i class="fas fa-university fa fa-1.5x"></i>Sparks Bank </b></h4> </a>
    <button class="navbar-toggler" style="color:white;" data-toggle="collapse" data-target="#navbarmenu">
      <span class="navbar-toggler-icon" style="color:white;"></span>
</button>
    <div class="navbar-collapse collapse" id="navbarmenu">
    <ul class="navbar-nav">
       <li class="nav-item"><a class="nav-link" style="color:white;" href="index.php"><i class="fas fa-home"></i> Home </a></li>
       <li class="nav-item"><a class="nav-link" style="color:white;" href="createuser.php"><i class="fas fa-user"></i>Create User</a></li>
       <li class="nav-item"><a class="nav-link" style="color:white;" href="transfer.php"><i class="fas fa-exchange-alt"></i> Transfer Money </a></li>
      
       <li class="nav-item"><a class="nav-link"  style="color:white;" href="transactionhis.php"><i class="fas fa-history"></i>Transaction History </a></li>
       <li class="nav-item"><a class="nav-link" style="color:white;" href="#contacts"><i class="fas fa-address-card"></i> Contact Us </a></li>
       
    </ul>
</div>
  </nav>
  

 
<div class="container">
<h2 class="text-center pt-4" style="color:blue;"> Transfer Money </h2>
    
       <div class="table-responsive-md">
            <table id="datatable" class="table table-sm table-bordered table-striped table-s table-hover">
                <thead>
                    <tr>
                    <th scope="col" class="text-center py-2" width="8%;">S.No</th>
    <th scope="col" class="text-center py-2" width="25%">Name</th>
    <th scope="col" class="text-center py-2" width="30%">Email</th>
    <th scope="col" class="text-center py-2"> Balance</th>
    <th scope="col" class="text-center py-2"> Actions</th>
    
                    </tr>
                </thead>
                <tbody>
                <?php if(mysqli_num_rows($result)>0)
     { 
        $i=1;
       while($row=mysqli_fetch_assoc($result)){ ?>
     <tr>
        <td><?php echo $i?></td>
        <td><?php echo $row['name']?></td>
        <td><?php echo $row['email']?></td>
        <td><?php echo $row['Balance']?></td>
        <td><a href="selectuser.php?id=<?php echo $row['id'];?>"> <button type="button" class="button"> Transact </button></a></td>>
       </tr>
       <?php $i++;}}
    else{
       ?>
       <tr>
          <td colspan="5" style="text-align:center;"> No Data Found </td>
    </tr>
       <?php
    }
    ?>
               </tbody>
            </table>
   
</div>
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
     <input type="email" class="form-control mt-4 pl-4" placeholder="Email" name="email1">
     <textarea class="form-control mt-4 pl-4"  placeholder="comments if any" name='text' style="height:150px;" required></textarea>
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
  </body>
</html>