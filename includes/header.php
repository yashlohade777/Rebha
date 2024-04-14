<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Bootstrap CSS links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    <title>Rebha <?php echo $title ?></title>
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


    <div class="container">