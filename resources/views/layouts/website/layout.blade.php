<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">

    {{-- jquery plugins --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    {{-- customised stylesheets --}}
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    
    <!-- Datables Style -->
      <link href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css" rel="stylesheet" media="screen">

    {{-- bootstrap themes --}}
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

     <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    {{-- <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="{{asset('assets/images/logo.png')}}" alt="">
                    </a> --}}
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>

                </div>
            </div>
        </nav>
        <div class="container-fluid">
            {{-- header image slider section --}}
            <div class="row">
                {{-- <div class="col-md-2"></div> --}}
                <div class="jumbotron">
                    <div class="panel panel-default">
                      <div class="panel-body">
                        @include('layouts.website.includes.header')
                      </div>
                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
        <div class="container">
            {{-- Menu Section --}}
            <div class="row">
                
            </div>
            {{-- featured post section --}}
            <div class="panel panel-default">
                <div class="panel-heading" style="text-align: center"><h2>FEATURE TOURS</h2></div>
                <div class="panel-body">
                    <div class="row equal">
                        <div class="col-md-3">
                            <div class="thumbnail">
                              <img src="{{asset('assets/images/culture/culture.jpg')}}" alt="Image of culture">
                              <div class="caption">
                                <h3>CULTURE</h3>
                                <p>This tour is designed for visitors with limited time but those who have high hopes and aspirations to experience Bhutan in a shortest possible way. The five days and four nights program covers visit to Paro and Thimphu Valleys.</p>
                                <p style="float:right;"><a href="#" class="btn btn-default" role="button">Read more</a></p>
                                <div class="clearfix"></div>
                              </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="thumbnail">
                              <img src="{{asset('assets/images/festival/festival.jpg')}}" alt="Festival Image">
                              <div class="caption">
                                <h3>FESTIVAL</h3>
                                <p>The most important festival in Bhutan is known as “Tshechu”. It is a religious festival, celebrated throughout the country, to commemorate the deeds of Guru Rimphoche, the founding saint of Buddhism in the Himalayan regions.</p>
                                <p style="float:right;"><a href="#" class="btn btn-default" role="button">Read more</a></p>
                                <div class="clearfix"></div>
                             </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="thumbnail">
                              <img src="{{asset('assets/images/nature/nature.jpg')}}" alt="Nature Image">
                              <div class="caption">
                                <h3>NATURE</h3>
                                <p>Bhutan is one of 10 global centres for environmental conservation because of its amazing diversity of flora and fauna. Bhutan is the leading countries in the world for prioritising the protection of the environment while pursuing developmental activities.</p>
                                <p style="float:right;"><a href="#" class="btn btn-default" role="button">Read more</a></p>
                                <div class="clearfix"></div>
                              </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="thumbnail">
                              <img src="{{asset('assets/images/trekking/trekking.jpg')}}" alt="Trekking Image">
                              <div class="caption">
                                <h3>TREKKING</h3>
                                <p>Rocky mountains,captivating valleys,winding rivers,sparkling lakes,thick forest and unexplored purity of nature.Towering snow peaks of the  Himalayas, the verdant forests, ensures Bhutan a trekkers’ paradise.</p>
                                
                                <p style="float:right;"><a href="#" class="btn btn-default" role="button" style="margin-bottom: 15px;">Read more</a></p>
                                <div class="clearfix"></div>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- TEAM members --}}
            <div class="panel panel-default">
                <div class="panel-heading" style="text-align: center"><h2>OUR TEAM</h2></div>
                <div class="panel-body">
                    <div class="row equal">
                        <div class="col-md-4 ">
                            <div class="panel panel-info">
                            <div class="panel-heading" style="text-align: center"><h4>Sonam Chophyel</h4><p>Tour Leader</p></div>
                                <div class="panel-body">
                                    <div class="thumbnail">
                                    <img class="img-rounded" src="{{asset('assets/images/teams/sonam-chogyal.jpg')}}" alt="Image of Sonam Chophyel">
                                        <p>Sonam Chophyel is from central Bhutan and a veteran in the Bhutanese tourism industry with an experience of more than 15 years. He is the founder of Bhutan Journeys “Your travel guide to Bhutan” and welcomes everyone to discover the real Bhutan. Chophyel has worked in various capacities in the field of tourism and traveled extensively throughout the country leading groups from all over the world. He aspires and assures to provide quality service and to showcase the best of cultural and natural aspects of Bhutan. His in-depth knowledge on Bhutan and vast experiences is well appreciated by his peers and clients.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="panel panel-success">
                            <div class="panel-heading" style="text-align: center"><h4>Kencho Tenzin</h4><p>Specialized Cultural and Trekking Guide</p></div>
                                <div class="panel-body">
                                    <div class="thumbnail">
                                    <img class="img-rounded" src="{{asset('assets/images/teams/kencho-tenzin.jpg')}}" alt="Image of Kencho Tenzin">
                                        <p>Kencho Tenzin started guiding in 2008. He cherishes meeting people from all over the world and has strong passion in various cultures. He is currently pursuing Japanese language course in Tokyo, Japan and is expected to join our team soon.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="panel panel-info">
                            <div class="panel-heading" style="text-align: center"><h4>Tshering Dorji A.K.A Janiman</h4><p>Specialized Trekking Chief</p></div>
                                <div class="panel-body">
                                    <div class="thumbnail">
                                    <img class="img-rounded" src="{{asset('assets/images/teams/tshering-dorji.jpg')}}" alt="Image of Tshering Dorji">
                                        <p>A senior trekking member in the company, Tshering worked with the company ever since its inception. As a chef certified by Tourism Council of Bhutan he has been associated with trekking in Bhutan since 1985 and walked through all the trekking routes in Bhutan. His passion for trekking and his expertise in culinary skills are an added bonus for the group that he leads.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row equal">
                        <div class="col-md-4">
                            <div class="panel panel-success">
                            <div class="panel-heading" style="text-align: center"><h4>Karma Dhendup</h4><p>Specialized Cultural and Trekking Guide</p></div>
                                <div class="panel-body">
                                    <div class="thumbnail">
                                    <img class="img-rounded" src="{{asset('assets/images/teams/karma-Dendup-photo1.jpg')}}" alt="Image of karma Dendup">
                                        <p>Mr.Dhendup started guiding in 2006 and has worked for a number of travel companies amassing wealth of experience in the tourism and hospitality industry before joining our team. He leads the cultural and trekking group along with other professional guides.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="panel panel-info">
                            <div class="panel-heading" style="text-align: center"><h4>Gasey Lhendup</h4><p>Specialized Cultural and Trekking Guide</p></div>
                                <div class="panel-body">
                                    <div class="thumbnail">
                                    <img class="img-rounded" src="{{asset('assets/images/teams/gasey.jpg')}}" alt="Image of Gasey Lhendup">
                                        <p>He has worked in Aman Resort (International Luxury hotel) for 6 years in various capacities and has rich experience in the hospitality industry. Gasey joined our team and he now leads the cultural and trekking team. He is much-admired for rendering high class services for the clients.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="panel panel-success">
                            <div class="panel-heading" style="text-align: center"><h4>Dema Yangchen</h4><p>Operations Manager</p></div>
                                <div class="panel-body">
                                    <div class="thumbnail">
                                    <img class="img-rounded" src="{{asset('assets/images/teams/Dema-Yangchen.jpg')}}" alt="Image of Dema Yangchen">
                                        <p>Dema joined Bhutan Journeys in 2010 as an operation executive. She ensures that all the travel aspects go smoothly for our valued customers. She is responsible for nurturing our relationships with hospitality and transport sectors.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-primary">
                            <div class="panel-heading" style="text-align: center"><h2>Our Partner</h2><h4>Silvia Vizzoni</h4><p>Sales and Business Development</p></div>
                                <div class="panel-body">
                                    <div class="thumbnail">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <object data="http://www.bigbluecollection.com/" width="100%" height="300px">
                                                <embed src="http://www.bigbluecollection.com/" width="100%" height="auto"> </embed>
                                                Error: Embedded data could not be displayed.
                                            </object>
                                            {{-- <iframe src="http://www.bigbluecollection.com/" frameborder="0" width="600" height="400"></iframe> --}}
                                        </div>
                                        <div class="col-md-4 thumbnail">
                                            <img class="img-rounded" src="{{asset('assets/images/teams/silvia_profile.jpg')}}" alt="Image of silvia">
                                        </div>
                                    </div>
                                    
                                        <p>Ms. Sliva Vizzoni is our United Kingdom - based travel associate. After her visit to Bhutan in 2015, she has lot of passion for this country and initiated to promote Bhutan, encouraging people to journey here and establish good relationship with the travel agents abroad. For all information on Bhutan Journeys and its tours please contact her at:</p>
                        
                                         Email: info@bigbluecollection.com <br>
                                         Phone: 0044 7506012835<br>
                                         Website:<a href="http://www.bigbluecollection.com/" target="_blank">Big Blue Collection</a>
                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <!-- wedgit -->
            <div class="container-fluid">
            <div class="panel panel-success">
        <div class="row">
         <div class="col-md-4">
        <div class="panel panel-success">
                            <div class="panel-heading" style="text-align: center"><h4>CONNECT WITH US</h4></div>
                                <div class="panel-body">
                                      <div class="fb-page"
                                          data-href="https://www.facebook.com/BhutanJourneys/?ref=br_rs" 
                                          data-width="340"
                                          data-hide-cover="false"
                                          data-show-facepile="true"></div>                            
                                </div>
                            </div>

        </div>
         <div class="col-md-4">
        <div class="panel panel-success">
                            <div class="panel-heading" style="text-align: center"><h4>CONTACT INFORMATION</h4></div>
                                <div class="panel-body">
                                    <div class="thumbnail">
                                    <img class="img"  src="{{asset('assets/images/widget/logo1.png')}}" alt="logo" height="42" width="42">
                                      
                                    </div>
                                </div>
                            </div>
        </div> 
        <div class="col-md-4">
        <div class="panel panel-success">
                            <div class="panel-heading" style="text-align: center"><h4>AFFILATIONS</h4></div>
                                <div class="panel-body">
                                    <div class="thumbnail">
                                    <p style="text-align: justify;">Bhutan Journeys is an official tour operator of Bhutan licensed under the tourism Council of Bhutan, 2014. Bhutan Journeys is also a member of the Association of Bhutanese Tour Operators of Bhutan. </p>
                                        <img class="img" src="{{asset('assets/images/widget/logoos-1.png')}}" alt="Image of Dema Yangchen">
                                    </div>
                                </div>
                            </div>
        </div>
    
        </div>
        </div>
        </div>
        

        

        <div style="text-align:center;">
        <h6><strong> &copy;<?php  echo date("Y"); echo " BHUTAN JOURNEYS ALL RIGHT RESERVED!";?></strong></h6>
        </div>
    
    
    <!-- Scripts -->
    <script src="/js/app.js"></script>

    {{-- JS for DataTables --}}

    <script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>

    <!-- Latest compiled and minified JavaScript -->
    <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.10&appId=1553812374863873";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
</body>
</html>
