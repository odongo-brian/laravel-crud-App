<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Create Employee</h1>
    {{-- display any error encountered --}}
    @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>

            @endforeach
        </ul>


    @endif

    <form action="{{ route('employee.store') }}" method="post">
        @csrf
        @method('post')
        <div>
            <label for="">First Name</label>
            <input type="text" name="fname" placeholder="Enter first name">
        </div>
        <div>
            <label for="">Last Name</label>
            <input type="text" name="lname" placeholder="Enter last name">
        </div>
        <div>
            <label for="">Email</label>
            <input type="email" name="email" placeholder="Enter email">
        </div>
        <div>
            <label for="">County</label>
            <input type="text" name="county" placeholder="Enter County of residence">
        </div>
        <div>
            <input type="submit" value="Save new Employee">
        </div>
    </form>
</body>
</html>
