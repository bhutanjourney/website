<nav class="navbar navbar-default navbar-static-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <!-- Branding Image -->
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{asset('assets/images/logo.png')}}" alt="logo">
        </a>
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
        </a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="{{route('home')}}">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="{{route('about_us')}}">About Us</a></li>
        <li>
            <div class="dropdown">
              <button class="dropbtn">Tour Packages</button>
              <div class="dropdown-content">
               <a href="{{route('culture_tour')}}">Culture Tour</a>
               <a href="{{route('nature_tour')}}">Nature Tour</a>
               <a href="{{route('festival_tour')}}">Festival Tour</a>
               <a href="{{route('trekking_tour')}}">Trekking Tour</a>
              </div>
            </div>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
    </div>
</nav>