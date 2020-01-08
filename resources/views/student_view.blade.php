<html>

<head>
    <title>View Student Records</title>
</head>

<body>
<a href="student/create">Create New Record</a>
<table border = 1>
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Action</td>
    </tr>

    @foreach ($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td><a href="student/{{ $user->id  }}">View Record</a> </td>
            <td><a href="student/{{ $user->id }}/edit"> Update Record </a>  </td>
            <td><a href="record/{{ $user->id }}/delete"> Delete Record </a>  </td>
        </tr>
    @endforeach
</table>
</body>
</html>
