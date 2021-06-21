 <!-- Start Footer -->
  <footer id="mu-footer">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
        <div class="mu-footer-area">
           <div class="mu-footer-social">
            <?php if($facebook != "") {
              echo '<a href="'.$facebook.'" target="_blank" title="Visitar Facebook"><span class="fa fa-facebook"></span></a>';
            } ?>
            <?php if($twitter != "") {
              echo '<a href="'.$twitter.'" target="_blank" title="Visitar Twitter"><span class="fa fa-twitter"></span></a>';
            } ?>
            <?php if($instagram != "") {
              echo '<a href="'.$instagram.'" target="_blank" title="Visitar Instagram"><span class="fa fa-instagram"></span></a>';
            } ?>
            <?php if($linkedin!= "") {
              echo '<a href="'.$linkedin.'" target="_blank" title="Visitar Linkedin"><span class="fa fa-linkedin"></span></a>';
            } ?>
            <?php if($youtube != "") {
              echo '<a href="'.$youtube.'" target="_blank" title="Visitar Youtube"><span class="fa fa-youtube"></span></a>';
            } ?>
          </div>
          <div class="mu-footer-copyright">
            <p>Site desenvolvido por: <a rel="nofollow" href="http://www.ddrsolucoesemti.com.br/" target="blank"> DDR - Soluções em Tecnologia da Informação</a></p>
          </div>         
        </div>
      </div>
      </div>
    </div>
  </footer>
  <!-- End Footer -->