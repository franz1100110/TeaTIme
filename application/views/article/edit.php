<?php echo form_open('index.php/Article/edit/'.$article['id'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="judul" class="col-md-4 control-label">Judul</label>
		<div class="col-md-8">
			<input type="text" name="judul" value="<?php echo ($this->input->post('judul') ? $this->input->post('judul') : $article['judul']); ?>" class="form-control" id="judul" />
		</div>
	</div>
	<div class="form-group">
		<label for="paragraph1" class="col-md-4 control-label">Paragraph1</label>
		<div class="col-md-8">
			<input type="text" name="paragraph1" value="<?php echo ($this->input->post('paragraph1') ? $this->input->post('paragraph1') : $article['paragraph1']); ?>" class="form-control" id="paragraph1" />
		</div>
	</div>
	<div class="form-group">
		<label for="paragraph2" class="col-md-4 control-label">Paragraph2</label>
		<div class="col-md-8">
			<input type="text" name="paragraph2" value="<?php echo ($this->input->post('paragraph2') ? $this->input->post('paragraph2') : $article['paragraph2']); ?>" class="form-control" id="paragraph2" />
		</div>
	</div>
	<div class="form-group">
		<label for="photo" class="col-md-4 control-label">Photo</label>
		<div class="col-md-8">
			<input type="text" name="photo" value="<?php echo ($this->input->post('photo') ? $this->input->post('photo') : $article['photo']); ?>" class="form-control" id="photo" />
		</div>
	</div>
	<div class="form-group">
		<label for="tanggal" class="col-md-4 control-label">Tanggal</label>
		<div class="col-md-8">
			<input type="text" name="tanggal" value="<?php echo ($this->input->post('tanggal') ? $this->input->post('tanggal') : $article['tanggal']); ?>" class="form-control" id="tanggal" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>