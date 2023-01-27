<?php
  get_header();
?>
    <div class="site-banner">
      <img 
        src="<?php
              $home_banner_image = get_field("home_banner_image");
              if($home_banner_image) {
                echo $home_banner_image;
              }
            ?>" 
        alt="<?php
              $home_banner_image_alt = get_field("home_banner_image_alt");
              if($home_banner_image_alt) {
                echo $home_banner_image_alt;
              }?>">
    </div>

    <main class="site-body">
      <section class="service-cards">
        <h1 class="heading heading--brown heading--center">East Coast K9</h1>
        <div class="service-cards-group">
          
          <a href="
          <?php
            $service_card_1 = get_field("service_card_1");
            if($service_card_1) {
                echo $service_card_1['service_card_1_link'];
            }
          ?>          
          " class="single-service-card">
            <img class="single-service-card--image" src="
              <?php
                $service_card_1 = get_field("service_card_1");
                if($service_card_1) {
                    echo $service_card_1['service_card_1_icon'];
                }
              ?>" 
            alt="<?php
                  $service_card_1 = get_field("service_card_1");
                  if($service_card_1) {
                      echo $service_card_1['service_card_1_icon_alt'];
                  }?>"
            >
            <h6>
              <?php
                $service_card_1 = get_field("service_card_1");
                if($service_card_1) {
                    echo $service_card_1['service_card_1_heading'];
                }
              ?>                 
            </h6>
          </a>
          <a href="#lodging" class="single-service-card">
            <img class="single-service-card--image" src="/wp-content/uploads/2023/01/dog-house-green.webp" alt="">
            <h6>Lodging</h6>
          </a>
          <a href="#spa" class="single-service-card">
            <img class="single-service-card--image" src="/wp-content/uploads/2023/01/spa-green.png" alt="">
            <h6>Spa</h6>
          </a>                                
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
          <a class="button button--green" href="#form">Sign up now</a>
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
      <h2 class="heading heading--brown heading--center heading--tablet-up">Services</h2>
      <div class="service-row service-row--green" id="training">
        <img class="service-row service-row__image" src="/wp-content/uploads/homepage-training.webp" alt="Group of dogs walking across an 'a-frame'">
        <div class="service-row-copy">
          <h3 class="heading heading--brown">Training</h3>
          <p class="service-row-copy__body">
          Our board and train program only accepts a handful of students monthly and is custom tailored for his/her training needs. This ensures quality training and is the best foundation for success!
Examples of daily training sessions may include concepts of basic obedience as well as exercises to build confidence and socialization. High distraction environments such as local parks, coffee shops, and other public
spaces may be incorporated as needed.  
Please feel free to reach out with any questions you have! We are here to help educate you and want you and your dog to have a beautiful relationship for many years to come!
          </p>
          <a class="button button--brown" href="#form">Sign up now</a>
        </div>
      </div>
      <div class="service-row service-row--brown" id="lodging">
        <img class="service-row service-row__image service-row__image--reversed" src="/wp-content/uploads/kennels.webp" alt="Group of dogs walking across an 'a-frame'">
        <div class="service-row-copy service-row-copy--reversed service-row-copy--green">
          <h3 class="heading heading--secondary-green">Lodging</h3>
          <p class="service-row-copy__body">
          Our newly renovated boarding facility includes 4 x 6 suites, peaceful music, pet friendly and relaxing essential oils, and two yards for play and exercise.
Temperament evaluations are always completed to be sure each pet is safe to play in a group setting. Our goal is for all dogs in the play groups to have as much fun as possible
interacting with others of similar age and size.
In the warmer months we offer water zones to cool off so you can fully anticipate him/her getting down and dirty! All dogs go home bathed and cleaned if they enjoy the waterworks!
We love to keep you updated throughout your pet's stay so be prepared for pictures and text messages!

*we also offer more advanced grooming for boarding dogs. Please ask about that if you have any questions*
          </p>
          <a class="button button--green" href="#form">Book Now</a>
        </div>
      </div>
      <div class="service-row service-row--green" id="spa">
        <img class="service-row service-row__image" src="/wp-content/uploads/spa-pup.jpeg" alt="Group of dogs walking across an 'a-frame'">
        <div class="service-row-copy">
          <h3 class="heading heading--brown">Spa Services</h3>
          <p class="service-row-copy__body">
            Give your pup a spa day! We offer two different spa servies, Standard and Deluxe. Standard includes the bath, blow drying, nail trimming, and ears cleaning. Deluxe
            includes Deshedding shampoo and conditioner, nails clipper and filed, ears cleaning, and anal glandes
          </p>
          <a class="button button--brown" href="#form">Sign up now</a>
        </div>
      </div>       
    </section>
  
    <section class="home-form">
      <h2 class="heading heading--center heading--one heading--brown" id="form">Get Started Today!</h2>
      <?php echo apply_shortcodes( '[contact-form-7 id="21" title="Site Contact"]' ); ?>
    </section>
    <?php
      get_footer();
    ?>
</body>
</html>