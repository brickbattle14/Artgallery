<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit Profile - ArtGallery</title>

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

        .container {
            max-width: 700px;
            margin: 50px auto;
            padding: 0 25px;
        }

        .edit-box {
            background: white;
            border-radius: 20px;
            padding: 40px;
        }

        .edit-box h1 {
            margin-bottom: 30px;
        }

        .form-group {
            margin-bottom: 25px;
        }

        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 8px;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 15px;
        }

        .form-group textarea {
            height: 130px;
            resize: vertical;
        }

        .profile-preview {
            width: 130px;
            height: 130px;
            border-radius: 50%;
            overflow: hidden;
            margin-bottom: 15px;
            background: #ddd;
        }

        .profile-preview img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .buttons {
            display: flex;
            gap: 12px;
            margin-top: 30px;
        }

        .save-button,
        .cancel-button {
            padding: 12px 20px;
            border-radius: 8px;
            text-decoration: none;
            cursor: pointer;
            font-size: 15px;
        }

        .save-button {
            border: none;
            background: #292929;
            color: white;
            flex: 1;
        }

        .cancel-button {
            border: 1px solid #292929;
            color: #292929;
        }

        .save-button:hover {
            opacity: 0.85;
        }

        .cancel-button:hover {
            background: #292929;
            color: white;
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
            <a href="/profile">Profile</a>
        </div>

    </nav>


    <div class="container">

        <div class="edit-box">

            <h1>Edit Profile</h1>

            <form action="/profile/edit" method="POST" enctype="multipart/form-data">

                <?php echo csrf_field(); ?>

                <!-- FOTO PROFIL -->
                <div class="form-group">

                    <label for="profile_picture">
                        Profile Picture
                    </label>

                    <div class="profile-preview">
                       <img
    src="<?php echo e(asset($profilePicture)); ?>"
    alt="Profile Picture"
>
                    </div>

                    <input
                        type="file"
                        id="profile_picture"
                        name="profile_picture"
                        accept="image/*"
                    >

                </div>


                <!-- USERNAME -->
                <div class="form-group">

                    <label for="username">
                        Username
                    </label>

                    <input
                        type="text"
                        id="username"
                        name="username"
                        value="<?php echo e($username); ?>"
                        placeholder="Enter your username"
                    >

                </div>


                <!-- BIO -->
                <div class="form-group">

                    <label for="bio">
                        Bio
                    </label>

                    <textarea
    id="bio"
    name="bio"
    placeholder="Tell us about yourself..."
><?php echo e($bio); ?></textarea>

                </div>


                <div class="buttons">

                    <a href="/profile" class="cancel-button">
                        Cancel
                    </a>

                    <button type="submit" class="save-button">
                        Save Changes
                    </button>

                </div>

            </form>

        </div>

    </div>

</body>
</html><?php /**PATH C:\Users\USER\OneDrive\Documents\Laravel\art-Gallery\resources\views/edit-profile.blade.php ENDPATH**/ ?>