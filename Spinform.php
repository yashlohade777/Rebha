<?php
$title = "Greeting";
require_once  'includes/header.php';

?>

<form method="post" action="spin.php" enctype="multipart/form-data">
    <div class="form-group">
        <label for="yourName" class="form-label">Your Name</label>
        <input required type="text" class="form-control" id="yourName" name="yourName">
    </div>
    <br />

    <div class="form-group">
        <label for="name" class="form-label">Name of the person to be greeted</label>
        <input required type="text" class="form-control" id="name" name="name">
    </div>
    <br />

    <div class="form-group">
        <label for="relation" class="form-label">Relation with the person</label>
        <input required type="text" class="form-control" id="relation" name="relation">
    </div>
    <br />

    <div class="form-group">
        <label for="occasion" class="form-label">Occasion</label>
        <select class="form-control" id="occasion" name="occasion">
            <option>Select One</option>
            <option>Birthday</option>
            <option>Wedding Anniversary</option>
            <option>Baby Shower</option>
            <option>Party Invitations</option>
        </select>
    </div>
    <br />

    <div class="form-group">
        <label for="personality" class="form-label">Personality/Character</label>
        <input required type="text" class="form-control" id="personality" name="personality">
    </div>
    <br />

    <div class="d-grid gap-2">
        <button type="submit" name="submit" class="btn btn-primary btn-block">3D Spining Card</button>
    </div>



</form>