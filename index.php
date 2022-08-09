<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home-Eniola Software</title>
    <link rel="icon" href="image/bg1.jpg" type="image/x-icon">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="font/css/all.css">
    <link rel="stylesheet" href="oboy.css">

</head>
<body>
   <div class="general">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid container">
          <a class="navbar-brand alert" href="index.html" style="display: flex;"><img src="image/programer.jpg" alt="" width="60px"><p class="d-lg-block d-md-block d-none" style="padding-top: 10px;">Eniola Software</p> </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <!-- <a class="nav-link alert" href="index.html">Home</a> -->
              </li>
              <li class="nav-item">
                <a class="nav-link alert" href="#about">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link alert" href="#service">Service</a>
              </li>
              <li class="nav-item">
                <a class="nav-link alert" href="#artist">Artist</a>
              </li>
              <li class="nav-item">
                <a class="nav-link alert" href="#contact">Contact us</a>
              </li>
              
            </ul>
          </div>
        </div>
      </nav>


      <!-- welcome -->
      <div class="welcome " >
          <div class="container  pt-5 pb-5">
              <div class="row wel-cont">
                  <div class="col col-12">
                      <!-- <h1 class="h-wel">Entertainment, In The End, Is a Food Industry For Feeling</h1> -->
                      <p>Eniola Software serves you with explicit website endowed with lovely design</p>
                      <button class="button">Learn More</button>
                  </div>
                 
              </div>
          </div>

      </div>
      <!-- welcome ends-->
      <!-- events -->
      
      <div class="our-event pt-5 pb-5 mt-5">
          <div class="container ">
              <h2 class="pt-2 pb-4"><span>Shows</span>   appointment</h2>
              <div class="row g-3" >
              <?php
      include "db.php";
      
      $result = mysqli_query($conn,"SELECT * FROM `admin`");

      if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            
            ?>

                <div class="col col-lg-4 col-md-6 col-12">
                      <div class="event-card">
                          <img src="../assets/<?php echo $row["image"]?>" alt="">
                      </div>
                     <div class="event-content">
                          <h4><?php echo $row['name']?></h4><br>
                      <p><?php echo $row['description']?></p>
                     </div>
                </div>

         <?php     
        }
      }
      ?>
                  
                  
                 
                 
              </div>
          </div>
      </div>
      <!-- events ends-->
      <!-- shortabout -->
      <div class="short-about  pt-5 pb-5" id="about" style="background-color:  transparent;">
          <div class="container ">
              <div class="row">
                  
                  <div class="col col-12">
                      <h2><span>About</span> us</h2>
                      <div class="content">
                        <p>
                            Eniola Software
                        Founded: 2022
                        Founder: Olalere Amidat
                        Country of origin: Nigeria
                        Location: Oyo state
                        <!-- Official website: <a href=""> OboyEntertainment.com</a> -->
                        Eniola Software is a Nigeria devloper founded by Eniola. Eniola Software Manager is Eniola. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Asperiores vel veritatis quo porro cumque dolor sint nihil neque deleniti ipsum accusantium deserunt quisquam, voluptatibus omnis molestias. Enim aspernatur error obcaecati!
                        </p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      
                            <div class="col col-lg-6 col-md-12 col-12">
                                
                                <span>Lorem, ipsum dolor.</span>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Delectus, soluta.</p>
                            </div>
                        </div>
                    </div>
                   
                    
                </div>
            </div>
        </div>
       </div>
    </div>
    <!-- team end-->
    <!-- aoc -->
    <div class="aoc mt-5 pt-5 pb-5" style="background-color: transparent;">
        <div class="container">
            <div class="row">
                <div class="col col-12 pb-3">
                    <div class="service-card" style="width: 60px; height:60px; margin: auto;">
                        <div class="second-service-card" style="width: 56px; height:56px;">

                        </div>
                    </div>
                </div>
                <div class="col col-12">
                    <p style="color: grey; text-align:justify;">Eniola software is a full stack developer that deal with software website dewvelopment,desining and hacking, Lorem ipsum dolor, sit amet consectetur adipisicing elit. Hic a perferendis totam fugiat, quod molestias unde vel quisquam sint! Nihil dolor, eius sint esse suscipit voluptatibus quae corporis doloribus. Porro!</p>
                </div>
                <div class="col col-12">
                    <div class="aoc-logo">
                        <div class="aoc-real-img" >
                            <img src="image/programmer.png" alt="" width="100px">
                            <p style="color: #fff;">DEVELOPER</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- aoc ends-->
    <!-- end part -->
 <div class="mail-us pb-5" id="contact">
     <div class="container">
        <h2  class="pb-4 pt-4"><span>Connect</span> with  us</h2>
        <div class="row">
            <div class="col">
                <input type="text" placeholder="Name" id="inp">
            </div>
            <div class="col">
                <input type="email" placeholder="Enter your email" id="inp">
            </div>
            <div class="col col-12">
                <textarea name="" placeholder="Message" id="inp2" ></textarea>

            </div>
            <div class="col col-12">
                <div class="submit" style="text-align: center;">
                    <input type="submit" value="Submit" id="inp3">
                
                </div>
            </div>

        </div>
     </div>
 </div>
    <!-- end part ends-->
    <!-- footer -->
    <footer>
        <div class="container">
            <div class="row ">
                <div class="col col-lg-4 col-md-4 col-12 d-lg-block d-md-none d-none">
                    <h4>Gallery</h4><br><br>
                    <div class="row">
                        <div class="col tey col-lg-4" >
                            <img src="image/programer.jpg" alt="" >
                        </div>
                        <div class="col tey col-lg-4">
                            <img src="image/bg1.j" alt="">
                        </div>
                        <div class="col  tey col-lg-4">
                            <img src="image/bg1.jpg" alt="" >
                        </div>
                        <div class="col tey col-lg-4">
                            <img src="image/bg3.jpeg" alt="">
                        </div>
                        <div class="col tey col-lg-4">
                            <img src="image/bg4.jpg" alt="">
                        </div>
                        <div class="col tey col-lg-4">
                            <img src="image/bg5.jpg" alt="">

                        </div>
                        <div class="col tey col-lg-4">
                            <img src="image/bg6.jpg" alt="" >
                        </div>
                        <div class="col tey col-lg-4">
                            <img src="image/bg3.jpg" alt="">
                        </div>
                        <div class="col  tey col-lg-4">
                            <img src="image/bg3.jpg" alt="" >
                        </div>
                    </div>
                </div>
                <div class="col col-lg-8 col-md-12 col-12 px-5">
                    <div class="row">

                        <div class="col col-lg-4 col-md-4 col-12">
                            <h4>Page Info</h4><br><br>
                            <div class="link-footer" style="display: flex; flex-direction:column; gap: 10px;">
                                <a href="#about">about us</a>
                               <a href="#service">our service</a>
                               <a href="#team">team</a>
                               <a href="#artist">developers</a>
                            </div>
                        </div>
                        <div class="col col-lg-4 col-md-4 col-12">
                            <h4>Service</h4><br><br>
                            <div class="link-footer" style="display: flex; flex-direction:column; gap: 10px;">
                                <a href="#">Website development</a>
                               <a href="#">Front-end developer</a>
                               <a href="#">backend developer</a>
                               <a href="#">ethical hacker</a>
                            </div>

                        </div>
                        <div class="col col-lg-4 col-md-4 col-12">
                            <h4>Contact Us</h4><br><br>
                            <div class="link-footer" style="display: flex; flex-direction:column; gap: 10px;">
                                <a href="#"><i class="fa-solid fa-location-dot"></i>&nbsp; <br> Aribisala villa, Safejo area,
                                    Oyo State, Nigeria</a>
                               <a href="#"><i class="fa-solid fa-envelope"></i>&nbsp; <br>contact@ amidattitilope5@gmail.com</a>
                               <a href="#"><i class="fa-brands fa-whatsapp"></i>&nbsp;&nbsp;<br> +2349032724531 <br>

                                +2347069528537 <br>
                                
                                +2347060796149</a>
                               <a href="#"></a>
                               <div style="color: white;">copyright@ Midah</div>
                            </div>
                            

                        </div>
                        <div class="col col-lg-4 col-md-4 col-12"></div>
                    </div>
                </div>
            </div>
        </div>
        <hr style="background-color: white; margin-top:4rem;">
    </footer>
    <!-- footer ends-->

    
 
   
   </div>



   </div>



    <script src="bootstrap.js"></script>
</body>
</html>