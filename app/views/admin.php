<div class="container">
	
	<h2 class="title">Admin</h2>
	<hr>
	
	<div class="flex flex-j-between flex-a-center">
		<h3>Edit Posts</h3>
		<a href="<?='/create'?>" class="btn-primary btn">Create a new post</a>
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
			<td max-width="100" max-height="100">
				<?=$post->content?>
			</td>
			<td max-height="50">
				<a href="<?=$post->id.'/edit'?>" class="btn btn-info">Edit</a>
				<a href="<?=$post->id.'/delete'?>" class="btn btn-danger">Delete</a>
			</td>
		</tr>
		<?endforeach?>
	</table>

</div>