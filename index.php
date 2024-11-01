<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Sekolah</title>
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <!-- Navbar -->
    <?php include 'navbar.php'; ?>

    <!-- Hero Section -->
    <!-- <header class="bg-blue-600 text-white text-center py-20">
        <h1 class="text-5xl font-bold">Selamat Datang di Sekolah XYZ</h1>
        <p class="mt-4 text-xl">Membangun Generasi Unggul dan Berkarakter</p>
    </header> -->

    <!-- Main Content -->
     <?php include 'section/slider.php'; ?>
    
    <!-- Info Grafis -->
     <?php include 'section/grafis.php'; ?>

      <?php include 'section/headmaster.php'; ?>

       <!-- Latest News Section -->
        <?php include 'section/news.php'; ?>

       <?php include 'section/contact.php'; ?>

    <!-- Footer -->
     <?php include 'footer.php'; ?>
    
    <script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
