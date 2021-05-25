      
      @extends('layoutHome')
      @section('content')  
<!-- BANNER -->
@include('web.home.bannerNone')
<!-- BANNER SLIDER -->
@include('web.home.bannerSlider')
<!-- FLASH SALE -->
@include('web.home.flashSale')
<!-- LIST FLASH SALE -->
@include('web.home.listFlashSale')
<!-- SHOW LIST PRODUCT IN HOME-->
@include('web.home.listProductHome')    
      @endsection


