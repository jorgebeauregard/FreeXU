<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <title>FreeXU</title>
        <meta name="generator" content="Bootply" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link href="/css/bootstrap.min.css" rel="stylesheet">
        <link href="/css/styles.css" rel="stylesheet">
        <link href="/css/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    </head>
    <body>
<div class="wrapper">
    <div class="box">
        <div class="row">
            <!-- sidebar -->
            <div class="column col-sm-2" id="sidebar">
                <a class="logo" href="#">F</a>
                <ul class="nav">
                    <li><a href="/home"><h4>Home</h4></a>
                    </li>
                    <li><a href="{{route('projects.index2')}}"><h4>Claimed projects</h4></a>
                    </li>
                    <li><a href="{{route('projects.index')}}"><h4>Submitted projects</h4></a>
                    </li>
                    <li><a href="{{route('projects.create')}}"><h4>Add a project</h4></a>
                    </li>
                </ul>
                <ul class="nav hidden-xs" id="sidebar-footer">
                    <li>
                      <a><h3>FreeXU</h3><a href="{{route('logout')}}">Logout</a></a>
                    </li>
                </ul>
            </div>
            <!-- /sidebar -->
          
            <!-- main -->
            <div class="column col-sm-10" id="main">
                <div class="padding">
                    <div class="full col-sm-9">
                    <div class="col-sm-12" id="featured">   
                          <div class="page-header text-muted">
                          @yield('title')
                          <br>
                          </div>
                        </div>
                    @yield('content')
                      
                      
                        <div class="col-sm-12">
                          <div class="page-header text-muted divider">
                            Connect with Us
                          </div>
                        </div>
                      
                        <div class="row">
                          <div class="col-sm-6">
                            <a href="#">Twitter</a> <small class="text-muted">|</small> <a href="#">Facebook</a> <small class="text-muted">|</small> <a href="#">Google+</a>
                          </div>
                        </div>
                        
                        <hr>
                      
                        <div class="row" id="footer">    
                          <div class="col-sm-6">
                            
                          </div>
                          <div class="col-sm-6">
                            <p>
                            <a href="#" class="pull-right">©Copyright Inc.</a>
                            </p>
                          </div>
                        </div>
                      
                      <hr>
                        
                      <hr>


                    </div><!-- /col-9 -->
                </div><!-- /padding -->
            </div>
            <!-- /main -->
        </div>
    </div>
</div>
    <!-- script references -->
        <script src="{{ URL::asset('//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js') }}"></script>
        <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>

    </body>
</html>