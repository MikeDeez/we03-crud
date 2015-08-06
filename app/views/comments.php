<div class="container">

	<h2>Comments</h2>
	<table class="table table-striped table-hover">

		<?foreach($comments->items as $comment):?>
		<tr>
			<td>
				<?=date("l, d F Y", strtotime($comment->date))?><br>
				<small>Posted by <?=$comment->author->username?> at <?=date("G:i a", strtotime($comment->date))?></small>
			</td>
			<td><p><?=$comment->content?></p></td>
			<?if(Auth::is_admin()):?>
				<td><a href="<?=$comment->post_id.'/edit_comment/'.$comment->id?>" class="btn btn-link">Edit</a></td>
				<td><a href="<?=$comment->post_id.'/delete_comment/'.$comment->id?>" class="btn btn-link">Delete</a></td>
			<?elseif(Auth::user_id() == $comment->user_id):?>
				<td><a href="<?=$comment->post_id.'/edit_comment/'.$comment->id?>" class="btn btn-link">Edit</a></td>
				<td><a href="<?=$comment->post_id.'/delete_comment/'.$comment->id?>" class="btn btn-link">Delete</a></td>
			<?else:?>
				<td></td>
				<td></td>
			<?endif;?>
		</tr>
		<?endforeach?>
	</table>

</div>