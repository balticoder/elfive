 @extends('backend/layout/main-layout')
  
     @section('title','Dashboard')
<!-- sidebar section start -->
  @section('sidebar')
       @include('backend/layout/sidebar')
    @endsection
<!-- End side Section -->

  @section('mainbar')
       @include('backend/layout/main-bar')
    @endsection

<!-- Start Main Content -->
    @section('content')
        <p>            
                                @if(Session::has('msg'))
                                   <b class="text-info"> {{Session::get('msg')}}</b>
                                @endif</p>
                                
       <div class="container-fluid">
           <div class="row">
                <div class="col-md-12">
                      <div class="map_canvas"></div>

    <form method="POST" action="{{url('post_location')}}">
      {{ csrf_field()}}
      <input id="geocomplete" type="text" placeholder="Type in an address" value="Pakistan" class="form-control" />
      <br><input id="find" type="button" value="find" class="btn btn-primary"/>

      <fieldset>
        <h3>Address-Details</h3>
         <table class="table">
               <thead>
                <tr>
                  <th></th>
                  <th></th>
                </tr>
               </thead>
               <tbody>
                  <tr>
                    <td>
                          <label>Name</label>
                            <input name="name" type="text" value="" class="form-control">

                            <label>Select Image</label>
                            <input name="img" type="file" value="" class="form-control">

                            <label>Latitude</label>
                            <input name="lat" type="text" value="" class="form-control">

                            <label>Longitude</label>
                            <input name="lng" type="text" value="" class="form-control">
                    </td>
                    <td>
                         <label>Location</label>
                            <input name="location" type="text" value="" class="form-control">

                            <label>Location Type</label>
                            <input name="type" type="radio" value="place.png" > Places
                            <input name="type" type="radio" value="buliding.png" > Building
                            <input name="type" type="radio" value="bank.png" > Bank
                            <input name="type" type="radio" value="house.png" > House
                            <input name="type" type="radio" value="school.png" > School&college
                            <input name="type" type="radio" value="uni.png" > University
                             <br><br>
                            <label>Formatted Address</label>
                            <textarea name="address" type="text" value="" class="form-control" style="height:110px"></textarea>
                           <br>
                            <input type="submit" name="" class="btn btn-primary pull-right" value="ADD LOCATION">
                    </td>
                  </tr>
                </tbody>
         </table>
        

        

        
      </fieldset>
    </form>
                </div>
           </div>
       </div>
     
    @endsection


    <!-- End of Content Section -->

<!-- Footer Section -->
  @section('footer')

     @include('backend/layout/footer')

  @endsection