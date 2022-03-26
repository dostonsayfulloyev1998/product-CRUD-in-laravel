<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>

<div class="container">
    <div class="row">
        <a href="{{route('create.product')}}" class="btn btn-primary m-5" >add product</a>
    </div>
    <div class="row">
         <table class="table table-striped">
              <thead class="table-dark">
                 <tr>
                     <th>id</th>  <th>name</th> <th>price</th> <th>country</th> <th>image</th>
                 </tr>
              </thead>

             <tbody>
               @foreach(\App\Models\Product::all() as $item)
                   <tr>
                        <td>{{$item->id}}</td>
                       <td>{{$item->name}}</td>
                       <td>{{$item->price}}</td>
                       <td>{{$item->country}}</td>
                       <td><img src="{{asset('storage/'.$item->image)}}" width="100"></td>
                       <td>
                           <form style="display: inline-block" action="{{route('delete.product')}}" method="post">
                               @csrf
                               @method('delete')
                               <input type="hidden" name="id" value="{{$item->id}}">
                               <input type="submit" class="btn btn-danger" value="delete">
                           </form>

                           <form style="display: inline-block"  action="{{route('edit.product')}}" method="post">
                               @csrf
                               @method('put')
                               <input type="hidden" name="id" value="{{$item->id}}">
                               <input type="submit" class="btn btn-info" value="edit">
                           </form>
                       </td>
                   </tr>
               @endforeach
             </tbody>
         </table>
    </div>
</div>

</body>
</html>
