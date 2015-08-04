<div class="container">
	
	<h3>Leave a comment</h3>
	<hr>
	<?if(Auth::is_logged_in()):?>
		<?=Form::open('/post/'.$post->id.'/comment')?>
			<div class="form-group">
				<?=Form::label('content', '')?>
				<?=Form::textarea('content', Sticky::get('content'), 
					[
						'class' 	=> 'form-control',
						'required'  => 'required'
					])?>
			</div>
			<div class="form-group">
				<?=Form::submit('Post Comment',
					[
						'class' 	=> 'btn btn-primary'
					])?>
			</div>
			
		<?=Form::close()?>
	<?else:?>
		<a href="/login"><p class="login">Must be logged in to comment</p></a>
	<?endif;?>
</div>