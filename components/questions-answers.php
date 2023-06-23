<section class="qs-and-as site-body">
<?php
    $question_categories = get_sub_field('question_categories');
    $questionsAndAnswersGroup = get_sub_field('q&a_group');
  ?>    
  <div class="qs-and-as__categories-group">
    <?php foreach($question_categories as $question_category): ?>
        <h6 class="qs-and-as__category">
          <a href="<?php echo $question_category['category_link'];?>">
            <?php echo $question_category['category_label'];?>   
          </a>
        </h6>
    <?php endforeach;?>   
  </div>
  
  <?php foreach($questionsAndAnswersGroup as $singleQAndAGroup): ?>
    <div class="qs-and-as__group">
      <h4 
        class="qs-and-as__heading"
        id="<?php echo $singleQAndAGroup['q&a_group_anchor'];?>"
      >
        <?php echo $singleQAndAGroup['q&a_group_heading'];?>
      </h4>
      <?php foreach($singleQAndAGroup['q&as'] as $qnaAccordion): ?>
        <div class="accordion">
          <div class="accordion__question">
            <?php echo $qnaAccordion['question'];?>
          </div>
          <div class="accordion__answer">
            <?php echo $qnaAccordion['answer'];?>
          </div>
        </div>
      <?php endforeach;?>   
    </div>
  <?php endforeach;?>   
</section>