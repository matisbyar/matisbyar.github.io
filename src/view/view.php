<?php
/* @var $pagetitle string */

/* @var $pagecontent string */

use App\Portfolio\Lib\MessageFlash;

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title><?= $pagetitle ?></title>
    <link rel="stylesheet" href="../styles/style.css">
</head>
<body>
    <header>

    </header>
    <main>
        <?php
        $messages = MessageFlash::lireTousMessages();
        foreach ($messages as $message) echo '<div class="alert alert-' . lcfirst($message["type"]) . '" role="alert">' . $message["message"] . '</div>';
        require __DIR__ . "/{$pagecontent}";
        ?>
    </main>

    <footer>

    </footer>
</body>
</html>
