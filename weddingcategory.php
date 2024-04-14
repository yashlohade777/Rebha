<?php
$title = "Wedding Catalogue";
require_once  'includes/header.php';

?>
<?php
$weddinginvite = "generate a image of a cute and happy couple in a wedding";

$savedate = "a cute couple encapsulated in warm heart hugging each other and showing their love and make sure to write the following text 'save the date' exactly without any spelling mistake ";

$bachelorparty = "generate me a image of many boys doing party on a dining table and raising a glass of wine";

$weddingparty = "generate me a image for wedding party";

$engagement = "generate me a image of a couple exchanging rings";
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

<a href="engagementform.php?themedprompt=generate me a image of a couple exchanging rings" style="text-decoration: none;">
    <div class="card" style="width: 70rem;">
        <div style="display: flex; justify-content: center;">
            <span class="border border-3 rounded-4 d-inline-block shadow" style="width: max-content;">
                <img src="assets/engagment.jpeg" class="img-fluid rounded-4 mx-auto d-block" height="500" width="700" alt="Some image here">
            </span>
        </div>


        <div class="card-body">
            <h5 class="card-title">
                <h3>Engagement Invitations</h3>
            </h5>
            <p class="card-text">
            <h5>Create your own engagment invitations</h5>
            </p>

        </div>
    </div>
</a>
<hr />
<a href="weddingform.php?themedprompt=generate a image of a cute and happy couple in a wedding" style="text-decoration: none;">
    <div class="card" style="width: 70rem;">
        <div style="display: flex; justify-content: center;">
            <span class="border border-3 rounded-4 d-inline-block shadow" style="width: max-content;">
                <img src="assets/winvite.jpeg" class="img-fluid rounded-4 mx-auto d-block" height="500" width="700" alt="Some image here">
            </span>
        </div>


        <div class="card-body">
            <h5 class="card-title">
                <h3>Wedding Invitations</h3>
            </h5>
            <p class="card-text">
            <h5>Create your own wedding invitations</h5>
            </p>

        </div>
    </div>
</a>
<hr />
<a href="weddingform.php?themedprompt=generate me a image for wedding party" style="text-decoration: none;">
    <div class="card" style="width: 70rem;">
        <div style="display: flex; justify-content: center;">
            <span class="border border-3 rounded-4 d-inline-block shadow" style="width: max-content;">
                <img src="assets/wparty.jpeg" class="img-fluid rounded-4 mx-auto d-block" height="500" width="700" alt="Some image here">
            </span>
        </div>


        <div class="card-body">
            <h5 class="card-title">
                <h3>Wedding Party Invitations</h3>
            </h5>
            <p class="card-text">
            <h5>Create your own wedding party invitations</h5>
            </p>

        </div>
    </div>
</a>
<hr />
<a href="weddingform.php?themedprompt=a cute couple encapsulated in warm heart hugging each other and showing their love and make sure to write the following text 'save the date' exactly without any spelling mistake " style="text-decoration: none;">
    <div class="card" style="width: 70rem;">
        <div style="display: flex; justify-content: center;">
            <span class="border border-3 rounded-4 d-inline-block shadow" style="width: max-content;">
                <img src="assets/savedate.jpeg" class="img-fluid rounded-4 mx-auto d-block" height="250" width="450" alt="Some image here">
            </span>
        </div>


        <div class="card-body">
            <h5 class="card-title">
                <h3>Save The Date Invitations</h3>
            </h5>
            <p class="card-text">
            <h5>Create your own save the date invitations</h5>
            </p>

        </div>
    </div>
</a>
<hr />
<a href="bachelorform.php?themedprompt=generate me a image of many boys doing party on a dining table and raising a glass of wine" style="text-decoration: none;">
    <div class="card" style="width: 70rem;">
        <div style="display: flex; justify-content: center;">
            <span class="border border-3 rounded-4 d-inline-block shadow" style="width: max-content;">
                <img src="assets/bachelor.jpeg" class="img-fluid rounded-4 mx-auto d-block" height="500" width="700" alt="Some image here">
            </span>
        </div>


        <div class="card-body">
            <h5 class="card-title">
                <h3>Bachelor Party Invitations</h3>
            </h5>
            <p class="card-text">
            <h5>Create your own bachelor party invitations</h5>
            </p>

        </div>
    </div>
</a>
<hr />




<br />
<br />
<br />
<br />
<br />

<?php require_once  'includes/footer.php'; ?>