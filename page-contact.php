<?php get_header(); ?>
<img id="ftcc_logo" src="<?php echo get_template_directory_uri();?>./assets/ftcc_logo_1.png" alt="Final Touch Custom Creations">

<nav class="navbar">
  <?php
    $args = array(
      'theme_location' => 'primary'
    );
    wp_nav_menu($args);
  ?>
</nav>

<main>
<br>
     <!-- contact -->
<!-- <div class="fcf-body">

<div id="fcf-form">
<h3 class="fcf-h3">Contact us</h3>
<div class="subheader">
 <h2>Getting in Touch With Us is Easy! </h2>
</div>

<form id="fcf-form-id" class="fcf-form-class" method="post" action="contact-form-process.php">

    <div class="fcf-form-group">
        <label for="Name" class="fcf-label">Your name</label>
        <div class="fcf-input-group">
            <input type="text" id="Name" name="Name" class="fcf-form-control" required>
        </div>
    </div>

    <div class="fcf-form-group">
        <label for="Email" class="fcf-label">Your email address</label>
        <div class="fcf-input-group">
            <input type="email" id="Email" name="Email" class="fcf-form-control" required>
        </div>
    </div>

    <div class="fcf-form-group">
        <label for="Message" class="fcf-label">Your message</label>
        <div class="fcf-input-group">
            <textarea id="Message" name="Message" class="fcf-form-control" rows="6" maxlength="3000" required></textarea>
        </div>
    </div>

    <div class="fcf-form-group">
        <button type="submit" id="fcf-button" class="fcf-btn fcf-btn-primary fcf-btn-lg fcf-btn-block">Send Message</button>
    </div>

</form>
</div>

</div> -->

<br/>
  <div class="contact-ftcc"><p>You can always email us at tarafinaltouch@gmail.com or give us a call at 407-655-6769</p>
  </div>
   </form>
 </main>






<?php get_footer();?>
