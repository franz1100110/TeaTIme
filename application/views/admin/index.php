<table class="table table-striped table-bordered">
    <tr>
		<th>ID</th>
		<th>Password</th>
		<th>Username</th>
		<th>Nama</th>
		<th>Email</th>
		<th>Actions</th>
    </tr>
	<?php foreach($admin as $a){ ?>
    <tr>
		<td><?php echo $a['id']; ?></td>
		<td><?php echo $a['password']; ?></td>
		<td><?php echo $a['username']; ?></td>
		<td><?php echo $a['nama']; ?></td>
		<td><?php echo $a['email']; ?></td>
		<td>
            <a href="<?php echo base_url('index.php/Admin/edit/'.$a['id']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo base_url('index.php/Admin/remove/'.$a['id']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
<div class="pull-right">
	<a href="<?php echo base_url()."index.php/Admin/add"; ?>" class="btn btn-success">Add</a> 
</div>
