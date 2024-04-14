<?php include 'includes/header.php'; ?>

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
<form method="post" action="test.php">
    <div class="form-group">
        <label for="generate" class="form-label">Start with a detailed description</label>
        <input required type="text" class="form-control" id="generate" name="generate">
        <small id="generate" class="form-text">We recommed that enter the description for the image in the most detailed way you can, so it'll help us in creating the more detailed image for you..</small>
    </div>
    <br />

    <button type="submit" name="submit" class="btn btn-primary btn-block">Generate Image</button>
</form>