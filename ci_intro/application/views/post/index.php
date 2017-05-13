 <h2><?= $title ?></h2>
<?php foreach ($posts as $post) : ?>
	<h3><?php echo $post['title']; ?></h3>
	<small class="post-date"> Posted on: <?php echo $post['time']; ?></small><br>
	<?php echo $post['comment']; ?>
	<hr>
	<a class="btn btn-default pull-left" href="<?php echo base_url('index.php/Posts/Edit/'.$post['slug']) ?>">Edit</a>
<?php echo form_open('/posts/delete/'.$post['id']); ?>
   <input type="submit" value="Delete" class="btn btn-danger">
</form>

<?php endforeach; ?> 


