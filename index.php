
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href ="main.css">
    <script src="https://kit.fontawesome.com/ee9fa59c39.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,700;1,400&display=swap" rel="stylesheet">
    <title>E-commerce</title>

  </head>
  <body>
    <!--Nav-->
    <nav class="navbar navbar-expand-sm navbar-light bg-light">
        <div class="container">
          <i class="fa-solid fa-paw"></i>
            <button class="navbar-toggler" data-toggle="collapse"
            data-target="#navbarCollaspe">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collaspe navbar-collaspe"id="navbarCollaspe">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active"> 
                    <a href="#" class="nav-link">Home</a>
                </li>
                <li class="nav-item active">
                    <a href="#" class="nav-link">Dogs</a>
                </li>
                <li class="nav-item active">
                    <a href="array.php" class="nav-link">Array</a>
                </li>
                <li class="nav-item active">
                    <a href="#" class="nav-link">Contact</a>
                </li>
                <li class="nav-item active">
                    <a href="#" class="nav-link">
                      <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                    </a>
                </li>
            </ul>
        </div>
        </div>
    </nav>
    <!---End Of Nav bar-->
    
    <form method="GET">
       <input type="text" name="person">
       <input type="text" name="verb"><caption></caption>
       <input type="text" name="place">
       <button>SUBMIT</button>
    </form>



    <?php
       $name = $_GET['person'];
       $activity = $_GET['verb'];
       $location = $_GET['place'];
       echo $name." is someone who likes to go to the ".$location." to ".$activity." in there free time.";
       ?>



    <!----Carousel-->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="images/pretty_dog.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Finest Breeds</h5>
            </div>
          </div>
          <div class="carousel-item">
            <img src="images/Portuguese-Water-Dog.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Best Dogs</h5>
            </div>
          </div>
          <div class="carousel-item">
            <img src="images/world-of-dogs.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>We love our dog</h5>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    <!---End of Carousel-->
    <!---Service Section-->
    <section class="services py-5 text-center">
      <div class="container">
         <div class="row">
           <!--Single service-->
            <div class="col-10 mx-auto col-md-6 col-lg-4 my-3">
              <span class="service-icon">
                <i class="fa fa-globe" aria-hidden="true"></i>
              </span>
              <h5 class="font-weight-bold text-uppercase">
                Worldwide Breeds
              </h5>
              <p class="sub-paragraph">Our company provides finest dog breeds from all over the world.</p>
            </div>
           <!---end of single service-->
           <!--Single service-->
            <div class="col-10 mx-auto col-md-6 col-lg-4 my-3">
              <span class="service-icon">
                <i class="fa fa-certificate" aria-hidden="true"></i>
              </span>
              <h5 class="font-weight-bold text-uppercase">
                PETA Certified
              </h5>
              <p class="sub-paragraph">We are Certified to insure our animals have the best care.</p>
            </div>
           <!---end of single service-->
            <!--Single service-->
            <div class="col-10 mx-auto col-md-6 col-lg-4 my-3">
              <span class="service-icon">
                <i class="fa fa-question" aria-hidden="true"></i>
              </span>
              <h5 class="font-weight-bold text-uppercase">
                Not the right fit?
              </h5>
              <p class="sub-paragraph">We want to ensure that each of our dogs and owners create the best bond.
                If its not the right fit for you please notifiy us so we can help you find the perfect dog for you.
              </p>
            </div>
           <!---end of single service-->
         </div>
      </div>
    </section>
  <!--End of Service section-->
  <!--Featured Products-->
    <section id="products" class="products py-5">
      <div class="container">
  <!---Section Title-->
        <div Class="row">
              <div class="col-19 mx-auto col-sm-6 text-center">
                  <h1 class="text capitalization product-title">
                       Dogs Looking for homes
                  </h1>
              </div>
          </div>
  <!---End of Section Title-->
      <!---Product items-->
      <div class="row products items" id="product-items">
        <!---Single items-->
         <div class="col-10 col-sm-8 col-lg-4 mx-auto my-3">
           <div class="card single-item">
             <div class="img-container">
                 <img src="images/smartest-dog.jpg" 
                 class="card-img-top product-img">
             </div>
                    <div class="card-body">
                      <div class="card-text d-flex justify-content-between text-capitalize">
                          <h5 id="item-name">Bay Watch</h5>
                          <span><i class="fas fa-dollar sign"></i>350</span>
                       </div>
                      </div>
              </div>
         </div>
      <!---End of single items-->
          <!---Single items-->
          <div class="col-10 col-sm-8 col-lg-4 mx-auto my-3">
            <div class="card single-item">
              <div class="img-container">
                  <img src="images/yellow-labrador-retriever.jpg" 
                  class="card-img-top product-img">
              </div>
                     <div class="card-body">
                       <div class="card-text d-flex justify-content-between text-capitalize">
                           <h5 id="item-name">Happy</h5>
                           <span><i class="fas fa-dollar sign"></i>1000</span>
                        </div>
                       </div>
               </div>
          </div>
       <!---End of single items-->
           <!---Single items-->
           <div class="col-10 col-sm-8 col-lg-4 mx-auto my-3">
            <div class="card single-item">
              <div class="img-container">
                  <img src="images/yard_dogs_x5.jpg" 
                  class="card-img-top product-img">
              </div>
                     <div class="card-body">
                       <div class="card-text d-flex justify-content-between text-capitalize">
                           <h5 id="item-name">Mom & Dad</h5>
                           <span><i class="fas fa-dollar sign"></i>4050</span>
                        </div>
                       </div>
               </div>
          </div>
       <!---End of single items-->
           <!---Single items-->
           <div class="col-10 col-sm-8 col-lg-4 mx-auto my-3">
            <div class="card single-item">
              <div class="img-container">
                  <img src="images/irish.jpg" 
                  class="card-img-top product-img">
              </div>
                     <div class="card-body">
                       <div class="card-text d-flex justify-content-between text-capitalize">
                           <h5 id="item-name">Tramp</h5>
                           <span><i class="fas fa-dollar sign"></i>2000</span>
                        </div>
                       </div>
               </div>
          </div>
       <!---End of single items-->
           <!---Single items-->
           <div class="col-10 col-sm-8 col-lg-4 mx-auto my-3">
            <div class="card single-item">
              <div class="img-container">
                  <img src="images/German.Shepherd.jpg" 
                  class="card-img-top product-img">
              </div>
                     <div class="card-body">
                       <div class="card-text d-flex justify-content-between text-capitalize">
                           <h5 id="item-name">Max</h5>
                           <span><i class="fas fa-dollar sign"></i>3050</span>
                        </div>
                       </div>
               </div>
          </div>
       <!---End of single items-->
           <!---Single items-->
           <div class="col-10 col-sm-8 col-lg-4 mx-auto my-3">
            <div class="card single-item">
              <div class="img-container">
                  <img src="images/Alaskan-Malamute-1-1.jpg" 
                  class="card-img-top product-img">
              </div>
                     <div class="card-body">
                       <div class="card-text d-flex justify-content-between text-capitalize">
                           <h5 id="item-name">Bear</h5>
                           <span><i class="fas fa-dollar sign"></i>10000</span>
                        </div>
                       </div>
               </div>
          </div>
       <!---End of single items-->
           <!---Single items-->
           <div class="col-10 col-sm-8 col-lg-4 mx-auto my-3">
            <div class="card single-item">
              <div class="img-container">
                  <img src="images/Irish-Setter-20.jpg" 
                  class="card-img-top product-img">
              </div>
                     <div class="card-body">
                       <div class="card-text d-flex justify-content-between text-capitalize">
                           <h5 id="item-name">Lacy </h5>
                           <span><i class="fas fa-dollar sign"></i>5000</s4pan>
                        </div>
                       </div>
               </div>
          </div>
       <!---End of single items-->
           <!---Single items-->
           <div class="col-10 col-sm-8 col-lg-4 mx-auto my-3">
            <div class="card single-item">
              <div class="img-container">
                  <img src="images/Great-Dane-female.jpg" 
                  class="card-img-top product-img">
              </div>
                     <div class="card-body">
                       <div class="card-text d-flex justify-content-between text-capitalize">
                           <h5 id="item-name">Violet</h5>
                           <span><i class="fas fa-dollar sign"></i>4050</span>
                        </div>
                       </div>
               </div>
          </div>
       <!---End of single items-->
           <!---Single items-->
           <div class="col-10 col-sm-8 col-lg-4 mx-auto my-3">
            <div class="card single-item">
              <div class="img-container">
                  <img src="images/puppy.jpg" 
                  class="card-img-top product-img">
              </div>
                     <div class="card-body">
                       <div class="card-text d-flex justify-content-between text-capitalize">
                           <h5 id="item-name">Sam</h5>
                           <span><i class="fas fa-dollar sign"></i>3600</span>
                        </div>
                       </div>
               </div>
          </div>
       <!---End of single items-->
           <!---Single items-->
           <div class="col-10 col-sm-8 col-lg-4 mx-auto my-3">
            <div class="card single-item">
              <div class="img-container">
                  <img src="images/Shiba-Inu-History.jpg" 
                  class="card-img-top product-img">
              </div>
                     <div class="card-body">
                       <div class="card-text d-flex justify-content-between text-capitalize">
                           <h5 id="item-name">Gold</h5>
                           <span><i class="fas fa-dollar sign"></i>6000</span>
                        </div>
                       </div>
               </div>
          </div>

       <!---End of single items-->
           <!---Single items-->
           <div class="col-10 col-sm-8 col-lg-4 mx-auto my-3">
            <div class="card single-item">
              <div class="img-container">
                  <img src="images/border-collie-puppy.jpg" 
                  class="card-img-top product-img">
              </div>
                     <div class="card-body">
                       <div class="card-text d-flex justify-content-between text-capitalize">
                           <h5 id="item-name">Casper</h5>
                           <span><i class="fas fa-dollar sign"></i>2400</span>
                        </div>
                       </div>
               </div>
          </div>
       <!---End of single items-->
           <!---Single items-->
           <div class="col-10 col-sm-8 col-lg-4 mx-auto my-3">
            <div class="card single-item">
              <div class="img-container">
                  <img src="images/download-dogs-wallpapers.jpg" 
                  class="card-img-top product-img">
              </div>
                     <div class="card-body">
                       <div class="card-text d-flex justify-content-between text-capitalize">
                           <h5 id="item-name">Bruce</h5>
                           <span><i class="fas fa-dollar sign"></i>5000</span>
                        </div>
                       </div>
               </div>
          </div>
       <!---End of single items-->
      </div>
      <!--End of Product items-->
      </div>
    </section>
  <!--End of Featured Products-->

  <!----about section--->
  <section id="about-sec">
    <div class="container">
         <div class="row align-items-center">
              <div class="col-lg-5 text-center">
                <img src="images/Blue.jpg" width="450" height="150"
                class="img-fluid watch-img">
              </div>
            <div class="col-lg-7 text-lg-right text-center text-color about-text">
              <h1>About Company</h1>
              <p class="text">We enjoy our dogs and want to share them with the world.</p>
            </div>
        </div>
  </section>

  <!----End of about section-->


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>