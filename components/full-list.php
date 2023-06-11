<section class="site-body full-width-list">
  <?php
    $list_heading = get_sub_field('list_heading');
    $left_list_items  = get_sub_field('left_list');
    $right_list_items  = get_sub_field('right_list');
  ?>
  <h2 class="heading heading--one heading--brown heading--center">
    <?php echo $list_heading;?>     
  </h2>
  <div class="full-width-list__paw-print-list-container">
    <ul class="paw-print-list">
      <?php foreach($left_list_items as $left_list_item):?>
        <li>
          <?php echo $left_list_item['left_list_item'];?>
        </li>
      <?php endforeach;?>
    </ul>
    <ul class="paw-print-list">
      <?php foreach($right_list_items as $right_list_item):?>
          <li>
            <?php echo $right_list_item['right_list_item'];?>
          </li>
      <?php endforeach;?>
    </ul>
  </div>                  
</section>