<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ekstrakurikuler - Sekolah XYZ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <!-- Navbar -->
    <?php include 'navbar.php'; ?>

    <!-- Ekstrakurikuler Section -->
    <div class="container mt-5">
        <h2 class="text-center mb-4 font-bold text-2xl">Ekstrakurikuler</h2>
        <p class="text-center text-gray-600">Sekolah XYZ menyediakan berbagai kegiatan ekstrakurikuler untuk mengembangkan minat dan bakat siswa di berbagai bidang.</p>
        
        <!-- Grid of Extracurricular Cards -->
        <div class="row row-cols-1 row-cols-md-3 g-4 mt-4">
            <?php
            // List of extracurricular activities
            $ekstrakurikuler = [
                ["name" => "Pramuka", "file" => "ekstrakurikuler1.php", "image" => "https://via.placeholder.com/150"],
                ["name" => "Basket", "file" => "ekstrakurikuler2.php", "image" => "https://via.placeholder.com/150"],
                ["name" => "Paduan Suara", "file" => "ekstrakurikuler3.php", "image" => "https://via.placeholder.com/150"],
                ["name" => "Tari Tradisional", "file" => "ekstrakurikuler4.php", "image" => "https://via.placeholder.com/150"],
                ["name" => "Teater", "file" => "ekstrakurikuler5.php", "image" => "https://via.placeholder.com/150"],
                ["name" => "Karya Ilmiah Remaja", "file" => "ekstrakurikuler6.php", "image" => "https://via.placeholder.com/150"],
                ["name" => "Sepak Bola", "file" => "ekstrakurikuler7.php", "image" => "https://via.placeholder.com/150"]
            ];

            // Loop through extracurricular activities and create a card for each one
            foreach ($ekstrakurikuler as $activity) {
                echo "
                <div class='col'>
                    <a href='{$activity['file']}' class='text-decoration-none'>
                        <div class='card h-100 shadow-sm'>
                            <!-- Extracurricular Image -->
                            <img src='{$activity['image']}' class='card-img-top' alt='{$activity['name']}'>
                            
                            <div class='card-body'>
                                <h5 class='card-title font-semibold text-lg text-dark'>{$activity['name']}</h5>
                                <p class='card-text text-gray-700'>Deskripsi singkat mengenai kegiatan {$activity['name']} yang meliputi aktivitas dan tujuan pengembangan siswa.</p>
                            </div>
                        </div>
                    </a>
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
