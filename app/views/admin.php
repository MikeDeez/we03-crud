<div class="container">
	
	<h2>Admin</h2>
	<hr>
	
	<div class="flex flex-j-between flex-a-center">
		<h3>Edit Posts</h3>

		<a href="<?='/create'?>" class="btn btn-primary">Create a new post</a>
	</div>

	<table class="table table-striped table-hover">
		<tr>
			<th>Subject</th>
			<th>Content</th>
			<th>Edit/Delete</th>
		</tr>

		<?foreach($posts->items as $post):?>
		<tr>
			<td><?=$post->subject?></td>
			<td><?=$post->content?></td>
			<td width="150">
				<a href="<?=$post->id.'/edit'?>" class="btn btn-info">Edit</a>
				<a href="<?=$post->id.'/delete'?>" class="btn btn-danger">Delete</a>
			</td>
		</tr>
		<?endforeach?>
	</table>

</div>