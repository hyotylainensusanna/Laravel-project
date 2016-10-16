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
        <th>User id</th>
        <th>User name</th>
        <th>User email</th>
        <th>User picture</th>
    </thead></tr>
    <tbody>
    @foreach ($users as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->image}}</td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>

