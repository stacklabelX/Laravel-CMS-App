 @extends('layouts.header')

 @section('title', 'Member Details')
 @section('mainTitle', 'Members')
 @section('subTitle', 'Member Details')
 @section('panelHeading', '')



@section('content')

 <div class="form-group">	
    <p>Welcome to the Setup of My Proper Admin Panel</p>

    <br/>

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
                        <td>Gender</td>
                        <td>{!! $user['gender'] !!}</td>
                      </tr>
                        <tr>
                        <td>Home Address</td>
                        <td>{!! $user['street'] . $user['suburb']  . $user['postcode'] !!}</td>
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
                        <a data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-envelope"></i></a>
                        <span class="pull-right">
                            <a href="{!! $user['id']!!}/edit" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
                            <a data-original-title="Remove this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
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


