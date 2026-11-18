<!doctype html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profil Pribadi | Ziqri Fatan Hermansyah</title>
    <!-- Bootstrap 5 CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <!-- Bootstrap Icons -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css" />
  </head>
  <body data-bs-spy="scroll" data-bs-target="#navbarNav" data-bs-offset="70">
    <!-- Navbar -->
    <nav
      class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top shadow-sm"
    >
      <div class="container">
        <a class="navbar-brand fw-bold" href="#"
          >Ziqri<span class="text-primary">.dev</span></a
        >
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="#tentang">Tentang Saya</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#keahlian">Keahlian</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#bahasa">Bahasa</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#hobi">Hobi & Minat</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Hero / Profil Utama -->
    <header id="tentang" class="hero-section py-5 bg-light border-bottom">
      <div class="container py-4">
        <div class="row align-items-center g-4">
          <!-- Foto Profil -->
          <div class="col-md-4 text-center">
            <!-- Ganti src dengan path foto Anda, misal: assets/profil.jpg -->
            <img
              src="assets/profil.jpg"
              onerror="
                this.src =
                  'https://via.placeholder.com/300x300.png?text=Foto+Profil'
              "
              alt="Foto Profil Ziqri Fatan Hermansyah"
              class="img-fluid rounded-circle shadow profile-img border border-4 border-white"
            />
          </div>
          <!-- Biografi (Tanpa Tanggal Lahir) -->
          <div class="col-md-8 text-center text-md-start">
            <span
              class="badge bg-primary-subtle text-primary px-3 py-2 rounded-pill mb-2 fw-semibold"
            >
              Mahasiswa Ilmu Komputer & Web Developer
            </span>
            <h1 class="display-5 fw-bold text-dark mb-3">
              Ziqri Fatan Hermansyah
            </h1>
            <p class="lead text-secondary mb-4">
              Halo! Saya adalah mahasiswa program studi Ilmu Komputer /
              Teknologi Informasi yang memiliki ketertarikan mendalam pada
              pengembangan aplikasi web berbasis backend dan manajemen basis
              data. Saya terbiasa membangun solusi digital terstruktur
              menggunakan PHP, Java, dan SQL, serta terus mengeksplorasi
              teknologi web modern.
            </p>
            <div
              class="d-flex flex-wrap justify-content-center justify-content-md-start gap-2"
            >
              <a href="#keahlian" class="btn btn-primary px-4"
                ><i class="bi bi-code-slash me-2"></i>Lihat Keahlian</a
              >
              <a
                href="https://github.com/"
                target="_blank"
                class="btn btn-outline-dark px-4"
                ><i class="bi bi-github me-2"></i>GitHub</a
              >
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Main Content -->
    <main class="container my-5">
      <!-- Section: Keahlian (Skills) -->
      <section id="keahlian" class="mb-5 pt-3">
        <div class="text-center mb-4">
          <h2 class="fw-bold">Keahlian (Skills)</h2>
          <p class="text-muted">
            Kemampuan teknis pemrograman dan pengembangan perangkat lunak yang
            dikuasai
          </p>
        </div>

        <div class="row g-4">
          <!-- Technical Skills dengan Progress Bar -->
          <div class="col-lg-7">
            <div class="card h-100 shadow-sm border-0">
              <div class="card-body p-4">
                <h5 class="card-title fw-bold mb-4">
                  <i class="bi bi-laptop text-primary me-2"></i>Keahlian Teknis
                </h5>

                <div class="mb-3">
                  <div class="d-flex justify-content-between mb-1">
                    <span class="fw-medium">HTML5, CSS3 & Bootstrap</span>
                    <span class="text-muted">85%</span>
                  </div>
                  <div class="progress" style="height: 10px">
                    <div
                      class="progress-bar bg-primary"
                      role="progressbar"
                      style="width: 85%"
                      aria-valuenow="85"
                      aria-valuemin="0"
                      aria-valuemax="100"
                    ></div>
                  </div>
                </div>

                <div class="mb-3">
                  <div class="d-flex justify-content-between mb-1">
                    <span class="fw-medium"
                      >PHP & Pengembangan Web Dinamis</span
                    >
                    <span class="text-muted">80%</span>
                  </div>
                  <div class="progress" style="height: 10px">
                    <div
                      class="progress-bar bg-success"
                      role="progressbar"
                      style="width: 80%"
                      aria-valuenow="80"
                      aria-valuemin="0"
                      aria-valuemax="100"
                    ></div>
                  </div>
                </div>

                <div class="mb-3">
                  <div class="d-flex justify-content-between mb-1">
                    <span class="fw-medium">SQL & Manajemen Basis Data</span>
                    <span class="text-muted">80%</span>
                  </div>
                  <div class="progress" style="height: 10px">
                    <div
                      class="progress-bar bg-info"
                      role="progressbar"
                      style="width: 80%"
                      aria-valuenow="80"
                      aria-valuemin="0"
                      aria-valuemax="100"
                    ></div>
                  </div>
                </div>

                <div class="mb-0">
                  <div class="d-flex justify-content-between mb-1">
                    <span class="fw-medium">Pemrograman Java & Algoritma</span>
                    <span class="text-muted">75%</span>
                  </div>
                  <div class="progress" style="height: 10px">
                    <div
                      class="progress-bar bg-warning"
                      role="progressbar"
                      style="width: 75%"
                      aria-valuenow="75"
                      aria-valuemin="0"
                      aria-valuemax="100"
                    ></div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Tools & Non-Technical Skills dengan Badges -->
          <div class="col-lg-5">
            <div class="card h-100 shadow-sm border-0">
              <div class="card-body p-4">
                <h5 class="card-title fw-bold mb-3">
                  <i class="bi bi-tools text-primary me-2"></i>Tools &
                  Lingkungan Kerja
                </h5>
                <div class="d-flex flex-wrap gap-2 mb-4">
                  <span class="badge bg-dark fs-6 fw-normal px-3 py-2"
                    >Visual Studio Code</span
                  >
                  <span class="badge bg-dark fs-6 fw-normal px-3 py-2"
                    >Git & GitHub</span
                  >
                  <span class="badge bg-dark fs-6 fw-normal px-3 py-2"
                    >MySQL / XAMPP</span
                  >
                  <span class="badge bg-dark fs-6 fw-normal px-3 py-2"
                    >Sistem Operasi Linux & Windows</span
                  >
                </div>

                <h5 class="card-title fw-bold mb-3">
                  <i class="bi bi-people text-primary me-2"></i>Keahlian
                  Non-Teknis
                </h5>
                <div class="d-flex flex-wrap gap-2">
                  <span
                    class="badge bg-primary-subtle text-primary border border-primary-subtle fs-6 fw-normal px-3 py-2"
                    >Pemecahan Masalah (Problem Solving)</span
                  >
                  <span
                    class="badge bg-primary-subtle text-primary border border-primary-subtle fs-6 fw-normal px-3 py-2"
                    >Analisis Terstruktur</span
                  >
                  <span
                    class="badge bg-primary-subtle text-primary border border-primary-subtle fs-6 fw-normal px-3 py-2"
                    >Kerja Sama Tim</span
                  >
                  <span
                    class="badge bg-primary-subtle text-primary border border-primary-subtle fs-6 fw-normal px-3 py-2"
                    >Manajemen Waktu</span
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Section: Kemampuan Bahasa (Language Skills) -->
      <section id="bahasa" class="mb-5 pt-3">
        <div class="text-center mb-4">
          <h2 class="fw-bold">Kemampuan Bahasa</h2>
          <p class="text-muted">
            Tingkat kemahiran komunikasi dalam berbagai bahasa
          </p>
        </div>

        <div class="row g-4 justify-content-center">
          <div class="col-md-6">
            <div class="card shadow-sm border-0 h-100">
              <div
                class="card-body p-4 d-flex align-items-center justify-content-between"
              >
                <div>
                  <h5 class="fw-bold mb-1">Bahasa Indonesia</h5>
                  <p class="text-muted mb-0">
                    Penutur Asli (Native / Aktif Lisan & Tulisan)
                  </p>
                </div>
                <span class="badge bg-success fs-6 px-3 py-2"
                  >Mahir (Native)</span
                >
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card shadow-sm border-0 h-100">
              <div
                class="card-body p-4 d-flex align-items-center justify-content-between"
              >
                <div>
                  <h5 class="fw-bold mb-1">Bahasa Inggris</h5>
                  <p class="text-muted mb-0">
                    Pemahaman dokumentasi teknis, membaca, dan menulis
                  </p>
                </div>
                <span class="badge bg-primary fs-6 px-3 py-2"
                  >Menengah (Intermediate)</span
                >
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Section: Hobi & Minat (Hobbies & Interests) -->
      <section id="hobi" class="pt-3">
        <div class="text-center mb-4">
          <h2 class="fw-bold">Hobi & Minat</h2>
          <p class="text-muted">
            Aktivitas kegemaran pendukung kreativitas dan pengembangan diri
          </p>
        </div>

        <div class="row g-4">
          <div class="col-sm-6 col-lg-3">
            <div class="card h-100 text-center shadow-sm border-0 hover-card">
              <div class="card-body p-4">
                <div
                  class="icon-box bg-primary-subtle text-primary mx-auto mb-3"
                >
                  <i class="bi bi-terminal fs-3"></i>
                </div>
                <h5 class="fw-bold">Coding & Eksplorasi Web</h5>
                <p class="text-muted small mb-0">
                  Membangun proyek aplikasi web kecil dan mempelajari arsitektur
                  sistem.
                </p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3">
            <div class="card h-100 text-center shadow-sm border-0 hover-card">
              <div class="card-body p-4">
                <div
                  class="icon-box bg-success-subtle text-success mx-auto mb-3"
                >
                  <i class="bi bi-book fs-3"></i>
                </div>
                <h5 class="fw-bold">Membaca Literatur Teknologi</h5>
                <p class="text-muted small mb-0">
                  Mengikuti perkembangan rekayasa perangkat lunak dan
                  dokumentasi pemrograman.
                </p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3">
            <div class="card h-100 text-center shadow-sm border-0 hover-card">
              <div class="card-body p-4">
                <div
                  class="icon-box bg-warning-subtle text-warning mx-auto mb-3"
                >
                  <i class="bi bi-graph-up-arrow fs-3"></i>
                </div>
                <h5 class="fw-bold">Observasi Bisnis & UMKM</h5>
                <p class="text-muted small mb-0">
                  Menganalisis proses operasional dan peluang digitalisasi usaha
                  kuliner lokal.
                </p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3">
            <div class="card h-100 text-center shadow-sm border-0 hover-card">
              <div class="card-body p-4">
                <div class="icon-box bg-info-subtle text-info mx-auto mb-3">
                  <i class="bi bi-globe-asia-australia fs-3"></i>
                </div>
                <h5 class="fw-bold">Pengabdian Masyarakat</h5>
                <p class="text-muted small mb-0">
                  Berpartisipasi dalam kegiatan pelestarian lingkungan dan kerja
                  bakti sosial.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-4 mt-5">
      <div class="container">
        <p class="mb-1 fw-semibold">Ziqri Fatan Hermansyah</p>
        <p class="text-secondary small mb-0">
          &copy; 2026 Dibuat menggunakan HTML5 & Bootstrap 5. Di-hosting di
          GitHub Pages.
        </p>
      </div>
    </footer>

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
