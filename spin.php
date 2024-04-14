<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>3D Spinning Card</title>
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500&display=swap" rel="stylesheet" />
    <!-- Stylesheet -->
    <link rel="stylesheet" href="styles/spin.css" />

    <style>

    </style>

</head>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $apiEndpoint = 'https://api.openai.com/v1/chat/completions';
    $apiKey = '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'; // Replace with your actual API key

    // Retrieve user input from form
    
    $thrower = $_POST['thrower'];
    $person = $_POST['person'];
    $date = $_POST['date'];
    $venue = $_POST['venue'];
    $time = $_POST['time'];


    $final_prompt = "Compose a concise and heartfelt greeting for $name my $relation on the occasion of $occasion Incorporate their unique personality traits, $personality    into the message. Please keep the response within 30 words to ensure brevity while capturing the essence of our bond and the significance of this occasion.";

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

    // ... (your form handling code)

    // To display the uploaded image in the img tag, you can set the src attribute as follows:

}


?>


<body>
    <div class="container">
        <div class="card">
            <!-- Front Side-->
            <div class="front center">
                <div class="element">
                    <img src="assets/fula.png" height="520px" width="410px">
                    <div class="text">
                        <p>Happy <?php echo $occasion; ?></p>
                        <p><?php echo $name; ?></p>
                    </div>
                </div>
            </div>
            <!-- Back Side-->
            <div class="back center">
                <div class="text">
                    <p><?php echo $chatResult; ?></p>
                    <p><?php echo "-$yourName" ?></p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>