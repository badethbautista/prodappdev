<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="/save" method="post">
            <label>id</label>
            <input type = "hidden" name = "id" value = "<?= isset($pro['id']) ?>">
            <input type = "text" name = "ProductId" placeholder="ProductId" value = "<?= isset($pro['id']) ?>">
            <br><br>
            <label>ProductName</label>
            <input type = "text" name = "ProductName" placeholder="name" value = "<?= isset($pro['ProductName']) ?>">
            <br><br>
            <label>ProductDescription</label>
            <input type = "text" name = "ProductDescription" placeholder="description" value = "<?= isset($pro['ProductDescription']) ?>">
            <br><br>
            <label>ProductCategory</label>
            <input type = "text" name = "ProductCategory" placeholder="category" value = "<?= isset($pro['ProductCategory']) ?>">
            <br><br>
            <label>ProductQuantity</label>
            <input type = "number" name = "ProductQuantity" placeholder="quantity" value = "<?= isset($pro['ProductQuantity']) ?>">
            <br><br>
            <label>ProductPrice</label>
            <input type = "number" name = "ProductPrice" placeholder="price" value = "<?= isset($pro['ProductPrice']) ?>">
            <br><br>
            <input type="submit" value="save">
    </form>
    <h1>Products</h1>
    <table border ="1">
        <tr>
            <th>id</th>
            <th>ProductName</th>
            <th>ProductDescription</th>
            <th>ProductCategory</th>
            <th>ProductQuantity</th>
            <th>ProductPrice</th>
            <th>Action</th>
            <th>Action</th>
        </tr>
        <?php foreach ($product as $pr): ?>
            <tr>
                <td><?= $pr['id'] ?> </td>
                <td><?= $pr['ProductName'] ?> </td>
                <td><?= $pr['ProductDescription'] ?> </td>
                <td><?= $pr['ProductCategory'] ?> </td>
                <td><?= $pr['ProductQuantity'] ?> </td>
                <td><?= $pr['ProductPrice'] ?> </td>
                <td><a href="/delete/<?= $pr['id'] ?>">Delete</a> </td>
                <td><a href="/edit/<?= $pr['id'] ?>">Edit</a> </td>
            </tr>
        <?php endforeach; ?>
    </table>

</body>
</html>