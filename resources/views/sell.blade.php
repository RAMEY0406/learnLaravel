<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sell product</title>
</head>
<body>
   <h1>Sell product</h1>
   <hr>
   <form action="{{url('product/sell')}}" method="POST">
         {{csrf_field()}}
        <p>
            Product Name: <input type="text" name="pname" id="pname">
        </p>
        <p>
            Quantity: <input type="text" name="qty" id="qty">
        </p>
        <p>
            Unit Price: <input type="text" name="price" id="price">
        </p>
        <p>
            Discount(%): <input type="text" name="dis" id="dis" value="0">
        </p>
        <p>
            Total: <input type="text" name="total" disabled value="{{$total}}">
        </p>
        <p>
            <button>Submit</button>
        </p>
   </form> 
</body>
</html>