<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Employees</h1>
    <div>
        @if(session()->has('success'))
            <div>
                {{ session('success') }}
            </div>


        @endif
    </div>
    <div>
        <table border="1" border-collapse='collapse'>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>County</th>
                <th>Update</th>
            </tr>
            @foreach($employees as $employee)
                <tr>
                    <td>{{ $employee->id }}</td>
                    <td>{{ $employee->fname }}</td>
                    <td>{{ $employee->lname }}</td>
                    <td>{{ $employee->email }}</td>
                    <td>{{ $employee->county }}</td>
                    <td>
                      <a href="{{ route('employee.edit', ['id' => $employee->id]) }}">Edit</a>
                      <form action="{{ route('employee.destroy', ['id' => $employee->id]) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Are you sure you want to delete this employee?');">Delete</button>
                    </form>

                    </td>

                </tr>

            @endforeach
        </table>
    </div>
</body>
</html>
