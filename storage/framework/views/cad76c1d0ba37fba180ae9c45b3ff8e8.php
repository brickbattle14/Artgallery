<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>ArtGallery [wip]</title>
    

    <style>
        .art-image {
            width: 100%;
            height: 300px;
            overflow: hidden;
            background: #F7F3ED
            ;
        }

        .art-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }
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
            background: #ffffff;
            border-bottom: 1px solid #ffffff;
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
        }

        nav ul {
            display: flex;
            gap: 30px;
            list-style: none;
        }

        nav a {
            color: #292929;
            text-decoration: none;
        }

        .hero {
            min-height: 600px;
            display: flex;
            align-items: center;
            padding: 80px 8%;
        }

        .hero-content {
            max-width: 650px;
        }

        .hero h1 {
            font-size: 70px;
            line-height: 1;
            margin-bottom: 25px;
        }

        .hero p {
            color: #aaa;
            font-size: 18px;
            line-height: 1.6;
            margin-bottom: 35px;
        }

        .buttons {
            display: flex;
            gap: 15px;
        }

        .btn {
            padding: 14px 24px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: bold;
        }

        .primary {
            background: #b08181;
            color: #f9efef;
        }

        .secondary {
    background: #b08181;
    border: 2px solid #b08181;
    color: white;
}

        .featured {
            padding: 80px 8%;
        }

        .featured h2 {
            font-size: 40px;
            margin-bottom: 35px;
        }

        .gallery {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        .art-card {
            background: #b08181;
            border-radius: 12px;
            overflow: hidden;
        }

        .art-image {
            height: 300px;
            background: #e6d7d7;
        }

        .art-info {
            padding: 20px;
        }

        .art-info h3 {
            margin-bottom: 8px;
        }

        .artist {
            color: #f3dede;
        }
    </style>
</head>

<body>

    <nav>
        <div class="logo">ARTGALLERY</div>

        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Explore</a></li>
            <li><a href="#">Categories</a></li>
            <a href="/profile">Profile</a>
        </ul>
    </nav>


    <section class="hero">

        <div class="hero-content">

            <h1>
                (˶>⩊<˶)
            </h1>

            <p>
                "be creative" -wise person
            </p>

            <div class="buttons">
                <a href="#" class="btn primary">
                    Explore Artwork
                </a>

                <a href="/submit" class="btn secondary">
    Submit Your Work
</a>
            </div>

        </div>

    </section>


    <section class="featured">

        <h2>Featured Artwork</h2>

        <div class="gallery">

            <div class="art-card">
                <div class="art-image">
                     <img src="<?php echo e(asset('images/pilgram.jpg')); ?>" alt="Artwork">
                </div>

                <div class="art-info">
                    <h3>jim from pilgram</h3>
                    <p class="artist">by brickjj</p>
                </div>
            </div>


            <div class="art-card">
                <div class="art-image">
    <img src="<?php echo e(asset('images/oc.jpg')); ?>" alt="Artwork">
</div>

                <div class="art-info">
                    <h3>myra uncolored</h3>
                    <p class="artist">by brickjj</p>
                </div>
            </div>


            <div class="art-card">
                <div class="art-image"></div>

                <div class="art-info">
                    <h3>Artwork Title</h3>
                    <p class="artist">by Artist Name</p>
                </div>
            </div>

        </div>

    </section>

</body>
</html><?php /**PATH C:\Users\USER\OneDrive\Documents\Laravel\art-Gallery\resources\views/welcome.blade.php ENDPATH**/ ?>