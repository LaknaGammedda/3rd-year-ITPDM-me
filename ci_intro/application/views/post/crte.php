<h2><?= $title ?></h2>

<body>

<form>
  <div class="form-group">
  	<label>Rate Your Stay  </label>
  </div>
  <div class="form-group">
  	<label>Full name  </label>
    <input type="text" class="form-control" name="name" placeholder="Type your name" />
  </div>
  <div class="form-group">
  	<label>Date of arrival  </label>
    <input type="text" class="form-control" name="date"  />
  </div>
    <div class="form-group">
  	<label>Title your review  </label>
    <input type="text" class="form-control" name="title" placeholder="Add Title" />
  </div>
  <div class="form-group">
  	<label>Your Review  </label>
    <textarea class="form-control" name="body" placeholder="Add Your Comment"></textarea>
  </div>
  <button type="submit" class="btn btn-default">ADD Comment</button>
</form>

</body>