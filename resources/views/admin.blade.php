<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Teejay Properties Gallery</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


    <link type="text/css" href="css/theme.css" rel="stylesheet" />
    <link type="text/css" href="css/bootstrap-reset.css" rel="stylesheet" />
    
    <link rel="stylesheet" href="css/rs-style.css" media="screen">
    <link rel="stylesheet" href="css/settings.css" media="screen">
 
    <link type="text/css" href="css/style.css" rel="stylesheet" />
    <link type="text/css" href="css/style-responsive.css" rel="stylesheet" />

    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/thumbnail-gallery.css">

    <link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">

</head>
<body>
<header class="header-frontend">
    <div class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="fa fa-bars"></span>
                </button>
                <a class="navbar-brand" href="/">
                TeeJay
                <span>Properties</span>
                <span style="color:blue;font-size:15px;">
                Beta
                </span>
                </a>
            </div>
            <div class="navbar-collapse collapse ">
                <ul class="nav navbar-nav">
            
                    @if(Route::currentRouteName() == 'admin')
                        <li class="active"><a href="/admin">Home</a></li>
                    @else
                        <li><a href="/admin">Home</a></li>
                    @endif

                    @if(Route::currentRouteName() == 'property1')
                        <li class="active"><a href="/property1">Property1</a></li>
                    @else
                        <li><a href="/property1">Property1</a></li>
                    @endif
            
                    @if(Route::currentRouteName() == 'property2')
                        <li class="active"><a href="/property2">Property2</a></li>
                    @else
                        <li><a href="/property2">Property2</a></li>
                    @endif

                    @if(Route::currentRouteName() == 'property3')
                        <li class="active"><a href="/property3">Property3</a></li>
                    @else
                        <li><a href="/property3">Property3</a></li>
                    @endif
                    
                </ul>
            </div>
        </div>
    </div>
</header>
<!--header end-->

<div class="container gallery-container" style="margin-top: 50px;">

    @if(Route::currentRouteName() == 'admin')
        <h1><u>Property 1</u></h1>
    @elseif(Route::currentRouteName() == 'property1')
        <h1><u>Property 1</u></h1>
    @elseif(Route::currentRouteName() == 'property2')
        <h1><u>Property 2</u></h1>
    @elseif(Route::currentRouteName() == 'property3')
        <h1><u>Property 3</u></h1>
    @endif

    <p class="page-description text-center"><button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Add Image</button></p>
    

    <div class="modal fade" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <form id="form" method="POST" action="\admin\insert\{{$request}}" enctype="multipart/form-data" role="form">
                    {{csrf_field()}}

                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title">Upload Photo</h4>
                    </div>
                    <div class="modal-body">
                        <div id="messages"></div>
                        <input type="file" name="file" id="file">
                    </div>
                    <input type="hidden" name="property" value="{{$request}}">
                    <div class="modal-body">
                        <label for="title-name" class="form-control-label">Title:</label>
                        <input type="text" class="form-control" id="title-name" name="title">
                    </div>
                    
                    <div class="modal-body">
                        <label for="message-text" class="form-control-label">Details:</label>
                        <textarea class="form-control" id="message-text" name="detail"></textarea>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="tz-gallery">

        <div class="row">
            @foreach($data1 as $dat)
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <a class="lightbox" href="/img/{{$request}}/{{$dat->file_path}}">
                        <img src="/img/{{$request}}/{{$dat->file_path}}" alt="Park">
                    </a>
                    <div class="caption">
                        <h3>{{$dat->header}}</h3>
                        <p>{{$dat->details}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>

</div>

<!-- First include jquery js -->
<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script>
    baguetteBox.run('.tz-gallery');
</script>
</body>
</html>