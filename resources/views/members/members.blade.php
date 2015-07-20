 @extends('layouts.header')

 @section('title', 'Members')
 @section('mainTitle', 'Site Members')
 @section('subTitle', 'Members Operations')
 @section('panelHeading', 'Select Operation')



@section('content')

 
    <p>You Can Choose one of the Following Operation to be Performed on Site Members </p>


    <div class="row">
   <!-- col-md-4 --> 
   <div class="col-md-4">
      <!-- facebook-widget --> 
      <div class="facebook-widget">
         <!-- logo-container --> 
         <div class="logo-container">
            <!-- p --> 
            <p class="text-center m-n logo-container"><i class="fa fa-user-plus"></i></p>
            <!-- p --> 
         </div>
         <!-- logo-container --> <!-- media-stats-left --> 
         <div class="media-stats-right of-h">
            <!-- p --> 
            <p class="text-center m-t-xs"> </p>
            <!-- p --> <!-- p --> 

            <p class="text-center fw-thkr">{!! HTML::linkAction('MembersController@create', 'Add a New User') !!}</p>
             <!-- p --> 
         </div>
         <!-- media-stats-left --> <!-- media-stats-right --> 
          
      </div>
      <!-- facebook-widget --> 
   </div>
   <!-- col-md-4 --> <!-- col-md-4 --> 
   <div class="col-md-4">
      <!-- twitter-widget --> 
      <div class="twitter-widget">
         <!-- logo-container --> 
         <div class="logo-container">
            <!-- p --> 
            <p class="text-center m-n logo-container"><i class="fa fa-users"></i></p>
            <!-- p --> 
         </div>
         <!-- logo-container --> <!-- media-stats-left --> 
        <div class="media-stats-right of-h">
            <!-- p --> 
            <p class="text-center m-t-xs"> </p>
            <!-- p --> <!-- p --> 
            <p class="text-center fw-thkr">{!! HTML::linkAction('MembersController@index', 'Add a New User') !!}</p>
          
             <!-- p --> 
         </div>
         <!-- media-stats-left --> <!-- media-stats-right --> 
        
      </div>
      <!-- twitter-widget --> 
   </div>
   <!-- col-md-4 --> <!-- col-md-4 --> 
   <div class="col-md-4">
      <!-- google-plus-widget --> 
      <div class="google-plus-widget">
         <!-- logo-container --> 
         <div class="logo-container">
            <!-- p --> 
            <p class="text-center m-n logo-container"><i class="fa fa-user-times"></i></p>
            <!-- p --> 
         </div>

          
         <!-- media-stats-left --> <!-- media-stats-right --> 
         <div class="media-stats-right of-h">
            <!-- p --> 
            <p class="text-center m-t-xs"> </p>
            <!-- p --> <!-- p --> 
            <p class="text-center fw-thkr">{!! HTML::linkAction('MembersController@create', 'Add a New User') !!}</p>
            
             <!-- p --> 
         </div>
         <!-- media-stats-left --> <!-- media-stats-right --> 
          
      </div>
      <!-- google-plus-widget --> 
   </div>
   <!-- col-md-4 --> 
</div>



@stop


