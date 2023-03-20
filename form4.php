<?php
session_start();
if(isset($_POST['submit'])){
  foreach($_POST as $key => $value){
    $_SESSION['info'][$key] = $value;

  }
  $keys = array_keys($_SESSION['info']);
  if(in_array('submit',$keys)){
    unset($_SESSION['info']['submit']);
  }
  header('location:layout.php');
 
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form4</title>
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
<div class="pcontainer mt-5 mb-3">
      <ul class="progressbar" data-aos="fade-right">
        <li class="active">Step 1</li>
        <li class="active">Step 2</li>
        <li class="active">Step 3</li>
        <li id="4">Step 4</li>
      </ul>
    </div>

    <div class="container">
      <form action="" method="post">
        <div class="container mb-5"data-aos="fade-up-right">
            <h1 class="mt-3 mb-3"><b>PROJECTS</b></h1>
            <div class="row" data-aos="zoom-in-up">
                <div class="col-md-6">
                    <label class="form-label">Project Title</label>
                    <input type="text" class="form-control  shadow-none"  value ="<?= isset($_SESSION['info']['projecttitle1'])? $_SESSION['info']['projecttitle1'] : ''?>" name="projecttitle1" placeholder="Project Title" required>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Done on</label>
                    <input type="month" class="form-control shadow-none"  value ="<?= isset($_SESSION['info']['projectdate1'])? $_SESSION['info']['projectdate1'] : ''?>" name="projectdate1" placeholder="Done on" required>
                </div>
            </div>
            <div class="row" data-aos="zoom-in-up">
                <div class="col-md-6">
                    <label class="form-label">Project Title</label>
                    <input type="text" class="form-control shadow-none"  value ="<?= isset($_SESSION['info']['projecttitle2'])? $_SESSION['info']['projecttitle2'] : ''?>" name="projecttitle2" placeholder="Project Title" required>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Done on</label>
                    <input type="month" class="form-control shadow-none"  value ="<?= isset($_SESSION['info']['projectdate2'])? $_SESSION['info']['projectdate2'] : ''?>" name="projectdate2"  placeholder="Done on"  required>
                </div>
            </div>
            <!-- <div class="row" data-aos="zoom-in-up">
                <div class="col-md-6">
                    <label class="form-label">Project Title</label>
                    <input type="text" class="form-control shadow-none"  value ="<?= isset($_SESSION['info']['projecttitle3'])? $_SESSION['info']['projecttitle3'] : ''?>"  name="projecttitle3" placeholder="Project Title" required>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Issued on</label>
                    <input type="month" class="form-control shadow-none"  value ="<?= isset($_SESSION['info']['projectdate3'])? $_SESSION['info']['projectdate3'] : ''?>" name="projectdate3"  placeholder="Done on"  required>
                </div>
            </div> -->
        </div>

        <div class="container mb-5" >
            <h1 class="mt-3 mb-3"  data-aos="fade-right"><b>CERTIFICATIONS</b></h1>
            <div class="row" data-aos="zoom-in-up">
                <div class="col-md-4">
                    <label class="form-label">Certification name</label>
                    <input type="text" class="form-control shadow-none"  value ="<?= isset($_SESSION['info']['certiname1'])? $_SESSION['info']['certiname1'] : ''?>" name="certiname1" placeholder="Name of the certification" required>
                </div>
                <div class="col-md-4">
                    <label class="form-label">Issued by</label>
                    <input type="text" class="form-control shadow-none"  value ="<?= isset($_SESSION['info']['org1'])? $_SESSION['info']['org1'] : ''?>" name="org1" placeholder="Name of the Organisation" required>
                </div>
                <div class="col-md-4">
                    <label class="form-label">Issued on</label>
                    <input type="month" class="form-control shadow-none"  value ="<?= isset($_SESSION['info']['ctime1'])? $_SESSION['info']['ctime1'] : ''?>" name="ctime1" placeholder="Issued on" required>
                </div>
            </div>
            <div class="row" data-aos="zoom-in-up">
                <div class="col-md-4">
                    <label class="form-label">Certification name</label>
                    <input type="text" class="form-control shadow-none"  value ="<?= isset($_SESSION['info']['certiname2'])? $_SESSION['info']['certiname2'] : ''?>" name="certiname2" placeholder="Name of the certification" required>
                </div>
                <div class="col-md-4">
                    <label class="form-label">Issued by</label>
                    <input type="text" class="form-control shadow-none"  value ="<?= isset($_SESSION['info']['org2'])? $_SESSION['info']['org2'] : ''?>" name="org2" placeholder="Name of the Organisation" required>
                </div>
                <div class="col-md-4">
                    <label class="form-label">Issued on</label>
                    <input type="month" class="form-control shadow-none"  value ="<?= isset($_SESSION['info']['ctime2'])? $_SESSION['info']['ctime2'] : ''?>" name="ctime2" placeholder="Issued on" required>
                </div>
            </div>
            <!-- <div class="row" data-aos="zoom-in-up">
                <div class="col-md-4">
                    <label class="form-label">Certification name</label>
                    <input type="text" class="form-control shadow-none"  value ="<?= isset($_SESSION['info']['certiname3'])? $_SESSION['info']['certiname3'] : ''?>" name="certiname3" placeholder="Name of the certification" required>
                </div>
                <div class="col-md-4">
                    <label class="form-label">Issued by</label>
                    <input type="text" class="form-control shadow-none"    value ="<?= isset($_SESSION['info']['org3'])? $_SESSION['info']['org3'] : ''?>" name="org3" placeholder="Name of the Organisation" required>
                </div>
                <div class="col-md-4">
                    <label class="form-label">Issued on</label>
                    <input type="month" class="form-control shadow-none"  value ="<?= isset($_SESSION['info']['ctime3'])? $_SESSION['info']['ctime3'] : ''?>"  name="ctime3" placeholder="Issued on" required>
                </div>
            </div> -->

        </div>


        <div class="container mb-5">
            <h1 class="mt-3 mb-3"  data-aos="fade-right"><b>ACHIEVEMENTS</b></h1>
            <div class="row" data-aos="zoom-in-up">
                <div class="col-md-6">
                    <label class="form-label">Title</label>
                    <input type="text" class="form-control shadow-none"  value ="<?= isset($_SESSION['info']['achievement1'])? $_SESSION['info']['achievement1'] : ''?>" name="achievement1" placeholder="Name of the Achievement" required>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Description</label>
                    <input type="text" class="form-control shadow-none"  value ="<?= isset($_SESSION['info']['adesc1'])? $_SESSION['info']['adesc1'] : ''?>"  name="adesc1" placeholder="Describe about your achievement" required>
                </div>
            </div>
            <!-- <div class="row" data-aos="zoom-in-up">
                <div class="col-md-6">
                    <label class="form-label">Title</label>
                    <input type="text" class="form-control shadow-none"   value ="<?= isset($_SESSION['info']['achievement2'])? $_SESSION['info']['achievement2'] : ''?>" name="achievement2" placeholder="Name of the Achievement" required>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Description</label>
                    <input type="text" class="form-control shadow-none"  value ="<?= isset($_SESSION['info']['adesc2'])? $_SESSION['info']['adesc2'] : ''?>" name="adesc2" placeholder="Describe about your achievement" required>
                </div>
            </div>
            <div class="row" data-aos="zoom-in-up">
                <div class="col-md-6">
                    <label class="form-label">Title</label>
                    <input type="text" class="form-control shadow-none"  value ="<?= isset($_SESSION['info']['achievement3'])? $_SESSION['info']['achievement3'] : ''?>"  name="achievement3" placeholder="Name of the Achievement" required>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Description</label>
                    <input type="text" class="form-control shadow-none"  value ="<?= isset($_SESSION['info']['adesc3'])? $_SESSION['info']['adesc3'] : ''?>" name="adesc3"  placeholder="Describe about your achievement" required>
                </div>
            </div> -->

        </div>

        <div class="container mb-5">
            <h1 class="mt-3 mb-3"  data-aos="fade-right"><b>INTERESTS | HOBBIES</b></h1>
            <div class="row" data-aos="zoom-in-up">
                <div class="col-md-4">
                    <label class="form-label">Interest1</label>
                    <input type="text" class="form-control shadow-none"   value ="<?= isset($_SESSION['info']['interest1'])? $_SESSION['info']['interest1'] : ''?>" name="interest1" placeholder=" Your Interest"required>
                </div>
                <div class="col-md-4">
                    <label class="form-label">Interest2</label>
                    <input type="text" class="form-control shadow-none"  value ="<?= isset($_SESSION['info']['interest2'])? $_SESSION['info']['interest2'] : ''?>"  name="interest2" placeholder=" Your Interest" required>
                </div>
                <div class="col-md-4">
                    <label class="form-label">Interest3</label>
                    <input type="text" class="form-control shadow-none"  value ="<?= isset($_SESSION['info']['interest3'])? $_SESSION['info']['interest3'] : ''?>"  name="interest3" placeholder=" Your Interest" required>
                </div>
            </div>

        </div>

        <div class="container mt-5 mb-5"  data-aos="fade-up">

            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-4">
                    <button class=" btn btn-lg btn-primary mt-3 mb-3 button shadow-none" name="previousform3"><a href="form3.php" style="color:white;text-decoration:none;">Previous</a></button>
                </div>
                <div class="col-md-4">
                    <button class="btn btn-lg btn-primary mt-3 mb-3 button shadow-none" type="submit" name="submit">Submit</button>
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