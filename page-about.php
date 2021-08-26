<?php 
$lead_in = get_field('lead_in');
$about_text = get_field('about_text');
$about_image = get_field('about_image');
if ($about_image):
  // Image variables.
  $url = $about_image['url'];
  $alt = $about_image['alt'];
endif;
?>

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About</h2>
          <p class="has-medium-font-size"><?php echo $lead_in; ?></p>
        </div>
        
        <div class="row">
          <div class="col-lg-4">
            <img src="<?php echo esc_url($url); ?>" class="img-fluid" alt="<?php echo esc_attr($alt); ?>">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content">
            <p><?php echo $about_text; ?></p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->