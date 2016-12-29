$(document).ready(function() {
  var refresh_interval;
  var interval = 100;
  var status = false;
  $('[data-toggle="tooltip"]').tooltip(); 
  $("#roll_button").click(function() {
    var count = 0;
    var message_count =0;
    // document.getElementById('status_message').innerHTML = "ROLLING...";
    if (!status) {
      var status_message_array = new Array('Rolling.','Rolling..','Rolling...','Rolling');
      refresh_interval = setInterval(function() {
        $total = participant_array.length;
        console.log($total);
        if(count == $total-1) count = 0;
        count++;
        message_count = (message_count>=3)? 0 : ++message_count;

        if (!status) {
          $("#status_message").fadeOut(100, function() {
            $(this)
            .text(status_message_array[message_count])
            .fadeIn(100);
          });
        }
        var result=participant_array[count].split('|');

        $("#part_name").fadeOut(100, function() {
          $(this)
          .text(result[0])
          .fadeIn(100);
        });
        $("#part_id").attr("value",result[1]);
        $("#part_id_hid").attr("value",result[1]);
        
      }, interval);  
      status = true;
    }
  });
  $("#stop_button").click (function () {
    $("#status_message").text("STOPPING");
    var stop_button = setTimeout(function() {
      console.log(status);
      if (status) {
    $("#claim_button").removeAttr('disabled');
      console.log(status);
        clearInterval(refresh_interval);
        status = false;
      }
    }, 1000);
  });
  $("#claim_button").click (function () {
    
    var part_id = $("#part_id").val();
    var prize_id = $("#active_prize").val();
console.log(prize_id);

    $("status_message").text("Prize Claimed!");
    console.log(part_id);
    if (part_id != 0){

      var data = {
          part_id: part_id,
          prize_id: prize_id
        };
        console.log(data);
    console.log('Prize Claimed!');
        status = false;
    }

  

  });
});