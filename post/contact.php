<?php
header("Content-Type: application/json");

// Set default failure response.
$response = array(
    "message" => "There was an error submitting your comments.  Please try again.",
    "status" => "fail"
);

// Check if the captcha passed.
$captchaRequest = curl_init("https://www.google.com/recaptcha/api/siteverify");

curl_setopt($captchaRequest, CURLOPT_POST, 1);
curl_setopt($captchaRequest, CURLOPT_POSTFIELDS, array(
    "response" => $_POST["g-recaptcha-response"],
    "secret" => "6LciERYTAAAAAB118IRjZZ4xKQshdc2s2xdFkzyQ"
));
curl_setopt($captchaRequest, CURLOPT_RETURNTRANSFER, true);
//curl_setopt($captchaRequest, CURLOPT_SSL_VERIFYPEER, 0);

$captchaResponse = json_decode(curl_exec($captchaRequest));
curl_close($captchaRequest);

// Attempt to send the email.
if(!empty($_POST["name"]) &&
   !empty($_POST["email"]) &&
   filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) != false &&
   !empty($_POST["comments"]) &&
   $captchaResponse->success == true
) {
    // Set mail parameters.
    $to = "richhoyer99@gmail.com";
    $subject = "Reveal Site - Contact Form Submission";
    $message = wordwrap("\r\n- Name -\r\n" . $_POST["name"] . "\r\n" .
        "\r\n- Email -\r\n" . $_POST["email"] . "\r\n" .
        (!empty($_POST["phone"]) ? "\r\n- Phone -\r\n" . $_POST["phone"] . "\r\n" : "") .
        "\r\n- Comments -\r\n" . $_POST["comments"], 70, "\r\n");

    // Send the email.
    $mailsent = mail($to, $subject, $message);

    // Set the success response.
    if($mailsent) {
        $response = array(
            "message" => "Your comments were submitted successfully.",
            "status" => "success"
        );
    }
}

// Return the result.
echo(json_encode($response));
?>