 @extends('layouts.header')

 @section('title', 'Add Member')
 @section('mainTitle', 'Site Home')
 @section('subTitle', 'Add members')
 @section('panelHeading', ' ')



@section('content')

 <div class="form-group">	
    <p>Please Enter the Following Details to add Users</p>

    <br/>
<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif
   
{{ HTML::ul($errors->all()) }}
   
{!!  Form::open(array('url' => array('members'))) !!}
 
    
<div class="col-md-10">
                     <!-- panel --> 
                     <div class="panel panel-default">
                        <!-- panel-heading --> 
                        <div class="panel-heading text-uppercase fw-thk"><i class="fa fa-user-plus"></i> Add a Member Account</div>
                        <!-- panel-heading --> <!-- panel-body --> 
                        <div class="panel-body">
                           <!-- form --> 
                          <form role="form" class="c">
  <!-- form-group --> 
  <div class="form-group">
    <!-- input-text --> 
    <span class="input input--default" data-input-text=""> 
         {!! Form::text('username', Input::old('username'), array('id' => 'username' ,'class' => 'input_field input_field--default')) !!}
        <label for="username" class="input_label input_label--default">
           <span class="input_label-content input_label-content--default">User name</span>
        </label>
    </span> <!-- input-text --> 
  </div>

     <div class="form-group">
    <!-- input-text --> <span class="input input--default" data-input-text="">
     {!! Form::email('email', Input::old('email'), array('class' => 'input_field input_field--default', 'id' => 'email')) !!}
      <label for="email" class="input_label input_label--default"> <span class="input_label-content input_label-content--default">Email</span> </label> </span> <!-- input-text --> 
  </div>
  <!-- form-group --> <!-- form-group --> 
  <div class="form-group">
    <!-- input-text --> <span class="input input--default" data-input-text="">
       {!! Form::text('phone', Input::old('phone'), array('id' => 'phone' ,'class' => 'input_field input_field--default')) !!}
        <label for="phone" class="input_label input_label--default"> <span class="input_label-content input_label-content--default">Phone</span> </label> </span> <!-- input-text --> 
  </div>
  <!-- form-group --> <!-- form-group --> 
  
  <!-- form-group --> <!-- form-group --> 
  <div class="form-group">
   {!! Form::submit('Create the Nerd!', array( 'data-ui-sref'=>'app.views.dashboard' ,'class' => 'btn btn-default btn-primary text-uppercase ls-xs fw-lght')) !!}
     </div>
  <!-- form-group --> <!-- form-group --> 
  
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


