<div class="pull-right">
	<a href="<?php echo site_url('article/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>ID</th>
		<th>Judul</th>
		<th>Paragraph1</th>
		<th>Paragraph2</th>
		<th>Photo</th>
		<th>Video</th>
		<th>Tanggal</th>
		<th>Actions</th>
    </tr>
	<?php foreach($article as $a){ ?>
    <tr>
		<td><?php echo $a['id']; ?></td>
		<td><?php echo $a['judul']; ?></td>
		<td><?php echo $a['paragraph1']; ?></td>
		<td><?php echo $a['paragraph2']; ?></td>
		<td><?php echo $a['photo']; ?></td>
		<td><?php echo $a['video']; ?></td>
		<td><?php echo $a['tanggal']; ?></td>
		<td>
            <a href="<?php echo site_url('article/edit/'.$a['id']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('article/remove/'.$a['id']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
