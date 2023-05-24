<div id="chat-form" class="fixed-bottom d-flex justify-content-end m-2 d-none">
  <div class="">  
    <div class="card" style="width:400px;height:500px">
    <div class="card-header">
    <div class="row">
      <div class="col-md-11">
        <h4><strong>Customer Service Staff</strong></h4>
      </div>
      <div class="col-md-1 d-flex justify-content-end">
       <button id="close-chat-btn"><h4><i class=" fas fa-angle-down"></i></h4></button>
      </div>
    </div>
    </div>
    <div class="card-body overflow-auto">
      <table id="coversation">
        <tbody></tbody>
    </table>
    </div>
    <div class="card-footer bg-danger">
 <div class="row">
   <div class="col-md-10">
    <form class="input-group" id="rtc-form" action="{{url('send-chat')}}" method="post">
      @csrf
      <input id="rtc-input" type="text" name="message" class="form-control">
    </div>
   <div class="col-md-2 text-center">
    <button type="submit" class="btn btn-warning  "><i class="fas fa-paper-plane"></i></button>
  </form>
   </div>

 </div>
    </div>
    </div>
  </div>
    
  </div>
  <div class="d-flex justify-content-end fixed-bottom m-2">
    <button id="chat-btn" class="btn btn-warning"><i class="far fa-comments"></i></button>

  </div>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
  <script>
    $(document).ready(function () {
      $('#chat-btn').click(function (e) { 
        e.preventDefault();
        $('#chat-form').addClass('block');
        $('#chat-form').removeClass('d-none');
        $('#chat-btn').addClass('d-none');
        $('#chat-btn').removeClass('block');
      });
      $('#close-chat-btn').click(function (e) { 
        e.preventDefault();
        $('#chat-form').addClass('d-none');
        $('#chat-form').removeClass('block');
        $('#chat-btn').removeClass('d-none');
        $('#chat-btn').addClass('block');
      });
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

     
setInterval(() => {
  reloadChat()
}, 1000);

    });
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