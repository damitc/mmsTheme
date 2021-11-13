<footer class="main-footer bg-dark text-white pt-5 pb-3">
  <div class="container-fluid">
    <div class="row">
      <?php if ( is_active_sidebar( 'footer-widgets' ) ) : ?>
          <?php dynamic_sidebar( 'footer-widgets' ); ?>
      <?php endif; ?>
    </div>
  </div>
</footer>

<div class="copy bg-dark pt-2 pb-2 border-top borderCopy">
  <div class="container">
    <div class="row">
      <div class="col text-center">
        <p class="small m-0 text-white">Copyright &copy; <?php echo date('Y')?>. All Rights Reserved</p>
      </div>
    </div>
  </div>
</div>

<?php wp_footer(); ?>
  </body>
</html>