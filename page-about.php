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

  <div class="subheader">
      <h2>About Us</h2>
   <br>
      <p>Tara R Cummins is a student at FIRST Institute where she is enhancing her skillset in graphic design and website development. Her goal is to polish the skill set she has through her schooling at FIRST Institute and lead herself into a successful career as an interior designer as well. She will be graduating from FIRST Institute in March of 2022 where she will work for her company Final Touch Custom Creations in several fields of design, including graphic design, website development and interior design.</p>
   <br><br>

      <p>Tara’s initial training was self-taught for her direct selling business and a nonprofit that she was a co-founder of. This allowed her to learn the basics of logo design, photoshop, illustrator, WordPress, marketing management and branding. This was a time when Tara had the most passion about her work. Tara was also pursuing a career in corporate America where she became a top selling sales manager and built several elite sales teams. Although she was well known within the hospitality industry, as a leader with the ability to motivate and create high producing sales team, winning several yearly awards for performance and production, she never felt the same passion as she did while working in a creative environment.</p>
   <br><br>

      <p>Tara began working with her partner assisting with her partner when the world as we know it was faced with the Covid-19 pandemic. Tara knew it would change the hospitality industry for many years to come. Tara having a strong belief in personal development and doing what you love to do decided it was time to follow her own passion through graphic, interior, and website design.
    <br><br>
      </p>
  </div>


<?php get_footer();?>
