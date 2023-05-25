<title>Red Cross | Dashboard</title>
<link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
<script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
@extends('admin.layout.layout')
@section('admin-chat-convo')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">


 
  <div class="content mt-5 pt-3 pl-5">
    <div class="containter-fluid">
      @if(session('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>{{session('success')}}</strong> 
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      
      @elseif(session('failed'))
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>{{session('failed')}}</strong> 
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      
      @endif

      <div class="row mx-auto">
        
        <div class="col-md-12">
       <div class="card px-3">
        <div class="card-header">
          <a href="{{url('admin/chat')}}">Back</a>
        </div>
      <div class="card-body px-3">
        <table id="admin-rtc">
          @foreach($Chat as $convo)
          @if($convo->sendby=="Staff" || $convo->sendby=="Admin")
          <div class="row text-right " >
            <p class="bg-warning p-3">{{$convo->message}}</p>
          </div>
          @else
          <div class=" row text-left" >
            <p class="bg-primary p-3 text-light">{{$convo->message}}</p>
          </div>
          @endif
          @endforeach
          <tbody></tbody>
        </table>
      </div>
      </div>
       </div>
      </div>
      <div class="row fixed-bottom d-flex ">
        <div class="col-md-10 mx-auto " style="width:500px">
         <form class="input-group" id="rtc-form" action="{{url('send-chat')}}" method="post">
           @csrf
           <input id="rtc-input" type="text" name="message" class="form-control">
           <button type="submit" class="btn btn-warning  "><i class="fas fa-paper-plane"></i></button>
          </form>
         </div> 
       

     
      </div>

    </div>
  
   
    </div>
  </div>



  </section>
  <!-- /.content -->
</div>
<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
<script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script>
  $(document).ready(function () {
    
    $('#rtc-form').submit(function(event) {
            event.preventDefault(); // Prevent form submission
            
            // Send AJAX request
            $.ajax({
                url: $(this).attr('action'),
                method: 'POST',
                data: $(this).serialize(),
                dataType: 'json',
                success: function(response) {
                $('#rtc-input').val("");
                    console.log(response);
                    reloadChat();
                },
                error: function(xhr) {
                    // Handle error response
                    console.log(xhr.responseText);
                   

                }
            });
        });
  });


  function reloadChat()
    {
      $.ajax({
            url: "{{ url('chat') }}",
            method: 'GET',
            dataType: 'json',
            success: function(response) {
                // Handle success response and populate the table
                $('#coversation tbody').empty();
                var tableBody = $('#coversation tbody');
                
                $.each(response, function(index, data) {
                    var row = $('<tr>');
                    row.append($('<td>').text(data.message));
                    row.append($('<td>').text(data.u_id));
                    tableBody.append(row);
                });
            },
            error: function(xhr) {
                // Handle error response
                console.log(xhr.responseText);
            }
        });
    }

  </script>


@endsection