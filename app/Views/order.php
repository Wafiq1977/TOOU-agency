<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesan Layanan - TOOU Agency</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/">TOOU Agency</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="/services">Layanan</a></li>
                <li class="nav-item"><a class="nav-link" href="/portfolio">Portofolio</a></li>
                <li class="nav-item"><a class="nav-link" href="/about">Tentang Kami</a></li>
                <li class="nav-item"><a class="nav-link" href="/blog">Blog</a></li>
            </ul>
        </div>
    </nav>

    <div class="container mt-5">
        <h1>Pesan Layanan</h1>
        <form action="/order/submit" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="service_id">Pilih Layanan</label>
                <select class="form-control" id="service_id" name="service_id" required>
                    <?php foreach ($services as $service): ?>
                        <option value="<?= $service['id'] ?>"><?= esc($service['name']) ?> - Rp <?= number_format($service['price'], 0, ',', '.') ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <label for="details">Detail Pesanan</label>
                <textarea class="form-control" id="details" name="details" rows="5" required></textarea>
            </div>
            <div class="form-group">
                <label for="file">Upload File (opsional)</label>
                <input type="file" class="form-control-file" id="file" name="file">
            </div>
            <button type="submit" class="btn btn-primary">Kirim Pesanan</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>