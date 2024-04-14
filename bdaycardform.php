<?php
$title = "Wedding Invite";
require_once  'includes/header.php';
?>

<form method="post" action="weddincard.php">
    <div class="form-group">
        <label for="bdayPerson" class="form-label">Name of the Persons to be Greeted</label>
        <input required type="text" class="form-control" id="bdayPerson" name="bdayPerson">
    </div>
    </br>

    <div class="form-group">
        <label for="person" class="form-label">Name of the preson Greeting them</label>
        <input required type="text" class="form-control" id="person" name="person">
    </div>
    <br />

    <div class="form-group">
        <label for="age" class="form-label">Age they turned to</label>
        <input required type="text" class="form-control" id="age" name="age">
    </div>
    <br />

    <div class="form-group">
        <label for="relation" class="form-label">relation to the greeted person</label>
        <input required type="text" class="form-control" id="relation" name="relation">
    </div>
    <br />

    <div class="form-group">
        <label for="personality" class="form-label">Personality/Charecteristics</label>
        <input required type="text" class="form-control" id="personality" name="personality">
    </div>
    <br />

    

    <button type="submit" name="submit" class="btn btn-primary btn-block" onclick="window.location.href='weddincard.php'">Generate</button>
</form>

<br />
<br />




<br />
<br />
<br />
<br />
<br />

<?php require_once  'includes/footer.php'; ?>