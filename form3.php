<?php
session_start();
if(isset($_POST['next2'])){
  foreach($_POST as $key => $value){
    $_SESSION['info'][$key] = $value;

  }
  $keys = array_keys($_SESSION['info']);
  if(in_array('next2',$keys)){
    unset($_SESSION['info']['next2']);
  }
  header('location:form4.php');
  

}

?>





<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/form.css">
    <script src="script.js"></script>




</head>


<body>
<nav class="navbar navbar-expand-lg sticky-top navbar-dark" style="background-color:#6C3483 ;">
  <span class="navbar-brand mx-auto h1 "style="font-size:2.5rem;">RESUME FORM</span>
</nav>
<div class="pcontainer mt-5 mb-3" id="fcon3" data-aos="fade-up">
      <ul class="progressbar">
        <li class="active">Step 1</li>
        <li class="active">Step 2</li>
        <li >Step 3</li>
        <li>Step 4</li>
      </ul>
    </div>
    <div class="container" data-aos="fade-up-right">
       <form action="" method="post" >
        <div class="container">
            <h1 class="mt-5 mb-5"><b>ABOUT</b></h1>
            <div class="row">
                <div class="col">
                    <div class="input-group">
                        <input class="form-control shadow-none p-3" aria-label="With textarea" type="textarea" rows="4" cols="50" value ="<?= isset($_SESSION['info']['about'])? $_SESSION['info']['about'] : ''?>" name="about" placeholder="brief summary about yourself"   required>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <h1 class="mt-5 mb-5" data-aos="fade-right"><b>EXPERIENCE</b></h1>
            <div class="row" data-aos="zoom-in-up">
                <div class="col-md-3 col-sm-3">
                    <label class="form-label">Duration</label>
                    <input type="text" class="form-control shadow-none" value ="<?= isset($_SESSION['info']['experiod1'])? $_SESSION['info']['experiod1'] : ''?>" name="experiod1" placeholder="from - to" required>
                </div>
                <div class="col-md-3 col-sm-3">
                    <label class="form-label">Company name</label>
                    <input type="text" class="form-control shadow-none"  value ="<?= isset($_SESSION['info']['cname1'])? $_SESSION['info']['cname1'] : ''?>" name="cname1" placeholder="Company name" required>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Description</label>
                    <input type="text" class="form-control shadow-none" value ="<?= isset($_SESSION['info']['exdesc1'])? $_SESSION['info']['exdesc1'] : ''?>" name="exdesc1" placeholder="Description about your experience" required>
                </div>
            </div>
            <!-- <div class="row" data-aos="zoom-in-up">
                <div class="col-md-3 col-sm-3">
                    <label class="form-label">Duration</label>
                    <input type="text" class="form-control shadow-none" value ="<?= isset($_SESSION['info']['experiod2'])? $_SESSION['info']['experiod2'] : ''?>" name="experiod2" placeholder="from - to"  required>
                </div>
                <div class="col-md-3 col-sm-3">
                    <label class="form-label">Company name</label>
                    <input type="text" class="form-control shadow-none"  value ="<?= isset($_SESSION['info']['cname2'])? $_SESSION['info']['cname2'] : ''?>" name="cname2" placeholder="Company name" required>
                </div> -->
                <div class="col-md-6">
                    <label class="form-label">Description</label>
                    <input type="text" class="form-control shadow-none" value ="<?= isset($_SESSION['info']['exdesc2'])? $_SESSION['info']['exdesc2'] : ''?>" name="exdesc2" placeholder="Description about your experience" required>
                </div>
            </div>

        </div>
        <div class="container">
            <h1 class="mt-5 mb-5" data-aos="fade-right"><b>TECHNICAL SKILLS</b></h1>
            <div class="row" data-aos="zoom-in-up">
            <div class="col-md-6">
                    <label class="form-label">Name of the Skill</label>
                    <input type="text" class="form-control shadow-none" value ="<?= isset($_SESSION['info']['tskill1'])? $_SESSION['info']['tskill1'] : ''?>" name="tskill1" placeholder="Enter your skill" required>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Percentage</label>
                    <input type="text" class="form-control shadow-none" value ="<?= isset($_SESSION['info']['tper1'])? $_SESSION['info']['tper1'] : ''?>" name="tper1" placeholder="Enter percentage" required>
                </div>
            </div>
            <div class="row" data-aos="zoom-in-up">
                <div class="col-md-6">
                    <label class="form-label">Name of the Skill</label>
                    <input type="text" class="form-control shadow-none" value ="<?= isset($_SESSION['info']['tskill2'])? $_SESSION['info']['tskill2'] : ''?>" name="tskill2" placeholder="Enter your skill" required>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Percentage</label>
                    <input type="text" class="form-control shadow-none" value ="<?= isset($_SESSION['info']['tper2'])? $_SESSION['info']['tper2'] : ''?>" name="tper2" placeholder="Enter percentage" required>
                </div>
            </div>
            <div class="row" data-aos="zoom-in-up">
                <div class="col-md-6">
                    <label class="form-label">Name of the Skill</label>
                    <input type="text" class="form-control shadow-none" value ="<?= isset($_SESSION['info']['tskill3'])? $_SESSION['info']['tskill3'] : ''?>" name="tskill3" placeholder="Enter your skill" required>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Percentage</label>
                    <input type="text" class="form-control shadow-none" value ="<?= isset($_SESSION['info']['tper3'])? $_SESSION['info']['tper3'] : ''?>" name="tper3" placeholder="Enter percentage" required>
                </div>
            </div>
            <div class="row" data-aos="zoom-in-up">
                <div class="col-md-6">
                    <label class="form-label">Name of the Skill</label>
                    <input type="text" class="form-control shadow-none" value ="<?= isset($_SESSION['info']['tskill4'])? $_SESSION['info']['tskill4'] : ''?>" name="tskill4" placeholder="Enter your skill" required>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Percentage</label>
                    <input type="text" class="form-control shadow-none" value ="<?= isset($_SESSION['info']['tper4'])? $_SESSION['info']['tper4'] : ''?>" name="tper4" placeholder="Enter percentage" required>
                </div>
            </div>
            <div class="row" data-aos="zoom-in-up">
                <div class="col-md-6">
                    <label class="form-label">Name of the Skill</label>
                    <input type="text" class="form-control  shadow-none" value ="<?= isset($_SESSION['info']['tskill5'])? $_SESSION['info']['tskill5'] : ''?>"  name="tskill5" placeholder="Enter your skill" required>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Percentage</label>
                    <input type="text" class="form-control shadow-none" value ="<?= isset($_SESSION['info']['tper5'])? $_SESSION['info']['tper5'] : ''?>" name="tper5" placeholder="Enter percentage" required>
                </div>
            </div>
        </div>

        <div class="container mt-5 mb-5" data-aos="fade-up">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-4">
                    <button class="btn btn-lg btn-primary mt-3 mb-3 button shadow-none" name="previousform2"><a href="form2.php"
                            style="color:white;text-decoration:none;">Previous</a></button>
                </div>
                <div class="col-md-4">
                    <button class="btn btn-lg btn-primary mt-3 mb-3 button shadow-none" name="next2" type="submit">Next</button>
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
    duration: 1000,
  });
</script>

</body>

</html>