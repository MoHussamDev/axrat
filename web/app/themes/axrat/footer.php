<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fiveh
 */

?>

	</div><!-- #content -->

	<!-- Footer-->
<footer class="page-footer font-small mdb-color pt-4">
    <!-- Footer Links-->
    <div class="container text-center text-md-left">
        <!-- Footer links-->
        <hr/>
        <div class="row text-center text-md-right mt-3 pb-3">
            <!-- Grid column-->
            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3"><?php the_custom_logo() ?>
                <p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام</p>
            </div>
            <!-- Grid column-->
            <hr class="w-100 clearfix d-md-none" />
            <!-- Grid column-->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                <h6 class="text-uppercase mb-4 font-weight-bold">الخدمات</h6>
               <?= wp_nav_menu( array(
                   'theme_location'    => 'footer1',
                   'depth'             => 1,
                   'container'         => 'div',
               ) )?>
            </div>
            <!-- Grid column-->
            <hr class="w-100 clearfix d-md-none" />
            <!-- Grid column-->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                <h6 class="text-uppercase mb-4 font-weight-bold">روابط تهمك</h6>
   
            </div>
            <!-- Grid column-->
            <hr class="w-100 clearfix d-md-none" />
            <!-- Grid column-->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                <h6 class="text-uppercase mb-4 font-weight-bold">تواصل معنا</h6>
                <p><i class="fas fa-home ml-3"></i> <?php echo get_theme_mod('blog_address','Compny_email') ?></p>
                <p><i class="fas fa-envelope ml-3"></i><?php echo get_theme_mod('blog_email','Compny_email') ?></p>
                <p><i class="fas fa-phone ml-3"></i> <?php echo get_theme_mod('blog_tele','Company Telephone') ?></p>
            </div>
            <!-- Grid column-->
        </div>
        <!-- Footer links-->
        <hr/>
        <!-- Grid row-->
        <div class="row d-flex align-items-center">
            <!-- Grid column-->
            <div class="col-md-7 col-lg-8">
                <!-- Copyright-->
                <p class="text-center text-md-right">جميع الحقوق محفوظة لشركة<strong> فايف اتش</strong></a></p>
            </div>
            <!-- Grid column-->
            <!-- Grid column-->
            <div class="col-md-5 col-lg-4 ml-lg-0">
                <!-- Social buttons-->
                <div class="text-center text-md-right">
                    <ul class="list-unstyled list-inline">
                        <li class="list-inline-item"><a class="btn-floating btn-sm rgba-white-slight mx-1"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="list-inline-item"><a class="btn-floating btn-sm rgba-white-slight mx-1"><i class="fab fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a class="btn-floating btn-sm rgba-white-slight mx-1"><i class="fab fa-google-plus-g"></i></a></li>
                        <li class="list-inline-item"><a class="btn-floating btn-sm rgba-white-slight mx-1"><i class="fab fa-linkedin-in"></i></a></li>
                    </ul>
                </div>
            </div>
            <!-- Grid column-->
        </div>
        <!-- Grid row-->
    </div>
    <!-- Footer Links-->
</footer>
<!-- Footer-->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
