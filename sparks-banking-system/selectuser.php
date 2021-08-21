<?php
include 'config.php';
$negative="";
$insufficient="";
$zero="";
$success="";
$row1="";
$row2="";
$sender="";
$receiver="";
$sid = $_GET['id'];
$sql = "select * from users where id=$sid";
$result=mysqli_query($conn,$sql);
$row= mysqli_fetch_assoc($result);
if(isset($_POST['submit']))
{
    $from = $_GET['id'];
    $to = $_POST['to'];
    $amount = $_POST['amount'];
    $sql ="select * from users where id=$from";
    $query= mysqli_query($conn,$sql);
    $row1= mysqli_fetch_array($query);

    $sql1 ="select * from users where id=$to";
    $query2= mysqli_query($conn,$sql1);
    $row2= mysqli_fetch_array($query2);
    if(($amount)<0)
    {
        $negative= " Negative Values Cannot Be Transferred";
        echo '<script type="text/javascript">';
        echo 'alert("Oops! Negative Values Are Not Allowed")';
        echo '</script>';

    }
    else if ($amount > $row1['Balance'])
    {
        $insufficient= "Insufficient Balance";
        echo '<script type="text/javascript">';
        echo 'alert("Bad Luck! Insufficient Balance")';
        echo '</script>';
    }
    else if ($amount ==0)
    {
        
        $insufficient= "Zero value Cannot be entered";
        echo '<script type="text/javascript">';
        echo 'alert("Oops! Zero Values cannot be entered")';
        echo '</script>';

    }
    else
    {
        $newbal = $row1['Balance'] - $amount;
        $sql = "update users set Balance=$newbal where id=$from";
        mysqli_query($conn,$sql);

        $newbal1 = $row2['Balance'] + $amount;
        $sql = "update users set Balance = $newbal1 where id=$to";
        mysqli_query($conn,$sql);


        $sender = $row1['name'];
        $receiver = $row2['name'];
        $sql3 ="insert into transaction (sender,receiver,balance) values ('{$sender}','{$receiver}','{$amount}')";
        $result2=mysqli_query($conn,$sql3);
        if($result2)
        {
             
        $_SESSION['success']= "Transaction Successfull..!";
        echo "<script> alert('Transaction Successful'); 
     window.location='transactionhis.php';</script>";
       
       
       
        }
        $newbal1=0;
        $amount=0;

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
      
       <li class="nav-item"><a class="nav-link"  style="color:white;" href="transhistory.php"><i class="fas fa-history"></i>Transaction History </a></li>
       <li class="nav-item"><a class="nav-link" style="color:white;" href="#contacts"><i class="fas fa-address-card"></i> Contact Us </a></li>
       
    </ul>
</div>
  </nav>
  <div class="container">
      <h2 class="text-center pt-4" style="color:blue;"> Transaction </h2>
<form method="post" name="userselect"><br>
<div class="table-responsive-md">
    <table class="table table-sm table-striped table-condensed table-bordered">
        <thead>
        <tr>
            <th class="text-center" >Name </th>
            <th class="text-center">Email </th>
            <th class="text-center">Balance </th>
       </tr> 
       </thead>  
       <tbody>
           <td class="py-2 text-center"><?php echo $row['name']?></td>
           <td class="py-2 text-center"><?php echo $row['email']?></td>
           <td class="py-2 text-center"><?php echo $row['Balance']?></td>
       </tbody>
    </table>
    <br>
</div>
    <center>
    <?php
$sid = $_GET['id'];
$sql = "select * from users where id!=$sid";
$results=mysqli_query($conn,$sql);

?>
<div class="negative" style="color:red;font-size:1.5rem"> <?php echo $negative ?></div>
<div class="insufficient" style="color:red;font-size:1.5rem"> <?php echo $insufficient ?> </div>
<div class="zero" style="color:red;font-size:1.5rem"> <?php echo $zero ?> </div>
<div class="success" style="color:green;font-size:1.5rem"> <?php echo $success ?> </div>
    <label style="color:blue;"><b>Receiver </b></label>
    <div class="receiver"><select name ="to" class="form-control" style="width:50%;" required>
                 <option value="" disabled selected> Choose </option>
                 <?php
                while($rows= mysqli_fetch_assoc($results))
                {
                  
                    echo "<option value='".$rows['id']."'>
                    ".$rows['name']." Balance:".$rows['Balance']."</option>";
                   
                }
                 ?></select></div>
            
                 <label class="pt-2" style="color:blue;"><b> Amount </b> </label>
                 <div class="amount">
                     <input type="number" class="form-control" style="width:50%;" name="amount" required></div>
                     
            <br>
             <button  id="btn" name= "submit" style="width:30%;border:none;
    background:none;
    color:white;
    box-shadow:2px 1px 3px 4px rgb(209, 209, 209);
    padding:10px;
    border-radius:8px;
    background:#0099ec;
    outline:none;"> Tranfer </button>
                 </center>
            </form>
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
       <form>
     <input type="text" class="form-control mt-4 pl-4" placeholder="Name" name="name1"  required>
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
