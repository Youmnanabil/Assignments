<!DOCTYPE html>
<html lang="en">
<head>
  <title>Deleted Posts</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
  @include('include/nav')

<div class="container">
  <h2>Deleted Post data</h2>            
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Title</th>
        <th>Description</th>
        <th>Auther</th>
        <th>published</th>
        <th>Force Delete</th>
        <th>Restore Data</th>
      </tr>
    </thead>
    <tbody>
    @foreach($Tpost as $row)
      <tr>
        <td>{{ $row->title}}</td>
        <td>{{ $row->description}}</td>
        <td>{{ $row->auther}}</td>
        <td> {{ $row->published ? "Yes" : "No"}}</td>
        <td><a href="forceDelete/{{ $row->id }}" onclick =" return confirm ('Are you sure you want to delete permenantly?')">Force delete</a></td>
        <td><a href="restore/{{ $row->id }}" onclick =" return confirm ('Are you sure you want to restore?')">restore</a></td>
      </tr>
      @endforeach

    </tbody>
  </table>
</div>

</body>
</html>