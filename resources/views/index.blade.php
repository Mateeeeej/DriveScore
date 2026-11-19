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

    <main class="container flex-grow-1 d-flex flex-column justify-content-center align-items-center text-center py-4">
      <h1 class="h4 text-white mb-1">DriveScore</h1>
      <p class="small text-white-50 mb-4">Sleduj. Analyzuj. Zlepšuj svou jízdu.</p>

      <img
        src="logo.png"
        alt="Logo"
        class="img-fluid mb-4"
        style="max-width: 10rlh;"
      />

      <div class="d-grid gap-2 w-100" style="max-width: 155px;">
        <a
          href="/login"
          class="btn btn-primary btn-sm rounded-pill border-2 border-info-subtle fs-6"
        >
          PŘIHLÁSIT
        </a>

        <a
          href="/register"
          class="btn btn-outline-primary btn-sm rounded-pill border-2 text-white fs-6"
        >
          REGISTRACE
        </a>
      </div>
    </main>
  </body>
</html>
