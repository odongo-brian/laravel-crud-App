<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Edit Employee</h1>
    {{-- display any error encountered --}}
    @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>

            @endforeach
        </ul>


    @endif

    <form action="{{ route('employee.update', ['id' => $employee->id]) }} " method="post">
        @csrf
        @method('put')
        <div>
            <label for="">First Name</label>
            <input type="text" name="fname" placeholder="Enter first name" value="{{ $employee->fname }}">
        </div>
        <div>
            <label for="">Last Name</label>
            <input type="text" name="lname" placeholder="Enter last name" value="{{ $employee->lname }}">
        </div>
        <div>
            <label for="">Email</label>
            <input type="email" name="email" placeholder="Enter email" value="{{ $employee->email }}">
        </div>
        <div>
            <label for="">County</label>
            <input type="text" name="county" placeholder="Enter County of residence" value="{{ $employee->county }}">
        </div>
        <div>
            <input type="submit" value="Update">
        </div>
    </form>
</body>
</html>
