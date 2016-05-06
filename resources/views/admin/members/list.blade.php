 @extends('layouts.header')

 @section('title', 'All Member')
 @section('mainTitle', 'Members')
 @section('subTitle', 'All members')
 @section('panelHeading', 'Listing All Members')



@section('content')
<link  rel="stylesheet"  href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css" />

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


 {!! HTML::ul($errors->all() , array("class"=>"alert alert-danger" , "style" => "padding-left:20px")) !!} 

{!! HTML::link('#', '+ Add a New User',  
 array('class'=> 'btn btn-info md-btn pull-right',
  "data-toggle"=>"collapse", 
  "aria-hidden"=>"true",
  "aria-expanded"=>"false",
  "data-target"=>"#demo",
  "style" => "margin:20px"
  )) !!}
   
   {!!Form::open(array('id'=> 'user_form', 'url' => array('admin/members'))) !!}
<div class="error"></div> 
<div class="col-md-12">
<div class="post-widget collapse" id="demo" style="height: 5px;">
                     <!-- panel --> 
                     <div class="panel panel-default">
                        <!-- panel-heading --> 
                        <div class="panel-heading text-uppercase fw-thk"><i class="fa fa-user-plus"></i> Add a Member Account </div>
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

 

    
<div class="col-md-12">


                     <!-- panel --> 
                     <div class="panel panel-default">
                        <!-- panel-heading --> 
                         <!-- panel-heading --> <!-- panel-body --> 
                        <div class=" post-widget panel-body" style="border-color: #5cb85c;">
                           <!-- form --> 
                             
                             


                              <div class="table-responsive col-md-12">

   <table  id="myTable"  class="table table-striped">
      <thead>
         <tr>
            <th># </th>
            <th>First Name </th>
            <th>Email </th>
            <th>Contact </th>
            <th style="width:50px" >Status</th>
            <th>Action</th>
         </tr>
      </thead>
      <tbody>
        <span style="display:none;">{!! $i=0 !!}</span>
         @foreach ($users as $user)
           @if ($user['active'] === 0)
                  <tr class='info'>
           @elseif ($user['active'] === 2)
                  <tr class="danger">
          @else
            <tr>
          @endif     
                     <td>{!! $i+=1 !!} </td>
                     <td>
                         <a href="{!!  URL::to('admin/members', $user['id']) !!}">{!! $user['username'] !!}</a> 
                     </td>
                     <td>{!! $user['email'] !!}</td>
                     <td>{!! $user['phone'] !!}</td>
                     <td>@if ($user['active'] === 0)
                  <i class="fa fa-warning warning"></i>
           @elseif ($user['active'] === 2)
                  <i class="fa fa-close danger"></i>
          @else
            <i class="fa fa-thumbs-up success"></i>
          @endif    </td>
                     <td><div class="btn-group">
                         <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Action <span class="caret"></span></button>
                          <ul class="dropdown-menu" role="menu">
                            @if ($user['active'] === 0)
                              <li><a onclick="changeStatus({!! $user['id'] !!},'PUT',1)">Ativate</a></li>  
                             @elseif ($user['active'] === 2)
                              <li><a onclick="changeStatus({!! $user['id'] !!},'PUT',1)">UnBan</a></li>                                  
                            @else
                              <li><a onclick="changeStatus({!! $user['id'] !!},'PUT',2)">Ban Access</a></li>                                  
                            @endif    
                          <li><a onclick="changeStatus({!! $user['id'] !!},'PUT',3)">Delete</a></li> 
                           <li><a href="{!!  URL::to('admin/members/'.$user['id'].'/edit') !!}">Edit</a></li>  
                          </ul> </div>
                      </td>
                  </tr>
                                  
         @endforeach
         
      </tbody>
   </table>
</div>



                           <!-- form --> 
                        </div>
                        <!-- panel-body --> 
                     </div>
                     <!-- panel --> 
                  </div>

</div>
 
<script type="text/javascript" src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('#myTable').DataTable();
});
</script>


@stop


