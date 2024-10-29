<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">


    <style>
        /* Custom styles for pagination arrows */
        .pagination .page-item .page-link {
            font-size: 0.2rem; /* Adjust font size as needed */
        }
        .pagination .page-item .page-link i {
            font-size: 0.2rem; /* Adjust icon size */
        }

        .w-5{
            display: none;
        }

    </style>
</head>
<body class="container">
    <h1 class="text-center">Employees List</h1>
    <a href="{{ route('employee.create') }}"><button class="btn btn-primary mb-4">Add Employee</button></a>
    <div>
        @if(session()->has('success'))
            <div>
                {{ session('success') }}
            </div>


        @endif
    </div>
    <div>
        <table border="1" border-collapse='collapse' class="table table-striped w-75">
            <tr class="bg-info">
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>County</th>
                <th>Action</th>
            </tr>
            @foreach($employees as $employee)
                <tr>
                    <td>{{ $employee->id }}</td>
                    <td>{{ $employee->fname }}</td>
                    <td>{{ $employee->lname }}</td>
                    <td>{{ $employee->email }}</td>
                    <td>{{ $employee->county }}</td>
                    <td class="d-flex justify-content-between">
                      <a href="{{ route('employee.edit', ['id' => $employee->id]) }}"><button class="btn btn-info">Edit</button></a>
                      <form action="{{ route('employee.destroy', ['id' => $employee->id]) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit" onclick="return confirm('Are you sure you want to delete this employee?');">Delete</button>
                    </form>

                    </td>

                </tr>

            @endforeach
        </table>

        <!-- Pagination links -->
        <div class="d-flex justify-content-center mt-4">
            {{ $employees->links() }}
        </div>
    </div>


    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
