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
      <p class="mt-3">Sleduj. Analyzuj. Zlepšuj svou jízdu.</p>
    </div>

    <div class="container text-center mt-4">
      <img
        src="logo.png"
        alt="Logo"
        class="img-fluid d-block mx-auto"
        style="max-width: 25rlh;"
      />

      <div class="d-grid gap-2 mx-auto mt-4" style="max-width: 130px;">
        <a
          href="/login"
          class="btn btn-primary btn-sm rounded-pill border border-info-subtle py-1"
          style="font-size: 0.85rem;"
        >
          PŘIHLÁSIT
        </a>

        <a
          href="/register"
          class="btn btn-outline-primary btn-sm rounded-pill border text-white py-1"
          style="font-size: 0.85rem;"
        >
          REGISTRACE
        </a>
      </div>
    </div>
  </body>
</html>
