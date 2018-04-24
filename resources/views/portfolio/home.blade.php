@extends('layouts.portfolio.estrutura')
@section('tituloPort', 'Portfólio Drogaria Wanessa')
@section('container')
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand ion-arrow-left-a back-portal" href="#" onclick="goBack()"> Voltar ao Portal</a>
        </nav>
        <section class="resume-section p-3 p-lg-5 d-flex d-column" id="about">
            <div class="my-auto">
                <h1 class="mb-0">Drogaria
                    <span class="text-primary">Wanessa</span>
                </h1>
                <div class="subheading mb-5">Av. Valeriano de Castro, 479 nº 55 - Centro - Formosa
                    <a href="mailto:name@email.com">drogaria@gmail.com</a>
                </div>
                <p class="mb-5">I am experienced in leveraging agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition.</p>
                <ul class="list-inline list-social-icons mb-0">
                    <li class="list-inline-item">
                        <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                </span>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                </span>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>
                </span>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="https://www.google.com.br/maps/place/-15.5363159,-47.3351549">
                <span class="fa-stack fa-lg">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-map-marker fa-stack-1x fa-inverse"></i>
                </span>
                        </a>
                    </li>
                </ul>
            </div>
        </section>

        <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="products">
            <div class="my-auto">
                <h2 class="mb-2">Produtos</h2>
                <p>
                    Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway will close the loop on focusing solely on the bottom line.
                </p>

                <div class="resume-item mb-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6 mb-2">
                                <img src="https://picsum.photos/400/400" class="img-fluid">
                            </div>
                            <div class="col-sm-6 mb-2">
                                <img src="https://picsum.photos/400/400" class="img-fluid">
                            </div>
                            <div class="col-sm-6 mb-2">
                                <img src="https://picsum.photos/400/400" class="img-fluid">
                            </div>
                            <div class="col-sm-6 mb-2">
                                <img src="https://picsum.photos/400/400" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="experience">
            <div class="my-auto">
                <h2 class="mb-5">Galeria</h2>

                <div class="resume-item d-flex flex-column flex-md-row mb-5" align="center">
                    <div class="resume-content mr-auto">
                        <h3 class="mb-0">
                            Veja as fotos da Drogaria Wanessa
                        </h3>

                        <div class="row">
                            <div class="col-sm-6">
                                <img src="https://picsum.photos/400/400" alt="">
                            </div>
                            <div class="col-sm-6">
                                <img src="https://picsum.photos/400/400" alt="">
                            </div>
                            <div class="col-sm-6">
                                <img src="https://picsum.photos/400/400" alt="">
                            </div>
                            <div class="col-sm-6">
                                <img src="https://picsum.photos/400/400" alt="">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="resume-item d-flex flex-column flex-md-row mb-5">
                    <div class="resume-content mr-auto">
                        <h3 class="mb-0">Web Developer</h3>
                        <div class="subheading mb-3">Intelitec Solutions</div>
                        <p>Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway will close the loop on focusing solely on the bottom line.</p>
                    </div>
                    <div class="resume-date text-md-right">
                        <span class="text-primary">December 2011 - March 2013</span>
                    </div>
                </div>

                <div class="resume-item d-flex flex-column flex-md-row mb-5">
                    <div class="resume-content mr-auto">
                        <h3 class="mb-0">Junior Web Designer</h3>
                        <div class="subheading mb-3">Shout! Media Productions</div>
                        <p>Podcasting operational change management inside of workflows to establish a framework. Taking seamless key performance indicators offline to maximise the long tail. Keeping your eye on the ball while performing a deep dive on the start-up mentality to derive convergence on cross-platform integration.</p>
                    </div>
                    <div class="resume-date text-md-right">
                        <span class="text-primary">July 2010 - December 2011</span>
                    </div>
                </div>

                <div class="resume-item d-flex flex-column flex-md-row">
                    <div class="resume-content mr-auto">
                        <h3 class="mb-0">Web Design Intern</h3>
                        <div class="subheading mb-3">Shout! Media Productions</div>
                        <p>Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits. Dramatically visualize customer directed convergence without revolutionary ROI.</p>
                    </div>
                    <div class="resume-date text-md-right">
                        <span class="text-primary">September 2008 - June 2010</span>
                    </div>
                </div>

            </div>
        </section>
    </div>
@endsection