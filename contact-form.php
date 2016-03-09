<?php
session_start();

require_once 'helpers/security.php';

$errors = isset($_SESSION['errors']) ? $_SESSION['errors'] : [];
$fields = isset($_SESSION['fields']) ? $_SESSION['fields'] : [];
?>

<!DOCTYPE html>
<html lang="en">
<head>

<!-- Basic Page Needs
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
<title>CNJ | Bible Study</title>
<meta charset="utf-8">
<meta name="description" content="Learn word of God with Eugene Mikhaylichenko">
<meta name="author" content="Sergey">
    
<!-- Jquery & Java Script
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript" src="js/myScript.js"></script>
    
<!-- Mobile Specific Metas
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
  
<!-- FONT
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
<link href='https://fonts.googleapis.com/css?family=Oleo+Script:700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Satisfy' rel='stylesheet' type='text/css'>
  
<!-- CSS
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
<link rel="stylesheet" href="css/normalize.css">
<link rel="stylesheet" href="css/skeleton.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.min.css">
  	
<!-- Favicon
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
<link rel="icon" type="image/png" href="images/favicon.png">

<!-- Bible Highlighter
-------------------------------------------------- -->
<script id="bw-highlighter-config">
(function(w, d, s, e, id) {
window._bhparse = window._bhparse || [];
  function l() {
    if (d.getElementById(id)) return;
    var n = d.createElement(s), x = d.getElementsByTagName(s)[0];
    n.id = id; n.async = true; n.src = '//bibles.org/linker/js/client.js';
    x.parentNode.insertBefore(n, x);
  }
  (w.attachEvent) ? w.attachEvent('on' + e, l) : w.addEventListener(e, l, false);
})(window, document, 'script', 'load', 'bw-highlighter-src');
</script>

</head>
    
<!-- Navigation Bar
-------------------------------------------------- -->
<body>
<header class="main_nav">
    <div class="container">
        <div class="two columns">
            <a href="index.html"><img src="images/logo.png" alt="CNJ" class="logo"></a>
        </div>
        <div class="ten columns">
            <ul>
                <li><a href="index.html">home</a></li>
                <li><a href="about.html">about</a></li>
                <li><a href="audio.html">audio</a></li>
                <li><a href="video.html">video</a></li>
                <li><a href="contact-form.php">contact</a></li>
            </ul>
        <select onChange="window.location.replace(this.options[this.selectedIndex].value)">
            <option value="index.html">Home</option>
            <option value="about.html">About</option>
            <option value="audio.html">Audio</option>
            <option value="video.html">Video</option>
            <option value="contact-form.php" selected>Contact</option>
        </select>
        </div>
    </div>
</header>
    
<!-- Main Contant
-------------------------------------------------- -->
<div class="container ustream">
    <div class="twelve columns">
            
<form method="post" action="contact.php">

    <div class="input-box">
        <label>Name *</label>
        <input type="text" name="name" autocomplete="off"<?php echo isset($fields['name']) ? ' value="' . e($fields['name']) . '"' : '' ?>>
    </div>
    <div class="input-box">
        <label>Email *</label>
        <input type="text" name="email" autocomplete="off"<?php echo isset($fields['email']) ? ' value="' . e($fields['email']) . '"' : '' ?>>
    </div>
    <div class="input-box">
        <label>Message *</label>
        <textarea name="message"<?php echo isset($fields['message']) ? e($fields['message']) : '' ?>></textarea>
    </div>
    <div class="submit">
        <input type="submit" value="Submit" />
    </div>
</form>
    </div>
    <hr class="line">
<!-- Footer
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <footer>
        <div class="twelve columns copyright">
            <p>&copy;2016 CNJ - All rights reserved.</p>
        </div>
    </footer>

        <?php if(!empty($errors)): ?>
            <div class="panel">
                <ul><li><?php echo implode('</li><li>', $errors); ?></li></ul>
                <?php endif; ?>
            </div>

</div>
<!-- End Document
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
    </body>
</html>

<?php

unset($_SESSION['errors']);

?>
