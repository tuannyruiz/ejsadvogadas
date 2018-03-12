  <footer><?php $home = get_template_directory_uri(); ?>
    <div class="container">
      <div class="row">
        <div class="col-md-5 col-sm-7 col-xs-12 endereco">
          <p class="adv">E. Melo, J. Durães & S. Castro Advogadas</p>
          <p>Avenida Rio Branco, 185, sala 820</p>
          <p>Edifício Marquês do Herval - Centro</p>
          <p>Rio de Janeiro - CEP 20040-007</p>
        </div>
        <div class="col-md-2 col-md-offset-5 col-sm-4 col-sm-offset-1">
          <a href="<?php echo get_home_url() ?>"><img src="<?= $home; ?>/assets/img/logo.png" alt="Logo da EJS Advogadas"></a>
        </div>
      </div>
    </div>
    <p class="copyright">© E. Melo, J. Durães & S. Castro Advogadas 2018. Todos os direitos reservados</p>
  </footer>

  <script type="text/javascript" src="<?= $home; ?>/assets/js/lib/jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="<?= $home; ?>/assets/js/lib/bootstrap.min.js"></script>
  <script type="text/javascript" src="<?= $home; ?>/assets/js/homepage.js"></script>
  <script type="text/javascript" src="<?= $home; ?>/assets/slick/slick.js"></script>
   <script type="text/javascript" src="<?= $home; ?>/assets/js/carrossel.js"></script>
<?php wp_footer(); ?>
</body>
</html>