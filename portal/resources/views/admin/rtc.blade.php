<title>Red Cross | Dashboard</title>
<link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
<script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
@extends('admin.layout.layout')
@section('admin-chat')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">


 
  <div class="content mt-5 pt-3 px-4">
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

      <div class="row">
        <div  class="col-md-12">
                <div class="row "">
        <div  id="table-messages" class="col-md-12">
          <div class="card">
            <div class="card-header">
          
              <h4 class="text-center text-primary"><i class="	far fa-comments px-1"></i> Messages</h4>
            </div>
            <div class="card-body ">
              <table id="users-chats">
              </table>
         <div id=table-messages class="col-md-12 ">
          @foreach ($Messages as $chats)
          @if($chats->status=="Unseen")
          <div class="col-md-12 p-3 rounded">
            <div class="d-flex">
              <td>
                <h3><i class="fas fa-user-circle px-3"></i></h3>
                <button type="button" class="convo bg-light  btn-btn-light border border-light" data-data-id="{{ $chats->uid }}"><strong>{{$chats->con_fname}} {{$chats->con_lname}}</strong></button>
              </td>
            </div>
              <sub class="pl-5 overflow-hidden">{{$chats->message}}</sub>
             </div>
          @else
          <div class="col-md-12 bg-light p-3 rounded">
            <div class="d-flex">
              <td>
                <h3><i class="fas fa-user-circle px-3"></i></h3>
                <button type="button" class="convo bg-light  btn-btn-light border border-light" data-data-id="{{ $chats->uid }}">{{$chats->con_fname}} {{$chats->con_lname}}</button>
              </td>
            </div>
              <sub class="pl-5 overflow-hidden">{{$chats->message}}</sub>
             </div>
          @endif
       @endforeach
         </div>
            </div>
        
          </div>
          </div>
          <div id="table-chat" class="col-md-12 d-none">


     
            <div class="row mt-3">
          <div class="card">
            <div class="row ">
              <div class="col-md-12 mt-2">
                <button id="close-chat-btn" class="btn btn-light"><i class="fas fa-reply"></i></button>
              </div>
            </div>      
            <div class="card p-3 mt-3">
              <table id="user-conversation" >
                <tbody class="px-5 overflow-scroll"></tbody>
              </table>
            </div>
            <form class="input-group" id="rtc-form" method="post">
              @csrf
              <input id="u_id" type="hidden" name="u_id" class="form-control">
              <input id="message" type="text" name="message" class="form-control">
              <button type="submit" class="btn btn-warning  "><i class="fas fa-paper-plane"></i></button>
            </form>
          </div>
              
             </div>



              </div>
            </div>
          </div>
        </div>
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
    $('#chat').addClass('active');
    $('#close-chat-btn').click(function (e) { 
      e.preventDefault();
      $('#table-chat').removeClass('block');
            $('#table-chat').addClass('d-none');
            $('#table-messages').removeClass('d-none');
            $('#table-messages').addClass('block ');
            localStorage.removeItem('u_id');
      
    });
    $('#rtc-form').submit(function(event) {
            event.preventDefault(); // Prevent form submission
            
            // Send AJAX request
            $.ajax({
                url: "{{url('send-chat')}}",
                method: 'POST',
                data: $(this).serialize(),
                dataType: 'json',
                success: function(response) {  
                  $('#message').val("");  
                  userChats();
                },
                error: function(xhr) {
                    // Handle error response
                    console.log(xhr.responseText);
                   
                }
            });
        });

        $('.convo').click(function (e) { 
        e.preventDefault();
        var id=$(this).data('data-id');
        localStorage.removeItem('u_id')
        localStorage.setItem('u_id',id ); 
        var convo=$('#user-conversation tbody');
            convo.empty();  
            $('#table-chat').removeClass('d-none');
            $('#table-chat').addClass('block');
            $('#table-messages').removeClass('block');
            $('#table-messages').addClass('d-none');
            userChats();
          });
          setInterval(() => {
            userChats();
          }, 10000);
          userChats();
      });
      function userChats()
      {
        $.ajax({
          type: "GET",
          url: "/chat/"+localStorage.getItem('u_id'),
          data: "data",
          dataType: "json",
          success: function (response) {
            var convo=$('#user-conversation tbody');
            convo.empty();
            $('#u_id').val("");
            $('#u_id').val(response[0].u_id);    
            $.each(response, function(index, data) {
                      var row = $('<tr>');   
                       row.addClass('rounded');
                       var td=$('<td>');
                        td.addClass('px-3 py-2');
                        var icon=$('#icon');
                        icon.addClass('far fa-user-circle');
                        if(data.sendby=="Admin" || data.sendby=="Staff")
                      {
                        
                          td.text(data.message);  
                          td.addClass('text-right text-primary');


                      }  
                      else
                      {
                        td.text(data.message);  
                          td.addClass('text-left');
                          td.addClass('text-success');
                      }
                      row.append(td)
                      ;   
                      convo.append(row);
                    }); 
                  }
           
        });
      }
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.js"></script>
{{-- <script src="{{asset('admin/js/membership.js')}}"> --}}



@endsection