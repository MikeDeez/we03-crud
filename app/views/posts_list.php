<div class="container-fluid">
		<div class="posts flex flex-col flex-j-center flex-a-center">
			<?foreach($posts->items as $post):?>
			<?$user=new User(); $user->load($post->user_id = '1');?>
				<div class="post">
					<div class="container jumbotron">
						<hr>
						<h1 class="title"><a href="<?='/post/'.$post->id?>"><?=$post->subject?></a></h1>
						<small>Posted by <?=$user->username?> on <i class="fa fa-clock-o"></i><?=date("l, d F Y", strtotime($post->date))?></small> 
						<p><?=$post->content?></p>
						<?if(Auth::is_admin()):?>
							<a href="<?=$post->id.'/edit'?>" class="btn btn-link">Edit</a>
							<a href="<?=$post->id.'/delete'?>" class="btn btn-link">Delete</a>
						<?endif;?>
						<hr>
						<a href="https://twitter.com/twitter" class="twitter-follow-button" data-show-count="false" data-size="large" data-show-screen-name="false">Follow</a>
					</div>
				</div>
			<?endforeach;?>
		</div>
	</div>
</div>

<div class="archive flex flex-col">
	<h2>Archive</h2>
	<?foreach($months as $month => $mposts):?>
        <h3><?=$month?></h3>
        <ul>
        <?foreach($mposts as $mpost):?>
            <li><a href="/post/<?=$mpost->id?>"><?=$mpost->subject?></a></li>
        <?endforeach; ?>
        </ul>
	<?endforeach;?>
</div>