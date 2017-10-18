<!DOCTYPE html>
<html>
  <head>
    <title>Geolocation</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        width: 100%;
        height: 700px;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 90%;
        margin: 0 auto;
        padding: 0;
      }
      .marker { width: 250px; padding: 20px;}
    </style>
     <script src="{{asset('resources/backend/js/jquery.js')}}"></script>
  </head>
  <body>
    <div id="map"></div>
    <script>
     var staticLocation;
      
             function initMap() {


                    var staticLocation = [
                      
                      

                      {"id":1,"name":"Lahore","img":"no-img.png","lat":31.5546061,"lng":74.3571581,"locate":"31.554606,74.357158","locate_type":"PLACES","address":"Lahore Pakistan","created_at":"2017-10-15 18:50:59","updated_at":"2017-10-15 18:50:59"},{"id":2,"name":"Lahore Zoo","img":"no-img.jpg","lat":31.5566068,"lng":74.3260359,"locate":"31.556607,74.326036","locate_type":"PLACES","address":null,"created_at":"2017-10-15 19:42:13","updated_at":"2017-10-15 19:42:13"},{"id":3,"name":"Naqsha Stop","img":"no-img.jpg","lat":31.5172489,"lng":74.31633,"locate":"31.517249,74.31633","locate_type":"PLACES","address":"Naqsha Stop, Lahore Metro Bus System, Lahore, Pakistan","created_at":"2017-10-15 20:03:54","updated_at":"2017-10-15 20:03:54"},{"id":4,"name":"Muslim Town Mor Flyover","img":"no-img.jpg","lat":31.5199994,"lng":74.3260596,"locate":"31.519999,74.32606","locate_type":"PLACES","address":"Muslim Town Mor Flyover, Lahore, Punjab, Pakistan","created_at":"2017-10-15 20:04:34","updated_at":"2017-10-15 20:04:34"},{"id":5,"name":"Kalma Chowk Flyover","img":"no-img.jpg","lat":31.5043031,"lng":74.331574,"locate":"31.504303,74.331574","locate_type":"PLACES","address":"Kalma Chowk Flyover, Lahore, Pakistan","created_at":"2017-10-15 20:04:58","updated_at":"2017-10-15 20:04:58"},{"id":6,"name":"Gaddafi Stadium","img":"no-img.jpg","lat":31.513464,"lng":74.3334371,"locate":"31.513464,74.333437","locate_type":"PLACES","address":"Qazaffi Stadium, Lahore, Pakistan","created_at":"2017-10-15 20:05:19","updated_at":"2017-10-15 20:05:19"},{"id":7,"name":"Thally","img":"no-img.jpg","lat":35.3236473,"lng":76.1539719,"locate":"35.323647,76.153972","locate_type":"PLACES","address":"Thallay Valley, Ghanche ,Baltistan","created_at":"2017-10-15 20:14:14","updated_at":"2017-10-15 20:14:14"},{"id":8,"name":"Baltoro Thalay","img":"no-img.jpg","lat":35.3490806,"lng":76.1129019,"locate":"35.3490806,76.1129019","locate_type":"PLACES","address":"Thalay Baltoro, Village","created_at":"2017-10-15 20:17:11","updated_at":"2017-10-15 20:17:11"},{"id":9,"name":"Daltir","img":"no-img.jpg","lat":35.3605223,"lng":76.1283713,"locate":"35.360522,76.128371","locate_type":"PLACES","address":"Thalay Daltir, 2nd Last Village of Thalay","created_at":"2017-10-15 20:19:41","updated_at":"2017-10-15 20:19:41"},{"id":10,"name":"Khasomic Thalay","img":"no-img.jpg","lat":35.37598,"lng":76.12427,"locate":"35.37598,76.12427","locate_type":"PLACES","address":"Khasomic Thalay, Last Village of Thalay Valley","created_at":"2017-10-15 20:21:58","updated_at":"2017-10-15 20:21:58"},{"id":11,"name":"Broad Peak Boys Hostel","img":"no-img.jpg","lat":31.5179784,"lng":74.3150087,"locate":"31.5179784,74.3150087","locate_type":"buliding.png","address":"Broad Peak Boys Hostel , Wahdat Road Naqsha Stop Lahore","created_at":"2017-10-16 19:56:56","updated_at":"2017-10-16 19:56:56"}
                       
                      ];
                      
                           var map = new google.maps.Map(document.getElementById('map'), {
                          zoom: 14,
                          center: new google.maps.LatLng(31.5546, 74.3572),
                          mapTypeId: google.maps.MapTypeId.ROADMAP
                        });

                         marker = new google.maps.Marker({
                                  position: new google.maps.LatLng(31.5546, 74.3572),
                                 
                                  map: map
                                });

                        var infowindow = new google.maps.InfoWindow({});

                        var marker, endeX;

                              for(endeX in staticLocation){
                                  
                                   marker = new google.maps.Marker({
                                  position: new google.maps.LatLng(staticLocation[endeX].lat, staticLocation[endeX].lng),
                                  icon:'uploads/marker.png',
                                  map: map
                                });

                                google.maps.event.addListener(marker, 'click', (function (marker, endeX) {
                                  return function () {
                                    infowindow.setContent('<h2>'+staticLocation[endeX].name+'</h2><img src=uploads/' +staticLocation[endeX].img+' width=220px height=120px alt=><p>'+staticLocation[endeX].address+'</p>');
                                    infowindow.open(map, marker);
                                  }
                                })(marker, endeX));
                              }
                          }
            
      //<img src=uploads/no-img.jpg width=220px height=100px alt=>

      
  
 
  


    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBsxJD0tjsf5NUVkcmC-2J_U5oBrhBdnFM&callback=initMap">
    </script>
  </body>
</html>