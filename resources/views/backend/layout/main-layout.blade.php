<!DOCTYPE html>
<html>
   <head>
    <meta charset="utf-8">
    <!-- Description, Keywords and Author -->
        <meta name="description" content="Your description">
        <meta name="keywords" content="Your,Keywords">
        <meta name="author" content="ResponsiveWebInc">
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>8Locations- @yield('title')</title>
     <!-- Bootstrap -->

    <link rel="stylesheet" href="{{asset('resources/backend/css/bootstrap.min.css')}}">
    <!-- jQuery gritter -->
        <link href="{{asset('resources/backend/css/jquery.gritter.css')}}" rel="stylesheet">
        <link href="{{asset('resources/backend/css/jquery.datatables.css')}}" rel="stylesheet">
        <!-- Font awesome CSS -->
        <link href="{{asset('resources/backend/css/font-awesome.min.css')}}" rel="stylesheet">
        <!-- Custom Color CSS -->
        <link href="{{asset('resources/backend/css/less-style.css')}}" rel="stylesheet">   
        <!-- Custom CSS -->
        <link href="{{asset('resources/backend/css/style.css')}}" rel="stylesheet">
        <!-- <link href="{{asset('resources/css/style.css')}}" rel="stylesheet"> -->
        
        <!-- Favicon -->
        <link rel="shortcut icon" href="#">
        <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBsxJD0tjsf5NUVkcmC-2J_U5oBrhBdnFM&amp;libraries=places"></script>
        <!-- jQuery -->
        <script src="{{asset('resources/backend/js/jquery.js')}}"></script>
        <!-- Bootstrap JS -->
        <script src="{{asset('resources/backend/js/bootstrap.min.js')}}"></script>
       
         

  
    </head>
    <body>
         <div class="outer">
            
            @yield('sidebar')
            @yield('mainbar')
            <div class="main-content">
              @yield('content')
            </div>
        </div>
            @yield('footer') 

          </div>
         @yield('js')
        <!-- Javascript files -->
        
        <!-- jQuery UI -->
        <script src="{{asset('resources/backend/js/jquery-ui.min.js')}}"></script>
        <!-- Date Time Picker JS -->
        <script src="{{asset('resources/backend/js/bootstrap-datetimepicker.min.js')}}"></script>  
        <!-- Bootstrap wysihtml5 JS -->     
        <script src="{{asset('resources/backend/js/wysihtml5-0.3.0.js')}}"></script>
        <script src="{{asset('resources/backend/js/prettify.js')}}"></script>
        <script src="{{asset('resources/backend/js/bootstrap-wysihtml5.min.js')}}"></script>
        <script src="{{asset('resources/backend/js/jquery.flot.min.js')}}"></script>     
        <script src="{{asset('resources/backend/js/jquery.flot.stack.min.js')}}"></script>
        <script src="{{asset('resources/backend/js/jquery.flot.pie.min.js')}}"></script>
        <script src="{{asset('resources/backend/js/jquery.flot.resize.min.js')}}"></script>
        
        <!-- Validate JS -->
        <script src="{{asset('resources/backend/js/jquery.validate.js')}}"></script>
        <!-- Form wizard steps  JS -->
        <script src="{{asset('resources/backend/js/jquery.steps.min.js')}}"></script>
        <!-- jQuery Knob -->
        <script src="{{asset('resources/backend/js/jquery.knob.js')}}"></script>
        <!-- jQuery Sparklines -->
        <script src="{{asset('resources/backend/js/jquery.sparklines.js')}}"></script>
        <!-- jQuery slim scroll -->
        <script src="{{asset('resources/backend/js/jquery.slimscroll.min.js')}}"></script>
        <!-- Data Tables JS -->
        <script src="{{asset('resources/backend/js/jquery.dataTables.min.js')}}"></script> 
        <!-- Pretty Photo JS -->
        <script src="{{asset('resources/backend/js/jquery.prettyPhoto.js')}}"></script>    
        <!-- Rate It JS -->
        <script src="{{asset('resources/backend/js/jquery.rateit.min.js')}}"></script> 
        <!-- Full calendar -->
        <script src="{{asset('resources/backend/js/moment.min.js')}}"></script>
        <script src="{{asset('resources/backend/js/fullcalendar.min.js')}}"></script>
        <!-- jQuery gritter -->
        <script src="{{asset('resources/backend/js/jquery.gritter.min.js')}}"></script>
        <!-- jQuery gritter notification -->
        <script src="{{asset('resources/backend/js/custom.notification.js')}}"></script>
        <!-- Respond JS for IE8 -->
        <script src="{{asset('resources/backend/js/respond.min.js')}}"></script>
        <!-- HTML5 Support for IE -->
        <script src="{{asset('resources/backend/js/html5shiv.js')}}"></script>
        <script src="{{asset('resources/backend/js/custom.js')}}"></script>


        <!-- // <script src="http://maps.googleapis.com/maps/api/js?sensor=false&amp;libraries=places"></script> -->
      

    <script src="{{asset('resources/backend/jquery.geocomplete.js')}}"></script>

    <script>
      $(function(){
        $("#geocomplete").geocomplete({
          map: ".map_canvas",
          details: "form",
          types: ["geocode", "establishment"],
        });

        $("#find").click(function(){
          $("#geocomplete").trigger("geocode");
        });
      });
    </script>
 
    </body>
</html>