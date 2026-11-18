<!-- Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<nav class="container-fluid px-4 pt-2">
    <div class="d-flex align-items-center">
        
        <!-- Čas vlevo (w-100 zarovná šířku s pravou stranou) -->
        <div id="nav-cas" class="w-100 text-start text-white fs-4" style="font-family: 'Staatliches', sans-serif; letter-spacing: 1px;">
            10:23
        </div>

        <!-- Modrá pilulka přesně uprostřed -->
        <div class="bg-primary border border-info border-opacity-50 rounded-pill px-4 py-1 d-flex align-items-center gap-4 shadow flex-shrink-0">
            <a href="/" class="text-white fs-5 text-decoration-none" title="Domů">
                <i class="bi bi-house-door-fill"></i>
            </a>
            <a href="/garaz" class="text-white-50 fs-5 text-decoration-none" title="Garáž">
                <i class="bi bi-car-front"></i>
            </a>
            <a href="/jizdy" class="text-white-50 fs-5 text-decoration-none" title="Jízdy">
                <i class="bi bi-speedometer2"></i>
            </a>
            <a href="/statistiky" class="text-white-50 fs-5 text-decoration-none" title="Statistiky">
                <i class="bi bi-pie-chart-fill"></i>
            </a>
            <a href="/skore" class="text-white-50 fs-5 text-decoration-none" title="Skóre">
                <i class="bi bi-bar-chart"></i>
            </a>
        </div>

        <!-- Datum vpravo (w-100 zarovná šířku s levou stranou) -->
        <div id="nav-datum" class="w-100 text-end text-white fs-4" style="font-family: 'Staatliches', sans-serif; letter-spacing: 1px;">
            22.10.2026
        </div>

    </div>
</nav>

<script>
    function aktualizujCas() {
        const ted = new Date();
        const hodiny = String(ted.getHours()).padStart(2, '0');
        const minuty = String(ted.getMinutes()).padStart(2, '0');
        const den = String(ted.getDate()).padStart(2, '0');
        const mesic = String(ted.getMonth() + 1).padStart(2, '0');
        const rok = ted.getFullYear();

        document.getElementById('nav-cas').textContent = `${hodiny}:${minuty}`;
        document.getElementById('nav-datum').textContent = `${den}.${mesic}.${rok}`;
    }
    aktualizujCas();
    setInterval(aktualizujCas, 1000);
</script>