<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Akreditasi - Sekolah XYZ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <!-- Navbar -->
    <?php include 'navbar.php'; ?>

    <!-- Accreditation Section -->
    <div class="container mt-5">
        <h2 class="text-center mb-4 font-bold text-2xl">Akreditasi Sekolah XYZ</h2>
        <p class="text-center text-gray-600 mb-5">Informasi terkait status akreditasi Sekolah XYZ dan pencapaian dalam standar pendidikan nasional.</p>

        <!-- Accreditation Overview -->
        <div class="card mb-4 shadow-sm">
            <div class="card-body">
                <h3 class="font-bold text-xl mb-3 text-primary">Status Akreditasi</h3>
                <p class="text-gray-700">
                    Sekolah XYZ telah terakreditasi dengan peringkat <span class="font-bold text-success">A</span>, menunjukkan komitmen sekolah dalam menyediakan kualitas pendidikan yang tinggi sesuai standar nasional.
                </p>
            </div>
        </div>

        <!-- Accreditation Details -->
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h4 class="font-bold text-lg text-primary mb-3">Skor Akreditasi</h4>
                        <p class="text-gray-700">Sekolah XYZ memperoleh skor <span class="font-bold">92/100</span> dalam penilaian akreditasi terbaru, mencerminkan keunggulan dalam aspek kurikulum, fasilitas, serta manajemen sekolah.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h4 class="font-bold text-lg text-primary mb-3">Manfaat Akreditasi</h4>
                        <ul class="list-disc pl-5 text-gray-700">
                            <li>Memastikan kualitas pendidikan sesuai standar nasional.</li>
                            <li>Memberikan jaminan mutu bagi orang tua dan calon siswa.</li>
                            <li>Menjadi referensi untuk peningkatan mutu secara berkelanjutan.</li>
                            <li>Meningkatkan daya saing siswa dalam skala lokal maupun nasional.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Accreditation Badge/Certificate Image -->
        <div class="mt-5 text-center">
            <h4 class="font-bold text-lg text-primary mb-3">Sertifikat Akreditasi</h4>
            <img src="https://via.placeholder.com/500x300" alt="Sertifikat Akreditasi Sekolah XYZ" class="img-fluid rounded shadow-sm mx-auto">
            <p class="text-gray-600 mt-3">Sertifikat akreditasi resmi yang dikeluarkan oleh Badan Akreditasi Nasional.</p>
        </div>
    </div>

    <!-- Footer -->
    <?php include 'footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
