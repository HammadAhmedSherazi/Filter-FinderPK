<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<title>Filter Find</title>
<style>
  i{
    color: white;
    margin:auto 5px ;
    font-size: 20px;
  }
  #myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: rgb(55, 194, 232);
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
}

#myBtn:hover {
  background-color: white;
  color: rgb(55, 194, 232) ;
  border: 1px solid rgb(55, 194, 232);
}
#myBtn>i:hover{
  color: rgb(55, 194, 232);
}
hr{
  display: inline-block;
  width: 20%;
  background-color: white;

}
</style>
 
</style>
</head>
<body>
  <button onclick="topFunction()" id="myBtn" class="btn btn-outline-light" title="Go to top"><i class="fa-solid fa-angle-up"></i></button>
    <div class="container-fluid">
        <!-- Navigation Row -->
      <?php
        include(".Header.php");
      ?>
        <!-- Navigation Row End -->

        <!-- Slider Row  -->
        <div class="row " >
          <div id="carouselExampleSlidesOnly" class="carousel slide col-12 px-0" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item " style="height: 800px;">
                  <!-- <div class="box w-100 bg-dark" style="height: 500px ; background:url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRGi0qmvM1-4zvsusGlt8ycvfDaNdGvauHLgQ&usqp=CAU') no-repeat 100% 100%;">

                  </div> -->
                  <img src="https://urbanoasis.la/wp-content/uploads/2020/02/65999057_873929459629770_7052032310836723712_o-1200x700.jpg" class="d-block w-100 h-100"  alt="sliderImg1">
              </div>

              <div class="carousel-item active w-100" style="height: 800px;">
                <img src="https://img.freepik.com/free-vector/water-delivery-service-illustration-smiling-man-with-bottles-uniform-standing-near-delivery-truck_575670-341.jpg?w=2000" class="d-block w-100 h-100"  alt="sliderImg2">
              </div>
              <div class="carousel-item " style="height: 800px;"> 
                <img src="https://www.waterdeliverysolutions.com/wp-content/uploads/2020/05/home-banner.png" class="d-block w-100 h-100" alt="sliderImg3">
              </div>
            </div>
          </div>
        </div>
        <!-- Slider Row End -->
        <!-- About Section Row -->
        <div class="row" id="About">
          <section class="col-12 d-flex  align-items-center flex-column " style="background:rgb(118, 221, 249) ; color: white; padding: 100px 0px;" >
              
            <h3>
              ABOUT US
              </h3>
              
              <p class="text-center p-4 " >
                My websiter is provide to easy find water filter in your area and select. Good Dealer provide and local water fliter grow your business through my website. 
                Find the filter cartridge cap in the base grille.
Rotate the cap counterclockwise to a vertical position, and then pull.
Remove the filter cap by sliding it right or left. Set aside cap. Discard old filter.
Remove the packaging and O-ring covers from the new filter. Slide the filter cap on.
Purge air from the water line. See instructions below.
              </p>


          </section>
        </div>
        <!-- About Section Row End -->
        <div class="row d-flex" style="height: 500px ;" >
          <section class="col-lg-6 col-md-6 col-sm-12 d-flex justify-content-center align-items-center">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSHmsk_ExpEsmVp5Us3qadXAIBEjDD0rHvTKw&usqp=CAU" class="d-block w-50 my-4" alt="image icon" >
          </section>
          <section class="col-lg-6 col-md-6 col-sm-12 d-flex flex-column   justify-content-center align-items-center" style="background:rgba(55, 194, 232,0.5); color: white;">
              <h2>Find Filter</h2>
              <div class="input-group flex-nowrap w-75 my-4">
                <input type="text" class="form-control" placeholder="Enter Your Area Name" aria-label="Username" aria-describedby="addon-wrapping">
                <button class="input-group-prepend" style="background-color: rgba(55, 194, 232); border: 0px; ">
                  <span class="input-group-text" id="addon-wrapping" style="background-color: rgba(55, 194, 232); border: 0px; " >&#128269;</span>
                </button>
              </div>
          </section>
        </div>
        <div class="row py-3 px-4" style="background:rgb(118, 221, 249)" id="contact" >
          <section class="col-6">
            <img src="./images/LogoMakr-9eSAAC.png" alt="logo" width="60px" >
                    <span style="color: white; font-size: 23px;">Filter&nbsp;</span><span style="color: black; font-size: 23px;">Finder</span><sup style="font-size:15px;"><strong >pk</strong></sup>
            <ul style="list-style-type: none; color: white;">
              <li><i class="fa-solid fa-mobile-screen"></i> +92-300-0000</li>
              <li><i class="fa-solid fa-map-location-dot"></i> IBA-City Campus </li>
              <li><i class="fa-solid fa-envelope"></i> abc@gmail.com</li>
            </ul>  
          </section>
          <section class="col-6">
            <h4 style="color: white; border-bottom: 1px solid white ; padding-bottom: 5px;">
              Social links
            </h4>
            <i class="fa-brands fa-facebook"></i>
            <i class="fa-brands fa-twitter"></i>
            <i class="fa-brands fa-whatsapp"></i>


          </section>
            
        </div>
        <div class="row">
          <footer class="col-12 py-2 px-3" style="background-color:rgb(55, 194, 232); color: white;">
            <small>&copy; Copyright 2022, Filter Finder</small>
          </footer>
        </div>
        
    </div>
    <script>
      //Get the button
      var mybutton = document.getElementById("myBtn");
      
      // When the user scrolls down 20px from the top of the document, show the button
      window.onscroll = ()=>{scrollFunction()};
      
       scrollFunction= ()=> {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          mybutton.style.display = "block";
        } else {
          mybutton.style.display = "none";
        }
      }
      
      // When the user clicks on the button, scroll to the top of the document
      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
      </script>
    <script src="https://kit.fontawesome.com/9e304f1d6f.js" crossorigin="anonymous"></script>   
      
</body>
</html>