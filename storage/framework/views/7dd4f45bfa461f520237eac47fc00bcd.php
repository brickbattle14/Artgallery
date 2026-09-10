<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit Artwork - ArtGallery</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #F7F3ED;
            color: #904d4d;
            padding: 60px 8%;
        }

        .container {
            max-width: 700px;
            margin: auto;
        }

        h1 {
            font-size: 45px;
            margin-bottom: 10px;
        }

        p {
            color: #904d4d;
            margin-bottom: 35px;
            color: #3a2020;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        input,
textarea {
    width: 100%;
    padding: 14px;
    margin-bottom: 25px;
    background: #c77d5f;
    border: 1px solid #3a2020;
    border-radius: 8px;
    color: #3a2020;
}

input::placeholder,
textarea::placeholder {
    color: #3a2020;
}

textarea {
    height: 150px;
    resize: vertical;
}

button {
    padding: 14px 25px;
    border: none;
    border-radius: 8px;
    background: white;
    color: #6a3838;
    font-weight: bold;
    cursor: pointer;
}
    </style>
</head>

<body>

    <div class="container">

        <h1>Submit Your Artwork</h1>

        <p>
            Share your artwork with the ArtGallery community.
        </p>

        <form>

            <label>Artwork Title</label>
            <input type="text" placeholder="Enter your artwork title">

            <label>Artist Name</label>
            <input type="text" placeholder="Enter your name">

            <label>Description</label>
            <textarea placeholder="Tell us about your artwork"></textarea>

            <label>Artwork</label>
            <input type="file" accept="image/*">

            <button type="submit">
                Submit Artwork
            </button>

        </form>

    </div>

</body>
</html><?php /**PATH C:\Users\USER\OneDrive\Documents\Laravel\art-Gallery\resources\views/submit.blade.php ENDPATH**/ ?>