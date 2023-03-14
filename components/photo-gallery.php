<?php 
/*
This single file makes me really close to paying the $250 yearly cost for Advanced Custom Fields pro for repeatable fields, or building my own version 
*/
?>
<section class="photo-gallery">
  <!-- Photo Group 1 -->
  <div class="photo-gallery__group">
    <h4 class="heading heading__photo-gallery heading--brown">
      <?php
        $photo_group_heading = get_field("photo_group");
        if($photo_group_heading) {
            echo $photo_group_heading['photo_group_heading'];
        }
      ?>
    </h4>
    <!-- Photo One -->
    <a data-fslightbox href="
      <?php
        $photo_1 = get_field("photo_group");
        if($photo_1) {
            echo $photo_1['photo_1'];
        }
      ?>    
    ">
      <img 
        class="photo-gallery__photo photo-gallery__photo--first" 
        src="
          <?php
            $photo_1 = get_field("photo_group");
            if($photo_1) {
                echo $photo_1['photo_1'];
            }
          ?>        
        " 
        alt="
          <?php
            $photo_1_alt = get_field("photo_group");
            if($photo_1_alt) {
                echo $photo_1_alt['photo_1_alt'];
            }
          ?>        
        ">
    </a>
    <!-- Photo Two -->
    <a data-fslightbox href="
    <?php
            $photo_2 = get_field("photo_group");
            if($photo_2) {
                echo $photo_2['photo_2'];
            }
          ?>        
    ">
      <img 
        class="photo-gallery__photo photo-gallery__photo--second" 
        src="
          <?php
            $photo_2 = get_field("photo_group");
            if($photo_2) {
                echo $photo_2['photo_2'];
            }
          ?>        
        " 
        alt="
          <?php
            $photo_2 = get_field("photo_group");
            if($photo_2) {
                echo $photo_2['photo_2_alt'];
            }
          ?>           
        ">
    </a>
    <!-- Photo Three -->
    <a data-fslightbox href="
      <?php
        $photo_3 = get_field("photo_group");
        if($photo_3) {
            echo $photo_3['photo_3'];
        }
      ?>         
    ">
      <img 
        class="photo-gallery__photo photo-gallery__photo--third" 
        src="
          <?php
            $photo_3 = get_field("photo_group");
            if($photo_3) {
                echo $photo_3['photo_3'];
            }
          ?>        
        " 
        alt="
          <?php
            $photo_3 = get_field("photo_group");
            if($photo_3) {
                echo $photo_3['photo_3_alt'];
            }
          ?>           
        ">
    </a>
    <!-- Photo Four -->
    <a data-fslightbox href="
      <?php
        $photo_4 = get_field("photo_group");
        if($photo_4) {
            echo $photo_4['photo_4'];
        }
      ?>        
    ">
      <img class="photo-gallery__photo photo-gallery__photo--forth" 
        src="
          <?php
            $photo_4 = get_field("photo_group");
            if($photo_4) {
                echo $photo_4['photo_4'];
            }
          ?>        
        " 
        alt="
          <?php
            $photo_4 = get_field("photo_group");
            if($photo_4) {
                echo $photo_4['photo_4_alt'];
            }
          ?>        
        "
      >
    </a>
    <!-- Photo Five -->
    <a data-fslightbox href="
      <?php
        $photo_5 = get_field("photo_group");
        if($photo_5) {
            echo $photo_5['photo_5'];
        }
      ?>       
    ">
      <img 
        class="photo-gallery__photo photo-gallery__photo--fifth" 
        src="
          <?php
            $photo_5 = get_field("photo_group");
            if($photo_5) {
                echo $photo_5['photo_5'];
            }
          ?>        
        " 
        alt="
          <?php
            $photo_5 = get_field("photo_group");
            if($photo_5) {
                echo $photo_5['photo_5_alt'];
            }
          ?>            
        "
      >
    </a>
    <!-- Photo six -->
    <a data-fslightbox href="
      <?php
        $photo_6 = get_field("photo_group");
        if($photo_6) {
            echo $photo_6['photo_6'];
        }
      ?>         
    ">
      <img 
        class="photo-gallery__photo photo-gallery__photo--sixth" 
        src="
          <?php
            $photo_6 = get_field("photo_group");
            if($photo_6) {
                echo $photo_6['photo_6'];
            }
          ?>             
        " 
        alt="
          <?php
            $photo_6 = get_field("photo_group");
            if($photo_6) {
                echo $photo_6['photo_6_alt'];
            }
          ?>
        "
      >
    </a>
  </div>
  <!-- Photo Group 2 -->
  <div class="photo-gallery__group">
    <h4 class="heading heading__photo-gallery heading--brown">
      <?php
        $photo_group_heading = get_field("photo_group_2");
        if($photo_group_heading) {
            echo $photo_group_heading['photo_group_heading'];
        }
      ?>
    </h4>
    <!-- Photo One -->
    <a data-fslightbox href="
      <?php
        $photo_1 = get_field("photo_group_2");
        if($photo_1) {
            echo $photo_1['photo_1'];
        }
      ?>    
    ">
      <img 
        class="photo-gallery__photo photo-gallery__photo--first" 
        src="
          <?php
            $photo_1 = get_field("photo_group_2");
            if($photo_1) {
                echo $photo_1['photo_1'];
            }
          ?>        
        " 
        alt="
          <?php
            $photo_1_alt = get_field("photo_group_2");
            if($photo_1_alt) {
                echo $photo_1_alt['photo_1_alt'];
            }
          ?>        
        ">
    </a>
    <!-- Photo Two -->
    <a data-fslightbox href="
    <?php
            $photo_2 = get_field("photo_group_2");
            if($photo_2) {
                echo $photo_2['photo_2'];
            }
          ?>        
    ">
      <img 
        class="photo-gallery__photo photo-gallery__photo--second" 
        src="
          <?php
            $photo_2 = get_field("photo_group_2");
            if($photo_2) {
                echo $photo_2['photo_2'];
            }
          ?>        
        " 
        alt="
          <?php
            $photo_2 = get_field("photo_group_2");
            if($photo_2) {
                echo $photo_2['photo_2_alt'];
            }
          ?>           
        ">
    </a>
    <!-- Photo Three -->
    <a data-fslightbox href="
      <?php
        $photo_3 = get_field("photo_group_2");
        if($photo_3) {
            echo $photo_3['photo_3'];
        }
      ?>         
    ">
      <img 
        class="photo-gallery__photo photo-gallery__photo--third" 
        src="
          <?php
            $photo_3 = get_field("photo_group_2");
            if($photo_3) {
                echo $photo_3['photo_3'];
            }
          ?>        
        " 
        alt="
          <?php
            $photo_3 = get_field("photo_group_2");
            if($photo_3) {
                echo $photo_3['photo_3_alt'];
            }
          ?>           
        ">
    </a>
    <!-- Photo Four -->
    <a data-fslightbox href="
      <?php
        $photo_4 = get_field("photo_group_2");
        if($photo_4) {
            echo $photo_4['photo_4'];
        }
      ?>        
    ">
      <img class="photo-gallery__photo photo-gallery__photo--forth" 
        src="
          <?php
            $photo_4 = get_field("photo_group_2");
            if($photo_4) {
                echo $photo_4['photo_4'];
            }
          ?>        
        " 
        alt="
          <?php
            $photo_4 = get_field("photo_group_2");
            if($photo_4) {
                echo $photo_4['photo_4_alt'];
            }
          ?>        
        "
      >
    </a>
    <!-- Photo Five -->
    <a data-fslightbox href="
      <?php
        $photo_5 = get_field("photo_group_2");
        if($photo_5) {
            echo $photo_5['photo_5'];
        }
      ?>       
    ">
      <img 
        class="photo-gallery__photo photo-gallery__photo--fifth" 
        src="
          <?php
            $photo_5 = get_field("photo_group_2");
            if($photo_5) {
                echo $photo_5['photo_5'];
            }
          ?>        
        " 
        alt="
          <?php
            $photo_5 = get_field("photo_group_2");
            if($photo_5) {
                echo $photo_5['photo_5_alt'];
            }
          ?>            
        "
      >
    </a>
    <!-- Photo six -->
    <a data-fslightbox href="
      <?php
        $photo_6 = get_field("photo_group_2");
        if($photo_6) {
            echo $photo_6['photo_6'];
        }
      ?>         
    ">
      <img 
        class="photo-gallery__photo photo-gallery__photo--sixth" 
        src="
          <?php
            $photo_6 = get_field("photo_group_2");
            if($photo_6) {
                echo $photo_6['photo_6'];
            }
          ?>             
        " 
        alt="
          <?php
            $photo_6 = get_field("photo_group_2");
            if($photo_6) {
                echo $photo_6['photo_6_alt'];
            }
          ?>
        "
      >
    </a>
  </div>
  <!-- Photo Group 3 -->
  <div class="photo-gallery__group">
    <h4 class="heading heading__photo-gallery heading--brown">
      <?php
        $photo_group_heading = get_field("photo_group_3");
        if($photo_group_heading) {
            echo $photo_group_heading['photo_group_heading'];
        }
      ?>
    </h4>
    <!-- Photo One -->
    <a data-fslightbox href="
      <?php
        $photo_1 = get_field("photo_group_3");
        if($photo_1) {
            echo $photo_1['photo_1'];
        }
      ?>    
    ">
      <img 
        class="photo-gallery__photo photo-gallery__photo--first" 
        src="
          <?php
            $photo_1 = get_field("photo_group_3");
            if($photo_1) {
                echo $photo_1['photo_1'];
            }
          ?>        
        " 
        alt="
          <?php
            $photo_1_alt = get_field("photo_group_3");
            if($photo_1_alt) {
                echo $photo_1_alt['photo_1_alt'];
            }
          ?>        
        ">
    </a>
    <!-- Photo Two -->
    <a data-fslightbox href="
    <?php
            $photo_2 = get_field("photo_group_3");
            if($photo_2) {
                echo $photo_2['photo_2'];
            }
          ?>        
    ">
      <img 
        class="photo-gallery__photo photo-gallery__photo--second" 
        src="
          <?php
            $photo_2 = get_field("photo_group_3");
            if($photo_2) {
                echo $photo_2['photo_2'];
            }
          ?>        
        " 
        alt="
          <?php
            $photo_2 = get_field("photo_group_3");
            if($photo_2) {
                echo $photo_2['photo_2_alt'];
            }
          ?>           
        ">
    </a>
    <!-- Photo Three -->
    <a data-fslightbox href="
      <?php
        $photo_3 = get_field("photo_group_3");
        if($photo_3) {
            echo $photo_3['photo_3'];
        }
      ?>         
    ">
      <img 
        class="photo-gallery__photo photo-gallery__photo--third" 
        src="
          <?php
            $photo_3 = get_field("photo_group_3");
            if($photo_3) {
                echo $photo_3['photo_3'];
            }
          ?>        
        " 
        alt="
          <?php
            $photo_3 = get_field("photo_group_3");
            if($photo_3) {
                echo $photo_3['photo_3_alt'];
            }
          ?>           
        ">
    </a>
    <!-- Photo Four -->
    <a data-fslightbox href="
      <?php
        $photo_4 = get_field("photo_group_3");
        if($photo_4) {
            echo $photo_4['photo_4'];
        }
      ?>        
    ">
      <img class="photo-gallery__photo photo-gallery__photo--forth" 
        src="
          <?php
            $photo_4 = get_field("photo_group_3");
            if($photo_4) {
                echo $photo_4['photo_4'];
            }
          ?>        
        " 
        alt="
          <?php
            $photo_4 = get_field("photo_group_3");
            if($photo_4) {
                echo $photo_4['photo_4_alt'];
            }
          ?>        
        "
      >
    </a>
    <!-- Photo Five -->
    <a data-fslightbox href="
      <?php
        $photo_5 = get_field("photo_group_3");
        if($photo_5) {
            echo $photo_5['photo_5'];
        }
      ?>       
    ">
      <img 
        class="photo-gallery__photo photo-gallery__photo--fifth" 
        src="
          <?php
            $photo_5 = get_field("photo_group_3");
            if($photo_5) {
                echo $photo_5['photo_5'];
            }
          ?>        
        " 
        alt="
          <?php
            $photo_5 = get_field("photo_group_3");
            if($photo_5) {
                echo $photo_5['photo_5_alt'];
            }
          ?>            
        "
      >
    </a>
    <!-- Photo six -->
    <a data-fslightbox href="
      <?php
        $photo_6 = get_field("photo_group_3");
        if($photo_6) {
            echo $photo_6['photo_6'];
        }
      ?>         
    ">
      <img 
        class="photo-gallery__photo photo-gallery__photo--sixth" 
        src="
          <?php
            $photo_6 = get_field("photo_group_3");
            if($photo_6) {
                echo $photo_6['photo_6'];
            }
          ?>             
        " 
        alt="
          <?php
            $photo_6 = get_field("photo_group_3");
            if($photo_6) {
                echo $photo_6['photo_6_alt'];
            }
          ?>
        "
      >
    </a>
  </div>
  <!-- Photo Group 4 -->
  <div class="photo-gallery__group">
    <h4 class="heading heading__photo-gallery heading--brown">
      <?php
        $photo_group_heading = get_field("photo_group_4");
        if($photo_group_heading) {
            echo $photo_group_heading['photo_group_heading'];
        }
      ?>
    </h4>
    <!-- Photo One -->
    <a data-fslightbox href="
      <?php
        $photo_1 = get_field("photo_group_4");
        if($photo_1) {
            echo $photo_1['photo_1'];
        }
      ?>    
    ">
      <img 
        class="photo-gallery__photo photo-gallery__photo--first" 
        src="
          <?php
            $photo_1 = get_field("photo_group_4");
            if($photo_1) {
                echo $photo_1['photo_1'];
            }
          ?>        
        " 
        alt="
          <?php
            $photo_1_alt = get_field("photo_group_4");
            if($photo_1_alt) {
                echo $photo_1_alt['photo_1_alt'];
            }
          ?>        
        ">
    </a>
    <!-- Photo Two -->
    <a data-fslightbox href="
    <?php
            $photo_2 = get_field("photo_group_4");
            if($photo_2) {
                echo $photo_2['photo_2'];
            }
          ?>        
    ">
      <img 
        class="photo-gallery__photo photo-gallery__photo--second" 
        src="
          <?php
            $photo_2 = get_field("photo_group_4");
            if($photo_2) {
                echo $photo_2['photo_2'];
            }
          ?>        
        " 
        alt="
          <?php
            $photo_2 = get_field("photo_group_4");
            if($photo_2) {
                echo $photo_2['photo_2_alt'];
            }
          ?>           
        ">
    </a>
    <!-- Photo Three -->
    <a data-fslightbox href="
      <?php
        $photo_3 = get_field("photo_group_4");
        if($photo_3) {
            echo $photo_3['photo_3'];
        }
      ?>         
    ">
      <img 
        class="photo-gallery__photo photo-gallery__photo--third" 
        src="
          <?php
            $photo_3 = get_field("photo_group_4");
            if($photo_3) {
                echo $photo_3['photo_3'];
            }
          ?>        
        " 
        alt="
          <?php
            $photo_3 = get_field("photo_group_4");
            if($photo_3) {
                echo $photo_3['photo_3_alt'];
            }
          ?>           
        ">
    </a>
    <!-- Photo Four -->
    <a data-fslightbox href="
      <?php
        $photo_4 = get_field("photo_group_4");
        if($photo_4) {
            echo $photo_4['photo_4'];
        }
      ?>        
    ">
      <img class="photo-gallery__photo photo-gallery__photo--forth" 
        src="
          <?php
            $photo_4 = get_field("photo_group_4");
            if($photo_4) {
                echo $photo_4['photo_4'];
            }
          ?>        
        " 
        alt="
          <?php
            $photo_4 = get_field("photo_group_4");
            if($photo_4) {
                echo $photo_4['photo_4_alt'];
            }
          ?>        
        "
      >
    </a>
    <!-- Photo Five -->
    <a data-fslightbox href="
      <?php
        $photo_5 = get_field("photo_group_4");
        if($photo_5) {
            echo $photo_5['photo_5'];
        }
      ?>       
    ">
      <img 
        class="photo-gallery__photo photo-gallery__photo--fifth" 
        src="
          <?php
            $photo_5 = get_field("photo_group_4");
            if($photo_5) {
                echo $photo_5['photo_5'];
            }
          ?>        
        " 
        alt="
          <?php
            $photo_5 = get_field("photo_group_4");
            if($photo_5) {
                echo $photo_5['photo_5_alt'];
            }
          ?>            
        "
      >
    </a>
    <!-- Photo six -->
    <a data-fslightbox href="
      <?php
        $photo_6 = get_field("photo_group_4");
        if($photo_6) {
            echo $photo_6['photo_6'];
        }
      ?>         
    ">
      <img 
        class="photo-gallery__photo photo-gallery__photo--sixth" 
        src="
          <?php
            $photo_6 = get_field("photo_group_4");
            if($photo_6) {
                echo $photo_6['photo_6'];
            }
          ?>             
        " 
        alt="
          <?php
            $photo_6 = get_field("photo_group_4");
            if($photo_6) {
                echo $photo_6['photo_6_alt'];
            }
          ?>
        "
      >
    </a>
  </div>
</section>