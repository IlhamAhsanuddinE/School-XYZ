<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Identitas Sekolah - Sekolah XYZ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <!-- Navbar -->
    <?php include 'navbar.php'; ?>

    <!-- Identitas Sekolah Section -->
    <div class="container mt-5">
        <h2 class="text-center mb-4 font-bold text-2xl">Identitas Sekolah</h2>
        
        <!-- School Information -->
        <div class="row">
            <div class="col-md-6 mb-4">
                <h3 class="font-bold text-xl">Tentang Sekolah XYZ</h3>
                <p class="text-gray-700">Sekolah XYZ adalah lembaga pendidikan yang berfokus pada pengembangan akademik dan karakter siswa. Berdiri sejak tahun 1990, Sekolah XYZ telah menghasilkan lulusan-lulusan berkualitas dan siap berkontribusi di masyarakat.</p>
                
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong>Nama Sekolah:</strong> Sekolah XYZ</li>
                    <li class="list-group-item"><strong>Alamat:</strong> Jl. Pendidikan No.123, Jakarta</li>
                    <li class="list-group-item"><strong>Telepon:</strong> (021) 123-4567</li>
                    <li class="list-group-item"><strong>Email:</strong> info@sekolahxyz.sch.id</li>
                </ul>
            </div>

            <div class="col-md-6 mb-4">
                <img src="https://via.placeholder.com/500x300" alt="Sekolah XYZ" class="img-fluid rounded shadow-sm">
            </div>
        </div>

        <!-- Vision, Mission, and Values -->
        <div class="row mt-5">
            <div class="col-md-4">
                <h4 class="font-bold text-lg text-center mb-3">Visi</h4>
                <p class="text-gray-700 text-center">Menjadi sekolah unggulan yang berkomitmen membentuk generasi berkarakter, berprestasi, dan berwawasan global.</p>
            </div>
            <div class="col-md-4">
                <h4 class="font-bold text-lg text-center mb-3">Misi</h4>
                <ul class="list-disc pl-5 text-gray-700">
                    <li>Menyediakan lingkungan belajar yang kondusif bagi siswa.</li>
                    <li>Menanamkan nilai-nilai moral dan etika pada setiap siswa.</li>
                    <li>Mengembangkan potensi akademik dan non-akademik siswa.</li>
                </ul>
            </div>
            <div class="col-md-4">
                <h4 class="font-bold text-lg text-center mb-3">Nilai-Nilai</h4>
                <ul class="list-disc pl-5 text-gray-700">
                    <li>Integritas</li>
                    <li>Kerjasama</li>
                    <li>Inovasi</li>
                    <li>Kepedulian</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php include 'footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
