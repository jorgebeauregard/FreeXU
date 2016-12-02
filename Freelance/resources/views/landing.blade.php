<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>FreeXU - Home</title>

    <!-- Bootstrap Core CSS -->
    <link href="/landing/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="/landing/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="/landing/vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="/landing/css/creative.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">FreeXU</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">Services</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#portfolio">Projects</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Sign In</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1 id="homeHeading">Where Freelancers and Contractors meet</h1>
                <hr>
                <p>If a job is what you are looking for, you've come to the right place!</p>
                <a href="{{route('home.index')}}" class="btn btn-primary btn-xl page-scroll">Sign In</a>                
                <br>
                <br>
                <a href="#about" class="btn btn-primary btn-xl page-scroll">Find Out More</a>

            </div>
        </div>
    </header>

    <section class="bg-primary" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">We've got what you need!</h2>
                    <hr class="light">
                    <p class="text-faded">Contractors and freelancers, rejoice! <br> Browse between thousand of projects of different categories and start working now.</p>
                    <a href="#services" class="page-scroll btn btn-default btn-xl sr-button">Get Started!</a>
                </div>
            </div>
        </div>
    </section>

    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">At Your Service</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-birthday-cake text-primary sr-icons"></i>
                        <h3>Piece of cake</h3>
                        <p class="text-muted">Creating a new project has never been easier</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-usd text-primary sr-icons"></i>
                        <h3>Make Money</h3>
                        <p class="text-muted">Get paid instantly. <br> The more projects, the merrier!</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-lock text-primary sr-icons"></i>
                        <h3>Secure transactions</h3>
                        <p class="text-muted">Your money is not released until your work is done</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-shield text-primary sr-icons"></i>
                        <h3>Chillax, bro</h3>
                        <p class="text-muted">Your ideas are always protected by copyright</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="no-padding" id="portfolio">
        <div class="col-lg-12 text-center">
            <h2 class="section-heading">Some of the projects available right now</h2>
            <hr class="primary">
        </div>
        <div class="container-fluid">
            <div class="row no-gutter popup-gallery">
            @foreach($projects->slice(0, 6) as $project)
                <div class="col-lg-4 col-sm-6">
                    <a href="{{Storage::url($project->image_path)}}" class="portfolio-box">
                        <img src="{{Storage::url($project->image_path)}}"  class="img-responsive" alt="" style="vertical-align: middle;">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    {{ App\Category::find($project->category_id)->name }}
                                </div>
                                <div class="project-name">
                                    {{$project->name}}
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
            </div>
        </div>
    </section>

    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Almost there!</h2>
                    <hr class="primary">
                    <p>Creating an account is as easy as 1, 2, 3! Press the button below to get started. <br> If you already have an account you can log in by pressing the button too!</p>
                    <br>
                    <a text-align="center" href="{{route('home.index')}}" class="btn btn-danger btn-xl sr-button">SIGN UP NOW!</a>
                </div>
            </div>
        </div>
    </section>

    <!-- jQuery -->
    <script src="/landing/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/landing/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="/landing/vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="/landing/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Theme JavaScript -->
    <script src="/landing/js/creative.min.js"></script>

</body>

</html>
