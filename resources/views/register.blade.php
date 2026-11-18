<!doctype html>
<html lang="cs">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="/style.css" />
    <title>Registrace | DriveScore</title>
</head>
<body class="pozadi d-flex align-items-center justify-content-center min-vh-100 p-3">

    <div class="card bg-dark bg-opacity-75 text-white border-secondary rounded-4 shadow-lg p-4 w-100" data-bs-theme="dark" style="max-width: 360px; backdrop-filter: blur(10px);">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2 class="h4 mb-0">Registrace</h2>
            <a href="/" class="btn btn-sm btn-outline-light rounded-pill px-3">← Zpět</a>
        </div>

        <form method="POST" action="/register">
            @csrf
            <div class="mb-2">
                <input type="text" name="name" class="form-control form-control-sm bg-dark text-white border-secondary rounded-3 py-2" placeholder="Jméno" required>
            </div>
            <div class="mb-2">
                <input type="email" name="email" class="form-control form-control-sm bg-dark text-white border-secondary rounded-3 py-2" placeholder="E-mail" required>
            </div>
            <div class="mb-3">
                <input type="password" name="password" class="form-control form-control-sm bg-dark text-white border-secondary rounded-3 py-2" placeholder="Heslo" required>
            </div>
            <button type="submit" class="btn btn-primary btn-sm w-100 rounded-3 py-2 fw-semibold">Vytvořit účet</button>
        </form>

        <div class="text-center mt-3">
            <a href="/login" class="text-secondary text-decoration-none small">Už máš účet? <span class="text-white">Přihlas se</span></a>
        </div>
    </div>

</body>
</html>