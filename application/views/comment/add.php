<?php echo form_open('comment/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="articleid" class="col-md-4 control-label">Articleid</label>
		<div class="col-md-8">
			<input type="text" name="articleid" value="<?php echo $this->input->post('articleid'); ?>" class="form-control" id="articleid" />
		</div>
	</div>
	<div class="form-group">
		<label for="userid" class="col-md-4 control-label">Userid</label>
		<div class="col-md-8">
			<input type="text" name="userid" value="<?php echo $this->input->post('userid'); ?>" class="form-control" id="userid" />
		</div>
	</div>
	<div class="form-group">
		<label for="comment" class="col-md-4 control-label">Comment</label>
		<div class="col-md-8">
			<input type="text" name="comment" value="<?php echo $this->input->post('comment'); ?>" class="form-control" id="comment" />
		</div>
	</div>
	<div class="form-group">
		<label for="date" class="col-md-4 control-label">Date</label>
		<div class="col-md-8">
			<input type="text" name="date" value="<?php echo $this->input->post('date'); ?>" class="form-control" id="date" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>

<?php echo form_close(); ?>