<!DOCTYPE html>  
<html lang="en">  
<head>  
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Product Details</title>  
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">  
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">  
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">   
    <link href="assets/css/Off Duty Soft Focus Creme Bronzer.css" rel="stylesheet">  
</head>  
<body>  

    <!-- Header Section -->  
    <header>  
        <div class="nav-container">  
            <div class="logo">  
                <img src="img/Logo.png" alt="Logo">  
            </div>  
            <nav>  
                <ul class="nav">  
                    <li class="nav-item"><a class="nav-link" href="#">home</a></li>  
                    <li class="nav-item"><a class="nav-link" href="#">new</a></li>  
                    <li class="nav-item"><a class="nav-link" href="#">makeup</a></li>  
                    <li class="nav-item"><a class="nav-link" href="#">skincare</a></li>  
                    <li class="nav-item"><a class="nav-link" href="#">sale</a></li>  
                    <li class="nav-item"><a class="nav-link" href="#">about us</a></li>  
                </ul>  
            </nav>  
            <div class="icons">  
                <i class="bi bi-search"></i>  
                <i class="bi bi-person-circle"></i>  
                <i class="bi bi-cart"></i>  
            </div>  
        </div>  
    </header>  

    <!-- Product Details Section -->  
    <section class="product-container container mt-4">
        <div class="row">
            <div class="col-md-6 product-image text-center">
                <img id="mainProductImage" src="img/Face/Off Duty Soft Focus Creme Bronzer/IMG_0301.WEBP" alt="Product Image" class="img-fluid rounded">
                <div class="product-thumbnails d-flex justify-content-center mt-4">
                    <img src="img/Face/Off Duty Soft Focus Creme Bronzer/IMG_0302.WEBP" alt="Thumbnail 1" class="me-2 rounded" onclick="changeProductImage(this)">
                    <img src="img/Face/Off Duty Soft Focus Creme Bronzer/IMG_0303.WEBP" alt="Thumbnail 2" class="me-2 rounded" onclick="changeProductImage(this)">
                    <img src="img/Face/Off Duty Soft Focus Creme Bronzer/IMG_0304.WEBP" alt="Thumbnail 3" class="me-2 rounded" onclick="changeProductImage(this)">
                </div>
            </div>
            <div class="col-md-6 product-details">
                <h1 class="product-title">Off Duty Soft Focus Creme Bronzer</h1>
                <p class="product-price">₱499.00</p>

                <div class="variant-section mb-3">
                    <label class="variant-label">Variant</label>
                    <select class="variant-select form-select">
                        <option value="" disabled selected>Select a variant</option>
                        <option value="variant1">Variant 1</option>
                        <option value="variant2">Variant 2</option>
                    </select>
                </div>

                <button class="add-to-cart btn">Add to Cart</button>

                <div class="product-description mt-4">
                    <p> Your all-in-one makeup essential featuring two contour shades (Mocha and Truffle), a bronzer (Sun Glow), and a highlighter (Highkey). This creamy formula glides on effortlessly, allowing for easy application and seamless blending. Achieve a sculpted, luminous look that enhances your natural beauty with this versatile bronzer!</p>
                    <p class="section-title">Ingredients:</p>
                    <p>Water, Isododecane, Dimethicone, Cyclopentasiloxane, Mica, Titanium Dioxide, Polyethylene, Polyglyceryl-3 Diisostearate, Cetyl PEG/PPG-10/1 Dimethicone, Phenyl Trimethicone, Silica, Disteardimonium Hectorite, Triethoxycaprylylsilane, Sodium Chloride, Aluminum Hydroxide, Tocopheryl Acetate (Vitamin E), Hyaluronic Acid, [May Contain/Peut Contenir (+/-): Iron Oxides (CI 77491, CI 77492, CI 77499)].</p>
                    <p class="section-title">How to use:</p>
                    <p>Apply a small amount to the desired areas, such as the cheekbones, temples, and jawline, and blend with a damp beauty sponge or fingertips for a natural, sun-kissed glow.</p>
                </div>
            </div>
        </div>
    </section>
  
    <script>
    function changeProductImage(thumbnail) {
        var mainImage = document.getElementById("mainProductImage");
        var tempSrc = mainImage.src;
        mainImage.src = thumbnail.src;
        thumbnail.src = tempSrc;
    }
    </script>

    <!-- Footer Section -->  
    <footer class="footer">   
        <div class="footer-logo">  
            <img src="img/Logo.png" alt="Logo" style="width: 80px;">  
        </div>  
        <div class="container text-center">    
            <ul class="footer-links mt-3 list-unstyled d-flex justify-content-center">  
                <li class="mx-3"><a href="#">about us</a></li>  
                <li class="mx-3"><a href="#">store locator</a></li>  
                <li class="mx-3"><a href="#">privacy policy</a></li>  
                <li class="mx-3"><a href="#">FAQS</a></li>  
                <li class="mx-3"><a href="#">shipping and returns</a></li>  
                <li class="mx-3"><a href="#">terms and conditions</a></li>  
            </ul>    
        </div>
        <div class="social-icons">  
            <i class="bi bi-facebook"></i>  
            <i class="bi bi-instagram"></i>  
            <i class="bi bi-twitter"></i>  
        </div>  
    </footer>  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>  
</html>
