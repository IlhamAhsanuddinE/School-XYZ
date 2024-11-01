<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PPDB - Sekolah XYZ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <!-- Navbar -->
    <?php include 'navbar.php'; ?>

    <!-- PPDB Section -->
    <div class="container mt-5">
        <h2 class="text-center mb-4 font-bold text-2xl">Pendaftaran Peserta Didik Baru (PPDB)</h2>
        <p class="text-center text-gray-600">Selamat datang di halaman informasi Penerimaan Peserta Didik Baru (PPDB) Sekolah XYZ. Berikut ini adalah informasi mengenai jadwal, persyaratan, dan prosedur pendaftaran.</p>

        <!-- Jadwal PPDB -->
        <div class="mt-5">
            <h3 class="font-bold text-xl">Jadwal PPDB</h3>
            <ul class="list-disc pl-5 text-gray-700">
                <li><strong>Pendaftaran Online:</strong> 1 Mei - 30 Juni</li>
                <li><strong>Seleksi Administrasi:</strong> 1 Juli - 5 Juli</li>
                <li><strong>Pengumuman Hasil Seleksi:</strong> 10 Juli</li>
                <li><strong>Daftar Ulang:</strong> 11 Juli - 20 Juli</li>
            </ul>
        </div>

        <!-- Persyaratan Pendaftaran -->
        <div class="mt-5">
            <h3 class="font-bold text-xl">Persyaratan Pendaftaran</h3>
            <ul class="list-disc pl-5 text-gray-700">
                <li>Calon siswa harus sudah lulus dari jenjang pendidikan sebelumnya (SD/MI untuk SMP, SMP/MTs untuk SMA/SMK).</li>
                <li>Menyertakan fotokopi akta kelahiran.</li>
                <li>Fotokopi Kartu Keluarga (KK) dan KTP orang tua.</li>
                <li>Pas foto terbaru ukuran 3x4 sebanyak 3 lembar.</li>
                <li>Mengisi formulir pendaftaran yang tersedia di website sekolah atau langsung di sekolah.</li>
            </ul>
        </div>

        <!-- Proses Pendaftaran -->
        <div class="mt-5">
            <h3 class="font-bold text-xl">Proses Pendaftaran</h3>
            <ol class="list-decimal pl-5 text-gray-700">
                <li><strong>Pendaftaran Online:</strong> Calon siswa dapat mendaftar melalui website resmi Sekolah XYZ dengan mengisi formulir online dan mengunggah dokumen yang diperlukan.</li>
                <li><strong>Seleksi Administrasi:</strong> Tim panitia akan menyeleksi dokumen administrasi untuk memastikan kelengkapan dan validitas data.</li>
                <li><strong>Tes Masuk (Jika Diperlukan):</strong> Bagi calon siswa yang mengikuti program khusus, tes masuk akan diadakan di lokasi sekolah.</li>
                <li><strong>Pengumuman Hasil Seleksi:</strong> Hasil seleksi akan diumumkan di website resmi sekolah dan juga akan diinformasikan melalui email atau SMS.</li>
                <li><strong>Daftar Ulang:</strong> Siswa yang dinyatakan lulus wajib melakukan daftar ulang dan melengkapi administrasi lainnya sesuai jadwal yang telah ditentukan.</li>
            </ol>
        </div>
    </div>

    <!-- Footer -->
    <?php include 'footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
