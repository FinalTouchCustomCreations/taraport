<?php get_header(); ?>
<img id="ftcc_logo" src="./assets/ftcc_logo_1.png" alt="Final Touch Custom Creations">



<section class="nav_left">


<nav class="navbar">
<!-- <div>
<ul>
<li><a href="./home.html">Home</a></li>
<li><a href="./about.html">About</a></li>
<li><a href="./contact.html">Contact</a></li>
<li><a href="./gallery.html">Gallery</a></li>
</ul>
</div> -->
<?php
$args = array(
'theme_location' => 'primary'
);
wp_nav_menu($args);
?>
<!-- <div class="nav_right">
<ul class="navbar">
<li><a href="#"><i></i></a></li>
<li><a href="#"></a></li>
<li><a href="#"></a></li>
</ul> -->
<!-- </div> -->
</nav>
</section>


<section>

<?php
while(have_posts()){
the_post(); ?>
<h1><?php the_title(); ?></h1>
<?php  the_content();
}
?>

</section>

<main>

 <?php
  $args = array(
    'category_name' => 'about-me'
  );

  $aboutpost =  new WP_Query($args);

 if($aboutpost->have_posts()){
  while($aboutpost->have_posts()){
    $aboutpost->the_post();
    the_content();
    the_title();
  }
}
wp_reset_postdata();
  ?>
  <br>
  <br>
<h1 class="center_txt"> Working with a professional designer is easy! </h1>
<br>
<br>
<?php the_content(); ?>
  <p class="center_txt"> Final Touch Custom Creations specializes (FTCC) in graphic design, kitchen and bathrooms remodels. Our graphic design is directly done by Final Touch Custom Creations. While our remodleing (kitchen and bathroom) projects are completed by Final Touch Handyman Services (FTHMS). We take the time to understand the needs of our clients and work together to make their remodeling dreams come ture. </p>
  <br>
  <p class="center_txt">Tara, FTCC owner and principal designer is skilled at listening to her clients to better understand their design personality, preferences and goals. She unfailingly and sensitively leverages her clients budgets to create the best design possible for them and with her unerring eye for great design she gives the clients a space they have always dreamed to call their own.</p>
  <br>
  <p class="center_txt">Jerod, FTHMS owner and operator brings all the remodeling designs to life. He makes every client feel like they are the only client. He takes pride in his work and the work of his team. He specializes in kitchen and bathroom remodels which are the two spaces most people want and need to be updated. He brings a life time of experinace to every client, from small jobs to large job. "One Call Does it All- No Job Too Big or Too Small".</p>
  <br> <br>
</main>


<?php get_footer();?>
