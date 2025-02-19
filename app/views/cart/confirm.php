<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xác nhận đơn hàng</title>
    <!-- Link tới Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <p>Cảm ơn bạn đã đặt hàng! Đơn hàng của bạn đã được xác nhận.</p>
                        <h5>Danh sách sản phẩm:</h5>
                        <ul class="list-group">
                            <?php foreach ($_SESSION['order_details'] as $orderDetail): ?>
                                <li class="list-group-item">
                                    Tên sản phẩm: <?php echo $orderDetail->name; ?> - Số lượng: <?php echo $orderDetail->soLuong; ?> - Giá: <?php echo $orderDetail->price; ?>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <div class="card-footer">
                        <a href="/chieu2/cart/show" class="btn btn-primary">Quay lại giỏ hàng</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Link tới Bootstrap JS và các thư viện khác -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
