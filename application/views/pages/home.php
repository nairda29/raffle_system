<div class="row spacer">
 <div class="span4">...</div>
 <div class="span4">...</div>
 <div class="span4">...</div>
</div>

<div class="container">
  <div class="row">
    <div class="col-lg-10">
      <h2>Raffle System</h2>
    </div>
    <div class="col-lg-2">
    <?php echo form_open('raffle/logout',array('class'=>'form-inline')); ?>
      <button  type="submit" class="btn btn-primary">LOGOUT</button>
      <?php echo form_close();?>
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-sm-8">
      <!-- <div class="well">STATUS</div> -->
      <div class="jumbotron text-center">
        <h1 id="part_name" value="">Participant Name</h1>
        <input id="part_id" type="hidden" value="0">

      </div>
      <div class="row">
        <div class="col-sm-12">
          <div class="well well-sm" id="status_message">STATUS</div>
        </div>

      </div>      
      <div class="row">
        <div class="col-sm-4">
          <button type="button" class="btn btn-success btn-block btn-lg" id="roll_button">START ROLLING</button>
        </div>
        <div class="col-sm-4">
          <button type="button" class="btn btn-danger btn-block btn-lg" id="stop_button">STOP!</button>
        </div>
        <div class="col-sm-4">
          <?php 
          $attributes = array('class' => 'form', 'role'=>'form');
          echo form_open('raffle/postWinner', $attributes);
          echo validation_errors(); ?>
          <div class="form-group">
            <!-- <label for="name">Participant Name:</label> -->
            <input type="hidden" class="form-control" id="part_id_hid" name="part_id" value="0">
            <input type="hidden" class="form-control" id="prize_id_hid" name="prize_id" value="0">
            <button type="submit" class="btn btn-info btn-block btn-lg" id="claim_button" disabled>CLAIM!</button>
          </div>
        </form>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">

      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <table class="table table-striped">
      <thead>
        <tr>
          <th>PRIZE</th>
          <th>WINNER</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <?php
        $last_id;
        foreach ($prize_list as $row) {
          $active_id = "";

          if (is_null($row['name'])) $active_id = "active_prize";
          if($active_id){

            echo "<script>
            document.getElementById('prize_id_hid').value = {$row['prize_id']};

          </script>";
        }
        echo "<tr><td>".
        "<input type='hidden' id={$active_id} value={$row['prize_id']}>".
        $row['prize_name']. '</td><td>'.
        $row["name"]. '</td><td>';
        if($active_id) echo "<td><a href='remove_prize/{$row["prize_id"]}'><span class='glyphicon glyphicon-remove remove-button' data-toggle='tooltip' title='Remove'></span></a></td>";
        echo "</tr>";
        
        
      }
      ?>
        <!-- <tr>
          <td>John</td>
          <td>Doe</td>
          <td>
            <div><span class="glyphicon glyphicon-remove remove-button" data-toggle="tooltip" title="Remove"></span></div>
          </td>
        </tr> -->
        <tr>
          <?php 
          $attributes = array('class' => 'form-inline', 'role'=>'form');
          echo form_open('raffle/add_prize', $attributes);
          echo validation_errors();
          ?>
          <div class="form-group">
            <td>
              <input type="text" class="form-control" placeholder="Enter a prize" name="prize">
            </td>
            <td colspan="3">
              <button type="submit" class="btn btn-default">Add Prize</button>
            </td>
          </div>
        </form>
      </tr>
    </tbody>
  </table>
</div>
</div>
</div>
<!-- <div class="container" style="background-color: lavender">
</div> -->
<script type="text/javascript">
  participant_array = new Array();
  <?php foreach($participant_list as $row) {
    echo 'participant_array.push("'. $row['batch']. '-' . $row['name']. '|' .$row['part_id'] . '");';
  };
  ?>
</script>
