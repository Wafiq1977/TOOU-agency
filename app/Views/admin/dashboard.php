<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - TOOU Agency</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="/admin">Admin Dashboard</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active"><a class="nav-link" href="/admin">Dashboard</a></li>
                <li class="nav-item"><a class="nav-link" href="/admin/orders">Orders</a></li>
                <li class="nav-item"><a class="nav-link" href="/admin/services">Services</a></li>
            </ul>
        </div>
    </nav>

    <div class="container mt-5">
        <h1>Dashboard Admin</h1>
        <h2>Pesanan Terbaru</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Service</th>
                    <th>Details</th>
                    <th>Status</th>
                    <th>Payment</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($orders as $order): ?>
                    <tr>
                        <td><?= $order['id'] ?></td>
                        <td>Service <?= $order['service_id'] ?></td>
                        <td><?= esc($order['details']) ?></td>
                        <td><?= $order['status'] ?></td>
                        <td><?= $order['payment_status'] ?></td>
                        <td>
                            <form action="/admin/orders/update/<?= $order['id'] ?>" method="post" class="form-inline">
                                <select name="status" class="form-control mr-2">
                                    <option value="pending" <?= $order['status'] == 'pending' ? 'selected' : '' ?>>Pending</option>
                                    <option value="processing" <?= $order['status'] == 'processing' ? 'selected' : '' ?>>Processing</option>
                                    <option value="completed" <?= $order['status'] == 'completed' ? 'selected' : '' ?>>Completed</option>
                                </select>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>