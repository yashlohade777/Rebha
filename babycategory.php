<?php
$title = "Baby Catalogue";
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

<a href="babyform.php" style="text-decoration: none;">
    <div class="card" style="width: 70rem;">
        <div style="display: flex; justify-content: center;">
            <span class="border border-3 rounded-4 d-inline-block shadow" style="width: max-content;">
                <img src="assets/baby.jpeg" class="img-fluid rounded-4 mx-auto d-block" height="250" width="450" alt="Some image here">
            </span>
        </div>

        <div class="card-body" style="color: black">
            <h5 class="card-title">
                <h3>Baby</h3>
            </h5>
            <p class="card-text">
            <h5>Create your own invitations</h5>
            </p>

        </div>


    </div>
</a>
<div class="dropdown">
    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
        Baby Invite Themes
    </button>
    <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="babyform.php">Baby Shower</a></li>
        <li><a class="dropdown-item" href="babyform.php">Gender Reveal</a></li>
        <li><a class="dropdown-item" href="babyform.php">Baby Sprinkle</a></li>
    </ul>
</div>
<hr />


<a href="babyform.php" style="text-decoration: none;">
    <div class="card" style="width: 70rem;">
        <div style="display: flex; justify-content: center;">
            <span class="border border-3 rounded-4 d-inline-block shadow" style="width: max-content;">
                <img src="assets/announcement.jpeg" class="img-fluid rounded-4 mx-auto d-block" height="250" width="450" alt="Some image here">
            </span>
        </div>

        <div class="card-body" style="color: black">
            <h5 class="card-title">
                <h3>Announcement</h3>
            </h5>
            <p class="card-text">
            <h5>Create your own announcement invitation cards</h5>
            </p>

        </div>


    </div>
</a>
<div class="dropdown">
    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
        Announcement
    </button>
    <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="babyform.php">Birth</a></li>
        <li><a class="dropdown-item" href="babyform.php">Pregnancy</a></li>
    </ul>
</div>
<hr />







<br />
<br />
<br />
<br />
<br />

<?php require_once  'includes/footer.php'; ?>