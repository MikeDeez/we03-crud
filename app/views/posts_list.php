<div class="container">
		<div class="posts flex flex-j-between">
			<?foreach($posts->items as $post):?>
				<div class="post">
					<h2><?=$post->subject?></h2>
					<p><?=$post->content?></p>
				</div>
			<?endforeach;?>
		</div>
	</div>
</div>