<?php
$login=false;
$showError = false;
$showAlert = false;
include 'conn.php';
if(!$conn){
    echo '<script>alert("not connected succesfully")</script>';
}
if($_SERVER['REQUEST_METHOD']=='POST'){
    
    $username = $_POST['email'];
    $password = $_POST['password'];
    $sql ="SELECT * FROM `userinfo` WHERE email = '$username' ";
    $result = mysqli_query($conn,$sql);
    $num = mysqli_num_rows($result);
   
    if($num == 1)
    {
        while($row = mysqli_fetch_array($result)){
          $user= $row['username'];
         
         if( $password == $row['password']){
            $login = true;
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $username;
           
          }
          else{
              $showAlert = true;
          }
        }
    }
    else{
       
      $showError= true;
    }
}
if($login){
  header('location:index.php');
}

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/82b716bd33.js"></script>
  <title>Login</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      padding:60px;
      background:linear-gradient(to top,#5b2c6f 0%,#e8daef 100%);
    }

    .container {
      width: 70%;
      min-height: 85vh;
      border-radius:20px;
      background-color: #fff;
      display: flex;
      margin: auto;
      justify-content: center;
      align-items: center;
      box-shadow: 3px 3px rgb(255, 255, 240);
      
    }

    h1 {
      display: flex;
      margin: auto;
      justify-content: center;
      align-items: center;
      padding-bottom: 30px;
      color:#4A235A ;
      font-size: 45px;
      
    }
    .img-fluid{
      animation-name:image;
      animation-iteration-count: infinite;
    }
    @keyframes image {
      from{background-color: #BB8FCE;}
      to{background-color: #4A235A ; }
      
    }
    
    
    
    .button{
      background-color: #BB8FCE;
      border:none;
      width:85%;
      margin-left:45px;
      margin-top:35px;
      
    }
    @media screen and (max-width:650px) {
      .button{
        width:80%;
        margin-left:45px;
        
      }
      body{
        padding:1px;
      }
     
      .container{
        width:100%;
        height:115vh;
        padding:30px;
        margin-top:-75px;
        border-radius: 0px;
      }
      h1{
        font-size:45px;
        text-align:center;
        display: flex;
        margin: auto;
        justify-content: center;
        align-items: center;
      }
    }
    .button:hover{
      background-color:  #6C3483  ;
      
    }
    .input-group{
      padding:13px;
      margin-top: 15px;
    }
    .form-control{
      border:none;
      border-bottom: 1px solid black;
      outline:0;
      border-radius: none;
      border-color: #BB8FCE;
      /*background-color: #F4ECF7 ;*/
    }
    .form-control:hover{
      border-color: #4A235A;
      
    }
   
    a{
      display: flex;
      margin: auto;
      justify-content: center;
      align-items: center;
      text-align:center;
      font-size: 18px;
      
      text-transform: capitalize;
      color:#6C3483;
      padding-left:40px;

    }
    i{
      color:#6C3483;
      margin-top:5px;
      padding:10px;
    }
    
    
    
    
    

  </style>
</head>

<body>
  <?php
  
   if($showError){
       echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
       <strong> Oops!</strong>You are not registered yet.
       <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
       </div>";
   }
   if($login){
       echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
       <strong> Success!</strong> You are logged in successfully 
       <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
       </div>";
   }
   if($showAlert){
       echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
	<strong> Oops!</strong>Incorrect Password.
	<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
  </div>";
   }
   ?>
  
  
  <form action="signin.php" method="POST">
  <div class="container">
     <div class="row">
      <h1 class="header">Sign-in</h1>
      
      <div class="col-sm-5">
        <img src="images/login.png" class="img-fluid" alt="...">
        <a href="signup.php">create ur account</a>
        
      </div>
      
      
       <div class="col-sm-6 column">

        <div class="input-group mb-3">
          <i class="fa fa-user icon" aria-hidden="true"></i>
          <input type="email" required class="form-control shadow-none" name="email" placeholder="email" aria-label="Username"
            aria-describedby="basic-addon1">
          
        </div>
       

        <div class="input-group mb-3">
          <i class="fa fa-unlock-alt icon" aria-hidden="true"></i>
          <input type="password" required class="form-control shadow-none"name="password" placeholder="password" aria-label="Username"
            aria-describedby="basic-addon1">
            
        </div>
        
        
        
        <button class="btn btn-lg btn-primary button text-center"type="submit" name="submit">LOGIN</button>
        
      </div>
      <div class="col-sm-1"></div>
      
    </div>
  </div>
  </form>















  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
    integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT"
    crossorigin="anonymous"></script>

</body>

</html>