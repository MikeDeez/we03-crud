<div class="container">
		<div class="posts flex flex-col flex-j-center flex-a-center">
			<?$user=new User(); $user->load($post->user_id);?>
				<div class="jumbotron">
					<div class="container">
						<h1><?=$post->subject?></h1>
						<small>Posted by <?=$user->username?> on <i class="fa fa-clock-o"></i><?=date("l, d F Y", strtotime($post->date))?></small> 
						<p><?=$post->content?></p>
						<hr>
						<a href="https://twitter.com/twitter" class="twitter-follow-button" data-show-count="false" data-size="large" data-show-screen-name="false">Follow</a>
					</div>
				</div>
		</div>
	</div>
</div>