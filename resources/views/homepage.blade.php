@extends('layouts.master')

@section('content')
        <div class="wrapper">
            <div class="parallax filter-gradient blue" data-color="blue">
                <div class="parallax-background">
                    <img class="parallax-background-image" src="backend_assets/img/template/bg1.jpg">
                </div>
                <div class= "container" id="home">
                    <div class="row">
                        <div class="col-md-5 hidden-xs">
                            <div class="parallax-image">
                                <img class="bitcoin" src="backend_assets/img/bitcoins.png" style="margin-top: 20px"/>
                            </div>
                        </div>
                        <div class="col-md-6 col-md-offset-1">
                            <div class="description">
                                <h2>Mantenha-se informado sobre a moeda do futuro</h2>
                                <br>
                                <h5>Bitcoin é uma criptomoeda descentralizada, sendo uma forma de dinheiro eletrônico. Inicialmente apresentada em 2008 na lista de discussão The Cryptography Mailing por um programador ou grupo de programadores sob o pseudônimo Satoshi Nakamoto, é considerada a primeira moeda digital mundial descentralizada, constituindo um sistema econômico alternativo (peer-to-peer electronic cash system), e responsável pelo ressurgimento do sistema bancário livre.</h5>
                            </div>
                            <div class="buttons">
                                <button class="btn btn-fill btn-neutral">
                                        <i class="fab fa-bitcoin"></i>
                                </button>
                                <button class="btn btn-fill btn-neutral">
                                        <i class="fab fa-bitcoin"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section section-gray section-clients" id="objetivo">
                <div class="container text-center">
                    <h4 class="header-text">Para que serve a cryptomoeda?</h4>
                    <p>
                        O Bitcoin permite transações financeiras sem intermediários, mas verificadas por todos usuários (nodos) da rede, que são gravadas em um banco de dados distribuídos, chamado de blockchain,[18] uma rede descentralizada,[19] isto é, uma estrutura sem uma entidade administradora central, o que torna inviável qualquer autoridade financeira ou governamental manipular a emissão e o valor da criptomoeda ou induzir a inflação com a produção de mais dinheiro.[20][21] No entanto, grandes movimentos especulativos de oferta e demanda influenciam na oscilação de seu valor no mercado de câmbio, sendo definido livremente durante as 24 horas do dia.<br>
                    </p>
                    <div class="logos">
                        <ul class="list-unstyled">
                            <li ><img src="backend_assets/img/logos/adobe.png"/></li>
                            <li ><img src="backend_assets/img/logos/zendesk.png"/></li>
                            <li ><img src="backend_assets/img/logos/ebay.png"/></i>
                            <li ><img src="backend_assets/img/logos/evernote.png"/></li>
                            <li ><img src="backend_assets/img/logos/airbnb.png"/></li>
                            <li ><img src="backend_assets/img/logos/zappos.png"/></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="section section-presentation" id="vantagens">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="description">
                                <h4 class="header-text">Isso é excelente! como faço para investir?</h4>
                                <h4><strong>Conheça o mercado</strong></h4>
                                <p>Antes de investir em bitcoin, o mais importante é que você invista um pouco do seu tempo para entender a respeito do mercado. Busque informações sobre o ativo: O que é bitcoin? Como funciona? Como guardá-lo?
                                    
                                    Investir algumas horas para entender o funcionamento do mercado pode evitar futuras perdas financeiras. Mesmo que você já esteja acostumado com outros investimentos, como em ações, busque saber a dinâmica particular das criptomoedas.</p>
                                <p>Try to make it very clear for the people browsing the page that this product will enrich their life and will make a nice addition to the homescreen.
                                <p>
                            </div>
                        </div>
                        <div class="col-md-5 col-md-offset-1 hidden-xs">
                            <img src="backend_assets/img/template/mac.png"/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section section-demo" id="integracao">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div id="description-carousel" class="carousel fade" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="item">
                                        <img src="backend_assets/img/template/examples/home_33.jpg" alt="">
                                    </div>
                                    <div class="item active">
                                        <img src="backend_assets/img/template/examples/home_22.jpg" alt="">
                                    </div>
                                    <div class="item">
                                        <img src="backend_assets/img/template/examples/home_11.jpg" alt="">
                                    </div>
                                </div>
                                <ol class="carousel-indicators carousel-indicators-blue">
                                    <li data-target="#description-carousel" data-slide-to="0" class=""></li>
                                    <li data-target="#description-carousel" data-slide-to="1" class="active"></li>
                                    <li data-target="#description-carousel" data-slide-to="2" class=""></li>
                                </ol>
                            </div>
                        </div>
                        <div class="col-md-5 col-md-offset-1">
                            <h4 class="header-text">Fácil Integração</h4>
                            <p>
                                Com todos os aplicativos que os usuários amam! Torne mais fácil para os usuários compartilhar, curtir, postar e twittar suas coisas favoritas no aplicativo. Certifique-se de que os usuários saibam que continuam conectados enquanto usam seu aplicativo.
                            </p>
                            <a href="http://www.creative-tim.com/product/awesome-landing-page" id="Demo3" class="btn btn-fill btn-lg btn-info" data-button="info">Faça parte disso</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section section-features">
                <div class="container">
                    <h4 class="header-text text-center">Features</h4>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card card-blue">
                                <div class="icon">
                                    <i class="pe-7s-note2"></i>
                                </div>
                                <div class="text">
                                    <h4>Gestão de Trade Online</h4>
                                    <p>São feitas todas suas operações na criptomoeda rapidamente em qualquer dispositivo.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card card-blue">
                                <div class="icon">
                                    <i class="pe-7s-bell"></i>
                                </div>
                                <h4>Notificações inteligentes nas mãos</h4>
                                <p>Lembretes automáticos por texto e e-mail garantem que você esteja sempre atualizado dos mercado.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card card-blue">
                                <div class="icon">
                                    <i class="pe-7s-graph1"></i>
                                </div>
                                <h4>Conheça melhor sua empresa agora</h4>
                                <p>Tenha analise completa dos seus ganhos e entenda como é facil ser trade.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section section-testimonial" id="resultados">
                <div class="container">
                    <h4 class="header-text text-center">O que as pessoas dizem...</h4>
                    <div id="carousel-example-generic" class="carousel fade" data-ride="carousel">
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item">
                                <div class="mask">
                                    <img src="backend_assets/img/faces/face-4.jpg">
                                </div>
                                <div class="carousel-testimonial-caption">
                                    <p>Jay Z, Produtor</p>
                                    <h3>"Eu absolutamente amo o seu app! É realmente incrível e parece incrível!</h3>
                                </div>
                            </div>
                            <div class="item active">
                                <div class="mask">
                                    <img src="backend_assets/img/faces/face-3.jpg">
                                </div>
                                <div class="carousel-testimonial-caption">
                                    <p>Drake, Artista</p>
                                    <h3>"Este é um dos aplicativos mais incríveis que eu já vi! Desejo-lhe sorte Bitcoin!"</h3>
                                </div>
                            </div>
                            <div class="item">
                                <div class="mask">
                                    <img src="backend_assets/img/faces/face-2.jpg">
                                </div>
                                <div class="carousel-testimonial-caption">
                                    <p>Rick Ross, Músico</p>
                                    <h3>"Amando isso! Apenas peguei no outro dia. Obrigado pelo trabalho que você colocou nisso."</h3>
                                </div>
                            </div>
                        </div>
                        <ol class="carousel-indicators carousel-indicators-blue">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="section section-no-padding">
                <div class="parallax filter-gradient blue" data-color="blue">
                    <div class="parallax-background">
                        <img class ="parallax-background-image" src="backend_assets/img/template/bg4.jpg"/>
                    </div>
                    <div class="info">
                        <h1>Ganhe dinheiro com investimento em Criptomoedas!</h1>
                        <p>Alavanque sua economia.</p>
                        <a href="{{route('register')}}" class="btn btn-neutral btn-lg btn-fill">Participar disso</a>
                    </div>
                </div>
            </div>
            <footer class="footer">
                <div class="container">
                    <nav class="pull-left">
                        <ul>
                            <li>
                                <a href="#">
                                Home
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                Company
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                Portfolio
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                Blog
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <div class="social-area pull-right">
                        <a style="font-size: 2em; color: white;">
                                <i class="fab fa-facebook"></i>
                        </a>
                        <a style="font-size: 2em; color: white;">
                                <i class="fab fa-instagram"></i>
                        </a>
                        <a style="font-size: 2em; color: white;">
                                <i class="fab fa-twitter"></i>
                        </a>
                    </div>
                </div>
            </footer>
        </div>
</div>
@endsection
