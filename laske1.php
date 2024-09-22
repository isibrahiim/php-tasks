<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Our Menu - Little Lemon</title>
    <meta name="description"
        content="Little Lemon is a family-owned Mediterranean restaurant focused on traditional recipes served with a modern twist." />
    <meta name="author" content="Little Lemon" />
    <meta name="robots" content="index, follow" />

    <!-- Open Graph Protocol -->
    <meta property="og:title" content="Our Menu - Little Lemon" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="logo.png" />
    <meta property="og:url" content="https://littlelemon.com" />
    <meta property="og:description"
        content="Little Lemon is a family-owned Mediterranean restaurant focused on traditional recipes served with a modern twist." />
    <meta property="og:locale" content="en_US" />
    <meta property="og:locale:alternate" content="fi_FI" />
    <!-- Specifies alternate locale for the page (Finland Finnish language) -->
    <meta property="og:site_name" content="Little Lemon" />

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@LittleLemon" />
    <meta name="twitter:title" content="Our Menu - Little Lemon" />
    <meta name="twitter:description"
        content="Little Lemon is a family-owned Mediterranean restaurant focused on traditional recipes served with a modern twist." />
    <meta name="twitter:image" content="https://littlelemon.com/logo.png" />

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="./images/favicon-32x32.png" />

    <!-- CSS -->
    <link rel="stylesheet" href="./css/style.css" />
    <!-- Other meta tags and stylesheets -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <!-- google font link for satisfy  -->
    <link href="https://fonts.googleapis.com/css?family=Satisfy&display=swap" rel="stylesheet">

</head>

<body>
    <header role="banner" aria-label="Main navigation">
        <!-- Skip link -->
        <a class="skip-link" href="#main-content">Skip to main content</a>
        <div class="logo">
            <figure>
                <a href="index.php">
                    <img src="./images/logo-user-img.png" alt="Little Lemon Website Logo" />
                </a>
                <figcaption class="visually-hidden">
                    User image Logo
                </figcaption>
            </figure>
        </div>

        <!-- Toggle Menu  -->
        <button type="button" class="toggle-menu" id="mobile-menu" aria-label="Toggle navigation">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </button>
        <nav aria-label="Primary navigation">
            <ul class="nav-items">
                <li><a href="index.php">Home</a></li>
                <li><a href="tutorials.php">Tutorials</a></li>
                <li><a href="resources.php">Resources</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a class="btn order-now" href="subscribe.php">Subscribe</a></li>
            </ul>
        </nav>

        <!-- <nav aria-label="Primary navigation">
            <ul class="nav-items">
                <li><a href="index.php">Home</a></li>
                <li><a href="#">C language</a></li>
                <li><a href="#">news</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
                <li><a class="btn order-now" href="#">subscribe</a></li>
            </ul>
        </nav> -->
    </header>


    <!-- Slide bar -->
    <div class="slide-bar-container">

        <!-- Scrollable Navigation for tasks -->
        <div class="scroll-nav-container">
            <button class="scroll-nav-prev" aria-label="Previous" onclick="prevPage()">&lsaquo;</button>
            <nav class="scroll-nav">
                <div class="slide-bar" id="sections"></div>
            </nav>
            <button class="scroll-nav-next" aria-label="Next" onclick="nextPage()">&rsaquo;</button>
        </div>
    </div>

    <main id="main-content">
        <div class="container">

            <hgroup class="text-center">
                <h1>welcome to my website</h1>
                <h2>Php Exercises</h2>
            </hgroup>

            <!-- laske1.php -->
            <section class="my-section" id="task36">
                <h2>Task: 36</h2>
                <div class="esimerkki koodisini">
                    <div class="vari2">
                        <?php
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            // Get the values from the form
                            $R1 = isset($_POST['R1']) ? floatval($_POST['R1']) : 0;
                            $R2 = isset($_POST['R2']) ? floatval($_POST['R2']) : 0;
                            $R3 = isset($_POST['R3']) ? floatval($_POST['R3']) : 0;

                            // Calculate total resistance for parallel connection
                            if ($R1 > 0 && $R2 > 0 && $R3 > 0) {
                                $totalResistance = 1 / (($R1 > 0 ? 1 / $R1 : 0) + ($R2 > 0 ? 1 / $R2 : 0) + ($R3 > 0 ? 1 / $R3 : 0));
                                echo "<p>Total Resistance (R): " . round($totalResistance, 2) . " Ohms</p>";
                            } else {
                                echo "<p>Please enter valid resistance values greater than 0.</p>";
                            }
                        }
                        ?>
                    </div>
                    <a class="question-btn" href="index.php#task36">Back to Home </a>
                </div>
            </section>

        </div>
    </main>
    <button onclick="topFunction()" id="myBtn" title="Go to top">
        <span>↑</span>
    </button>


    <footer>
        <p>&copy; 2024 Isse Ibrhim. All rights reserved.</p>
    </footer>
    <script src="./js/script.js"></script>
</body>

</html>