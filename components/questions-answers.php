<section class="qs-and-as site-body">
<?php
    $question_categories = get_sub_field('question_categories');
  ?>    
  <div class="qs-and-as__categories-group">
    <?php foreach($question_categories as $question_category): ?>
      <a href="<?php echo $question_category['category_link'];?>">
        <h6 class="qs-and-as__category">
          <?php echo $question_category['category_label'];?>   
        </h6>
      </a>
    <?php endforeach;?>   
  </div>

  <div class="qs-and-as__group">
    <h4 class="qs-and-as__heading">Training</h4>
    <div class="accordion">
      <div class="accordion__question">
        What kinds of training services do you offer?
      </div>
      <div class="accordion__answer">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      </div>
    </div>
    <div class="accordion">
      <div class="accordion__question">
        What kinds of training services do you offer?
      </div>
      <div class="accordion__answer">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      </div>
    </div>        
  </div>
</section>
