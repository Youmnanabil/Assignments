<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Show Post</title>

</head>

<body>
    @include('include/nav')
    <h1> Name: {{ $posts->title }}</h1>
    <h5> Created at: {{ $posts->created_at }}</h5>
    <h5> Updated at: {{ $posts->updated_at }}</h5>
    <h3> Description: {{ $posts->description}}</h3>
    <h3> {{ $posts->published ? "published": "not published" }}</h3>
    <h3> Auther Name: {{ $posts->auther}}</h3>
    
</body>
