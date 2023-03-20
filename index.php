<?php 
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!= true){
  header("location:signin.php");
  exit;
}
?>

<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <title>Index</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Akaya+Kanadaka&family=Benne&display=swap" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link
    href="https://fonts.googleapis.com/css2?family=Cutive+Mono&family=Great+Vibes&family=Londrina+Shadow&family=Monoton&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="css/index.css">
  
 



</head>

<body>
  <nav class="navbar navbar-expand-lg fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <h1>RESUME BUILDER</h1>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse col-xl" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#home">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#about">ABOUT</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#contact">CONTACT-US</a>
          </li>


        </ul>
        <form class="d-flex">
        
            <div >
            <h4>Welcome:</h4>
            <h5><?php echo $_SESSION['username']?></h5>
            </div>
          
          <div>
            <button class="btn " type="submit"><a href="logout.php" style="text-decoration: none; color:white;">LOGOUT</a></button>
          </div>
          
          
        </form>
      </div>
    </div>
  
  </nav>
  
  <div class="container home " id="home" >
  
    <div class="row">
    
      <div class="col-lg">
    
        <div>
        
          <h2>Create Your Resume</h2>
          
        </div>
        <h3>
          Making a resume is the first step of any job search. Not sure how to make a resume? Our online resume builder
          gives you free resume templates to follow.<br>
          The resume's sole purpose is to land you an interview. A resume is to give your potential employer a feel for
          your past experience and skills.
        </h3>
      </div>
      
      <div class="col-lg img  "><img src="images\undraw.png" width="100%">
      </div>
    </div>

  </div>
  <div class="container" id="about" data-aos="fade-left">
    <h4 class="about-head">ABOUT</h4>
    <div class="row about" data-aos="fade-up">
      <div class="col-lg mt-3 ">
        <img src="images\Resume.png" width="100%">
      </div>
      <div class="  col-lg">
        <h3 class="mb-3" style="color: #4A235A "><b>What is a resume?</b></h3>
        <p style="font-size:22px;font-weight:600;">A resume is a formal document that provides an overview of your professional
          qualifications, including your relevant work experience, skills, education, and notable accomplishments.
          Usually paired with a cover letter, a resume helps you demonstrate your abilities and convince employers
          you’re qualified and hireable.A strong resume communicates your qualifications and sets you up for career
          success. Here’s a full breakdown of what a resume is, why resumes are important for job seekers, and what
          makes each type of resume unique.
          There are several elements that make up a complete, well-rounded job application. Including all the right
          parts of a resume will give employers a clearer picture of your key qualifications, skills, and
          strengths<br>Here, we break down each of the components of a resume, and what you should include in each
          section.</p>
        <b>
          <div class="d-flex mx-auto" style="font-size: 22px;">
          <ul style="color:#4A235A;list-style-type: square;">
            <li>Personal Information</li>
            <li>Contact Information</li>
            <li>About</li>
            <li>Educational Information</li>
          </ul>
          <ul style="color:#4A235A; list-style-type: square;">
            <li>Technical Skills</li>
            <li>Achievements</li>
            <li>Certifications</li>
            <li>Projects</li>
          </ul>
        </div>
        </b>
      </div>
    </div>


    <div class="Resume-parts" data-aos ="fade-right">
      <h1><b>ESSENTIAL PARTS OF RESUME</b></h1>
    </div>
    <div class="row" data-aos ="fade-up">
      <div class="col-lg table-coloumn">
        <img src="images\Personal.png" style="width:100%"
          class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal1">
        <img src="images\Education.png" style="width:100%"
          class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal4">
        <img src="images\Certifications.png" style="width:100%"
          class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal7">
      </div>
      <div class="col-lg table-coloumn" data-aos ="fade-up">
        <img src="images\Contact.png" alt="Personal-Information"
          style="width:100%" class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal2">
        <img src="images\Skills.png" style="width:100%"
          class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal5">
        <img src="images\Projects.png" style="width:100%"
          class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal8">

      </div>
      <div class="col-lg table-coloumn" data-aos ="fade-up">
        <img src="images\About.png" style="width:100%"
          class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal3">
        <img src="images\Achievements.png" style="width:100%"
          class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal6">
        <img src="images\Interests.png" style="width:100%"
          class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal9">

      </div>


    </div>
    <div class="create-form" data-aos ="fade-right">
      <h3>Create your resume form <i class="fa fa-arrow-right"></i></h3>
      <button class="btn btn-lg mt-3 mb-3"><a href="form1.php" style="text-decoration:none;color:white;">CREATE</a></button>
    </div>
  </div>
  </div>



  <footer>
    <div class="footer" data-aos="fade-down">
      <div class="footer-content">
        <div class="footer-section about">
          <h1>RESUME BUILDER</h1>
          <p style="font-size: 20px;">
            Resume builder is a fictional blog conceived for the purpose
            of a Making a professional resume.
          </p>
          <!-- <br> -->

          <div class="contact">
            <i class="fa fa-phone"> &nbsp; 123-456-789</i>
            <i class="fa fa-envelope"> &nbsp; kundalavinash8@gmail.com</i>
          </div>

          <div class="social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-youtube-play"></i></a>
          </div>

        </div>

        <div class="footer-section quick-links">
          <h3>QUICK LINKS</h3>
          <ul>
            <a href="#home">
              <li>HOME</li>
            </a>
            <a href="#about">
              <li>ABOUT</li>
            </a>
            <!-- <a href="#team">
              <li>OUR TEAM</li>
            </a> -->
            <a href="#contact">
              <li>CONTACT US</li>
            </a>

          </ul>
        </div>

        <div class="footer-section contact-form-div">
          <h3 id="contact">Contact Us</h3>
          <br>
          <form action="https://formsubmit.co/dipeshkr123@gmail.com" method="post">
            <input type="text" name="name" class="text-input contact-input"placeholder="Your name">
            <input type="text" name="email-address" class="text-input contact-input" placeholder="Your email address">
            <textarea name="message" cols="20" rows="3" class="text-input contact-input"
              placeholder="Message..."></textarea>
            <button type="submit" name="send-msg-btn" class="send-msg-btn">
              <i class="fa fa-send"></i> Send
            </button>
          </form>
        </div>

      </div>
  </footer>
  <div class="container text-muted text-center py-3">
    <h5>
      <a class="text-primary text-decoration-none" href="#about">Developed By Avinash</a>
    </h5>
  </div>







  <div class="modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-labelledby="ModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title" id="exampleModalLabel"><b>Profile Section</b></h1>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true"><i class="fa fa-times fa-3x"></i></span>
          </button>
        </div>
        <div class="modal-body text-center text-dark">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <img class="img-fluid  rounded mb-5" width="100%"
                  src="images\Personal.png" alt="" />
              </div>
              <div class="col-lg-8 text-dark">
                <h1>Personal Information Section</h1>
                <h5>One of the major question which arises while adding personal details in resume is what all things
                  are to be added. Here is a detailed information on all the essential details in reume:<br><br>

                  <b>Your Name</b> – Keep in mind to write your name in bold so that it stands out. To make your resume easy to
                  stand out, the most important thing is to mention your name properly.<br><br>
                  <b>Address</b> –
                  You must mention your address right after you write your name. Your address counts as an essential
                  feature of personal details in the resume.
                  Mentioning your address serves as a trust factor in your resume.
                  It may also benefit you and raise your chances of getting the job if you live nearby your
                  office.<br><br>
                  <b>Telephone Number</b> – Another important detail in your personal details in resume is your telephone
                  number. When applying for a job which is placed internationally, remember to add the country code
                  before your phone number.<br><br>
                  <b>Email Address</b> – The next most important personal detail in resume is your email address. It comes
                  after your phone number. While writing your email address, you must keep in mind that <br>
                  <b>Your professional email address</b><br>
                  <b>Your personal email address</b><br>
                  It will be ideal if you create an email id which has your first and last name in it
                  Do not mention email addresses such as:<br>
                  <b>germaningoa@hotmail.com</b><br>
                  <b>princessmeg@rediffmail.com</b></h5>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>




  <div class="modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-labelledby="ModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title" id="exampleModalLabel"><b>Contact Section</b></h1>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true"><i class="fa fa-times fa-3x"></i></span>
          </button>
        </div>
        <div class="modal-body text-center text-dark">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <img class="img-fluid  rounded mb-5" width="60%"
                  src="images\Contact.png" alt="" />
              </div>
              <div class="col-lg-8 text-dark">
                <h1>Contact Information Section</h1>
                <h5><b>Mailing address</b>: Use a permanent mailing address on your resume. If you're a student, you might
                  include both your permanent address and your school address. Be sure to include any important details
                  to your address, such as an apartment number. If you're concerned about privacy, consider listing just
                  the city and state. For example, your address might read: Tampa, Florida. There are also other
                  circumstances where you may want to consider not listing your physical home address.<br>
                  <b>Email address</b>: Use a personal email address, not your work email address. You don’t want to mix your
                  current job emails with your job search emails. If you don't have a personal email account, sign up
                  for a free email account to use for job searching. However, also make sure that your personal address
                  is professional. Use your first and last name in the address. Avoid unprofessional email addresses,
                  such as <b>PartyTime@email.com</b>. Check the email account frequently, so that you can respond to employer
                  inquiries promptly.<br>
                  <b>Phone number</b>: It's very important to have voicemail on your phone so that hiring managers can leave a
                  message when you're not available. You don't want to miss any important calls. Be sure that your
                  voicemail message sounds professional; also make sure it includes your name, so the employer knows
                  they have called the right person.</h5>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>



  <div class="modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-labelledby="ModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title" id="exampleModalLabel"><b>About Section</b></h1>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true"><i class="fa fa-times fa-3x"></i></span>
          </button>
        </div>
        <div class="modal-body text-center text-dark">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <img class="img-fluid  rounded mb-5" width="60%"
                  src="images\About.png" alt="" />
              </div>
              <div class="col-lg-8 text-dark">
                <h1>About Information Section</h1>
                <h5>Your resume should be clear and easy to read. If you have extensive experience, your resume may seem
                  bulky or complex. A summary section can help reduce the complexity for those who have a wider range of
                  experiences down to the most relevant, important points. It may also encourage the hiring manager to
                  give your resume more attention if they find what they’re looking for in your resume summary.</h5>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>



  <div class="modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-labelledby="ModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title" id="exampleModalLabel"><b>Education section</b></h1>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true"><i class="fa fa-times fa-3x"></i></span>
          </button>
        </div>
        <div class="modal-body text-center text-dark">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <img class="img-fluid  rounded mb-5" width="60%"
                  src="images\Education.png" alt="" />
              </div>
              <div class="col-lg-8 text-dark">
                <h1>Educational Information Section</h1>
                <h5> <b>What's the best way to include your education on your resume</b>?<br> In the education section of your
                  resume, list the schools you attended, the degrees you attained, your GPA if you're a student or a
                  recent graduate, and any special awards and honors you earned.
                  If you have a lot of information to include in the education section of your resume, consider breaking
                  this section into subsections. The main section might include your schools and degrees, and then you
                  can have other sections such as “<b>Awards and Honors</b>,” “<b>Certifications</b>,” and “<b>Professional Development</b>.”
                  If you held a leadership role in a school-affiliated organization (such as a club, sport, or Greek
                  organization), you can list that below the Awards and Honors line.
                  Provide specifics (if useful). If the sub-college of your university is well known and relevant (e.g.,
                  say you graduated from the hospitality school of your university and are applying for a job in
                  hospitality) you can include that before you include your university name. For example, you could say
                  “School of Hospitality, XYZ College.”
                  You can leave out your GPA. If you're a student or recent graduate and your GPA wasn’t great, but you
                  have other accolades, just leave the GPA out and put something else, like “XYZ Award Recipient.” Once
                  you're out of school for a couple years, you should take your GPA out of your resume altogether.
                  You can leave out high school (after a while). Once you've been in college for a year or so (or once
                  you're in some other sort of continuing education), you can leave your high school degree and GPA out
                  of your resume. However, you should mention your high school diploma (or GED) if it is your highest
                  degree.
                  Tell the truth. It's very easy for an employer to confirm whether or not the education information in
                  your resume is true or not. He or she can simply check your transcript. If you're not happy with your
                  GPA, leave it out, but don’t make it up. Be honest.</h5>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>



  <div class="modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-labelledby="ModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title" id="exampleModalLabel"><b>Skills Section</b></h1>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true"><i class="fa fa-times fa-3x"></i></span>
          </button>
        </div>
        <div class="modal-body text-center text-dark">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <img class="img-fluid  rounded mb-5" width="60%"
                  src="images\Skills.png" alt="" />
              </div>
              <div class="col-lg-8 text-dark">
                <h1>Technical skills Section</h1>
                <h5>Technical skills are the abilities and knowledge needed to perform specific tasks. They are
                  practical, and often relate to mechanical, information technology, mathematical, or scientific tasks.
                  Some examples include knowledge of programming languages, design programs, mechanical equipment, or
                  tools.<br>

                  <b>Why are technical skills important</b> ?<br>
                  Technical skills are important for a number of reasons. They can help you work more efficiently, boost
                  your confidence and make you a more valuable candidate for employers. ... In addition, employees with
                  a technical skill are often better at multitasking in a challenging and complex role<br>


                  <b>How to List Skills on a Resume</b> ?<br>
                  Keep your resume skills relevant to the job you're targeting.
                  Include key skills in a separate skills section.
                  Add your work-related skills in the professional experience section.
                  Weave the most relevant skills into your resume profile.
                  Make sure to add the most in-demand skills.</h5>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>



  <div class="modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-labelledby="ModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title" id="exampleModalLabel"><b>Achievements Section</b></h1>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true"><i class="fa fa-times fa-3x"></i></span>
          </button>
        </div>
        <div class="modal-body text-center text-dark">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <img class="img-fluid  rounded mb-5" width="60%"
                src="images\Achievements.jpg" alt="" />
              </div>
              <div class="col-lg-8 text-dark">
                <h1>Personal Information Section</h1>
                <h5>Resume accomplishments are work achievements that are both measurable and unique to a job seeker's
                  experience
                  Start with a verb conjugated in the past tense (present tense if writing in French).
                  For results achieved through team work, use verbs such as “collaborated,” “cooperated” and “contributed to.”<br>

                  <b>Here are seven ways to talk about your accomplishments without sounding like a braggart</b>:<br>
                  
                  Keep The Emphasis On Your Hard Work. 
                  Don't Belittle Other People.
                  Give Credit Where It's Due. 
                  Stick To The Facts. 
                  Express Gratitude. 
                  Don't Add A Qualifier. 
                  Avoid The Humble-Brag.
                  Greatest professional achievement examples
                  Sales or revenue increases you have achieved.
                  Any job promotions.
                  Examples of when you have gone above and beyond what was asked of you.
                  Time or money you saved for the company.
                  Industry or work-related awards.
                
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>




  <div class="modal fade" id="portfolioModal7" tabindex="-1" role="dialog" aria-labelledby="ModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title" id="exampleModalLabel"><b>Certification Section</b></h1>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true"><i class="fa fa-times fa-3x"></i></span>
          </button>
        </div>
        <div class="modal-body text-center text-dark">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <img class="img-fluid  rounded mb-5" width="60%"
                  src="images\Certifications.png" alt="" />
              </div>
              <div class="col-lg-8 text-dark">
                <h1>Certifications Section</h1>
                <h5>Earning such a document shows that you're devoted to your field of work and provides evidence of
                  your skills. Adding a professional certification to your resume is proof that you have the competence
                  to do something. And for some positions, it is exactly this proof that could tilt the balance in your
                  favor.

                  <b>How to list certifications on a resume</b> ?<br>
                  List the certification's title.
                  Include the name of the host organization.
                  List the date earned.
                  List the prospective earn date.
                  Provide details on the associated skills.

                  If you want to include any online courses you have taken on your resume, you can use the following
                  steps to incorporate this training:
                  <b>*</b>Focus on relevant coursework.
                  <b>*</b>Choose your placement.
                  <b>*</b>List the courses.
                  <b>*</b>Include completion dates.
                  <b>*</b>Summarize your learning.<br>
                  Example 1: Listing online classes in the education section</h5>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>



  <div class="modal fade" id="portfolioModal8" tabindex="-1" role="dialog" aria-labelledby="ModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title" id="exampleModalLabel"><b>Projects Section</b></h1>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true"><i class="fa fa-times fa-3x"></i></span>
          </button>
        </div>
        <div class="modal-body text-center text-dark">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <img class="img-fluid  rounded mb-5" width="60%"
                  src="images\Projects.png" alt="" />
              </div>
              <div class="col-lg-8 text-dark">
                <h1><b>Projects Section</b></h1>
                <h5>It is all the projects you have done during the course of your academic years that will give the
                  employers a fair idea about the work you will be capable of doing. It is the project experiences in a
                  resume, that when showcased, will capture the attention of employers and help your resume get picked.
                  <b>Here are steps for highlighting projects on resumes:</b><br>
                  <b>*</b>Identify job-specific selling points you want to highlight.<br>
                  <b>*</b>Highlight projects where you used job-specific skills.<br>
                  <b>*</b>Include specific details of the project.<br>
                  <b>*</b>List projects under a separate section if you have extensive experience.<br>
                  <b>*</b>Keep project descriptions brief.</h5>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>



  <div class="modal fade" id="portfolioModal9" tabindex="-1" role="dialog" aria-labelledby="ModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title" id="exampleModalLabel"><b>Interests and Hobbies Section</b></h1>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true"><i class="fa fa-times fa-3x"></i></span>
          </button>
        </div>
        <div class="modal-body text-center text-dark">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <img class="img-fluid  rounded mb-5" width="60%"
                  src="images\Interests.png" alt="" />
              </div>
              <div class="col-lg-8 text-dark">
                <h1>Hobbies and interests Information Section</h1>
                <h5>It Can Prove That You're a Culture Fit. Listing your hobbies plays a role in demonstrating how
                  you'll relate to the company's culture. Any extracurricular work that supports what you know about the
                  culture is extremely relevant and should be present on your resume.<br>Your hobbies and interests
                  relate to the company and/or position. Including a hobby allows you to showcase skills relevant to the
                  role. The organization prompts you to include this information. Your education and work experience
                  don't fill a one-page resume.</h5>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>













<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  AOS.init({
    offset: 120,
    duration: 1000,
  });
</script>

</body>
</html>