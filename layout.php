<?php session_start();
include 'conn.php';

if(isset($_SESSION['info'])){
    
    extract($_SESSION['info']);
    
}

?>

<!---------------HTML CONTENT------------------------------------------------------>

<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Akaya+Kanadaka&family=Benne&display=swap" rel="stylesheet">
    <title>My Resume</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/82b716bd33.js"></script>
</head>

<body>
 <div class="main" >
    <div class="row main-container">
    
        <div class="col-sm-5 col-md-5 left-side">
            <!---Profile-->
            <div class="profileText">
                <div class="profileImage">
                    <img src="<?php echo $_SESSION["profilepic"];?>">
                </div>
                
                <h3><?php echo($fullname);?></h3>
                <h5 style="text-transform:uppercase;"><?php echo($role);?></h5>
            </div>
            <!--Contact Information-->
            <div class="contactInfo">
                <h3>contact-info</h3>
                <div class="row">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-1"><span class="icon"> <i class="fas fa-phone" aria-hidden="true"></i></span></div>
                    <div class="col-sm-10"><span class="text"><?php echo($phonenumber);?></span></div>
                </div>
                <div class="row">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-1"><span class="icon"> <i class="fas fa-envelope"aria-hidden="true"></i></span></div>
                    <div class="col-sm-10"> <span class="text"><?php echo($email);?></span></div>
                </div>
                <!-- <div class="row">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-1"><span class="icon"> <i class="fas fa-globe" aria-hidden="true"></i></span></div>
                    <div class="col-sm-10"><span class="text"><?php echo($portfoliolink);?></span></div>
                </div> -->
                <div class="row">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-1"><span class="icon"><i class="fab fa-linkedin" aria-hidden="true"></i></span></div>
                    <div class="col-sm-10"><span class="text"><?php echo($linkedIn);?></span></div>
                </div>
                <div class="row">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-1"><span class="icon"><i class="fas fa-map-marker-alt" aria-hidden="true"></i></span></div>
                    <div class="col-sm-10"><span class="text"><?php echo($address);?></span></div>
                </div>

            </div>
            <!--Education------------->
            <div class="contactInfo education edu" >
                <h3><i class="fas fa-graduation-cap p-2"></i>Education</h3>
                <ul>
                    
                    <li>
                        <h5 style="text-transform:uppercase;color: #BB8FCE ;"><?php echo($primary);?></h5>
                        <h4><?php echo($time1);?></h4>
                        <h4><?php echo($cgpa1);?> CGPA</h4>
                      </li>
                      <li>
                        <h5 style="text-transform:uppercase ;color: #BB8FCE ;"><?php echo($secondary);?></h5>
                        <h4><?php echo($time2);?></h4>
                        <h4><?php echo($cgpa2);?> CGPA</h4>
                      </li>
                      <li>
                        <h5 style="text-transform:uppercase ;color: #BB8FCE ;"><?php echo($graduation);?></h5>
                        <h4><?php echo($time3);?></h4>
                        <h4><?php echo($cgpa3);?> CGPA</h4>
                      </li>
                </ul>
            </div>
            <!--Languages-------------->
            <div class="contactInfo languages">
                <h3><i class="fas fa-language p-2"></i>Languages</h3>
                <ul>
                    <li>
                        <span class="text"><?php echo($language1);?></span>
                        <div class="progress"style="height:10px;">
                            <div class="progress-bar" role="progressbar" style="width: <?php echo($langper1);?>%"></div>
                          </div>
                    </li>
                    <li>
                        <span class="text"><?php echo($language2);?></span>
                        <div class="progress"style="height:10px;">
                            <div class="progress-bar" role="progressbar" style="width: <?php echo($langper2);?>%"  ></div>
                          </div>
                    </li>
                    <!-- <li>
                        <span class="text"><?php echo($language3);?></span>
                        <div class="progress" style="height:10px;">
                            <div class="progress-bar" role="progressbar" style="width:<?php echo($langper3);?>%" ></div>
                          </div>
                    </li> -->
                    
                    
                </ul>
            </div>
            <!----------achievements------------->
            <div class="contactInfo achievements">
                <h3> <i class="fas fa-award p-2"></i>Achievements</h3>
                <ul>
                    <li>
                        <h4 style="text-transform:uppercase; font-size:20px;"><?php echo($achievement1);?></h4>
                        <p><?php echo($adesc1);?></p>
                    </li>
                    <!-- <li>
                        <h4 style="text-transform:uppercase;font-size:20px;"><?php echo($achievement2);?></h4>
                        <p><?php echo($adesc2);?></p>
                    </li>
                    <li> -->
                        <!-- <h4 style="text-transform:uppercase;font-size:20px;"><?php echo($achievement3);?></h4>
                        <p><?php echo($adesc3);?></p>
                    </li> -->

                </ul>
            </div>
            
        </div>

        <div class=" col-sm-7 col-md-7 right-side">
            <!--about summary-------->
            <div class="about">
                
                <h3><i class="fas fa-user-circle p-2"></i>About me</h3>
                <p class="summary"style="color:#8E44AD "><?php echo($about);?></p>
               
            </div>
            <!---about Experience------------>
            <div class="about experience">
                <h3><i class="fas fa-briefcase p-2"></i>Experience</h3>
                <div class="row">
                    <div class="col-sm-4 duration"><?php echo($experiod1);?> </br><span style="text-transform:uppercase;"><?php echo($cname1);?></span> </div>
                    <div class="col"></div>
                    <div class="col-sm-7 description" style="color:#8E44AD "><?php echo($exdesc1);?></div>
                </div>
                <!-- <div class="row">
                    <div class="col-sm-4 duration"><?php echo($experiod2);?> </br> <span style="text-transform:uppercase;"><?php echo($cname2);?></span></div>
                    <div class="col"></div>
                    <div class="col-sm-7 description" style="color:#8E44AD "><?php echo($exdesc2);?></div>
                </div> -->
                
            </div>
            <!--about technical skills------------->
            <div class="about technicalSkills">
               <h3><i class="far fa-handshake p-2"></i>Technical skills</h3>
                <div class="row mt-3 mb-2">
                    <div class="col title" style="text-transform:uppercase;"><?php echo($tskill1);?></div>
                    <div class="col">
                        <div class="progress"style="height:10px;">
                            <div class="progress-bar" role="progressbar" style="width: <?php echo($tper1);?>%"></div>
                          </div>
                    </div>
                </div>
               
                <div class="row mt-3 mb-2">
                    <div class="col title" style="text-transform:uppercase;"><?php echo($tskill2);?></div>
                    <div class="col">
                        <div class="progress"style="height:10px;">
                            <div class="progress-bar" role="progressbar" style="width: <?php echo($tper2);?>%"></div>
                          </div>
                    </div>
                </div>
                <div class="row mt-3 mb-2">
                    <div class="col title" style="text-transform:uppercase;"><?php echo($tskill3);?></div>
                    <div class="col">
                        <div class="progress"style="height:10px;">
                            <div class="progress-bar" role="progressbar" style="width: <?php echo($tper3);?>%"></div>
                          </div>
                    </div>
                </div>
                <div class="row mt-3 mb-2">
                    <div class="col title" style="text-transform:uppercase;"><?php echo($tskill4);?></div>
                    <div class="col">
                        <div class="progress"style="height:10px;">
                            <div class="progress-bar" role="progressbar" style="width: <?php echo($tper4);?>%"></div>
                          </div>
                    </div>
                </div>
                <div class="row mt-3 mb-2">
                    <div class="col title" style="text-transform:uppercase;"><?php echo($tskill5);?></div>
                    <div class="col">
                        <div class="progress"style="height:10px;">
                            <div class="progress-bar" role="progressbar" style="width: <?php echo($tper5);?>%"></div>
                          </div>
                    </div>
                </div>
            </div>
            <!----projects-------------------------->
            <div class="about projects">
                <h3><i class="fas fa-rocket p-2"></i>Projects</h3>
                <ul>
                    <li><h4 style="text-transform:uppercase;"><?php echo($projecttitle1);?></h4></li>
                    <li><h5><?php echo($projectdate1);?></h5></li>
                    <li><h4 style="text-transform:uppercase;"><?php echo($projecttitle2);?></h4></li>
                    <li><h5><?php echo($projectdate2);?></h5></li>
                    <!-- <li><h4 style="text-transform:uppercase;"><?php echo($projecttitle3);?></h4></li> -->
                    <!-- <li><h5><?php echo($projectdate3);?></h5></li> -->
                </ul>
            </div>
            <!----------certifications---------------->
            <div class="about certifications">
                <h3><i class="fas fa-certificate p-2"></i>Certifications</h3>
                <ul>
                    <li>
                        <h4 style="text-transform:uppercase;"><?php echo($certiname1);?></h4>
                        <h5 style="text-transform:capitalize;">Issued By  <?php echo($org1);?></h5>
                        <h6 style="color: #6C3483 ;">Issued On <?php echo($ctime1);?></h6>
                    </li>
                    <li>
                        <h4 style="text-transform:uppercase;"><?php echo($certiname2);?></h4>
                        <h5 style="text-transform:capitalize;">Issued By <?php echo($org2);?></h5>
                        <h6 style="color: #6C3483 ;">Issued On <?php echo($ctime2);?></h6>
                    </li>
                    <!-- <li>
                        <h4 style="text-transform:uppercase;"><?php echo($certiname3);?></h4>
                        <h5 style="text-transform:capitalize;">Issued By <?php echo($org3);?></h5>
                        <h6 style="color: #6C3483 ;">Issued On <?php echo($ctime3);?></h6>
                    </li> -->
                </ul>
            </div>
            <!------------Interests--------------->
            <div class="about interests">
                <h3><i class="far fa-heart p-2"></i>Interest | Hobbies</h3>
                <ul>
                    <li><h4 style="text-transform:uppercase;"><?php echo($interest1);?></h4></li>
                    <li><h4 style="text-transform:uppercase;"><?php echo($interest2);?></h4></li>
                    <li><h4 style="text-transform:uppercase;"><?php echo($interest3);?></h4></li>
                </ul>
            </div>

        </div>
         
    </div>
    <div class="container">
        <div class="row">
            <div class="col"></div>
              <div class=" col mt-5 mb-5">
                  <button class="btn btn-primary btn-lg download shadow-none" onclick="window.print()" >DOWNLOAD RESUME</button>
              </div>
              <div class=" col mt-5 mb-5">
                  <button class="btn btn-primary btn-lg download shadow-none"  ><a href="index.php" style="text-decoration:none;">BACK TO HOME</a></button>
              </div>
             <div class="col"></div>
        </div>
    </div>
    
    
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








    <!--color codes:
            #4A235A 
            #5B2C6F
            #6C3483 
            #7D3C98
            #8E44AD 
            #A569BD 
            #BB8FCE 
            #E8DAEF 
            #F4ECF7-->


</body>

</html>

