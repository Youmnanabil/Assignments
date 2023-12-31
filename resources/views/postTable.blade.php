<!DOCTYPE html>
<html lang="en">
<head>
  <title>Posts</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
  @include('include/nav')

<div class="container">
  <h2>Post data</h2>            
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Title</th>
        <th>Description</th>
        <th>Auther</th>
        <th>published</th>
        <th>Eidt</th>
        <th>Show</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
    @foreach($posts as $row)
      <tr>
        <td>{{ $row->title}}</td>
        <td>{{ $row->description}}</td>
        <td>{{ $row->auther}}</td>
        <td> {{ $row->published ? "Yes" : "No"}}</td>
        <td><a href="editPost/{{ $row->id }}">Edit</a></td>
        <td><a href="showPost/{{ $row->id }}">show</a></td>
        <td><a href="deletePost/{{ $row->id }}" onclick =" return confirm ('Are you sure you want to delete?')">delete</a></td>
      </tr>
      @endforeach

    </tbody>
  </table>
</div>

</body>
</html>