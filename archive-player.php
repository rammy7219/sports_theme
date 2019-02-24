<?php

get_header(); 
pageBanner(array(
  'title' => 'All Players',
  'subtitle' => 'See all our players.'
));
?>


  <div class="container container--narrow page-section">

    <ul class="link-list min-list">
    
    <?php

      echo '<ul class="player-cards">';
      while(have_posts()) {
        the_post(); ?>
        <li class="player-card__list-item">
          <a class="player-card" href="<?php the_permalink(); ?>">
            <img class="player-card__image" src="<?php the_post_thumbnail_url() ?>">
            <span class="player-card__name"><?php the_title(); ?></span>
          </a>
        </li>
      <?php }
      echo '</ul>';
      echo paginate_links();
    ?>
    </ul>

  </div>

  <?php get_footer();

?>