<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Wedding Card</title>

    <!-- Google Font-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet" />
    <!-- Stylesheet -->
    <link rel="stylesheet" href="styles/flip.css" />

    <style>
        .rounded-image {
            border-radius: 5%;
            /* 50% to make the corners fully rounded for a circular image */
        }
    </style>

</head>


<?php
session_start();
$themedpromptfinal =$_SESSION['passingcard']; 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $apiEndpointChatGPT = 'https://api.openai.com/v1/chat/completions';
    $apiEndpointDallE = 'https://api.openai.com/v1/images/generations';
    $apiKey = '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'; // Replace with your actual API key

    // Retrieve user input from form
    $yourName = $_POST['yourName'];
    $name = $_POST['name'];
    $relation = $_POST['relation'];
    $occasion = "Wedding";
    $personality = $_POST['personality'];
    // $userPrompt = $_POST['generate'];

    // Hard-coded prompt for ChatGPT API request
    $hardCodedPrompt = "Compose a concise and heartfelt greeting for $name my $relation on the occasion of $occasion. Incorporate their unique personality traits, $personality, into the message. Please keep the response within 45 words to ensure brevity while capturing the essence of our bond and the significance of this occasion.";

    $chatData = array(
        'model' => 'gpt-3.5-turbo',
        "max_tokens" => 400,
        'messages' => array(
            array('role' => 'system', 'content' => 'You are a helpful assistant.'),
            array('role' => 'user', 'content' => $hardCodedPrompt),
        ),
    );

    $chatJsonData = json_encode($chatData);

    $chatCurl = curl_init($apiEndpointChatGPT);
    curl_setopt($chatCurl, CURLOPT_POST, true);
    curl_setopt($chatCurl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($chatCurl, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json',
        'Authorization: Bearer ' . $apiKey,
    ));
    curl_setopt($chatCurl, CURLOPT_POSTFIELDS, $chatJsonData);

    $chatResponse = curl_exec($chatCurl);

    $chatResponseCode = curl_getinfo($chatCurl, CURLINFO_HTTP_CODE);
    if ($chatResponseCode !== 200) {
        echo 'ChatGPT API request error. Response Code: ' . $chatResponseCode;
    } else {
        if ($chatResponse === false) {
            $chatErrorMessage = curl_error($chatCurl);
            echo 'ChatGPT API request error: ' . $chatErrorMessage;
        } else {
            $chatResponseData = json_decode($chatResponse, true);
            $chatChoices = $chatResponseData['choices'];
            $chatResult = $chatChoices[0]['message']['content'];
        }
    }

    curl_close($chatCurl);
    
    $apiEndpointDallE = 'https://api.openai.com/v1/images/generations';
    $apiKey = 'yourkeyhere'; // Replace with your actual API key

    // Hard-coded prompt for DALL-E API request
    $dallEPrompt = $themedpromptfinal;
    

    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, $apiEndpointDallE);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode([
        "prompt" => $dallEPrompt,
        "n" => 1,
        "size" => "1024x1024"
    ]));

    $headers = array();
    $headers[] = 'Content-Type: application/json';
    $headers[] = 'Authorization: Bearer ' . $apiKey;
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

<body>


    <div class="card">
        <div class="outside">
            <div class="front">
                <div class="element">
                    <img src="assets/fula.png" height="497px" width="410px">
                    <div class="text">
                        <p>Happy <?php echo $occasion; ?></p>
                        <p><?php echo $name; ?></p>
                    </div>
                </div>
                <!-- <h1>&#127872;</h1> -->
            </div>
            <div class="back">
                <image src="<?php echo $final_url; ?>" class="rounded-image" height="200" width="200">

                    <h1>&#127873;</h1>

            </div>
        </div>
        <div class="inside">
            <p><?php echo $chatResult; ?></p>
            <p><?php echo "-$yourName" ?></p>
            <!-- <h1>&#127873;</h1> -->
        </div>
    </div>

</body>

</html>

<!-- image with no text prompt: Create a lively scene with friendly animals wearing party hats. Use a lush jungle backdrop. Let the image evoke excitement and anticipation for the celebration -->