<!DOCTYPE html>
<html lang="en">
<head>
  <title>Update posts</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <h2>Update post data</h2>
  <form action=" {{ route('update', [$posts->id] ) }}" method = "POST">
    @csrf
    @method('put')
    <div class="form-group">
      <label for="title">Title:</label>
      <input type="text" class="form-control" id="title" placeholder="Enter title" name="title" value = "{{$posts->title}}">
    </div>
    <div class="form-group">
      <label for="description">Description:</label>
      <input type="text" class="form-control" id="description" placeholder="Enter description" name="description" value = "{{$posts->description}}">
    </div>
    <div class="form-group">
      <label for="auther">Auther:</label>
      <input type="text" class="form-control" id="auther" placeholder="Enter auther" name="auther" value = "{{$posts->auther}}">
    </div>
    <div class="checkbox">
      <label><input type="checkbox" name="published" @checked($posts->published)> published </label>
    </div>
    <button type="submit" class="btn btn-default">Update</button>
  </form>
</div>

</body>
</html>