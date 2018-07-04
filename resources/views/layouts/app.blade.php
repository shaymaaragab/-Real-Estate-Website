<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    {!!Html::style('/website/css/bootstrap.min.css')!!}
    {!!Html::style('/website/css/style.css')!!}
    {!!Html::style('/website/css/font-awesome.min.css')!!}
    {!!Html::script('/website/js/jquery.min.js')!!}

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <title>
    {{getSetting()}}
      @yield('title')
    </title>
     @yield('header')
</head>
<body>
    <div id="app pull-right">
      <header class="main-header">
    <!-- Logo -->
    <a href="../index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
    <!--  <span class="logo-mini"><b>A</b>LT</span>-->
      <!-- logo for regular state and mobile devices -->
    <!--  <span class="logo-lg"><b>Admin</b>LTE</span> -->
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top pull-right" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li><a href="{{url('/home')}}">الرئيسيه</a></li>
          <li><a href="{{url('/showAllBullding')}}">كل العقارات </a></li>
          <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
              ايجار  <span class="caret"></span>
              </a>

              <ul class="dropdown-menu" role="menu">
                @foreach(bu_type() as $keyType=>$type)
                <li style="width:100%"><a href="{{url('/search?bu_rent=1&bu_type='.$keyType)}}">{{$type}}</a></li>
                @endforeach
              </ul>
            </li>

            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
            تمليك   <span class="caret"></span>
                </a>

                <ul class="dropdown-menu" role="menu">
                  @foreach(bu_type() as $keyType=>$type)
                  <li><a href="{{url('/search?bu_rent=0&bu_type='.$keyType)}}">{{$type}}</a></li>
                  @endforeach  </ul>
              </li>

          <li><a href="{{url('/contact')}}">اتصل بنا</a></li>
          @guest
              <li><a href="{{ url('/login') }}">تسجيل الدخول</a></li>
              <li><a href="{{ url('/register') }}">عضوية جديدة</a></li>
          @else
              <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                      {{ Auth::user()->name }} <span class="caret"></span>
                  </a>

                  <ul class="dropdown-menu">
                      <li>
                          <a href="{{ url('/logout') }}"
                              onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                              تسجيل الخروج
                          </a>

                          <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                              {{ csrf_field() }}
                          </form>
                      </li>
                  </ul>
              </li>
          @endguest
        </ul>
      </div>
    </nav>
  </header>


        @yield('content')

        {!!Html::style('/website/js/bootstrap.min.css')!!}

        @yield('footer')
    </div>

</body>
</html>
