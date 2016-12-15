<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <h2>Raffle System</h2>
    </div>
  </div>
</div>
<!-- <div class="jumbotron text-center">
  <h1 id="part_name">Participant Name</h1>
</div> -->

<div class="container">
  <div class="row">
    <div class="col-sm-8">
      <div class="jumbotron text-center">
        <h1 id="part_name">Participant Name</h1>

      </div>      
    </div>
    <div class="col-sm-4">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>PRIZE</th>
            <th>WINNER</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>John</td>
            <td>Doe</td>
          </tr>
          <tr>
            <td>Mary</td>
            <td>Moe</td>
          </tr>
          <tr>
            <td>July</td>
            <td>Dooley</td>
          </tr>
          <tr>
            <td>John</td>
            <td>Doe</td>
          </tr>
          <tr>
            <td>Mary</td>
            <td>Moe</td>
          </tr>
          <tr>
            <td>July</td>
            <td>Dooley</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-sm-6">
      <!-- <form role="form"> -->
      <?php echo form_open('raffle/create') ?>
      <?php echo validation_errors(); ?>
      <div class="form-group">
        <label for="name">Participant Name:</label>
        <input type="name" class="form-control" id="name" name="name">
      </div>
      <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-user"></span>Add Participant</button>
    </form>
    <br>
 <!--    <table class="table table-hover">
      <thead>Name of Participant</thead>
      <tbody>
        <?php 
        // foreach ($participant_list as $row) {
        //   echo "<tr><td>" . 
        //   $row['name'].
        //   "</td></tr>";
        // }
        ?>
      </tbody>
    </table> -->
  </div>
  <div class="col-sm-6">
    <button type="button" class="btn btn-success btn-lg" id="roll_button">Start Rolling!</button>
    <button type="button" class="btn btn-danger btn-lg" id="stop_button">STOP!</button>
  </div>
</div>
</div>
<script type="text/javascript">
  participant_array = new Array();
  <?php foreach($participant_list as $row) {
    echo 'participant_array.push("' . $row['name']. $row['PID'] . '");';
  };
  ?>
</script>
