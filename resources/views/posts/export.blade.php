<html>
<head>
    <style>
        body {
            font-family: Arial;
        }
        table {
            border: 1px solid black;
        }
    </style>
</head>
<body>
<table>
    <thead><tr>
        <th>Id</th>
        <th>Title</th>
        <th>Excerpt</th>
        <th>Description</th>
    </thead></tr>
    <tbody>
    @foreach ($posts as $post)
        <tr>
            <td>{{$post->id}}</td>
            <td>{{$post->title}}</td>
            <td>{{$post->excerpt}}</td>
            <td>{{$post->description}}</td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>