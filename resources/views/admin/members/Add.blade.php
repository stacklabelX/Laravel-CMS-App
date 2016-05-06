 @extends('layouts.header')

 @section('title', 'Add Member')
 @section('mainTitle', 'Members')
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
   
 <button data-toggle="collapse" class="btn btn-info md-btn collapsed" aria-hidden="true" aria-expanded="false" data-target="#demo"> + Add Restaurant </button>
{!!  Form::open(array('id'=> 'user_form', 'url' => array('admin/members'))) !!}
<div class="error"></div> 
<div class="col-md-12">
<div class="post-widget collapse" id="demo" style="height: 5px;">
                     <!-- panel --> 
                     <div class="panel panel-default">
                        <!-- panel-heading --> 
                        <div class="panel-heading text-uppercase fw-thk"><i class="fa fa-user-plus"></i> Add a Member Account {!! HTML::linkAction('MembersController@index', 'list All User', array(), array('class'=> 'btn btn-info md-btn pull-right')) !!}
</div>
                        <!-- panel-heading --> <!-- panel-body --> 
                        <div class="panel-body" style="padding: 0px 50px 0px 30px;">
                          
  <!-- form-group --> 
  <div class="form-group">

    <div class="input-md input-field"> 
         {!! Form::text('username', Input::old('username'), array('id' => 'username',"minlength"=>"2" ,"required" ,'class' => 'validate')) !!}
       <label for="username" class="">Username</label>
    </div>

 <div class="input-md input-field"> 
   
     {!! Form::email('email', Input::old('email'), array("required" ,'class' => 'validate', 'id' => 'email')) !!}
      <label for="email" class="">Email</label>
    </div>

 <div class="input-md input-field"> 
   
       {!! Form::text('phone', Input::old('phone'), array('id' => 'phone',"required" ,'class' => 'validate')) !!}
       <label for="phone" class="">Phone</label>
    </div>
    

  
  <!-- form-group --> <!-- form-group --> 
  
  <!-- form-group --> <!-- form-group --> 
  <div class="form-group">
   {!! Form::submit('Create Member!', array( 'data-ui-sref'=>'app.views.dashboard' ,'class' => 'btn btn-success md-btn text-uppercase')) !!}
     </div>
  <!-- form-group --> <!-- form-group --> 
  
  <!-- form-group --> 
                  <!-- form --> 
                        </div>
                        <!-- panel-body --> 
                     </div>
                     <!-- panel --> 
                  </div>
                  </div>

</div>

    {!! Form::close() !!}

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js"></script>
<script>
$("#user_form").validate({
   errorElement: "span"
});
</script>
@stop


