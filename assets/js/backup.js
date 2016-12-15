$(document).ready(function() {
  var refresh_interval;
  var status = false;

  $("#roll_button").click(function() {

    var count = 0;
    // alert(status);
    // txtArray = ["TEXT1", "TEXT2"];
    // var participant_array = <?php echo json_encode($participant_list); ?> ; 
    // alert("roll button presssed");
    if (status == false) {
      alert('button pressed');
      refresh_interval = setInterval(function() {
        count++;
        $("#part_name").fadeOut(100, function() {
          $(this)
          .text(participant_array[count])
          // .text("Yes")
          // .css('color', cuenta % 2 == 0 ? 'red' : 'blue')
          .fadeIn(100);
        });
      }, 1000);  
      status = true;
    }
    // for(var i=0;i<6;i++){
    //     alert(participant_array[i]);
      // }
    });
  $("#stop_button").click (function () {
    alert(status);
    if (status) {
      clearInterval(refresh_interval);
      status = false;
    }
  });

});