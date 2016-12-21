<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <h2>Raffle System</h2>
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-sm-8">
      <!-- <div class="well">STATUS</div> -->
      <div class="jumbotron text-center">
        <h1 id="part_name">Participant Name</h1>
      </div>
      <div class="row">
        <div class="col-sm-6">
          <div class="well well-sm">STATUS</div>
        </div>
        <div class="col-sm-6">
          <?php 
          $attributes = array('class' => 'form-inline', 'role'=>'form');
          echo form_open('raffle/add_participant', $attributes);
          echo validation_errors(); ?>
          <div class="form-group">
            <!-- <label for="name">Participant Name:</label> -->
            <input type="name" class="form-control" id="name" name="name" placeholder="Enter a Participant Name">
            <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-user"></span> Add Participant</button>
          </div>
        </form>
        </div>
      </div>      
      <div class="row">
        <div class="col-sm-6">
          <button type="button" class="btn btn-success btn-block btn-lg" id="roll_button">START ROLLING</button>
        </div>
        <div class="col-sm-6">
          <button type="button" class="btn btn-danger btn-block btn-lg" id="stop_button">STOP!</button>
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
      foreach ($prize_list as $row) {
        echo '<tr><td>'.
        $row['prize_name']. '</td><td>'.
        $row["name"]. '</td><td>'.
        '<td><span class="glyphicon glyphicon-remove remove-button" data-toggle="tooltip" title="Remove"></span></td></tr>';
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
    echo 'participant_array.push("' . $row['name']. $row['part_id'] . '");';
  };
  ?>
</script>