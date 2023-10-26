<!DOCTYPE html><html lang="en"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no"><title id="page_title"></title><link rel="shortcut icon" href="https://drive.google.com/uc?id=1rWFSjkB_xrI8Ny0vVcHXw2JG1huXVq2L"/><link rel="stylesheet" href="https://drive.google.com/uc?id=16e-NYmsXu6lYpBJRInHdtb5po0WVSu3v"><link rel="stylesheet" href="https://drive.google.com/uc?id=18xD238vOxtn-IsU8676gjZ5afO3zKM9y"><script src="https://drive.google.com/uc?id=14jP87NjxLaeqvgD0ckEVZG0a_k8rJ1M9"></script></head><body style="width: 930px;max-width: 100%;margin-left: auto;margin-right: auto;padding: 0;"><h4 style="text-align: center;margin-top: 0.3%;"><span style="color: rgb(112, 114, 118);">Fachschaft Informatik</span></h4><h1 style="text-align: center;margin-top: 0.3%;" id="title"><strong></strong></h1><p style="text-align: justify;background: #0d6efd;border-radius: 20px;color: rgb(255,255,255);width: 900px;max-width: 85%;align-self: center;margin-left: auto;margin-right: auto;margin-top: 10px;padding: 15px;" id="about"></p><p style="text-align: center;"></p><script src="assets/bootstrap/js/bootstrap.min.js"></script>
<?php
$text = json_decode(file_get_contents("languages/" . $_GET["lang"] . ".json"), true);
$title = $text["title"];
$about = $text["success"];
$go_back = $text["go_back"];
$lang = $_GET['lang'];
?>
<script>
    window.addEventListener("load", load_page_contents);
    function load_page_contents() {
        let title = "<?php echo $title; ?>";
        let about = '<?php echo $about; ?>';
        let go_back = "<?php echo $go_back; ?>";

        document.getElementById("page_title").innerHTML = title;
        document.getElementById("title").innerHTML = title;
        document.getElementById("about").innerHTML = about;
    }
</script>
</body></html>
