<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Calculator</title>
</head>
<body>
    <h1>nhập</h1>
    <form action="calculator" method="POST">
        @csrf
        <p>
            <input type="text" name="productDescription" placeholder="mô tả sản phẩm">
        </p>
        <p>
            <input type="number" name="ListPrice" placeholder="giá">
        </p>
        <p>
            <input type="number" name="DiscountPercent" placeholder="phần trăm">
        </p>
        <p>
            <button type="submit">Calculate</button>
        </p>
    </form>
</body>
</html>