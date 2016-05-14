<!DOCTYPE html>
<html  lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Gold - Gerenciamento de Clientes</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <!-- Google Font -->
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Allerta+Stencil:400,700,900:normal" rel="stylesheet" type="text/css">
    <!-- Bootstrap Core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" type="text/css" rel="stylesheet" />
    <!-- Plugins CSS -->
    <link href="assets/css/normalize.css" type="text/css" rel="stylesheet" />
    <link href="assets/css/iline-icons.css" type="text/css" rel="stylesheet" />
    <link href="assets/css/animate.css" type="text/css" rel="stylesheet" />
    <link href="assets/css/owl.carousel.css" type="text/css" rel="stylesheet" />
    <link href="assets/css/owl.theme.css" type="text/css" rel="stylesheet" />
    <link href="assets/css/owl.transitions.css" type="text/css" rel="stylesheet" />

    <!-- Main CSS -->
    <link href="assets/css/style.css" type="text/css" rel="stylesheet" />
    <link href="assets/css/responsive.css" type="text/css" rel="stylesheet" />
    <!-- Shortcut icon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon"/>
  </head>
  <body>
    <!-- NAVIGATION START -->
    <header class="fallone-navbar" data-id="default-navbar">
      <nav class="navbar navbar-default">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            
            <a class="navbar-brand" href="/">
              <img src="assets/images/logo.png" alt="Fallone logo" class="img-responsive" style="padding-top:15px;padding-right:15px;"/>
            </a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li><a  href="index.html">Início</a></li>
              <li><a  href="sobre-nos.html">Sobre Nós</a></li>
              <li><a  href="e-book.html">E-Book</a></li>
              <li><a  href="#modalContato" data-toggle="modal">Cadastre-se</a></li>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
      </nav>
    </header>
    <!-- NAVIGATION END -->
    <!-- MAIN CONTAINER -->
    <div class="main-content">
      <!-- HEADER TREE -->
      <section class="header-tree" data-speed="8" data-type="background" style="min-height: 100px;">
        
        <!-- parallax background -->
        <div class="cover-2" data-type="sprite" data-offsetY="-700" data-Xposition="50%" data-speed="-2"></div>
        <!-- .container -->
        <div class="container">
          <!-- .row -->
          <div class="row">
            <!-- .col-md-12 -->
            <div class="col-md-12">
              <ul class="breadcrumb clearfix mar-top-2x">
                <li><a class="link text-success" href="/">Gold</a></li>
                <li><a class="link" href="#">Blog</a></li>
              </ul>
            </div>
            <!-- /.col-md-12 -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container -->
      </section>
      <!-- HEADER TREE END -->
      <!-- BLOG POST BODY SECTION -->
      <section class="pattern-3 no-padding-right">
        <h2 class="hidden">blog posts</h2>
        <!-- .container -->
        @show
        <div class="container">
          <!-- .row -->
          <div class="row">
            <!-- .col-md-12 -->
            <div class="col-md-12">
              <!-- All blog posts -->
              <div class="mar-top-lg row">
                <!-- Left part -->
                <div class="col-md-8 blog-main">
                  <section  class="blog-post-list no-padding">
                    <h2 class="hidden">Last Posts</h2>
                    <!--Content from blade -->

                    @yield('content')

                    <!-- /Content from blade -->

                  </section>
                <!-- .navigation -->
                <!-- <nav class="navigation paging-navigation">
                  <ul class="page-numbers pagination">
                    <li><span class="page-numbers pagination current">1</span></li>
                    <li><a class="page-numbers pagination" href="#">2</a></li>
                    <li><a class="page-numbers pagination" href="#">3</a></li>
                    <li><a class="next page-numbers pagination" href="#">Next →</a></li>
                  </ul>
                </nav> --><!-- /.navigation -->
                </div>
                <!-- /Left part -->
                <!-- Right part -->
                <div class="col-md-4 blog-sidebar">
                  <div class="post-detail">
                    <div class="post-detail-body sep-xs">
                      <h3 class="text-primary text-uppercase text-center">Newsletter</h3>
                      <span class="line-sep-gray"></span>
                    <p>
                      Cadastre-se e receba dicas essencias para gerenciar os seus clientes.
                    </p>
                    <!-- Newsletter form -->
                    <form action="enviar.php" method="post" class="subscription" >
                      <div class="form-group">
                        <div class="input-group">
                          <input type="email" class="form-control input-lg" placeholder="Digite seu e-mail aqui ;)" id="mailchimp-email" name="email">
                          <span class="input-group-btn">
                            <button type="submit" class="btn btn-lg" onclick="enviado()">
                              <i class="iline2-paper41"></i> Assinar
                            </button>
                          </span>
                        </div>
                      </div>
                      <label for="mailchimp-email" class="text-danger text-center mailchimp-label"></label>
                    </form>
                      
                    </div>
                  </div>
                <!-- /Right part -->
              </div>

              <div class="col-md-4 blog-sidebar">
                <div class="post-detail">
                    <div class="post-detail-body sep-xs">
                      <div class="fb-page" data-href="https://www.facebook.com/gerenciamentodeclientes" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/gerenciamentodeclientes"><a href="https://www.facebook.com/gerenciamentodeclientes">Gold - Gerenciamento de Clientes</a></blockquote></div>
                      </div>
                    </div>
                </div>
              </div>

            </div>
            <!-- /.col-md-12 -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container -->
      </section>
      <!-- BLOG POST BODY SECTION END -->
      <!-- BEGIN FOOTER -->
      <footer class="page-footer">
        <!-- FOOTER CONTENT -->
        <div class="container">
          <!-- .row -->
          <div class="row">
            <!-- .col-md-12 -->
            <div class="col-md-12">
              <!-- .row -->
              <div class="row">
                <aside class="col-md-4 col-sm-6 col-xs-12 text-left">
                  <h3  class="uppercase">Newsletter</h3>
                  <span class="line-sep-gray"></span>
                  <p>
                    Cadastre-se e receba dicas essencias para gerenciar os seus clientes.
                  </p>
                  <!-- Newsletter form -->
                  <form action="enviar.php" method="post" class="subscription" >
                    <div class="form-group">
                      <div class="input-group">
                        <input type="email" class="form-control input-lg" placeholder="Digite seu e-mail aqui ;)" id="mailchimp-email" name="email">
                        <span class="input-group-btn">
                          <button type="submit" class="btn btn-lg" onclick="enviado()">
                            <i class="iline2-paper41"></i> Assinar
                          </button>
                        </span>
                      </div>
                    </div>
                    <label for="mailchimp-email" class="text-danger text-center mailchimp-label"></label>
                  </form>
                  <!-- /Newsletter Registration Form -->
                </aside>
                <aside class="col-md-4 col-sm-6 col-xs-12 text-left">
                  <!-- Copyright Informations -->
                  <h3  class="uppercase">Copyright</h3>
                  <span class="line-sep-gray"></span>
                  <p>
                    2016 GOLD - Todos os direitos reservados
                    
                  </p>
                </aside>
                <aside class="col-md-4 col-sm-6 col-xs-12">
                  <h3  class="uppercase">Dúvidas e Sugestões</h3>
                  <span class="line-sep-gray"></span>
                  <!-- address -->
                  <address>
                    <strong>GOLD - Gerenciamento de Clientes</strong><br/>
                    <a href="mailto:#">gerenciamentodeclientes@gmail.com</a><br/>
                    Segunda a Domingo <br>
                    08:00 - 12:30 / 13:30 - 20:00
                  </address>
                  <!-- /address -->
                </aside>
              </div>
              <!-- /.row -->
              <div class="row">
                <div class="col-md-12 text-center mar-top-sm">
                  <!-- .social -->
                  <ul class="social">
                    <li><a href="http://www.facebook.com/gerenciamentodeclientes" class="icon-xl iline3-facebook27"></a></li>
                    <!-- <li><a href="#" class="icon-xl iline3-instagram4"></a></li>
                    <li><a href="#" class="icon-xl iline3-twitter19"></a></li> -->
                  </ul>
                  <!-- /.social -->
                </div>
              </div>
              <!-- /.row -->
            </div>
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container -->
        <!-- FOOTER CONTENT -->
      </footer>
      <!-- FOOTER END -->
    </div>
    <!-- MAIN CONTAINER END -->
<!-- Back to top -->
     <div id="back-to-top" class="back-to-top">
       <a href="#" class="icon iline2-thin16 no-margin"></a>
     </div>
     <!-- Back to top end -->

      <div id="modalContato" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
              <h3 id="myModalLabel" class="text-center text-bold">Atenção</h3>
            </div>
            <div class="modal-body">
              <p class="text-center">
                Domingo <b>15/05/2016</b> serão sorteados <b>2 planos de 6 meses grátis de Gerenciamento CRM</b> em nuvem!!!
                </br>
                <b>CADASTRE-SE AGORA</b> e não perca a oportunidade de aumentar suas vendas! 
              </p>
              <form class="form-horizontal col-sm-12" action="enviar.php" method="post">
                </br>
                <div class="form-group"><label>Nome</label><input name="nome" class="form-control required" placeholder="Seu nome" data-placement="top" type="text"></div>
                
                <div class="form-group"><label>E-mail</label><input name="email" class="form-control email" placeholder="Seu e-mail" data-placement="top" data-trigger="manual" type="text"></div>

                <div class="form-group"><label>Telefone</label><input name="telefone" class="form-control phone" placeholder="(99) 99999-9999" data-placement="top" data-trigger="manual" type="text"></div>

                <div class="form-group"><label>Cidade</label><input name="cidade" class="form-control andress" placeholder="Sua cidade" data-placement="top" data-trigger="manual" type="text"></div>

                <div class="form-group"><button type="submit" class="btn btn-success pull-right" onclick="criarCookie()">Quero participar!</button></div>
              </form>
            </div>
            <div class="modal-footer">
              
            </div>
          </div>
        </div>
      </div>


    <!-- Include js plugin -->
    <script src="assets/js/libs/jquery-1.11.2.min.js"></script>
    <script src="assets/js/libs/jqBootstrapValidation.js"></script>
    <script src="assets/js/libs/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/libs/imagesloaded.js"></script>
    <script src="assets/js/libs/jquery.magnific-popup.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/libs/isotope.pkgd.min.js"></script>
    <script src="assets/js/libs/ParallaxScrolling.js"></script>
    <script src="assets/js/libs/jquery.mailchimp.js"></script>
    <script src="assets/js/libs/wow.min.js"></script>
    <script src="assets/js/libs/owl.carousel.js"></script>
    <script src="assets/js/libs/jquery.fittext.js"></script>
    <script src="assets/js/libs/jquery.lettering.js"></script>
    <script src="assets/js/libs/jquery.textillate.js"></script>

    <!-- Main JS -->
    <script src="assets/js/main.js"></script>
    <script>
      function enviado() {
          alert("Muito obrigado! \nSeu e-mail foi cadastrado com sucesso.");
      }
    </script>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-77467318-1', 'auto');
      ga('send', 'pageview');

    </script>
    <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.6";
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>
    
    <script type="text/javascript">
      var criarCookie = function(){
        var cookies = document.cookie;

        // Verifica se o cookie existe
        if (cookies.indexOf("usuarioVisualizouModal") == -1)
        {
        // Entra aqui caso o cookie não exista no  navegador do usuário

        // Crio um objeto Date do Javascript pegando a data de hoje e incrementando + 7 dias nessa data
        var diasparaexpirar = 7;
        var expiracao = new Date();
        expiracao.setTime(expiracao.getTime() + (diasparaexpirar * 24*60*60*1000));

        // Converte a data para GMT
        expiracao = expiracao.toUTCString();

        // Crio o cookie com a data de expiração
        document.cookie = 'usuarioVisualizouModal=SIM; expires=' + expiracao+'; path=/';

        enviado();

        }
      }
      $(document).ready(function(){
        // Obtém todos os cookies do documento
        var cookies = document.cookie;

        // Verifica se o cookie existe
        if (cookies.indexOf("usuarioVisualizouModal") == -1)
        {
          // Entra aqui caso o cookie não exista no  navegador do usuário
          setTimeout(function(){ $('#modalContato').modal('show'); }, 3000);
        }
      });
      </script>
  </body>
</html>
