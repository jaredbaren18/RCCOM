<title>Red Cross | Dashboard</title>
<link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
<script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
@extends('admin.layout.layout')
@section('admin-chat')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">


 
  <div class="content mt-5 pt-3">
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
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-3">
            <div class="card">
              <div class="card-header">
                <h4>Messages</h4>
              </div>
              <div class="card-body">
                <table id="messages">
                  <tbody></tbody>
                </table>
              </div>
            </div>
            </div>
            <div class="col-md-9">
              <div class="card">
                <div class="card-body">
                 <div class="">
                  <form action="" method="post">
                    <div class="input-group">
                      <input type="text" name="message" class="form-control">
                      <input type="submit" value="Send" class="btn btn-primary">
                    </div>
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



  </section>
  <!-- /.content -->
</div>
<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
<script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script>
  $(document).ready(function () {
    $('#chat').addClass('active');
    $('#rtc-form').submit(function(event) {
            event.preventDefault(); // Prevent form submission
            
            // Send AJAX request
            $.ajax({
                url: $(this).attr('action'),
                method: 'POST',
                data: $(this).serialize(),
                dataType: 'json',
                success: function(response) {       
                    console.log(response);
                    reloadMessages();
                },
                error: function(xhr) {
                    // Handle error response
                    console.log(xhr.responseText);
                   

                }
            });
        });
        reloadMessages();
  });

        function reloadMessages()
    {
      $.ajax({
            url: "{{ url('messages') }}",
            method: 'GET',
            dataType: 'json',
            success: function(response) {
                // Handle success response and populate the table
                $('#messages tbody').empty();
                var tableBody = $('#messages tbody');
                
                $.each(response, function(index, data) {
                    var row = $('<tr>');
                    row.append($('<td>').text(data.message));
                    tableBody.append(row);
                });
            },
            error: function(xhr) {
                // Handle error response
                console.log(xhr.responseText);
            }
        });
    }
        function reloadChat()
    {
      $.ajax({
            url: "{{ url('conversation') }}",
            method: 'GET',
            dataType: 'json',
            success: function(response) {
                // Handle success response and populate the table
                $('#coversation tbody').empty();
                var tableBody = $('#coversation tbody');
                
                $.each(response, function(index, data) {
                    var row = $('<tr>');
                    row.append($('<td>').text(data.message));
                    tableBody.append("");
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.js"></script>
{{-- <script src="{{asset('admin/js/membership.js')}}"> --}}



@endsection