<?php
include 'firebase.php';
$products = getProducts();
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách sản phẩm</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; }
        table { width: 50%; margin: auto; border-collapse: collapse; }
        th, td { border: 1px solid #ddd; padding: 10px; }
        button { background: red; color: white; border: none; padding: 5px; cursor: pointer; }
    </style>
</head>
<body>
    <h2>Danh sách sản phẩm</h2>
    <table>
        <tr><th>Tên</th><th>Giá (VNĐ)</th><th>Hành động</th></tr>
        <?php if ($products): ?>
            <?php foreach ($products as $id => $product): ?>
                <tr>
                    <td><?= $product['name'] ?></td>
                    <td><?= $product['price'] ?></td>
                    <td>
                        <form method="POST" action="delete_product.php">
                            <input type="hidden" name="id" value="<?= $id ?>">
                            <button type="submit">Xóa</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr><td colspan="3">Không có sản phẩm nào.</td></tr>
        <?php endif; ?>
    </table>
    <br>
    <a href="add_product.php">Thêm sản phẩm</a>
</body>
</html>
