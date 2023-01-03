<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>East Coast K9</title>
  <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
  <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
  <script src="main.js"></script>
  <?php
  wp_head();
  ?>
</head>
<body>
  <section class="wrapper">
    <nav class="site-header">
      <div class="site-header__wrapper">
        <img class="site-header__logo" src="/wp-content/uploads/2022/12/ECK-logo.webp" alt="">
        <div class="site-header__locations-hours">
          <p>
            Located in North Port, Florida
            <br>Serving Fort Myers to Bradenton
          </p>
          <p>
            Mon-Wed, Fri 6:30am - 6pm
            <br>Thursday 6:30am - 4pm
          </p>          
        </div>
        <div>
          <div class="site-header__email">
            EastCoastK9LLC@gmail.com
          </div>
          <div class="site-header__phone">
            941-374-7161
          </div>
        </div>
      </div>
    </nav>
    <div class="site-banner">
      <img src="/wp-content/uploads/2022/12/banner-scaled.webp" alt="site banner">
    </div>
    <main class="site-body">
      <section class="service-cards">
        <h1 class="heading heading--brown heading--center">East Coast K9</h1>
        <div class="service-cards-group">
          <div class="single-service-card">
            <img class="single-service-card--image" src="/wp-content/uploads/2023/01/dog-trainer-green.png" alt="">
            <h6>Training</h6>
          </div>
          <div class="single-service-card">
            <img class="single-service-card--image" src="/wp-content/uploads/2023/01/dog-house-green.webp" alt="">
            <h6>Lodging</h6>
          </div>
          <div class="single-service-card">
            <img class="single-service-card--image" src="/wp-content/uploads/2023/01/spa-green.png" alt="">
            <h6>Spa</h6>
          </div>                                      
        </div>
      </section>
      <section class="introduction">
        <img class="introduction__image" src="/wp-content/uploads/gab-and-zarius.webp" alt="">
        <div class="introduction__copy">
          <h2 class="heading heading--brown">Who We Are...</h2>
          <p>
            East Coast K9 is dedicated to providing exceptional care for your canine companion in 
            a family atmosphere. Our kennel room is newly renovated to ensure clean and 
            comfortable lodging. Your pets will be happy and secure while staying with us, in our 
            home. We believe that the key to your dog's success and happiness is a loving, low 
            stress environment. Your dog will receive one-on-one attention as he or she gets 
            acquainted with us and enjoys play time with other K9 friends. As a certified vet 
            assistant and seasoned dog trainer, I can assure and promise the safest care for your 
            pups! We strive to be their second home while away from home.            
          </p>
          <a class="button--green" href="">Sign up now</a>
        </div>
      </section>
      <section class="testimonials">
        <h2 class="heading heading--brown heading--center">Testimonials</h2>
        <div class="testimonials-slider swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
              <img class="testimonials-slider__image" src="/wp-content/uploads/Courtney-Starling.png" alt="testimonial">
              <p class="testimonials-slider__copy">
                Gabbie was very flexible to schedule grooming appointments for my two dogs. She exceeded my expectations and loved her work! She did a wonderful job, and made sure to keep me updated during the process. She was attentive to my dogs and made it comfortable for them since this was their time at a groomers. I will continue to use her for any grooming, and boarding needed. I highly recommend her!              
              </p>
              <p class="testimonials-slider__author">
                Courtney Starling
              </p>
          </div>
          <div class="swiper-slide">
            <img class="testimonials-slider__image" src="/wp-content/uploads/cheryl-b.png" alt="testimonial">
            <p class="testimonials-slider__copy">
              Gabrielle is the sweetest dog handler I have ever seen! She had such a gentle, loving way with our pup and I'm so glad to have found her. Our puppy had a very bad nail clipping experience at a Veterinarian's office last fall and for months has been snarling with every touch of her feet. Gabby sweet-talked our girl (and plied her with tasty treats!) into letting her clip all of her nails. SUCH a positive experience!              
            </p>
            <p class="testimonials-slider__author">
              Cheryl B
            </p>
          </div>
          <div class="swiper-slide">
            <img class="testimonials-slider__image" src="/wp-content/uploads/bailey-m.png" alt="testimonial">
            <p class="testimonials-slider__copy">
              Only person ill take my Leonberger too, she knows the breed and is amazing with him.
            </p>
            <p class="testimonials-slider__author">
              Bailey M
            </p>
          </div>                              
        </div>
        <div class="swiper-pagination"></div>       
      </section>
    </main>
    <section class="services">
      <h2 class="heading heading--brown heading--center">Services</h2>
      <h3>Training</h3>
      <p class="services__copy">
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus 
at felis in enim ultrices finibus. Praesent in posuere neque. Nulla 
vitae odio tristique, malesuada erat vel, vehicula purus. Sed 
placerat sit amet libero vitae dignissim. Praesent justo augue, 
tristique vel vulputate sit amet, lacinia vel lectus. Sed lobortis 
massa luctus, vehicula augue in, lacinia nisi. In blandit felis id mi 
suscipit, quis suscipit magna porta. Phasellus eleifend placerat 
elit in euismod. In purus nulla, egestas eget gravida quis, 
maximus et mi. Maecenas velit libero, sollicitudin vel lacus 
ut, blandit pellentesque dolor.        
      </p>
    </section>

    <footer></footer>
  <script>
      var swiper = new Swiper(".testimonials-slider", {
        pagination: {
          el: ".swiper-pagination",
        },
      });    
  </script>
</body>
</html>