<?php
session_start();
if(isset($_POST['next1'])){
  foreach($_POST as $key => $value){
    $_SESSION['info'][$key] = $value;

  }
  $keys = array_keys($_SESSION['info']);
  if(in_array('next1',$keys)){
    unset($_SESSION['info']['next1']);
  }

   header('location:form3.php');
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
  
</head>

<body>
<nav class="navbar navbar-expand-lg sticky-top navbar-dark" style="background-color:#6C3483 ;">
  <span class="navbar-brand mx-auto h1 "style="font-size:2.5rem;">RESUME FORM</span>
</nav>
<div class="pcontainer" id="fcon2" data-aos="fade-right">
      <ul class="progressbar  mt-5 mb-3">
        <li class="active">Step 1</li>
        <li>Step 2</li>
        <li >Step 3</li>
        <li>Step 4</li>
      </ul>
    </div>


  <div class="container " >
    <h1 class="mt-5 mb-5" data-aos="fade-left"><b>EDUCATION DETAILS</b></h1>
    <form class="row g-3 needs-validation" action="" method="POST">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-md-4">
            <label for="validationCustom01" class="form-label">Primary Education</label>
            <input type="text" class="form-control shadow-none" value ="<?= isset($_SESSION['info']['primary'])? $_SESSION['info']['primary'] : ''?>" name="primary" id="validationCustom01" placeholder="Institute name (Branch)"
              required>
          </div>
          <div class="col-md-4">
            <label for="validationCustom02" class="form-label">Time period</label>
            <input type="text" class="form-control shadow-none" value ="<?= isset($_SESSION['info']['time1'])? $_SESSION['info']['time1'] : ''?>" id="validationCustom02" name="time1" placeholder="Duration"
              required>
          </div>
          <div class="col-md-4">
            <label for="validationCustomUsername" class="form-label">CGPA</label>
            <input type="text" class="form-control shadow-none" value ="<?= isset($_SESSION['info']['cgpa1'])? $_SESSION['info']['cgpa1'] : ''?>"  name="cgpa1" placeholder="Grade Points" id="validationCustomUsername"
              aria-describedby="inputGroupPrepend" required>
          </div>
        </div>

        <div class="row">
          <div class="col-md-4">
            <label for="validationCustom01" class="form-label">Secondary Education</label>
            <input type="text" class="form-control shadow-none" value ="<?= isset($_SESSION['info']['secondary'])? $_SESSION['info']['secondary'] : ''?>" name="secondary" id="validationCustom01"
              placeholder="Institute name (Branch)" required>
          </div>
          <div class="col-md-4">
            <label for="validationCustom02" class="form-label">Time period</label>
            <input type="text" class="form-control shadow-none" value ="<?= isset($_SESSION['info']['time2'])? $_SESSION['info']['time2'] : ''?>"  name="time2" id="validationCustom02" placeholder="Duration"
              required>
          </div>
          <div class="col-md-4">
            <label for="validationCustomUsername" class="form-label">CGPA</label>
            <div class="input-group has-validation">
              <input type="text" class="form-control shadow-none" value ="<?= isset($_SESSION['info']['cgpa2'])? $_SESSION['info']['cgpa2'] : ''?>"  name="cgpa2" placeholder="Grade Points" id="validationCustomUsername"
                aria-describedby="inputGroupPrepend" required>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-4">
            <label for="validationCustom01" class="form-label">Graduation</label>
            <input type="text" class="form-control shadow-none" value ="<?= isset($_SESSION['info']['graduation'])? $_SESSION['info']['graduation'] : ''?>"  name="graduation" id="validationCustom01"
              placeholder="Institute name (Branch)" required>
          </div>
          <div class="col-md-4">
            <label for="validationCustom02" class="form-label">Time period</label>
            <input type="text" class="form-control shadow-none" value ="<?= isset($_SESSION['info']['time3'])? $_SESSION['info']['time3'] : ''?>"
             name="time3" id="validationCustom02" placeholder="Duration"
              required>
          </div>
          <div class="col-md-4">
            <label for="validationCustomUsername" class="form-label">CGPA</label>
            <input type="text" class="form-control shadow-none" value ="<?= isset($_SESSION['info']['cgpa3'])? $_SESSION['info']['cgpa3'] : ''?>"  name="cgpa3" placeholder="Grade Ponits" id="validationCustomUsername"
              aria-describedby="inputGroupPrepend" required>
          </div>
        </div>
      </div>

      <h1 class="mt-5 mb-3" data-aos="fade-up"><b>LANGUAGE PROFICIENCY</b></h1>

      <div class="container mt-5" data-aos="fade-up">

        <div class="row">
          <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Language</label>
            <input type="text" class="form-control shadow-none" value ="<?= isset($_SESSION['info']['language1'])? $_SESSION['info']['language1'] : ''?>" name="language1" placeholder="Name of the language"
              id="inputEmail4" required>
          </div>
          <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Percentage</label>
            <input type="text" class="form-control shadow-none" value ="<?= isset($_SESSION['info']['langper1'])? $_SESSION['info']['langper1'] : ''?>" name="langper1" placeholder="enter percentage"
              id="inputEmail4" required>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Language</label>
            <input type="text" class="form-control shadow-none" value ="<?= isset($_SESSION['info']['language2'])? $_SESSION['info']['language2'] : ''?>" name="language2" placeholder="Name of the language"
              id="inputEmail4" required>
          </div>
          <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Percentage</label>
            <input type="text" class="form-control shadow-none" value ="<?= isset($_SESSION['info']['langper2'])? $_SESSION['info']['langper2'] : ''?>" name="langper2" placeholder="enter percentage"
              id="inputEmail4" required>
          </div>
        </div>

        <!-- <div class="row">
          <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Language</label>
            <input type="text" class="form-control shadow-none" value="<?= isset($_SESSION['info']['language3'])? $_SESSION['info']['language3'] : ''?>"  name="language3" placeholder="Name of the language"
              id="inputEmail4" required>
          </div>
          <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Percentage</label>
            <input type="text" class="form-control shadow-none" value ="<?= isset($_SESSION['info']['langper3'])? $_SESSION['info']['langper3'] : ''?>" name="langper3" placeholder="enter percentage"
              id="inputEmail4" required>
          </div>
        </div> -->

      </div>

      <div class="container mt-5 mb-5" >
        <div class="row ">
          <div class="col-md-2"></div>
          <div class="col-md-4">
            <button type="submit" class="btn btn-lg btn-primary mt-3 mb-3 button shadow-none" name="previousform1"><a
                href="form1.php" style="color:white;text-decoration:none; ">previous</a></button>
          </div>
          <div class="col-md-4">
            <button type="submit" class="btn btn-lg btn-primary mt-3 mb-3 button shadow-none" name="next1">Next</button>
          </div>
          <div class="col-md-2"></div>
        </div>
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
    duration: 700,
  });
</script>

</body>

</html>