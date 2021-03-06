<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Desenvolvimento de jogos">
    <meta name="keywords" content="Graveyard, Studios, GraveyardStudios, Jogos, Jogos Graveyard, Graveyard Jogos">
    <meta name="author" content="João Rocha">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <title>Graveyard Studios</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!--Graveyard-->
    <link rel="stylesheet" type="text/css" href="css/flexslider.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/media.css">


  </head>
  <body>
    <?php include_once("analyticstracking.php") ?>
    <?php include_once("konami.php") ?>
    <!--Container-->
    <div class="tudo">


      <!--Header-->
      <div id="slide1">
        <header>
          <!--Barra de navegação-->
          <div id="header">
            <div id="logo1">
              <a href="#slide1"><img src="img/minilogo.png"></a>
            </div>
            <div class="navBar1">
              <ul>
                <li class="active"><a href="#home">Home</a></li>
                <li><a href="#servicos">Serviços</a></li>
                <li><a href="#portfolio">Portfólio</a></li>
                <li><a href="#equipe">Equipe</a></li>
                <li><a href="#contato">Contato</a></li>
              </ul>
            </div>
          </div><!--END Barra de navegação-->
          <!--Logo-->
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div id="logo"></div>
              </div>
            </div>
            <!--Arrow-->
            <div class="row">
              <div class="col-md-12">
                <div id="arrow"></div>
              </div>
            </div><!--END arrow-->
          </div><!--End logo-->
        </header>
      </div><!--End header-->


      <!--Botão back to top-->
      <a href="#slide1" class="back"></a>


      <!--Seção Home-->
      <div class="box box1" id="home">
        <div class="inner">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <h1 class="text-center">Home</h1>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <h3>Graveyard Studios</h3>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <p>Empresa com foco voltado e sua grande maioria para o desenvolvimento de jogos, a Graveyard Studios tem como objetivo o entretenimento de seus usuários. Com seus projetos desenvolvidos sem grandes intensões financeiras, a empresa visa a criação de jogos que agrade a todos os gostos mantendo a idéia de que tudo aquilo que é feito com dedicação tende a ser bom e a melhorar a cada dia.</p>

                <p>Fundada em 5 de outubro de 2013, os co-fundadores da Graveyard decidiram em seguir um sonho de infância em comum, e se juntaram para então seguir a carreira de desenvolvedores de jogos.</p>

                <p>Com muitos planos para o futuro como os jogos <strong>Westeros Online</strong>, um jogo com de categoria RPG via browser click and play e com a temática de Game Of Thrones e <strong>Racconection</strong> um jogo de categoria plataforma com temática única, a Graveyard Studios pretende manter um ritmo de desenvolvimento frequente sem deixar os usuários sem atualização.</p>

                <p>Não só apenas com jogos, mas a Graveyard Studios também desenvolve templates HTML, cartões de visita, banners, panfletos e até mesmo sistemas comums.</p>
              </div>
              <div class="col-md-6">
                <img src="img/capa.jpg" class="img-responsive">
              </div>
            </div>
            <div class="row" style="margin-top: 10px;">
              <div class="col-md-6">
                <img src="img/rigomor.png" class="img-responsive">
              </div>
              <div class="col-md-6">
                <h3>Rigomor</h3>
                <p>Há muito tempo atrás, uma guerra devastadora eliminou quase todas as criaturas vivas do planeta Rigomor. Alguns bebês foram resgatados a tempo em um dos berçários e foram enviados pelo espaço em uma cápsula que os manteve vivos e inanimados por anos, tendo como seu destino final a Terra. Entretanto, somente no ano terráqueo de 2013 eles descobriram o que houve em seu passado e juntos formaram o que seria conhecido posteriormente como <strong>Graveyard Studios</strong>, usando jogos como o principal meio de compartilhar com o mundo, a história, ciência e cultura de seu planeta natal.</p>
              </div>
            </div>
          </div>
        </div>
      </div><!--END Seção Home-->

      <!--Parallax 1-->
      <div class="overlay"></div>
      <div id="slide2"></div>

      <!--Seção serviços-->
      <div class="box box2" id="servicos">
        <div class="inner">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <h1 class="text-center">Serviços</h1>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <!--FlexSlider-->
                <div class="flexslider">
                  <ul class="slides">
                    <li>
                      <img src="img/jogos.jpg" />
                    </li>
                    <li>
                      <img src="img/web.jpg" />
                    </li>
                    <li>
                      <img src="img/img-p.jpg" />
                    </li>
                  </ul>
                </div>
              </div><!--END FlexSlider-->
              <div class="col-md-6">
                <!--Tabs1-->
                <section class="tabs">
                  <input id="tab-1" type="radio" name="radio-set" class="tab-selector-1" checked="checked" />
                  <label for="tab-1" class="tab-label-1">Jogos</label>

                  <input id="tab-2" type="radio" name="radio-set" class="tab-selector-2" />
                  <label for="tab-2" class="tab-label-2">WEB</label>

                  <input id="tab-3" type="radio" name="radio-set" class="tab-selector-3" />
                  <label for="tab-3" class="tab-label-3">Publicidade</label>

                  <div class="clear-shadow"></div>

                  <div class="content">
                    <div class="content-1">
                      <h2>Jogos</h2>
                      <p>Jogos desenvolvidos para browsers, android, IOS, Windows, Linux e MAC, são uma perfeita escolha para passar o tempo se divertindo.</p>
                      <p>Todos os jogos são gratuitos e podem ser baixados em seu computador ou celular a qualquer momento.</p>
                    </div>
                    <div class="content-2">
                      <h2>WEB</h2>
                      <p>Templates, temas e plugins desenvolvidos em cima do twitter bootstrap, uma ótima pção para adaptar um site completamente responsivo sem perda de tempo desnecessária. Além de també realizar trabalhos de Webdesigner próprio, onde você pode realizar junto conosco um site da forma que bem desejar.</p>
                      <p>Todos a seção de WEB é gratuita e podem ser baixados e alterados* em seu computador a qualquer momento.</p><br>
                      <p>*Leia os arquivos de README em cada template e entenda todo o licenciamento de alterações.</p>
                    </div>
                    <div class="content-3">
                    <h2>Publicidade</h2>
                    <p>Cartões de visita, banners e panfletos, se precisa divulgar sua marca e/ou empresa, a GraveyardStudios também realiza trabalhos para você.</p>
                    <p>Todos os trabalhos de publicidade já realizados podem ser visualizados no nosso <a href="#portfolio">portfólio</a>.</p>
                    </div>
                  </div>
                </section><!--END Tabs1-->
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <h3>Como solicitar um serviço?</h3>
                <p>Precisa de algum de nossos serviços? Entre em contato conosco, e confira todas as propostas de nossa empresa.</p>
              </div>
            </div>
          </div>
        </div>
      </div><!--END Seção serviços-->


      <!--Parallax 2-->
      <div class="overlay"></div>
      <div id="slide3"></div>








      <!--Seção portfólio-->
      <div class="box box4" id="portfolio">
        <div class="inner">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <h1 class="text-center">Portfólio</h1>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <!--Tabs2-->
                <section class="tabs2">
                  <input id="tab2-1" type="radio" name="radio-set2" class="tab-selector2-1" checked="checked"/>
                  <label for="tab2-1" class="tab-label2-1">Jogos</label>

                  <input id="tab2-2" type="radio" name="radio-set2" class="tab-selector2-2" />
                  <label for="tab2-2" class="tab-label2-2">WEB</label>

                  <input id="tab2-4" type="radio" name="radio-set2" class="tab-selector2-4" />
                  <label for="tab2-4" class="tab-label2-4">Publicidade</label>

                  <div class="clear-shadow"></div>

                  <div class="content2">
                    <div class="content2-1">
                      <h2 class="text-center">Jogos</h2>
                      <img src="img/rigomor-dash-flee.jpg" class="img-responsive" data-toggle="modal" data-target="#rigomor-dash-flee">
                      <img src="img/coming-soon.jpg" class="img-responsive" data-toggle="modal" data-target="#myModal">
                      <img src="img/coming-soon.jpg" class="img-responsive" data-toggle="modal" data-target="#myModal">
                      <img src="img/coming-soon.jpg" class="img-responsive" data-toggle="modal" data-target="#myModal">
                      <img src="img/coming-soon.jpg" class="img-responsive" data-toggle="modal" data-target="#myModal">
                      <img src="img/coming-soon.jpg" class="img-responsive" data-toggle="modal" data-target="#myModal">
                      <img src="img/coming-soon.jpg" class="img-responsive" data-toggle="modal" data-target="#myModal">
                      <img src="img/coming-soon.jpg" class="img-responsive" data-toggle="modal" data-target="#myModal">
                      <img src="img/coming-soon.jpg" class="img-responsive" data-toggle="modal" data-target="#myModal">
                      <img src="img/coming-soon.jpg" class="img-responsive" data-toggle="modal" data-target="#myModal">
                      <img src="img/coming-soon.jpg" class="img-responsive" data-toggle="modal" data-target="#myModal">
                      <img src="img/coming-soon.jpg" class="img-responsive" data-toggle="modal" data-target="#myModal">
                    </div>
                    <div class="content2-2">
                      <h2 class="text-center">WEB</h2>
                      <img src="img/sutekh-theme-layout.jpg" class="img-responsive">
                      <img src="img/coming-soon.jpg" class="img-responsive" data-toggle="modal" data-target="#myModal">
                      <img src="img/coming-soon.jpg" class="img-responsive" data-toggle="modal" data-target="#myModal">
                      <img src="img/coming-soon.jpg" class="img-responsive" data-toggle="modal" data-target="#myModal">
                      <img src="img/coming-soon.jpg" class="img-responsive" data-toggle="modal" data-target="#myModal">
                      <img src="img/coming-soon.jpg" class="img-responsive" data-toggle="modal" data-target="#myModal">
                      <img src="img/coming-soon.jpg" class="img-responsive" data-toggle="modal" data-target="#myModal">
                      <img src="img/coming-soon.jpg" class="img-responsive" data-toggle="modal" data-target="#myModal">
                      <img src="img/coming-soon.jpg" class="img-responsive" data-toggle="modal" data-target="#myModal">
                      <img src="img/coming-soon.jpg" class="img-responsive" data-toggle="modal" data-target="#myModal">
                      <img src="img/coming-soon.jpg" class="img-responsive" data-toggle="modal" data-target="#myModal">
                      <img src="img/coming-soon.jpg" class="img-responsive" data-toggle="modal" data-target="#myModal">
                    </div>
                    <div class="content2-4">
                      <h2 class="text-center">Publicidade</h2>
                      <img src="img/coming-soon.jpg" class="img-responsive" data-toggle="modal" data-target="#myModal">
                      <img src="img/coming-soon.jpg" class="img-responsive" data-toggle="modal" data-target="#myModal">
                      <img src="img/coming-soon.jpg" class="img-responsive" data-toggle="modal" data-target="#myModal">
                      <img src="img/coming-soon.jpg" class="img-responsive" data-toggle="modal" data-target="#myModal">
                      <img src="img/coming-soon.jpg" class="img-responsive" data-toggle="modal" data-target="#myModal">
                      <img src="img/coming-soon.jpg" class="img-responsive" data-toggle="modal" data-target="#myModal">
                      <img src="img/coming-soon.jpg" class="img-responsive" data-toggle="modal" data-target="#myModal">
                      <img src="img/coming-soon.jpg" class="img-responsive" data-toggle="modal" data-target="#myModal">
                      <img src="img/coming-soon.jpg" class="img-responsive" data-toggle="modal" data-target="#myModal">
                      <img src="img/coming-soon.jpg" class="img-responsive" data-toggle="modal" data-target="#myModal">
                      <img src="img/coming-soon.jpg" class="img-responsive" data-toggle="modal" data-target="#myModal">
                      <img src="img/coming-soon.jpg" class="img-responsive" data-toggle="modal" data-target="#myModal">
                    </div>
                  </div>
                </section><!--END Tabs2-->
              </div>
            </div>

            <!--MODAL RIGOMOR DASH FLEE-->
            <div class="modal fade" id="rigomor-dash-flee" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Rigomor Dash Flee</h4>
                  </div>
                  <div class="modal-body">
                    <img src="img/rigomor-dash-flee.jpg" class="img-responsive" data-toggle="modal" data-target="#rigomor-dash-flee">
                    <p>Com a eminente destruição do planeta Rigomor pelo ataque constante das raças dos planetas inimigos, um jovem piloto recém-formado, resolve fugir em sua nave porém é surpreendido por acabar na contra-mão de uma investida contra seu planeta natal.</p>
                    <br>
                    <br>
                    <p>Versão: 1.2</p>
                  </div>
                  <div class="modal-footer">
                    <a href="files/RigomorDashFlee.rar"><button type="button" class="btn btn-primary">Windows</button></a>
                    <a href="files/RigomorDashFlee.tar.gz"><button type="button" class="btn btn-primary">Linux</button></a>
                    <a href="files/RigomorDashFlee.zip"><button type="button" class="btn btn-primary">MAC OS</button></a>
                  </div>
                </div>
              </div>
            </div>


            <!--Destaques-->
            <div class="row">
              <div class="col-md-12">
                <h1>Destaques</h1>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4">
                <h3>Rigomor Dash Flee</h3>
                <img src="img/rigomor-dash-flee.jpg" class="img-responsive" >
                <p>Com a eminente destruição do planeta Rigomor pelo ataque constante das raças dos planetas inimigos, um jovem piloto recém-formado, resolve fugir em sua nave porém é surpreendido por acabar na contra-mão de uma investida contra seu planeta natal.</p>
                <button class="btn btn-primary" data-toggle="modal" data-target="#rigomor-dash-flee">Detalhes</button>
              </div>
              <div class="col-md-4">
                <h3>Sutekh Template</h3>
                <img src="img/sutekh-theme-layout.jpg" class="img-responsive">
                <p>Template HTML desenvolvido em cima do Twitter Bootstrap, completamente responsivo, inicialmente desenvolvido como template para sites de eventos, mas não o limita a apenas isso.</p>
                <p>Sutekh Template conta com uma série de plugins que estilizam toda a página com uma interface amigável e objetiva.</p>
                <button class="btn btn-primary">Detalhes</button>
              </div>
              <div class="col-md-4">
                <h3>Westeros Online</h3>
                <img src="img/westeros-online.jpg" class="img-responsive">
                <p>Jogo de estilo MMORPG, Westeros online possui uma temática baseada na aclamada série Game of Thrones, onde poderá ser encontrado vários personagens da mesma.</p>
                <p>Jogo Click and Play, conta com várias funcionalidades e desafios para você e seus amigos, cada aventura será diferente da outra, será que você conseguirá ser o melhor?</p>
                <button class="btn btn-primary">Detalhes</button>
              </div>
            </div><!--END Destaques-->
          </div>
        </div>
      </div><!--END Seção portfólio-->

      <!--Parallax 3-->
      <div class="overlay"></div>
      <div id="slide4"></div>

      <!--Seção equipe-->
      <div class="box box3" id="equipe">
        <div class="inner">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <h1 class="text-center">Equipe</h1>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <!--Vertical Accordion-->
                <div id="va-accordion" class="va-container">
                  <div class="va-nav">
                    <span class="va-nav-prev">Previous</span>
                    <span class="va-nav-next">Next</span>
                  </div>
                  <div class="va-wrapper">
                    <div class="va-slice va-slice-1">
                      <h3 class="va-title">Game Developer</h3>
                      <div class="va-content">
                        <p>Eric Menezes</p>
                        <ul>
                          <li><a href="https://www.facebook.com/eric.m.noronha" target="_blank">Sobre</a></li>
                          <li><a href="https://www.deviantart.com">Portfolio</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="va-slice va-slice-2">
                      <h3 class="va-title">Designer</h3>
                      <div class="va-content">
                        <p>João Rocha</p>
                        <ul>
                          <li><a>Sobre</a></li>
                          <li><a>Portfolio</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="va-slice va-slice-3">
                      <h3 class="va-title">Escritor</h3>
                      <div class="va-content">
                        <p>Pedro Ricardo</p>
                        <ul>
                          <li><a>Sobre</a></li>
                          <li><a>Portfolio</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="va-slice va-slice-4">
                      <h3 class="va-title">Game Designer</h3>
                      <div class="va-content">
                        <p>Renan Rocha</p>
                        <ul>
                          <li><a>Sobre</a></li>
                          <li><a>Portfolio</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div><!--END Vertical Accordion-->
              </div>
            </div>
            <!--Skills-->
            <div class="row">
              <div class="col-md-3">
                <div class="wid">
                  <div class="wid-header">
                    <h3>Eric</h3><img src="img/eric-capa.jpg" class="img-rounded img-responsive">
                  </div>
                  <div class="wid-body">
                    <p><strong>Funções:</strong></p>

                    <p>Desenvolvedor;</p>
                    <p>Game Designer;</p>
                    <p>Level Designer;</p>
                    <p>Fazedor de café;</p>

                    <p><strong>Habilidades:</strong></p>

                    <p>Unity 3D:
                      <div class="progress progress-striped active">
                        <div class="progress-bar progress-bar-danger"  role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                          <span class="sr-only"></span>
                        </div>
                      </div>
                    </p>

                    <p>C# UnityScript:
                      <div class="progress progress-striped active">
                        <div class="progress-bar"  role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                          <span class="sr-only"></span>
                        </div>
                      </div>
                    </p>

                    <p>C:
                      <div class="progress progress-striped active">
                        <div class="progress-bar progress-bar-danger"  role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                          <span class="sr-only"></span>
                        </div>
                      </div>
                    </p>

                    <p>Delphi:
                      <div class="progress progress-striped active">
                        <div class="progress-bar"  role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                          <span class="sr-only"></span>
                        </div>
                      </div>
                    </p>

                    <p>PHP:
                      <div class="progress progress-striped active">
                        <div class="progress-bar progress-bar-danger"  role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                          <span class="sr-only"></span>
                        </div>
                      </div>
                    </p>

                    <p>Chofer:
                      <div class="progress progress-striped active">
                        <div class="progress-bar"  role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                          <span class="sr-only"></span>
                        </div>
                      </div>
                    </p>

                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="wid">
                  <div class="wid-header">
                    <h3>João</h3><img src="img/joao-capa.jpg" class="img-rounded img-responsive">
                  </div>
                  <div class="wid-body">
                    <p><strong>Funções:</strong></p>

                    <p>Web designer;</p>
                    <p>Web developer;</p>
                    <p>Pixel Artist;</p>
                    <p>Marketing;</p>

                    <p><strong>Habilidades:</strong></p>

                    <p>HTML:
                      <div class="progress progress-striped active">
                        <div class="progress-bar progress-bar-danger"  role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                          <span class="sr-only"></span>
                        </div>
                      </div>
                    </p>

                    <p>CSS:
                      <div class="progress progress-striped active">
                        <div class="progress-bar"  role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                          <span class="sr-only"></span>
                        </div>
                      </div>
                    </p>

                    <p>Bootstrap:
                      <div class="progress progress-striped active">
                        <div class="progress-bar progress-bar-danger"  role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                          <span class="sr-only"></span>
                        </div>
                      </div>
                    </p>

                    <p>JQuery:
                      <div class="progress progress-striped active">
                        <div class="progress-bar"  role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                          <span class="sr-only"></span>
                        </div>
                      </div>
                    </p>

                    <p>LESS:
                      <div class="progress progress-striped active">
                        <div class="progress-bar progress-bar-danger"  role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                          <span class="sr-only"></span>
                        </div>
                      </div>
                    </p>

                    <p>Photoshop:
                      <div class="progress progress-striped active">
                        <div class="progress-bar"  role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                          <span class="sr-only"></span>
                        </div>
                      </div>
                    </p>

                    <p>Discutir com o Rick:
                      <div class="progress progress-striped active">
                        <div class="progress-bar progress-bar-danger"  role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                          <span class="sr-only"></span>
                        </div>
                      </div>
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="wid">
                  <div class="wid-header">
                    <h3>Rick</h3><img src="img/rick-capa.jpg" class="img-rounded img-responsive">
                  </div>
                  <div class="wid-body">
                    <p><strong>Funções:</strong></p>

                    <p>Escritor;</p>
                    <p>Desenvolvedor;</p>
                    <p>Game Designer;</p>
                    <p>Enxedor de saco;</p>

                    <p><strong>Habilidades:</strong></p>

                    <p>Criatividade:
                      <div class="progress progress-striped active">
                        <div class="progress-bar progress-bar-danger"  role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                          <span class="sr-only"></span>
                        </div>
                      </div>
                    </p>

                    <p>Python:
                      <div class="progress progress-striped active">
                        <div class="progress-bar"  role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                          <span class="sr-only"></span>
                        </div>
                      </div>
                    </p>

                    <p>Unity3D:
                      <div class="progress progress-striped active">
                        <div class="progress-bar progress-bar-danger"  role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                          <span class="sr-only"></span>
                        </div>
                      </div>
                    </p>


                    <p>Bash:
                      <div class="progress progress-striped active">
                        <div class="progress-bar"  role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 85%">
                          <span class="sr-only"></span>
                        </div>
                      </div>
                    </p>

                    <p>Criação de Personagens:
                      <div class="progress progress-striped active">
                        <div class="progress-bar progress-bar-danger"  role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 85%">
                          <span class="sr-only"></span>
                        </div>
                      </div>
                    </p>

                    <p>Procrastinação:
                      <div class="progress progress-striped active">
                        <div class="progress-bar"  role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                          <span class="sr-only"></span>
                        </div>
                      </div>
                    </p>

                    <p>Cultura Inutil:
                      <div class="progress progress-striped active">
                        <div class="progress-bar progress-bar-danger"  role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                          <span class="sr-only"></span>
                        </div>
                      </div>
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="wid">
                  <div class="wid-header">
                    <h3>Renan</h3><img src="img/renan-capa.jpg" class="img-rounded img-responsive">
                  </div>
                  <div class="wid-body">
                    <p><strong>Funções:</strong></p>

                    <p>Programador;</p>
                    <p>Game Designer;</p>
                    <p>Level Designer;</p>
                    <p>Servidor de cafezinho;</p>

                    <p><strong>Habilidades:</strong></p>

                    <p>Unity 3D:
                      <div class="progress progress-striped active">
                        <div class="progress-bar progress-bar-danger"  role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                          <span class="sr-only"></span>
                        </div>
                      </div>
                    </p>

                    <p>C# UnityScript:
                      <div class="progress progress-striped active">
                        <div class="progress-bar"  role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                          <span class="sr-only"></span>
                        </div>
                      </div>
                    </p>

                    <p>C++:
                      <div class="progress progress-striped active">
                        <div class="progress-bar progress-bar-danger"  role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 30%">
                          <span class="sr-only"></span>
                        </div>
                      </div>
                    </p>

                    <p>Python:
                      <div class="progress progress-striped active">
                        <div class="progress-bar"  role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 30%">
                          <span class="sr-only"></span>
                        </div>
                      </div>
                    </p>

                    <p>Musculação:
                      <div class="progress progress-striped active">
                        <div class="progress-bar progress-bar-danger"  role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                          <span class="sr-only"></span>
                        </div>
                      </div>
                    </p>

                    <p>Música:
                      <div class="progress progress-striped active">
                        <div class="progress-bar"  role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                          <span class="sr-only"></span>
                        </div>
                      </div>
                    </p>
                  </div>
                </div>
              </div>
            </div><!--END Skills-->
          </div>
        </div>
      </div><!--END Seção equipe-->



      <!--Parallax 4-->
      <div class="overlay"></div>
      <div id="slide5"></div>


      <!--Seção contato-->
      <div class="box box5" id="contato">
        <div class="inner">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <h1 class="text-center">Contato</h1>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4">
                <h3 class="text-center">Feedback</h3>
                <form role="form" action="mail.php" method="POST">
                  <div class="form-group">
                    <label for="InputName">Nome</label>
                    <input type="text" class="form-control" id="InputName" placeholder="Insira seu nome" name="name">
                  </div>
                  <div class="form-group">
                    <label for="InputEMail">E-mail</label>
                    <input type="email" class="form-control" id="InputEmail" placeholder="Insira seu e-mail" name="mail">
                  </div>
                  <div class="form-group">
                    <label for="InputSubject">Assunto</label>
                    <input type="text" class="form-control" id="InputSubject" placeholder="Insira o assunto da mensagem" name="subject">
                  </div>
                  <div class="form-group">
                    <label for="InputMessage">Mensagem</label>
                    <textarea class="form-control" rows="8" name="message"></textarea>
                  </div>
                  <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
              </div>
              <div class="col-md-4">
                <h3 class="text-center">Redes Sociais</h3>
                <div id="redes">
                  <a href="https://www.facebook.com/graveyard.devel"><img src="img/facebook-logo.png" class="pull-left imgaju" style="width: 30%;"></a>
                  <a href="https://twitter.com/GraveyardStdios"><img src="img/twitter-logo.png" class="pull-left imgaju" style="width: 30%;"></a>
                </div>
              </div>
              <div class="col-md-4">
                <h3 class="text-center">E-mail</h3>
                <img src="img/google-logo.png" class="google">
                <p class="text-center">contato@graveyard-studios.com</p>
              </div>
            </div>
          </div>
        </div>
      </div><!--END Seção contato-->


      <!--Footer-->
      <div class="footer-grave">
        <p style="margin-top: 5px;">Desenvolvido por Graveyard Studios</p>
        <p>2014</p>
      </div><!--END Footer-->


    </div><!--End container-->


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->

    <!--Script Graveyard-->
    <script src="js/app.js"></script>

    <!--Scripts VAccordion-->
    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="js/jquery.mousewheel.js"></script>
    <script type="text/javascript" src="js/jquery.vaccordion.js"></script>

    <!--Scripts FlexSlider-->
    <script src="js/jquery.flexslider-min.js"></script>

    <!--Script Bootstrap-->
    <script src="js/bootstrap.min.js"></script>



    <script type="text/javascript">
      $(window).load(function(){
        if ($("#header").is('*')) {
          var elem = $('#header');
          var offset = elem.offset();
          var leftValue = offset.left;
          var topValue =  offset.top + elem.height();
          var width = elem.width();

          $(window).scroll(function (event) {
            var y = $(this).scrollTop();
            if (y >= topValue) {
              if ($('#header').hasClass('fixed')){
              }else{
                $('#header').addClass('fixed');
                $('#header').css({
                  top: '-70px',
                  width:width,
                });
                $('#header').animate({
                  top: '0',
                }, 500, function() {
                });
              }
            } else {
              if ($('#header').hasClass('fixed')){
                $('#header').removeClass('fixed');
                $('#header').fadeOut('fast', function(){
                  $('#header').fadeIn('fast');
                });
              }
            }
          });
        }
      });
    </script>


    <script type="text/javascript">
      $(window).load(function() {
        $('.flexslider').flexslider({
          animation: "slide"
        });
      });
    </script>



    <script type="text/javascript">
      $(document).ready(function() {
        $('#va-accordion').vaccordion({
          visibleSlices : 4,
          expandedHeight  : 250,
          animOpacity   : 0.1,
          contentAnimSpeed: 100
        });
      });
    </script>


  </body>
</html>