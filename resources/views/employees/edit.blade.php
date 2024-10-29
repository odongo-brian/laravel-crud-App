<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Employee</title>

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .form-group {
            display: flex;
            align-items: center;
            margin-bottom: 1rem;
        }
        .form-group label {
            width: 40%;
            margin-right: 20px;
        }
    </style>
</head>
<body class="d-flex justify-content-center align-items-center" style="height: 100vh;">
    <div class="text-center">
        <h1>Edit Employee</h1>

        {{-- Display any error encountered --}}
        @if($errors->any())
            <ul class="list-unstyled text-danger">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        <form action="{{ route('employee.update', ['id' => $employee->id]) }}" method="post" class="w-70">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="fname">First Name</label>
                <input type="text" name="fname" id="fname" class="form-control" placeholder="Enter first name" value="{{ $employee->fname }}">
            </div>
            <div class="form-group">
                <label for="lname">Last Name</label>
                <input type="text" name="lname" id="lname" class="form-control" placeholder="Enter last name" value="{{ $employee->lname }}">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Enter email" value="{{ $employee->email }}">
            </div>
            <div class="form-group">
                <label for="county">County</label>
                <input type="text" name="county" id="county" class="form-control" placeholder="Enter County of residence" value="{{ $employee->county }}">
            </div>
            <div>
                <input type="submit" value="Update" class="btn btn-primary">
            </div>
        </form>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
