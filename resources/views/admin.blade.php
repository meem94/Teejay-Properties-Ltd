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

    <!-- <style type="text/css">        
                      
            .topright {
    position: absolute;
    top: 8px;
    right: 16px;
    font-size: 18px;
}       
        </style> -->
    <script type="text/javascript">
/*to make alerts disappear automatically*/
  window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove(); 
    });
}, 4000);
</script>

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
                        <li class="active"><a href="/admincontol.property1">Property1</a></li>
                    @else
                        <li><a href="/admincontol.property1">Property1</a></li>
                    @endif
            
                    @if(Route::currentRouteName() == 'property2')
                        <li class="active"><a href="/admincontol.property2">Property2</a></li>
                    @else
                        <li><a href="/admincontol.property2">Property2</a></li>
                    @endif

                    @if(Route::currentRouteName() == 'property3')
                        <li class="active"><a href="/admincontol.property3">Property3</a></li>
                    @else
                        <li><a href="/admincontol.property3">Property3</a></li>
                    @endif
                    
                </ul>
            </div>
        </div>
    </div>
</header>
<!--header end-->

<div class="container gallery-container" style="margin-top: 70px;">

    @if(Session::has('alert-success'))
      <div class="alert alert-success alert-dismissable fade in" style="margin-top: 30px;">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>{{ Session::get('alert-success') }}</strong>
      </div>
    @endif
    @if (count($errors) > 0)
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

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
                        <input required type="file" name="file" id="file">
                    </div>
                    <input type="hidden" name="property" value="{{$request}}">
                    <div class="modal-body">
                        <label for="title-name" class="form-control-label">Title:</label>
                        <input required type="text" class="form-control" id="title-name" name="title">
                    </div>
                    
                    <div class="modal-body">
                        <label for="message-text" class="form-control-label">Details:</label>
                        <textarea required class="form-control" id="message-text" name="detail"></textarea>
                    </div>

                    <div class="modal-body">
                        <label for="hover-text" class="form-control-label">Hover:</label>
                        <input required type="text" class="form-control" id="hover-text" name="hover1" placeholder="0 / 1">
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
                        <!-- <span class="close">&times;</span> -->
                        <img src="/img/{{$request}}/{{$dat->file_path}}">

                        <div class="edit">
                            <a type="submit" data-toggle="modal" data-target="#exampleModal{{$dat->id}}"    
                                data-whatever="@mdo" style="margin-left: 50px;">
                                <i class="fa fa-pencil fa-lg"></i>
                            </a>
                        
                            <a type="submit"  
                                data-toggle="modal" data-target="#deleteModal{{$dat->id}}" 
                                data-whatever="@mdo">
                                <i class="fa fa-times fa-lg"></i>
                            </a>
                        </div>
                    </a>
                    
                    <div class="caption">
                        <h3>{{$dat->header}}</h3>
                        <p>{{$dat->details}}</p>
                    </div>
                </div>
                <div class="modal fade" id="deleteModal{{$dat->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <strong class="modal-title text-center">
                            <h3>Are you sure?</h3>
                          </strong>
                        </div>
                        <div class="modal-body col-md-offset-3">
                          <form method="POST" action="/admin/delete/{{$request}}">
                            {{csrf_field()}}
                            <input type="hidden" name="property" value="{{$request}}">
                            <input type="hidden" name="rid" value="{{$dat->id}}">
                            <input type="hidden" name="filepath" value="{{$dat->file_path}}">
                            <button style="margin-left: 30px;" type="submit" class="btn btn-primary btn-md">
                              DELETE
                            </button>
                            <button style="margin-left: 10px;" type="submit" data-dismiss="modal" class="btn btn-primary btn-md">
                              CANCEL
                            </button>

                          </form>
                        </div>
                      </div>
                    </div>
                </div>

                <div class="modal fade" id="exampleModal{{$dat->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <strong class="modal-title" id="exampleModalLabel">
                            Edit Image Details
                          </strong>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form method="POST" action="/admin/edit/{{$request}}" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <input type="hidden" name="property" value="{{$request}}">
                            <input type="hidden" name="rid" value="{{$dat->id}}">
                            <div class="form-group">
                              <label   class="form-control-label"> 
                                Title:
                              </label>
                              <input autofocus required="" type="text" name="edit_title" value="{{$dat->header}}" 
                              class="form-control"  >
                            </div>
                            <div class="form-group">
                              <label   class="form-control-label"> 
                                Details:
                              </label>
                              <input required="" type="text" name="edit_detail" class="form-control" value="{{$dat->details}}" 
                              >
                            </div>
                            <div class="form-group">
                              <label   class="form-control-label"> 
                                Hover:
                              </label>
                              <input required="" type="text" name="edit_hover" class="form-control" value="{{$dat->hover}}" 
                              >
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">
                                    Close</button>
                                <button type="submit" class="btn btn-primary btn-md">Update</button>
                            </div>
                          </form>
                        </div>
                      </div>
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