 @extends('layouts.header')

 @section('title', 'Member Details')
 @section('mainTitle', 'Members')
 @section('subTitle', 'Member Details')
 @section('panelHeading', '')



@section('content')

<!-- will be used to show any messages -->
@if (Session::has('message'))
<div class="alert alert-success">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Success!</strong>{{ Session::get('message') }}
</div>
   
@endif
@if (Session::has('error'))
   <div class="alert alert-danger">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Error!</strong>{{ Session::get('error') }}
</div>
@endif

 <div class="form-group"> 
    <p>Update Inforation of {!! $user['username'] !!} </p>

    <br/>

    {!! Form::open(['method' => 'PATCH' , 'files' => true , 'enctype'=>"multipart/form-data" ,'action' =>['MembersController@update', $user['id']]]) !!}


                        


<div class="col-md-10">
                     <!-- panel --> 
                     <div class="container">
      <div class="row">
      
        <div class="col-xs-10 toppad" >
   
   
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">{!! $user['firstName'] . $user['lastName']  !!}</h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"> 

                    <img alt="User Pic" src='{{ URL::asset("images/users/".$user["profilePic"]) }}' class="img-circle img-responsive"> 
                        
                  {!! Form::file('image'); !!}
                </div>
                
                   
                <div class=" col-md-9 col-lg-9 "> 


<div class="row">
                                      <div class="col-xs-11">

                        <div class="form-group">
                                 <div class="input-md input-field"> 
                                 
                                    {!!
                                      Form::text('username',$user['username'], 
                                      array( 'id' => 'username' ,
                                      'class' => 'validate')) 
                                    !!} 
                                  <label for="username" class="">Username</label> </div>
                                </div>
                                       <!-- col-xs-6 --> 
                               <div class="row">
                                      <div class="col-xs-6">

                                        <div class="form-group">
                                           <div class="input-md input-field"> 
                                           
                                              {!!
                                                Form::text('firstName',$user['firstName'], 
                                                array( 'id' => 'firstName' ,
                                                'class' => 'validate')) 
                                              !!} 
                                            <label for="firstName" class="">First name</label> </div>
                                          </div>
                                    </div>
                                       <div class="col-xs-6">

                                          <div class="form-group">
                                             <div class="input-md input-field"> 
                                             
                                                {!!
                                                  Form::text('lastName',$user['lastName'], 
                                                  array( 'id' => 'lastName' ,
                                                  'class' => 'validate')) 
                                                !!} 
                                              <label for="lastName" class="">Last name</label> </div>
                                            </div>
                                    </div>
                              </div>
                             <div class="form-group">
                                 <div class="input-md input-field"> 
                                 
                                    {!!
                                      Form::text('email',$user['email'], 
                                      array( 'id' => 'email' ,
                                      'class' => 'validate')) 
                                    !!} 
                                  <label for="email" class="">Email</label> </div>
                                </div>

                                 <div class="form-group">
                                 <div class="input-md input-field"> 
                                 
                                    {!!
                                      Form::text('phone',$user['phone'], 
                                      array( 'id' => 'phone' ,
                                      'class' => 'validate')) 
                                    !!} 
                                  <label for="phone" class="">Phone</label> </div>
                                </div>
                              <div class="row">
                                      <div class="col-xs-12">

                                        <div class="form-group">
                                           <div class="input-md input-field"> 
                                           
                                              {!!
                                                Form::text('address',$user['address'], 
                                                array( 'id' => 'address' ,
                                                'class' => 'validate')) 
                                              !!} 
                                            <label for="address" class="">Street</label> </div>
                                          </div>
                                    </div>
                                      
                              </div>

                            


                                 <div class="form-group">
                                 <div class="input-md input-field"> 
                                 
                                    {!!
                                      Form::text('businessName',$user['businessName'], 
                                      array( 'id' => 'businessName' ,
                                      'class' => 'validate')) 
                                    !!} 
                                  <label for="businessName" class="">Business Name</label> </div>
                                </div>



                                              <!-- col-xs-6 --> 
                               <div class="row">
                                      <div class="col-xs-6">

                                          <div class="form-group">
                                           <div class="input-md input-field"> 
                                           
                                              {!!
                                                Form::text('businessLocation',$user['businessLocation'], 
                                                array( 'id' => 'businessLocation' ,
                                                'class' => 'validate')) 
                                              !!} 
                                            <label for="businessLocation" class="">Business Address</label> </div>
                                          </div>
                                    </div>
                                       <div class="col-xs-6">

                                             <div class="form-group">
                                                 <div class="input-md input-field"> 
                                                 
                                                    {!!
                                                      Form::text('businessPhone',$user['businessPhone'], 
                                                      array( 'id' => 'businessPhone' ,
                                                      'class' => 'validate')) 
                                                    !!} 
                                                  <label for="businessPhone" class="">Business Phone</label> </div>
                                                </div>
                                    </div>
                              </div>
                               
                              <div class="form-group">
                                 <div class="input-md input-field"> 
                                 
                                    {!!
                                      Form::text('Department',$user['Department'], 
                                      array( 'id' => 'Department' ,
                                      'class' => 'validate')) 
                                    !!} 
                                  <label for="Department" class="">Department</label> </div>
                                </div>
                                </div>
                                </div>

 
   {!! Form::submit('Update!', array( 
                'data-ui-sref'=>'app.views.dashboard' ,
                'class' => 'btn btn-default btn-primary text-uppercase ls-xs fw-lght'))
     !!}
                  
         
                </div>
              </div>
            </div>
                 <div class="panel-footer">
                        <a data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-envelope"></i></a>
                        <span class="pull-right">
                             <a data-original-title="Remove this user" onclick="changeStatus({!! $user['id'] !!},'PUT',3)" data-toggle="tooltip" type="button" class="btn btn-square btn-danger"><i class="glyphicon glyphicon-remove"></i> Delete Profile</a>
                        </span>
                    </div>
            
          </div>
        </div>
      </div>
    </div>
                     <!-- panel --> 
                  </div>

</div>

    {!! Form::close() !!}

@stop


