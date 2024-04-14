<?php
$title = "Wedding Invite";
require_once  'includes/header.php';
?>

<form method="post" action="weddincard.php">
    <div class="form-group">
        <label for="mother" class="form-label">Name of the Mother</label>
        <input required type="text" class="form-control" id="mother" name="mother">
    </div>
    </br>

    <div class="form-group">
        <label for="father" class="form-label">Name of the Father</label>
        <input required type="text" class="form-control" id="father" name="father">
    </div>
    <br />

    <div class="form-group">
        <label for="date" class="form-label">Date</label>
        <input required type="text" class="form-control" id="date" name="date">
    </div>
    <br />

    <div class="form-group">
        <label for="venue" class="form-label">Venue</label>
        <input required type="text" class="form-control" id="venue" name="venue">
    </div>
    <br />

    <div class="form-group">
        <label for="time" class="form-label">Time</label>
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