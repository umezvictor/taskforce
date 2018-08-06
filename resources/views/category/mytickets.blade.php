@extends('myadmin.master')

@section('content')

<h2 style="font-size:13px;">Tickets</h2>
<table class="table table-striped">
    <thead>
        <tr>
        <th>Read Message</th>
            <th>Department</th>
            <th>Name</th>
            <th>Email</th>
            <th>Priority</th>
            <th>Subject</th>
            
            <th>File</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($tickets as $tkt)
    <tr>
             <td><button class="btn btn-success btn-sm" 
             data-ticketid="{{$tkt->id}}" data-mymessage="{{$tkt->message}}" data-toggle="modal" 
             data-target="#msgModal">View</button></td>

            <td>{{$tkt->department}}</td>
            <td>{{$tkt->fullname}}</td>
            <td>{{$tkt->email}}</td>
            @if($tkt->priority === 'normal')
            <td><button class="btn btn-success btn-sm">{{$tkt->priority}}</button></td>
            @elseif($tkt->priority === 'medium')
            <td><button class="btn btn-primary btn-sm">{{$tkt->priority}}</button></td>
            @elseif($tkt->priority === 'high')
            <td><button class="btn btn-warning btn-sm">{{$tkt->priority}}</button></td>
            @else($tkt->priority === 'critical')
            <td><button class="btn btn-danger btn-sm">{{$tkt->priority}}</button></td>
            @endif
            <td>{{$tkt->subject}}</td>
           
            <td><a href="/download/{{$tkt->myfilename}}">
            <button class="btn btn-primary btn-sm">Download</button>
            </a></td>
            <td><button class="btn btn-success btn-xs">{{$tkt->status}}</button></td>
            <td><a href="/deleteTicket/{{$tkt->id}}" class="btn btn-danger btn-xs">Delete</a></td>
            </tr>
    @endforeach
    </tbody>
    </table>

    
<!-- editt Modal -->
<div class="modal fade" id="msgModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        
      </div>
      
      <div class="modal-body">
     
      <form action="" method="post">
      
        
        
        <div class="form-group">
            <label for="Message"  style="color:#1e90ff;">Message</label>
            <textarea name="message" id="message" cols="20" rows="5" class="form-control"></textarea>                                    
            </div> 
           
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          
          
          </form>
      </div>
   
      
    </div>
  </div>
</div>
<!--end of edit modal-->




<script src="{{ URL::asset('js/bootstrap.js') }}"></script>
<script src="{{ URL::asset('js/jquery-3.3.1.min.js') }}"></script>

<script>
$('#msgModal').on('show.bs.modal', function (event) {
  //console.log('modal opened');
  var button = $(event.relatedTarget) // Button that triggered the modal
  var msg = button.data('mymessage'); // Extract info from data-* attributes
  
  //var tkt_id = button.data('ticketid');
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this);
  
  
  modal.find('.modal-body #message').val(msg);

});
</script>



@endsection