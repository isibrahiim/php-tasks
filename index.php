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


    <!-- Slide bar -->
    <!-- <div class="slide-bar-container">
        <h2>Choose Task by Number</h2>
        <div class="slide-bar" id="sections"></div>
        <div class="pagination">
            <button id="prev" onclick="prevPage()">Previous</button>
            <button id="next" onclick="nextPage()">Next</button>
        </div>
    </div> -->

    <main id="main-content">
        <div class="container">
            <!-- Slide bar
            <div class="slide-bar-container">
                <h2>Choose Task by Number</h2>
                <div class="slide-bar" id="sections"></div>
                <div class="pagination">
                    <button id="prev" onclick="prevPage()">Previous</button>
                    <button id="next" onclick="nextPage()">Next</button>
                </div>
            </div> -->
            <hgroup class="text-center">
                <h1>welcome to my website</h1>
                <h2>Php Exercises</h2>
            </hgroup>




            <!-- Task 1 -->
            <section class="my-section" id="task1">
                <h2>Task: 1</h2>

                <!-- Button to open the modal -->
                <button id="task1Btn" class="question-btn">View Question</button>

                <!-- Modal Structure -->
                <div id="task1Modal" class="modal">
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <h3>Task 1 Question</h3>

                        <!-- Using <pre> to show unsolved PHP code -->
                        <pre>
                                &lt;?php
                                    echo "&lt;h3 id='title'&gt; Title &lt;/h3&gt;";
                                    echo "&lt;p class='text'&gt;This is some text.&lt;/p&gt;";
                                    echo "&lt;p class ='php-text'&gt; Hyvää päivää! &lt;br&gt;Tämä on ensimmäinen PHP-koodi&lt;/p&gt;";
                                ?&gt;
                        </pre>
                    </div>
                </div>

                <?php
                echo "<h3 id='title'> Title</h3>";
                echo "<p class='text'>This is some text.</p>";
                echo "<p class ='php-text'> Hyvää päivää! <br>Tämä on ensimmäinen PHP-koodi </p>";
                ?>
            </section>

            <!-- Task 2 -->
            <section class="my-section" id="task2">
                <h2>Task 2</h2>
                <!-- Button to open the modal -->
                <button id="task2Btn" class="question-btn">View Question</button>
                <!-- Modal Structure -->
                <div id="task2Modal" class="modal">
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <h3>Task 2 Question</h3>
                        <pre>
                &lt;?php
                  $heading1 = "Introduction to Seven Brothers";
                  $heading2 = "Summary of Seven Brothers";

                  $text1 = "Seven Brothers (Seitsemän veljestä) is a novel by Aleksis Kivi, published in 1870. It is considered one of the greatest works of Finnish literature.";
                  $text2 = "The novel tells the story of seven brothers who live in the Finnish countryside. They struggle with societal expectations and their own personal growth.";

                  echo "&lt;h3&gt;" . $heading1 . "&lt;/h3&gt;";
                  echo "&lt;p&gt;" . $text1 . "&lt;/p&gt;";
                  echo "&lt;h3&gt;" . $heading2 . "&lt;/h3&gt;";
                  echo "&lt;p&gt;" . $text2 . "&lt;/p&gt;";
                ?&gt;
              </pre>
                    </div>
                </div>

                <div class="vari1">
                    <?php
                    // Variables for headings
                    $heading1 = "Introduction to Seven Brothers";
                    $heading2 = "Summary of Seven Brothers";

                    // Variables for text
                    $text1 = "Seven Brothers (Seitsemän veljestä) is a novel by Aleksis Kivi, published in 1870. It is considered one of the greatest works of Finnish literature.";
                    $text2 = "The novel tells the story of seven brothers who live in the Finnish countryside. They struggle with societal expectations and their own personal growth.";

                    // Display headings and texts
                    echo "<h3>" . $heading1 . "</h3>";
                    echo "<p>" . $text1 . "</p>";
                    echo "<h3>" . $heading2 . "</h3>";
                    echo "<p>" . $text2 . "</p>";
                    ?>
                </div>
            </section>

            <!-- Task 3 -->
            <section class="my-section" id="task3">
                <h2>Task 3</h2>
                <!-- Button to open the modal -->
                <button id="task3Btn" class="question-btn">View Question</button>
                <!-- Modal Structure -->
                <div id="task3Modal" class="modal">
                    <div class="modal-content">
                        <span class="close">&times;</span>

                        <h3>Task 3 Question</h3>

                        <pre>
                &lt;?php
                  // Variables for circle calculations
                  $teksti_1 = "&lt;h3&gt;Ympyrän kehän laskeminen&lt;/h3&gt;";
                  $teksti_2 = "kehä";
                  $sade = 10;
                  $pii = 3.14;

                  // Circle circumference
                  print "" . $teksti_1 . "&lt;br&gt;";
                  print "Ympyrän " . $teksti_2 . " lasketaan kaavalla:&lt;br&gt;";
                  print "Kehä = 2 * Pi * säde&lt;br&gt;&lt;br&gt;";
                  print "Jos säde on 10, kehä on ";
                  print "" .  2 * $pii * $sade . "&lt;br&gt;&lt;br&gt;";

                  // Calculate area of the circle
                  $ala = $pii * $sade * $sade;
                  print "&lt;h3&gt;Ympyrän alan laskeminen&lt;/h3&gt;";
                  print "Ala = π * säde^2&lt;br&gt;";
                  print "Jos säde on 10, ala on ";
                  print "" . $ala . "&lt;br&gt;&lt;br&gt;";

                  // Calculate volume of the sphere
                  $tilavuus = (4/3) * $pii * pow($sade, 3);
                  print "&lt;h3&gt;Pallon tilavuuden laskeminen&lt;/h3&gt;";
                  print "Tilavuus = (4/3) * π * säde^3&lt;br&gt;";
                  print "Jos säde on 10, tilavuus on ";
                  print "" . $tilavuus . "&lt;br&gt;&lt;br&gt;";

                  // Calculate surface area of the sphere
                  $pinta_ala = 4 * $pii * pow($sade, 2);
                  print "&lt;h3&gt;Pallon pinta-alan laskeminen&lt;/h3&gt;";
                  print "Pinta-ala = 4 * π * säde^2&lt;br&gt;";
                  print "Jos säde on 10, pinta-ala on ";
                  print "" . $pinta_ala . "";
                ?&gt;
                </pre>

                    </div>
                </div>

                <div class="esimerkki koodisini">
                    <?php
                    // Variables for circle calculations
                    $teksti_1 = "<h3>Ympyrän kehän laskeminen</h3>";
                    $teksti_2 = "kehä";
                    $sade = 10;
                    $pii = 3.14;

                    // Circle circumference
                    print "" . $teksti_1 . "<br>";
                    print "Ympyrän " . $teksti_2 . " lasketaan kaavalla:<br>";
                    print "Kehä = 2 * Pi * säde<br><br>";
                    print "Jos säde on 10, kehä on ";
                    print "" .  2 * $pii * $sade . "<br><br>";

                    // Calculate area of the circle
                    $ala = $pii * $sade * $sade;
                    print "<h3>Ympyrän alan laskeminen</h3>";
                    print "Ala = π * säde^2<br>";
                    print "Jos säde on 10, ala on ";
                    print "" . $ala . "<br><br>";

                    // Calculate volume of the sphere
                    $tilavuus = (4 / 3) * $pii * pow($sade, 3);
                    print "<h3>Pallon tilavuuden laskeminen</h3>";
                    print "Tilavuus = (4/3) * π * säde^3<br>";
                    print "Jos säde on 10, tilavuus on ";
                    print "" . $tilavuus . "<br><br>";

                    // Calculate surface area of the sphere
                    $pinta_ala = 4 * $pii * pow($sade, 2);
                    print "<h3>Pallon pinta-alan laskeminen</h3>";
                    print "Pinta-ala = 4 * π * säde^2<br>";
                    print "Jos säde on 10, pinta-ala on ";
                    print "" . $pinta_ala . "";
                    ?>
                </div>
            </section>

            <!-- task 4  -->
            <section class="my-section" id="task4">
                <h2>Task 4</h2>
                <button id="task4Btn" class="question-btn">View Question</button>
                <!-- Modal Structure -->
                <div id="task4Modal" class="modal">
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <h3>Task 4 Question</h3>
                        <pre>
          &lt;?php
            $luku1 = 3;
            $luku2 = 7;
            $luku3 = 70;

            $summa = $luku1 + $luku2 + $luku3;  
            print("Lukujen $luku1, $luku2 ja $luku3 summa on: $summa \n");
          ?&gt;
      </pre>
                    </div>
                </div>
                <div>
                    <?php
                    $luku1 = 3;
                    $luku2 = 7;
                    $luku3 = 70;

                    $summa = $luku1 + $luku2 + $luku3;
                    print("Lukujen $luku1, $luku2 ja $luku3 summa on: $summa \n");
                    ?>
                </div>

            </section>

            <!-- task 5  -->
            <section class="my-section" id="task5">
                <h2>Task 5</h2>
                <button id="task5Btn" class="question-btn">View Question</button>
                <!-- Modal Structure -->
                <div id="task5Modal" class="modal">
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <h3>Task 5 Question</h3>
                        <pre>
                  &lt;?php
                    // Values for the resistors
                    $R1 = 100;
                    $R2 = 200;
                    $R3 = 300;

                    // Calculate total resistance in series
                    $R_total = $R1 + $R2 + $R3;

                    // Display the total resistance
                    echo "R1 = " . $R1 . " ohms<br>";
                    echo "R2 = " . $R2 . " ohms<br>";
                    echo "R3 = " . $R3 . " ohms<br>";
                    echo "Total resistance in series = " . $R_total . " ohms<br>";
                  ?&gt;
                </pre>
                    </div>
                </div>
                <div class="esimerkki koodisini">
                    <?php
                    // Values for the resistors
                    $R1 = 100;
                    $R2 = 200;
                    $R3 = 300;

                    // Total resistance in Parallel
                    $Rkok = 1 / ((1 / $R1) + (1 / $R2) + (1 / $R3));

                    // Round the result to two decimal places (Optional)
                    $Rkok_rounded = round($Rkok, 2);

                    // Displaying the values and results
                    echo "<p>R1: $R1 ohms</p>";
                    echo "<p>R2: $R2 ohms</p>";
                    echo "<p>R3: $R3 ohms</p>";

                    echo "<p> Kokonaisvastus (Rkok): $Rkok ohms</p>";
                    echo "<p> Kokonaisvastus (Rkok): $Rkok_rounded ohms</p>";
                    ?>

                </div>
            </section>

            <!-- Task 6 -->
            <section class="my-section" id="task6">
                <h2>Task 6</h2>

                <!-- Button to open the modal -->
                <button id="task6Btn" class="question-btn">View Question</button>

                <!-- Modal Structure -->
                <div id="task6Modal" class="modal">
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <h3>Task 6 Question</h3>

                        <!-- Using <pre> to show unsolved PHP code -->
                        <pre>
        &lt;?php
          // Aforismit
          $aforismi1 = "&quot;Lähes kaikki suuri on nuorten tekemää.&quot;";
          $aforismi2 = "&quot;Nuoressa ei huilaaminen mene hukkaan.&quot;";
          $aforismi3 = "&quot;Nuoret ovat säännöllisesti ajattelemattomia.&quot;";

          // Näytetään aforismit yhdellä echo-komennolla
          echo "
          &lt;p&gt;&lt;span class='aforismi'&gt;$aforismi1&lt;/span&gt; - Benjamin Franklin&lt;/p&gt;
          &lt;p&gt;&lt;span class='aforismi'&gt;$aforismi2&lt;/span&gt; - Suomalainen sananlasku&lt;/p&gt;
          &lt;p&gt;&lt;span class='aforismi'&gt;$aforismi3&lt;/span&gt; - Homeros&lt;/p&gt;
          ";
        ?&gt;
      </pre>
                    </div>
                </div>

                <?php
                // Aforismit
                $aforismi1 = "\"Lähes kaikki suuri on nuorten tekemää.\"";
                $aforismi2 = "\"Nuoressa ei huilaaminen mene hukkaan.\"";
                $aforismi3 = "\"Nuoret ovat säännöllisesti ajattelemattomia.\"";

                // Näytetään aforismit yhdellä echo-komennolla
                echo "
  <p><span class='aforismi'>$aforismi1</span> - Benjamin Franklin</p>
  <p><span class='aforismi'>$aforismi2</span> - Suomalainen sananlasku</p>
  <p><span class='aforismi'>$aforismi3</span> - Homeros</p>
  ";
                ?>
            </section>



            <!-- Task 7 -->
            <section class="my-section" id="task7">
                <h2>Task 7</h2>

                <!-- Button to open the modal -->
                <button id="task7Btn" class="question-btn">View Question</button>

                <!-- Modal Structure -->
                <div id="task7Modal" class="modal">
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <h3>Task 7 Question</h3>

                        <!-- Using <pre> to show unsolved PHP code -->
                        <pre>
                      &lt;?php
                        $resistances = [10, 10, 10, 0];

                        // Check if any resistor has value 0 (which would cause division by zero error)
                        if ($resistances[0] != 0 && $resistances[1] != 0 && $resistances[2] != 0) {
                            
                            $Rkok = 1 / ((1 / $resistances[0]) + (1 / $resistances[1]) + (1 / $resistances[2]));
                          
                            $Rkok_rounded = round($Rkok, 2);

                            echo "&lt;p&gt;R1 = {$resistances[0]} ohms&lt;/p&gt;";
                            echo "&lt;p&gt;R2 = {$resistances[1]} ohms&lt;/p&gt;";
                            echo "&lt;p&gt;R3 = {$resistances[2]} ohms&lt;/p&gt;";
                            echo "&lt;p&gt;R4 = {$resistances[3]} ohms&lt;/p&gt;";
                            echo "&lt;p&gt;Rkok = $Rkok ohms&lt;/p&gt;";
                            echo "&lt;p&gt;Rkok (rounded) = $Rkok_rounded ohms&lt;/p&gt;";
                        } else {
                            // Handle case where a resistor value is 0
                            echo "&lt;p&gt;One resistor is zero, cannot calculate total resistance in parallel.&lt;/p&gt;";
                            echo "&lt;p&gt;R1 = {$resistances[0]} ohms&lt;/p&gt;";
                            echo "&lt;p&gt;R2 = {$resistances[1]} ohms&lt;/p&gt;";
                            echo "&lt;p&gt;R3 = {$resistances[2]} ohms&lt;/p&gt;";
                            echo "&lt;p&gt;R4 = {$resistances[3]} ohms&lt;/p&gt;";
                        }
                      ?&gt;
                    </pre>
                    </div>
                </div>

                <div class="esimerkki koodisini">
                    <?php
                    $resistances = [10, 10, 10, 0];

                    // Check if any resistor has value 0 (which would cause division by zero error)
                    if ($resistances[0] != 0 && $resistances[1] != 0 && $resistances[2] != 0) {

                        $Rkok = 1 / ((1 / $resistances[0]) + (1 / $resistances[1]) + (1 / $resistances[2]));

                        $Rkok_rounded = round($Rkok, 2);

                        echo "<p>R1 = {$resistances[0]} ohms</p>";
                        echo "<p>R2 = {$resistances[1]} ohms</p>";
                        echo "<p>R3 = {$resistances[2]} ohms</p>";
                        echo "<p>R4 = {$resistances[3]} ohms</p>";
                        echo "<p>Rkok = $Rkok ohms</p>";
                        echo "<p>Rkok (rounded) = $Rkok_rounded ohms</p>";
                    } else {
                        // Handle case where a resistor value is 0
                        echo "<p>One resistor is zero, cannot calculate total resistance in parallel.</p>";
                        echo "<p>R1 = {$resistances[0]} ohms</p>";
                        echo "<p>R2 = {$resistances[1]} ohms</p>";
                        echo "<p>R3 = {$resistances[2]} ohms</p>";
                        echo "<p>R4 = {$resistances[3]} ohms</p>";
                    }
                    ?>
                </div>
            </section>

            <!-- Task 8 -->
            <section class="my-section" id="task8">
                <h2>Task 8</h2>

                <!-- Button to open the modal -->
                <button id="task8Btn" class="question-btn">View Question</button>

                <!-- Modal Structure -->
                <div id="task8Modal" class="modal">
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <h3>Task 8 Question</h3>

                        <!-- Using <pre> to show unsolved PHP code -->
                        <pre>
        &lt;?php
          // Aforismit ja nimet taulukkoon
          $aforismit = array(
              array("&quot;Lähes kaikki suuri on nuorten tekemää.&quot;", "Benjamin Franklin"),
              array("&quot;Nuoressa ei huilaaminen mene hukkaan.&quot;", "Suomalainen sananlasku"),
              array("&quot;Nuoret ovat säännöllisesti ajattelemattomia.&quot;", "Homeros")
          );

          // Näytetään aforismit ilman silmukkaa
          echo "&lt;p&gt;&lt;span class='aforismi'&gt;{$aforismit[0][0]}&lt;/span&gt; - {$aforismit[0][1]}&lt;/p&gt;";
          echo "&lt;p&gt;&lt;span class='aforismi'&gt;{$aforismit[1][0]}&lt;/span&gt; - {$aforismit[1][1]}&lt;/p&gt;";
          echo "&lt;p&gt;&lt;span class='aforismi'&gt;{$aforismit[2][0]}&lt;/span&gt; - {$aforismit[2][1]}&lt;/p&gt;";
        ?&gt;
      </pre>
                    </div>
                </div>

                <?php
                // Aforismit ja nimet taulukkoon
                $aforismit = array(
                    array("\"Lähes kaikki suuri on nuorten tekemää.\"", "Benjamin Franklin"),
                    array("\"Nuoressa ei huilaaminen mene hukkaan.\"", "Suomalainen sananlasku"),
                    array("\"Nuoret ovat säännöllisesti ajattelemattomia.\"", "Homeros")
                );

                // Näytetään aforismit ilman silmukkaa
                echo "<p><span class='aforismi'>{$aforismit[0][0]}</span> - {$aforismit[0][1]}</p>";
                echo "<p><span class='aforismi'>{$aforismit[1][0]}</span> - {$aforismit[1][1]}</p>";
                echo "<p><span class='aforismi'>{$aforismit[2][0]}</span> - {$aforismit[2][1]}</p>";
                ?>
            </section>
            <!-- Task 9 -->
            <section class="my-section" id="task9">
                <h2>Task 9</h2>

                <!-- Button to open the modal -->
                <button id="task9Btn" class="question-btn">View Question</button>

                <!-- Modal Structure -->
                <div id="task9Modal" class="modal">
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <h3>Task 9 Question</h3>

                        <!-- Using <pre> to show unsolved PHP code -->
                        <pre>
        &lt;?php
          // Alkuperäinen taulukko
          $hedelmat = array("Mango", "Kiivi", "Meloni");
          
          // Näytetään alkuperäisten alkioiden määrä
          echo "Alkuperäisten hedelmien määrä: " . count($hedelmat);
          
          // Lisätään uusi hedelmä taulukkoon
          $hedelmat[] = "Omena";
          
          // Näytetään rivinvaihdon jälkeen taulukon alkioiden määrä
          echo "&lt;br&gt;Taulukon alkioiden määrä uuden hedelmän jälkeen (count): " . count($hedelmat);
          
          // Näytetään sizeof()-funktion tulos rivinvaihdon jälkeen
          echo "&lt;br&gt;Taulukon alkioiden määrä uuden hedelmän jälkeen (sizeof): " . sizeof($hedelmat);
        ?&gt;
      </pre>
                    </div>
                </div>

                <div class="pun">
                    <?php
                    // Alkuperäinen taulukko
                    $hedelmat = array("Mango", "Kiivi", "Meloni");

                    // Näytetään alkuperäisten alkioiden määrä
                    echo "Alkuperäisten hedelmien määrä: " . count($hedelmat);

                    // Lisätään uusi hedelmä taulukkoon
                    $hedelmat[] = "Omena";

                    // Näytetään rivinvaihdon jälkeen taulukon alkioiden määrä
                    echo "<br>Taulukon alkioiden määrä uuden hedelmän jälkeen (count): " . count($hedelmat);

                    // Näytetään sizeof()-funktion tulos rivinvaihdon jälkeen
                    echo "<br>Taulukon alkioiden määrä uuden hedelmän jälkeen (sizeof): " . sizeof($hedelmat);
                    ?>
                </div>
            </section>

            <!-- Task 10 -->
            <section class="my-section CSSTableGenerator" id="task10">
                <h2>Task 10</h2>

                <!-- Button to open the modal -->
                <button id="task10Btn" class="question-btn">View Question</button>

                <!-- Modal Structure -->
                <div id="task10Modal" class="modal">
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <h3>Task 10 Question</h3>

                        <!-- Using <pre> to show unsolved PHP code -->
                        <pre>
        &lt;?php
          echo "&lt;table&gt; 
                  &lt;tbody&gt;
                      &lt;tr&gt;
                          &lt;th&gt;Column 1&lt;/th&gt;
                          &lt;th&gt;Column 2&lt;/th&gt;
                          &lt;th&gt;Column 3&lt;/th&gt;
                          &lt;th&gt;Column 4&lt;/th&gt;
                          &lt;th&gt;Column 5&lt;/th&gt;
                          &lt;th&gt;Column 6&lt;/th&gt;
                          &lt;th&gt;Column 7&lt;/th&gt;
                      &lt;/tr&gt;";

          // Create a 2D array (3 rows and 7 columns) and fill it with numbers 1 to 21
          $table = [];
          $number = 1;

          // Populate the 2D array
          for ($row = 0; $row &lt; 3; $row++) {
              for ($col = 0; $col &lt; 7; $col++) {
                  $table[$row][$col] = $number;
                  $number++;
              }
          }

          // Display the table content using two for-loops inside the styled table
          for ($row = 0; $row &lt; 3; $row++) {
              echo "&lt;tr&gt;";
              for ($col = 0; $col &lt; 7; $col++) {
                  echo "&lt;td&gt;" . $table[$row][$col] . "&lt;/td&gt;";
              }
              echo "&lt;/tr&gt;";
          }

          echo "&lt;/tbody&gt;&lt;/table&gt;";
        ?&gt;
      </pre>
                    </div>
                </div>

                <?php
                echo "<table> 
            <tbody>
                <tr>
                    <th>Column 1</th>
                    <th>Column 2</th>
                    <th>Column 3</th>
                    <th>Column 4</th>
                    <th>Column 5</th>
                    <th>Column 6</th>
                    <th>Column 7</th>
                </tr>";

                // Create a 2D array (3 rows and 7 columns) and fill it with numbers 1 to 21
                $table = [];
                $number = 1;

                // Populate the 2D array
                for ($row = 0; $row < 3; $row++) {
                    for ($col = 0; $col < 7; $col++) {
                        $table[$row][$col] = $number;
                        $number++;
                    }
                }

                // Display the table content using two for-loops inside the styled table
                for ($row = 0; $row < 3; $row++) {
                    echo "<tr>";
                    for ($col = 0; $col < 7; $col++) {
                        echo "<td>" . $table[$row][$col] . "</td>";
                    }
                    echo "</tr>";
                }

                echo "</tbody></table>";
                ?>
            </section>

            <!-- Task 11 -->
            <section class="my-section CSSTableGenerator" id="task11">
                <h2>Task 11</h2>

                <!-- Button to open the modal -->
                <button id="task11Btn" class="question-btn">View Question</button>

                <!-- Modal Structure -->
                <div id="task11Modal" class="modal">
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <h3>Task 11 Question</h3>

                        <!-- Using <pre> to show unsolved PHP code -->
                        <pre>
        &lt;?php
          echo "&lt;table&gt; 
                  &lt;tbody&gt;
                      &lt;tr&gt;
                          &lt;th&gt;Student Name&lt;/th&gt;
                          &lt;th&gt;Test 1&lt;/th&gt;
                          &lt;th&gt;Test 2&lt;/th&gt;
                          &lt;th&gt;Test 3&lt;/th&gt;
                          &lt;th&gt;Test 4&lt;/th&gt;
                          &lt;th&gt;Total Score&lt;/th&gt;
                          &lt;th&gt;Grade&lt;/th&gt;
                      &lt;/tr&gt;";

          // Create a 2D array with student names and their four test scores
          $students = [
              ["Matti Meikäläinen", 10, 20, 30, 40],
              ["Maija Mehiläinen", 15, 25, 35, 45],
              ["Ville Vilkas", 20, 30, 40, 50]
          ];

          // Populate the table with student data, total scores, and grades
          for ($i = 0; $i &lt; count($students); $i++) {
              $name = $students[$i][0];
              $totalScore = 0;

              // Calculate total score
              for ($j = 1; $j &lt; count($students[$i]); $j++) {
                  $totalScore += $students[$i][$j];
              }

              // Determine grade based on total score
              if ($totalScore &lt; 120) {
                  $grade = 0;
              } elseif ($totalScore &lt; 176) {
                  $grade = 1;
              } elseif ($totalScore &lt; 232) {
                  $grade = 2;
              } elseif ($totalScore &lt; 288) {
                  $grade = 3;
              } elseif ($totalScore &lt; 344) {
                  $grade = 4;
              } else {
                  $grade = 5;
              }

              echo "&lt;tr&gt;";
              echo "&lt;td&gt;$name&lt;/td&gt;";
              for ($j = 1; $j &lt; count($students[$i]); $j++) {
                  echo "&lt;td&gt;" . $students[$i][$j] . "&lt;/td&gt;";
              }
              echo "&lt;td&gt;$totalScore&lt;/td&gt;";
              echo "&lt;td&gt;$grade&lt;/td&gt;";
              echo "&lt;/tr&gt;";
          }

          echo "&lt;/tbody&gt;&lt;/table&gt;";
        ?&gt;
      </pre>
                    </div>
                </div>

                <?php
                echo "<table> 
            <tbody>
                <tr>
                    <th>Student Name</th>
                    <th>Test 1</th>
                    <th>Test 2</th>
                    <th>Test 3</th>
                    <th>Test 4</th>
                    <th>Total Score</th>
                    <th>Grade</th>
                </tr>";

                // Create a 2D array with student names and their four test scores
                $students = [
                    ["Matti Meikäläinen", 10, 20, 30, 40],
                    ["Maija Mehiläinen", 15, 25, 35, 45],
                    ["Ville Vilkas", 20, 30, 40, 50]
                ];

                // Populate the table with student data, total scores, and grades
                for ($i = 0; $i < count($students); $i++) {
                    $name = $students[$i][0];
                    $totalScore = 0;

                    // Calculate total score
                    for ($j = 1; $j < count($students[$i]); $j++) {
                        $totalScore += $students[$i][$j];
                    }

                    // Determine grade based on total score
                    if ($totalScore < 120) {
                        $grade = 0;
                    } elseif ($totalScore < 176) {
                        $grade = 1;
                    } elseif ($totalScore < 232) {
                        $grade = 2;
                    } elseif ($totalScore < 288) {
                        $grade = 3;
                    } elseif ($totalScore < 344) {
                        $grade = 4;
                    } else {
                        $grade = 5;
                    }

                    echo "<tr>";
                    echo "<td>$name</td>";
                    for ($j = 1; $j < count($students[$i]); $j++) {
                        echo "<td>" . $students[$i][$j] . "</td>";
                    }
                    echo "<td>$totalScore</td>";
                    echo "<td>$grade</td>";
                    echo "</tr>";
                }

                echo "</tbody></table>";
                ?>
            </section>
            <!-- Task 12 -->
            <section class="my-section CSSTableGenerator" id="task12">
                <h2>Task 12</h2>

                <!-- Button to open the modal -->
                <button id="task12Btn" class="question-btn">View Question</button>

                <!-- Modal Structure -->
                <div id="task12Modal" class="modal">
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <h3>Task 12 Question</h3>

                        <!-- Using <pre> to show unsolved PHP code -->
                        <pre>
        &lt;?php
          // Define the Arvio class
          class Arvio {
              public $koe1;
              public $koe2;
              public $koe3;
              public $yhteispisteet;

              public function __construct($koe1, $koe2, $koe3) {
                  $this->koe1 = $koe1;
                  $this->koe2 = $koe2;
                  $this->koe3 = $koe3;
                  $this->calculateTotal();
              }

              private function calculateTotal() {
                  $this->yhteispisteet = $this->koe1 + $this->koe2 + $this->koe3;
              }
          }

          // Create an instance of the Arvio class with scores for three exams
          $arvio = new Arvio(85, 90, 78);

          // Output the results in a table format
          echo "&lt;table&gt;
                  &lt;thead&gt;
                      &lt;tr&gt;
                          &lt;th&gt;Exam 1&lt;/th&gt;
                          &lt;th&gt;Exam 2&lt;/th&gt;
                          &lt;th&gt;Exam 3&lt;/th&gt;
                          &lt;th&gt;Total Score&lt;/th&gt;
                      &lt;/tr&gt;
                  &lt;/thead&gt;
                  &lt;tbody&gt;
                      &lt;tr&gt;
                          &lt;td&gt;{$arvio->koe1}&lt;/td&gt;
                          &lt;td&gt;{$arvio->koe2}&lt;/td&gt;
                          &lt;td&gt;{$arvio->koe3}&lt;/td&gt;
                          &lt;td&gt;{$arvio->yhteispisteet}&lt;/td&gt;
                      &lt;/tr&gt;
                  &lt;/tbody&gt;
                &lt;/table&gt;";
        ?&gt;
      </pre>
                    </div>
                </div>

                <?php
                // Define the Arvio class
                class Arvio
                {
                    public $koe1;
                    public $koe2;
                    public $koe3;
                    public $yhteispisteet;

                    public function __construct($koe1, $koe2, $koe3)
                    {
                        $this->koe1 = $koe1;
                        $this->koe2 = $koe2;
                        $this->koe3 = $koe3;
                        $this->calculateTotal();
                    }

                    private function calculateTotal()
                    {
                        $this->yhteispisteet = $this->koe1 + $this->koe2 + $this->koe3;
                    }
                }

                // Create an instance of the Arvio class with scores for three exams
                $arvio = new Arvio(85, 90, 78);

                // Output the results in a table format
                echo "<table>
            <thead>
                <tr>
                    <th>Exam 1</th>
                    <th>Exam 2</th>
                    <th>Exam 3</th>
                    <th>Total Score</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{$arvio->koe1}</td>
                    <td>{$arvio->koe2}</td>
                    <td>{$arvio->koe3}</td>
                    <td>{$arvio->yhteispisteet}</td>
                </tr>
            </tbody>
          </table>";
                ?>
            </section>

            <!-- Task 13  -->
            <section class="my-section" id="task13">
                <h2>Task 13</h2>

                <!-- Button to open the modal -->
                <button id="task13Btn" class="question-btn">View Question</button>

                <!-- Modal Structure -->
                <div id="task13Modal" class="modal">
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <h3>Task 13 Question</h3>

                        <!-- Using <pre> to show unsolved PHP code -->
                        <pre>
                            &lt;?php
                            Kirjoita PHP-ohjelma joka laskee sade-muuttujaan sijoitetun arvon avulla ympyrän kehän mitan, pinta-alan sekä pallon tilavuuden.
                            ?&gt;
                        </pre>
                    </div>
                </div>

                <div class="esimerkki koodisini flex-container">
                    <!-- PHP output content -->
                    <div class="content">
                        <?php
                        // Define the radius (sade)
                        $sade = 50;

                        // Calculate the circumference of the circle (2 * pi * radius)
                        $ympyra_keha = 2 * pi() * $sade;

                        // Calculate the area of the circle (pi * radius^2)
                        $ympyra_pinta_ala = pi() * pow($sade, 2);

                        // Calculate the volume of the sphere (4/3 * pi * radius^3)
                        $pallo_tilavuus = (4 / 3) * pi() * pow($sade, 3);

                        // Output the results
                        echo "<p>Circumference of the circle: " . number_format($ympyra_keha, 2) . " units</p>";
                        echo "<p>Area of the circle: " . number_format($ympyra_pinta_ala, 2) . " square units</p>";
                        echo "<p>Volume of the sphere: " . number_format($pallo_tilavuus, 2) . " cubic units</p>";
                        ?>
                    </div>

                    <!-- SVG Circle Visualization -->
                    <div class="circle">
                        <svg width="200" height="200" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="100" cy="100" r="<?php echo $sade; ?>" stroke="blue" stroke-width="4"
                                fill="none" />
                            <text x="100" y="100" text-anchor="middle" dy=".3em" font-size="12" fill="black">
                                Radius: <?php echo $sade; ?>
                            </text>
                        </svg>
                    </div>
                </div>
            </section>
            <!-- task14  -->
            <!-- Task 14 -->
            <section class="my-section" id="task14">
                <h2>Task 14</h2>

                <!-- Button to open the modal -->
                <button id="task14Btn" class="question-btn">View Question</button>

                <!-- Modal Structure -->
                <div id="task14Modal" class="modal">
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <h3>Task 14 Question</h3>

                        <!-- Using <pre> to show the original Finnish task description -->
                        <pre>
                Toteuta käyttäen unaarisia-operaattoreita:

                - tulosta luvusta 10 luku 9
                - ja luvusta 9 luku 10.
            </pre>
                    </div>
                </div>

                <div class="esimerkki koodisini">
                    <!-- PHP code to solve the task -->
                    <?php
                    $luku = 10;
                    // Decrement $luku to get 9
                    $luku--;
                    echo "<p>Luvusta 10 luku 9: $luku</p>";

                    $luku = 9;
                    // Increment $luku to get 10
                    $luku++;
                    echo "<p>Luvusta 9 luku 10: $luku</p>";
                    ?>
                </div>
            </section>

            <section class="my-section" id="task15">
                <h2>Tehtävä 15</h2>

                <!-- Button to open the modal -->
                <button id="task15Btn" class="question-btn">View Question</button>

                <!-- Modal Structure -->
                <div id="task15Modal" class="modal">
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <h3>Tehtävä 15</h3>

                        <!-- Using <pre> to show unsolved PHP code -->
                        <pre>
                &lt;?php
                // Tehtävä 15: Käytä ehtoja ja tulosta viestit muuttujien arvojen perusteella
                // Alusta muuttujat
                $luku1 = 50;
                $luku2 = 100;

                // Toteutettava ehtorakenne
                if ($luku1 >= 50 && $luku1 < 100) {
                    echo "Luku 1 on 50 tai pienempi kuin 100";
                }

                if ($luku2 > 100) {
                    echo "Luku2 on suurempi kuin 100";
                }
                ?&gt;
            </pre>
                    </div>
                </div>

                <!-- Example output content -->
                <div class="esimerkki koodisini">
                    <?php
                    // Alusta muuttujat
                    $luku1 = 50;
                    $luku2 = 100;

                    // Toteutettava ehtorakenne
                    if ($luku1 >= 50 && $luku1 < 100) {
                        echo "<p>Luku 1 on 50 tai pienempi kuin 100</p>";
                    }

                    if ($luku2 > 100) {
                        echo "<p>Luku2 on suurempi kuin 100</p>";
                    }
                    ?>
                </div>
            </section>
            <!-- task 16 -->
            <section class="my-section" id="task16">
                <h2>Tehtävä 16</h2>

                <!-- Button to open the modal -->
                <button id="task16Btn" class="question-btn">View Question</button>

                <!-- Modal Structure -->
                <div id="task16Modal" class="modal">
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <h3>Tehtävä 16</h3>

                        <!-- Using <pre> to show unsolved PHP code -->
                        <pre>
                                &lt;?php
                                // Tehtävä 16: Yhdistä otsikot ja tekstit muuttujaan
                                // Alusta muuttujat
                                $otsikko1 = "Ensimmäinen Otsikko";
                                $otsikko2 = "Toinen Otsikko";
                                $teksti1 = "Ensimmäinen kappale. Tämä on lyhyt kappale, joka toimii esimerkkinä ensimmäiselle tekstille.";
                                $teksti2 = "Toinen kappale. Tämä on toinen esimerkki tekstistä, joka sijoitetaan toiseen muuttujaan.";
                                
                                // Yhdistä otsikot ja tekstit kokoteksti-muuttujaan
                                $kokoteksti = "&lt;h3&gt;$otsikko1&lt;/h3&gt;&lt;p&gt;$teksti1&lt;/p&gt;";
                                $kokoteksti .= "&lt;h3&gt;$otsikko2&lt;/h3&gt;&lt;p&gt;$teksti2&lt;/p&gt;";
                                
                                // Näytä kokoteksti yhdellä echo:lla
                                echo $kokoteksti;
                                ?&gt;
                            </pre>
                    </div>
                </div>

                <!-- Example output content -->
                <div class="esimerkki koodisini">
                    <?php
                    // Alusta muuttujat
                    $otsikko1 = "Ensimmäinen Otsikko";
                    $otsikko2 = "Toinen Otsikko";
                    $teksti1 = "Ensimmäinen kappale. Tämä on lyhyt kappale, joka toimii esimerkkinä ensimmäiselle tekstille.";
                    $teksti2 = "Toinen kappale. Tämä on toinen esimerkki tekstistä, joka sijoitetaan toiseen muuttujaan.";

                    // Yhdistä otsikot ja tekstit kokoteksti-muuttujaan
                    $kokoteksti = "<h3>$otsikko1</h3><p>$teksti1</p>";
                    $kokoteksti .= "<h3>$otsikko2</h3><p>$teksti2</p>";

                    // Näytä kokoteksti yhdellä echo:lla
                    echo $kokoteksti;
                    ?>
                </div>
            </section>
            <!-- task 17 -->
            <section class="my-section" id="task17">
                <h2>Tehtävä 17</h2>

                <!-- Button to open the modal -->
                <button id="task17Btn" class="question-btn">View Question</button>

                <!-- Modal Structure -->
                <div id="task17Modal" class="modal">
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <h3>Tehtävä 17</h3>

                        <!-- Using <pre> to show unsolved PHP code -->
                        <pre>
                &lt;?php
                // Tehtävä 17: Laske arvosana pisteiden perusteella
                $pisteet = 150; // Testipisteet
                
                if ($pisteet &lt; 119) {
                    $arvosana = 0;
                } elseif ($pisteet &lt; 213) {
                    $arvosana = 1;
                } elseif ($pisteet &lt; 306) {
                    $arvosana = 2;
                } elseif ($pisteet &lt;= 400) {
                    $arvosana = 3;
                } else {
                    $arvosana = "Virhe: pisteet eivät ole sallitulla välillä";
                }
                
                echo "Kokonaistulokset: $pisteet, Arvosana: $arvosana";
                ?&gt;
            </pre>
                    </div>
                </div>

                <!-- Example output content -->
                <div class="esimerkki koodisini">
                    <?php
                    // Tehtävä 17: Laske arvosana pisteiden perusteella
                    $pisteet = 150; // Testipisteet

                    if ($pisteet < 119) {
                        $arvosana = 0;
                    } elseif ($pisteet < 213) {
                        $arvosana = 1;
                    } elseif ($pisteet < 306) {
                        $arvosana = 2;
                    } elseif ($pisteet <= 400) {
                        $arvosana = 3;
                    } else {
                        $arvosana = "Virhe: pisteet eivät ole sallitulla välillä";
                    }

                    echo "Kokonaistulokset: $pisteet, Arvosana: $arvosana";
                    ?>
                </div>
            </section>
            <!-- task 18 -->
            <section class="my-section CSSTableGenerator" id="task18">
                <h2>Tehtävä 18</h2>

                <!-- Button to open the modal -->
                <button id="task18Btn" class="question-btn">View Question</button>

                <!-- Modal Structure -->
                <div id="task18Modal" class="modal">
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <h3>Tehtävä 18</h3>

                        <!-- Using <pre> to show unsolved PHP code -->
                        <pre>
        &lt;?php
          echo "&lt;table&gt; 
                  &lt;tbody&gt;
                      &lt;tr&gt;
                          &lt;th&gt;Student Name&lt;/th&gt;
                          &lt;th&gt;Test 1&lt;/th&gt;
                          &lt;th&gt;Test 2&lt;/th&gt;
                          &lt;th&gt;Test 3&lt;/th&gt;
                          &lt;th&gt;Test 4&lt;/th&gt;
                          &lt;th&gt;Total Score&lt;/th&gt;
                          &lt;th&gt;Grade&lt;/th&gt;
                      &lt;/tr&gt;";

          // Create a 2D array with student names and their four test scores
          $students = [
              ["Matti Meikäläinen", 100, 110, 105, 120],
              ["Maija Mehiläinen", 150, 100, 130, 100],
              ["Ville Vilkas", 100, 150, 120, 140]
          ];

          // Populate the table with student data, total scores, and grades
          for ($i = 0; $i &lt; count($students); $i++) {
              $name = $students[$i][0];
              $totalScore = 0;

              // Calculate total score
              for ($j = 1; $j &lt; count($students[$i]); $j++) {
                  $totalScore += $students[$i][$j];
              }

              // Determine grade based on total score
              if ($totalScore &lt; 120) {
                  $grade = 0;
              } elseif ($totalScore &lt; 176) {
                  $grade = 1;
              } elseif ($totalScore &lt; 232) {
                  $grade = 2;
              } elseif ($totalScore &lt; 288) {
                  $grade = 3;
              } elseif ($totalScore &lt; 344) {
                  $grade = 4;
              } elseif ($totalScore &lt;= 400) {
                  $grade = 5;
              } else {
                  $grade = "Pisteet ylittävät sallitun rajan";
              }

              echo "&lt;tr&gt;";
              echo "&lt;td&gt;$name&lt;/td&gt;";
              for ($j = 1; $j &lt; count($students[$i]); $j++) {
                  echo "&lt;td&gt;" . $students[$i][$j] . "&lt;/td&gt;";
              }
              echo "&lt;td&gt;$totalScore&lt;/td&gt;";
              echo "&lt;td&gt;$grade&lt;/td&gt;";
              echo "&lt;/tr&gt;";
          }

          echo "&lt;/tbody&gt;&lt;/table&gt;";
        ?&gt;
      </pre>
                    </div>
                </div>

                <!-- Example output content -->
                <div class="esimerkki koodisini">
                    <?php
                    echo "<table> 
            <tbody>
                <tr>
                    <th>Student Name</th>
                    <th>Test 1</th>
                    <th>Test 2</th>
                    <th>Test 3</th>
                    <th>Test 4</th>
                    <th>Total Score</th>
                    <th>Grade</th>
                </tr>";

                    // Create a 2D array with student names and their four test scores
                    $students = [
                        ["Matti Meikäläinen", 100, 110, 105, 120],
                        ["Maija Mehiläinen", 150, 100, 130, 100],
                        ["Ville Vilkas", 100, 150, 120, 140]
                    ];

                    // Populate the table with student data, total scores, and grades
                    for ($i = 0; $i < count($students); $i++) {
                        $name = $students[$i][0];
                        $totalScore = 0;

                        // Calculate total score
                        for ($j = 1; $j < count($students[$i]); $j++) {
                            $totalScore += $students[$i][$j];
                        }

                        // Determine grade based on total score
                        if ($totalScore < 120) {
                            $grade = 0;
                        } elseif ($totalScore < 176) {
                            $grade = 1;
                        } elseif ($totalScore < 232) {
                            $grade = 2;
                        } elseif ($totalScore < 288) {
                            $grade = 3;
                        } elseif ($totalScore < 344) {
                            $grade = 4;
                        } elseif ($totalScore <= 400) {
                            $grade = 5;
                        } else {
                            $grade = "Pisteet ylittävät sallitun rajan";
                        }

                        echo "<tr>";
                        echo "<td>$name</td>";
                        for ($j = 1; $j < count($students[$i]); $j++) {
                            echo "<td>" . $students[$i][$j] . "</td>";
                        }
                        echo "<td>$totalScore</td>";
                        echo "<td>$grade</td>";
                        echo "</tr>";
                    }

                    echo "</tbody></table>";
                    ?>
                </div>
            </section>
            <!-- task 19 -->
            <section class="my-section" id="task19">
                <h2>Tehtävä 19</h2>

                <!-- Button to open the modal -->
                <button id="task19Btn" class="question-btn">View Question</button>

                <!-- Modal Structure -->
                <div id="task19Modal" class="modal">
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <h3>Tehtävä 19</h3>

                        <!-- Using <pre> to show unsolved PHP code -->
                        <pre>
        &lt;?php
          // Define the variables
          $LUKU_1 = 12;
          $LUKU_2 = 14;
          $LUKU_3 = 16;

          // Check if LUKU_2 is greater than or equal to 14
          if ($LUKU_2 >= 14) {
              // Perform and display calculations
              echo "LUKU_1 + LUKU_2 = " . ($LUKU_1 + $LUKU_2) . "&lt;br&gt;";
              echo "LUKU_2 + LUKU_3 = " . ($LUKU_2 + $LUKU_3) . "&lt;br&gt;";
              echo "LUKU_1 + LUKU_3 = " . ($LUKU_1 + $LUKU_3) . "&lt;br&gt;";
          }
        ?&gt;
      </pre>
                    </div>
                </div>

                <!-- Example output content -->
                <div class="esimerkki koodisini">
                    <?php
                    // Define the variables
                    $LUKU_1 = 12;
                    $LUKU_2 = 14;
                    $LUKU_3 = 16;

                    // Check if LUKU_2 is greater than or equal to 14
                    if ($LUKU_2 >= 14) {
                        // Perform and display calculations
                        echo "LUKU_1 + LUKU_2 = " . ($LUKU_1 + $LUKU_2) . "<br>";
                        echo "LUKU_2 + LUKU_3 = " . ($LUKU_2 + $LUKU_3) . "<br>";
                        echo "LUKU_1 + LUKU_3 = " . ($LUKU_1 + $LUKU_3) . "<br>";
                    }
                    ?>
                </div>
            </section>
            <!-- task 20 -->
            <section class="my-section" id="task20">
                <h2>Tehtävä 20</h2>

                <!-- Button to open the modal -->
                <button id="task20Btn" class="question-btn">View Question</button>

                <!-- Modal Structure -->
                <div id="task20Modal" class="modal">
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <h3>Tehtävä 20</h3>

                        <!-- Using <pre> to show unsolved PHP code -->
                        <pre>
        &lt;?php
          // Define the variable
          $tulos = 123; // Change this value to test different cases

          // Use switch-case to handle different values of $tulos
          switch ($tulos) {
              case 123:
                  echo "Tulos on 123&lt;br&gt;";
                  break;
              case 234:
                  echo "Tulos on 234&lt;br&gt;";
                  break;
              case 456:
                  echo "Tulos on 456&lt;br&gt;";
                  break;
              case 567:
                  echo "Tulos on 567&lt;br&gt;";
                  break;
              default:
                  echo "Tulos on tuntematon&lt;br&gt;";
                  break;
          }
        ?&gt;
      </pre>
                    </div>
                </div>

                <!-- Example output content -->
                <div class="esimerkki koodisini">
                    <?php
                    // Define the variable
                    $tulos = 123; // Change this value to test different cases

                    // Use switch-case to handle different values of $tulos
                    switch ($tulos) {
                        case 123:
                            echo "Tulos on 123<br>";
                            break;
                        case 234:
                            echo "Tulos on 234<br>";
                            break;
                        case 456:
                            echo "Tulos on 456<br>";
                            break;
                        case 567:
                            echo "Tulos on 567<br>";
                            break;
                        default:
                            echo "Tulos on tuntematon<br>";
                            break;
                    }
                    ?>
                </div>
            </section>
            <!-- task 21 -->
            <!-- Task 21 -->
            <section class="my-section" id="task21">
                <h2>Tehtävä 21</h2>

                <!-- Button to open the modal -->
                <button id="task21Btn" class="question-btn">View Question</button>

                <!-- Modal Structure -->
                <div id="task21Modal" class="modal">
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <h3>Tehtävä 21</h3>

                        <!-- Using <pre> to show unsolved PHP code -->
                        <pre>
                &lt;?php
                // For-loop to display numbers from 10 down to 1
                for ($i = 10; $i >= 1; $i--) {
                    echo "Number is: $i &lt;br&gt;";
                }
                ?&gt;
            </pre>
                    </div>
                </div>

                <!-- Example output content -->
                <div class="esimerkki koodisini">
                    <?php
                    // For-loop to display numbers from 10 down to 1
                    for ($i = 10; $i >= 1; $i--) {
                        echo "Number is: $i <br>";
                    }
                    ?>
                </div>
            </section>
            <!-- Task 22 -->
            <section class="my-section" id="task22">
                <h2>Tehtävä 22</h2>

                <!-- Button to open the modal -->
                <button id="task22Btn" class="question-btn">View Question</button>

                <!-- Modal Structure -->
                <div id="task22Modal" class="modal">
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <h3>Tehtävä 22</h3>

                        <!-- Using <pre> to show unsolved PHP code -->
                        <pre>
                &lt;?php
                // For-loop to display numbers from 0 to 500, incrementing by 50 each time
                for ($i = 0; $i <= 500; $i += 50) {
                    echo "Number is: $i &lt;br&gt;";
                }
                ?&gt;
            </pre>
                    </div>
                </div>

                <!-- Example output content -->
                <div class="esimerkki koodisini">
                    <?php
                    // For-loop to display numbers from 0 to 500, incrementing by 50 each time
                    for ($i = 0; $i <= 500; $i += 50) {
                        echo "Number is: $i <br>";
                    }
                    ?>
                </div>
            </section>
            <!-- Task 23 -->
            <section class="my-section" id="task23">
                <h2>Tehtävä 23</h2>

                <!-- Button to open the modal -->
                <button id="task23Btn" class="question-btn">View Question</button>

                <!-- Modal Structure -->
                <div id="task23Modal" class="modal">
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <h3>Tehtävä 23</h3>

                        <!-- Using <pre> to show unsolved PHP code -->
                        <pre>
                &lt;?php
                //  suomenkielen aakkoset järjestyksessä.
                $alphabet = [
                    'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 
                    'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', 
                    'å', 'ä', 'ö'
                ];

                // For-loop to display each letter
                for ($i = 0; $i &lt; count($alphabet); $i++) {
                    echo $alphabet[$i] . "&lt;br&gt;";
                }
                ?&gt;
                </pre>
                    </div>
                </div>

                <!-- Example output content -->
                <div class="esimerkki koodisini">
                    <?php
                    // Finnish alphabet
                    $alphabet = [
                        'a',
                        'b',
                        'c',
                        'd',
                        'e',
                        'f',
                        'g',
                        'h',
                        'i',
                        'j',
                        'k',
                        'l',
                        'm',
                        'n',
                        'o',
                        'p',
                        'q',
                        'r',
                        's',
                        't',
                        'u',
                        'v',
                        'w',
                        'x',
                        'y',
                        'z',
                        'å',
                        'ä',
                        'ö'
                    ];

                    // For-loop to display each letter
                    for ($i = 0; $i < count($alphabet); $i++) {
                        echo $alphabet[$i] . "<br>";
                    }
                    ?>
                </div>
            </section>

            <!-- Task 24 -->
            <section class="my-section" id="task24">
                <h2>Tehtävä 24</h2>

                <!-- Button to open the modal -->
                <button id="task24Btn" class="question-btn">View Question</button>

                <!-- Modal Structure -->
                <div id="task24Modal" class="modal">
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <h3>Tehtävä 24</h3>

                        <!-- Using <pre> to show unsolved PHP code -->
                        <pre>
&lt;?php
// Finnish alphabet
$alphabet = [
    'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 
    'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', 
    'å', 'ä', 'ö'
];

// For-loop to display each letter in 5-letter rows
for ($i = 0; $i &lt; count($alphabet); $i++) {
    // Print letter
    echo $alphabet[$i] . " ";

    // New line after every 5 letters
    if (($i + 1) % 5 == 0) {
        echo "&lt;br&gt;";
    }
}
?&gt;
            </pre>
                    </div>
                </div>

                <!-- Example output content -->
                <div class="esimerkki koodisini">
                    <?php
                    // Finnish alphabet
                    $alphabet = [
                        'a',
                        'b',
                        'c',
                        'd',
                        'e',
                        'f',
                        'g',
                        'h',
                        'i',
                        'j',
                        'k',
                        'l',
                        'm',
                        'n',
                        'o',
                        'p',
                        'q',
                        'r',
                        's',
                        't',
                        'u',
                        'v',
                        'w',
                        'x',
                        'y',
                        'z',
                        'å',
                        'ä',
                        'ö'
                    ];

                    // For-loop to display each letter in 5-letter rows
                    for ($i = 0; $i < count($alphabet); $i++) {
                        // Print letter
                        echo $alphabet[$i] . " ";

                        // New line after every 5 letters
                        if (($i + 1) % 5 == 0) {
                            echo "<br>";
                        }
                    }
                    ?>
                </div>
            </section>
            <!-- task 25  -->
            <section class="my-section CSSTableGenerator" id="task25">
                <h2>Tehtävä 25</h2>

                <!-- Button to open the modal -->
                <button id="task25Btn" class="question-btn">View Question</button>

                <!-- Modal Structure -->
                <div id="task25Modal" class="modal">
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <h3>Tehtävä 25 Question</h3>

                        <!-- Using <pre> to show unsolved PHP code -->
                        <pre>
&lt;?php
// Define the 4x7 table with names and scores
$taulu = array(
    array("Nimi", "Koe 1", "Koe 2", "Koe 3", "Koe 4", "Yht.", "Arvosana"),
    array("Ykkönen Alli", 30, 40, 50, 60, 0, 0),
    array("Kakkonen Bertta", 40, 50, 60, 70, 0, 0),
    array("Kolmonen Carita", 50, 60, 70, 80, 0, 0)
);

// Display the table content using nested for loops
for ($rivi = 0; $rivi &lt; count($taulu); $rivi++) {
    for ($sarake = 0; $sarake &lt; count($taulu[$rivi]); $sarake++){
        echo " " . $taulu[$rivi][$sarake] . " ";
    }
    echo "&lt;br&gt;";
}
?&gt;
            </pre>
                    </div>
                </div>

                <!-- Example output content -->
                <div class="esimerkki koodisini">
                    <?php
                    // Define the 4x7 table with names and scores
                    $taulu = array(
                        array("Nimi", "Koe 1", "Koe 2", "Koe 3", "Koe 4", "Yht.", "Arvosana"),
                        array("Ykkönen Alli", 30, 40, 50, 60, 0, 0),
                        array("Kakkonen Bertta", 40, 50, 60, 70, 0, 0),
                        array("Kolmonen Carita", 50, 60, 70, 80, 0, 0)
                    );

                    // Display the table content using nested for loops
                    for ($rivi = 0; $rivi < count($taulu); $rivi++) {
                        for ($sarake = 0; $sarake < count($taulu[$rivi]); $sarake++) {
                            echo " " . $taulu[$rivi][$sarake] . " ";
                        }
                        echo "<br>";
                    }
                    ?>
                </div>
            </section>

            <!-- task 26  -->

            <section class="my-section CSSTableGenerator" id="task26">
                <h2>Tehtävä 26</h2>

                <!-- Button to open the modal -->
                <button id="task26Btn" class="question-btn">View Question</button>

                <!-- Modal Structure -->
                <div id="task26Modal" class="modal">
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <h3>Tehtävä 26 Question</h3>

                        <!-- Using <pre> to show unsolved PHP code -->
                        <pre>
&lt;?php
  // Initialize the variable 'numero' with 10
  $numero = 10;

  // Use a while loop to count down from 10 to 1
  while ($numero >= 1) {
    echo "Numero on: $numero &lt;br&gt;";
    $numero--;
  }
?&gt;
            </pre>
                    </div>
                </div>

                <!-- Example output content -->
                <div class="esimerkki koodisini">
                    <?php
                    // Initialize the variable 'numero' with 10
                    $numero = 10;

                    // Use a while loop to count down from 10 to 1
                    while ($numero >= 1) {
                        echo "Numero on: $numero <br>";
                        $numero--;
                    }
                    ?>
                </div>
            </section>
            <!-- task 27  -->
            <section class="my-section CSSTableGenerator" id="task27">
                <h2>Tehtävä 27</h2>

                <!-- Button to open the modal -->
                <button id="task27Btn" class="question-btn">View Question</button>

                <!-- Modal Structure -->
                <div id="task27Modal" class="modal">
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <h3>Tehtävä 27 Question</h3>

                        <!-- Using <pre> to show unsolved PHP code -->
                        <pre>
&lt;?php
  // Table with cell names A-F and corresponding names
  $table = array(
      "A" => "Anthony",
      "B" => "Bertha",
      "C" => "Cecilia",
      "D" => "David",
      "E" => "Edward",
      "F" => "Felicia"
  );

  // Initialize the variable 'nimi' to start from 'A'
  $nimi = 'A';

  // Use a do...while loop to display names from 'A' to the letter in 'nimi'
  do {
    echo $table[$nimi] . "&lt;br&gt;";
    $nimi++;
  } while ($nimi <= 'F');
?&gt;
            </pre>
                    </div>
                </div>

                <!-- Example output content -->
                <div class="esimerkki koodisini">
                    <?php
                    // Table with cell names A-F and corresponding names
                    $table = array(
                        "A" => "Anthony",
                        "B" => "Bertha",
                        "C" => "Cecilia",
                        "D" => "David",
                        "E" => "Edward",
                        "F" => "Felicia"
                    );

                    // Initialize the variable 'nimi' to start from 'A'
                    $nimi = 'A';

                    // Use a do...while loop to display names from 'A' to the letter in 'nimi'
                    do {
                        echo $table[$nimi] . "<br>";
                        $nimi++;
                    } while ($nimi <= 'F');
                    ?>
                </div>
            </section>
            <!-- task 28  -->
            <section class="my-section" id="task28">
                <h2>Tehtävä 28</h2>

                <!-- Button to open the modal -->
                <button id="task28Btn" class="question-btn">View Question</button>

                <!-- Modal Structure -->
                <div id="task28Modal" class="modal">
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <h3>Tehtävä 28 Question</h3>

                        <!-- Using <pre> to show unsolved PHP code -->
                        <pre>
&lt;?php
  for ($numero = 0; $numero <= 10; $numero++) {
    echo "Näytetään numero $numero. &lt;br&gt;";
    
    if ($numero >= 0 && $numero <= 4 || $numero >= 8 && $numero <= 10) {
      echo "Tämä näkyy &lt;br&gt;";
    }
  }
?&gt;
            </pre>
                    </div>
                </div>

                <!-- Example output content -->
                <div class="esimerkki koodisini">
                    <?php
                    for ($numero = 0; $numero <= 10; $numero++) {
                        echo "Näytetään numero $numero. <br>";

                        if ($numero >= 0 && $numero <= 4 || $numero >= 8 && $numero <= 10) {
                            echo "Tämä näkyy <br>";
                        }
                    }
                    ?>
                </div>
            </section>

            <!-- task 29  -->

            <!-- task 29 -->
            <section class="my-section" id="task29">
                <h2>Tehtävä 29</h2>

                <!-- Button to open the modal -->
                <button id="task29Btn" class="question-btn">View Question</button>

                <!-- Modal Structure -->
                <div id="task29Modal" class="modal">
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <h3>Tehtävä 29 Question</h3>

                        <!-- Using <pre> to show unsolved PHP code -->
                        <pre>
&lt;?php
function laskeKokonaisvastus($R1, $R2, $R3) {
    $Rkok = 1 / (1 / $R1 + 1 / $R2 + 1 / $R3);
    echo "R1 - $R1 Ω<br>";
    echo "R2 - $R2 Ω<br>";
    echo "R3 - $R3 Ω<br>";
    echo "Rkok - $Rkok Ω<br>";
}

laskeKokonaisvastus(100, 100, 100);
?&gt;
            </pre>
                    </div>
                </div>

                <!-- Example output content -->
                <div class="esimerkki koodisini">
                    <?php
                    function laskeKokonaisvastus($R1, $R2, $R3)
                    {
                        $Rkok = 1 / (1 / $R1 + 1 / $R2 + 1 / $R3);
                        echo "R1 - $R1 Ω<br>";
                        echo "R2 - $R2 Ω<br>";
                        echo "R3 - $R3 Ω<br>";
                        echo "Rkok - $Rkok Ω<br>";
                    }

                    laskeKokonaisvastus(100, 100, 100);
                    ?>
                </div>
            </section>
            <!-- task 30 -->
            <!-- task 30  -->
            <section class="my-section" id="task30">
                <h2>Tehtävä 30</h2>

                <!-- Button to open the modal -->
                <button id="task30Btn" class="question-btn">View Question</button>

                <!-- Modal Structure -->
                <div id="task30Modal" class="modal">
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <h3>Tehtävä 30 Question</h3>

                        <!-- Using <pre> to show unsolved PHP code -->
                        <pre>
&lt;?php
function ympyra($sade) {
    $pintaala = pi() * pow($sade, 2);
    $kehapa = 2 * pi() * $sade;
    echo "Ympyrän pinta-ala: $pintaala<br>";
    echo "Ympyrän kehän pituus: $kehapa<br>";
}

ympyra(5);
?&gt;
            </pre>
                    </div>
                </div>

                <!-- Example output content -->
                <div class="esimerkki koodisini">
                    <?php
                    function ympyra($sade)
                    {
                        $pintaala = pi() * pow($sade, 2);
                        $kehapa = 2 * pi() * $sade;
                        echo "Ympyrän pinta-ala: $pintaala<br>";
                        echo "Ympyrän kehän pituus: $kehapa<br>";
                    }

                    ympyra(5);
                    ?>
                </div>
            </section>
            <!-- task 31 -->
            <!-- task 31 -->
            <section class="my-section" id="task31">
                <h2>Tehtävä 31</h2>

                <!-- Button to open the modal -->
                <button id="task31Btn" class="question-btn">View Question</button>

                <!-- Modal Structure -->
                <div id="task31Modal" class="modal">
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <h3>Tehtävä 31 Question</h3>

                        <!-- Using <pre> to show unsolved PHP code -->
                        <pre>
&lt;?php
  function etuNimi($nimi, $ika) {
    $nykyinen_vuosi = date("Y");
    $syntymavuosi = $nykyinen_vuosi - $ika;
    echo "$nimi Rupunen. Syntyi vuonna $syntymavuosi <br>";
  }
  etuNimi("Tuomas", 25);
  etuNimi("Henri", 27);
  etuNimi("Petteri", 30);
?&gt;
            </pre>
                    </div>
                </div>

                <!-- Example output content -->
                <div class="esimerkki koodisini">
                    <?php
                    function etuNimi($nimi, $ika)
                    {
                        $nykyinen_vuosi = date("Y");
                        $syntymavuosi = $nykyinen_vuosi - $ika;
                        echo "$nimi Rupunen. Syntyi vuonna $syntymavuosi <br>";
                    }
                    etuNimi("Tuomas", 25);
                    etuNimi("Henri", 27);
                    etuNimi("Petteri", 30);
                    ?>
                </div>
            </section>
            <!-- task 32 -->
            <!-- task 32 -->
            <section class="my-section" id="task32">
                <h2>Tehtävä 32</h2>

                <!-- Button to open the modal -->
                <button id="task32Btn" class="question-btn">View Question</button>

                <!-- Modal Structure -->
                <div id="task32Modal" class="modal">
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <h3>Tehtävä 32 Question</h3>

                        <!-- Using <pre> to show unsolved PHP code -->
                        <pre>
&lt;?php
  $korkeus1 = 350;
  $korkeus2 = 50;
  $korkeus3 = 135;
  $korkeus4 = 80;

  function testiKorkeus($minimiKorkeus = 50) {
    echo "Korkeus on : $minimiKorkeus <br>";
  }

  testiKorkeus($korkeus1);
  testiKorkeus($korkeus2);
  testiKorkeus($korkeus3);
  testiKorkeus($korkeus4);
?&gt;
            </pre>
                    </div>
                </div>

                <!-- Example output content -->
                <div class="esimerkki koodisini">
                    <?php
                    $korkeus1 = 350;
                    $korkeus2 = 50;
                    $korkeus3 = 135;
                    $korkeus4 = 80;

                    function testiKorkeus($minimiKorkeus = 50)
                    {
                        echo "Korkeus on : $minimiKorkeus <br>";
                    }

                    testiKorkeus($korkeus1);
                    testiKorkeus($korkeus2);
                    testiKorkeus($korkeus3);
                    testiKorkeus($korkeus4);
                    ?>
                </div>
            </section>

            <!-- task 33 -->
            <section class="my-section" id="task33">
                <h2>Tehtävä 33</h2>

                <!-- Button to open the modal -->
                <button id="task33Btn" class="question-btn">View Question</button>

                <!-- Modal Structure -->
                <div id="task33Modal" class="modal">
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <h3>Tehtävä 33 Question</h3>

                        <!-- Using <pre> to show unsolved PHP code -->
                        <pre>
&lt;?php
  function pyoristaLuku($luku) {
    echo "Luku $luku on pyöristettynä " . floor($luku) . "<br>";
  }

  $luvut = array(2.35, 5.55, -101.2, -219.7);

  echo "Luvut ovat seuraavat:<br>";
  foreach ($luvut as $luku) {
    pyoristaLuku($luku);
  }
?&gt;
            </pre>
                    </div>
                </div>

                <!-- Example output content -->
                <div class="esimerkki koodisini">
                    <?php
                    function pyoristaLuku($luku)
                    {
                        echo "Luku $luku on pyöristettynä " . floor($luku) . "<br>";
                    }

                    $luvut = array(2.35, 5.55, -101.2, -219.7);

                    echo "Luvut ovat seuraavat:<br>";
                    foreach ($luvut as $luku) {
                        pyoristaLuku($luku);
                    }
                    ?>
                </div>
            </section>
            <!-- task 34 -->
            <section class="my-section" id="task34">
                <h2>Tehtävä 34</h2>

                <!-- Button to open the modal -->
                <button id="task34Btn" class="question-btn">View Question</button>

                <!-- Modal Structure -->
                <div id="task34Modal" class="modal">
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <h3>Tehtävä 34 Question</h3>

                        <!-- Using <pre> to show unsolved PHP code -->
                        <pre>
&lt;?php
  function rinnanLasku($R1, $R2, $R3) {
    $Rkok = 1 / (($R1 > 0 ? 1 / $R1 : 0) + ($R2 > 0 ? 1 / $R2 : 0) + ($R3 > 0 ? 1 / $R3 : 0));
    return $Rkok;
  }

  $R1 = 100;
  $R2 = 100;
  $R3 = 100;

  echo "Rkok = " . rinnanLasku($R1, $R2, $R3) . " Ω";
?&gt;
            </pre>
                    </div>
                </div>

                <!-- Example output content -->
                <div class="esimerkki koodisini">
                    <?php
                    function rinnanLasku($R1, $R2, $R3)
                    {
                        $Rkok = 1 / (($R1 > 0 ? 1 / $R1 : 0) + ($R2 > 0 ? 1 / $R2 : 0) + ($R3 > 0 ? 1 / $R3 : 0));
                        return $Rkok;
                    }

                    $R1 = 100;
                    $R2 = 100;
                    $R3 = 100;

                    echo "Rkok = " . rinnanLasku($R1, $R2, $R3) . " Ω";
                    ?>
                </div>
            </section>

            <!-- Task 35 -->
            <section class="my-section" id="task35">
                <h2>Task 35</h2>

                <!-- Button to open the modal -->
                <button id="task35Btn" class="question-btn">View Question</button>

                <!-- Modal Structure for Task 35 -->
                <div id="task35Modal" class="modal">
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <h3>Task 35 Question</h3>
                        <pre>
    &lt;?php
    // Function to get the greeting based on the current hour
    function getGreeting() {
        $hour = (int)date("H");

        switch ($hour) {
            case ($hour >= 5 && $hour < 9):
                return "Hyvää huomenta";
            case ($hour >= 9 && $hour < 14):
                return "Hyvää päivää";
            case ($hour >= 14 && $hour < 18):
                return "Hyvää iltapäivää";
            case ($hour >= 18 && $hour < 22):
                return "Hyvää iltaa";
            default:
                return "Rauhallista yötä";
        }
    }

    // Function to get the Finnish weekday
    function getFinnishWeekday($englishDay) {
        switch ($englishDay) {
            case 'Monday':
                return 'Maanantai';
            case 'Tuesday':
                return 'Tiistai';
            case 'Wednesday':
                return 'Keskiviikko';
            case 'Thursday':
                return 'Torstai';
            case 'Friday':
                return 'Perjantai';
            case 'Saturday':
                return 'Lauantai';
            case 'Sunday':
                return 'Sunnuntai';
        }
    }

    // Function to get the Finnish month
    function getFinnishMonth($englishMonth) {
        switch ($englishMonth) {
            case 'January':
                return 'Tammikuu';
            case 'February':
                return 'Helmikuu';
            case 'March':
                return 'Maaliskuu';
            case 'April':
                return 'Huhtikuu';
            case 'May':
                return 'Toukokuu';
            case 'June':
                return 'Kesäkuu';
            case 'July':
                return 'Heinäkuu';
            case 'August':
                return 'Elokuu';
            case 'September':
                return 'Syyskuu';
            case 'October':
                return 'Lokakuu';
            case 'November':
                return 'Marraskuu';
            case 'December':
                return 'Joulukuu';
        }
    }

    // Main program to display the greeting and current date
    $currentDateTime = new DateTime();
    $greeting = getGreeting();
    $day = getFinnishWeekday($currentDateTime->format('l'));
    $month = getFinnishMonth($currentDateTime->format('F'));
    $date = $currentDateTime->format('d');

    echo "$greeting<br>";
    echo "Kello on " . $currentDateTime->format('H:i') . ", $day $date. $month " . $currentDateTime->format('Y');
    ?&gt;
            </pre>
                    </div>
                </div>

                <!-- Example output content -->
                <div class="esimerkki koodisini">
                    <?php
                    // Function to get the greeting based on the current hour
                    function getGreeting()
                    {
                        $hour = (int)date("H");

                        switch ($hour) {
                            case ($hour >= 5 && $hour < 9):
                                return "Hyvää huomenta";
                            case ($hour >= 9 && $hour < 14):
                                return "Hyvää päivää";
                            case ($hour >= 14 && $hour < 18):
                                return "Hyvää iltapäivää";
                            case ($hour >= 18 && $hour < 22):
                                return "Hyvää iltaa";
                            default:
                                return "Rauhallista yötä";
                        }
                    }

                    // Function to get the Finnish weekday
                    function getFinnishWeekday($englishDay)
                    {
                        switch ($englishDay) {
                            case 'Monday':
                                return 'Maanantai';
                            case 'Tuesday':
                                return 'Tiistai';
                            case 'Wednesday':
                                return 'Keskiviikko';
                            case 'Thursday':
                                return 'Torstai';
                            case 'Friday':
                                return 'Perjantai';
                            case 'Saturday':
                                return 'Lauantai';
                            case 'Sunday':
                                return 'Sunnuntai';
                        }
                    }

                    // Function to get the Finnish month
                    function getFinnishMonth($englishMonth)
                    {
                        switch ($englishMonth) {
                            case 'January':
                                return 'Tammikuu';
                            case 'February':
                                return 'Helmikuu';
                            case 'March':
                                return 'Maaliskuu';
                            case 'April':
                                return 'Huhtikuu';
                            case 'May':
                                return 'Toukokuu';
                            case 'June':
                                return 'Kesäkuu';
                            case 'July':
                                return 'Heinäkuu';
                            case 'August':
                                return 'Elokuu';
                            case 'September':
                                return 'Syyskuu';
                            case 'October':
                                return 'Lokakuu';
                            case 'November':
                                return 'Marraskuu';
                            case 'December':
                                return 'Joulukuu';
                        }
                    }

                    // Main program to display the greeting and current date
                    $currentDateTime = new DateTime();
                    $greeting = getGreeting();
                    $day = getFinnishWeekday($currentDateTime->format('l'));
                    $month = getFinnishMonth($currentDateTime->format('F'));
                    $date = $currentDateTime->format('d');

                    echo "$greeting<br>";
                    echo "Kello on " . $currentDateTime->format('H:i') . ", $day $date. $month " . $currentDateTime->format('Y');
                    ?>
                </div>
            </section>



            <!-- Task 36 -->
            <section class="my-section" id="task36">
                <h2>Task: 36</h2>
                <button id="task36Btn" class="question-btn">View Question</button>
                <div class="esimerkki koodisini">
                    <!-- Button to open the modal -->

                    <!-- Modal Structure -->
                    <div id="task36Modal" class="modal">
                        <div class="modal-content">
                            <span class="close">&times;</span>
                            <h3>Task 36 Question</h3>

                            <!-- Using <pre> to show unsolved PHP code -->
                            <pre>
            &lt;?php
                // Calculation logic for three resistors in parallel
                $R1 = $_POST['R1'];
                $R2 = $_POST['R2'];
                $R3 = $_POST['R3'];

                // Calculate equivalent resistance
                $equivResistance = 1 / (1/$R1 + 1/$R2 + 1/$R3);
                echo "Equivalent Resistance: " . $equivResistance . " ohms";
            ?&gt;
        </pre>
                        </div>
                    </div>

                    <div class="vari2">
                        <form action="laske1.php" method="POST">
                            R1: <input type="text" name="R1"><br>
                            R2: <input type="text" name="R2"><br>
                            R3: <input type="text" name="R3"><br>
                            <input class="question-btn" type="submit" value="Laske">
                        </form>
                    </div>
                </div>
            </section>

            <!-- Task 37 -->
            <section class="my-section" id="task37">
                <h2>Tehtävä 37</h2>
                <button id="task37Btn" class="question-btn">View Question</button>
                <!-- Modal Structure -->
                <div id="task37Modal" class="modal">
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <h3>Tehtävä 37 Question</h3>
                        <pre>
                  &lt;?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $R1 = test_input($_POST["R1"]);
                        $R2 = test_input($_POST["R2"]);
                        $R3 = test_input($_POST["R3"]);

                        $R1 = floatval($R1);
                        $R2 = floatval($R2);
                        $R3 = floatval($R3);

                        if ($R1 > 0 && $R2 > 0 && $R3 > 0) {
                            $Rkok = 1 / ((1 / $R1) + (1 / $R2) + (1 / $R3));
                            $Rkok = round($Rkok, 2);
                        } else {
                            $Rkok = "Error! Enter positive values.";
                        }

                        echo "<div class='result-container'>";
                        echo "<h3>Entered Value:</h3>";
                        echo "R1 = $R1 Ω<br>";
                        echo "R2 = $R2 Ω<br>";
                        echo "R3 = $R3 Ω<br>";
                        echo "<h3>Total Resistance :</h3>";
                        echo "$Rkok Ω";
                        echo "</div>";
                    }

                    function test_input($data) {
                        $data = trim($data);
                        $data = stripslashes($data);
                        $data = htmlspecialchars($data);
                        return $data;
                    }
                  ?&gt;
            </pre>
                    </div>
                </div>
                <div class="esimerkki koodisini">
                    <h3>Kolmen vastuksen rinnankytkentä - Laskuri</h3>
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                        R1 (Ω): <input type="text" name="R1" required>
                        <br><br>
                        R2 (Ω): <input type="text" name="R2" required>
                        <br><br>
                        R3 (Ω): <input type="text" name="R3" required>
                        <br><br>
                        <input class="question-btn" type="submit" name="submit" value="Laske sarjassa">
                    </form>

                    <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $R1 = test_input($_POST["R1"]);
                        $R2 = test_input($_POST["R2"]);
                        $R3 = test_input($_POST["R3"]);

                        $R1 = floatval($R1);
                        $R2 = floatval($R2);
                        $R3 = floatval($R3);

                        if ($R1 > 0 && $R2 > 0 && $R3 > 0) {
                            $Rkok = 1 / ((1 / $R1) + (1 / $R2) + (1 / $R3));
                            $Rkok = round($Rkok, 2);
                        } else {
                            $Rkok = "Error! Enter positive values.";
                        }

                        echo "<div class='result-container'>";
                        echo "<h3>Entered Value:</h3>";
                        echo "R1 = $R1 Ω<br>";
                        echo "R2 = $R2 Ω<br>";
                        echo "R3 = $R3 Ω<br>";
                        echo "<h3> Total Resistance:</h3>";
                        echo "$Rkok Ω";
                        echo "</div>";
                    }

                    function test_input($data)
                    {
                        $data = trim($data);
                        $data = stripslashes($data);
                        $data = htmlspecialchars($data);
                        return $data;
                    }
                    ?>
                </div>
            </section>
            <!-- task 38 -->
            <section class="my-section" id="task38">
                <h2>Tehtävä 38</h2>
                <button id="task38Btn" class="question-btn">View Question</button>
                <!-- Modal Structure -->
                <div id="task38Modal" class="modal">
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <h3>Tehtävä 38 Question</h3>
                        <pre>
                            &lt;?php
                                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                    $R1 = $_POST["R1"];
                                    $R2 = $_POST["R2"];
                                    $R3 = $_POST["R3"];

                                    function calculate_series($R1, $R2, $R3) {
                                        return $R1 + $R2 + $R3;
                                    }

                                    function calculate_parallel($R1, $R2, $R3) {
                                        return 1 / ((1 / $R1) + (1 / $R2) + (1 / $R3));
                                    }

                                    if (isset($_POST['submit_series'])) {
                                        $Rkok = calculate_series($R1, $R2, $R3);
                                        echo "<p>Sarja-laskun tulos: $Rkok Ω</p>";
                                    }

                                    if (isset($_POST['submit_parallel'])) {
                                        $Rkok = calculate_parallel($R1, $R2, $R3);
                                        echo "<p>Rinnan-laskun tulos: $Rkok Ω</p>";
                                    }
                                }
                            ?&gt;
                      </pre>
                    </div>
                </div>
                <div class="esimerkki koodisini">
                    <h3>R1-R2-R3 Laskin</h3>
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                        <label for="R1">R1:</label>
                        <input type="text" name="R1">
                        <br><br>
                        <label for="R2">R2:</label>
                        <input type="text" name="R2">
                        <br><br>
                        <label for="R3">R3:</label>
                        <input type="text" name="R3">
                        <br><br>
                        <input class="question-btn" type="submit" name="submit_series" value="Laske sarja">
                        <input class="question-btn" type="submit" name="submit_parallel" value="Laske rinnan">
                    </form>

                    <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $R1 = $_POST["R1"];
                        $R2 = $_POST["R2"];
                        $R3 = $_POST["R3"];

                        function calculate_series($R1, $R2, $R3)
                        {
                            return $R1 + $R2 + $R3;
                        }

                        function calculate_parallel($R1, $R2, $R3)
                        {
                            return 1 / ((1 / $R1) + (1 / $R2) + (1 / $R3));
                        }

                        if (isset($_POST['submit_series'])) {
                            $Rkok = calculate_series($R1, $R2, $R3);
                            echo "<p>Sarja-laskun tulos: $Rkok Ω</p>";
                        }

                        if (isset($_POST['submit_parallel'])) {
                            $Rkok = calculate_parallel($R1, $R2, $R3);
                            echo "<p>Rinnan-laskun tulos: $Rkok Ω</p>";
                        }
                    }
                    ?>
                </div>
            </section>
            <!-- task 39 -->
            <section class="my-section" id="task39">
                <h2>Task 39</h2>
                <button id="task39Btn" class="question-btn">View Question</button>
                <!-- Modal Structure -->
                <div id="task39Modal" class="modal">
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <h3>Task 39 Question</h3>
                        <pre>
                  &lt;?php
                    // Form for user input
                    echo '&lt;h3>Contact Us&lt;/h3>';
                    echo '&lt;div>';
                    echo '&lt;form action="success1.php" method="post">';
                    echo 'Nimesi:&lt;br>';
                    echo '&lt;input type="text" name="nimi" required>&lt;br>&lt;br>';
                    echo 'Sähköpostisi:&lt;br>';
                    echo '&lt;input type="email" name="sahkoposti" required>&lt;br>&lt;br>';
                    echo 'Viesti:&lt;br>';
                    echo '&lt;textarea name="kommentti" rows="5" cols="40" required>Kirjoita viesti..&lt;/textarea>&lt;br>&lt;br>';
                    echo '&lt;input type="submit" value="Lähetä">';
                    echo '&lt;/form>';
                    echo '&lt;/div>';
                    echo '&lt;footer>';
                    echo '&lt;a href="xfile.php">Lue viestit&lt;/a> | ';
                    echo '&lt;a href="poista_viestit.php">Poista viestit&lt;/a>';
                    echo '&lt;/footer>';
                  ?&gt;
            </pre>
                    </div>
                </div>

                <div class="esimerkki koodisini">
                    <h2 class="text-center">Contact Us</h2>
                    <div>
                        <form action="success1.php" method="post">
                            <label for="name">Name:</label><br>
                            <input type="text" id="name" name="name" required><br><br>

                            <label for="email">E-mail:</label><br>
                            <input type="email" id="email" name="email" required><br><br>

                            <label for="kommentti">Message:</label><br>
                            <textarea id="kommentti" name="kommentti" rows="5" cols="40"
                                required>Write Your Message Here....</textarea>
                            <div class="center-buttons">
                                <input class="question-btn" type="submit" value="Submit">
                            </div>
                            <div class="center-buttons">
                                <a href="sentMessages.php" class="question-btn">Sent Messages</a>
                                <a href="deletedMessages.php" class="question-btn">Delete Messages</a>
                            </div>
                        </form>


                    </div>
                </div>
            </section>

            <!-- task 40 -->
            <section class="my-section" id="task40">
                <h2>Tehtävä 40</h2>
                <button id="task40Btn" class="question-btn">View Question</button>

                <!-- Modal Structure -->
                <div id="task40Modal" class="modal">
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <h3>Tehtävä 40 Question</h3>
                        <pre>
    &lt;div class="header">
        &lt;h2>PHP All Tasks mini page&lt;/h2>
    &lt;/div>

    &lt;div class="row">
        &lt;div class="col-3 col-s-3">
            &lt;?php include 'menu.php'; ?> 
        &lt;/div>
        
        &lt;div class="col-9 col-s-9">
            &lt;h3>Task 40&lt;/h3>
            &lt;p>Select a task by clicking on it. Each task contains several subtasks to complete&lt;/p>
            
        &lt;/div>
    &lt;/div>

    &lt;div class="footer">
        &lt;p>PHP Tehtävät © 2024&lt;/p>
    &lt;/div>
            </pre>
                    </div>
                </div>

                <!-- Dynamic Content Container -->
                <div class="esimerkki koodisini">
                    <div class="mini-header">
                        <h2>PHP All Tasks mini page</h2>
                    </div>

                    <div class="mini-container">
                        <aside class="mini-sidebar">
                            <ul>
                                <li><a href="#" id="task1-6"> Tasks 1 - 6</a></li>
                                <li><a href="#" id="task7-12"> Tasks 7 - 12</a></li>
                                <li><a href="#" id="task13-18">Tasks 13 - 18</a></li>
                                <li><a href="#" id="task19-24">Tasks 19 - 24</a></li>
                                <li><a href="#" id="task25-30">Tasks 25 - 30</a></li>
                                <li><a href="#" id="task31-36">Tasks 31 - 36</a></li>
                                <li><a href="#" id="task37-42">Tasks 37 - 42</a></li>
                            </ul>
                        </aside>

                        <!-- Main dynamic content -->
                        <main class="mini-content" id="dynamicContent">
                            <!-- Add this ID -->
                            <h3> Tasks 1-40 </h3>
                            <p>Select a task by clicking on it. Each task contains several subtasks to complete</p>
                        </main>
                    </div>

                    <div class="mini-footer">
                        <p>PHP Tehtävät © 2024</p>
                    </div>
                </div>
            </section>


            <!-- Task 41 -->
            <section class="my-section" id="task41">
                <h2>Tehtävä 41</h2>
                <button id="task41Btn" class="question-btn">Show Content</button>

                <!-- Hidden content for Task 41 -->
                <div id="task41Content" class="hidden-content">
                    <h3>Tehtävä 41 Content</h3>
                    <p>This is the content for Tehtävä 41, displayed without a modal.</p>
                </div>
            </section>

            <!-- Task 42 -->
            <section class="my-section" id="task42">
                <h2>Tehtävä 42</h2>
                <button id="task42Btn" class="question-btn">Show Content</button>

                <!-- Hidden content for Task 42 -->
                <div id="task42Content" class="hidden-content">
                    <h3>Tehtävä 42 Content</h3>
                    <p>This is the content for Tehtävä 42, displayed without a modal.</p>
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