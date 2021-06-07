<div class="pull-right">
	<a href="<?php echo site_url('comment/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>Commentid</th>
		<th>Articleid</th>
		<th>Userid</th>
		<th>Comment</th>
		<th>Date</th>
		<th>Actions</th>
    </tr>
	<?php foreach($comment as $c){ ?>
    <tr>
		<td><?php echo $c['commentid']; ?></td>
		<td><?php echo $c['articleid']; ?></td>
		<td><?php echo $c['userid']; ?></td>
		<td><?php echo $c['comment']; ?></td>
		<td><?php echo $c['date']; ?></td>
		<td>
            <a href="<?php echo site_url('comment/edit/'.$c['commentid']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('comment/remove/'.$c['commentid']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
