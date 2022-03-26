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
     <a href="{{route('create.student')}}" class="btn btn-success m-5"> add student</a>
     <div class="row">
         <table class="table table-striped">
             <tr>
                 <th>id</th> <th>name</th> <th>surname</th> <th>age</th> <th>image</th>  <th>action</th>
             </tr>

             @foreach(\App\Models\Student::all() as $item)
                 <tr>
                     <td>{{$item->id}}</td> <td>{{$item->name}}</td> <td>{{$item->surname}}</td> <td>{{$item->age}}</td>
                     <td><img src="{{asset('storage/'.$item->image)}}" width="100" alt=""></td>
                     <td>
                         <a href="{{url('delete/'.$item->id)}}" class="btn btn-danger">delete</a>
                         <a href="{{url('edit/'.$item->id)}}" class="btn btn-info">edit</a>
                     </td>
                 </tr>
             @endforeach
         </table>
     </div>
 </div>

</body>
</html>
