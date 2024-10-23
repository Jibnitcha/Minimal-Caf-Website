<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="MainIceCream.css">
    <title>Ice cream</title>
  
</head>
<body>
    <header>
        <nav>
            <a href="ProjectSove1.php"><b> &#10094; Back to Menu</b></a>
        </nav>
    </header>

    <h1><center>ICE CREAM</center></h1>
    <hr style="height:2px; border:none; width: 50%;background-color: #7A5D3A; ">

    <div class="search-container">
        <input type="text" id="searchInput" placeholder="Search menu">
        <button type="submit">
            <img src="SearchIcon.png" alt="Search" width="20" height="20">
        </button>
    </div>

    <div class="image-container" id="imageContainer">
        <!-- Images and captions will be dynamically inserted here -->
    </div>

    <script>
        // Example image data with links
        const imageData = [
            { src: 'Caramel Pancake.png', caption: 'Caramel Pancake Ice Cream', link: 'IceCreamCaremel%20Pancake.php' },
            { src: 'Espresso Choc Chip Brownie.png', caption: 'Espresso Choc Chip Brownie Ice Cream', link: 'IcedCreamEspresso%20Choc%20Chip%20Brownie.php' },
            { src: 'Mochi Custard Waffle.png', caption: 'Mochi Custard Waffle Ice Cream', link: 'IceCreamMochi%20Custard%20Waffle.php' },
            { src: 'Shibuya Honey Toast.png', caption: 'Shibuya Honey Toast Ice Cream', link: 'IceCreamShibuya%20Honey%20Toast.php' }
        ];

        const searchInput = document.getElementById('searchInput');
        const imageContainer = document.getElementById('imageContainer');

        // Function to display images based on search query
        function displayImages(query) {
            // Clear previous images
            imageContainer.innerHTML = '';

            // Filter images based on the query
            const filteredImages = imageData.filter(image => 
                image.caption.toLowerCase().includes(query.toLowerCase())
            );

            // Display filtered images
            filteredImages.forEach(image => {
                const imageItem = document.createElement('div');
                imageItem.classList.add('image-item');

                // Create the anchor tag for the link
                const link = document.createElement('a');
                link.href = image.link;
                link.target = '_blank'; // Opens the link in a new tab

                const img = document.createElement('img');
                img.src = image.src;
                img.alt = image.caption;

                const caption = document.createElement('div');
                caption.classList.add('caption');
                caption.textContent = image.caption;

                // Append image and caption to the link
                link.appendChild(img);
                link.appendChild(caption);

                // Append link to image item
                imageItem.appendChild(link);

                // Append image item to the container
                imageContainer.appendChild(imageItem);
            });

            // Display a message if no images match the search query
            if (filteredImages.length === 0) {
                imageContainer.innerHTML = '<p>No result found.</p>';
            }
        }

        // Event listener for search input
        searchInput.addEventListener('input', (e) => {
            const query = e.target.value;
            displayImages(query);
        });

        // Display all images by default
        displayImages('');
    </script>

</body>
</html>
