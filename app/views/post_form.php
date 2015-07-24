<div class="container">
	
	<h2><?=$title?></h2>
	<hr>

	<?=Form::open()?>

		<div class="form-group">
			<?=Form::label('subject', 'Subject')?>
			<?=Form::text('subject', Sticky::get('subject'), 
				[
					'class' => 'form-control'
				])?>
		</div>

		<div class="form-group">
			<?=Form::label('content', 'Content')?>
			<?=Form::textarea('content', Sticky::get('Content'), 
				[
					'class' => 'form-control',
					'id'	=>	'summernote'
				])?>
		</div>

		<?=Form::submit('Save', 
			[
				'class' => 'btn btn-primary'
			])?>

	<?=Form::close()?>

</div>