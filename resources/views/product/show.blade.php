<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>show</title>
</head>
<body>
    <h1>Hiển thị thông tin sản phẩm</h1>
    <h3>Sản phẩm có id: {{$id}}</h3>
    <h3>Giá: {{$price}}</h3>
    <h4>Màu: {{$colors[0].'-'.$colors[1]}}</h4>
</body>
</html>