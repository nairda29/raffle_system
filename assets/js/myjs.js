$(document).ready(function() {
  var refresh_interval;
  var interval = 500;
  var status = false;
  $('[data-toggle="tooltip"]').tooltip(); 
  $("#roll_button").click(function() {
    var count = 0;
    var message_count =0;
    // document.getElementById('status_message').innerHTML = "ROLLING...";
    if (!status) {
      var status_message_array = new Array('Rolling.','Rolling..','Rolling...','Rolling');
      refresh_interval = setInterval(function() {
        count++;
        message_count = (message_count>=3)? 0 : ++message_count;
        if (!status) {
          $("#status_message").fadeOut(100, function() {
            $(this)
            .text(status_message_array[message_count])
            .fadeIn(100);
          });
        }
        $("#part_name").fadeOut(100, function() {
          $(this)
          .text(participant_array[count])
          .fadeIn(100);
        });
      }, interval);  
      status = true;
    }
  });
  $("#stop_button").click (function () {
    $("#status_message").text("STOPPING");
    var stop_button = setTimeout(function() {
      if (status) {
        clearInterval(refresh_interval);
        status = false;
      }
    }, 2000);
  });
});