<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <title>Document</title>
</head>
<body>

<div class="container">
    <form action="{{route('update.student')}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{$student['id']}}">
        <div class="form-group">
            <label for="">name</label>
            <input type="text" name="name" class="form-control" value="{{$student['name']}}">
        </div>

        <div class="form-group">
            <label for="">surname</label>
            <input type="text" name="surname" class="form-control" value="{{$student['surname']}}">
        </div>

        <div class="form-group">
            <label for="">age</label>
            <input type="number" name="age" class="form-control" value="{{$student['age']}}">
        </div>

        <div class="form-group">
            <label for="">image</label>
            <input type="file" name="image" class="form-control">
        </div>

        <input type="submit" class="btn btn-success" value="add student">
    </form>
</div>

</body>
</html>
