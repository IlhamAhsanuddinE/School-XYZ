<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prestasi - Sekolah XYZ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <!-- Navbar -->
    <?php include 'navbar.php'; ?>

    <!-- Prestasi Section -->
    <div class="container mt-5">
        <h2 class="text-center mb-4 font-bold text-2xl">Prestasi</h2>
        <p class="text-center text-gray-600">Sekolah XYZ selalu mendorong siswa untuk berprestasi di berbagai bidang, baik akademik maupun non-akademik. Berikut adalah beberapa pencapaian terbaru dari siswa-siswi kami.</p>
        
        <!-- Grid of Achievement Cards -->
        <div class="row row-cols-1 row-cols-md-3 g-4 mt-4">
            <?php
            // Example list of 23 achievements
            $achievements = [
                "Juara 1 Olimpiade Matematika Tingkat Kota",
                "Juara 2 Lomba Debat Bahasa Inggris Nasional",
                "Medali Perak Kejuaraan Pencak Silat Provinsi",
                "Juara 3 Lomba Desain Grafis Nasional",
                "Penghargaan Lingkungan Hidup Daerah",
                "Juara 1 Lomba Menulis Esai Tingkat Sekolah",
                "Juara Harapan I Lomba Catur Tingkat Kecamatan",
                "Juara 2 Kompetisi Tari Tradisional Tingkat Provinsi",
                "Medali Emas Kejuaraan Taekwondo Kota",
                "Juara 1 Lomba Fotografi Remaja Nasional",
                "Juara 3 Kompetisi Robotics Nasional",
                "Medali Perak Lomba Science Fair Internasional",
                "Juara 1 Lomba Paduan Suara Nasional",
                "Medali Perunggu Kejuaraan Atletik Daerah",
                "Penghargaan Kebersihan Sekolah Tingkat Kota",
                "Juara 2 Lomba Musikalisasi Puisi Tingkat Provinsi",
                "Medali Emas Olimpiade Fisika Nasional",
                "Juara 3 Lomba Melukis Remaja Nasional",
                "Juara 1 Kompetisi Komputer Tingkat Kota",
                "Juara Harapan II Lomba Menulis Puisi Nasional",
                "Juara 2 Lomba Bulutangkis Sekolah Daerah",
                "Medali Perak Lomba Renang Remaja Provinsi",
                "Penghargaan Sekolah Adiwiyata Tingkat Kota"
            ];

            // Loop through achievements and create a card for each one
            foreach ($achievements as $achievement) {
                echo "
                <div class='col'>
                    <div class='card h-100 shadow-sm'>
                        <!-- Achievement Image -->
                        <img src='https://via.placeholder.com/150' class='card-img-top' alt='Achievement Image'>
                        
                        <div class='card-body'>
                            <h5 class='card-title font-semibold text-lg'>$achievement</h5>
                            <p class='card-text text-gray-700'>Deskripsi singkat tentang prestasi ini. Keterangan lebih lanjut mengenai pencapaian ini yang diraih oleh siswa atau tim sekolah.</p>
                        </div>
                        
                        <!-- Read More Button -->
                        <div class='card-footer'>
                            <a href='#' class='btn btn-primary'>Read More</a>
                        </div>
                    </div>
                </div>";
            }
            ?>
        </div>
    </div>

    <!-- Footer -->
    <?php include 'footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
