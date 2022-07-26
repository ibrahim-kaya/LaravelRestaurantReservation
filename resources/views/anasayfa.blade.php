@extends('layouts.main')

@section('styles')

    <link type="text/css" rel="stylesheet" href="css/jquery-ui.min.css"/>
    <link type="text/css" rel="stylesheet" href="css/jquery-ui.theme.min.css"/>
    <link type="text/css" rel="stylesheet" href="css/jquery-ui.structure.min.css"/>


    <style>

        .slide-in-top {
            animation: slide-in-top 0.5s cubic-bezier(0.250, 0.460, 0.450, 0.940) both;
        }

        .slide-in-elliptic-bottom-fwd {
            animation: slide-in-elliptic-bottom-fwd 0.7s cubic-bezier(0.250, 0.460, 0.450, 0.940) both;
        }

        .slide-out-bottom {
            animation: slide-out-bottom 1s cubic-bezier(0.550, 0.085, 0.680, 0.530) both;
        }

        .slide-out-blurred-bottom {
            animation: slide-out-blurred-bottom 0.45s cubic-bezier(0.755, 0.050, 0.855, 0.060) both;
        }

        @keyframes slide-in-top {
            0% {
                transform: translateY(-1000px);
                opacity: 0;
            }
            100% {
                transform: translateY(0);
                opacity: 1;
            }
        }


        @keyframes slide-in-elliptic-bottom-fwd {
            0% {
                transform: translateY(600px) rotateX(30deg) scale(0);
                transform-origin: 50% 100%;
                opacity: 0;
            }
            100% {
                transform: translateY(0) rotateX(0) scale(1);
                transform-origin: 50% -1400px;
                opacity: 1;
            }
        }

        @keyframes slide-out-bottom {
            0% {
                transform: translateY(0);
                opacity: 1;
            }
            100% {
                transform: translateY(1000px);
                opacity: 0;
            }
        }

        @keyframes slide-out-blurred-bottom {
            0% {
                transform: translateY(0) scaleY(1) scaleX(1);
                transform-origin: 50% 50%;
                filter: blur(0);
                opacity: 1;
            }
            100% {
                transform: translateY(1000px) scaleY(2) scaleX(0.2);
                transform-origin: 50% 100%;
                filter: blur(40px);
                opacity: 0;
            }
        }

    </style>

@endsection

@section('content')
    <!-- Home -->
    <div id="home" class="banner-area">

        <!-- Backgound Image -->
        <div class="bg-image bg-parallax overlay" style="background-image:url(./img/background02.jpg)"></div>
        <!-- /Backgound Image -->

        <div class="home-wrapper">

            <div class="col-md-10 col-md-offset-1 text-center">
                <div class="home-content">
                    <h1 class="white-text">{{ $config['home_header_title'] }}</h1>
                    <h4 class="white-text lead">{{ $config['home_header_text'] }}</h4>
                    @if($config['show_menu'] == '1')
                        <a href="index.html#menu">
                            <button class="main-button">Menüyü Keşfedin</button>
                        </a>
                    @endif
                </div>
            </div>

        </div>

    </div>
    <!-- /Home -->

    <!-- About -->
    <div id="about" class="section">

        <!-- container -->
        <div class="container">

            <!-- row -->
            <div class="row">

                <!-- section header -->
                <div class="section-header text-center">
                    <h4 class="sub-title">Hakkımızda</h4>
                    <h2 class="title">{{ $config['store_name'] }}</h2>
                </div>
                <!-- /section header -->

                <!-- about content -->
                <div class="col-md-5">
                    <h4 class="lead">{{ $config['about_title'] }}</h4>
                </div>
                <!-- /about content -->

                <!-- about content -->
                <div class="col-md-7">
                    <p>{{ $config['about_text'] }}</p>
                </div>
                <!-- /about content -->

                <!-- Gallery Slider -->
                <div class="col-md-12">
                    <div id="Gallery" class="owl-carousel owl-theme">

                        <!-- single column -->
                        <div class="Gallery-item">

                            <!-- single image -->
                            <div class="Gallery-img" style="background-image:url(./img/image01.jpg)"></div>
                            <!-- /single image -->

                        </div>
                        <!-- single column -->

                        <!-- single column -->
                        <div class="Gallery-item">

                            <!-- single image -->
                            <div class="Gallery-img" style="background-image:url(./img/image02.jpg)"></div>
                            <!-- /single image -->

                            <!-- single image -->
                            <div class="Gallery-img" style="background-image:url(./img/image03.jpg)"></div>
                            <!-- /single image -->

                        </div>
                        <!-- single column -->

                        <!-- single column -->
                        <div class="Gallery-item">

                            <div class="item-column">
                                <!-- single image -->
                                <div class="Gallery-img" style="background-image:url(./img/image04.jpg)"></div>
                                <!-- /single image -->

                                <!-- single image -->
                                <div class="Gallery-img" style="background-image:url(./img/image05.jpg)"></div>
                                <!-- /single image -->
                            </div>

                            <div class="item-column">
                                <!-- single image -->
                                <div class="Gallery-img" style="background-image:url(./img/image06.jpg)"></div>
                                <!-- /single image -->

                                <!-- single image -->
                                <div class="Gallery-img" style="background-image:url(./img/image07.jpg)"></div>
                                <!-- /single image -->
                            </div>

                        </div>
                        <!-- /single column -->

                    </div>
                </div>
                <!-- /Gallery Slider -->


            </div>
            <!-- /row -->

        </div>
        <!-- /container -->

    </div>
    <!-- /About -->


    @if($config['show_menu'] == '1')
        <!-- Menu -->
        <div id="menu" class="section">

            <!-- Backgound Image -->
            <div class="bg-image bg-parallax overlay" style="background-image:url(./img/background01.jpg)"></div>
            <!-- /Backgound Image -->

            <!-- container -->
            <div class="container">

                <!-- row -->
                <div class="row">

                    <div class="section-header text-center">
                        <h4 class="sub-title">Keşfedin</h4>
                        <h2 class="title white-text">Menümüz</h2>
                    </div>

                    <!-- menu nav -->
                    <ul class="menu-nav">
                        @php
                            $tabactive = 'active';
                            $paneactive = 'active';
                        @endphp

                        @if(count($menuitems['yemek']))
                            <li class="{{ $tabactive }}"><a data-toggle="tab" href="#menu1">Yiyecekler</a></li>
                            @php $tabactive = ''; @endphp
                        @endif

                        @if(count($menuitems['icecek']))
                            <li class="{{ $tabactive }}"><a data-toggle="tab" href="#menu2">İçecekler</a></li>
                            @php $tabactive = ''; @endphp
                        @endif

                        @if(count($menuitems['anayemek']))
                            <li class="{{ $tabactive }}"><a data-toggle="tab" href="#menu3">Ana Yemekler</a></li>
                            @php $tabactive = ''; @endphp
                        @endif

                        @if(count($menuitems['tatli']))
                            <li class="{{ $tabactive }}"><a data-toggle="tab" href="#menu4">Tatlılar</a></li>
                            @php $tabactive = ''; @endphp
                        @endif
                    </ul>
                    <!-- /menu nav -->

                    <!-- menu content -->
                    <div id="menu-content" class="tab-content">

                        @if(count($menuitems['yemek']))
                            <!-- menu1 -->
                            <div id="menu1" class="tab-pane fade in {{ $paneactive }}">
                                @php $paneactive = ''; @endphp

                                <div class="col-md-6">
                                    @foreach($menuitems['yemek'] as $item)
                                        @if($loop->index % 2 == 0)
                                            <!-- single dish -->
                                            <div class="single-dish">
                                                <div class="single-dish-heading">
                                                    <h4 class="name">{{ $item->name }}</h4>
                                                    <h4 class="price">{{ $item->price }}₺</h4>
                                                </div>
                                                <p>{{ $item->description }}</p>
                                            </div>
                                            <!-- /single dish -->
                                        @endif
                                    @endforeach
                                </div>

                                <div class="col-md-6">
                                    @foreach($menuitems['yemek'] as $item)
                                        @if($loop->index % 2 != 0)
                                            <!-- single dish -->
                                            <div class="single-dish">
                                                <div class="single-dish-heading">
                                                    <h4 class="name">{{ $item->name }}</h4>
                                                    <h4 class="price">{{ $item->price }}₺</h4>
                                                </div>
                                                <p>{{ $item->description }}</p>
                                            </div>
                                            <!-- /single dish -->
                                        @endif
                                    @endforeach
                                </div>

                            </div>
                            <!-- /menu1 -->
                        @endif

                        @if(count($menuitems['icecek']))
                            <!-- menu2 -->
                            <div id="menu2" class="tab-pane fade in {{ $paneactive }}">
                                @php $paneactive = ''; @endphp

                                <div class="col-md-6">
                                    @foreach($menuitems['icecek'] as $item)
                                        @if($loop->index % 2 == 0)
                                            <!-- single dish -->
                                            <div class="single-dish">
                                                <div class="single-dish-heading">
                                                    <h4 class="name">{{ $item->name }}</h4>
                                                    <h4 class="price">{{ $item->price }}₺</h4>
                                                </div>
                                                <p>{{ $item->description }}</p>
                                            </div>
                                            <!-- /single dish -->
                                        @endif
                                    @endforeach
                                </div>

                                <div class="col-md-6">
                                    @foreach($menuitems['icecek'] as $item)
                                        @if($loop->index % 2 != 0)
                                            <!-- single dish -->
                                            <div class="single-dish">
                                                <div class="single-dish-heading">
                                                    <h4 class="name">{{ $item->name }}</h4>
                                                    <h4 class="price">{{ $item->price }}₺</h4>
                                                </div>
                                                <p>{{ $item->description }}</p>
                                            </div>
                                            <!-- /single dish -->
                                        @endif
                                    @endforeach
                                </div>

                            </div>
                            <!-- /menu2 -->
                        @endif

                        @if(count($menuitems['anayemek']))
                            <!-- menu3 -->
                            <div id="menu3" class="tab-pane fade in {{ $paneactive }}">
                                @php $paneactive = ''; @endphp

                                <div class="col-md-6">
                                    @foreach($menuitems['anayemek'] as $item)
                                        @if($loop->index % 2 == 0)
                                            <!-- single dish -->
                                            <div class="single-dish">
                                                <div class="single-dish-heading">
                                                    <h4 class="name">{{ $item->name }}</h4>
                                                    <h4 class="price">{{ $item->price }}₺</h4>
                                                </div>
                                                <p>{{ $item->description }}</p>
                                            </div>
                                            <!-- /single dish -->
                                        @endif
                                    @endforeach
                                </div>

                                <div class="col-md-6">
                                    @foreach($menuitems['anayemek'] as $item)
                                        @if($loop->index % 2 != 0)
                                            <!-- single dish -->
                                            <div class="single-dish">
                                                <div class="single-dish-heading">
                                                    <h4 class="name">{{ $item->name }}</h4>
                                                    <h4 class="price">{{ $item->price }}₺</h4>
                                                </div>
                                                <p>{{ $item->description }}</p>
                                            </div>
                                            <!-- /single dish -->
                                        @endif
                                    @endforeach
                                </div>

                            </div>
                            <!-- /menu3 -->
                        @endif

                        @if(count($menuitems['tatli']))
                            <!-- menu4 -->
                            <div id="menu4" class="tab-pane fade in {{ $paneactive }}">
                                @php $paneactive = ''; @endphp

                                <div class="col-md-6">
                                    @foreach($menuitems['tatli'] as $item)
                                        @if($loop->index % 2 == 0)
                                            <!-- single dish -->
                                            <div class="single-dish">
                                                <div class="single-dish-heading">
                                                    <h4 class="name">{{ $item->name }}</h4>
                                                    <h4 class="price">{{ $item->price }}₺</h4>
                                                </div>
                                                <p>{{ $item->description }}</p>
                                            </div>
                                            <!-- /single dish -->
                                        @endif
                                    @endforeach
                                </div>

                                <div class="col-md-6">
                                    @foreach($menuitems['tatli'] as $item)
                                        @if($loop->index % 2 != 0)
                                            <!-- single dish -->
                                            <div class="single-dish">
                                                <div class="single-dish-heading">
                                                    <h4 class="name">{{ $item->name }}</h4>
                                                    <h4 class="price">{{ $item->price }}₺</h4>
                                                </div>
                                                <p>{{ $item->description }}</p>
                                            </div>
                                            <!-- /single dish -->
                                        @endif
                                    @endforeach
                                </div>

                            </div>
                            <!-- /menu4 -->
                        @endif

                    </div>
                    <!-- /menu content -->

                </div>
                <!-- /row -->

            </div>
            <!-- /container -->

        </div>
        <!-- /Menu -->
    @endif


    @if($config['show_reservation'] == '1')
        <!-- Reservation -->
        <div id="reservation" class="section">

            <!-- Backgound Image -->
            <div class="bg-image" style="background-image:url(./img/background03.jpg)"></div>
            <!-- /Backgound Image -->

            <!-- container -->
            <div class="container">

                <!-- row -->
                <div class="row">

                    <!-- reservation form -->
                    <div class="col-md-6 col-md-offset-1 col-sm-10 col-sm-offset-1">
                        <form id="reservation-form" class="reserve-form row">
                            <div class="section-header text-center">
                                <h4 class="sub-title">Reservation</h4>
                                <h2 class="title white-text">Book Your Table</h2>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">İsim:</label>
                                    <input class="input" type="text" placeholder="İsim" id="name" name="name">
                                </div>
                                <div class="form-group">
                                    <label for="phone">Telefon No:</label>
                                    <input class="input" type="tel" placeholder="0 (555) 555 55 55" id="phone" name="phone">
                                </div>
                                <div class="form-group">
                                    <label for="date">Tarih:</label>
                                    <input class="input" type="text" placeholder="GG/AA/YYYY" id="date"
                                           autocomplete="off" name="date">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">E-Posta Adresi:</label>
                                    <input class="input" type="email" placeholder="isminiz@mail.com" id="email" name="email">
                                </div>
                                <div class="form-group">
                                    <label for="number">Kişi sayısı:</label>
                                    <select class="input" id="number" name="person">
                                        <option value="1">1 Kişi</option>
                                        <option value="2">2 Kişi</option>
                                        <option value="3">3 Kişi</option>
                                        <option value="4">4 Kişi</option>
                                        <option value="5">5 Kişi</option>
                                        <option value="6">6 Kişi</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="time">Saat:</label>
                                    <select class="input" id="time" name="time">
                                        <option value="">Saat Seçiniz...</option>
                                        <option value="09:00">09:00</option>
                                        <option value="10:00">10:00</option>
                                        <option value="11:00">11:00</option>
                                        <option value="12:00">12:00</option>
                                        <option value="13:00">13:00</option>
                                        <option value="14:00">14:00</option>
                                        <option value="15:00">15:00</option>
                                        <option value="16:00">16:00</option>
                                        <option value="17:00">17:00</option>
                                        <option value="18:00">18:00</option>
                                        <option value="19:00">19:00</option>
                                        <option value="20:00">20:00</option>
                                        <option value="21:00">21:00</option>
                                        <option value="22:00">22:00</option>
                                        <option value="23:00">23:00</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-12 text-center">
                                <button class="main-button">Book Now</button>
                            </div>

                        </form>

                    </div>
                    <!-- /reservation form -->

                    <!-- opening time -->
                    <div class="col-md-4 col-md-offset-0 col-sm-10 col-sm-offset-1">
                        <div class="opening-time row">
                            <div class="section-header text-center">
                                <h2 class="title white-text">Opening Time</h2>
                            </div>
                            <ul>
                                <li>
                                    <h4 class="day">Sunday</h4>
                                    <h4 class="hours">8:00 am – 11:00 pm</h4>
                                </li>
                                <li>
                                    <h4 class="day">Monday</h4>
                                    <h4 class="hours">8:00 am – 11:00 pm</h4>
                                </li>
                                <li>
                                    <h4 class="day">Tuesday</h4>
                                    <h4 class="hours">8:00 am – 11:00 pm</h4>
                                </li>
                                <li>
                                    <h4 class="day">Wednesday</h4>
                                    <h4 class="hours">8:00 am – 11:00 pm</h4>
                                </li>
                                <li>
                                    <h4 class="day">Thursday</h4>
                                    <h4 class="hours">8:00 am – 11:00 pm</h4>
                                </li>
                                <li>
                                    <h4 class="day">Friday</h4>
                                    <h4 class="hours">Closed</h4>
                                </li>
                                <li>
                                    <h4 class="day">Saturday</h4>
                                    <h4 class="hours">Closed</h4>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /opening time -->

                </div>
                <!-- /row -->

            </div>
            <!-- /container -->

        </div>
        <!-- /Reservation -->
    @endif

    @if($config['show_blog'] == '1')
        <!-- Events -->
        <div id="events" class="section">

            <!-- container -->
            <div class="container">

                <!-- row -->
                <div class="row">

                    <!-- section header -->
                    <div class="section-header text-center">
                        <h4 class="sub-title">Blog</h4>
                        <h2 class="title">Blog Yazıları</h2>
                    </div>
                    <!-- /section header -->

                    <!-- single event -->
                    <div class="col-md-6">
                        <div class="event">
                            <div class="event-img">
                                <img src="./img/event01.jpg" alt="">
                                <div class="event-day">
                                    <span>08<br>July</span>
                                </div>
                            </div>
                            <div class="event-content">
                                <p><i class="fa fa-clock-o"></i> 8.00PM - 10.00PM</p>
                                <h3><a href="blog.html">te vero tritani iuvaret vis. Nec odio periculis adipiscing
                                        an.</a>
                                </h3>
                                <p>Te sit stet labitur veritus, sea similique consetetur ut. Ne fastidii oportere usu.
                                    Iusto
                                    mediocrem iudicabit ea eos, nemore offendit detraxit ei cum.</p>
                            </div>
                        </div>
                    </div>
                    <!-- /single event -->

                    <!-- single event -->
                    <div class="col-md-6">
                        <div class="event">
                            <div class="event-img">
                                <img src="./img/event02.jpg" alt="">
                                <div class="event-day">
                                    <span>08<br>July</span>
                                </div>
                            </div>
                            <div class="event-content">
                                <p><i class="fa fa-clock-o"></i> 8.00PM - 10.00PM</p>
                                <h3><a href="#">te vero tritani iuvaret vis. Nec odio periculis adipiscing an.</a></h3>
                                <p>Te sit stet labitur veritus, sea similique consetetur ut. Ne fastidii oportere usu.
                                    Iusto
                                    mediocrem iudicabit ea eos, nemore offendit detraxit ei cum.</p>
                            </div>
                        </div>
                    </div>
                    <!-- /single event -->

                    <!-- single event -->
                    <div class="col-md-6">
                        <div class="event">
                            <div class="event-img">
                                <img src="./img/event02.jpg" alt="">
                                <div class="event-day">
                                    <span>08<br>July</span>
                                </div>
                            </div>
                            <div class="event-content">
                                <p><i class="fa fa-clock-o"></i> 8.00PM - 10.00PM</p>
                                <h3><a href="#">te vero tritani iuvaret vis. Nec odio periculis adipiscing an.</a></h3>
                                <p>Te sit stet labitur veritus, sea similique consetetur ut. Ne fastidii oportere usu.
                                    Iusto
                                    mediocrem iudicabit ea eos, nemore offendit detraxit ei cum.</p>
                            </div>
                        </div>
                    </div>
                    <!-- /single event -->

                    <!-- single event -->
                    <div class="col-md-6">
                        <div class="event">
                            <div class="event-img">
                                <img src="./img/event01.jpg" alt="">
                                <div class="event-day">
                                    <span>08<br>July</span>
                                </div>
                            </div>
                            <div class="event-content">
                                <p><i class="fa fa-clock-o"></i> 8.00PM - 10.00PM</p>
                                <h3><a href="#">te vero tritani iuvaret vis. Nec odio periculis adipiscing an.</a></h3>
                                <p>Te sit stet labitur veritus, sea similique consetetur ut. Ne fastidii oportere usu.
                                    Iusto
                                    mediocrem iudicabit ea eos, nemore offendit detraxit ei cum.</p>
                            </div>
                        </div>
                    </div>
                    <!-- /single event -->

                </div>
                <!-- /row -->

            </div>
            <!-- /container -->

        </div>
        <!-- /Events -->
    @endif

    <!-- Contact -->
    <div id="contact" class="section" style="margin-top: 100px;">

        <!-- container -->
        <div class="container">

            <!-- row -->
            <div class="row">

                <div class="col-md-5 col-md-offset-7">
                    <div class="section-header">
                        <h4 class="sub-title">İletişim</h4>
                        <h2 class="title">Bizimle iletişime geçin.</h2>
                    </div>
                    <div class="contact-content">
                        <p>{{ $config['contact_text'] }}</p>
                        <h3>Tel: <a href="tel:{{ $config['tel_no'] }}">{{ $config['tel_no'] }}</a></h3>
                        <p>Adres: {{ $config['address'] }}</p>
                        @if(isset($config['e_mail']) && $config['e_mail'])
                            <p>Email: <a href="mailto:{{ $config['e_mail'] }}">{{ $config['e_mail'] }}</a></p>
                        @endif
                        <ul class="list-inline">
                            <li><p>Bizi takip edin:</p></li>
                            @if(isset($config['facebook']) && $config['facebook'])
                                <li><a href="{{ $config['facebook'] }}" target="_blank"><i
                                            class="fa fa-facebook"></i></a></li>
                            @endif
                            @if(isset($config['twitter']) && $config['twitter'])
                                <li><a href="{{ $config['twitter'] }}" target="_blank"><i class="fa fa-twitter"></i></a>
                                </li>
                            @endif
                            @if(isset($config['instagram']) && $config['instagram'])
                                <li><a href="{{ $config['instagram'] }}" target="_blank"><i
                                            class="fa fa-instagram"></i></a></li>
                            @endif
                            @if(isset($config['youtube']) && $config['youtube'])
                                <li><a href="{{ $config['youtube'] }}" target="_blank"><i class="fa fa-youtube"></i></a>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>

            </div>
            <!-- /row -->

        </div>
        <!-- /container -->

        <!-- map -->
        <div id="map"></div>
        <!-- /map -->

    </div>
    <!-- Contact -->

    <!-- Main modal -->
    <div id="reservationModal" class="modal" tabindex="-1" style="background-color: #00000070; overflow: auto;">
        <div class="modal-dialog  modal-dialog-scrollable" style="max-height: 50%;">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary modal-kapat modal-btn" data-bs-dismiss="modal">Tamam
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')

    @php
        $coords = explode(',', $config['coordinates'] ?? 0);
    @endphp

    <script>
        var position = {lat: {{ trim($coords[0] ?? 0) }}, lng: {{ trim($coords[1] ?? 0) }}} // Google Maps için koordinatlar
    </script>

    <script type="text/javascript" src="js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="js/jquery.mask.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
    <script type="text/javascript" src="js/google-map.js"></script>
    <script type="text/javascript" src="js/main.js"></script>

    <script>
        $(function () {

            $("#date").datepicker({
                dateFormat: "dd/mm/yy",
                monthNames: ["Ocak", "Şubat", "Mart", "Nisan", "Mayıs", "Haziran", "Temmuz", "Ağustos", "Eylül", "Ekim", "Kasım", "Aralık"],
                dayNamesMin: ["Pa", "Pt", "Sa", "Ça", "Pe", "Cu", "Ct"],
                firstDay: 1
            });

            $('#phone').mask('0 (000) 000 00 00');


        });
    </script>

    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('.modal-kapat').click(function () {
            $('#reservationModal').css("animation", "slide-out-bottom 1s cubic-bezier(0.550, 0.085, 0.680, 0.530) both");
            $('#reservationModal').find('.modal-dialog').css("animation", "slide-out-blurred-bottom 0.45s cubic-bezier(0.755, 0.050, 0.855, 0.060) both");
            $('body').css('overflow', 'scroll');
            $('#reservationModal').fadeOut('slow');
        });


        function showModal(baslik, mesaj, button) {
            $('#reservationModal .modal-header').text(baslik);
            $('#reservationModal .modal-body').html(mesaj);
            $('#reservationModal .modal-btn').text(button);
            $('body').css('overflow', 'hidden');
            $('#reservationModal').css("animation", "slide-in-top 0.5s cubic-bezier(0.250, 0.460, 0.450, 0.940) both");
            $('#reservationModal').find('.modal-dialog').css("animation", "slide-in-elliptic-bottom-fwd 0.7s cubic-bezier(0.250, 0.460, 0.450, 0.940) both");
            $('#reservationModal').show()
        }

        $(".reserve-form").submit(function(e){
            e.preventDefault();
            const inputData = $(this).find('input,textarea,select').serialize();
            $.ajax({
                type: "POST",
                url: "/makeReservation",
                data: inputData,
                dataType: "json",
                success: function(data){
                    showModal('Rezervasyon', data.content, 'Kapat');
                },
                error: function(errMsg) {
                    showModal('HATA!', '<p><b style="color: red">Rezervasyonunuz kaydedilirken bir hata oluştu!</b></p><br><p>Sorunun devam etmesi halinde bizimle iletişime geçebilirsiniz.</p>', 'Kapat');
                }
            });
        });
    </script>

@endsection
