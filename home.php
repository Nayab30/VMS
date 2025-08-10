<?php

include("Admindashboard/connection.php");
session_start();

error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vaxhealth</title>


    <!-- ----AOS scroll-animation -->
      <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- Font CDN -->
 <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Winky+Rough:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">

<!-- CSS file -->
<!-- <link rel="stylesheet" href="./assets/CSS/nav.css"> -->
<link rel="stylesheet" href="./assets/CSS/style.css">


 <!--Font Awesome-->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css" integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />


<!-- Remix ICON CDN -->
<link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css"
    rel="stylesheet"
/>

<!-- ----Jquery cdn -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>



<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


<!--  -->

<!-- Bootstrap JS bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>



</head>
<body >

    <!--Page loader-->
    <div class="loader-wrapper">
        <div class="loader-circle">
            <div class="loader-wave"></div>
        </div>
    </div>
    <!--Page loader-->

    <!--Page Wrapper-->
<div class="container-fluild">
  <!-- --------------- Head Section----------- -->
     <header>
    
<!-- --------------------Navbar---------------- -->

    <nav id="nav">
  <div class="lft-nav">
    <a href="#home"><img src="./assets/image/logo.png" alt="logo" class="logo" width="100"></a>

  </div>
  <div class="cent-nav">
    <a href="#home" class="active" >HOME</a>
    <a href="#about" >ABOUT US</a>
    <a href="#vaccine" >VACCINE</a>
    <a href="#hospital" >HOSPITALS</a>
    <a href="#stories" >REVIEWS</a>

    <a href="#contact" >CONTACT US</a>
    <a href="#"  data-bs-toggle="modal" data-bs-target="#myModallogin" >LOGIN  </a>
  </div>
  <div class="right-nav ">
    <button class="" data-bs-toggle="modal" data-bs-target="#myModalregister">REGISTER NOW</button>
  
  </div>
 

  <i class="ri-menu-3-line"></i>

   <i class="ri-moon-fill" id="toggleDark"></i>
</nav>
  </header>
<section>
 
    <!-- --------------- responsive navbar------------ -->
<div class="responsive-nav">
<i class="ri-close-large-line"></i>
    <a href="#home">Home</a>
    <a href="#about">ABOUT US</a>
    <a href="#vaccine">VACCINE</a>
    <a href="#hospital">HOSPITALS</a>
    <a href="#contact">CONTACT US</a>
    <a href="#"  data-bs-toggle="modal" data-bs-target="#myModallogin" >LOGIN  </a>
    <div class="res-nav-btn">
    <button class="" data-bs-toggle="modal" data-bs-target="#myModalregister">REGISTER NOW</button>
   
    
</div>
</div>
    </section>


<!-- ------------------Head banner-------------------- -->
<section id="home" class="banner">
   
<div class="container hd-banner">
    <div class="hero-hd" >
        <h1 data-aos="">“A Healthier Tomorrow Begins with a Single Shot Today”</h1>

        <p data-aos="">VaxHealth is a secure and intuitive vaccination platform that empowers users to book vaccine appointments with ease, it makes staying up to date with immunizations simple for individuals, families, and organizations alike.

</p>

        <div class="hero-btn">
    <button class="" data-bs-toggle="modal" data-bs-target="#myModalregister">REGISTER NOW</button>
    <button class="" data-bs-toggle="modal" data-bs-target="#myModallogin">LOGIN NOW</button>

        
        </div>

    </div>
    <div>
        <img src="./assets/image/banner-pic.png"  alt="pic" class="slide-left" data-aos="fade" width="">
    </div>
</div>

</section>
 
<section>

   <div class="pre-vac" >
    <marquee><p style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif ">At VaxHealth, we believe prevention is the first step toward lifelong wellness.  </p></marquee>

</div>
 <!-- <div class="pre-vac" >
   
    <marquee direction="right"><p style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif ">With easy appointment booking, trusted information, and digital vaccine records, we make staying protected simple and stress free you and your loved ones.. </p></marquee>

</div> -->
</section>   



<!-- -----------------banner2 aboutUs ---------------->

<section id=about>

<div class="bn2">

    <div>

        <img src="./assets/image/pic4.png" class="slide-left"  alt="pic" width="" data-aos="slide-up">
    </div>
    <div class="bn2-content" >
        <h2 >Our Mission & Values</h2>
        <h1 style="color:#BD3988;">“Vaccinate Your Family’s mission is to protect people of all ages from vaccine-preventable diseases"</h1>

        <h2>Our Core Values:</h2>

        <p><strong>Innovation:</strong> VH will carry on the legacy of its dauntless co-founders by continuing to seek bold solutions to current and future vaccination challenges.</p>

        <p><strong>Honor:</strong> VH remembers those who have suffered from vaccine-preventable diseases and pledges to honor them through all our work</p>

        <p><strong>Equity and Inclusion:</strong> VH puts the needs of marginalized communities first and intentionally strives to ensure equitable access to life-saving vaccines..</p>

        <p><strong>Community and Partnerships:</strong> VH values the transformative impact of collaboration and works with partners to further cultural understanding and build inclusive and empowering partnerships to reignite a culture of immunization.</p>


    </div>

</div>



</section>


 <!-- ---------------------------------counter------------------------ -->

<section>
    <div class="num-counter">

     <div class="container ">
    <div class= "row mx-4 count-row" >
      <div class="col-lg-3 col-md-3 col-sm-3 col-3 ">
       
          <div class="count-col" ><h2 class="counter">15</h2></div>
        <p >Year Of Experience</p>
       
      </div>
  
      <div class="col-lg-3 col-md-3 col-sm-3 col-3 ">
        <h2 class="counter" >414</h2>
        <p >Happy Cases</p>
      </div>
  
      <div class="col-lg-3 col-md-3 col-sm-3 col-3 ">
        <h2 class="counter">521</h2>
        <p >Successfull Stories</p>
      </div>
  
      <div class="col-lg-3 col-md-3 col-sm-3 col-3 ">
        <h2 class="counter">14</h2>
        <p >Awards Recognitions</p>
      </div>
  
    </div>
  </div>
  
  
    </div>

    
</section>


 

<!-- -----------------------Vaccine----------- -->

<section id="vaccine">

<div class="v-card">
   <h2 class="hd"  data-aos="slide-up">Vaccine Preventable Diseases
</h2>
<div class="container ">
<section class="container">
  <div class="row r-card">
     <div class="col" data-aos="flip-left">
      <div class="card">
        <div class="info">
            <img src="./assets/image/v3.JPG">
        </div>

        <div class="desc">
          
            <h3>Diarrhoea Diseases</h3>
            <br>
           
            <div class="rating">
               
                <span>*******</span>

            </div>

           

            <div class="about">Rotavirus infection is common in young children and adults. Rotavirus is the number one cause of diarrhoea and kills around 53,300 children in Pakistan each year.

Its symptoms appear after two days and last for a week. If left untreated, it can also result in death, especially in young infants.
            </div>

           
        </div>
     </div>
     </div>
<!-- 2 -->
  <div class="col" data-aos="flip-right">
      <div class="card">
        <div class="info">
            <img src="./assets/image/v5.JPG">
        </div>

        <div class="desc">
          
            <h3>Diphtheria</h3>
            <br>
            <br>
            <br>
            
            <div class="rating">
               
                <span>*******</span>

            </div>

           

            <div class="about">Diphtheria is a contagious bacterial infection that spreads from one person to another and attacks the respiratory system (nose, throat and tonsils). If left untreated, it can damage internal organs that may result in death.


            </div>

           
        </div>
     </div>
     </div>

  <!-- 3 -->

    <div class="col" data-aos="flip-left">
      <div class="card">
        <div class="info">
            <img src="./assets/image/v1.JPG">
        </div>

        <div class="desc">
          
            <h3>Childhood Tuberculosis(TB)</h3>
            <br>
            <br>
            <br>
            <br>

            <br>
            <div class="rating">
               
                <span>*****</span>

            </div>

           

            <div class="about">TB is usually spread through breathing and that is how it enters the lungs. If left untreated, it can harm the lungs and brain.
            </div>

           
        </div>
     </div>
     </div>

     <!-- 4  -->
       <div class="col" data-aos="flip-right">
      <div class="card">
        <div class="info">
            <img src="./assets/image/v4.png">
        </div>

        <div class="desc">
          
            <h3>Pneumonia Diseases</h3>
            <br>
            <br>
            <br>
            <div class="rating">
               
                <span>********</span>

            </div>

           

            <div class="about">Pneumonia is a lungs infection that spreads through breathing. It causes inflammation which  results in stiffness of lungs and makes it difficult to breathe. If left untreated, it can also result in death, especially in young infants.
            </div>

           
        </div>
     </div>
     </div>

  </div>

  <!-- ---second row-- -->

  <div class="row r-card">
     <div class="col" data-aos="flip-right">
      <div class="card">
        <div class="info">
            <img src="./assets/image/v1.JPG">
        </div>

        <div class="desc">
          
            <h3>Pertussis(Whooping Cough)</h3>
            
            <div class="rating">
               
                <span>*******</span>

            </div>

           

            <div class="about">Pertussis is an infectious disease that causes violent coughing spells with a high-pitched noise which makes it difficult to breathe. Pertussis is spread from one child to another through the nose or mouth by coughing, sneezing or touching infected surfaces. If left untreated it can harm the child’s internal organs.
            </div>

           
        </div>
     </div>
     </div>
<!-- 2 -->
  <div class="col" data-aos="flip-left">
      <div class="card">
        <div class="info">
            <img src="./assets/image/v2.png">
        </div>

        <div class="desc">
          
            <h3>Polio Diseases</h3>
          
         
            <div class="rating">
               
                <span>*******</span>

            </div>

           

            <div class="about">Polio is a highly infectious viral disease that mainly affects young children. The virus is transmitted through contaminated water and food, and from person to person by infected saliva or faeces. The virus attacks the nervous system which can cause paralysis, mostly in the lower limbs and it is often permanent.
            </div>

           
        </div>
     </div>
     </div>

  <!-- 3 -->

    <div class="col" data-aos="flip-right">
      <div class="card">
        <div class="info">
            <img src="./assets/image/v3.JPG">
        </div>

        <div class="desc">
          
            <h3>Tetanus</h3>
            <br>
            <br>
            <br>
            <div class="rating">
               
                <span>*****</span>

            </div>

           

            <div class="about">Tetanus is caused by bacteria found in the soil and it enters the body through open wounds like cuts, burns and non-sterile surgery. If left untreated, it can result in death through paralysis of the throat and respiratory muscles.
            </div>

           
        </div>
     </div>
     </div>

     <!-- 4  -->
       <div class="col" data-aos="flip-left">
      <div class="card">
        <div class="info">
            <img src="./assets/image/v4.png">
        </div>

        <div class="desc">
          
            <h3>Hepatitis-B</h3>
            <br>
            <br>
            <br>
            <div class="rating">
               
                <span>********</span>

            </div>

           

            <div class="about">Hepatitis B is a contagious liver disease that results from the Hepatitis B virus. It is spread through exchange of blood or other body fluids of an infected person and also transmitted from an infected mother to a child at birth. If left untreated, it can result in liver failure.
            </div>

           
        </div>
     </div>
     </div>

  </div>


</section>

</div>


</div>

</section>

<!-- ----------------------------hospitals----- -->
<section class="h-sec" id="hospital">
  <div class="h-hd" data-aos="slide-up">
    <h1>Hospitals Details</h1>
  </div>

  <div class="container">
    <div class="accordion" id="accordionExample" data-aos="fade-up">
      <?php 
      include('Admindashboard/connection.php');
      $qry ="SELECT * FROM hospital_tbl";
      $res = mysqli_query($conn,$qry);

      if(mysqli_num_rows($res) > 0){
        $count = 1;
        while($row = mysqli_fetch_array($res)){
          ?>
          <div class="accordion-item">
            <h2 class="accordion-header" id="heading<?php echo $count; ?>">
              <button class="accordion-button <?php echo ($count !== 1) ? 'collapsed' : ''; ?>" 
                      type="button" 
                      data-bs-toggle="collapse" 
                      data-bs-target="#collapse<?php echo $count; ?>" 
                      aria-expanded="<?php echo ($count === 1) ? 'true' : 'false'; ?>" 
                      aria-controls="collapse<?php echo $count; ?>">
                <?php echo htmlspecialchars($row['h_name']); ?>
              </button>
            </h2>
            <div id="collapse<?php echo $count; ?>" 
                 class="accordion-collapse collapse <?php echo ($count === 1) ? 'show' : ''; ?>" 
                 data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p><strong>Address:</strong> <?php echo htmlspecialchars($row['h_address']); ?></p>
                <p><strong>Phone:</strong> <?php echo htmlspecialchars($row['h_phone']); ?></p>
                <p><strong>Email:</strong> <?php echo htmlspecialchars($row['h_email']); ?></p>
              </div>
            </div>
          </div>
          <?php
          $count++;
        }
      }
      ?>
    </div>

    <br>
    <h2>For Hospital Management</h2>
    <button class="h-add-btn" data-bs-toggle="modal" data-bs-target="#myModalHregister">Register here</button>
    <button class="h-add-btn" data-bs-toggle="modal" data-bs-target="#myModalHlogin">Login here</button>
  </div>
</section>


  
 
 <!-- ------------------ stories------------------- -->

 <section id="stories">
  <div class="story-body">
    <!-- <h1>Our successfull stories</h1> -->
  

    <div id="main-p">
      <h2 class="main-p-h"  data-aos="slide-up">Our Testinomial</h2>
    </div>
    <div id="main">
      <div id="top">
       
        <h1 id="top-h">REVIEW</h1>
      </div>
      <div id="center">
        <div id="content">
          <!-- <h2>my clients</h2> -->
         <div class="container" data-aos="slide-up">

         <!-- Carousel -->
<div id="demo" class="carousel slide" data-bs-ride="carousel">

  <!-- Indicators/dots -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
  </div>

  <!-- The slideshow/carousel -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <!-- <img src="la.jpg" alt="Los Angeles" class="d-block w-100"> -->
       <div class="view-row" >
        <div class="view-col" >
          <img src="assets/image/r1.png" width="100" height="100">
          <h4 class="text-center">Sadia Bano</h4>
          <p class="text-center">"We truly appreciate the time you took to share your thoughts with us. Your feedback helps us understand what we’re doing well and where we can improve. Every suggestion is valuable, and we are committed to making your experience even better in the future. Thank you for trusting us and being part of our journey"</p>
        </div>
        <div class="view-col">
          <img src="assets/image/r2.jpg" width="100" height="100">
          <h4 class="text-center">Huda Iqbal</h4>
          <p class="text-center">"I really appreciate how user-friendly this vaccination website is. The layout is clean, and I was able to find the nearest hospital in just a few clicks. The email confirmations and text reminders were an added bonus, making the whole process stress-free."</p>
        </div>
        <div class="view-col">
          <img src="assets/image/r3.jpg" width="100" height="100">
          <h4 class="text-center">Ali Raza</h4>
          <p class="text-center">"This platform made it so easy to track my baby’s vaccination schedule. I no longer have to worry about missing any important vaccines. The information provided is clear, and the appointment booking system works flawlessly. Highly recommended for all parents!"</p>
        </div>


       </div>
    </div>
    <div class="carousel-item">
      <!-- <img src="chicago.jpg" alt="Chicago" class="d-block w-100"> -->
        <div class="view-row" >
        <div class="view-col" >
          <img src="assets/image/r4.jpg" width="100" height="100">
          <h4 class="text-center">Sobia Tariq</h4>
          <p class="text-center">"I booked my child’s vaccination appointment through this website, and the process was so simple and quick. The reminders were very helpful, and the staff at the clinic were extremely professional and caring. It gave me peace of mind knowing my child’s immunization records are safely stored online."</p>
        </div>
        <div class="view-col">
          <img src="assets/image/r5.jpg" width="100" height="100">
          <h4 class="text-center">Waseem Khan</h4>
          <p class="text-center">"Thanks to this website, I never miss my vaccination dates. The reminders are on time, and I can check my entire vaccination history in one place. It’s a must-have for busy parents who want to keep their family’s health on track."</p>
        </div>
        <div class="view-col">
          <img src="assets/image/r6.jpg" width="100" height="100">
          <h4 class="text-center">Mariam Khan</h4>
          <p class="text-center">"A very professional and reliable service! The registration process was quick, and I got instant confirmation of my child’s appointment. The hospital staff followed all safety protocols, and I felt confident in their care. Will definitely use this website again."</p>
        </div>


       </div>
    </div>
    <div class="carousel-item">
      <!-- <img src="ny.jpg" alt="New York" class="d-block w-100"> -->
        <div class="view-row" >
        <div class="view-col" >
          <img src="assets/image/r7.jpg" width="100" height="100">
          <h4 class="text-center">M. Salar khan</h4>
          <p class="text-center">"The vaccination booking system on this site is fantastic. I booked for my elderly parents, and the staff was patient and kind during the visit. I also love how the website provides vaccine details, including benefits and possible side effects. It really helped us make informed decisions."</p>
        </div>
        <div class="view-col">
          <img src="assets/image/r8.jpg" width="100" height="100">
          <h4 class="text-center">Farwa Ali</h4>
          <p class="text-center">"Thanks to this website, I never miss my vaccination dates. The reminders are on time, and I can check my entire vaccination history in one place. It’s a must-have for busy parents who want to keep their family’s health on track."</p>
        </div>
        <div class="view-col">
          <img src="assets/image/r9.jpg" width="100" height="100">
          <h4 class="text-center">M.Akhtar Shahid</h4>
          <p class="text-center">"We truly appreciate the time you took to share your thoughts with us. Your feedback helps us understand what we’re doing well and where we can improve. Every suggestion is valuable, and we are committed to making your experience even better in the future. Thank you for trusting us and being part of our journey"</p>
        </div>


       </div>
    </div>
  </div>

  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev pl-4" type="button" data-bs-target="#demo" data-bs-slide="prev" style="padding-right:100px;">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>
          
        <div class="s-card"  > 


            <!-- 1 -->
            <!-- <div class="s-image" data-aos="slide-up"  data-aos-delay="1000">
                <div class="s-about">
                    <h3 class="s-name">Sara khan</h3>
              
    
                    <h2 class="s-mo">Reviews</h2>
                    <div class="s-mov">
                       
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repudiandae itaque autem ullam ducimus! Ipsam beatae in vel perspiciatis facere earum incidunt, ea, dignissimos ipsa odio, maxime rerum. Ullam, cumque quaerat.</p>
                        
                    </div>
    
                </div>
            </div> -->

<!-- 2 -->

        <!-- <div class="s-image" data-aos="slide-up"  data-aos-delay="2000">
                 <div class="s-about">
                    <h3 class="s-name">Saba Ahmed</h3>
              
    
                    <h2 class="s-mo">Reviews</h2>
                    <div class="s-mov">
                       
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repudiandae itaque autem ullam ducimus! Ipsam beatae in vel perspiciatis facere earum incidunt, ea, dignissimos ipsa odio, maxime rerum. Ullam, cumque quaerat.</p>
                        
                    </div>
    
                </div>
            </div> -->
<!-- 3 -->
            <!-- <div class="s-image" data-aos="slide-up"  data-aos-delay="3000">
                <div class="s-about">
                    <h3 class="s-name">Sara </h3>
              
    
                    <h2 class="s-mo">Reviews</h2>
                    <div class="s-mov">
                   
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repudiandae itaque autem ullam ducimus! Ipsam beatae in vel perspiciatis facere earum incidunt, ea, dignissimos ipsa odio, maxime rerum. Ullam, cumque quaerat.</p>
                        
                    </div>
    
                </div>
            </div> -->


          <!--  4-->
            <!-- <div class="s-image" data-aos="slide-up"  data-aos-delay="1000">
                 <div class="s-about">
                    <h3 class="s-name">Sara khan</h3>
              
    
                    <h2 class="s-mo">Reviews</h2>
                    <div class="s-mov">
                      
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repudiandae itaque autem ullam ducimus! Ipsam beatae in vel perspiciatis facere earum incidunt, ea, dignissimos ipsa odio, maxime rerum. Ullam, cumque quaerat.</p>
                        
                    </div>
    
                </div>
            </div> -->
<!-- 5 -->

    
            <!-- <div class="s-image" data-aos="slide-up"  data-aos-delay="2000">
                <div class="s-about">
                    <h3 class="s-name">Sara khan</h3>
              
    
                    <h2 class="s-mo">Reviews</h2>
                    <div class="s-mov">
                        
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repudiandae itaque autem ullam ducimus! Ipsam beatae in vel perspiciatis facere earum incidunt, ea, dignissimos ipsa odio, maxime rerum. Ullam, cumque quaerat.</p>
                        
                    </div>
    
                </div>
            </div> -->
<!-- 6 -->

 <!-- <div class="s-image" data-aos="slide-up"  data-aos-delay="3000" >
                <div class="s-about">
                    <h3 class="s-name">Salar Asif</h3>
              
    
                    <h2 class="s-mo">Reviews</h2>
                    <div class="s-mov">
                        
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repudiandae itaque autem ullam ducimus! Ipsam beatae in vel perspiciatis facere earum incidunt, ea, dignissimos ipsa odio, maxime rerum. Ullam, cumque quaerat.</p>
                        
                    </div>
    
                </div>
            </div> -->

            <!-- 7 -->

             <!-- <div class="s-image" data-aos="slide-up"  data-aos-delay="1000">
                <div class="s-about">
                    <h3 class="s-name">Tooba Asif</h3>
              
    
                    <h2 class="s-mo">Reviews</h2>
                    <div class="s-mov">
                        
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repudiandae itaque autem ullam ducimus! Ipsam beatae in vel perspiciatis facere earum incidunt, ea, dignissimos ipsa odio, maxime rerum. Ullam, cumque quaerat.</p>
                        
                    </div>
    
                </div>
            </div> -->

            <!-- 8 -->

            <!-- <div class="s-image" data-aos="slide-up"  data-aos-delay="2000">
                <div class="s-about">
                    <h3 class="s-name">Marium Javed</h3>
              
    
                    <h2 class="s-mo">Reviews</h2>
                    <div class="s-mov">
                        
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repudiandae itaque autem ullam ducimus! Ipsam beatae in vel perspiciatis facere earum incidunt, ea, dignissimos ipsa odio, maxime rerum. Ullam, cumque quaerat.</p>
                        
                    </div>
    
                </div>
            </div> -->
        </div>
    </div>
        </div>


      </div>
      <div id="bottom">
        <h1 id="bottom-h">REVIEW</h1>

      </div>

    </div>

  </div>
 </section>
  

 
 <!-- ---------------contact--------- -->

 <section class="contact" id="contact">
  <div class="container c-row"  data-aos="slide-up">
    <div class="c-data col ">
      <h1 class="m-2 my-4 display-4">GET IN TOUCH</h1>
      <div class="container mb-4">
        <form action="contact-insert.php" method="post"  >
  <div class="row">
    <div class="col">
      <input type="text" class="form-control" placeholder="Your Name" name="name" id="name">
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Phone no" name="phn" id="phn">
    </div>
  </div>
  <div class="mb-3 mt-3">
    <!-- <label for="email" class="form-label">Email:</label> -->
    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" id="email">
  </div>
  <div>
    <!-- <label for="comment">Comments:</label> -->
<textarea class="form-control" rows="5" id="comment" name="message" placeholder="Message"></textarea>
  </div>
<div class="d-grid mb-3 mt-3 ">
      <button type="submit" class="c-btn " name="contact-submit">Submit</button>

</div>
</form>

      </div>


    </div>
    <div class="c-img col">
      <img src="./assets/image/pic2.png" alt="" width="">

    </div>


  </div>
 </section>


<!-- ----------Login ------- -->
<section>
<div class="modal fade" id="myModallogin">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Parents Login </h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
    <div class="container mt-3">
  <form action="" method="post">
    <div class="mb-3 mt-3">
      <label for="uname">User Name:</label>
      <input type="text" class="form-control" id="email" name="uname">
    </div>
    <div class="mb-3">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" name="pswd">
    </div>
   
    <button type="submit" class="btn l-btn">Login </button>
  </form>
</div>

      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn " data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
    </div>


</section>




<!-- --------Register------ -->

<section>
<div class="modal fade" id="myModalregister">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Parents Registeration form</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
    <div class="container mt-3">
  <form action="/action_page.php">
     <div class="mb-3 mt-3">
      <div class="row">
  <div class="col">
     <label for="">First Name:</label>
    <input type="text" class="form-control"  aria-label="First name">
  </div>
  <div class="col">
     <label for="">Last Name:</label>
    <input type="text" class="form-control" aria-label="Last name">
  </div>
      <div class="mb-3 mt-3">
      <label for="">Email:</label>
      <input type="email" class="form-control" id="email" name="email">
    </div>
    
    <div class="mb-3 mt-3">
      <label for="">Phone no:</label>
      <input type="text" class="form-control" id="phone"  name="phn">
    </div>
    <div class="mb-3">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" name="pswd">
    </div>
 <div class="mb-3">
      <button type="submit" class="btn r-btn">Register Now</button>
    </div>

    
    
  </form>
</div>

      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn " data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
    </div>


</section>

<!-- ---------------------- hospital login------- -->

<section>
<div class="modal fade" id="myModalHlogin">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Hospital manegment  Login </h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
    <div class="container mt-3">
  <form action="" method="post">
    <div class="mb-3 mt-3">
      <label for="">Email:</label>
      <input type="text" class="form-control" id="email" name="email">
    </div>
    <div class="mb-3">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" name="pswd">
    </div>
   
    <button type="submit" class="btn l-btn" name="btnlogin">Login </button>
  </form>
  <?php
if(isset($_POST['btnlogin']))
{
    $email = $_POST['email'];
    $password =$_POST['pswd'];

    $qry = "SELECT * FROM hospital_tbl WHERE h_email = '$email' AND h_password = '$password'";

    $res = mysqli_query($conn,$qry);

    if(mysqli_num_rows($res)>0)
    {
     
      $row = mysqli_fetch_assoc($res);
      $_SESSION['hospital_session'] = $row['hospital_id'];
       echo"<script>
      alert('Login succussful');
      window.location.href='hospitaldashboard/hospital-dashboard.php';
      </script>";
     
     
    }else{
        echo"<script>
          alert('Incorrect Email or Password');
      
      </script>";
    }
}

?>
</div>

      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn " data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
    </div>


</section>


<!-- ---------hospital register  -->



<section>
<div class="modal fade" id="myModalHregister">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Hospital Management Registeration form</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
    <div class="container mt-3">
  <form action="/" method="post">
     <div class="mb-3 mt-3">
      <label for="">Hospital Name:</label>
      <input type="text" class="form-control" id="hname" name="hname">
    </div>
      <div class="mb-3 mt-3">
      <label for=""> Hospital Email:</label>
      <input type="email" class="form-control" id="email" name="email">
    </div>
    
    <div class="mb-3 mt-3">
      <label for="">Phone no:</label>
      <input type="text" class="form-control" id="phone"  name="phn">
    </div>
    <div class="mb-3">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" name="pswd">
    </div>
    <div class="mb-3">
      <label for="pwd">Address:</label>
      <input type="text" class="form-control" id="pwd" name="adress">
    </div>
 <div class="mb-3">
      <button type="submit" class="btn r-btn">Register Now</button>
    </div>

    
    
  </form>
</div>

      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn " data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
    </div>


</section>

<!-- --------------footer----------------- -->
 <section>
  <div class="pre-footer">
   <div>
     <img src="assets/image/pic1.png" alt="" class="rotate-center" width="200">
    <p >"Science gave us vaccines; VaxHealth brings them to your doorstep."</p>
   </div>

  </div>
 </section>

<footer>
  <div class="container">
    <div class="f-row ">
      <div class="f-col1">

        <h2>VAXHEALTH</h2>
        <P>VH will carry on the legacy of its dauntless co-founders by continuing to seek bold solutions to current and future vaccination challenges.</P>
        <br>
         <P>In the words of Dr. Jonas Salk, the inventor of the polio vaccine, “The reward for work well done is the opportunity to do more.”.</P>

        <button><a href="./Admindashboard/Adminlogin.php" target="_blank">Admin Access >></a></button>

      </div>
       <div class="f-col2">
        <h2 class="text-center">Quick Links</h2>
        <div>
           <div class="f-links">
                <a href="#home" >HOME</a>
                <a href="#about" >ABOUT US</a>
                <a href="#vaccine" >VACCINE</a>
                <a href="#hospital" >HOSPITALS</a>
                <a href="#stories" >STORIES</a>

                <a href="#contact" >CONTACT US</a>
            </div>

        </div>
      </div>
       <div class="f-col3">
        <h2>Policies</h2>
         <div class="p-links">
                <a href="#" >Terms and Condition</a>
                <a href="#" >Permission and licensing</a>
                <a href="#" >FAQs</a>
                <a href="#" >Ethics</a>
              
            </div>


      </div>
       <div class="f-col4" >
        <img src="./assets/image/ftimg.png" alt="img" class="slide-left" width="400">

      </div>

    </div>
  </div>


</footer>
<div class="after-ft text-center py-2" style="color:var(--text-color); font-size:16px;" >
  <P>All Right Reserve 2025 &copy; copyright</P>

</div>


  


</div>
<!-- ------------------------------------- -->

<!-- -----gsap -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.13.0/gsap.min.js" integrity="sha512-NcZdtrT77bJr4STcmsGAESr06BYGE8woZdSdEgqnpyqac7sugNO+Tr4bGwGF3MsnEkGKhU2KL2xh6Ec+BqsaHA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.13.0/ScrollTrigger.min.js" integrity="sha512-P2IDYZfqSwjcSjX0BKeNhwRUH8zRPGlgcWl5n6gBLzdi4Y5/0O4zaXrtO4K9TZK6Hn1BenYpKowuCavNandERg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="assets/js/script.js"></script>

    <script src=./assets/js/nav.js></script>


  <script>
    var icon = document.getElementById("toggleDark");

    // Load saved theme on page load
    if (localStorage.getItem("theme") === "dark") {
        document.body.classList.add("dark-theme");
        icon.classList.remove("ri-moon-fill");
        icon.classList.add("ri-sun-line");
    } else {
        document.body.classList.remove("dark-theme");
        icon.classList.remove("ri-sun-line");
        icon.classList.add("ri-moon-fill");
    }

    // Toggle theme on icon click
    icon.onclick = function () {
        document.body.classList.toggle("dark-theme");

        if (document.body.classList.contains("dark-theme")) {
            icon.classList.remove("ri-moon-fill");
            icon.classList.add("ri-sun-line");
            localStorage.setItem("theme", "dark");
        } else {
            icon.classList.remove("ri-sun-line");
            icon.classList.add("ri-moon-fill");
            localStorage.setItem("theme", "light");
        }
    };
</script>


<!-- ---------------- counter up------ -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js" integrity="sha512-CEiA+78TpP9KAIPzqBvxUv8hy41jyI3f2uHi7DGp/Y/Ka973qgSdybNegWFciqh6GrN2UePx2KkflnQUbUhNIA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js" integrity="sha512-d8F1J2kyiRowBB/8/pAWsqUl0wSEOkG5KATkVV4slfblq9VRQ6MyDZVxWl2tWd+mPhuCbpTB4M7uU/x9FlgQ9Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<script>
    $('.counter').counterUp({
    delay: 10,
    time: 3000
});
</script>

  
  

<!-- -----------------AOS data ----------- -->
   <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init(
      {
          offset: 300,
           duration:1000
      }
    );
  </script>

  <script>
    $(document).ready(function() {
    
    /*==============Page Loader=======================*/

    $(".loader-wrapper").fadeOut("slow");
    });
    /*===============Page Loader=====================*/
  </script>

   <!-- Page JavaScript Files-->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery-1.12.4.min.js"></script>
    <!--Popper JS-->
    <script src="assets/js/popper.min.js"></script>
    <!--Bootstrap-->
    <script src="assets/js/bootstrap.min.js"></script>
    <!--Sweet alert JS-->
    <script src="assets/js/sweetalert.js"></script>
    
    <!--Nice select-->
    <script src="assets/js/jquery.nice-select.min.js"></script>

    <!-- SMTP js -->

    

</body>
</html>