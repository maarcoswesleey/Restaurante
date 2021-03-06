<?php 
require_once("conexao.php");

//TOTAIS 

$query = $pdo->query("SELECT * FROM pratos");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$total_pratos = @count($res);

$query = $pdo->query("SELECT * FROM categorias where nome = 'Vinhos'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$total_cat = @count($res);
$total_vinhos = 0;
if($total_cat > 0){
  $id_cat_vinho = $res[0]['id'];
  $query2 = $pdo->query("SELECT * FROM produtos where categoria = '$id_cat_vinho'");
  $res2 = $query2->fetchAll(PDO::FETCH_ASSOC);
  $total_vinhos = @count($res2);
}

?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <meta name="description" content="bar em trindade, restaurante em trindade, restaurante romeiro, pai eterno, romaria de trinade, divino pai eterno.">
    <meta name="author" content="Marcos Wesley - DDR Soluções em Tecnologia da Informação">  
    
    <title><?php echo $nome_site ?></title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/icone.ico" type="image/x-icon">

    <!-- Font awesome -->
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">   
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css">    
    <!-- Date Picker -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-datepicker.css">    
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="assets/css/jquery.fancybox.css" type="text/css" media="screen" /> 
    <!-- Theme color -->
    <link id="switcher" href="assets/css/theme-color/default-theme.css" rel="stylesheet">     

    <!-- Main style sheet -->
    <link href="style.css" rel="stylesheet">    

   
    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Tangerine' rel='stylesheet' type='text/css'>        
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Prata' rel='stylesheet' type='text/css'>
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body>  

  <style type="text/css">

      .alert {
        text-align: center;
        position: fixed;
        bottom:0;
        width: 100%;
        padding: 15px;
        margin-bottom:0px;
        z-index: 1;
        opacity: 90%;
      }

      .alert.hide {
        display: none !important; 
      }

      .alert-link:hover {
        text-decoration: underline;
      }
      
      .btn-aceitar {
        background: #e8e8e8;
        color: #000000;
        padding: 7px;
        margin-left: 15px;
        border-radius: 10px;
        border: none;
      }

      .btn-aceitar:hover {
        background: #f7f7f7;
        text-decoration: none;
        color: #000000;
      }

      

  </style>
  
  <div class="alert hide alert-danger" role="alert">
    Cookies: Este site guarda estatísticas de visitas para melhorar sua experiência de navegação, saiba mais em nossa  <a href="politica-de-privacidade.php" target="blank" class="alert-link"> Politica de Privacidade. </a>
    <a class="btn-aceitar" href="#">Aceitar</a>
  </div>

  <script>

    if(!localStorage.papitosCookie) {
      document.querySelector(".alert").classList.remove('hide');
    }

    const acceptCookies = () => {
      document.querySelector(".alert").classList.add('hide');
      localStorage.setItem("papitosCookie", "accept");
    };

    const btnCookies = document.querySelector(".btn-aceitar");

    btnCookies.addEventListener('click', acceptCookies);

  </script>

  <!-- Pre Loader 
  <div id="aa-preloader-area">
    <div class="mu-preloader">
      <img src="assets/img/preloader.gif" width="200px" alt=" loader img">
    </div>
  </div>-->
  <!--START SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#">
      <i class="fa fa-angle-up"></i>
      <span>Topo</span>
    </a>
  <!-- END SCROLL TOP BUTTON -->

  <!-- Start header section -->
  <header id="mu-header">  
    <nav class="navbar navbar-default mu-main-navbar" role="navigation">  
      <div class="container">
        <div class="navbar-header">
          <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- LOGO -->                                                        
          <a class="navbar-brand" href="index.php"><img src="assets/img/logo2.png" alt="Logo img"></a> 
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul id="top-menu" class="nav navbar-nav navbar-right mu-main-nav">
            <li><a href="#mu-slider">HOME</a></li>
            <li><a href="#mu-about-us">SOBRE</a></li>                       
            <li><a href="#mu-restaurant-menu">CARDÁPIO</a></li>                       
            <li><a href="#mu-reservation">RESERVAS</a></li>                       
            <li><a href="#mu-gallery">FOTOS</a></li>
            <li><a href="#mu-chef">NOSSA EQUIPE</a></li>
            <li><a href="#mu-latest-news">BLOG</a></li> 
            <li><a href="#mu-contact">CONTATO</a></li> 
            <li><a href="sistema" target="_blank">LOGIN</a></li> 
          </ul>                            
        </div><!--/.nav-collapse -->       
      </div>          
    </nav> 
  </header>
  <!-- End header section -->
 

<!-- Start slider  -->
<section id="mu-slider">
  <div class="mu-slider-area"> 
    <!-- Top slider -->
    <div class="mu-top-slider">

      <?php 
      $query = $pdo->query("SELECT * FROM banners order by id asc");
      $res = $query->fetchAll(PDO::FETCH_ASSOC);
      for($i=0; $i < @count($res); $i++){
        foreach ($res[$i] as $key => $value){ }
          $id_reg = $res[$i]['id'];

        ?>
        <!-- Top slider single slide -->
        <div class="mu-top-slider-single">
          <img src="sistema/img/banners/<?php echo $res[$i]['imagem'] ?>" alt="img">
          <!-- Top slider content -->
          <div class="mu-top-slider-content">
            <span class="mu-slider-small-title"><?php echo $res[$i]['titulo'] ?></span>
            <h2 class="mu-slider-title"><?php echo mb_strtoupper($res[$i]['subtitulo']) ?></h2>
            <p><?php echo $res[$i]['descricao'] ?></p> 
            <?php if($res[$i]['link'] != ""){ ?>          
             <a href="<?php echo $res[$i]['link'] ?>" class="mu-readmore-btn">SAIBA MAIS</a>
           <?php } ?>
         </div>
         <!-- / Top slider content -->
       </div>
       <!-- / Top slider single slide -->    
     <?php } ?>

   </div>
 </div>
</section>
<!-- End slider  -->

  <!-- Start About us -->
  <section id="mu-about-us">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-about-us-area">
            <div class="mu-title">
              <span class="mu-subtitle">Excelência</span>
              <h2>SOBRE NÓS</h2>
              <i class="fa fa-spoon"></i>              
              <span class="mu-title-bar"></span>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="mu-about-us-left">
                 <p>Em 2018 após uma crise em nosso comercio de confecções tivemos a ideia de vender marmitex durante um evento turístico na cidade de Trindade – GO. O primeiro dia foi um fracasso, porém não desistimos e aos poucos o sabor da nossa comida foi conquistando o paladar de nossos clientes. E foi nos últimos dias da festa, na cidade de Trindade, que obtemos bons resultados nas vendas. A partir daí surgiu à ideia de investirmos no ramo de alimentação, e passado o evento turístico, começamos a vender marmitex para algumas empresas.</p>                              
                 <P>Com a experiência inicial que tivemos, pensamos em buscar uma parceria para poder aumentar nosso negócio, foi assim então que propomos a um casal de amigos, montar uma Jantinha temporária na festa de Trindade de 2019. Essa experiência foi outro grande sucesso, e depois de finalizada a festa, decidimos prosseguir com nosso negócio definitivamente.</P>
                 <p>Com Deus em primeiro lugar, trabalho, dedicação e foco de nossa família foi assim que começamos. PAPITO’S GASTROHOUSE, um novo conceito de bar e gastronomia em casa.</p>  
                </div>
              </div>
              <div class="col-md-6">
                <div class="mu-about-us-right" >                
                 <ul class="mu-abtus-slider">                 
                   <li><img style="border-radius: 10px; " src="assets/img/about-us/sobre.png" alt="img"></li>
                   <li><img style="border-radius: 10px;" src="assets/img/about-us/01.png" alt="img"></li>
                   <li><img style="border-radius: 10px;" src="assets/img/about-us/02.png" alt="img"></li>
                   <li><img style="border-radius: 10px;" src="assets/img/about-us/03.png" alt="img"></li>
                   <li><img style="border-radius: 10px;" src="assets/img/about-us/04.png" alt="img"></li>
                   <li><img style="border-radius: 10px;" src="assets/img/about-us/05.png" alt="img"></li>
                 </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End About us -->

  <!-- Start Counter Section -->
  <section id="mu-counter">
    <div class="mu-counter-overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="mu-counter-area">
            <ul class="mu-counter-nav">
              <li class="col-md-3 col-sm-3 col-xs-12">
                <div class="mu-single-counter">
                  <span>Pratos</span>
                  <h3><span class="counter"><?php echo $total_pratos ?></span><sup>+</sup></h3>
                  <p>Tipos de Pratos</p>
                </div>
              </li>
              <li class="col-md-3 col-sm-3 col-xs-12">
                <div class="mu-single-counter">
                  <span>Vinhos</span>
                  <h3><span class="counter"><?php echo $total_vinhos ?></span><sup>+</sup></h3>
                  <p>Carta de Vinhos</p>
                </div>
              </li>
               <li class="col-md-3 col-sm-3 col-xs-12">
                <div class="mu-single-counter">
                  <span>Bebibas</span>
                   <h3><span class="counter">35</span><sup>+</sup></h3>
                  <p>Carta de Bebidas</p>
                </div>
              </li>
               <li class="col-md-3 col-sm-3 col-xs-12">
                <div class="mu-single-counter">
                  <span>Clientes</span>
                  <h3><span class="counter">3562</span><sup>+</sup></h3>
                  <p>Clientes Satisfeitos</p>
                </div>
              </li>
            </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Counter Section --> 

  <!-- Start Restaurant Menu -->
  <section id="mu-restaurant-menu">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-restaurant-menu-area">
            <div class="mu-title">
              <span class="mu-subtitle">Descubra</span>
              <h2>Nosso MENU</h2>
              <i class="fa fa-spoon"></i>              
              <span class="mu-title-bar"></span>
            </div>
            <div class="mu-restaurant-menu-content">
            <ul class="nav nav-tabs mu-restaurant-menu">

              <?php 
              $query = $pdo->query("SELECT * FROM categorias order by id asc");
              $res = $query->fetchAll(PDO::FETCH_ASSOC);
              for($i=0; $i < @count($res); $i++){
                foreach ($res[$i] as $key => $value){ }
                  $id_reg = $res[$i]['id'];
                $nome_cat = $res[$i]['nome'];

                if($i == 0){
                  $classe = 'active';
                }else{
                  $classe = '';
                }

                ?>

                <li class="<?php echo $classe ?>" style="margin-bottom: 10px; "><a style="border-bottom: 1px solid #c1a35a;" href="#" onclick="mostrarProdutos(<?php echo $id_reg ?>)" data-toggle="tab"><?php echo $nome_cat ?></a></li>
              <?php } ?>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
              <div class="tab-pane fade in active" id="breakfast">
                <div class="mu-tab-content-area">


                  <div class="row">
                                        
                        <ul class="mu-menu-item-nav">
                       <div id="listar-produtos">

                      </div>  
                        </ul>   
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
<!-- End Restaurant Menu -->


  <!-- Start Reservation section -->
  <section id="mu-reservation">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-reservation-area">
            <div class="mu-title">
              <span class="mu-subtitle">Faça Sua</span>
              <h2>Reserva</h2>
              <i class="fa fa-spoon"></i>              
              <span class="mu-title-bar"></span>
            </div>
            <div class="mu-reservation-content">
              <p>Aqui você pode fazer a sua reserva, basta informar o dia e horário em que deseja.</p>
              <form class="mu-reservation-form" method="post" action="reservar.php">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">                       
                      <input type="text" class="form-control" name="nome" placeholder="Nome Completo*" required>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">                        
                      <input type="email" class="form-control" name="email" placeholder="E-mail*" required>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">                        
                      <input type="text" class="form-control" name="telefone" id="telefone" placeholder="Telefone Celular">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <input type="number" class="form-control" name="pessoas" placeholder="Quantidade de Pessoas*?" required>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <input type="date" class="form-control" name="data" placeholder="Data">              
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <textarea class="form-control" name="mensagem" cols="30" rows="10" placeholder="Sua Mensagem ou Comentário"></textarea>
                    </div>
                  </div>
                  <button type="submit" class="mu-readmore-btn">Fazer Reserva</button>
                </div>
              </form>      
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>  
  <!-- End Reservation section -->

  <!-- Start Gallery -->
  <section id="mu-gallery">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-gallery-area">
            <div class="mu-title">
              <span class="mu-subtitle">Conheça</span>
              <h2>Nossas Fotos</h2>
              <i class="fa fa-spoon"></i>              
              <span class="mu-title-bar"></span>
            </div>
            <div class="mu-gallery-content">
              <div class="mu-gallery-top">
                <!-- Start gallery menu -->
                <ul>
                  <li class="filter active" data-filter="all">TODAS</li>
                    <?php
                
                      $query = $pdo->query("SELECT * FROM categoria_img order by id asc");
                      $res = $query->fetchAll(PDO::FETCH_ASSOC);
                      for($i=0; $i < @count($res); $i++) {
                        foreach ($res[$i] as $key => $value) { }
                        $id_reg = $res[$i]['id'];
                        $nome_cat = $res[$i]['nome'];

                    ?>
                      <li class="filter" data-filter=".<?php echo $nome_cat ?>"><?php echo $nome_cat ?></li>
                
                    <?php } ?>
                </ul>
              </div>
              <!-- Start gallery image -->
              <div class="mu-gallery-body" id="mixit-container">

                <?php
            
                  $query = $pdo->query("SELECT * FROM galeria order by id desc limit $maximo_imagens_galeria_index");
                  $res = $query->fetchAll(PDO::FETCH_ASSOC);
                  for($i=0; $i < @count($res); $i++) {
                    foreach ($res[$i] as $key => $value) { }
                    $id_reg = $res[$i]['id'];
                    $cat_img = $res[$i]['categoria'];

                  $query2 = $pdo->query("SELECT * FROM categoria_img where id = '$cat_img'");
                  $res2 = $query2->fetchAll(PDO::FETCH_ASSOC);
                  $nome_cat_img = $res2[0]['nome'];
                    

                ?>
                <!-- start single gallery image -->
              <div class="mu-single-gallery col-md-4 mix <?php echo $nome_cat_img  ?>">
                <div class="mu-single-gallery-item">
                  <figure class="mu-single-gallery-img">
                    <a href="#"><img alt="img" src="sistema/img/galeria/<?php echo $res[$i]['imagem'] ?>"></a>
                  </figure>
                  <div class="mu-single-gallery-info">
                    <a href="sistema/img/galeria/<?php echo $res[$i]['imagem'] ?>" data-fancybox-group="gallery" class="fancybox">
                      <img src="assets/img/plus.png" alt="plus icon img">
                    </a>
                  </div>                  
                </div>
              </div>
              <!-- End single gallery image -->            
              <?php } ?>                 
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Gallery -->
  
  <!-- Start Client Testimonial section -->
  <section id="mu-client-testimonial">
    <div class="mu-overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="mu-client-testimonial-area">
              <div class="mu-title">
                <span class="mu-subtitle">Testemunhos</span>
                <h2>Nossos Clientes</h2>
                <i class="fa fa-spoon"></i>              
                <span class="mu-title-bar"></span>
              </div>
              <!-- testimonial content -->
              <div class="mu-testimonial-content">
                <!-- testimonial slider -->
                <ul class="mu-testimonial-slider">
                  <li>
                    <div class="mu-testimonial-single">                   
                      <div class="mu-testimonial-info">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate consequuntur ducimus cumque iure modi nesciunt recusandae eligendi vitae voluptatibus, voluptatum tempore, ipsum nisi perspiciatis. Rerum nesciunt fuga ab natus, dolorem?</p>
                      </div>
                      <div class="mu-testimonial-bio">
                        <p>- David Muller</p>                      
                      </div>
                    </div>
                  </li>
                   <li>
                    <div class="mu-testimonial-single">                   
                      <div class="mu-testimonial-info">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate consequuntur ducimus cumque iure modi nesciunt recusandae eligendi vitae voluptatibus, voluptatum tempore, ipsum nisi perspiciatis. Rerum nesciunt fuga ab natus, dolorem?</p>
                      </div>
                      <div class="mu-testimonial-bio">
                        <p>- David Muller</p>                      
                      </div>
                    </div>
                  </li>
                   <li>
                    <div class="mu-testimonial-single">                   
                      <div class="mu-testimonial-info">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate consequuntur ducimus cumque iure modi nesciunt recusandae eligendi vitae voluptatibus, voluptatum tempore, ipsum nisi perspiciatis. Rerum nesciunt fuga ab natus, dolorem?</p>
                      </div>
                      <div class="mu-testimonial-bio">
                        <p>- David Muller</p>                      
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Client Testimonial section -->

  <!-- Start Chef Section -->
  <section id="mu-chef">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-chef-area">
            <div class="mu-title">
              <span class="mu-subtitle">Nossos Profissionais</span>
              <h2>MASTER CHEFS</h2>
              <i class="fa fa-spoon"></i>              
              <span class="mu-title-bar"></span>
            </div>
            <div class="mu-chef-content">
              <ul class="mu-chef-nav">

              <?php
              
              $query = $pdo->query("SELECT * FROM chef order by id asc");
              $res = $query->fetchAll(PDO::FETCH_ASSOC);
              for($i=0; $i < @count($res); $i++) {
                foreach ($res[$i] as $key => $value) { }
                $id_reg = $res[$i]['id'];
                $funcionario = $res[$i]['funcionario'];

              $query2 = $pdo->query("SELECT * FROM funcionarios where id = '$funcionario'");
              $res2 = $query2->fetchAll(PDO::FETCH_ASSOC);
              $nome_func = $res2[0]['nome'];
            
              ?>
                <li>
                  <div class="mu-single-chef">
                    <figure class="mu-single-chef-img">
                      <img src="sistema/img/chef/<?php echo $res[$i]['imagem'] ?>" alt="chef img">
                    </figure>
                    <div class="mu-single-chef-info">
                      <h4><?php echo $nome_func ?></h4>
                      <span><?php echo $res[$i]['especialidade'] ?></span>
                    </div>
                    <div class="mu-single-chef-social">
                      <?php if($res[$i]['facebook'] != "") { ?>
                      <a href="<?php echo $res[$i]['facebook'] ?>" target="_blank"><i class="fa fa-facebook" title="Facebook" ></i></a>
                      <?php } ?>
                      <?php if($res[$i]['instagram'] != "") { ?>
                      <a href="<?php echo $res[$i]['instagram'] ?>"><i class="fa fa-instagram" title="Instagram"></i></a>
                      <?php } ?>
                      <?php if($res[$i]['twitter'] != "") { ?>
                      <a href="<?php echo $res[$i]['twitter'] ?>"><i class="fa fa-twitter" title="Twitter"></i></a>
                      <?php } ?>
                      <?php if($res[$i]['linkedin'] != "") { ?>
                      <a href="<?php echo $res[$i]['linkedin'] ?>"><i class="fa fa-linkedin" title="Linkedin"></i></a>
                      <?php } ?>
                    </div>
                  </div>
                </li> 
                
                <?php } ?>

              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Chef Section -->

  <!-- Start Latest News -->
  <section id="mu-latest-news">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-latest-news-area">
            <div class="mu-title">
              <span class="mu-subtitle">Últimas Noticias</span>
              <h2>DO NOSSO BLOG</h2>
              <i class="fa fa-spoon"></i>              
              <span class="mu-title-bar"></span>
            </div>
            <div class="mu-latest-news-content">
              <div class="row">

                <?php
                
                $query = $pdo->query("SELECT * FROM blog order by id desc limit 2");
                $res = $query->fetchAll(PDO::FETCH_ASSOC);
                for($i=0; $i < @count($res); $i++) {
                  foreach ($res[$i] as $key => $value) { }
                  $id_reg = $res[$i]['id'];
                  $usuario = $res[$i]['author'];
                  $data = $res[$i]['data'];
                  $data = implode('/', array_reverse(explode('-', $data)));

                $query2 = $pdo->query("SELECT * FROM usuarios where id = '$usuario'");
                $res2 = $query2->fetchAll(PDO::FETCH_ASSOC);
                $nome_usuario = $res2[0]['nome'];
                
              
                ?>

                <!-- start single blog -->
                <div class="col-md-6">
                  <article class="mu-news-single">
                    <h3><a href="blog-post.php?titulo=<?php echo $res[$i]['url_titulo'] ?>"><?php echo $res[$i]['titulo'] ?></a></h3>
                    <figure class="mu-news-img">
                      <a href="blog-post.php?titulo=<?php echo $res[$i]['url_titulo'] ?>"><img src="sistema/img/blog/<?php echo $res[$i]['imagem'] ?>" alt="img"></a>                      
                    </figure>
                    <div class="mu-news-single-content">                      
                      <ul class="mu-meta-nav">
                        <li>Author: <?php echo $nome_usuario ?></li>
                        <li>Data: <?php echo $data?></li>
                      </ul>
                      <p style="text-align: justify; height: 80px; overflow: auto;"><?php echo $res[$i]['descricao_1'] ?></p>
                      <div class="mu-news-single-bottom">
                        <a href="blog-post.php?titulo=<?php echo $res[$i]['url_titulo'] ?>" class="mu-readmore-btn">Veja Mais (+)</a>
                      </div>
                    </div>                   
                  </article>
                </div>

                <?php } ?>

              </div>
              <!-- Start brows more btn -->
              <a href="blog.php" class="mu-browsmore-btn">VER TODOS</a>
              <!-- End brows more btn -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Latest News -->

  <!-- Start Contact section -->
  <section id="mu-contact">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-contact-area">
            <div class="mu-title">
              <span class="mu-subtitle">Informções</span>
              <h2>FALE CONOSCO</h2>
              <i class="fa fa-spoon"></i>              
              <span class="mu-title-bar"></span>
            </div>
            <div class="mu-contact-content">
              <div class="row">
                <div class="col-md-6">
                  <div class="mu-contact-left">
                    <form class="mu-contact-form" action="enviar.php" method="post">
                      <div class="form-group">
                        <label for="name">Seu Nome:</label>
                        <input type="text" class="form-control" name="nome_contato" id="name" placeholder="Name">
                      </div>
                      <div class="form-group">
                        <label for="email">Seu Email:</label>
                        <input type="email" class="form-control" name="email_contato" id="email" placeholder="Email">
                      </div>                      
                      <div class="form-group">
                        <label for="message">Mensagem:</label>                        
                        <textarea class="form-control" id="message" cols="30" rows="10" name="mensagem_contato" placeholder="Digite sua Mensagem"></textarea>
                      </div>                      
                      <button type="submit" class="mu-send-btn">Enviar Mensagem</button>
                    </form>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="mu-contact-right">
                    <div class="mu-contact-widget">
                      <h3>Nosso Endereço</h3>
                      <p>Venha nos fazer uma visita e conhecer um novo conceito em gastronomia.</p>
                      <address>
                        <p><i class="fa fa-phone"></i> (62) 98544-1422</p>
                        <a href="https://api.whatsapp.com/send?phone=5562985441422&text=Ol%C3%A1%2C%20Quero%20fazer%20um%20pedido.%20(%20Site%20Papito's)" title="Ir Para o WhatsApp" class="text-dark">
                        <p><i class="fa fa-whatsapp"></i> <?php echo $telefone_whatsapp ?></p></a>
                        <p><i class="fa fa-envelope-o"></i>contato@papitosgastrohouse.com.br</p>
                        <p><i class="fa fa-map-marker"></i> <?php echo $endereco_fisico ?></p>
                      </address>
                    </div>
                    <div class="mu-contact-widget">
                      <h3>Horário de Funcionamento</h3>                      
                      <address>
                        <p><span>Segunda - Sexta</span> 17:00 as 00:00 </p>
                        <p><span>Sabado</span> 9:00 as 00:00</p>
                        <p><span>Domingo</span> Fechados</p>
                      </address>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Contact section -->

  <!-- Start Map section -->
  <section id="mu-map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15288.436375280022!2d-49.4847173!3d-16.6714234!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xed618aaf5fd7c987!2sPAPITO&#39;S%20GASTROHOUSE!5e0!3m2!1spt-BR!2sbr!4v1620787637059!5m2!1spt-BR!2sbr" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
  </section>
  <!-- End Map section -->

 <?php require_once("rodape.php"); ?>
  
  <!-- jQuery library -->
  <script src="assets/js/jquery.min.js"></script>  
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="assets/js/bootstrap.js"></script>   
  <!-- Slick slider -->
  <script type="text/javascript" src="assets/js/slick.js"></script>
  <!-- Counter -->
  <script type="text/javascript" src="assets/js/waypoints.js"></script>
  <script type="text/javascript" src="assets/js/jquery.counterup.js"></script>
  <!-- Date Picker -->
  <script type="text/javascript" src="assets/js/bootstrap-datepicker.js"></script> 
  <!-- Mixit slider -->
  <script type="text/javascript" src="assets/js/jquery.mixitup.js"></script>
  <!-- Add fancyBox -->        
  <script type="text/javascript" src="assets/js/jquery.fancybox.pack.js"></script>
  <!-- Custom js -->
  <script src="assets/js/custom.js"></script> 
  <!-- Mascaras JS --> 
  <script type="text/javascript" src="assets/js/mascaras.js"></script>
  <!-- Ajax para funcionar mascara --> 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>



  </body>
</html>

<script type="text/javascript">
          $(document).ready(function() {
          mostrarProdutos(0);
        } );
      </script>


<script type="text/javascript">
  function mostrarProdutos(idcat){
    $.ajax({
            url: "listar-produtos.php",
            method: 'POST',
            data: {idcat},
            dataType: "html",

            success:function(result){
              $("#listar-produtos").html(result);
            }
          });
  }
</script>

