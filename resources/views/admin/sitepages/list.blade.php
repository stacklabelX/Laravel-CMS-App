 @extends('layouts.header')

 @section('title', 'Show '.$meta[1].' '.$meta[0])
 @section('mainTitle', 'Show '.$meta[0])
 @section('subTitle', 'All '.$meta[1].' '.$meta[0])
 @section('panelHeading', '')



@section('content')
<link  rel="stylesheet"  href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css" />

 <div class="form-group">	
   
    

    {!! Form::open() !!}

    
<div class="col-md-12">
                     <!-- panel --> 
              <!-- panel --> 
                     <div class="panel panel-default">
                        <!-- panel-heading --> 
                         <!-- panel-heading --> <!-- panel-body --> 
                        <div class=" post-widget panel-body" style="border-color: #5cb85c;">
                           <!-- form --> 
                             
                             
                             
                             
        <span style="display:none;">{!! $i=0 !!}</span>


                              <div class="table-responsive col-md-12">
   <table id="myTable" class="table table-striped">
      <thead>
         <tr>
                     <th>#</th>
 
 @foreach ($columns as $col)
            <th style="text-transform:uppercase">{{ $col }} </th>
@endforeach

         </tr>
      </thead>
      <tbody>
           @foreach ($users as $user)
        <tr>
                     <td>{!! $i+=1 !!} </td>

            @foreach ($columns as $col)
            <td>{{ $user[$col] }} </td>
            @endforeach            
                      
                    
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


<script type="text/javascript" src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('#myTable').DataTable();
});
</script>
@stop
