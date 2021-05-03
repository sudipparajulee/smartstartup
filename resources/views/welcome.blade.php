@extends('master.master')
@section('content')

 <div class="container-fluid" >
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="{{asset('images/banner/banner1.jpg')}}" alt="Smart Startup" style="min-height: 170px; width: 100%;">
    </div>

    <div class="item">
      <img src="{{asset('images/banner/banner1.jpg')}}" alt="Smart Startup" style="min-height: 170px; width: 100%;">
    </div>

    <div class="item">
      <img src="{{asset('images/banner/banner1.jpg')}}" alt="Smart Startup" style="min-height: 170px; width: 100%;">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>

<hr>

<div class="container">

    <div class="menu animated wow fadeIn">
        <h4 class="animated wow flipInY"><span >Our First Heading</span></h4>
    </div>

    <br>
    <div class="menu animated wow fadeIn">
        <h4 class="animated wow flipInY"><span >Our Startup Services</span></h4>
    </div>


    <br>

    <div class="row text-center">
        <div class="col-sm-2 card shadow">
            <img class="animated wow flipInX delay02" src="{{asset('images/registration.png')}}" width="80%">
            <h3 class = "animated wow fadeIn">कम्पनी दर्ता</h3>
            <br>
        </div>

       <div class="col-sm-2 card shadow">
            <img class="animated wow flipInX delay-01s" src="{{asset('images/documentation.png')}}" width="80%">
            <h3 class = "animated wow fadeIn">संसाेधन कार्य</h3>
            <br>
        </div>

        <div class="col-sm-2 card shadow">
            <img class="animated wow flipInX delay-02s" src="{{asset('images/yearlyreport.png')}}" width="80%">
            <h3 class = "animated wow fadeIn">वार्षिक विवरण</h3>
            <br>
        </div>


        <div class="col-sm-2 card shadow">
            <img class="animated wow flipInX delay02" src="{{asset('images/tax.png')}}" width="80%">
            <h3 class = "animated wow fadeIn">कर सम्बन्धी सेवा</h3>
            <br>
        </div>


        <div class="col-sm-2 card shadow">
            <img class="animated wow flipInX delay02" src="{{asset('images/trademark.png')}}" width="80%">
            <h3 class = "animated wow fadeIn">ट्रेडमार्क दर्ता</h3>
            <br>
        </div>


    </div>


    <br>

    <div class="menu animated wow fadeIn">
        <br>
        <h4 class="animated wow flipInY"><span >Startup Academy <small>Our Courses</small></span></h4>
    </div>
    <br>
     <div class="row text-center">
        <div class="col-sm-2 card shadow">
            <img class="animated wow flipInX delay-2s" src="{{asset('images/vat.png')}}" width="80%">
            <h3 class = "animated wow fadeIn" style="margin-left: -5px; margin-right:-5px; padding:0px;">Vat Accounting</h3>
            <br>
        </div>

       <div class="col-sm-2 card shadow">
            <img class="animated wow flipInX delay-2s" src="{{asset('images/import.png')}}" width="80%">
            <h3 class = "animated wow fadeIn">Import</h3>
            <br>
        </div>

        <div class="col-sm-2 card shadow">
            <img class="animated wow flipInX delay-2s" src="{{asset('images/export.png')}}" width="80%">
            <h3 class = "animated wow fadeIn">Export</h3>
            <br>
        </div>


        <div class="col-sm-2 card shadow">
            <img class="animated wow flipInX delay-2s" src="{{asset('images/tally.png')}}" width="80%">
            <h3 class = "animated wow fadeIn">Tally</h3>
            <br>
        </div>


        <div class="col-sm-2 card shadow">
            <img class="animated wow flipInX delay-2s" src="{{asset('images/excel.png')}}" width="80%">
            <h3 class = "animated wow fadeIn">Excel</h3>
            <br>
        </div>

    </div>





</div>



<hr>
@endsection

