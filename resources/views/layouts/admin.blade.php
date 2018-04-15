<!DOCTYPE HTML>
<html>
<head>
    <title>IdeasOwners Admin Panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="" />

            <link href="{{asset('ad/css/bootstrap.css')}}" rel="stylesheet">
<link href="{{asset('ad/fonts/font-awesome/css/font-awesome.css')}}" rel="stylesheet">
<link href="{{asset('ad/fonts/fontello/css/fontello.css')}}" rel="stylesheet">
<link href="{{asset('ad/plugins/select2/select2.min.css')}}" rel="stylesheet">
        <link href="{{asset('ad/css/style.css')}}" rel='stylesheet' type='text/css' />
        <link href="{{asset('ad/css/custom.css')}}" rel="stylesheet">
        
  
</head>
<body>

<div id="wrapper">

    <nav class="navbar-default navbar-static-top" role="navigation">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <h1> <a class="navbar-brand" href="{{url('/admin')}}" target="_blank">IdeasOwners</a></h1>
    </div>
    <a href="{{ route('logout') }}" class="btn pull-right"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
    <div class=" border-bottom">

        <div class="clearfix"></div>

        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">

                    <li>
                        <a href="{{url('/admin')}}" class=" hvr-bounce-to-right"><i class="fa fa-dashboard nav_icon " ></i><span class="nav-label black">Dashboards</span> </a>
                    </li>
                    <li>
                        <a href="{{url('admin/menu')}}" class=" hvr-bounce-to-right">
                            <i class="fa fa-sliders nav_icon " ></i>
                            <span class="nav-label black">Menu</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('admin/page')}}" class=" hvr-bounce-to-right">
                            <i class="fa fa-clone nav_icon" ></i>
                            <span class="nav-label black">Pages</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('admin/portfolio')}}" class=" hvr-bounce-to-right">
                            <i class="fa fa-clone nav_icon" ></i>
                            <span class="nav-label black">Portfolio</span>
                        </a>
                    </li>
                    
                    <li>
                        <a href="{{url('admin/add-slider')}}" class=" hvr-bounce-to-right">
                            <i class="fa fa-snowflake-o nav_icon" ></i>
                            <span class="nav-label black">Add Slider</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('admin/delete-slider')}}" class=" hvr-bounce-to-right">
                            <i class="fa fa-snowflake-o nav_icon" ></i>
                            <span class="nav-label black">Delete Slider</span>
                        </a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </div>
</nav>
    <div id="page-wrapper" class="gray-bg dashbard-1">

        <div class="content-main">
                            <div class="banner">
    <h2>
        <a href="{{url('admin')}}">Home</a>
        <i class="fa fa-angle-right"></i>
        <span>Dashboard</span>
    </h2>
</div>                        <div class="content-top" >

                
@yield('content')




                </div>

<div class="copy">
<p>&copy; 2016. All Rights Reserved</p>
</div>
</div>
<div class="clearfix"> </div>
</div>
</div>



<script type="text/javascript" src="{{asset('ad/plugins/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('ad/js/bootstrap.min.js')}}"></script>

<!-- Modernizr javascript -->
<script type="text/javascript" src="{{asset('ad/plugins/modernizr.js')}}"></script>

<!-- jQuery REVOLUTION Slider  -->
<script type="text/javascript" src="{{asset('ad/plugins/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>
<script type="text/javascript" src="{{asset('ad/plugins/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>

<!-- Isotope javascript -->

<!-- Owl carousel javascript -->
<script type="text/javascript" src="{{asset('ad/plugins/owl-carousel/owl.carousel.js')}}"></script>

<!-- Magnific Popup javascript -->
<script type="text/javascript" src="{{asset('ad/plugins/magnific-popup/jquery.magnific-popup.min.js')}}"></script>

<!-- Appear javascript -->
<script type="text/javascript" src="{{asset('ad/plugins/jquery.appear.js')}}"></script>

<!-- Parallax javascript -->
<script src="{{asset('ad/plugins/jquery.parallax-1.1.3.js')}}"></script>

<!-- Contact form -->
<script src="{{asset('ad/plugins/jquery.validate.js')}}"></script>

<!-- SmoothScroll javascript -->
<script type="text/javascript" src="{{asset('ad/plugins/jquery.browser.js')}}"></script>
<script type="text/javascript" src="{{asset('ad/plugins/SmoothScroll.js')}}"></script>

<script src="{{asset('ad/plugins/select2/select2.full.min.js')}}"></script>
<script src="{{asset('ad/plugins/tinymce/tinymce.jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('ad/plugins/tinymce/tinymce.min.js')}}"></script>
<script src="{{url('http://cdn.ckeditor.com/4.6.1/standard/ckeditor.js')}}"></script>

<!-- Initialization of Plugins -->
<script type="text/javascript" src="{{asset('ad/js/template.js')}}"></script>

<!-- Custom Scripts -->
<script type="text/javascript" src="{{asset('ad/js/custom.js')}}"></script>
<!-- Color Switcher (Remove these lines) -->


<script>
tinymce.init({
  selector: '#editor',
  plugins: 'image code',
  toolbar: 'undo redo | link image | code',
  // enable title field in the Image dialog
  image_title: true, 
  // enable automatic uploads of images represented by blob or data URIs
  automatic_uploads: true,
  // URL of our upload handler (for more details check: https://www.tinymce.com/docs/configure/file-image-upload/#images_upload_url)
  // images_upload_url: 'postAcceptor.php',
  // here we add custom filepicker only to Image dialog
  file_picker_types: 'image', 
  // and here's our custom image picker
  file_picker_callback: function(cb, value, meta) {
    var input = document.createElement('input');
    input.setAttribute('type', 'file');
    input.setAttribute('accept', 'image/*');
    
    // Note: In modern browsers input[type="file"] is functional without 
    // even adding it to the DOM, but that might not be the case in some older
    // or quirky browsers like IE, so you might want to add it to the DOM
    // just in case, and visually hide it. And do not forget do remove it
    // once you do not need it anymore.

    input.onchange = function() {
      var file = this.files[0];
      
      var reader = new FileReader();
      reader.onload = function () {
        // Note: Now we need to register the blob in TinyMCEs image blob
        // registry. In the next release this part hopefully won't be
        // necessary, as we are looking to handle it internally.
        var id = 'blobid' + (new Date()).getTime();
        var blobCache =  tinymce.activeEditor.editorUpload.blobCache;
        var base64 = reader.result.split(',')[1];
        var blobInfo = blobCache.create(id, file, base64);
        blobCache.add(blobInfo);

        // call the callback and populate the Title field with the file name
        cb(blobInfo.blobUri(), { title: file.name });
      };
      reader.readAsDataURL(file);
    };
    
    input.click();
  }
});</script>










<script>

$(document).ready(function () {
$(".select2").select2();
$("[data-toggle=tooltip]").tooltip();
});

$(document).on('show.bs.modal', function (event) {
var button = $(event.relatedTarget) // Button that triggered the modal
if ( $( "#deleteModal" ).length ) {
var link = button.data('link'); // Extract info from data-* attributes
$("#deleteModal").attr("action", link);
}
});

</script>
</body>
</html>

