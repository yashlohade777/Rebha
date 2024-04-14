<?php
$title = "Party Catalogue";
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

<a href="unknowncelebform.php" style="text-decoration: none;">
    <div class="card" style="width: 70rem;">
        <div style="display: flex; justify-content: center;">
            <span class="border border-3 rounded-4 d-inline-block shadow" style="width: max-content;">
                <img src="assets/celebration.jpeg" class="img-fluid rounded-4 mx-auto d-block" height="250" width="450" alt="Some image here">
            </span>
        </div>

        <div class="card-body" style="color: black">
            <h5 class="card-title">
                <h3>Celebration Invitations</h3>
            </h5>
            <p class="card-text">
            <h5>Create your own celebration invitations</h5>
            </p>

        </div>


    </div>
</a>
<div class="dropdown">
    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
        Celebration Invite Themes
    </button>
    <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="celebrationform.php">Graduation Party</a></li>
        <li><a class="dropdown-item" href="celebrationform.php">Anniversary</a></li>
        <li><a class="dropdown-item" href="celebrationform.php">Retirement & Farewell</a></li>
        <li><a class="dropdown-item" href="babyform.php">Baby Shower</a></li>
    </ul>
</div>
<hr />


<a href="unknowngatheringform.php" style="text-decoration: none;">
    <div class="card" style="width: 70rem;">
        <div style="display: flex; justify-content: center;">
            <span class="border border-3 rounded-4 d-inline-block shadow" style="width: max-content;">
                <img src="assets/gathering.jpeg" class="img-fluid rounded-4 mx-auto d-block" height="250" width="450" alt="Some image here">
            </span>
        </div>

        <div class="card-body" style="color: black">
            <h5 class="card-title">
                <h3>Gatherings</h3>
            </h5>
            <p class="card-text">
            <h5>Create your own gathering invitation cards</h5>
            </p>

        </div>


    </div>
</a>
<div class="dropdown">
    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
        Gatherings
    </button>
    <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="gatheringsform.php">House Warming</a></li>
        <li><a class="dropdown-item" href="gatheringsform.php">Dinner Party</a></li>
        <li><a class="dropdown-item" href="gatheringsform.php">Cocktail Party</a></li>
    </ul>
</div>
<hr />


<a href="unknownholidayform.php" style="text-decoration: none;">
    <div class="card" style="width: 70rem;">
        <div style="display: flex; justify-content: center;">
            <span class="border border-3 rounded-4 d-inline-block shadow" style="width: max-content;">
                <img src="assets/holiday.jpeg" class="img-fluid rounded-4 mx-auto d-block" height="250" width="450" alt="Some image here">
            </span>
        </div>

        <div class="card-body" style="color: black">
            <h5 class="card-title">
                <h3>Holidays</h3>
            </h5>
            <p class="card-text">
            <h5>Create your own birthday invitation cards</h5>
            </p>

        </div>


    </div>
</a>
<div class="dropdown">
    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
        Holidays
    </button>
    <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="holidayform.php">Halloween</a></li>
        <li><a class="dropdown-item" href="holidayform.php">Thanksgiving</a></li>
        <li><a class="dropdown-item" href="holidayform.php">Diwali</a></li>
        <li><a class="dropdown-item" href="holidayform.php">Christmas</a></li>
    </ul>
</div>
<hr />




<br />
<br />
<br />
<br />
<br />

<?php require_once  'includes/footer.php'; ?>