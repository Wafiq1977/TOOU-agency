<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog - TOOU Agency</title>
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
                <li class="nav-item active"><a class="nav-link" href="/blog">Blog</a></li>
            </ul>
        </div>
    </nav>

    <div class="container mt-5">
        <h1>Blog</h1>
        <div class="row">
            <?php foreach ($blogs as $blog): ?>
                <div class="col-md-6">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title"><?= esc($blog['title']) ?></h5>
                            <p class="card-text"><?= substr(esc($blog['content']), 0, 200) ?>...</p>
                            <p class="card-text"><small class="text-muted">Oleh <?= esc($blog['author']) ?> pada <?= date('d M Y', strtotime($blog['created_at'])) ?></small></p>
                            <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>