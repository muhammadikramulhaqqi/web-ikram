<?php include 'data.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil - <?php echo $nama_lengkap; ?></title>

    <!-- Import CSS -->
    <link rel="stylesheet" href="style.css?v=1">

    <!-- Import Font dan Ikon -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>

    <div class="profile-card">
        <img src="<?php echo $foto_profil; ?>" alt="Foto Profil" class="profile-photo">

        <h1 class="profile-name"><?php echo $nama_lengkap; ?></h1>

        <p class="profile-details">
            <?php echo $nim; ?> <br>
            <?php echo $fakultas; ?> <br>
            <?php echo $program_studi; ?>
        </p>

        <div class="social-links">
            <a href="<?php echo $link_instagram; ?>" target="_blank" title="Instagram">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="<?php echo $link_gmail; ?>" target="_blank" title="Gmail">
                <i class="fa-solid fa-envelope"></i>
            </a>
            <a href="<?php echo $link_linkedin; ?>" target="_blank" title="LinkedIn">
                <i class="fab fa-linkedin"></i>
            </a>
        </div>
    </div>

</body>
</html>
