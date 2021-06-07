<div class="pull-right">
	<a href="<?php echo site_url('user/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>ID</th>
		<th>Password</th>
		<th>Username</th>
		<th>Nama</th>
		<th>Email</th>
		<th>Actions</th>
    </tr>
	<?php foreach($user as $u){ ?>
    <tr>
		<td><?php echo $u['id']; ?></td>
		<td><?php echo $u['password']; ?></td>
		<td><?php echo $u['username']; ?></td>
		<td><?php echo $u['nama']; ?></td>
		<td><?php echo $u['email']; ?></td>
		<td>
            <a href="<?php echo site_url('user/edit/'.$u['id']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('user/remove/'.$u['id']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
