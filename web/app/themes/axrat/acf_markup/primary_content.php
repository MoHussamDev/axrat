<?php
if (!empty(get_sub_field('custom_class'))) {

    $class = get_sub_field('custom_class');
    $class = join(' ', $class);
}

?>
<section id="primaryContent" class="<?= $class ?>">
    <div class="container">
        <div class="row ">

            <?php
            if (have_rows('columns')) {
                while (have_rows('columns')) {
                    the_row();
                    $contentType = get_sub_field('content_type');
                    $width = get_sub_field('width');
                    $custom_class = get_sub_field('custom_class');
                    $wysiwyg = get_sub_field('wysiwyg');
                    $image = get_sub_field('image');

            ?>
                    <div id="inner-wrapper" class="col-md-<?= $width ?> ">
                        <?php
                        if ($contentType === "wysiwyg") {
                        ?>
                            <div class="primary-content--wysiwyg">
                                <?= $wysiwyg; ?>
                            </div>
                        <?php
                        } else {
                        ?>
                            <img src="<?= $image['url'] ?>" alt="">
                        <?php
                        }

                        ?>
                    </div>



            <?php
                }
            }
            ?>
        </div>
    </div>
</section>