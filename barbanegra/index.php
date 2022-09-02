<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
            <link rel="stylesheet" href="css/style.css">
        <link rel="shortcut icon" href="img/favicon-16x16.png">
        
        <title>Barba Negra</title>
    </head>
    <body>
        <div class="header">
          <div class="divEsquerda">
            <img class="left pole" src="img/poled.png">
          </div>
          <div class="divCentro">
            <a href="cadastro-usuario.php"><img class="title" src="img/titulo.png"></a>
          </div>
            <div class="login">
              <img class="right pole" src="img/pole.png">
              <img class="user" src="img/user.png">
              <form method="POST" action="login.php">
                    <input name="entrar" class="button" type="submit" value="Entrar">
                </form>
            </div>    
        </div>

        <div class="menu">
            <div class="elements"><a href="index.php">• Home •</a></div>
            <div class="elements"><a href="#produtos">• Produtos •</a></div>
            <div class="elements"><a href="#servicos">• Serviços •</a></div>
            <div class="elements"><a href="#faleconosco">• Fale Conosco •</a></div>
        </div> 
        <div class="carrossel">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img name="Bem-Vindo" class="d-block w-100" src="img/welcome.png" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="img/barber.png" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="img/services.png" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        <div class="etiquetaDiv">
          <p class="etiquetaTxt"> Produtos </p>
        </div>
        <h2 id="produtos">Quer otimizar sua pesquisa? Selecione seu tipo de cabelo!</h2><br>
        <div class="paiSl">
            <form method='post' action="criaCookie.php">
                <div class="filhoSl">
                    <select name="select" class="select">
                        <option value="0">Selecione...</option>
                        <option value="1">Crespo</option>
                        <option value="2">Cacheado</option>
                        <option value="3">Ondulado</option>
                        <option value="4">Liso</option>
                    </select>
                    </div>
                    <div class="filhoIpt">
                        <input name="slButton" class="slButton" type="submit" value="Selecionar">
                    </div>
                </form>
        </div>
        <br><br>
        <div class="products">
          <?php
            include('data.php');
            if(isset($_COOKIE['categoriaCookie'])){
              if($_COOKIE['categoriaCookie'] == 0){
                
              echo("
              <div class='container'>
                <div class='row row-cols-8 row-cols-lg-4 g-2 g-lg-3'>
              ");
              foreach($produtosB as $key => $value){
                echo("
                  <div class='col'>
                    <div class='card'>
                      <img src=".$value[0]." class='card-img-top' alt=''>
                      <div class='card-body>
                        <h5 class='card-title'>".$value[1]."</h5>
                        <h5 class='card-title'>".$value[2]."</h5>
                        <a href='' class='btn btn-danger'>Comprar</a>
                      </div>
                      <br>
                    </div>
                  </div>
                ");
              }
              echo("</div>
                </div>
              <br>");
              echo("
              <div class='container'>
                <div class='row row-cols-8 row-cols-lg-4 g-2 g-lg-3'>
              ");
              foreach($produtosA as $key => $value){
                echo("
                  <div class='col'>
                    <div class='card'>
                      <img src=".$value[0]." class='card-img-top' alt=''>
                      <div class='card-body>
                        <h5 class='card-title'>".$value[1]."</h5>
                        <h5 class='card-title'>".$value[2]."</h5>
                        <a href='' class='btn btn-danger'>Comprar</a>
                      </div>
                      <br>
                    </div>
                  </div>
                ");
              }
              echo("</div>
                </div>
              <br>");
              echo("
              <div class='container'>
                <div class='row row-cols-8 row-cols-lg-4 g-2 g-lg-3'>
              ");
              foreach($produtosC as $key => $value){
                echo("
                  <div class='col'>
                    <div class='card'>
                      <img src=".$value[0]." class='card-img-top' alt=''>
                      <div class='card-body>
                        <h5 class='card-title'>".$value[1]."</h5>
                        <h5 class='card-title'>".$value[2]."</h5>
                        <a href='' class='btn btn-danger'>Comprar</a>
                      </div>
                      <br>
                    </div>
                  </div>
                ");
              }
              echo("</div>
                </div>
              <br>");
              echo("
              <div class='container'>
                <div class='row row-cols-8 row-cols-lg-4 g-2 g-lg-3'>
              ");
              foreach($produtosD as $key => $value){
                echo("
                  <div class='col'>
                    <div class='card'>
                      <img src=".$value[0]." class='card-img-top' alt=''>
                      <div class='card-body>
                        <h5 class='card-title'>".$value[1]."</h5>
                        <h5 class='card-title'>".$value[2]."</h5>
                        <a href='' class='btn btn-danger'>Comprar</a>
                      </div>
                      <br>
                    </div>
                  </div>
                ");
              }
              echo("</div>
                </div>
              <br>");
              }
              else if($_COOKIE['categoriaCookie'] == 1){
//Produtos para cabelos crespos
                echo("
                <div class='container'>
                  <div class='row row-cols-8 row-cols-lg-4 g-2 g-lg-3'>
                ");
                foreach($produtosA as $key => $value){
                  echo("
                    <div class='col'>
                      <div class='card'>
                        <img src=".$value[0]." class='card-img-top' alt=''>
                        <div class='card-body>
                          <h5 class='card-title'>".$value[1]."</h5>
                          <h5 class='card-title'>".$value[2]."</h5>
                          <form>
                            <input type='submit' name='botao' class='botao' value='Comprar'
                          </form>
                        </div>
                        <br>
                      </div>
                    </div>
                  ");
                }
                echo("</div>
                  </div>
                <br>");
                echo("
                <div class='container'>
                  <div class='row row-cols-8 row-cols-lg-4 g-2 g-lg-3'>
                ");
                foreach($produtosB as $key => $value){
                  echo("
                  <div class='col'>
                    <div class='card'>
                      <img src=".$value[0]." class='card-img-top' alt=''>
                      <div class='card-body>
                        <h5 class='card-title'>".$value[1]."</h5>
                        <h5 class='card-title'>".$value[2]."</h5>
                        <a href='' class='btn btn-danger'>Comprar</a>
                      </div>
                      <br>
                    </div>
                  </div>
                  ");
                } echo("</div>
                  </div>
                <br>");
                echo("
                <div class='container'>
                  <div class='row row-cols-8 row-cols-lg-4 g-2 g-lg-3'>
                ");
                foreach($produtosC as $key => $value){
                  echo("
                    <div class='col'>
                      <div class='card'>
                        <img src=".$value[0]." class='card-img-top' alt=''>
                        <div class='card-body>
                          <h5 class='card-title'>".$value[1]."</h5>
                          <h5 class='card-title'>".$value[2]."</h5>
                          <a href='' class='btn btn-danger'>Comprar</a>
                        </div>
                        <br>
                      </div>
                    </div>
                  ");
                }
                echo("</div>
                  </div>
                <br>");
                  echo("
                  <div class='container'>
                    <div class='row row-cols-8 row-cols-lg-4 g-2 g-lg-3'>
                  ");
                  foreach($produtosD as $key => $value){
                    echo("
                      <div class='col'>
                        <div class='card'>
                          <img src=".$value[0]." class='card-img-top' alt=''>
                          <div class='card-body>
                            <h5 class='card-title'>".$value[1]."</h5>
                            <h5 class='card-title'>".$value[2]."</h5>
                            <a href='' class='btn btn-danger'>Comprar</a>
                          </div>
                          <br>
                        </div>
                      </div>
                    ");
                  }
                  echo("</div>
                    </div>
                  <br>");
              }
              else if($_COOKIE['categoriaCookie'] == 2){
//Produtos para cabelos cacheados
                echo("
                <div class='container'>
                  <div class='row row-cols-8 row-cols-lg-4 g-2 g-lg-3'>
                ");
                foreach($produtosB as $key => $value){
                  echo("
                    <div class='col'>
                      <div class='card'>
                        <img src=".$value[0]." class='card-img-top' alt=''>
                        <div class='card-body>
                          <h5 class='card-title'>".$value[1]."</h5>
                          <h5 class='card-title'>".$value[2]."</h5>
                          <a href='' class='btn btn-danger'>Comprar</a>
                        </div>
                        <br>
                      </div>
                    </div>
                  ");
                }
                echo("</div>
                  </div>
                <br>");
                echo("
                <div class='container'>
                  <div class='row row-cols-8 row-cols-lg-4 g-2 g-lg-3'>
                ");
                foreach($produtosA as $key => $value){
                  echo("
                    <div class='col'>
                      <div class='card'>
                        <img src=".$value[0]." class='card-img-top' alt=''>
                        <div class='card-body>
                          <h5 class='card-title'>".$value[1]."</h5>
                          <h5 class='card-title'>".$value[2]."</h5>
                          <a href='' class='btn btn-danger'>Comprar</a>
                        </div>
                        <br>
                      </div>
                    </div>
                  ");
                }
                echo("</div>
                  </div>
                <br>");
                echo("
                <div class='container'>
                  <div class='row row-cols-8 row-cols-lg-4 g-2 g-lg-3'>
                ");
                foreach($produtosC as $key => $value){
                  echo("
                    <div class='col'>
                      <div class='card'>
                        <img src=".$value[0]." class='card-img-top' alt=''>
                        <div class='card-body>
                          <h5 class='card-title'>".$value[1]."</h5>
                          <h5 class='card-title'>".$value[2]."</h5>
                          <a href='' class='btn btn-danger'>Comprar</a>
                        </div>
                        <br>
                      </div>
                    </div>
                  ");
                }
                echo("</div>
                  </div>
                <br>");
                echo("
                <div class='container'>
                  <div class='row row-cols-8 row-cols-lg-4 g-2 g-lg-3'>
                ");
                foreach($produtosD as $key => $value){
                  echo("
                    <div class='col'>
                      <div class='card'>
                        <img src=".$value[0]." class='card-img-top' alt=''>
                        <div class='card-body>
                          <h5 class='card-title'>".$value[1]."</h5>
                          <h5 class='card-title'>".$value[2]."</h5>
                          <a href='' class='btn btn-danger'>Comprar</a>
                        </div>
                        <br>
                      </div>
                    </div>
                  ");
                }
                echo("</div>
                  </div>
                <br>");
              }
              else if($_COOKIE['categoriaCookie'] == 3){
//Produtos para cabelos ondulados
                echo("
                <div class='container'>
                  <div class='row row-cols-8 row-cols-lg-4 g-2 g-lg-3'>
                ");
                foreach($produtosC as $key => $value){
                  echo("
                    <div class='col'>
                      <div class='card'>
                        <img src=".$value[0]." class='card-img-top' alt=''>
                        <div class='card-body>
                          <h5 class='card-title'>".$value[1]."</h5>
                          <h5 class='card-title'>".$value[2]."</h5>
                          <a href='' class='btn btn-danger'>Comprar</a>
                        </div>
                        <br>
                      </div>
                    </div>
                  ");
                }
                echo("</div>
                  </div>
                <br>");
                  echo("
                <div class='container'>
                  <div class='row row-cols-8 row-cols-lg-4 g-2 g-lg-3'>
                ");
                foreach($produtosD as $key => $value){
                  echo("
                    <div class='col'>
                      <div class='card'>
                        <img src=".$value[0]." class='card-img-top' alt=''>
                        <div class='card-body>
                          <h5 class='card-title'>".$value[1]."</h5>
                          <h5 class='card-title'>".$value[2]."</h5>
                          <a href='' class='btn btn-danger'>Comprar</a>
                        </div>
                        <br>
                      </div>
                    </div>
                  ");
                }
                echo("</div>
                  </div>
                <br>");
                echo("
                <div class='container'>
                  <div class='row row-cols-8 row-cols-lg-4 g-2 g-lg-3'>
                ");
                foreach($produtosB as $key => $value){
                  echo("
                    <div class='col'>
                      <div class='card'>
                        <img src=".$value[0]." class='card-img-top' alt=''>
                        <div class='card-body>
                          <h5 class='card-title'>".$value[1]."</h5>
                          <h5 class='card-title'>".$value[2]."</h5>
                          <a href='' class='btn btn-danger'>Comprar</a>
                        </div>
                        <br>
                      </div>
                    </div>
                  ");
                }
                echo("</div>
                  </div>
                <br>");
                echo("
                <div class='container'>
                  <div class='row row-cols-8 row-cols-lg-4 g-2 g-lg-3'>
                ");
                foreach($produtosA as $key => $value){
                  echo("
                    <div class='col'>
                      <div class='card'>
                        <img src=".$value[0]." class='card-img-top' alt=''>
                        <div class='card-body>
                          <h5 class='card-title'>".$value[1]."</h5>
                          <h5 class='card-title'>".$value[2]."</h5>
                          <a href='' class='btn btn-danger'>Comprar</a>
                        </div>
                        <br>
                      </div>
                    </div>
                  ");
                }
                echo("</div>
                  </div>
                <br>");
              }
              else if($_COOKIE['categoriaCookie'] == 4){
//Produtos para cabelos lisos
                echo("
                <div class='container'>
                  <div class='row row-cols-8 row-cols-lg-4 g-2 g-lg-3'>
                ");
                foreach($produtosD as $key => $value){
                  echo("
                    <div class='col'>
                      <div class='card'>
                        <img src=".$value[0]." class='card-img-top' alt=''>
                        <div class='card-body>
                          <h5 class='card-title'>".$value[1]."</h5>
                          <h5 class='card-title'>".$value[2]."</h5>
                          <a href='' class='btn btn-danger'>Comprar</a>
                        </div>
                        <br>
                      </div>
                    </div>
                  ");
                }
                echo("</div>
                  </div>
                <br>");
                echo("
                <div class='container'>
                  <div class='row row-cols-8 row-cols-lg-4 g-2 g-lg-3'>
                ");
                foreach($produtosC as $key => $value){
                  echo("
                      <div class='col'>
                        <div class='card'>
                          <img src=".$value[0]." class='card-img-top' alt=''>
                          <div class='card-body>
                            <h5 class='card-title'>".$value[1]."</h5>
                            <h5 class='card-title'>".$value[2]."</h5>
                            <a href='' class='btn btn-danger'>Comprar</a>
                          </div>
                          <br>
                        </div>
                      </div>
                  ");
                }
                echo("</div>
                  </div>
                <br>");
                echo("
                  <div class='container'>
                <div class='row row-cols-8 row-cols-lg-4 g-2 g-lg-3'>
                ");
                foreach($produtosB as $key => $value){
                  echo("
                    <div class='col'>
                      <div class='card'>
                        <img src=".$value[0]." class='card-img-top' alt=''>
                        <div class='card-body>
                          <h5 class='card-title'>".$value[1]."</h5>
                          <h5 class='card-title'>".$value[2]."</h5>
                          <a href='' class='btn btn-danger'>Comprar</a>
                        </div>
                        <br>
                      </div>
                    </div>
                  ");
                }
                echo("</div>
                  </div>
                <br>");
                echo("
                <div class='container'>
                  <div class='row row-cols-8 row-cols-lg-4 g-2 g-lg-3'>
                ");
                foreach($produtosA as $key => $value){
                  echo("
                    <div class='col'>
                      <div class='card'>
                        <img src=".$value[0]." class='card-img-top' alt=''>
                        <div class='card-body>
                          <h5 class='card-title'>".$value[1]."</h5>
                          <h5 class='card-title'>".$value[2]."</h5>
                          <a href='' class='btn btn-danger'>Comprar</a>
                        </div>
                        <br>
                      </div>
                    </div>
                  ");
                }
                echo("</div>
                  </div>
                <br>");
              }
            }
            else{
              echo("
                <div class='container'>
                  <div class='row row-cols-8 row-cols-lg-4 g-2 g-lg-3'>
                ");
                foreach($produtosB as $key => $value){
                  echo("
                    <div class='col'>
                      <div class='card'>
                        <img src=".$value[0]." class='card-img-top' alt=''>
                        <div class='card-body>
                          <h5 class='card-title'>".$value[1]."</h5>
                          <h5 class='card-title'>".$value[2]."</h5>
                          <a href='' class='btn btn-danger'>Comprar</a>
                        </div>
                        <br>
                      </div>
                    </div>
                  ");
                }
                echo("</div>
                  </div>
                <br>");
                echo("
                <div class='container'>
                  <div class='row row-cols-8 row-cols-lg-4 g-2 g-lg-3'>
                ");
                foreach($produtosA as $key => $value){
                  echo("
                    <div class='col'>
                      <div class='card'>
                        <img src=".$value[0]." class='card-img-top' alt=''>
                        <div class='card-body>
                          <h5 class='card-title'>".$value[1]."</h5>
                          <h5 class='card-title'>".$value[2]."</h5>
                          <a href='' class='btn btn-danger'>Comprar</a>
                        </div>
                        <br>
                      </div>
                    </div>
                  ");
                }
                echo("</div>
                  </div>
                <br>");
                echo("
                <div class='container'>
                  <div class='row row-cols-8 row-cols-lg-4 g-2 g-lg-3'>
                ");
                foreach($produtosC as $key => $value){
                  echo("
                    <div class='col'>
                      <div class='card'>
                        <img src=".$value[0]." class='card-img-top' alt=''>
                        <div class='card-body>
                          <h5 class='card-title'>".$value[1]."</h5>
                          <h5 class='card-title'>".$value[2]."</h5>
                          <a href='' class='btn btn-danger'>Comprar</a>
                        </div>
                        <br>
                      </div>
                    </div>
                  ");
                }
                echo("</div>
                  </div>
                <br>");
                echo("
                <div class='container'>
                  <div class='row row-cols-8 row-cols-lg-4 g-2 g-lg-3'>
                ");
                foreach($produtosD as $key => $value){
                  echo("
                    <div class='col'>
                      <div class='card'>
                        <img src=".$value[0]." class='card-img-top' alt=''>
                        <div class='card-body>
                          <h5 class='card-title'>".$value[1]."</h5>
                          <h5 class='card-title'>".$value[2]."</h5>
                          <a href='' class='btn btn-danger'>Comprar</a>
                        </div>
                        <br>
                      </div>
                    </div>
                  ");
                }
                echo("</div>
                  </div>
                <br>");
            }
          ?>
        </div>
<!--SERVICOS-->
        <div class="etiquetaDiv">
          <p class="etiquetaTxt"> Serviços </p>
        </div>
        <h2 id="servicos">Confira nossos serviços!</h2><br>
        <div class="paiSl">
            <form method='post' action="criaCookieServicos.php">
                <div class="filhoSl">
                    <select name="select" class="select">
                        <option value="0">Filtro</option>
                        <option value="1">Cortes</option>
                        <option value="2">Sobrancelhas</option>
                        <option value="3">Barbas</option>
                        <option value="4">Tinturas</option>
                    </select>
                    </div>
                    <div class="filhoIpt">
                        <input name="slButton" class="slButton" type="submit" value="Selecionar">
                    </div>
                </form>
        </div>
        <br><br>
        <div class="services">
          <?php
            include('data.php');
            if(isset($_COOKIE['categoriaCookieServico'])){
              if($_COOKIE['categoriaCookieServico'] == 0){
                
                echo("
                <div class='container'>
                  <div class='row row-cols-8 row-cols-lg-4 g-2 g-lg-3'>
                ");
                foreach($servicosB as $key => $value){
                  echo("
                    <div class='col'>
                      <div class='card'>
                        <img src=".$value[0]." class='card-img-top' alt=''>
                        <div class='card-body>
                          <h5 class='card-title'>".$value[1]."</h5>
                          <p class='card-text'>".$value[2]."</p>
                        </div>
                        <br>
                      </div>
                    </div>
                  ");
                }
                echo("</div>
                  </div>
                <br>");
                echo("
                <div class='container'>
                  <div class='row row-cols-8 row-cols-lg-4 g-2 g-lg-3'>
                ");
                foreach($servicosA as $key => $value){
                  echo("
                    <div class='col'>
                      <div class='card'>
                        <img src=".$value[0]." class='card-img-top' alt=''>
                        <div class='card-body>
                          <h5 class='card-title'>".$value[1]."</h5>
                          <p class='card-text'>".$value[2]."</p>
                        </div>
                        <br>
                      </div>
                    </div>
                  ");
                }
                echo("</div>
                  </div>
                <br>");
                echo("
                <div class='container'>
                  <div class='row row-cols-8 row-cols-lg-4 g-2 g-lg-3'>
                ");
                foreach($servicosC as $key => $value){
                  echo("
                    <div class='col'>
                      <div class='card'>
                        <img src=".$value[0]." class='card-img-top' alt=''>
                        <div class='card-body>
                          <h5 class='card-title'>".$value[1]."</h5>
                          <p class='card-text'>".$value[2]."</p>
                        </div>
                        <br>
                      </div>
                    </div>
                  ");
                }
                echo("</div>
                  </div>
                <br>");
                echo("
                <div class='container'>
                  <div class='row row-cols-8 row-cols-lg-4 g-2 g-lg-3'>
                ");
                foreach($servicosD as $key => $value){
                  echo("
                    <div class='col'>
                      <div class='card'>
                        <img src=".$value[0]." class='card-img-top' alt=''>
                        <div class='card-body>
                          <h5 class='card-title'>".$value[1]."</h5>
                          <p class='card-text'>".$value[2]."</p>
                        </div>
                        <br>
                      </div>
                    </div>
                  ");
                }
                echo("</div>
                  </div>
                <br>");
                }
              if($_COOKIE['categoriaCookieServico'] == 1){
//Serviços de Cortes
                echo("
                <div class='container'>
                  <div class='row row-cols-8 row-cols-lg-4 g-2 g-lg-3'>
                ");
                foreach($servicosA as $key => $value){
                  echo("
                    <div class='col'>
                      <div class='card'>
                        <img src=".$value[0]." class='card-img-top' alt=''>
                        <div class='card-body>
                          <h5 class='card-title'>".$value[1]."</h5>
                          <p class='card-text'>".$value[2]."</p>
                        </div>
                        <br>
                      </div>
                    </div>
                  ");
                }
                echo("</div>
                  </div>
                <br>");
                echo("
                <div class='container'>
                  <div class='row row-cols-8 row-cols-lg-4 g-2 g-lg-3'>
                ");
                foreach($servicosB as $key => $value){
                  echo("
                  <div class='col'>
                    <div class='card'>
                      <img src=".$value[0]." class='card-img-top' alt=''>
                      <div class='card-body>
                        <h5 class='card-title'>".$value[1]."</h5>
                        <p class='card-text'>".$value[2]."</p>
                      </div>
                      <br>
                    </div>
                  </div>
                  ");
                }
                echo("</div>
                  </div>
                <br>");
                echo("
                <div class='container'>
                  <div class='row row-cols-8 row-cols-lg-4 g-2 g-lg-3'>
                ");
                foreach($servicosC as $key => $value){
                  echo("
                    <div class='col'>
                      <div class='card'>
                        <img src=".$value[0]." class='card-img-top' alt=''>
                        <div class='card-body>
                          <h5 class='card-title'>".$value[1]."</h5>
                          <p class='card-text'>".$value[2]."</p>
                        </div>
                        <br>
                      </div>
                    </div>
                  ");
                }
                echo("</div>
                  </div>
                <br>");
                  echo("
                  <div class='container'>
                    <div class='row row-cols-8 row-cols-lg-4 g-2 g-lg-3'>
                  ");
                  foreach($servicosD as $key => $value){
                    echo("
                      <div class='col'>
                        <div class='card'>
                          <img src=".$value[0]." class='card-img-top' alt=''>
                          <div class='card-body>
                            <h5 class='card-title'>".$value[1]."</h5>
                            <p class='card-text'>".$value[2]."</p>
                          </div>
                          <br>
                        </div>
                      </div>
                    ");
                  }
                  echo("</div>
                    </div>
                  <br>");
              }
              else if($_COOKIE['categoriaCookieServico'] == 2){
//Serviços de Sobrancelhas
                echo("
                <div class='container'>
                  <div class='row row-cols-8 row-cols-lg-4 g-2 g-lg-3'>
                ");
                foreach($servicosB as $key => $value){
                  echo("
                    <div class='col'>
                      <div class='card'>
                        <img src=".$value[0]." class='card-img-top' alt=''>
                        <div class='card-body>
                          <h5 class='card-title'>".$value[1]."</h5>
                          <p class='card-text'>".$value[2]."</p>
                        </div>
                        <br>
                      </div>
                    </div>
                  ");
                }
                echo("</div>
                  </div>
                <br>");
                echo("
                <div class='container'>
                  <div class='row row-cols-8 row-cols-lg-4 g-2 g-lg-3'>
                ");
                foreach($servicosA as $key => $value){
                  echo("
                    <div class='col'>
                      <div class='card'>
                        <img src=".$value[0]." class='card-img-top' alt=''>
                        <div class='card-body>
                          <h5 class='card-title'>".$value[1]."</h5>
                          <p class='card-text'>".$value[2]."</p>
                        </div>
                        <br>
                      </div>
                    </div>
                  ");
                }
                echo("</div>
                  </div>
                <br>");
                echo("
                <div class='container'>
                  <div class='row row-cols-8 row-cols-lg-4 g-2 g-lg-3'>
                ");
                foreach($servicosC as $key => $value){
                  echo("
                    <div class='col'>
                      <div class='card'>
                        <img src=".$value[0]." class='card-img-top' alt=''>
                        <div class='card-body>
                          <h5 class='card-title'>".$value[1]."</h5>
                          <p class='card-text'>".$value[2]."</p>
                        </div>
                        <br>
                      </div>
                    </div>
                  ");
                }
                echo("</div>
                  </div>
                <br>");
                echo("
                <div class='container'>
                  <div class='row row-cols-8 row-cols-lg-4 g-2 g-lg-3'>
                ");
                foreach($servicosD as $key => $value){
                  echo("
                    <div class='col'>
                      <div class='card'>
                        <img src=".$value[0]." class='card-img-top' alt=''>
                        <div class='card-body>
                          <h5 class='card-title'>".$value[1]."</h5>
                          <p class='card-text'>".$value[2]."</p>
                        </div>
                        <br>
                      </div>
                    </div>
                  ");
                }
                echo("</div>
                  </div>
                <br>");
              }
              else if($_COOKIE['categoriaCookieServico'] == 3){
//Serviços de Barbas
                echo("
                <div class='container'>
                  <div class='row row-cols-8 row-cols-lg-4 g-2 g-lg-3'>
                ");
                foreach($servicosC as $key => $value){
                  echo("
                    <div class='col'>
                      <div class='card'>
                        <img src=".$value[0]." class='card-img-top' alt=''>
                        <div class='card-body>
                          <h5 class='card-title'>".$value[1]."</h5>
                          <p class='card-text'>".$value[2]."</p>
                        </div>
                        <br>
                      </div>
                    </div>
                  ");
                }
                echo("</div>
                  </div>
                <br>");
                  echo("
                <div class='container'>
                  <div class='row row-cols-8 row-cols-lg-4 g-2 g-lg-3'>
                ");
                foreach($servicosD as $key => $value){
                  echo("
                    <div class='col'>
                      <div class='card'>
                        <img src=".$value[0]." class='card-img-top' alt=''>
                        <div class='card-body>
                          <h5 class='card-title'>".$value[1]."</h5>
                          <p class='card-text'>".$value[2]."</p>
                        </div>
                        <br>
                      </div>
                    </div>
                  ");
                }
                echo("</div>
                  </div>
                <br>");
                echo("
                <div class='container'>
                  <div class='row row-cols-8 row-cols-lg-4 g-2 g-lg-3'>
                ");
                foreach($servicosB as $key => $value){
                  echo("
                    <div class='col'>
                      <div class='card'>
                        <img src=".$value[0]." class='card-img-top' alt=''>
                        <div class='card-body>
                          <h5 class='card-title'>".$value[1]."</h5>
                          <p class='card-text'>".$value[2]."</p>
                        </div>
                        <br>
                      </div>
                    </div>
                  ");
                }
                echo("</div>
                  </div>
                <br>");
                echo("
                <div class='container'>
                  <div class='row row-cols-8 row-cols-lg-4 g-2 g-lg-3'>
                ");
                foreach($servicosA as $key => $value){
                  echo("
                    <div class='col'>
                      <div class='card'>
                        <img src=".$value[0]." class='card-img-top' alt=''>
                        <div class='card-body>
                          <h5 class='card-title'>".$value[1]."</h5>
                          <p class='card-text'>".$value[2]."</p>
                        </div>
                        <br>
                      </div>
                    </div>
                  ");
                }
                echo("</div>
                  </div>
                <br>");
              }
              else if($_COOKIE['categoriaCookieServico'] == 4){
//Serviços de Tinturas
                echo("
                <div class='container'>
                  <div class='row row-cols-8 row-cols-lg-4 g-2 g-lg-3'>
                ");
                foreach($servicosD as $key => $value){
                  echo("
                    <div class='col'>
                      <div class='card'>
                        <img src=".$value[0]." class='card-img-top' alt=''>
                        <div class='card-body>
                          <h5 class='card-title'>".$value[1]."</h5>
                          <p class='card-text'>".$value[2]."</p>
                        </div>
                        <br>
                      </div>
                    </div>
                  ");
                }
                echo("</div>
                  </div>
                <br>");
                echo("
                <div class='container'>
                  <div class='row row-cols-8 row-cols-lg-4 g-2 g-lg-3'>
                ");
                foreach($servicosC as $key => $value){
                  echo("
                      <div class='col'>
                        <div class='card'>
                          <img src=".$value[0]." class='card-img-top' alt=''>
                          <div class='card-body>
                            <h5 class='card-title'>".$value[1]."</h5>
                            <p class='card-text'>".$value[2]."</p>
                          </div>
                          <br>
                        </div>
                      </div>
                  ");
                }
                echo("</div>
                  </div>
                <br>");
                echo("
                  <div class='container'>
                <div class='row row-cols-8 row-cols-lg-4 g-2 g-lg-3'>
                ");
                foreach($servicosB as $key => $value){
                  echo("
                    <div class='col'>
                      <div class='card'>
                        <img src=".$value[0]." class='card-img-top' alt=''>
                        <div class='card-body>
                          <h5 class='card-title'>".$value[1]."</h5>
                          <p class='card-text'>".$value[2]."</p>
                        </div>
                        <br>
                      </div>
                    </div>
                  ");
                }
                echo("</div>
                  </div>
                <br>");
                echo("
                <div class='container'>
                  <div class='row row-cols-8 row-cols-lg-4 g-2 g-lg-3'>
                ");
                foreach($servicosA as $key => $value){
                  echo("
                    <div class='col'>
                      <div class='card'>
                        <img src=".$value[0]." class='card-img-top' alt=''>
                        <div class='card-body>
                          <h5 class='card-title'>".$value[1]."</h5>
                          <p class='card-text'>".$value[2]."</p>
                        </div>
                        <br>
                      </div>
                    </div>
                  ");
                }
                echo("</div>
                  </div>
                <br>");
              }
            }
            else{
              echo("
                <div class='container'>
                  <div class='row row-cols-8 row-cols-lg-4 g-2 g-lg-3'>
                ");
                foreach($servicosB as $key => $value){
                  echo("
                    <div class='col'>
                      <div class='card'>
                        <img src=".$value[0]." class='card-img-top' alt=''>
                        <div class='card-body>
                          <h5 class='card-title'>".$value[1]."</h5>
                          <p class='card-text'>".$value[2]."</p>
                        </div>
                        <br>
                      </div>
                    </div>
                  ");
                }
                echo("</div>
                  </div>
                <br>");
                echo("
                <div class='container'>
                  <div class='row row-cols-8 row-cols-lg-4 g-2 g-lg-3'>
                ");
                foreach($servicosA as $key => $value){
                  echo("
                    <div class='col'>
                      <div class='card'>
                        <img src=".$value[0]." class='card-img-top' alt=''>
                        <div class='card-body>
                          <h5 class='card-title'>".$value[1]."</h5>
                          <p class='card-text'>".$value[2]."</p>
                        </div>
                        <br>
                      </div>
                    </div>
                  ");
                }
                echo("</div>
                  </div>
                <br>");
                echo("
                <div class='container'>
                  <div class='row row-cols-8 row-cols-lg-4 g-2 g-lg-3'>
                ");
                foreach($servicosC as $key => $value){
                  echo("
                    <div class='col'>
                      <div class='card'>
                        <img src=".$value[0]." class='card-img-top' alt=''>
                        <div class='card-body>
                          <h5 class='card-title'>".$value[1]."</h5>
                          <p class='card-text'>".$value[2]."</p>
                        </div>
                        <br>
                      </div>
                    </div>
                  ");
                }
                echo("</div>
                  </div>
                <br>");
                echo("
                <div class='container'>
                  <div class='row row-cols-8 row-cols-lg-4 g-2 g-lg-3'>
                ");
                foreach($servicosD as $key => $value){
                  echo("
                    <div class='col'>
                      <div class='card'>
                        <img src=".$value[0]." class='card-img-top' alt=''>
                        <div class='card-body>
                          <h5 class='card-title'>".$value[1]."</h5>
                          <p class='card-text'>".$value[2]."</p>
                        </div>
                        <br>
                      </div>
                    </div>
                  ");
                }
                echo("</div>
                  </div>
                <br>");
            }
          ?>
        </div>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

            <div class="contatos">
              <h2 class="fale" id="faleconosco"> <img src="img/telefone.png" class="icon">Fale conosco</h2>
              <h4 class="rede"> <img src="img/zap.png" class="icon"> (11) 94002-8922 <br>
                  <img src="img/facebook.png" class="icon"> Barba Negra <br>
                  <img src="img/instagram.png" class="icon"> @blackbeard <br> 
                  <img src="img/email.png" class="email"> barbeariabarbudo@hotmail.com
                   </h4>
              <!--SERVICOS<img src="img/hang.png" alt="">-->
            </div>
    </body>
</html>