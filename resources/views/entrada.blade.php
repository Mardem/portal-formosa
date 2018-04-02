@extends('layouts.default.site')
@section('container')
  <div class="jumbotron jumbotron-fluid entrada">
    <div class="container-pesquisa" align="center">
      <input type="text" class="pesquisa" placeholder=" Digite o que você procura">
    </div>
    <div class="container txt-entrada">
      <h1 class="display-3">Portal Formosa/GO</h1>
      <p class="lead">
        O portal de Formosa com muito mais conteúdo e mais interatividade. <br>
        Encontre eventos, festas, encontros e muito mais na cidade de Formosa. <br>
        Saiba onde econtrar festas facilmente em: Fábrica Hall, Expoagro e <br> em Locais Próximos.
      </p>
      <p class="txt-empresas">
        Veja também nossa lista de empresas cadastradas, tenha uma acesso direto às empresas em <br>
        destaque como Padarias, Consultórios de Dentistas e Pontos Turísticos em Formosa e Região.<br>

      </p>
      <p class="lead">
        <a class="link" data-attr="Saiba mais" href="Jumbo action link"
           role="button"><span>Saiba Mais</span></a>
      </p>
    </div>
  </div>

  <section class="destaques-p">
    <div class="container">
      <div class="row">
        <div class="owl-carousel owl-theme">
          <div class="item">
            <div class="card card-plus">
              <img class="card-img-top" src="/img/picsum.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title card-title-pf">
                  <a href="#linkNoticia">Padaria FSA 1</a>
                </h5>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="card card-plus">
              <img class="card-img-top" src="/img/picsum.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title card-title-pf">
                  <a href="#linkNoticia">Padaria FSA 2</a>
                </h5>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="card card-plus">
              <img class="card-img-top" src="/img/picsum.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title card-title-pf">
                  <a href="#linkNoticia">Padaria FSA 3</a>
                </h5>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="card card-plus">
              <img class="card-img-top" src="/img/picsum.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title card-title-pf">
                  <a href="#linkNoticia">Padaria FSA 4</a>
                </h5>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="card card-plus">
              <img class="card-img-top" src="/img/picsum.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title card-title-pf">
                  <a href="#linkNoticia">Padaria FSA 5</a>
                </h5>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="card card-plus">
              <img class="card-img-top" src="/img/picsum.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title card-title-pf">
                  <a href="#linkNoticia">Padaria FSA 6</a>
                </h5>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="card card-plus">
              <img class="card-img-top" src="/img/picsum.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title card-title-pf">
                  <a href="#linkNoticia">Padaria FSA 7</a>
                </h5>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="card card-plus">
              <img class="card-img-top" src="/img/picsum.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title card-title-pf">
                  <a href="#linkNoticia">Padaria FSA 8</a>
                </h5>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="card card-plus">
              <img class="card-img-top" src="/img/picsum.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title card-title-pf">
                  <a href="#linkNoticia">Padaria FSA 9</a>
                </h5>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="card card-plus">
              <img class="card-img-top" src="/img/picsum.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title card-title-pf">
                  <a href="#linkNoticia">Padaria FSA 10</a>
                </h5>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="card card-plus">
              <img class="card-img-top" src="/img/picsum.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title card-title-pf">
                  <a href="#linkNoticia">Padaria FSA 11</a>
                </h5>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="card card-plus">
              <img class="card-img-top" src="/img/picsum.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title card-title-pf">
                  <a href="#linkNoticia">Padaria FSA 12</a>
                </h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="categoria-destaque">
    <div class="container">
      <h2 class="texto-descricao-categorias">
        Encontre <b class="txt-destaque">eventos</b>, <b class="txt-destaque">festas</b> e <b
            class="txt-destaque">locais de shows</b>.
        <span class="mais-texto-destaque">Saiba onde encontrar os pontos turísticos como: <b
              class="txt-destaque">Salto do
                    Itiquira</b> ,
                    <b class="txt-destaque">Hoteís Fazenda </b> e <b class="txt-destaque">Expoagro</b>.</span>
      </h2>
      <div class="row">
        <div class="col-sm-6">
          <figure>
            <img src="/img/destaques/fundo-destaque-padaria-v2.svg" alt="">
          </figure>
        </div>

        <div class="col-sm-6">
          <figure>
            <img src="/img/destaques/fundo-destaque-pizzaria.svg" alt="">
          </figure>
        </div>
        <div class="col-sm-6">
          <figure>
            <img src="/img/destaques/fundo-destaque-dentista.svg" alt="">
          </figure>
        </div>
        <div class="col-sm-6">
          <figure>
            <img src="/img/destaques/fundo-destaque-hospital.svg" alt="">
          </figure>
        </div>
        <div class="col-sm-6">
          <!-- Conveniência -->
          <figure>
            <img src="/img/destaques/fundo-destaque-farmacia.svg" alt="">
          </figure>
        </div>
        <div class="col-sm-6">
          <!-- Farmácia -->
          <figure>
            <img src="/img/destaques/fundo-destaque-hospital.svg" alt="">
          </figure>
        </div>
      </div>
    </div>
  </section>
  <hr>
  <section>
    <div align="center">
      <a href="#linkCadastro" class="link-sem-traco">
        <div class="cadastro-empresa">
          <h2>Cadastre sua empresa</h2>
          <p class="lead">
            Cadastre sua empresa em nosso portal e <b>anuncie grátis</b> em nosso site.
            Tenha acesso a uma administração gratuita para cadastrar sua empresa e já começar a
            divulgar!
          </p>
        </div>
      </a>
    </div>
  </section>
  <hr>
  <br><br>
  <section class="noticias-destaque">

    <!--
        Serão 6 notícias vindas do Blog ambas serão as mais atuais as recentemente postada
        Uma categoria de filtro deverá ser criada para que o usuário possa alterar as notícias
        Lembrando: As 6 notícias, exemplo:
        Se ele clicar em Educação essas 6 notícias em destaques aleatório passam a ser 6
        notícias em destaque de EDUCAÇÃO.

        Usar de links buscando dados do servidor como foi usado na Biblioteca
    -->
    <div class="container">
      <div class="row">
        <div class="col-sm-4 card-noticias">
          <div class="card">
            <img class="card-img-top" src="/img/picsum.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title card-title-pf">
                <a href="#linkNoticia">Link da notícia</a>
              </h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk
                of the card's content.</p>
            </div>
          </div>
        </div>

        <div class="col-sm-4 card-noticias">
          <div class="card">
            <img class="card-img-top" src="/img/picsum.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title card-title-pf">
                <a href="#linkNoticia">Link da notícia</a>
              </h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk
                of the card's content.</p>
            </div>
          </div>
        </div>

        <div class="col-sm-4 card-noticias">
          <div class="card">
            <img class="card-img-top" src="/img/picsum.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title card-title-pf">
                <a href="#linkNoticia">Link da notícia</a>
              </h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk
                of the card's content.</p>
            </div>
          </div>
        </div>

        <div class="col-sm-4 card-noticias">
          <div class="card">
            <img class="card-img-top" src="/img/picsum.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title card-title-pf">
                <a href="#linkNoticia">Link da notícia</a>
              </h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk
                of the card's content.</p>
            </div>
          </div>
        </div>

        <div class="col-sm-4 card-noticias">
          <div class="card">
            <img class="card-img-top" src="/img/picsum.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title card-title-pf">
                <a href="#linkNoticia">Link da notícia</a>
              </h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk
                of the card's content.</p>
            </div>
          </div>
        </div>

        <div class="col-sm-4 card-noticias">
          <div class="card">
            <img class="card-img-top" src="/img/picsum.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title card-title-pf">
                <a href="#linkNoticia">Link da notícia</a>
              </h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk
                of the card's content.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="todas-noticias">
    <div class="container py-4">
      <div class="row">

        <div class="col-sm-8"> <!-- Inicio - Noticias -->
          <br><br>
          <div class="card w-100 mg-b-15">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">
              <table>
                <tbody>
                <tr>
                  <td>
                    <img src="/img/tests/lorem.svg" width="100">
                  </td>
                  <td style="padding-left: 10px">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid amet commodi debitis dignissimos doloribus eaque eos esse eveniet ex excepturi impedit modi odit qui, reiciendis repudiandae saepe sapiente sint voluptatibus.
                  </td>
                </tr>
                </tbody>
              </table>
              </p>
              <a href="#" class="btn btn-primary">Saber mais</a>
            </div>
          </div>
          <div class="card w-100 mg-b-15">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">
              <table>
                <tbody>
                <tr>
                  <td>
                    <img src="/img/tests/lorem.svg" width="100">
                  </td>
                  <td style="padding-left: 10px">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid amet commodi debitis dignissimos doloribus eaque eos esse eveniet ex excepturi impedit modi odit qui, reiciendis repudiandae saepe sapiente sint voluptatibus.
                  </td>
                </tr>
                </tbody>
              </table>
              </p>
              <a href="#" class="btn btn-primary">Saber mais</a>
            </div>
          </div>
          <div class="card w-100 mg-b-15">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">
              <table>
                <tbody>
                <tr>
                  <td>
                    <img src="/img/tests/lorem.svg" width="100">
                  </td>
                  <td style="padding-left: 10px">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid amet commodi debitis dignissimos doloribus eaque eos esse eveniet ex excepturi impedit modi odit qui, reiciendis repudiandae saepe sapiente sint voluptatibus.
                  </td>
                </tr>
                </tbody>
              </table>
              </p>
              <a href="#" class="btn btn-primary">Saber mais</a>
            </div>
          </div>
          <div class="card w-100 mg-b-15">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">
              <table>
                <tbody>
                <tr>
                  <td>
                    <img src="/img/tests/lorem.svg" width="100">
                  </td>
                  <td style="padding-left: 10px">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid amet commodi debitis dignissimos doloribus eaque eos esse eveniet ex excepturi impedit modi odit qui, reiciendis repudiandae saepe sapiente sint voluptatibus.
                  </td>
                </tr>
                </tbody>
              </table>
              </p>
              <a href="#" class="btn btn-primary">Saber mais</a>
            </div>
          </div>
          <div class="card w-100 mg-b-15">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">
              <table>
                <tbody>
                <tr>
                  <td>
                    <img src="/img/tests/lorem.svg" width="100">
                  </td>
                  <td style="padding-left: 10px">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid amet commodi debitis dignissimos doloribus eaque eos esse eveniet ex excepturi impedit modi odit qui, reiciendis repudiandae saepe sapiente sint voluptatibus.
                  </td>
                </tr>
                </tbody>
              </table>
              </p>
              <a href="#" class="btn btn-primary">Saber mais</a>
            </div>
          </div>
          <div class="card w-100 mg-b-15">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">
              <table>
                <tbody>
                <tr>
                  <td>
                    <img src="/img/tests/lorem.svg" width="100">
                  </td>
                  <td style="padding-left: 10px">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid amet commodi debitis dignissimos doloribus eaque eos esse eveniet ex excepturi impedit modi odit qui, reiciendis repudiandae saepe sapiente sint voluptatibus.
                  </td>
                </tr>
                </tbody>
              </table>
              </p>
              <a href="#" class="btn btn-primary">Saber mais</a>
            </div>
          </div>
        </div> <!-- Fim - notícias -->

        <!-- Inicio barra lateral de informações -->
        <div class="col-sm-4">
          <div class="panel">
            <div class="panel-header">
              <p class="title-panel">Economia</p>
            </div>
            <div class="panel-body">
              <div class="container">
                <div class="info-cotacao">
                  <div class="row">
                    <div class="col-sm-6">
                      <p class="lead">
                        DÓLAR COMERCIAL
                      </p>
                      <b id="valor-dolar" class="lead info-cotacao">
                        <div class="loader"></div>
                      </b>
                      <hr>
                    </div>
                    <div class="col-sm-6">
                      <p class="lead">
                        EURO COMERCIAL
                      </p>
                      <b id="valor-euro" class="lead info-cotacao">
                        <div class="loader"></div>
                      </b>
                      <hr>
                    </div>

                    <a href="#" class="mais-informacoes-economia ion-plus-round">
                      Notícias sobre economia <i class="ion-share"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="panel">
            <div class="panel-header">
              <p class="title-panel">Clima</p>
            </div>
            <div class="panel-body">
              <p class="lead">
                TEMPO EM FORMOSA
              </p>
            </div>
          </div>
          <div class="panel">
            <div class="panel-header">
              <p class="title-panel">
                Plantão de farmácia
              </p>
            </div>
            <div class="panel-body">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aspernatur cum error ipsa
              officiis porro quasi saepe sint suscipit. At autem excepturi magnam non rem saepe soluta.
              Debitis, delectus, fuga?
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut mollitia non quisquam ullam
              voluptates. Corporis, ducimus eligendi error magnam maxime nisi obcaecati quia, sint sit
              tempora temporibus totam velit vero.
            </div>
          </div>

          <div class="panel">
            <div class="panel-header">
              <p class="title-panel">Mais lidos</p>
            </div>
            <div class="panel-body">
              <table class="table-noticias">
                <tbody>
                <tr>
                  <td class="numero">1</td>
                  <td class="preview-noticia">
                    <a href="#">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium ad
                      deleniti eum facere fuga harum hic in iste, laudantium maiores, natus nemo,
                    </a>
                  </td>
                </tr>
                <tr>
                  <td class="numero">2</td>
                  <td class="preview-noticia">
                    <a href="#">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium ad
                      deleniti eum facere fuga harum hic in iste, laudantium maiores, natus nemo,
                    </a>
                  </td>
                </tr>

                <tr>
                  <td class="numero">3</td>
                  <td class="preview-noticia">
                    <a href="#">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium ad
                      deleniti eum facere fuga harum hic in iste, laudantium maiores, natus nemo,
                    </a>
                  </td>
                </tr>

                <tr>
                  <td class="numero">4</td>
                  <td class="preview-noticia">
                    <a href="#">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium ad
                      deleniti eum facere fuga harum hic in iste, laudantium maiores, natus nemo,
                    </a>
                  </td>
                </tr>

                <tr>
                  <td class="numero">5</td>
                  <td class="preview-noticia">
                    <a href="#">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium ad
                      deleniti eum facere fuga harum hic in iste, laudantium maiores, natus nemo,
                    </a>
                  </td>
                </tr>

                </tbody>
              </table>
            </div>
          </div>
        </div> <!-- Fim barra lateral de informações -->

      </div>
    </div>
  </section>

  <section class="pesquisa-categoria">
    <div class="container">
      <h5 class="display-4">Busque por categorias</h5>
      <p class="lead">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus commodi cupiditate deserunt dolore
        explicabo facilis fuga fugiat id inventore maiores molestiae, nobis omnis porro, quibusdam reiciendis,
        similique sit tempora! Eligendi.
      </p>
      <div align="center">
        <input type="text" id="jetsSearch" class="pesquisa-categoria-input"
               placeholder=" Digite o que você procura">
        <div class="mais-pesquisados">
          <div class="container">
            <div class="row">
              <a href="#">Padaria</a><a href="#">Padaria</a><a href="#">Padaria</a><a href="#">Padaria</a><a
                  href="#">Padaria</a><a href="#">Padaria</a><a href="#">Padaria</a><a href="#">Padaria</a><a
                  href="#">Padaria</a><a href="#">Padaria</a><a href="#">Padaria</a><a href="#">Padaria</a><a
                  href="#">Padaria</a><a href="#">Padaria</a><a href="#">Padaria</a><a href="#">Padaria</a><a
                  href="#">Padaria</a><a href="#">Padaria</a><a href="#">Padaria</a><a href="#">Padaria</a><a
                  href="#">Padaria</a><a href="#">Padaria</a><a href="#">Padaria</a>
            </div>
          </div>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-sm-4">
          <p class="lead">Cidades de GO</p>
          <ul class="lista-categorias search-category-pf">
            <li><a href="">Abadia de Goiás</a></li>
            <li><a href="">Abadiânia</a></li>
            <li><a href="">Acreúna</a></li>
            <li><a href="">Adelândia</a></li>
            <li><a href="">Água Fria de Goiás</a></li>
            <li><a href="">Água Limpa</a></li>
            <li><a href="">Águas Lindas de Goiás</a></li>
            <li><a href="">Alexânia</a></li>
            <li><a href="">Aloândia</a></li>
            <li><a href="">Alto Horizonte</a></li>
            <li><a href="">Alto Paraíso de Goiás</a></li>
            <li><a href="">Alvorada do Norte</a></li>
            <li><a href="">Amaralina</a></li>
            <li><a href="">Americano do Brasil</a></li>
            <li><a href="">Amorinópolis</a></li>
            <li><a href="">Anápolis</a></li>
            <li><a href="">Anhanguera</a></li>
            <li><a href="">Anicuns</a></li>
            <li><a href="">Aparecida de Goiânia</a></li>
            <li><a href="">Aparecida do Rio Doce</a></li>
          </ul>
        </div>
        <div class="col-sm-4">
          <p class="lead">Cidades de RJ</p>
          <ul class="lista-categorias search-category-pf">
            <li><a href="">Angra dos Reis</a></li>
            <li><a href="">Aperibé</a></li>
            <li><a href="">Araruama</a></li>
            <li><a href="">Areal</a></li>
            <li><a href="">Armação de Búzios</a></li>
            <li><a href="">Arraial do Cabo</a></li>
            <li><a href="">Barra do Piraí</a></li>
            <li><a href="">Barra Mansa</a></li>
            <li><a href="">Belford Roxo</a></li>
            <li><a href="">Bom Jardim</a></li>
            <li><a href="">Bom Jesus do Itabapoana</a></li>
            <li><a href="">Cabo Frio</a></li>
            <li><a href="">Cachoeiras de Macacu</a></li>
            <li><a href="">Cambuci</a></li>
            <li><a href="">Campos dos Goytacazes</a></li>
            <li><a href="">Cantagalo</a></li>
            <li><a href="">Carapebus</a></li>
            <li><a href="">Cardoso Moreira</a></li>
            <li><a href="">Carmo</a></li>
            <li><a href="">Casimiro de Abreu</a></li>
          </ul>
        </div>
        <div class="col-sm-4">
          <p class="lead">Cidades de TO</p>
          <ul class="lista-categorias search-category-pf">
            <li><a href="">Sandolândia</a></li>
            <li><a href="">Santa Fé do Araguaia</a></li>
            <li><a href="">Sítio Novo do Tocantins</a></li>
            <li><a href="">São Valério da Natividade</a></li>
            <li><a href="">Rio da Conceição</a></li>
            <li><a href="">Rio dos Bois</a></li>
            <li><a href="">Rio Sono</a></li>
            <li><a href="">Sampaio</a></li>
            <li><a href="">Palmeirante</a></li>
            <li><a href="">Palmas</a></li>
            <li><a href="">Oliveira de Fátima</a></li>
            <li><a href="">Lajeado</a></li>
            <li><a href="">Lagoa do Tocantins</a></li>
            <li><a href="">Luzinópolis</a></li>
            <li><a href="">Lagoa da Confusão</a></li>
            <li><a href="">Itaporã do Tocantins</a></li>
            <li><a href="">Itaguatins</a></li>
            <li><a href="">Itacajá</a></li>
            <li><a href="">Ipueiras</a></li>
            <li><a href="">Gurupi</a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
@endsection

@section('styles-src')
  <link rel="stylesheet" href="{{ asset('css/main.css') }}">
@endsection

@section('script-src')
  <script src="{{ asset('/assets/owl/dist/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('/node_modules/jets/jets.min.js') }}"></script>
  <script src="{{ asset('/js/home.js') }}"></script>
  <script src="{{ asset('/js/default.js') }}"></script>
@endsection