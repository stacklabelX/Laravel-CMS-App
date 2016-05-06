 @extends('layouts.header')

 @section('title', 'Member Profile')
 @section('mainTitle', 'Members')
 @section('subTitle', 'Member Profile')
 @section('panelHeading', '')



@section('content')

 <div class="form-group">	
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
    
    {!! Form::open() !!}

    
<div class="col-md-10">
                     <!-- panel --> 
                     <div class="container">
      <div class="row">
      
        <div class="col-xs-12 toppad" >
   
   
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">{!! $user['firstName'] . $user['lastName']  !!}</h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center">
               <img alt="User Pic" src='{{ URL::asset("images/users/".$user["profilePic"]) }}' class="img-circle img-responsive"> 
           
               </div>
                
                   
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Username:</td>
                        <td>{!! $user['username'] !!}</td>
                      </tr>
                      <tr>
                        <td>Full Name</td>
                        <td>{!! $user['firstName'] . $user['lastName']  !!}</td>
                      </tr>
                      <tr>
                        <td>Email</td>
                        <td>{!! $user['email'] !!}</td>
                      </tr>
                   
                          
                             <tr>
                         
                      </tr>
                        <tr>
                        <td>Home Address</td>
                        <td>{!! $user['address']  . $user['postcode'] !!}</td>
                      </tr>
                      <tr>
                        <td>Email</td>
                        <td><a href="mailto:info@support.com">{!! $user['email']   !!}</a></td>
                      </tr>
                      <tr>
                        <td>Phone Number</td>
                        <td>{!! $user['phone']   !!}
                        </td>
                          </tr> 

                        <tr >
                        <td colspan='2'><h4 class="fw-thkr"><br/><br/>Business Card</h4></td>
                       </tr>
                       <tr><td>
                          <div class="col-md-6 invoice-details-container">
  <div class="invoice-to-container">
    <p class="fw-lght text-uppercase ls-xs">Details</p>
    <h2 class="fw-thkr text-uppercase m-n m-b-lg">{!! $user['firstName'] . $user['lastName']  !!}</h2>
    <address>
      <p class="fw-lght ls-xs"><i class="fa fa-fax"></i> {!! $user['businessName']   !!}</p>
      <p class="fw-lght ls-xs"><i class="glyphicon glyphicon-map-marker"></i> {!! $user['businessLocation']   !!}</p>
      <p class="fw-lght ls-xs"><i class="glyphicon glyphicon-phone"></i> {!! $user['businessPhone']   !!}</p>
      <p class="fw-lght ls-xs"><i class="glyphicon glyphicon-envelope"></i> {!! $user['Department']   !!}</p>
    </address>
  </div>
</div>
                       </td></tr>
                     
                    </tbody>
                  </table>
                   
                </div>
              </div>
            </div>
                 <div class="panel-footer">
                        <a data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-square btn-primary"><i class="glyphicon glyphicon-envelope"></i> Email</a>
                        <span class="pull-right">
                            <a href="{!! $user['id']!!}/edit" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-square btn-warning"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                            @if ($user['active'] === 1)
                            <a data-original-title="Remove this user"  onclick="changeStatus({!! $user['id'] !!},'PUT',2)" data-toggle="tooltip" type="button" class="btn btn-square btn-danger"><i class="glyphicon glyphicon-remove"></i> Ban Account</a>
                   
           @elseif ($user['active'] === 2)
                            <a data-original-title="Remove this user" onclick="changeStatus({!! $user['id'] !!},'PUT',1)" data-toggle="tooltip" type="button" class="btn btn-square btn-danger"><i class="glyphicon glyphicon-remove"></i>Un-Ban Account</a>
          @else
            <i class="fa fa-thumbs-up success"></i>
          @endif 
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


