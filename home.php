<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Bootstrap CSS links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/locomotive-scroll@3.5.4/dist/locomotive-scroll.css">

    <title>Home</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid alert alert-dark">
            <a class="navbar-brand" href="index.php">Home</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="Flipform.php">Generate Greeting Card</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="Spinform.php">Generate Spinning Card</a>
                    </li>
                </ul>
            </div>

            <!-- Move the Categories dropdown outside the ul.navbar-nav -->
            <div class="btn-group dropstart">
                <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    Categories
                </button>
                <ul class="dropdown-menu dropdown-menu-lg-end">
                    <li><a class="dropdown-item" href="weddingcategory.php">Wedding</a></li>
                    <li><a class="dropdown-item" href="birthdaycategory.php">Birthday</a></li>
                    <li><a class="dropdown-item" href="babycategory.php">Baby & Kids</a></li>
                    <li><a class="dropdown-item" href="partycategory.php">Party</a></li>
                    <li><a class="dropdown-item" href="trendingcategory.php">Trending</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="main">
        <div id="page1">
            <div id="right-text">
                <h1>GENERATE
                    <br>
                    CUSTOM GREETINGS
                    <br>
                    FOR YOUR LOVED
                    <br>
                    ONES
                </h1>
                <a href="greeting.php" style="color:black">
                    <h4>Generate Greeting</h4>
                </a>
            </div>
            <div id="left-text">
                <h1>DISCOVER A REALM
                    <br>
                    POETRY WHERE
                    <br>
                    UNLOCKING DANCES,
                    <br>
                    POWER THE
                    <br>
                    OF WORDS.
                </h1>
                <a href="poem.php" style="color:black">
                    <h4>Generate Poem</h4>
                </a>
            </div>
        </div>
        <div id="page2">
            <div id="text1">
                <h1>LET'S
                    <br>
                    HAVE FUN
                    <br>
                    TOGETHER CREATING
                    <br>
                    SOME FUN IMAGES
                </h1>
                <a href="imageGeneration.php" style="color:black">
                    <h4>Generate Images</h4>
                </a>
            </div>
            <div id="text2">
                <h1>CREATE A FLIPPING
                    <br>
                    GREETING CARD
                    <br>
                    WITH FUN IMAGES,
                    <br>
                    AND CUSTOM
                    <br>
                    GREETINGS.
                </h1>
                <a href="Flipform.php" style="color:black">
                    <h4>Generate Greeting Card</h4>
                </a>
            </div>
        </div>
        <div id="page3">
            <div id="text3">
                <h1>CREATE A SPINNING
                    <br>
                    GREETING CARD
                    <br>
                    WITH A REALM,
                    <br>
                    OF
                    <br>
                    POETRY.
                </h1>
                <a href="Spinform.php" style="color:black">
                    <h4>Generate a spinning card</h4>
                </a>
            </div>
        </div>
    </div>
</body>

</html>