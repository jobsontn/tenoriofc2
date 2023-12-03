<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <title>Tenório Futebol Clube</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Jogos de confraternização da família Tenório e amigos. Desde o ano de 2014 que nos reunimos na
    véspera de Natal.">
    <meta name="keywords" content="Tenório, Natal, Futsal, Confraternização">
    <!-- Fontes e CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- https://realfavicongenerator.net/ -->
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/site.webmanifest">
    <link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#1b1c31">
    <link rel="shortcut icon" href="favicon/favicon.ico">
    <meta name="msapplication-TileColor" content="#c5b3bc">
    <meta name="msapplication-config" content="favicon/browserconfig.xml">
    <meta name="theme-color" content="#c5b3bc">
</head>

<body>
    <div class="site-wrap">
        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>

        <!-- Cabeçalho -->
        <header class="site-navbar py-4" role="banner" style="background-color: rgba(0,0,0,0.6);">

            <div class="container">
                <div class="d-flex align-items-center">
                    <div class="site-logo">
                        <a href="index.html">
                            <img src="images/logo.png" alt="Logo" style="height: 40px;">
                        </a>
                    </div>
                    <div class="ml-auto">
                        <nav class="site-navigation position-relative text-right" role="navigation">
                            <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                                <li><a href="#start_section" class="nav-link">Inicial</a></li>
                                <li><a href="#teams_section" class="nav-link">Equipes</a></li>
                                <li><a href="#games_section" class="nav-link">Jogos</a></li>
                                <li><a href="#stats_section" class="nav-link">Estatísticas</a></li>
                                <li><a href="#photos_section" class="nav-link">Fotos</a></li>
                                <li><a href="#movies_section" class="nav-link">Vídeos</a></li>
                            </ul>
                        </nav>

                        <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black float-right text-white"><span class="icon-menu h3 text-white"></span></a>
                    </div>
                </div>
            </div>

        </header>

        <!-- Destaque -->
        <div id="start_section" class="hero overlay" style="background-image: url('images/bg_5.jpg');">
            <div class="container">
                <div class="row align-items-center">
                    <div id="nextGame" class="col-lg-6 ">
                        <h1 class="text-white">Jogo de {{ $nextGame->name }}</h1>
                        <p>
                            Será a
                            {{ count($games) + 1 }}
                            ª edição do nosso amistoso de Natal.
                        </p>
                        <div id="date-countdown"></div>
                        <p>
                            @switch(\Carbon\Carbon::parse($nextGame->played_at)->format('N'))
                            @case(1)
                            segunda
                            @break
                            @case(2)
                            terça
                            @break
                            @case(3)
                            quarta
                            @break
                            @case(4)
                            quinta
                            @break
                            @case(5)
                            sexta
                            @break
                            @case(6)
                            sábado
                            @break
                            @case(7)
                            domingo
                            @break
                            @default
                            ERRO
                            @endswitch
                            , {{ \Carbon\Carbon::parse($nextGame->played_at)->format('d/m/Y G\hi')}}.
                            <!-- <a href="#" class="btn btn-primary py-3 px-4 mr-3">Equipes</a>
              <a href="#" class="more light">Learn More</a> -->
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Equipes -->
        <div id="teams_section" class="site-section">
            <div class="container">
                <div class="row">
                    <div class="col-6 title-section">
                        <h2 class="heading">Equipes</h2>
                    </div>
                    <div class="col-6 text-right">
                        <a href="#start_section" style="font-size: 1.8rem; color: white; text-align: center;">&#x25B2;</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 d-flex">
                        <div class="team-1 w-50 bg-rosa">
                            <div class="team-details w-100 text-center">
                                <img src="images/tenoriofc01.png" alt="Image" class="img-fluid img-team">
                                <h3>JUVENTUDE</h3>
                                <h4>(4V - 1E - 4D)</h4>
                                <ul class="list-unstyled">
                                    @foreach ($players1 as $player)
                                    <li>{{ $player->name }} ({{ $player->number }})</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="team-2 w-50 bg-azul">
                            <div class="team-details w-100 text-center">
                                <img src="images/tenoriofc02.png" alt="Image" class="img-fluid img-team">
                                <h3>EXPERIÊNCIA</h3>
                                <h4>(4V - 1E - 4D)</h4>
                                <ul class="list-unstyled">
                                    @foreach ($players2 as $player)
                                    <li>{{ $player->name }} ({{ $player->number }})</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Jogos -->
        <div id="games_section" class="site-section bg-dark">
            <div class="container">
                <div class="row">
                    <div class="col-6 title-section">
                        <h2 class="heading">Jogos</h2>
                    </div>
                    <div class="col-6 text-right">
                        <a href="#start_section" style="font-size: 1.8rem; color: white; text-align: center;">&#x25B2;</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="widget-next-match bg-ice">
                            <div class="widget-title">
                                <h3 class="text-white">Próximo Jogo</h3>
                            </div>
                            <div class="widget-body mb-3">
                                <div class="widget-vs">
                                    <div class="d-flex align-items-center justify-content-around justify-content-between w-100">
                                        <div class="team-2 text-center">
                                            <img src="images/camisa_rosa.png" alt="Image" class="mb-2">
                                            <h3>JUVENTUDE</h3>
                                        </div>
                                        <div>
                                            <span class="vs"><span>VS</span></span>
                                        </div>
                                        <div class="team-2 text-center">
                                            <img src="images/camisa_azul.png" alt="Image" class="mb-2">
                                            <h3>EXPERIÊNCIA</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="text-center widget-vs-contents mb-4">
                                <h4>{{ $nextGame->name }}</h4>
                                <p class="mb-5">
                                    <span class="d-block">
                                        {{ \Carbon\Carbon::parse($nextGame->played_at)->format('d')}}
                                        de
                                        @switch(\Carbon\Carbon::parse($nextGame->played_at)->format('n'))
                                        @case(1)
                                        janeiro
                                        @break
                                        @case(2)
                                        fevereiro
                                        @break
                                        @case(3)
                                        março
                                        @break
                                        @case(4)
                                        abril
                                        @break
                                        @case(5)
                                        maio
                                        @break
                                        @case(6)
                                        junho
                                        @break
                                        @case(7)
                                        julho
                                        @break
                                        @case(8)
                                        agosto
                                        @break
                                        @case(9)
                                        setembro
                                        @break
                                        @case(10)
                                        outubro
                                        @break
                                        @case(11)
                                        novembro
                                        @break
                                        @case(12)
                                        dezembro
                                        @break
                                        @default
                                        ERRO
                                        @endswitch
                                        de
                                        {{ \Carbon\Carbon::parse($nextGame->played_at)->format('Y')}}
                                    </span>
                                    <span class="d-block">
                                        {{ \Carbon\Carbon::parse($nextGame->played_at)->format('G:i')}}
                                        GMT-3
                                    </span>
                                    <strong class="d-block">{{ $nextGame->local }}</strong>
                                </p>

                                <div id="date-countdown2" class="pb-1"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">

                        <div class="widget-next-match">
                            <table class="table custom-table results-table">
                                <thead>
                                    <tr class="text-center">
                                        <th>Ano</th>
                                        <th>JUV x EXP</th>
                                        <th class="d-none d-sm-table-cell">Local</th>
                                        <th>Vídeo</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($games as $game)
                                    <tr class="text-center">
                                        <td>{{ \Carbon\Carbon::parse($game->played_at)->format('Y')}}</td>
                                        <td>
                                            <div>
                                                <svg xmlns="http://www.w3.org/2000/svg" style="fill: {{ $game->home_color }};" height="32" width="32" viewBox="0 0 640 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                                                    <path d="M211.8 0c7.8 0 14.3 5.7 16.7 13.2C240.8 51.9 277.1 80 320 80s79.2-28.1 91.5-66.8C413.9 5.7 420.4 0 428.2 0h12.6c22.5 0 44.2 7.9 61.5 22.3L628.5 127.4c6.6 5.5 10.7 13.5 11.4 22.1s-2.1 17.1-7.8 23.6l-56 64c-11.4 13.1-31.2 14.6-44.6 3.5L480 197.7V448c0 35.3-28.7 64-64 64H224c-35.3 0-64-28.7-64-64V197.7l-51.5 42.9c-13.3 11.1-33.1 9.6-44.6-3.5l-56-64c-5.7-6.5-8.5-15-7.8-23.6s4.8-16.6 11.4-22.1L137.7 22.3C155 7.9 176.7 0 199.2 0h12.6z" />
                                                </svg>
                                                <span>{{ $game->home_score }}</span>
                                                <span>X</span>
                                                <span>{{ $game->guest_score }}</span>
                                                <svg xmlns="http://www.w3.org/2000/svg" style="fill: {{ $game->guest_color }};" height="32" width="32" viewBox="0 0 640 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                                                    <path d="M211.8 0c7.8 0 14.3 5.7 16.7 13.2C240.8 51.9 277.1 80 320 80s79.2-28.1 91.5-66.8C413.9 5.7 420.4 0 428.2 0h12.6c22.5 0 44.2 7.9 61.5 22.3L628.5 127.4c6.6 5.5 10.7 13.5 11.4 22.1s-2.1 17.1-7.8 23.6l-56 64c-11.4 13.1-31.2 14.6-44.6 3.5L480 197.7V448c0 35.3-28.7 64-64 64H224c-35.3 0-64-28.7-64-64V197.7l-51.5 42.9c-13.3 11.1-33.1 9.6-44.6-3.5l-56-64c-5.7-6.5-8.5-15-7.8-23.6s4.8-16.6 11.4-22.1L137.7 22.3C155 7.9 176.7 0 199.2 0h12.6z" />
                                                </svg>
                                            </div>
                                        </td>
                                        <td class="d-none d-sm-table-cell">{{ $game->local }}</td>
                                        <td>
                                            <a href="{{ $game->youtube_link }}" target="_blank">
                                                <img src="images/youtube_play.png" alt="Play Youtube" class="camisa-1">
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- Estatísticas -->
        <div id="stats_section" class="site-section">
            <div class="container">
                <div class="row">
                    <div class="col-6 title-section">
                        <h2 class="heading">Estatísticas</h2>
                    </div>
                    <div class="col-6 text-right">
                        <a href="#start_section" style="font-size: 1.8rem; color: white; text-align: center;">&#x25B2;</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="widget-next-match">
                            <table class="table custom-table results-table">
                                <thead>
                                    <tr>
                                        <th colspan="3">GOLS</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($gols as $gol)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}º</td>
                                        <td><strong>{{ $gol->name }}</strong></td>
                                        <td>{{ $gol->gols }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-lg-6">

                        <div class="widget-next-match">
                            <table class="table custom-table results-table">
                                <thead>
                                    <tr>
                                        <th colspan="3">ASSISTÊNCIAS</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($assists as $assist)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}º</td>
                                        <td><strong>{{ $assist->name }}</strong></td>
                                        <td>{{ $assist->assists }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- Fotos -->
        <div id="photos_section" class="site-section bg-dark">
            <div class="container">
                <div class="row">
                    <div class="col-6 title-section">
                        <h2 class="heading">Fotos</h2>
                    </div>
                    <div class="col-6 text-right">
                        <a href="#start_section" style="font-size: 1.8rem; color: white; text-align: center;">&#x25B2;</a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12 d-flex flex-wrap">
                        @foreach ($galleries as $g)
                        @foreach ($g->pictures as $picture)
                        <div style="max-width: 280px; margin: 10px; {{ $loop->first ? 'display: block;' : 'display: none;' }}">
                            <a data-fancybox="gallery-{{ $g->name }}" class="grouped_elements" rel="group{{ $g->name }}" href="{{ $picture }}">
                                <img src="{{ $picture }}" alt="" class="img-fluid" />
                                <h4 class="text-red text-center mt-2">Natal {{ $g->name }}</h4>
                            </a>
                        </div>
                        @endforeach
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <!-- Vídeos -->
        <div id="movies_section" class="site-section">
            <div class="container">
                <div class="row">
                    <div class="col-6 title-section">
                        <h2 class="heading">Vídeos</h2>
                    </div>
                    <div class="col-6 text-right">
                        <a href="#start_section" style="font-size: 1.8rem; color: white; text-align: center;">&#x25B2;</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 d-flex flex-wrap">
                        @foreach ($videos as $video)
                        <div style="max-width: 300px; padding: 10px; margin: 10px;">
                            {!! $video->youtube_embed !!}
                            <h4 class="text-red">{{ $video->name }}</h4>
                        </div>
                        @endforeach
                    </div>
                </div>
                <!--
                <div class="row mb-3 text-center">
                    <div class="col-lg-4">
                        <img src="images/thumb_youtube.png" alt="Player do YouTube" style="width: 300px; margin-bottom: 10px;">
                        <h4 class="text-red">Natal 2023</h4>
                    </div>
                    <div class="col-lg-4">
                        <iframe src="https://www.youtube.com/embed/Rhp_eNUVVek?si=DsQ3sxZDvMuSGjkC" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen>
                        </iframe>
                        <h4 class="text-red">Natal 2022</h4>
                    </div>
                    <div class="col-lg-4">
                        <iframe src="https://www.youtube.com/embed/OaZ3rCsvvgk?si=SblW75sfTjRv1Ro2" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen>
                        </iframe>
                        <h4 class="text-red">Natal 2021</h4>
                    </div>
                </div>
                <div class="row mb-3 text-center">
                    <div class="col-lg-4">
                        <iframe src="https://www.youtube.com/embed/eedzVZ5UE8o?si=oFj4p115yN5LlQFS" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen>
                        </iframe>
                        <h4 class="text-red">Natal 2020</h4>
                    </div>
                    <div class="col-lg-4">
                        <iframe src="https://www.youtube.com/embed/wuXf6y5omss?si=OU4JCfSZnWR0JI8I" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen>
                        </iframe>
                        <h4 class="text-red">Natal 2019</h4>
                    </div>
                    <div class="col-lg-4">
                        <iframe src="https://www.youtube.com/embed/9Ujm8oeqwVQ?si=SFPIowIbaax---93" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen>
                        </iframe>
                        <h4 class="text-red">Natal 2018</h4>
                    </div>
                </div>
                <div class="row mb-3 text-center">
                    <div class="col-lg-4">
                        <iframe src="https://www.youtube.com/embed/b_32XD-6f0k?si=l2onsHmUaUoXae_S" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen>
                        </iframe>
                        <h4 class="text-red">Natal 2017</h4>
                    </div>
                    <div class="col-lg-4">
                        <iframe src="https://www.youtube.com/embed/U2JWxLrpw98?si=70mYIqhZ97i-jh0o" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen>
                        </iframe>
                        <h4 class="text-red">Natal 2016</h4>
                    </div>
                    <div class="col-lg-4">
                        <iframe src="https://www.youtube.com/embed/uHkkZQHuU6g?si=l4cscOB4w8gw2UB6" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen>
                        </iframe>
                        <h4 class="text-red">Natal 2015</h4>
                    </div>
                </div>
                 -->
            </div>

            <br>

        </div>

        <!-- Rodapé -->
        <footer class="footer-section">
            <div class="container">
                <div class="row text-right">
                    <div class="col">
                        <a href="#start_section" style="font-size: 1.8rem; color: white; text-align: center;">&#x25B2;</a>
                    </div>
                </div>
                <div class="row text-center" style="display: flex; justify-content: center;">
                    <img src="images/logo.png" alt="Logo" class="img-fluid">
                </div>
                <div class="row text-center">
                    <div class="col-md-12">
                        <div class=" pt-5">
                            <p>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;
                                <script>
                                    document.write(new Date().getFullYear());
                                </script> All rights reserved | Jobson Tenório do Nascimento
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </footer>
    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/bootstrap-datepicker.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.mb.YTPlayer.min.js"></script>
    <script src="js/main.js"></script>
    <script>
        jQuery(document).ready(function($) {
            var siteCountDown = function() {

                $('#date-countdown, #date-countdown2').countdown('{{ \Carbon\Carbon::parse($nextGame->played_at)->format("Y/m/d G:i:s")}}', function(event) {
                //$('#date-countdown, #date-countdown2').countdown('2023/12/24 15:00:00', function(event) {
                    var $this = $(this).html(event.strftime('' +
                        '<span class="countdown-block"><span class="label">%w</span> semanas </span>' +
                        '<span class="countdown-block"><span class="label">%d</span> dias </span>' +
                        '<span class="countdown-block"><span class="label">%H</span> horas </span>' +
                        '<span class="countdown-block"><span class="label">%M</span> min </span>' +
                        '<span class="countdown-block"><span class="label">%S</span> seg</span>'));
                });

            };
            siteCountDown();
        });
    </script>
</body>

</html>
