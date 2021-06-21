<?php require_once("config.php") ?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
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
  <!-- Pre Loader -->
  <div id="aa-preloader-area">
    <div class="mu-preloader">
      <img src="assets/img/preloader.gif" width="200px" alt=" loader img">
    </div>
  </div>
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
          <a class="navbar-brand" href="index.html"><img src="assets/img/logo.png" alt="Logo img"></a> 
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
        <!-- Top slider single slide -->
        <div class="mu-top-slider-single">
          <img src="assets/img/slider/foto.png" alt="img">
          <!-- Top slider content -->
          <div class="mu-top-slider-content">
            <span class="mu-slider-small-title">Bem Vindo</span>
            <h2 class="mu-slider-title"><?php echo "$nome_site";  ?></h2>
            <p>Venha conhecer o mais novo e agradável bar de Trindade.</p>           
            <a href="categorias.php" class="mu-readmore-btn">SAIBA MAIS (+)</a>
          </div>
          <!-- / Top slider content -->
        </div>
        <!-- / Top slider single slide -->    
         <!-- Top slider single slide -->
        <div class="mu-top-slider-single">
          <img src="assets/img/slider/jantinha.png" alt="img">
          <!-- Top slider content -->
          <div class="mu-top-slider-content">
            <span class="mu-slider-small-title">De Verdade</span>
            <h2 class="mu-slider-title">Jantinhas</h2>
            <p>As melhores jantinhas você só vai encontrar aqui.</p>           
            <a href="categorias.php" class="mu-readmore-btn">SAIBA MAIS (+)</a>
          </div>
          <!-- / Top slider content -->
        </div>
        <!-- / Top slider single slide --> 
         <!-- Top slider single slide -->
        <div class="mu-top-slider-single">
          <img src="assets/img/slider/lacarte.png" alt="img">
          <!-- Top slider content -->
          <div class="mu-top-slider-content">
            <span class="mu-slider-small-title">Delicias</span>
            <h2 class="mu-slider-title">Pratos a Lá Carte</h2>
            <p>Pratos a lá carte, com os melhores chefes da cidade.</p>           
            <a href="categorias.php" class="mu-readmore-btn">SAIBA MAIS (+)</a>
          </div>
          <!-- / Top slider content -->
        </div>
        <!-- / Top slider single slide -->    
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
                <div class="mu-about-us-right">                
                 <ul class="mu-abtus-slider">                 
                   <li><img src="assets/img/about-us/sobre.png" alt="img"></li>
                   <li><img src="assets/img/about-us/sobre.png" alt="img"></li>
                   <li><img src="assets/img/about-us/sobre.png" alt="img"></li>
                   <li><img src="assets/img/about-us/sobre.png" alt="img"></li>
                   <li><img src="assets/img/about-us/sobre.png" alt="img"></li>
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
                  <h3><span class="counter">55</span><sup>+</sup></h3>
                  <p>Tipos de Pratos</p>
                </div>
              </li>
              <li class="col-md-3 col-sm-3 col-xs-12">
                <div class="mu-single-counter">
                  <span>Delicias</span>
                  <h3><span class="counter">130</span><sup>+</sup></h3>
                  <p>Itens de Almoço</p>
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
                <li class="active"><a href="#breakfast" data-toggle="tab">A Lá Carte</a></li>
                <li><a href="#meals" data-toggle="tab">Jantinha</a></li>
                <li><a href="#snacks" data-toggle="tab">Espetinhos</a></li>
                <li><a href="#desserts" data-toggle="tab">Guarnições</a></li>
                <li><a href="#drinks" data-toggle="tab">Peixes</a></li>
                <li><a href="#drinks" data-toggle="tab">Porções</a></li>
                <li><a href="#drinks" data-toggle="tab">Drinks</a></li>
              </ul>

              <!-- Tab panes -->
              <div class="tab-content">
                <div class="tab-pane fade in active" id="breakfast">
                  <div class="mu-tab-content-area">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="mu-tab-content-left">
                          <ul class="mu-menu-item-nav">
                            <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="assets/img/menu/item-1.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">English Breakfast</a></h4>
                                  <span class="mu-menu-price">R$ 15.85</span>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="assets/img/menu/item-2.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">Chines Breakfast</a></h4>
                                  <span class="mu-menu-price">R$ 11.95</span>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="assets/img/menu/item-1.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">Indian Breakfast</a></h4>
                                  <span class="mu-menu-price">R$ 15.85</span>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>
                                </div>
                              </div>
                            </li>
                          </ul>   
                        </div>
                      </div>
                     <div class="col-md-6">
                       <div class="mu-tab-content-right">
                          <ul class="mu-menu-item-nav">
                            <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="assets/img/menu/item-1.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">English Breakfast</a></h4>
                                  <span class="mu-menu-price">R$ 15.85</span>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="assets/img/menu/item-2.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">Chines Breakfast</a></h4>
                                  <span class="mu-menu-price">R$ 11.95</span>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="assets/img/menu/item-1.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">Indian Breakfast</a></h4>
                                  <span class="mu-menu-price">R$ 15.85</span>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>
                                </div>
                              </div>
                            </li>
                          </ul>   
                       </div>
                     </div>
                   </div>
                 </div>
                </div>
                <div class="tab-pane fade " id="meals">
                  <div class="mu-tab-content-area">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="mu-tab-content-left">
                          <ul class="mu-menu-item-nav">
                            <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="assets/img/menu/item-3.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">English Breakfast</a></h4>
                                  <span class="mu-menu-price">R$ 15.85</span>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="assets/img/menu/item-4.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">Chines Breakfast</a></h4>
                                  <span class="mu-menu-price">R$ 11.95</span>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="assets/img/menu/item-3.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">Indian Breakfast</a></h4>
                                  <span class="mu-menu-price">R$ 15.85</span>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>
                                </div>
                              </div>
                            </li>
                          </ul>   
                        </div>
                      </div>
                     <div class="col-md-6">
                       <div class="mu-tab-content-right">
                          <ul class="mu-menu-item-nav">
                            <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="assets/img/menu/item-4.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">English Breakfast</a></h4>
                                  <span class="mu-menu-price">R$ 15.85</span>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="assets/img/menu/item-3.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">Chines Breakfast</a></h4>
                                  <span class="mu-menu-price">R$ 11.95</span>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="assets/img/menu/item-4.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">Indian Breakfast</a></h4>
                                  <span class="mu-menu-price">R$ 15.85</span>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>
                                </div>
                              </div>
                            </li>
                          </ul>   
                       </div>
                     </div>
                   </div>
                 </div>
                </div>
                <div class="tab-pane fade " id="snacks">
                  <div class="mu-tab-content-area">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="mu-tab-content-left">
                          <ul class="mu-menu-item-nav">
                            <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="assets/img/menu/item-5.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">English Breakfast</a></h4>
                                  <span class="mu-menu-price">R$ 15.85</span>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="assets/img/menu/item-6.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">Chines Breakfast</a></h4>
                                  <span class="mu-menu-price">R$ 11.95</span>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="assets/img/menu/item-5.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">Indian Breakfast</a></h4>
                                  <span class="mu-menu-price">R$ 15.85</span>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>
                                </div>
                              </div>
                            </li>
                          </ul>   
                        </div>
                      </div>
                     <div class="col-md-6">
                       <div class="mu-tab-content-right">
                          <ul class="mu-menu-item-nav">
                            <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="assets/img/menu/item-5.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">English Breakfast</a></h4>
                                  <span class="mu-menu-price">R$ 15.85</span>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="assets/img/menu/item-6.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">Chines Breakfast</a></h4>
                                  <span class="mu-menu-price">R$ 11.95</span>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="assets/img/menu/item-5.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">Indian Breakfast</a></h4>
                                  <span class="mu-menu-price">R$ 15.85</span>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>
                                </div>
                              </div>
                            </li>
                          </ul>   
                       </div>
                     </div>
                   </div>
                 </div>
                </div>
                <div class="tab-pane fade " id="desserts">
                  <div class="mu-tab-content-area">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="mu-tab-content-left">
                          <ul class="mu-menu-item-nav">
                            <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="assets/img/menu/item-7.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">English Breakfast</a></h4>
                                  <span class="mu-menu-price">R$ 15.85</span>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="assets/img/menu/item-8.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">Chines Breakfast</a></h4>
                                  <span class="mu-menu-price">R$ 11.95</span>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="assets/img/menu/item-7.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">Indian Breakfast</a></h4>
                                  <span class="mu-menu-price">R$ 15.85</span>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>
                                </div>
                              </div>
                            </li>
                          </ul>   
                        </div>
                      </div>
                     <div class="col-md-6">
                       <div class="mu-tab-content-right">
                          <ul class="mu-menu-item-nav">
                            <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="assets/img/menu/item-8.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">English Breakfast</a></h4>
                                  <span class="mu-menu-price">R$ 15.85</span>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="assets/img/menu/item-7.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">Chines Breakfast</a></h4>
                                  <span class="mu-menu-price">R$ 11.95</span>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="assets/img/menu/item-8.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">Indian Breakfast</a></h4>
                                  <span class="mu-menu-price">R$ 15.85</span>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>
                                </div>
                              </div>
                            </li>
                          </ul>   
                       </div>
                     </div>
                   </div>
                 </div>
                </div>
                <div class="tab-pane fade " id="drinks">
                  <div class="mu-tab-content-area">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="mu-tab-content-left">
                          <ul class="mu-menu-item-nav">
                            <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="assets/img/menu/item-9.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">English Breakfast</a></h4>
                                  <span class="mu-menu-price">R$ 15.85</span>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="assets/img/menu/item-10.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">Chines Breakfast</a></h4>
                                  <span class="mu-menu-price">R$ 11.95</span>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="assets/img/menu/item-9.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">Indian Breakfast</a></h4>
                                  <span class="mu-menu-price">R$ 15.85</span>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>
                                </div>
                              </div>
                            </li>
                          </ul>   
                        </div>
                      </div>
                     <div class="col-md-6">
                       <div class="mu-tab-content-right">
                          <ul class="mu-menu-item-nav">
                            <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="assets/img/menu/item-9.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">English Breakfast</a></h4>
                                  <span class="mu-menu-price">R$ 15.85</span>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="assets/img/menu/item-10.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">Chines Breakfast</a></h4>
                                  <span class="mu-menu-price">R$ 11.95</span>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="assets/img/menu/item-9.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">Indian Breakfast</a></h4>
                                  <span class="mu-menu-price">R$ 15.85</span>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>
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
                  <li class="filter" data-filter=".food">PRATOS</li>
                  <li class="filter" data-filter=".drink">DRINKS</li>
                  <li class="filter" data-filter=".restaurant">AMBIENTE</li>
                  <li class="filter" data-filter=".dinner">VINHOS</li>
                  <li class="filter" data-filter=".dessert">PETISCOS</li>
                </ul>
              </div>
              <!-- Start gallery image -->
              <div class="mu-gallery-body" id="mixit-container">
                <!-- start single gallery image -->
                <div class="mu-single-gallery col-md-4 mix food">
                  <div class="mu-single-gallery-item">
                    <figure class="mu-single-gallery-img">
                      <a href="#"><img alt="img" src="assets/img/gallery/small/1.jpg"></a>
                    </figure>
                    <div class="mu-single-gallery-info">
                      <a href="assets/img/gallery/big/1.jpg" data-fancybox-group="gallery" class="fancybox">
                        <img src="assets/img/plus.png" alt="plus icon img">
                      </a>
                    </div>                  
                  </div>
                </div>
                <!-- End single gallery image -->
                <!-- start single gallery image -->
                <div class="mu-single-gallery col-md-4 mix drink">
                  <div class="mu-single-gallery-item">
                    <figure class="mu-single-gallery-img">
                      <a href="#"><img alt="img" src="assets/img/gallery/small/2.jpg"></a>
                    </figure>
                    <div class="mu-single-gallery-info">
                     <a href="assets/img/gallery/big/2.jpg" data-fancybox-group="gallery" class="fancybox">
                        <img src="assets/img/plus.png" alt="plus icon img">
                      </a>
                    </div>                  
                  </div>
                </div>               
                <!-- End single gallery image -->
                <!-- start single gallery image -->
                <div class="mu-single-gallery col-md-4 mix restaurant">                  
                  <div class="mu-single-gallery-item">
                   <figure class="mu-single-gallery-img">
                      <a href="#"><img alt="img" src="assets/img/gallery/small/3.jpg"></a>
                    </figure>
                    <div class="mu-single-gallery-info">
                      <a href="assets/img/gallery/big/3.jpg" data-fancybox-group="gallery" class="fancybox">
                        <img src="assets/img/plus.png" alt="plus icon img">
                      </a>
                    </div>
                  </div>
                </div>               
                <!-- End single gallery image -->
                <!-- start single gallery image -->
                <div class="mu-single-gallery col-md-4 mix dinner">                  
                  <div class="mu-single-gallery-item">
                    <figure class="mu-single-gallery-img">
                      <a href="#"><img alt="img" src="assets/img/gallery/small/4.jpg"></a>
                    </figure>
                    <div class="mu-single-gallery-info">
                      <a href="assets/img/gallery/big/4.jpg" data-fancybox-group="gallery" class="fancybox">
                        <img src="assets/img/plus.png" alt="plus icon img">
                      </a>
                    </div>                  
                  </div>
                </div>
                <!-- End single gallery image -->
                <!-- start single gallery image -->
                <div class="mu-single-gallery col-md-4 mix dinner">                  
                  <div class="mu-single-gallery-item">
                    <figure class="mu-single-gallery-img">
                      <a href="#"><img alt="img" src="assets/img/gallery/small/5.jpg"></a>
                    </figure>
                    <div class="mu-single-gallery-info">
                     <a href="assets/img/gallery/big/5.jpg" data-fancybox-group="gallery" class="fancybox">
                        <img src="assets/img/plus.png" alt="plus icon img">
                      </a>
                    </div>   
                  </div>
                </div>               
                <!-- End single gallery image -->               
                <!-- start single gallery image -->
                <div class="mu-single-gallery col-md-4 mix food">                  
                  <div class="mu-single-gallery-item">
                    <figure class="mu-single-gallery-img">
                      <a href="#"><img alt="img" src="assets/img/gallery/small/6.jpg"></a>
                    </figure>
                    <div class="mu-single-gallery-info">
                      <a href="assets/img/gallery/big/6.jpg" data-fancybox-group="gallery" class="fancybox">
                        <img src="assets/img/plus.png" alt="plus icon img">
                      </a>
                    </div>                  
                  </div>
                </div>
                <!-- End single gallery image -->
                <!-- start single gallery image -->
                <div class="mu-single-gallery col-md-4 mix drink">                  
                  <div class="mu-single-gallery-item">
                    <figure class="mu-single-gallery-img">
                      <a href="#"><img alt="img" src="assets/img/gallery/small/7.jpg"></a>
                    </figure>
                    <div class="mu-single-gallery-info">
                     <a href="assets/img/gallery/big/7.jpg" data-fancybox-group="gallery" class="fancybox">
                        <img src="assets/img/plus.png" alt="plus icon img">
                      </a>
                    </div>                  
                  </div>
                </div>               
                <!-- End single gallery image -->
                <!-- start single gallery image -->
                <div class="mu-single-gallery col-md-4 mix restaurant">                  
                  <div class="mu-single-gallery-item">
                   <figure class="mu-single-gallery-img">
                      <a href="#"><img alt="img" src="assets/img/gallery/small/8.jpg"></a>
                    </figure>
                    <div class="mu-single-gallery-info">
                      <a href="assets/img/gallery/big/8.jpg" data-fancybox-group="gallery" class="fancybox">
                        <img src="assets/img/plus.png" alt="plus icon img">
                      </a>
                    </div>
                  </div>
                </div>               
                <!-- End single gallery image -->
                <!-- start single gallery image -->
                <div class="mu-single-gallery col-md-4 mix dessert">                  
                  <div class="mu-single-gallery-item">
                    <figure class="mu-single-gallery-img">
                      <a href="#"><img alt="img" src="assets/img/gallery/small/9.jpg"></a>
                    </figure>
                    <div class="mu-single-gallery-info">
                      <a href="assets/img/gallery/big/9.jpg" data-fancybox-group="gallery" class="fancybox">
                        <img src="assets/img/plus.png" alt="plus icon img">
                      </a>
                    </div>                  
                  </div>
                </div>
                <!-- End single gallery image -->                         
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
                <li>
                  <div class="mu-single-chef">
                    <figure class="mu-single-chef-img">
                      <img src="assets/img/chef/chef-6.jpg" alt="chef img">
                    </figure>
                    <div class="mu-single-chef-info">
                      <h4>Simon Jonson</h4>
                      <span>Head Chef</span>
                    </div>
                    <div class="mu-single-chef-social">
                      <a href="#"><i class="fa fa-facebook" title="Facebook"></i></a>
                      <a href="#"><i class="fa fa-instagram" title="Instagram"></i></a>
                      <a href="#"><i class="fa fa-youtube" title="YouTube"></i></a>
                      <a href="#"><i class="fa fa-linkedin" title="Linkedin"></i></a>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="mu-single-chef">
                    <figure class="mu-single-chef-img">
                      <img src="assets/img/chef/chef-2.jpg" alt="chef img">
                    </figure>
                    <div class="mu-single-chef-info">
                      <h4>Kelly Wenzel</h4>
                      <span>Pizza Chef</span>
                    </div>
                    <div class="mu-single-chef-social">
                      <a href="#"><i class="fa fa-facebook"></i></a>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                      <a href="#"><i class="fa fa-youtube"></i></a>
                      <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="mu-single-chef">
                    <figure class="mu-single-chef-img">
                      <img src="assets/img/chef/chef-3.jpg" alt="chef img">
                    </figure>
                    <div class="mu-single-chef-info">
                      <h4>Greg Hong</h4>
                      <span>Grill Chef</span>
                    </div>
                    <div class="mu-single-chef-social">
                      <a href="#"><i class="fa fa-facebook"></i></a>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                      <a href="#"><i class="fa fa-google-plus"></i></a>
                      <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="mu-single-chef">
                    <figure class="mu-single-chef-img">
                      <img src="assets/img/chef/chef-5.jpg" alt="chef img">
                    </figure>
                    <div class="mu-single-chef-info">
                      <h4>Marty Fukuda</h4>
                      <span>Burger Chef</span>
                    </div>
                    <div class="mu-single-chef-social">
                      <a href="#"><i class="fa fa-facebook"></i></a>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                      <a href="#"><i class="fa fa-google-plus"></i></a>
                      <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                  </div>
                </li>  
                <li>
                  <div class="mu-single-chef">
                    <figure class="mu-single-chef-img">
                      <img src="assets/img/chef/chef-6.jpg" alt="chef img">
                    </figure>
                    <div class="mu-single-chef-info">
                      <h4>Simon Jonson</h4>
                      <span>Head Chef</span>
                    </div>
                    <div class="mu-single-chef-social">
                      <a href="#"><i class="fa fa-facebook"></i></a>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                      <a href="#"><i class="fa fa-google-plus"></i></a>
                      <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="mu-single-chef">
                    <figure class="mu-single-chef-img">
                      <img src="assets/img/chef/chef-2.jpg" alt="chef img">
                    </figure>
                    <div class="mu-single-chef-info">
                      <h4>Kelly Wenzel</h4>
                      <span>Pizza Chef</span>
                    </div>
                    <div class="mu-single-chef-social">
                      <a href="#"><i class="fa fa-facebook"></i></a>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                      <a href="#"><i class="fa fa-google-plus"></i></a>
                      <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="mu-single-chef">
                    <figure class="mu-single-chef-img">
                      <img src="assets/img/chef/chef-3.jpg" alt="chef img">
                    </figure>
                    <div class="mu-single-chef-info">
                      <h4>Greg Hong</h4>
                      <span>Grill Chef</span>
                    </div>
                    <div class="mu-single-chef-social">
                      <a href="#"><i class="fa fa-facebook"></i></a>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                      <a href="#"><i class="fa fa-google-plus"></i></a>
                      <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="mu-single-chef">
                    <figure class="mu-single-chef-img">
                      <img src="assets/img/chef/chef-5.jpg" alt="chef img">
                    </figure>
                    <div class="mu-single-chef-info">
                      <h4>Marty Fukuda</h4>
                      <span>Burger Chef</span>
                    </div>
                    <div class="mu-single-chef-social">
                      <a href="#"><i class="fa fa-facebook"></i></a>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                      <a href="#"><i class="fa fa-google-plus"></i></a>
                      <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                  </div>
                </li>                      
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
                <!-- start single blog -->
                <div class="col-md-6">
                  <article class="mu-news-single">
                    <h3><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque, distinctio!</a></h3>
                    <figure class="mu-news-img">
                      <a href="#"><img src="assets/img/news/1.jpg" alt="img"></a>                      
                    </figure>
                    <div class="mu-news-single-content">                      
                      <ul class="mu-meta-nav">
                        <li>Author:</li>
                        <li>Data: </li>
                      </ul>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio est quaerat magnam exercitationem voluptas, voluptatem sed quam ab laborum voluptatum tempore dolores itaque, molestias vitae.</p>
                      <div class="mu-news-single-bottom">
                        <a href="blog-single.html" class="mu-readmore-btn">Veja Mais (+)</a>
                      </div>
                    </div>                   
                  </article>
                </div>
                <!-- start single blog -->
                <div class="col-md-6">
                  <article class="mu-news-single">
                    <h3><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque, distinctio!</a></h3>
                    <figure class="mu-news-img">
                      <a href="#"><img src="assets/img/news/2.jpg" alt="img"></a>                      
                    </figure>
                    <div class="mu-news-single-content">                      
                      <ul class="mu-meta-nav">
                        <li>By Admin</li>
                        <li>Date: May 10 2016</li>
                      </ul>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio est quaerat magnam exercitationem voluptas, voluptatem sed quam ab laborum voluptatum tempore dolores itaque, molestias vitae.</p>
                      <div class="mu-news-single-bottom">
                        <a href="blog-single.html" class="mu-readmore-btn">Read More</a>
                      </div>
                    </div>                   
                  </article>
                </div>
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