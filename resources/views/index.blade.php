<!doctype html>
<html lang="cs">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Bootstrap -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />

    <!-- Google Fonts: Staatliches -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap"
      rel="stylesheet"
    />

    <!-- Vlastní CSS -->
    <link rel="stylesheet" href="/style.css" />

    <title>DriveScore</title>
  </head>
  <body class="pozadi">
    @include('navigace')

    <div class="container text-center mt-5 text-white">
      <h1>DriveScore</h1>
    </div>

    <div class="container text-center mt-5 text-white">
      <p>Sleduj. Analyzuj. Zlepšuj svou jízdu.</p>
    </div>

    <div class="container text-center mt-5">
      <img src="logo.png" alt="Logo" class="img-fluid" style="max-width: 25rlh;" />

      <!-- Tlačítka přes Bootstrap -->
      <div class="d-grid gap-3 mx-auto mt-5" style="max-width: 230px;">
        <a
          href="/login"
          class="btn btn-primary btn-lg rounded-pill border-2 border-info-subtle fs-4 py-2"
        >
          PŘIHLÁSIT
        </a>

        <a
          href="/register"
          class="btn btn-outline-primary btn-lg rounded-pill border-2 text-white fs-4 py-2"
        >
          REGISTRACE
        </a>

        <a
          href="/forgot-password"
          class="text-secondary text-decoration-none mt-1 fs-6"
        >
          ZAPOMNĚLI JSTE HESLO?
        </a>
      </div>
    </div>
  </body>
</html>
