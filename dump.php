<!-- chatGPT api (greeting) integration code with html form (dynamic): -->

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $apiEndpoint = 'https://api.openai.com/v1/chat/completions';
    $apiKey = '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'; // Replace with your actual API key

    // Retrieve user input from form
    $name = $_POST['name'];
    $relation = $_POST['relation'];
    $occasion = $_POST['occasion'];
    $personality = $_POST['personality'];

    $final_prompt = "Compose a concise and heartfelt greeting for $name my $relation on the occasion of $occasion Incorporate their unique personality traits, $personality    into the message. Please keep the response within 4-6 sentences to ensure brevity while capturing the essence of our bond and the significance of this occasion.";

    $data = array(
        'model' => 'gpt-3.5-turbo',
        "max_tokens" => 400,
        'messages' => array(
            array('role' => 'system', 'content' => 'You are a helpful assistant.'),
            array('role' => 'user', 'content' => $final_prompt),
        ),
    );

    $jsonData = json_encode($data);

    $curl = curl_init($apiEndpoint);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json',
        'Authorization: Bearer ' . $apiKey,
    ));
    curl_setopt($curl, CURLOPT_POSTFIELDS, $jsonData);

    $response = curl_exec($curl);

    $responseCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
    if ($responseCode !== 200) {
        echo 'API request error. Response Code: ' . $responseCode;
    } else {
        if ($response === false) {
            $errorMessage = curl_error($curl);
            echo 'API request error: ' . $errorMessage;
        } else {
            $responseData = json_decode($response, true);
            $choices = $responseData['choices'];
            $chatResult = $choices[0]['message']['content'];

            echo "<h5>$chatResult</h5>";
            echo '<br><br>';

            // Display additional information from the API response
            // echo 'Model: ' . $responseData['model'];
            // echo '<br>';
            // echo 'Finish Reason: ' . $choices[0]['finish_reason'];
            // echo '<br>';
            // echo 'Prompt Tokens: ' . $responseData['usage']['prompt_tokens'];
            // echo '<br>';
            // echo 'Completion Tokens: ' . $responseData['usage']['completion_tokens'];
            // echo '<br>';
            // echo 'Total Tokens: ' . $responseData['usage']['total_tokens'];
        }
    }

    curl_close($curl);
}
?>

<h1>Generate the most Unique greetings for your loved ones on this special occasion</h1>
<img src="assets/greeting.svg" class="img-fluid" height="600" width="1100" alt="Some Image To Welcome You..!.">
<form method="post" action="greeting.php">
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
        <input required type="text" class="form-control" id="occasion" name="occasion">
    </div>
    <br />

    <div class="form-group">
        <label for="personality" class="form-label">Personality/Character</label>
        <input required type="text" class="form-control" id="personality" name="personality">
    </div>
    <br />
    <button type="submit" name="submit" class="btn btn-primary btn-block">Submit</button>
</form>

<!-- chat gpt api integration (poem) code woth html form (dynamic): -->

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $apiEndpoint = 'https://api.openai.com/v1/chat/completions';
    $apiKey = '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'; // Replace with your actual API key

    // Retrieve user input from form
    $name = $_POST['name'];
    $relation = $_POST['relation'];
    $occasion = $_POST['occasion'];
    $personality = $_POST['personality'];

    $final_prompt = "Compose a beautiful rhyming poem dedicated to $name my $relation for the special occasion of $occasion Please incorporate their unique personality traits, $personality into the verses. Craft the poem within 8-12 lines, ensuring brevity while capturing the deep bond we share, the essence of the occasion, and showcasing the remarkable character of the individual. Your creativity in rhyming and poetic expression is highly appreciated!";

    $data = array(
        'model' => 'gpt-3.5-turbo',
        "max_tokens" => 400,
        'messages' => array(
            array('role' => 'system', 'content' => 'You are a helpful assistant.'),
            array('role' => 'user', 'content' => $final_prompt),
        ),
    );

    $jsonData = json_encode($data);

    $curl = curl_init($apiEndpoint);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json',
        'Authorization: Bearer ' . $apiKey,
    ));
    curl_setopt($curl, CURLOPT_POSTFIELDS, $jsonData);

    $response = curl_exec($curl);

    $responseCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
    if ($responseCode !== 200) {
        echo 'API request error. Response Code: ' . $responseCode;
    } else {
        if ($response === false) {
            $errorMessage = curl_error($curl);
            echo 'API request error: ' . $errorMessage;
        } else {
            $responseData = json_decode($response, true);
            $choices = $responseData['choices'];
            $chatResult = $choices[0]['message']['content'];

            // Split the generated poem into stanzas
            $stanzas = explode("\n\n", $chatResult);

            // Output each stanza in a separate <h5> tag
            foreach ($stanzas as $stanza) {
                echo '<h5>' . $stanza . '</h5>';
            }

            // Display additional information from the API response
            // echo 'Model: ' . $responseData['model'];
            // echo '<br>';
            // echo 'Finish Reason: ' . $choices[0]['finish_reason'];
            // echo '<br>';
            // echo 'Prompt Tokens: ' . $responseData['usage']['prompt_tokens'];
            // echo '<br>';
            // echo 'Completion Tokens: ' . $responseData['usage']['completion_tokens'];
            // echo '<br>';
            // echo 'Total Tokens: ' . $responseData['usage']['total_tokens'];
        }
    }

    curl_close($curl);
}
?>

<h1>Generate the most lovely poems for your loved ones on this special occasion</h1>
<img src="assets/poem.svg" class="img-fluid" height="600" width="1100" alt="Some Image To Welcome You..!.">
<form method="post" action="poem.php">
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
        <input required type="text" class="form-control" id="occasion" name="occasion">
    </div>
    <br />

    <div class="form-group">
        <label for="personality" class="form-label">Personality/Character</label>
        <input required type="text" class="form-control" id="personality" name="personality">
    </div>
    <br />
    <button type="submit" name="submit" class="btn btn-primary btn-block">Submit</button>
</form>

<!-- DALL E api integration code with html form: -->

<?php
if (isset($_POST['submit'])) {
    $prompt = $_POST['generate'];

    // Generated by curl-to-PHP: http://incarnate.github.io/curl-to-php/
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, 'https://api.openai.com/v1/images/generations');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode([
        "prompt" => $prompt,
        "n" => 1,
        "size" => "1024x1024"
    ]));

    $headers = array();
    $headers[] = 'Content-Type: application/json';
    $headers[] = 'Authorization: Bearer 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';
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    $result = curl_exec($ch);
    if (curl_errno($ch)) {
        echo 'Error:' . curl_error($ch);
    }
    curl_close($ch);
    $data = json_decode($result, true);
    $final_url = $data['data'][0]['url'];

    echo '<img src="' . $final_url . '" class="img-fluid" alt="Generated Image">';
}
?>

<h1>Generate the most Unique images through your creativity..</h1>
<img src="assets/creative.svg" class="img-fluid" height="600" width="1100" alt="Some Image To Welcome You..!.">
<form method="post" action="imageGeneration.php">
    <div class="form-group">
        <label for="generate" class="form-label">Start with a detailed description</label>
        <input required type="text" class="form-control" id="generate" name="generate">
        <small id="generate" class="form-text">We recommed that enter the description for the image in the most detailed way you can, so it'll help us in creating the more detailed image for you..</small>
    </div>
    <br />

    <button type="submit" name="submit" class="btn btn-primary btn-block">Generate Image</button>
</form>

<!-- code for card form with actual card: -->

    <form method="post" action="card.php">
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
        <label for="personality" class="form-label">Personality/Character</label>
        <input required type="text" class="form-control" id="personality" name="personality">
    </div>
    <br />

    <div class="form-group">
        <label for="occasion" class="form-label">Occasion</label>
        <input required type="text" class="form-control" id="occasion" name="occasion">
    </div>
    <br />

    <div class="form-group">
        <label for="generate" class="form-label">Start with a detailed description</label>
        <input required type="text" class="form-control" id="generate" name="generate">
        <small id="generate" class="form-text">We recommed that enter the image description according to the occasion..</small>
    </div>
    <br />

    <button type="submit" name="submit" class="btn btn-primary btn-block" onclick="window.location.href='card.php'">Generate</button>
</form>

<!-- php code: -->
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $apiEndpoint = 'https://api.openai.com/v1/chat/completions';
    $apiKey = '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'; // Replace with your actual API key

    // Retrieve user input from form
    $yourName = $_POST['yourName'];
    $name = $_POST['name'];
    $relation = $_POST['relation'];
    $occasion = $_POST['occasion'];
    $personality = $_POST['personality'];
    $prompt = $_POST['generate'];
    $yourName = $_POST['yourName'];

    $final_prompt = "Compose a concise and heartfelt greeting for $name my $relation on the occasion of $occasion Incorporate their unique personality traits, $personality into the message. Please keep the response within 4-6 sentences to ensure brevity while capturing the essence of our bond and the significance of this occasion. <br/ ><br/ > -$yourName";

    $data = array(
        'model' => 'gpt-3.5-turbo',
        "max_tokens" => 400,
        'messages' => array(
            array('role' => 'system', 'content' => 'You are a helpful assistant.'),
            array('role' => 'user', 'content' => $final_prompt),
        ),
    );

    $jsonData = json_encode($data);

    $curl = curl_init($apiEndpoint);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json',
        'Authorization: Bearer ' . $apiKey,
    ));
    curl_setopt($curl, CURLOPT_POSTFIELDS, $jsonData);

    $response = curl_exec($curl);

    $responseCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
    if ($responseCode !== 200) {
        echo 'API request error. Response Code: ' . $responseCode;
    } else {
        if ($response === false) {
            $errorMessage = curl_error($curl);
            echo 'API request error: ' . $errorMessage;
        } else {
            $responseData = json_decode($response, true);
            $choices = $responseData['choices'];
            $chatResult = $choices[0]['message']['content'];

            echo '<br><br>';
        }
    }

    curl_close($curl);

    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, 'https://api.openai.com/v1/images/generations');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode([
        "prompt" => $prompt,
        "n" => 1,
        "size" => "1024x1024"
    ]));

    $headers = array();
    $headers[] = 'Content-Type: application/json';
    $headers[] = 'Authorization: Bearer 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';
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    $result = curl_exec($ch);
    if (curl_errno($ch)) {
        echo 'Error:' . curl_error($ch);
    }
    curl_close($ch);
    $data = json_decode($result, true);
    $final_url = $data['data'][0]['url'];
}
?>

<?php
// Replace the placeholders with your actual URLs and text
$shareUrl = 'http://localhost:8080/Greets/card.php'; // URL to be shared
$shareText = 'Check out this awesome website!'; // Text to be shared

// Function to encode the URL
function encodeUrl($url)
{
    return urlencode($url);
}

// Function to generate the share links
function generateShareLink($platform, $url, $text)
{
    switch ($platform) {
        case 'whatsapp':
            $shareLink = "https://api.whatsapp.com/send?text=" . encodeUrl($text) . "%20" . encodeUrl($url);
            $iconClass = "fab fa-whatsapp";
            $platformName = "WhatsApp";
            break;
        case 'twitter':
            $shareLink = "https://twitter.com/intent/tweet?url=" . encodeUrl($url) . "&text=" . encodeUrl($text);
            $iconClass = "fab fa-twitter";
            $platformName = "Twitter";
            break;
        case 'instagram':
            $shareLink = "https://www.instagram.com/?url=" . encodeUrl($url);
            $iconClass = "fab fa-instagram";
            $platformName = "Instagram";
            break;
        case 'snapchat':
            $shareLink = "https://www.snapchat.com/share?url=" . encodeUrl($url);
            $iconClass = "fab fa-snapchat";
            $platformName = "Snapchat";
            break;
        case 'email':
            $shareLink = "mailto:recipient@example.com?subject=Your%20Subject&body=Your%20Message" . encodeUrl($url);
            $iconClass = "fab fa-email";
            $platformName = "Email";
            break;

        default:
            return "";
    }

    return '<a href="' . $shareLink . '" target="_blank" rel="noopener noreferrer" class="btn btn-primary"><i class="' . $iconClass . '"></i> Share on ' . $platformName . '</a>';
}
?>

<!--Display all the generated content in the form of a card-->

<div class="card" style="width: 70rem;">

    <div style="display: flex; justify-content: center;">
        <span class="border border-3 rounded-4 d-inline-block shadow" style="width: max-content;">
            <img src="<?php echo $final_url; ?>" class="img-fluid rounded-4 mx-auto d-block" height="500" width="700" alt="Some image here">
        </span>
    </div>


    <div class="card-body">
        <h5 class="card-title">
            <h3><?php echo "Happy " . $occasion . "!"; ?></h3>
        </h5>
        <p class="card-text"><?php echo "<h5>$chatResult</h5>"; ?></p>
        <p class="card-text"><?php echo "<h5>-$yourName</h5>"; ?></p>
        <!-- HTML share buttons -->
        <div class="share-buttons">
            <?php echo generateShareLink('whatsapp', $shareUrl, $shareText); ?>
            <?php echo generateShareLink('twitter', $shareUrl, $shareText); ?>
            <?php echo generateShareLink('instagram', $shareUrl, $shareText); ?>
            <?php echo generateShareLink('snapchat', $shareUrl, $shareText); ?>
            <?php echo generateShareLink('email', $shareUrl, $shareText); ?>
        </div>
    </div>
</div>

<!-- js for share option: -->

const link = encodeURI(window.location.href);
const msg = encodeURIComponent('Hey, I found this article');
const title = encodeURIComponent('Article or Post Title Here');

const fb = document.querySelector('.facebook');
fb.href = `https://www.facebook.com/share.php?u=${link}`;

const twitter = document.querySelector('.twitter');
twitter.href = `http://twitter.com/share?&url=${link}&text=${msg}&hashtags=javascript,programming`;

const linkedIn = document.querySelector('.linkedin');
linkedIn.href = `https://www.linkedin.com/sharing/share-offsite/?url=${link}`;

const reddit = document.querySelector('.reddit');
reddit.href = `http://www.reddit.com/submit?url=${link}&title=${title}`;

const whatsapp = document.querySelector('.whatsapp');
whatsapp.href = `https://api.whatsapp.com/send?text=${msg}: ${link}`;

const telegram = document.querySelector('.telegram');
telegram.href = `https://telegram.me/share/url?url=${link}&text=${msg}`;

<!-- css for share options: -->

#share-container span {
    display: block;
    margin: 3rem auto;
    font-size: 50px;
    padding: 1rem;
    margin: 1rem;
}

#share-buttons i {
    font-size: 100px;
    margin: 20px;
}

.facebook {
    color: #3b5998;
}

.twitter {
    color: #55acee;
}

.linkedin {
    color: #0077b5;
}

.reddit {
    color: #cb2027;
}

.whatsapp {
    color: #25D366;
}

.telegram {
    color: #229ED9;
}

.facebook,
.twitter,
.linkedin,
.reddit,
.whatsapp,
.telegram {
    opacity: 0.6;
}

.facebook:hover,
.twitter:hover,
.linkedin:hover,
.reddit:hover,
.whatsapp:hover,
.telegram:hover {
    opacity: 0.9;
}


$thrower = $_POST['thrower'];
    $person = $_POST['person'];
    $date = $_POST['date'];
    $venue = $_POST['venue'];
    $time = $_POST['time'];