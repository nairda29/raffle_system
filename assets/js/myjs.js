$(document).ready(function() {
  var refresh_interval;
  var interval = 1000;
  var status = false;
  $('[data-toggle="tooltip"]').tooltip(); 
  $("#roll_button").click(function() {
    var count = 0;
    if (!status) {
      refresh_interval = setInterval(function() {
        count++;
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
    var stop_button = setTimeout(function() {
      if (status) {
      clearInterval(refresh_interval);
      status = false;
    }
    }, 2000);
  });
});