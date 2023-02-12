<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/contact.css')}}">
    <link rel="stylesheet" href="{{asset('css/natuurgerichte-principes.css')}}">
    <link rel="stylesheet" href="{{asset('css/onze-diensten.css')}}">
    <link rel="stylesheet" href="{{asset('css/onze-therapeuten.css')}}">
    <link rel="stylesheet" href="{{asset('css/reservation.css')}}">
    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
    <link rel="stylesheet" href="{{asset('css/components/garanty.css')}}">
    <link rel="stylesheet" href="{{asset('css/components/footer.css')}}">
    <link rel="stylesheet" href="{{asset('css/resirvation_2.css')}}">
    <link rel="stylesheet" href="{{asset('css/calendar.css')}}">
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
    @livewireStyles 
</head>
<body> 
    <div class="nav__app">
            <div class="logo__app">
                <a href="/"><img src="{{asset('imgs/logo_blue.png')}}" width="100px" ></a>
            </div>
            <div class="links-ul">
                <div class="lists__app">
                    <span <?= $_SERVER['REQUEST_URI']==='/' ?  'class="active__links"' : ' '  ; ?> ><a href="/">home</a></span>
                    <span <?= $_SERVER['REQUEST_URI']==='/natuurgerichte-principes' ?  'class="active__links"' : ' '  ; ?>><a href="{{route('natuurgerichte-principes.index')}}">natuurgerichte principes</a></span>
                    <span <?= $_SERVER['REQUEST_URI']==='/onze-diensten' ?  'class="active__links"' : ' '  ; ?>><a href="{{route('onze-diensten.index')}}">onze diensten</a></span>
                    <span <?= $_SERVER['REQUEST_URI']==='/onze-therapeuten' ?  'class="active__links"' : ' '  ; ?>><a href="{{route('onze-therapeuten.index')}}">onze therapeuten</a></span>
                    <span <?= $_SERVER['REQUEST_URI']==='/contact' ?  'class="active__links"' : ' '  ; ?>><a href="{{route('contact.index')}}">contact</a></span>
                    @auth 
                    <span>{{Auth::user()->name}}/
                        
                    <a href="{{route('logout')}}" onclick="event.preventDefault();
			            document.getElementById('logout-form').submit()">LogOut</a>
                        
                        <form id='logout-form' method="POST" action='{{route("logout")}}'>
                            @csrf 
                        </form>
                    </span>
                    @else 
                    <span><a href="{{route('login')}}">Login</a></span>
                    @endif 
                    
                </div>
            </div>
            
            <div class="menu-bar"><i class='bx bx-menu'></i></div>
    </div>
    <div class="links-nav-mobile">
        <div class="links-ul-mobile">
            <div class="lists__app">
                    <span class=""><a href="/">home</a></span>
                    <span><a href="{{route('natuurgerichte-principes.index')}}">natuurgerichte principes</a></span>
                    <span><a href="{{route('onze-diensten.index')}}">onze diensten</a></span>
                    <span><a href="{{route('onze-therapeuten.index')}}">onze therapeuten</a></span>
                    <span><a href="{{route('contact.index')}}">contact</a></span>
                    @auth 
                    <span>{{Auth::user()->name}}/
                        <form method="POST" action="{{route('logout')}}">
                            @csrf 
                            <a href="{{route('logout')}}"
                                onclick="event.preventDefault();this.closet('form').submit()"
                                >
                                LogOut
                            </a>
                        </form>
                    </span>
                    @else 
                    <span><a href="{{route('login')}}">Login</a></span>
                    @endif 
                    
                
            </div>
        </div>
    </div>
    {{$slot}}
    <div class="footer__app">
        <div class="footer_top">
            <div class="box__one">
                <div class="heading__foot">
                    <img src="imgs/logo_white.png">
                </div>
                <div class="footer__body">
                    <p>
                        Cliniclab ondersteunt haar cliënten bij het herstellen van de
                        balans in en rondom het lichaam volgens de vijf natuurgerichte
                        principes van BATC. Als natuurgeneeskundige therapeut
                        helpen wij je om bepaalde blokkades, die de optimale werking
                        van je lichaam stagneren, weg te nemen. We maken daarbij
                        gebruik van methoden en middelen die de natuur ons biedt.
                        Daarbij kun je bijvoorbeeld denken aan kruiden, massage en
                        een gezonde voedingsstijl. Zo proberen wij als
                        natuurgeneeskundige therapeuten en natuurgerichte
                        vaktherapeuten jou en jouw lichaam een duwtje in de juiste
                        richting te geven. Omdat wij aangesloten zijn bij de
                        beroepsvereniging BATC kun je in aanmerking komen voor
                        een vergoeding vanuit jouw zorgverzekeraar!
                    </p>
                </div>
            </div>
            <div class="box__two">
                <ul>
                    <li>Privacy</li>
                    <li>Algemene voorwaarden</li>
                    <li>Exclusie</li>
                    <li>Klachtenpagina</li>
                    <li>Annuleringsbeleid (In algemene voorwaarden?)</li>
                    @if(Route::has('login'))
                    @auth 
                        @if(Auth::user()->utype==='ADM' || Auth::user()->utype==='EMP')
                        <li><a style="color:#fff;" href="{{route('admin.dashboard')}}">Admin</a></li>
                        @endif 
                    @endif 
                    @endif 
                </ul>
            </div>
        </div>
        <div class="footer_bottom">
            <div class="content_b">
                <div><img src="{{asset('imgs/batc_logo.png')}}"></div>
                <div><img src="{{asset('imgs/hiscox_logo.png')}}"></div>
            </div>
        </div>
    </div>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
<script src="{{asset('js/home.js')}}"></script>
<script src="{{asset('js/contact.js')}}"></script>
<script src="{{asset('js/natuurgerichte-principes.js')}}"></script>
<script src="{{asset('js/onze-diensten.js')}}"></script>
<script src="{{asset('js/onze-therapeuten.js')}}"></script>
<script src="{{asset('js/reservation.js')}}"></script>
<script src="{{asset('js/calendar.js')}}"></script>

@livewireScripts
</body>
</html>