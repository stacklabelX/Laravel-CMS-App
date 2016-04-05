 @extends('layouts.header')

 @section('title', 'All Member')
 @section('mainTitle', 'Members')
 @section('subTitle', 'All members')
 @section('panelHeading', ' ')



@section('content')

 <div class="form-group">	
   
    

    {!! Form::open() !!}

    
<div class="col-md-12">
                     <!-- panel --> 
                     <div class="panel panel-default">
                        <!-- panel-heading --> 
                         <!-- panel-heading --> <!-- panel-body --> 
                        <div class="panel-body">
                           <!-- form --> 
                             
                             


                              <div class="table-responsive col-md-12">
   <table class="table table-striped">
      <thead>
         <tr>
            <th># </th>
            <th>First Name </th>
            <th>Email </th>
            <th>Contact </th>
            <th>Action</th>
         </tr>
      </thead>
      <tbody>
         @foreach ($users as $user)
                  <tr>
                     <td>1 </td>
                     <td>
                         <a href="{!!  URL::to('admin.members', $user['id']) !!}">{!! $user['username'] !!}</a> 
                     </td>
                     <td>{!! $user['email'] !!}</td>
                     <td>{!! $user['phone'] !!}</td>
                     <td><div class="btn-group">
                         <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Info <span class="caret"></span></button>
                          <ul class="dropdown-menu" role="menu">
                           <li><a href="#">Delete</a></li> 
                           <li><a href="#">Block</a></li> 
                           <li><a href="#">Contact</a></li> 
                           <li><a href="#">Separated link</a></li> 
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

    {!! Form::close() !!}

@stop


