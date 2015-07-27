<div class="container">
		<div class="posts flex flex-col flex-j-center flex-a-center">
			<?foreach($posts->items as $post):?>
			<?$user=new User(); $user->load($post->user_id = '1');?>
				<div class="post jumbotron">
					<div class="container">
						<h1><?=$post->subject?></h1>
						<small>Posted by <?=$user->username?> on <i class="fa fa-clock-o"></i><?=date("l, d F Y", strtotime($post->date))?></small> 
						<p><?=$post->content?></p>
						<?if(Auth::is_admin()):?>
							<a href="<?=$post->id.'/edit'?>" class="btn btn-info btn-sm">Edit</a>
							<a href="<?=$post->id.'/delete'?>" class="btn btn-danger btn-sm">Delete</a>
						<?endif;?>
						<hr>
					</div>
				</div>

			<?endforeach;?>
		</div>
	</div>
</div>