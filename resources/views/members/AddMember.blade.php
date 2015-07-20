 @extends('layouts.header')

 @section('title', 'Add Member')
 @section('mainTitle', 'Site Home')
 @section('subTitle', 'InnerPage')
 @section('panelHeading', 'Making the Aweosome')



@section('content')

 <div class="form-group">	
    <p>Welcome to the Setup of My Proper Admin Panel</p>

    <br/>

    {!! Form::open() !!}

    
<div class="col-md-10">
                     <!-- panel --> 
                     <div class="panel panel-default">
                        <!-- panel-heading --> 
                        <div class="panel-heading text-uppercase fw-thk">Text Box - Style#1</div>
                        <!-- panel-heading --> <!-- panel-body --> 
                        <div class="panel-body">
                           <!-- form --> 
                           <form role="form">
                              <!-- form-group --> 
                              <div class="form-group">
                              	<div class="col-md-6">
                                 <!-- input-text --> <span class="input input--default" data-input-text=""> <input id="FirstName" class="input_field input_field--default"> <label for="FirstName" class="input_label input_label--default"> <span class="input_label-content input_label-content--default">First name</span> </label> </span> <!-- input-text --> 
                              </div>
                              <!-- form-group --> <!-- form-group --> 
                             <div class="col-md-6">
                                 <!-- input-text --> <span class="input input--default" data-input-text=""> <input id="LastName" class="input_field input_field--default"> <label for="LastName" class="input_label input_label--default"> <span class="input_label-content input_label-content--default">Last name</span> </label> </span> <!-- input-text --> 
                              </div>
                              </div>
                              <!-- form-group --> <!-- form-group --> 
                              <div class="form-group">
                                 <!-- input-text --> <span class="input input--default" data-input-text=""> <input id="input--default__cpassword" class="input_field input_field--default"> <label for="input--default__cpassword" class="input_label input_label--default"> <span class="input_label-content input_label-content--default">Confirm Password</span> </label> </span> <!-- input-text --> 
                              </div>
                              <!-- form-group --> <!-- form-group --> 
                              <div class="form-group">
                                 <!-- input-text --> <span class="input input--default" data-input-text=""> <input id="input--default_email" class="input_field input_field--default"> <label for="input--default_email" class="input_label input_label--default"> <span class="input_label-content input_label-content--default">Email</span> </label> </span> <!-- input-text --> 
                              </div>
                              <!-- form-group --> <!-- form-group --> 
                              <div class="form-group">
                                 <!-- checkbox --> 
                                 <div class="checkbox p-t-md">
                                    <!-- checkbox-style-box --> <label for="checkbox-style-md1" class="checkbox-md success"> <input type="checkbox" name="checkbox1" id="checkbox-style-md1"> <span>Don't forget me</span> </label> <!-- checkbox-style-box --> 
                                 </div>
                                 <!-- checkbox --> 
                              </div>
                              <!-- form-group --> <!-- form-group --> 
                              <div class="form-group"> <button class="btn btn-primary text-uppercase">Register</button> </div>
                              <!-- form-group --> 
                           </form>
                           <!-- form --> 
                        </div>
                        <!-- panel-body --> 
                     </div>
                     <!-- panel --> 
                  </div>

</div>

    {!! Form::close() !!}

@stop


