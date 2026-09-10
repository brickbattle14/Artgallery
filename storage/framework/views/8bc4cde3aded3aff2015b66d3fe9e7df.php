<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Profile - ArtGallery</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f7f3ed;
            color: #292929;
        }

        nav {
            height: 80px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 8%;
            background: white;
            border-bottom: 1px solid #ddd;
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
            letter-spacing: 2px;
        }

        .nav-links {
            display: flex;
            gap: 30px;
        }

        .nav-links a {
            text-decoration: none;
            color: #292929;
        }

        .profile-container {
            max-width: 1000px;
            margin: 50px auto;
            padding: 0 25px;
        }

        .profile {
            background: white;
            border-radius: 20px;
            padding: 40px;
            display: flex;
            align-items: center;
            gap: 35px;
            margin-bottom: 30px;
        }

        .profile-picture {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            overflow: hidden;
            flex-shrink: 0;
            background: #ddd;
        }

        .profile-picture img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .profile-info {
            flex: 1;
        }

        .username-row {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 10px;
        }

        .username-row h1 {
            font-size: 30px;
        }

        .edit-button {
            padding: 8px 15px;
            border: 1px solid #292929;
            border-radius: 8px;
            text-decoration: none;
            color: #292929;
            font-size: 14px;
        }

        .edit-button:hover {
            background: #292929;
            color: white;
        }

        .username {
            color: #777;
            margin-bottom: 18px;
        }

        .bio {
            line-height: 1.6;
            color: #555;
            max-width: 600px;
        }

        .artwork-section {
            background: white;
            border-radius: 20px;
            padding: 35px;
        }

        .artwork-section h2 {
            margin-bottom: 25px;
        }

        .art-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        .art-card {
            background: #f2eee8;
            border-radius: 12px;
            overflow: hidden;
        }

        .art-card img {
            width: 100%;
            height: 220px;
            object-fit: cover;
            display: block;
        }

        .art-info {
            padding: 15px;
        }

        .art-info h3 {
            margin-bottom: 6px;
        }

        .art-info p {
            color: #777;
            font-size: 14px;
        }

        @media (max-width: 700px) {
            .profile {
                flex-direction: column;
                text-align: center;
            }

            .username-row {
                justify-content: center;
            }

            .art-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>

    <nav>
        <div class="logo">
            ARTGALLERY
        </div>

        <div class="nav-links">
            <a href="/">Home</a>
            <a href="#">Explore</a>
            <a href="#">Categories</a>
            <a href="/profile">Profile</a>
        </div>
    </nav>

<section class="profile">

    <!-- FOTO PROFIL -->
    <div class="profile-picture">
        <img src="<?php echo e(asset($profilePicture)); ?>" alt="Profile Picture">
    </div>


    <!-- INFORMASI PROFIL -->
    <div class="profile-info">

        <!-- USERNAME + EDIT -->
        <div class="username-row">

            <h1><?php echo e($username); ?></h1>

            <a href="/profile/edit" class="edit-button">
                Edit Profile
            </a>

        </div>

        <!-- @USERNAME -->
        <p class="username">
            <?php echo e('@' . $username); ?>

        </p>

        <!-- BIO -->
        <p class="bio">
    <?php echo e($bio ?: 'No bio yet.'); ?>

        </p>

    </div>

</section>


        <!-- ARTWORK -->
     
<section class="artwork-section">

    <h2>My Artwork</h2>

    <p class="empty-artwork">
        Your posted artwork will appear here.
    </p>

</section>

        </section>

    </div>

</body>
</html>
<?php /**PATH C:\Users\USER\OneDrive\Documents\Laravel\art-Gallery\resources\views/profile.blade.php ENDPATH**/ ?>