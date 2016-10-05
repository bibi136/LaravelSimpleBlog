<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Simple Blogs</title>

    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/app.css">
</head>

<body>

    <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Simple Blogs</a>
            </div>
    
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Create new Blogs</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div>
    </nav>

    
     <div class="container">
        @foreach($articles as $a) 
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <h2>{{ $a->title }}</h2>
                <p>{{ $a->content }}</p>
                <p><a href="#">Read more!</a></p>
            </div>
        </div>
        @endforeach
    </div> 
    

    <div class="container" id="footer">
        <div class="row text-center">
            <div class="col-sm-6 col-sm-offset-3">
                <p>Copyright &copy; by Laptrinh.io</p>
            </div>
        </div>
    </div>

    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    
</body>
</html>