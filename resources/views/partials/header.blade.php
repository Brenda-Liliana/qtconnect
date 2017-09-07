<div class="top-bar">
  <div class="container">
    <div class="col-md-6">
      <ul class="nav navbar-nav top-bar-nav">
        <li><a href="#">
        <i class="fa fa-globe" aria-hidden="true"></i> English<span class="caret"></span>
        </a></li>
        <li><a href="#">
        <i class="fa fa-paper-plane" aria-hidden="true"></i> info@qtconnect.com
        </a></li>
      </ul>
    </div>
    <div class="col-md-6">
      <ul class="nav navbar-nav top-bar-nav">
      @if(!Auth::check())
        <li><a href="{{ route('login') }}">
         <i class="fa fa-sign-in" aria-hidden="true"></i> Ingresar
        </a></li>
        <li><a href="{{ route('register') }}">
          Registrate
        </a></li>
        @endif
        <li><a href="#">
         <i class="fa fa-facebook-official" aria-hidden="true"></i>
        </a></li>
        <li><a href="#">
         <i class="fa fa-twitter-square" aria-hidden="true"></i>
        </a></li>
      <ul>
    </div>
  </div>
</div>
<div class="navbar-top text-center">
  <div class="container">
    <div class="col-md-4">
      <div class="inner-addon right-addon">
        <i class="glyphicon glyphicon-search"></i>
        <input class="primary-search header-search" type="text" placeholder="Buscar" name="search">
      </div>
    </div>
    <div class="col-md-4 text-center">
      <a class="navbar-brand2 hidden-xs" href=""><img src="{{ URL::to('images/logo-qt-connect.png')}}" style="width: 222px;"></a>
    </div>
    <div class="col-md-4">
      <ul class="nav navbar-nav navbar-right">
          <li><a href=""><i class="fa fa-shopping-cart" aria-hidden="true"></i> <span class="badge"></span></a></li>
        </ul>
    </div>
  </div>
</div>
<nav class="navbar navbar-connect">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-qt-connect" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand visible-xs" href=""><img src="{{ URL::to('images/logo-qt-connect.png')}}" style="width: 222px;"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="navbar-qt-connect">
      <ul class="nav navbar-nav primary-menu">
        <li><a href="#">Home</a></li>
        <li><a href="#">Sobre QT</a></li>
        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Compras<span class="caret"></span></a>
           <ul class="dropdown-menu">
            <li><a href="#">A</a></li>
            <li><a href="#">B</a></li>
          </ul>
        </li>
        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Ventas<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">A</a></li>
            <li><a href="#">B</a></li>
          </ul>
        </li>
        <li><a href="#">Blog</a></li>
        <li><a href="#">Contacto</a></li>
         @if(Auth::check())
         <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user" aria-hidden="true"></i>  {{ Auth::user()->name }} <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{ route('home') }}">User Profile</a></li>
            <li><a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                Logout
                            </a><form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form></li>
          </ul>
        </li>
        @endif
      </ul>
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>