$(document).ready(function() {
  var refresh_interval;
  var status = false;
  $("#roll_button").click(function() {
    var count = 0;
    if (status == false) {
      alert('button pressed');
      refresh_interval = setInterval(function() {
        count++;
        $("#part_name").fadeOut(100, function() {
          $(this)
          .text(participant_array[count])
          .fadeIn(100);
        });
      }, 1000);  
      status = true;
    }
    });
  $("#stop_button").click (function () {
    alert(status);
    if (status) {
      clearInterval(refresh_interval);
      status = false;
    }
  });
});