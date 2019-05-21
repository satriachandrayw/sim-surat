<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>SIM SURAT: Welcome</title>



    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css">
    {!! Html::style('css/custom.css') !!}
    <!-- Styles -->
    <style>
    .tombol{
  background:#2C97DF;
  color:white !important;
  border-top:0;
  border-left:0;
  border-right:0;
  border-bottom:5px solid #2A80B9;
  padding:10px 20px !important;
  text-decoration:none;
  font-family:sans-serif;
  font-size:11pt;
  margin: 10px;
}
    
    html, body {
/* Permalink - use to edit and share this gradient: https://colorzilla.com/gradient-editor/#ffffff+21,e5e5e5+99 */
background: #ffffff; /* Old browsers */
background: -moz-linear-gradient(top,  #ffffff 21%, #e5e5e5 99%); /* FF3.6-15 */
background: -webkit-linear-gradient(top,  #ffffff 21%,#e5e5e5 99%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(to bottom,  #ffffff 21%,#e5e5e5 99%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#e5e5e5',GradientType=0 ); /* IE6-9 */

filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#87e0fd', endColorstr='#05abe0',GradientType=0 ); /* IE6-9 */
        color: #636b6f;
        font-family: 'Raleway', sans-serif;
        font-weight: 100;
        height: 100vh;
        margin: 0;

    }

    .full-height {
        height: 100vh;
    }

    .flex-center {
        align-items: center;
        display: flex;
        justify-content: center;
    }

    .position-ref {
        position: relative;
    }

    .top-right {
        position: absolute;
        right: 10px;
        top: 18px;
    }

    .content {
        text-align: center;
    }

    .title {
        font-size: 84px;
        color: black;
        font-weight: bold;
    }

 /*   .links > a {
        color: #636b6f;
        padding: 0 25px;
        font-size: 12px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
    }
*/
    .m-b-md {
        margin-bottom: 30px;
    }
</style>
</head>


<body>
    <div class="flex-center position-ref full-height">
  

    <div class="content">
        
        <div class="container">
          <div class="row">
            <div class="col-sm-6">
              <img alt="img" src="/images/logo-semen.png" class="img-responsive">             
            </div>
            
            <div class="col-sm-6">
                <div class="title animated fadeIn">
                <img src=""> SIM SURAT
                </div>
            </div>
          </div>
        </div>
        
      @if (Route::has('login'))
        @auth
        <div class="flex-center"> 
            <h2> Hi, Admin </h2>
        </div>
            
        <div class="flex-center links">
                <a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                <h3> Logout </h3>
                </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
        </div>
      
        
        <p>Sistem Manajemen Surat</p>
       
        <div class="links">
            <a class="tombol" href="{{ route('surat.index') }}">Daftar Surat Masuk/Keluar</a>
            <br>
            <br>
            <a class="tombol" href="{{ route('surat.create') }}">Buat Surat Masuk/Keluar</a>
            <br>
            <br>
            <a class="tombol" href="{{ route('disposisi.index') }}">Daftar Disposisi</a>
            <br>
            <br>
            <a class="tombol" href="{{ route('disposisi.create') }}">Buat Disposisi</a>        
            <br>
            <br>
            <a class="tombol" href="{{ url('/surat/laporan') }}">Laporan Surat Masuk/Keluar</a>
        </div>

        @else
        <div class="flex-center links"> <a href="{{ route('login') }}"><h3>Login </h3></a> </div>
        
        @endauth
    
        @endif

    </div>
</div>
</body>
</html>
