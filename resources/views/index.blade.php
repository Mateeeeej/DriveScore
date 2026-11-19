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
  <body class="pozadi d-flex flex-column min-vh-100">
    @include('navigace')

    <main class="container flex-grow-1 d-flex flex-column justify-content-center align-items-center text-center pb-5">
      <h1 class="fs-4 mb-0">DriveScore</h1>
      <p class="text-white-50 mb-3" style="font-size: 0.75rem;">
        Sleduj. Analyzuj. Zlepšuj svou jízdu.
      </p>

      <!-- Obrázek beze změny -->
      <img
        src="logo.png"
        alt="Logo"
        class="img-fluid col-8 col-sm-5 col-md-3 mb-3"
      />

      <!-- Úzká a nízká tlačítka -->
      <div class="d-grid gap-1 w-100" style="max-width: 115px;">
        <a
          href="/login"
          class="btn btn-primary btn-sm rounded-pill border-info-subtle py-0"
          style="font-size: 0.75rem;"
        >
          PŘIHLÁSIT
        </a>

        <a
          href="/register"
          class="btn btn-outline-primary btn-sm rounded-pill text-white py-0"
          style="font-size: 0.75rem;"
        >
          REGISTRACE
        </a>
      </div>
    </main>
  </body>
</html>
