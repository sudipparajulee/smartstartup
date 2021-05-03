<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="SmartStartup Chitwan ">
    <meta name="keywords" content="SmartStartup, Smart Startup, smart, startup, smart startup chitwan, smart chitwan, startup chitwan">
    <meta name="author" content="bitmapitsolution.com">
    <title>Smart Startup</title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
<link rel="icon" href="/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" media="screen" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
    <link rel="stylesheet" href="{{asset('myassets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('myassets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('myassets/js/fancybox/jquery.fancybox.css')}}" type="text/css" media="screen" />
    <link rel="stylesheet" href="{{asset('myassets/css/animate.css')}}">
    
   <!--  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> -->
    <!-- Custom styles for our template -->
    
    <link rel="stylesheet" href="{{asset('myassets/css/bootstrap-theme.css')}}" media="screen">
    
    <link rel="stylesheet" href="{{asset('myassets/css/style.css')}}">
     

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
    
</head>
<body>
    <!-- Fixed navbar -->
    <div class="container-fluid">
    <div class=" row" style="padding: 0; margin:0; background-color: #ed1c23; padding-top: 5px; margin-bottom: -5px;">
        <div class="col-md-3 col-sm-3 col-xs-12 text-center">
            <p style="color: white;"><i class="fa fa-phone"></i> 056-594473</p>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12 text-center hideonmobile">
            <p style="color: white; font-family: Comic Sans MS; "></p>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-12 text-center pull-right">
            <p style="color: white;"><i class="fa fa-envelope"></i> info@smartstartup.com.np </p>
        </div>
    </div>
    <div class="navbar navbar-inverse " >
        <div class="container-fluid">
            <div class="navbar-header" style="padding-left: 4%;">
                <!-- Button for smallest screens -->
                <button type="button" class="navbar-toggle" style="background-color: #2e3092; " data-toggle="collapse" data-target=".navbar-collapse" ><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                <a class="navbar-brand" href="{{route('Home')}}" >
                    <img src="{{asset('images/logo.png')}}" style="margin-top: -30px;" height="80" alt="SmartStartup LOGO"></a>
            </div>
            <div class="navbar-collapse collapse font17">
                <ul class="nav navbar-nav pull-right">
                    <li class="active"><a href="{{route('Home')}}">सचेत उद्यमी</a></li>
                    
                    <!-- <li class="dropdown active">
                        <a href="" data-toggle="dropdown" data-target="dropdown-menu">Team <b class="caret"></b></a>
                        <ul class="dropdown-menu animated fadeInDown">
                            <li ><a href="" style="color: white;">Management</a></li>
                            <li ><a href="" style="color: white;">Faculties</a></li>
                        </ul>
                    </li> -->
                    
                    <li class="active"><a href="">सुरूवात उद्यमकाे</a></li>
                    <li class="active"><a href="">उद्यमी कथा</a></li>
                    <li class="active"><a href="">Startup Academy</a></li>
                    <li class="active"><a href="">Startup Services</a></li>
                    <li class="active"><a href="">Contact</a></li>
                    <li class="active"><a href="">Find Investor</a></li>
                    <!-- <li class="active"><a href="quiz">Play Quiz<img src="assets/images/playquiz.gif" style="padding: -12px; margin: -12px; height: 40px;"></a></li> -->
                    <li> </li>
                    <li> <div class="pull-right text-right hideonmobile" style="float: right;">&nbsp;<img src="{{asset('images/nepalflag.gif')}}" width="" height="50px"></div>
                    </li>
                    <li> </li>

                </ul>

            </div>
            <!--/.nav-collapse -->
        </div>
    </div>
</div>
<!--     <div style="padding-top: 100px;"></div> -->

    <!-- /.navbar -->


@yield('content')




<footer class="container-fluid" id="footer">

        <div class="footer1">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 panel">
                        <h3 class="panel-title animated wow fadeInDown">About SmartStartup</h3>
                        <div class="importantlinks">
                            <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.  <a href="">... Read More</a></p>
                        </div>
                    </div>

                    <div class="col-md-3 panel">
                    </div>

                    <div class="col-md-4 panel contact">
                        <h3 class="panel-title">Contact Info</h3>
                        <div class="importantlinks">
                            <p>Get in touch with AIMS</p>
                            <ul>
                                <li><i class="fa fa-phone"></i> 056-594473, 9855053779</li>
                                <li><a><i class="fa fa-envelope-o"></i> info@smartstartup.com.np</a></li>
                                <li><i class="fa fa-flag"></i> Hakim Chowk, Narayangarh</li>
                            </ul>
                        </div>
                    </div>

                    <!-- <div class="col-md-3 panel">
                        <h3 class="panel-title">Important Links</h3>
                        <div class="panel-body font12">
                            
                                <a href="https://www.ican.org.np" target="_blank"><i class="fa fa-angle-double-right"></i> Institute of Chartered Accountants of Nepal</a><br>
                                <a href="http://www.nrb.org.np" target="_blank"><i class="fa fa-angle-double-right"></i> Nepal Rastra Bank</a><br>
                                <a href="http://www.sebon.gov.np" target="_blank"><i class="fa fa-angle-double-right"></i> Securities Board of Nepal</a><br>
                                <a href="http://www.bsib.org.np" target="_blank"><i class="fa fa-angle-double-right"></i> Beema Samiti, Insurance Regulatory Authority of Nepal</a><br>
                                <a href="http://www.mof.gov.np" target="_blank"><i class="fa fa-angle-double-right"></i> Ministry of Finance Nepal</a><br>
                                <a href="http://www.ocr.gov.np" target="_blank"><i class="fa fa-angle-double-right"></i> Office of Company Registrar, Nepal</a><br>
                            
                        </div>
                    </div> -->
                </div>
                <!-- /row of panels -->
            </div>
        </div>

        <div class="footer2">
            <div class="container">
                <div class="row text-center">

                    <div class="col-md-6">
                        <div class="panel-body">
                            Copyright &copy; 2021. SmartStartup
                        </div>
                    </div>

                    <div class="col-md-6 panel">
                        <div class="panel-body">
                            <p class="text-center">
                                Powered by: <a href="https://bitmapitsolution.com" target="_blank">Bitmap I.T. Solution Pvt. Ltd.</a>
                            </p>
                        </div>
                    </div>

                </div>
                <!-- /row of panels -->
            </div>
        </div>

    </footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <!-- <script src="{{asset('myassets/js/custom.js')}}"></script>
    <script src="{{asset('myassets/js/modernizr-latest.js')}}"></script>  
    <script src="{{asset('myassets/js/jquery.cslider.js')}}"></script>
    <script src="{{asset('myassets/dcalendar/dcalendar.picker.js')}}"></script>
    <script src="{{asset('myassets/js/fancybox/jquery.fancybox.pack.js')}}" type="text/javascript"></script>
    <script src="{{asset('myassets/js/wow.js')}}"></script>
    <script src="{{asset('myassets/js/animate.js')}}"></script> -->
   
   <script type="text/javascript" src="{{asset('myassets/js/jquery-1.11.0.min.js')}}"></script>
<script type="text/javascript" src="{{asset('myassets/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('myassets/js/jquery-scrolltofixed.js')}}"></script>
<script type="text/javascript" src="{{asset('myassets/js/jquery.nav.js')}}"></script> 
<script type="text/javascript" src="{{asset('myassets/js/jquery.easing.1.3.js')}}"></script>
<script type="text/javascript" src="{{asset('myassets/js/jquery.isotope.js')}}"></script>
<script src="{{asset('myassets/js/fancybox/jquery.fancybox.pack.js')}}" type="text/javascript"></script> 
<script type="text/javascript" src="{{asset('myassets/js/wow.js')}}"></script> 
<script type="text/javascript" src="{{asset('myassets/js/custom.js')}}"></script>

</body>
</html>
