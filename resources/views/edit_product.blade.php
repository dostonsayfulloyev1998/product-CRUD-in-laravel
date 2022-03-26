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
        <div class="col-md-6">
            <form action="{{route('update.product')}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <input type="hidden" name="id" value="{{$product['id']}}">
                <div class="form-group">
                    <label for="">name</label>
                    <input type="text" name="name" class="form-control" value="{{$product['name']}}">
                </div>
                <div class="form-group">
                    <label for="">price</label>
                    <input type="text" name="price" class="form-control" value="{{$product['price']}}">
                </div>
                <div class="form-group">
                    <label for="">country</label>
                    <input type="text" name="country" class="form-control" value="{{$product['country']}}">
                </div>
                <div class="form-group">
                    <label for="">image</label>
                    <input type="file" name="image" class="form-control" value="{{$product['image']}}">
                </div>
                <input type="submit" @class('btn btn-primary') value="add product">
            </form>

        </div>
        <div class="col-md-6">
            <img src="{{asset('storage/'.$product['image'])}}" width="300">
        </div>
    </div>
</div>

</body>
</html>
