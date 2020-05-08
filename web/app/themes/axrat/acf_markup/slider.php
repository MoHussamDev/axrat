<section class="fh_slider">

<div class="swiper-container">
          <div class="swiper-wrapper">
<?php 
  if( have_rows('slider') ):

  while(have_rows('slider')){

  the_row();
  
  $image = get_sub_field('image');
  $head_line = get_sub_field('head_line');
  $paragraph = get_sub_field('paragraph');
  // $paragraph = Strip_tags($paragraph);
 
?>
<div class="swiper-slide" style="background-image:url(<?=$image?>);">
      <div class="slideing  center">
            <div class="fh-contentBox">
                <h1><?=$head_line?></h1>
                <?= $paragraph?>
            </div>

      </div>
</div>

<?php
  }	
  ?>
  </div>
  </div>
  </section>
  <script>
var swiper = new Swiper('.swiper-container',{
autoplay: {
delay: 3000,
},
});
</script> 
<?php 
endif;
?>