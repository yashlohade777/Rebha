<?php
$title = "Wedding Invite";
require_once  'includes/header.php';
?>

<form method="post" action="weddincard.php">
    <div class="form-group">
        <label for="thrower" class="form-label">Name of the Party Thrower</label>
        <input required type="text" class="form-control" id="thrower" name="thrower">
    </div>

    <br />

    <div class="form-group">
        <label for="person" class="form-label">Name of the preson to be invited</label>
        <input required type="text" class="form-control" id="person" name="person">
    </div>
    <br />

    <div class="form-group">
        <label for="date" class="form-label">Date of the Pool Party</label>
        <input required type="text" class="form-control" id="date" name="date">
    </div>
    <br />

    <div class="form-group">
        <label for="venue" class="form-label">Venue of the Pool Party</label>
        <input required type="text" class="form-control" id="venue" name="venue">
    </div>
    <br />

    <div class="form-group">
        <label for="time" class="form-label">Time of the Pool Party</label>
        <input required type="text" class="form-control" id="time" name="time">
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