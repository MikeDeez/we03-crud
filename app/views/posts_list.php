<div class="container">
		<div class="posts flex flex-j-between">
			<?foreach($posts->items as $post):?>
				<div class="post jumbotron">
					<div class="container">
						<h2><?=$post->subject?></h2>
						<p><?=$post->content?></p>
						<?if(Auth::is_admin()):?>
							<a href="<?=$post->id.'/edit'?>" class="btn btn-info">Edit</a>
							<a href="<?=$post->id.'/delete'?>" class="btn btn-danger">Delete</a>
						<?endif;?>
					</div>
				</div>
				<hr>
			<?endforeach;?>
		</div>
	</div>
</div>