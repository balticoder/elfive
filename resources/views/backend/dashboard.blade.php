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

       
     
    @endsection


    <!-- End of Content Section -->

<!-- Footer Section -->
  @section('footer')

     @include('backend/layout/footer')

  @endsection