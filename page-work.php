<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio bgcolor">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Portfolio</h2>
            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat
                sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">
            <div class="col-lg-12 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
                <ul id="portfolio-flters">
                    <li data-filter="*" class="filter-active">All</li>
                    <li data-filter=".filter-app">App</li>
                    <li data-filter=".filter-card">Card</li>
                    <li data-filter=".filter-web">Web</li>
                </ul>
            </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

            <?php $loop = new WP_Query( array('post_type' => 'works') );
            while ($loop->have_posts()) : $loop->the_post(); 
            ?>
            <!-- loop this -->
            
            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <?php the_post_thumbnail();?>
                <div class="portfolio-info">
                    <h4><?php echo the_title(); ?></h4>
                  <p><?php foreach(get_the_category() as $category) {
                  echo $category->cat_name; }?></p>
                  <div class="portfolio-links">
                    <a href="<?php echo get_the_post_thumbnail_url(); ?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="<?php echo the_title(); ?>"><i class="bx bx-plus"></i></a>
                    <a href="<?php echo esc_url(get_permalink());?>" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                  </div>
                </div>
              </div>
            </div>
            
            <?php endwhile; ?>
            <?php wp_reset_query();?>

            <!-- html item template -->
            <!-- 

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="<?php bloginfo('template_directory'); ?>/assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 1</h4>
                <p>App</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

         -->
        </div>

    </div>
</section><!-- End Portfolio Section -->