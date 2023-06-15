<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create products</title>
</head>
<body>
    <h1>CREATE PRODUCTS</h1>
    <div>
        @if($errors->any())
      <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
      </ul>

 
        @endif
    </div>
    <form method="POST" action=" {{route('product.store')}} ">
        @csrf
        @method("POST")
        <div>
        <label for="name">Product Name</label>
        <input type="text" name="name">
        </div>
        <div>
        <label for="price">Price</label>
        <input type="text" name="price">
        </div>
        <div>
        <label for="qty">Quantity:</label>
        <input type="text" name="qty" id="quantity">
        </div>
        <div>
        <label for="description">Product description:</label>
     <textarea name="description" id="description" cols="40" rows="10"></textarea>
     </div>
     <div>
        <input type="submit" value="save a new product">
     </div>
    </form>
</body>
</html>