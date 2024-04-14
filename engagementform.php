<?php
$title = "Wedding Invite";
require_once  'includes/header.php';
?>
<?php
session_start();
$_SESSION['imgprompt'] = "engagementinvite";
?>
<form method="post" action="bbqcard.php">
    <div class="form-group">
        <label for="bride" class="form-label">Name of the Bride</label>
        <input required type="text" class="form-control" id="bride" name="bride">
    </div>

    <br />
    <div class="form-group">
        <label for="groom" class="form-label">Name of the Groom</label>
        <input required type="text" class="form-control" id="groom" name="groom">
    </div>
    <br />

    <div class="form-group">
        <label for="person" class="form-label">Name of the preson to be invited</label>
        <input required type="text" class="form-control" id="person" name="person">
    </div>
    <br />

    <div class="form-group">
        <label for="date" class="form-label">Date of the Engagement</label>
        <input required type="text" class="form-control" id="date" name="date">
    </div>
    <br />

    <div class="form-group">
        <label for="venue" class="form-label">Venue of Engagement</label>
        <input required type="text" class="form-control" id="venue" name="venue">
    </div>
    <br />

    <div class="form-group">
        <label for="time" class="form-label">Time of Engagement</label>
        <input required type="text" class="form-control" id="time" name="time">
    </div>
    <br />

    

    <button type="submit" name="submit" class="btn btn-primary btn-block" onclick="window.location.href='bbqcard.php'">Generate</button>
</form>

<br />
<br />




<br />
<br />
<br />
<br />
<br />

<?php require_once  'includes/footer.php'; ?>