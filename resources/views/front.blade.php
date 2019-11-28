<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Akademik</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('css/full-slider.css') }}" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ url('/') }}">Akademik</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#" data-toggle="modal" data-target="#myProfile">Profile</a>
                    </li>
                    <li>
                        <a href="#" data-toggle="modal" data-target="#mySejarah">Sejarah</a>
                    </li>
                    <li>
                        <a href="#" data-toggle="modal" data-target="#myVisiMisi">Visi Misi</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Full Page Image Background Carousel Header -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
        </ol>

        <!-- Wrapper for Slides -->
        <div class="carousel-inner">
            <div class="item active">
                <!-- Set the first background image using inline CSS below. -->
                <div class="fill" style="background-image: url({{ asset('images1.jpg') }}); background-size: cover;"></div>
                <div class="carousel-caption">
                    <h2></h2>
                </div>
            </div>
            <div class="item">
                <!-- Set the second background image using inline CSS below. -->
                <div class="fill" style="background-image:url({{ asset('images2.jpg') }}); background-size: cover;"></div>
                <div class="carousel-caption">
                  <h2></h2>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>

    </header>

    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>SMA PURAGABAYA BANDUNG</h1>
                
            </div>
        </div>

        <!-- Trigger the modal with a button -->
        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Login</button>

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copy Right @ 2017</p>
                </div>
            </div>
            <!-- /.row -->
        </footer>
    </div>

    

    <!-- Modal Login -->
    <div id="myModal" class="modal fade" role="dialog">
      <div class="modal-dialog">
        
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Silahkan Login</h4>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-sm-5" align="center">
                <img src="{{ asset('logo.png') }}" width="150px" height="150px">
              </div>
              {{ Form::open(['url'=>'/login', 'method'=>'post']) }}
              <div class="col-sm-7">
                <div class="form-group">
                  <label>Username..</label>
                  <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group">
                  <label>Password..</label>
                  <input type="password" name="password" class="form-control">
                </div>
              </div>
              
            </div>

          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Login</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
            {{ Form::close() }}
      </div>
    </div>

    <!-- Modal Profile -->
    <div id="myProfile" class="modal fade" role="dialog">
      <div class="modal-dialog">
        
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Profile</h4>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-sm-4" align="center">
                <img src="{{ asset('logo.png') }}" width="130" height="130">
              </div>
              <div class="col-sm-7 text-justify">
                <legend>{!! App\Profile::value('judul') !!}</legend>
                <p>{!! App\Profile::value('content') !!}</p>
              </div>
            </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

     <!-- Modal Sejarah -->
    <div id="mySejarah" class="modal fade" role="dialog">
      <div class="modal-dialog">
        
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Sejarah</h4>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-sm-4" align="center">
                <img src="{{ asset('logo.png') }}" width="130" height="130">
              </div>
              <div class="col-sm-7 text-justify">
                <legend>{!! App\Sejarah::value('judul') !!}</legend>
                <p>{!! App\Sejarah::value('content') !!}</p>
              </div>
            </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

     <!-- Modal VisiMisi -->
    <div id="myVisiMisi" class="modal fade" role="dialog">
      <div class="modal-dialog">
        
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Visi Misi</h4>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-sm-4" align="center">
                <img src="{{ asset('logo.png') }}" width="130" height="130">
              </div>
              <div class="col-sm-7 text-justify">
                <legend>{!! App\VisiMisi::value('judul') !!}</legend>
                <p>{!! App\VisiMisi::value('content') !!}</p>
              </div>
            </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <!-- jQuery -->
    <!-- <script src="js/jquery.js"></script> -->
    <script src="{{ asset('js/jquery.min.js') }}" type="text/javascript"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script> <!-- Script to Activate the Carousel -->

    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
