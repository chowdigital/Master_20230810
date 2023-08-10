<?php /* Template Name: Carosel */ get_header(); ?>

<!-- Full Page Intro -->

<div class="view full-page-intro z-depth-3">

<div class="view full-page-intro" style="background-image:  url(<?php the_post_thumbnail_url(); ?>); background-repeat: no-repeat; background-position: center; background-size: cover;">
 
		 </div>
<!-- Mask & flexbox options-->

<div class="mask d-flex justify-content-center align-items-center">

  <!-- Content -->
  <div class="container">



  </div>
  <!-- Content -->

  

</div>
<!-- Mask & flexbox options-->

</div>
<!-- Full Page Intro --> 



<section class="container">
<div id="loopCarousel" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">

    <?php
    // Custom WordPress Loop to retrieve posts
    $args = array(
      'post_type' => 'post', // Change to your post type if necessary
      'posts_per_page' => 6, // Number of posts to display in the carousel
    );

    $query = new WP_Query($args);
    $item_count = 0;

    while ($query->have_posts()) {
      $query->the_post();
      $item_count++;

      // Output the carousel item markup
      if ($item_count === 1) {
        echo '<div class="carousel-item active">';
      } else {
        echo '<div class="carousel-item">';
      }
    ?>

      <div class="card">
        <div class="card-body">
          <h5 class="card-title"><?php the_title(); ?></h5>
          <p class="card-text"><?php the_excerpt(); ?></p>
        </div>
      </div>

    </div><!-- end of carousel-item -->

    <?php
    }

    wp_reset_postdata();
    ?>

  </div><!-- end of carousel-inner -->
<!-- Carousel navigation indicators -->
<ol class="carousel-indicators">
    <?php
    // Reset the counter to generate indicators
    $item_count = 0;
    while ($query->have_posts()) {
      $query->the_post();
      $item_count++;
    ?>
      <li data-bs-target="#loopCarousel" data-bs-slide-to="<?php echo $item_count - 1; ?>" <?php echo $item_count === 1 ? 'class="active"' : ''; ?>></li>
    <?php
    }
    ?>
  </ol>

  <button class="carousel-control-prev" type="button" data-bs-target="#loopCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#loopCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div><!-- end of myCarousel -->
</section>


<?php get_footer(); ?>