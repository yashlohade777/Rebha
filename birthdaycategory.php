<?php
$title = "Birthday Catalogue";
require_once  'includes/header.php';

?>


<style>
    body {
        background-color: #f1f1f1;
    }

    .container {
        display: flex;
        flex-direction: column;
        align-items: center;
    }
</style>

<a href="bdayinviteform.php" style="text-decoration: none;">
    <div class="card" style="width: 70rem;">
        <div style="display: flex; justify-content: center;">
            <span class="border border-3 rounded-4 d-inline-block shadow" style="width: max-content;">
                <img src="assets/binvite.jpeg" class="img-fluid rounded-4 mx-auto d-block" height="250" width="450" alt="Some image here">
            </span>
        </div>

        <div class="card-body" style="color: black">
            <h5 class="card-title">
                <h3>Birthday Invitations</h3>
            </h5>
            <p class="card-text">
            <h5>Create your own birthday invitations</h5>
            </p>

        </div>


    </div>
</a>
<div class="dropdown">
    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
        Birthday Invite Themes
    </button>
    <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="bdayinviteform.php">Animal</a></li>
        <li><a class="dropdown-item" href="bdayinviteform.php">Prince</a></li>
        <li><a class="dropdown-item" href="bdayinviteform.php">Princess</a></li>
        <li><a class="dropdown-item" href="ownthemeform.php">Create your own theme</a></li>
        <li><a class="dropdown-item" href="yourphotoform.php">Add your own photo</a></li>
    </ul>
</div>
<hr />


<a href="bdaycardform.php" style="text-decoration: none;">
    <div class="card" style="width: 70rem;">
        <div style="display: flex; justify-content: center;">
            <span class="border border-3 rounded-4 d-inline-block shadow" style="width: max-content;">
                <img src="assets/bdayhim.jpeg" class="img-fluid rounded-4 mx-auto d-block" height="250" width="450" alt="Some image here">
            </span>
        </div>

        <div class="card-body" style="color: black">
            <h5 class="card-title">
                <h3>Cards for him</h3>
            </h5>
            <p class="card-text">
            <h5>Create your own birthday invitation cards</h5>
            </p>

        </div>


    </div>
</a>
<div class="dropdown">
    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
        For him
    </button>
    <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="herhimform.php">Dad</a></li>
        <li><a class="dropdown-item" href="herhimform.php">Grandpa</a></li>
        <li><a class="dropdown-item" href="herhimform.php">Son</a></li>
        <li><a class="dropdown-item" href="herhimform.php">Brother</a></li>
    </ul>
</div>
<hr />


<a href="bdaycardform.php" style="text-decoration: none;">
    <div class="card" style="width: 70rem;">
        <div style="display: flex; justify-content: center;">
            <span class="border border-3 rounded-4 d-inline-block shadow" style="width: max-content;">
                <img src="assets/bdayher.jpeg" class="img-fluid rounded-4 mx-auto d-block" height="250" width="450" alt="Some image here">
            </span>
        </div>

        <div class="card-body" style="color: black">
            <h5 class="card-title">
                <h3>Cards for her</h3>
            </h5>
            <p class="card-text">
            <h5>Create your own birthday invitation cards</h5>
            </p>

        </div>


    </div>
</a>
<div class="dropdown">
    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
        For her
    </button>
    <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="herhimform.php">Mom</a></li>
        <li><a class="dropdown-item" href="herhimform.php">Grandma</a></li>
        <li><a class="dropdown-item" href="herhimform.php">Daughter</a></li>
        <li><a class="dropdown-item" href="herhimform.php">Sister</a></li>
    </ul>
</div>
<hr />




<br />
<br />
<br />
<br />
<br />

<?php require_once  'includes/footer.php'; ?>