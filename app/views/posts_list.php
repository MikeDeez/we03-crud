<div class="container">
		<?if(Auth::is_admin()):?>
			<a href="<?='/create'?>" class="btn btn-primary">Create a new post</a>
		<?endif;?>	
		<div class="posts flex flex-j-center flex-a-center">
			<?foreach($posts->items as $post):?>
				<div class="post jumbotron container">
						<h1><?=$post->subject?></h1>
						<small>Posted by <?=$user->username?> on <i class="fa fa-clock-o"></i><?=date("l, d F Y")?></small> 
						<p><?=$post->content?></p>
						<?if(Auth::is_admin()):?>
							<a href="<?=$post->id.'/edit'?>" class="btn btn-info btn-sm">Edit</a>
							<a href="<?=$post->id.'/delete'?>" class="btn btn-danger btn-sm">Delete</a>
						<?endif;?>
					</div>
				</div>
				<hr>
			<?endforeach;?>
		</div>
	</div>
</div>