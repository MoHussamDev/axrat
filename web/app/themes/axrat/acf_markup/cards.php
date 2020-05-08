

<section id="cards" class="">
    <div class="container">
        <div class="row ">
            <?php
             $col = get_sub_field('number_of_cards'); 

              if (have_rows('card_repeater')) {
                while (have_rows('card_repeater')) {
                the_row();
                    $title = get_sub_field('card_title');
                    $titleTag = get_sub_field('title_tag');
                    $img= get_sub_field('image');
                    $paragraph = get_sub_field('paragraph');
                    ?>
                    <div class="col-md-<?=$col?> card">
                    <div class="cardtitle">
                    <?php 
                      
                    if ($titleTag === 'h1'){
  ?>              
                        <h1><?= $title ?> </h1>

    <?php
                    }
                    
                    ?> 
                    </div>
                    </div>   
        
        
        <?php
            } 
              }
            
            ?>
        </div>
        </div>
</section>