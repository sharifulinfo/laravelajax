<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link rel="stylesheet" type="text/css" href="{{url('frontend')}}/bootstrap.min.css">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <!-- Styles -->
        
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <section>
                <div class="container">
                    <nav class="navbar navbar-default" role="navigation">
                        <div class="container-fluid">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand" href="#">Brand</a>
                            </div>
                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav">
                                    <li class="active"><a href="#">Link</a></li>
                                    <li><a href="#">Link</a></li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Action</a></li>
                                            <li><a href="#">Another action</a></li>
                                            <li><a href="#">Something else here</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#">Separated link</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#">One more separated link</a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <form class="navbar-form navbar-left" role="search">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Search">
                                    </div>
                                    <button type="submit" class="btn btn-default">Submit</button>
                                </form>
                                <ul class="nav navbar-nav navbar-right">
                                    <li><a href="#">Link</a></li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Action</a></li>
                                            <li><a href="#">Another action</a></li>
                                            <li><a href="#">Something else here</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#">Separated link</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div><!-- /.navbar-collapse -->
                        </div><!-- /.container-fluid -->
                    </nav>
                </div>
            </section>
                    @if (Route::has('login'))
                    <div class="top-right links">
                        @auth
                        <a href="{{ url('/home') }}">Home</a>
                        @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                        @endauth
                    </div>
                    @endif
                    <section>
                        <div class="container">
                            <div class="row">

                                <div class="col-lg-6">
                                    <form role="form">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Name</label>
                                            <input type="text" class="form-control" id="name" placeholder="Enter email" name="name">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Department</label>
                                            <input type="text" class="form-control" id="dep" placeholder="deparment" name="dep">
                                        </div>
                                        <input type="hidden" name="_token" value="{{csrf_token()}}">  
                                        <button type="submit" id = "show" class="btn btn-default">Submit</button>
                                    </form>
                                </div>

                               <!--  <div class="col-lg-6">
                                    <div class="bs-example">
                                        <table class="table" id="autoview">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Name</th>
                                                    <th>Deparment</th> 
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($result as $row)
                                                <tr>
                                                    <td>1</td>
                                                    <td>{{$row->name}}</td>
                                                    <td>{{$row->dep}}</td> 
                                                </tr>
                                                @endforeach
                                                 
                                            </tbody>
                                        </table>
                                    </div>
                                </div> -->

                            </div>
                        </div>
                    </section>
                    
                </div>
                <script src="{{url('frontend')}}/jquery.js"></script>
                <script src="{{url('frontend')}}/bootstrap.min.js"></script>

                <script type="text/javascript">
                    $('#show').click(function(){  
                        var name = $('#name').val();
                        var dep = $('#dep').val();
                       $.ajax({
                        url:"{{url('/check')}}",
                        method:"POST",
                         data:{name:name,dep:dep},
                        success:function(data){ 
                             console.log('Something');
                        } 
                    });
                });
                    setInterval(function(){
                        $('#autoview').load("{{url('/showdata')}}").fadeIn('slow');
                    },1000);
                </script>
            </body>
        </html>