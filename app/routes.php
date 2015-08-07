<?php

Route::get('/', CONTROLLERS.'home.php');

Route::get('/register', CONTROLLERS.'register.php');
Route::post('/register', CONTROLLERS.'register.php');

Route::get('/logout', CONTROLLERS.'logout.php');

Route::get('/login', CONTROLLERS.'login.php');
Route::post('/login', CONTROLLERS.'login.php');

Route::get('/admin', CONTROLLERS.'admin.php');

Route::get('/create', CONTROLLERS.'create_post.php');
Route::post('/create', CONTROLLERS.'create_post.php');

Route::get('/:id/edit', CONTROLLERS.'edit_post.php');
Route::post('/:id/edit', CONTROLLERS.'edit_post.php');

Route::get('/:id/delete', CONTROLLERS.'delete_post.php');

Route::get('/post/:id', CONTROLLERS.'post.php');

Route::post('/post/:id/comment', CONTROLLERS.'add_comment.php');

Route::get('/:post_id/edit_comment/:id', CONTROLLERS.'edit_comment.php');
Route::post('/:post_id/edit_comment/:id', CONTROLLERS.'edit_comment.php');

Route::get('/:post_id/delete_comment/:id', CONTROLLERS.'delete_comment.php');

Route::fallback(VIEWS.'404.php');

