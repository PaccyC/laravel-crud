<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Products</h1>
    <div>
        @if(session()->has('success'))
         <div>{{session('success')}}</div>

        @endif
    </div>
    <div>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Description</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            
           @foreach ($products as $product)
           <tr>
            <td>{{$product->id}}</td>
            <td>{{$product->name}}</td>
            <td>{{$product->price}}</td>
            <td>{{$product->qty}}</td>
            <td>{{$product->description}}</td>
            <td><a href="{{route('product.edit',['product' => $product])}}">Edit</a></td>
            <td>
                <form action="{{route('product.delete',['product'=>$product])}}" method="POST">

                @csrf
                @method("DELETE")
                <input type="submit" value="DELETE">
                </form>
            </td>
           </tr>

           @endforeach
        </table>
    </div>
</body>
</html>