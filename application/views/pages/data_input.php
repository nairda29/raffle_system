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
	<div class="row">
		<div class="col-lg-12">
			<h3>Data Input</h3>
		</div>
	</div>
</div>

<div class="custom-container container">
	<table class="table">
		<thead>
			<tr>
				<th class="col-md-1" >No.</th>
				<th class="col-md-1" >Batch</th>
				<th class="col-md-3" >NAME</th>
				<th class="col-md-3" >Maiden Name</th>
				<th class="col-md-1" >Birthday</th>
				<th class="col-md-2" >Contact Number</th>
				<th class="col-md-1" >Annual Fee</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td class="col-md-1" >1</td>
				<td class="col-md-1" >1994</td>
				<td class="col-md-3" >Juan Dela Cruz</td>
				<td class="col-md-3" >Juan Dela Cruz</td>
				<td class="col-md-1" >09/29/1923</td>
				<td class="col-md-2" >+63906753212</td>
				<td class="col-md-1" >Paid</td>
			</tr>
			<?php
			foreach ($participant_list as $row) {
				echo "<tr><td>".$row->reg_code."</td>".
				"<td>".$row->name."</td>".
				"<td>".$row->maiden_name."</td>".
				"<td>".$row->batch."</td>".
				"<td>".$row->bday."</td>".
				"<td>".$row->contact_number."</td>".
				"<td>".$row->annual_fee."</td>";
			}
			foreach ($links as $link) {
				echo "<li>". $link."</li>"; }
				?>

				<tr>
					<?php 
					$attributes = array('class' => 'form-inline', 'role'=>'form');
					echo form_open('raffle/add_participant', $attributes);
					echo validation_errors();
					?>
					<div class="form-group">
						<td>
							<input type="text" class="col-md- form-control" placeholder="" name="reg_code">
						</td>
						<td>
							<input type="text" class="form-control" name="batch" placeholder="">
						</td>
						<td>
							<input type="text" class="form-control" name="name" placeholder="">
						</td>
						<td>
							<input type="text" class="form-control" name="maiden_name" placeholder="">
						</td>
						<td>
							<input type="text" class="form-control" name="bday" placeholder="mm/dd/yyyy">
						</td>
						<td>
							<input type="text" class="form-control" name="contact_number" placeholder="+63xxxxxxxxxx">
						</td>
						<td>
							<div class="form-group">
								<select class="form-control" id="annual_fee">
									<option>Paid</option>
									<option>Not Paid</option>
								</select>
							</div>
						</td>
					</div>
				</form>

			</tr>
			<tr>
				<div class="row">
					<td colspan="6"></td>
					<td><button type="button" class="btn btn-success btn-block btn-lg">Add</button></td>
				</div>
			</tr>
		</tbody>
	</table>	
</div>