<!DOCTYPE html>

<html>
  

<head>
  <title> My Resume</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="CSS/Resume.css">
  <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
</head>
  
<body>
  
  
  <div class="content-wrap" style="width: 100%;">
      <nav>
       <a href="#aboutme">About Me</a> |
       <a href="#ProfExperience">Professional Experience</a> |
       <a href="#edu">Education</a> |
       <a href="#tech">Technical Skills</a> |
       <a href="#portfo">Portfolio</a> |
       <a href="#ref">References</a> |
       <a href="HTML/Resumepdf.pdf">Download Resume</a>
      </nav>
    </div>

<header>
  <div id="blackcoverdiv">

    <div class="content-wrap">
      <h1 text-align="center" id="aboutme">Jose Javalera</h1> 
    
        <p>
          <img src="Images/me.jpg" alt="javi"  class="rounded-circle" alt="Cinque Terre" width="304" height="304">
        </p>
          
      <section class="aboutme"> 
        <p> 
          To contribute creativity, business sense, and understanding of e-commerce to develop interactive and effective web presences for small businesses. Leverages knowledge of social media and content designs to create highly reactive campaigns and marketing plans.
        </p>
      </section>

    </div>
</header>
  </div>


<section class="Education">
  <div id="EducationDiv">
    <div class="content-wrap" class="row" class="span1">
      <p>
        <img src="Images/graduation-cap2.png" alt="Graduation Hat" style="width:200px;height:200px; float: left;">
      </p>
    
      <h2 id="edu">Education</h2> 
    </div>
    <div class="row" class="span 4">
        <h3> <a href="https://www.slcc.edu/" target=_blank>Salt Lake Community College</a> <em>Associates of Science (A.S. Chemistry)</h3></em> <p>Degree 2013 Attended from 2008 to 2013.</p>

        <h3>Salt Lake/ Tooele Applied Technology <em>Utah Pharmacy Technician Certification</h3></em><p>Attended from Aug 2003 to Dec 2003. ASHP-Accredited Program. Completed 225 practicum hours at Walgreens Pharmacy.</P>
      
        <h3> <a href="https://www.johnsburg12.org/" target=_blank>Johnsburg High School </a> <em> High School Diploma</em></h3>
      High School Graduate, Class of 1993. 
    </div>
  </div>
</section>

<div class="container-fluid" class="w3-display-container w3-green"></div>>
<section class="Professional-Experience">
  <div id="ExperienceDiv">
    <div class="content-wrap">
      <div class="row">
      <div>
        <img src="Images/tie.svg" alt="Tie" style="width:150px;height:150px; float: left;"> 
      </div>
        <div>
          <h2 id="ProfExperience">Professional Experience</h2> 
          
          <h3> 
            <a href="https://www.facebook.com/modernchicqboutique/" target=_blank>Modern Chicq Boutique</a> Self-Employed | June 2017- Present
          </h3> 
          
          <ul style="list-style-type:disc;">
            <li> Builds and executes social media strategies through competitive audience research.</li>
            <li> Sets up company pages within each social media platform.</li>
            <li> Account for all incoming and outgoing inventory.</li>
            <li> Share product knowledge with customers.</li>
            <li> Manage day to day tactical and long term strategic activities within the business. Manage social media sites for the business.</li>
          </ul>
    </div>

    </div>

          <h3> 
            <a href="https://healthcare.utah.edu/locations/redwood/pharmacy.php/" target=_blank>University of Utah Redwood Pharmacy</a> 
            Pharmacy Technician II | October 2005-March 2013 and returned November 2015- June 2017 
          </h3> 
          <ul style="list-style-type:disk;"> 
            <li>Swiftly and correctly calculate dosages, dispense medications, prepare prescription labels and fill prescriptions for approval by pharmacists</li>
            <li>Use the pharmacy’s proprietary computer program to access prescription information including patient and prescriber data, drug selection, prescription interpretation and insurance billing.</li> 
            <li>Research and resolve dosage conflicts, potentially harmful drug interactions, insurance issues and other matters to ensure patient safety/wellness and build customer loyalty</li> 
            <li> Helped migrate pharmacy to new patient records system – transferred hundreds of profiles to database and trained several coworkers on new system.</li> 
            <li>Insurance processing (Medicaid, Medicare, Private Insurance).</li>
            <li> Worked with the MTM team to assist patient care and medication management.</li>
          </ul>
    
          <h3> 
            <a href="https://healthcare.utah.edu/infusion-services/infusion-pharmacy//" target=_blank> University of Utah Home Infusion</a> 
            Pharmacy Technician II | March 2013- November 2015 
          </h3> 
          
          <ul style="list-style-type:disc;">
            <li> Responsible for the day-to-day direction, guidance, and distribution of workloads for compounding technicians within the department.</li>
            <li> Complies with all USP 797 Guidelines and procedures.</li>
            <li> Reconstitutes bulk additives and prepares I.V. admixtures utilizing proper aseptic techniques.</li>
            <li> Oversees daily environmental monitoring and ensures proper documentation is being maintained within Simplifi 797 software and corresponding log sheet.</li>
            <li> Resolves complicated questions or issues and, is a source of information for other employees.</li>
            <li> Demonstrates a superior knowledge of the Cleanroom Complex area and operates as the "go to" person for other employees in that area.</li>
          </ul>
          
        </div>
      
    </div> 
        
    
  </div>
</Section>
</div>
<?php
 $mySkillz = ["HTML", "CSS","Bootstrap","JavaScript","PHP","MySQL"];
 ?> 
<div class="container">
  <section id="skills">
    <h1> Technical Skills in PHP</h1>
    <?PHP
    echo "<ul>";
    foreach ($mySkillz as $webtech){
       echo "<li>" . $webtech . "</li>";
    }
    echo "/ul";
    ?>
  </section>  
</div>

<div class="container,content-wrap">
  <section id="skills">
    <img src="Images/Technical Skills.png" alt="Technical-Skills" style="width:150px;height:150px; float: left;">
      
    <h2 id="tech"> Technical Skills</h2>
    
    <h4>Web Development and Design</h4>
    
    <!--
        <ul style="list-style-type:circle; float: right;">
          <li>Adobe PhotoshopCC2019</li>
          <li>HTML, CSS, and JavaScript</li>
          <li>Word Press</li>
          <li>Canva</li>
          <li>GIT Version Control System</li>
        </ul>
    
    
      <h4>Language</h4>
        <ul style="list-style-type:circle;">
          <li>Fluent in Spanish and English.</li>
        </ul>
       
      <h4>Pharmacy</h4>
        <ul style="list-style-type:circle;">
          <li> Prescription Processing</li>
          <li> Pharmaceutical Calculations Medical & Pharmaceutical Terminology</li>
          <li> Drug Classifications & Safety Medication</li>
          <li> Inventory Management</li>
          <li> FDA Compliance Medicare, Medicaid & Insurance Claims Processing</li>
          <li> Customer Service/Customer Relations</li>
        </ul>
      <!-->  
    
  </section> 
</div>

<section class="Core-Competencies">
  <div class="content-wrap" class="row" class="span1">
    <img src="Images/Core2.png" alt="Core-Competencies" style="width:150px;height:150px; float: left;">
  
    <h2> pore Competencies</h2>
  </div>
  <div class="row" class="span1">
      <ul style="list-style-type:circle;">
        <li>Attention to Detail</li>
        <li>Leadership</li>
        <li>Flexibility</li>
        <li>Communication</li>
        <li>Time management</li>
        <li>Problem-solving</li> 
        <li>Teamwork</li>
        <li>Self-Motivated</li>
      </ul>
  </div>    
</section>

<section class="Certificates-and-Awards">
  <div class="content-wrap" class="row" class="span1">
    <img src="Images/award.png" alt="Certificates-and-Awards" style="width:150px;height:150px; float: left;">
    
    <h2>Certificates and Awards</h2>
      <ul style="list-style-type:square;">
        <li>Certified Pharmacy Technician (CPhT)</li>
      </ul>  
      <ul style="list-style-type:none;">
        <li>Utah Pharmacy Technician Certification</li>
      </ul>
      <ul style="list-style-type:square;">
        <li>Circle of Distinction Award 2006 & 2007 (University of Utah Redwood Pharmacy)</li>
      </ul>
  </div>    
</section>

<section class="Portfolio-and-Projects">
  <div class="content-wrap">
    

    <h2 id="portfo"> Portfolio and Projects</h2>

    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="Images/Robot Love Shirt Design.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="Images/lucha libre poster.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="Images/aztec shirt design.jpg" alt="Third slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="Images/Chicago Poster-Recovered.jpg" alt="fourth slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
      
  </div>    
</section>

<section class="References">
  <div class="content-wrap">
     <h2 id="ref"> References</h2>

        <table id="references-table">
          <tbody border="1">
          
            <th>Company</th>
            <th>Contact</th>
            <th>Contact Info</th>
          
          </tr>
         
          <tr>
            <td>University of Utah Redwood Pharmacy</td>
            <td>Machaela Jaquez</td>
            <td>801-213-9950</td>
          </tr>
          
          <tr>
            <td>University of Utah Home Infusion</td>
            <td>Jamie Doi</td>
            <td>801-587-8600</td>
          </tr>
        </tbody>
        
        </table>
        
  <script>$( "tr:even" ).css( "background-color", "yellow" );
  </script>
  </div>    
</section>

<section class="Form">
<?php
function cleanData($data) {
  $data = htmlspecialchars($data);
  $data = trim($data);
  $data = stripslashes($date);
  
  return $data;
}
$name ="";
$nameErr ="";
$email ="";
$emailErr ="";
$reasonForContactingErr ="";

if (!empty($_POST{"name"])){
  $nameErr = "The name field is required";
} else {
  echo cleanData($_POST['name']);
}
  if (empty($_POST['phone'])){
    $emailErr = "The phone field is required!";
} else {
  echo cleanData($_POST["phone"]);
}
if (empty($_POST)["emailaddress"])) {
  $reasonForContactingErr = "The email field is required!";
} else {
  echo cleanData($_POST["email"]);
}
?>


?>

 <div class="content-wrap">
  <form autocomplete="on" target="_blank" method="POST" action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>">
     
      <h2 id="contactme">Contact Me</h2>    
      <label for="name">First and last name:</label><br>
      <input style="font-size: large;" size="50px" type="text" id="name" name="name"><br><br>
      <label for="phone">Phone number:</label><br>
      <input style="font-size: large;" size="50px" type="tel" id="phonenumber" name="phonenumber"><br><br>
      <label for="emailaddress">Your email address:</label><br>
      <input style="font-size: large;" size="50px" type="email" id="emailaddress" name="emailaddress"><br><br>
      <label for="subject">Subject:</label><br>
      <input style="font-size: large;" size="50px" type="text" id="subject" name="subject"><br><br>
      <label for="message">Message:</label><br>
      <textarea id="Message" style="font-size: large;" name="message" rows="10" cols="50"></textarea>
      <br><br>
      <input id="submit" onclick="getContactData();" type="submit">
  </form>
 </div>
 <?php


<footer>
  <div class="content-wrap">
      <text-align: center;>&copy;Jose Javalera 2020 </text-align:>
  </div> 
  <p id="my-paragraph"></p>     
</footer>


  <div class="modal fade" id="getUserName" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="getUserNameLabel">Hello!</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <label for="greetingName">Please enter your name</label>
          <input type="text" id="greetingName">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" onClick="greetUser()">Submit</button>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="greetUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="greetUserLabel">Welcome!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p><span id="message"> “Hi </span> <span id=userName></span>! Thank you for reviewing my resume site.”</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>



<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="scripts.js"></script>

</body>

</html>