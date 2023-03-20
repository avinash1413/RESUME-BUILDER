<?php
session_start();
if(isset($_POST['next'])){
$filename = $_FILES['profilepic']['tmp_name'];
$destination = "uploads/" . $_FILES['profilepic']['name'];
move_uploaded_file($filename,$destination);
$_SESSION['profilepic'] = $destination;

  foreach($_POST as $key => $value){
    $_SESSION['info'][$key] = $value;

  }
  $keys = array_keys($_SESSION['info']);
  if(in_array('next',$keys)){
    unset($_SESSION['info']['next']);
  }
  header('location:form2.php');
}

?>

<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link rel="stylesheet" href="css/form.css">
  <title>Resume form</title>
  
  
  <style type="text/css">
  
    h1 {
      text-align: center;
      padding: 50px;
      
    }
    .container {
       width:60%;
    
    }
    @media screen and (max-width:650px){
      .container{
        width:100%;
      }
    }
   
    
  </style>

</head>

<body>
<nav class="navbar navbar-expand-lg sticky-top navbar-dark" style="background-color:#6C3483 ;">
  <span class="navbar-brand mx-auto h1 "style="font-size:2.5rem;">RESUME FORM</span>
</nav>

  
  <div class="pcontainer mt-5 mb-5" id="fcon1">
      <ul class="progressbar">
        <li >Step 1</li>
        <li>Step 2</li>
        <li>Step 3</li>
        <li >Step 4</li>
      </ul>
    </div>
  <div class="container" data-aos="fade-up">
   
    
      <form action="" method="POST" enctype = "multipart/form-data">

        
        <div class="col">
          <label class="form-label">Profile</label>
          <input type="file" class="form-control shadow-none" value ="<?= isset($_SESSION['profilepic'])? $_SESSION['profilepic'] : ''?>" id="inputEmail4" name="profilepic" required>
        </div>
        <div class="col">
          <label class="form-label">Fullname</label>
          <input type="text" class="form-control shadow-none" value ="<?= isset($_SESSION['info']['fullname']) ? $_SESSION['info']['fullname'] : '' ?>" name="fullname" placeholder="Fullname" id="inputPassword4" required>
        </div>
        <div class="col">
          <label for="inputAddress" class="form-label">Job-designation</label>
          <input type="text" class="form-control shadow-none" value ="<?= isset($_SESSION['info']['role'])? $_SESSION['info']['role'] : '' ?>" id="inputAddress" name="role" placeholder="Job-designation" required>
        </div>
        <div class="col">
          <label for="inputAddress2" class="form-label">Email</label>
          <input type="Email" class="form-control  shadow-none"value ="<?= isset($_SESSION['info']['email']) ? $_SESSION['info']['email'] : '' ?>"  id="inputAddress2" name="email" placeholder="xyz@email.com" required>
        </div>
        <div class="col">
          <label for="inputCity" class="form-label">Phone Number</label>
          <input type="number" class="form-control shadow-none" value ="<?= isset($_SESSION['info']['phonenumber']) ? $_SESSION['info']['phonenumber'] : '' ?>" name="phonenumber" placeholder="phone number" id="inputAddress2" required>
        </div>
        <!-- <div class="col">
          <label for="inputCity" class="form-label">Portfolio Link</label>
          <input type="text" class="form-control shadow-none" value ="<?= isset($_SESSION['info']['portfoliolink']) ? $_SESSION['info']['portfoliolink'] : '' ?>" name="portfoliolink" placeholder="Portfolio link" id="inputAddress2" required>
        </div> -->
        <div class="col">
          <label for="inputCity" class="form-label">LinkedIn</label>
          <input type="text" class="form-control shadow-none" value ="<?= isset($_SESSION['info']['linkedIn']) ? $_SESSION['info']['linkedIn'] : '' ?>"  name="linkedIn" placeholder="Profile link" id="inputAddress2" required>
        </div>
        <div class="col">
          <label for="inputCity" class="form-label">Address</label>
          <input type="text" class="form-control shadow-none" value ="<?= isset($_SESSION['info']['address']) ? $_SESSION['info']['address'] : '' ?>"  name="address" placeholder="Address..." id="inputAddress2" required>
        </div>
    
  
    <div class="col">
      <button type="submit" name="next" id="next" class="btn btn-lg btn-primary mt-5 mb-5 button shadow-none">Next</button>
    </div>
    </form>
  </div>
  


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
    integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT"
    crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
   <script>
  AOS.init({
    offset: 120,
    duration: 1000,
  });
</script>

</body>

</html>