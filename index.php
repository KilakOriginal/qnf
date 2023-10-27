<!DOCTYPE html><html lang="en"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no"><title id="page_title"></title><link rel="shortcut icon" href="https://tinyurl.com/ytugcayv"/><link rel="stylesheet" href="https://drive.google.com/uc?id=16e-NYmsXu6lYpBJRInHdtb5po0WVSu3v"><link rel="stylesheet" href="https://drive.google.com/uc?id=18xD238vOxtn-IsU8676gjZ5afO3zKM9y"><script src="https://drive.google.com/uc?id=14jP87NjxLaeqvgD0ckEVZG0a_k8rJ1M9"></script></head><body style="width: 930px; max-width: 100%; margin-left: auto;margin-right: auto;padding: 0;"><h4 style="text-align: center;margin-top: 10px;"><span style="color: rgb(112, 114, 118);">KilakOriginal</span></h4><h1 style="text-align: center;margin-top: 10px;" id="title"><strong></strong></h1><p style="text-align: justify;background: #0d6efd;border-radius: 20px;color: rgb(255,255,255);width: 900px; max-width: 85%;align-self: center;margin-left: auto;margin-right: auto;margin-top: 15px;padding: 15px;" id="about"></p>
<form action="<?php echo $_SERVER["PHP_SELF"] . '?'.http_build_query($_GET); ?>" method="post" style="margin-left: auto;margin-right: auto;width:900px;max-width: 85%;">
<input type="text" style="display: block;width: 900px;max-width: 100%;height: 60px;margin-left: auto;margin-right: auto;margin-bottom: 20px;border-radius: 1.5rem; padding: 15px;" id="subject" name="subject"></input>
<textarea style="display: block;width: 900px;max-width: 100%;height: 400px;margin-left: auto;margin-right: auto;margin-bottom: 20px;border-radius: 1.5rem; padding: 15px;" id="message" name="message"></textarea>
<button class="btn btn-primary" type="submit" style="display: block;width: auto;float: right;margin-bottom:10px;" id="submit" name="submit"></button><p></p></form><script src="assets/bootstrap/js/bootstrap.min.js"></script>
<?php
if((isset($_GET["lang"]))) {
    $lang = $_GET['lang'];
}
else {
    $lang = "de";
}
$text = json_decode(file_get_contents("languages/$lang.json"), true);
$title = $text["title"];
$about = $text["about"];
$subject_placeholder = $text["subject_placeholder"];
$message_placeholder = $text["message_placeholder"];
$send_button = $text["send_button"];
$go_back = $text["go_back"];

$recipient = $text["recipient"];

if(isset($_POST["submit"]))
{
    $subject = "[Kummerkasten] " . $_POST["subject"];
    $message = $_POST["message"];
    if(mail($recipient, $subject, $message)) {
        header("Location: success.php?lang=$lang");
    }
    else {
        header("Location: failed.php?lang=$lang");
    }
    die();
}
?>
<script>
    window.addEventListener("load", load_page_contents);
    function load_page_contents() {
        let title = "<?php echo $title; ?>";
        let about = '<?php echo $about; ?>';
        let subject_placeholder = "<?php echo $subject_placeholder; ?>";
        let message_placeholder = "<?php echo $message_placeholder; ?>";
        let send_button = "<?php echo $send_button; ?>";
        let go_back = "<?php echo $go_back; ?>";

        document.getElementById("page_title").innerHTML = title;
        document.getElementById("title").innerHTML = title;
        document.getElementById("about").innerHTML = about;
        document.getElementById("subject").placeholder = subject_placeholder;
        document.getElementById("message").placeholder = message_placeholder;
        document.getElementById("submit").innerHTML = send_button;
    }
</script>
</body></html>
