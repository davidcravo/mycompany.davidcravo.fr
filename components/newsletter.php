<?php
    session_start();
    $_SESSION["error"] = null;
    $_SESSION["success"] = null;
    $_SESSION['email'] = null;
    if(!empty($_POST['newsletter_email'])){
        $_SESSION['email'] = $_POST['newsletter_email'];
        if(filter_var($_SESSION['email'], FILTER_VALIDATE_EMAIL)){
            $file = dirname(__DIR__) . DIRECTORY_SEPARATOR . "data" . DIRECTORY_SEPARATOR . "newsletter_emails.txt";
            file_put_contents($file, $_SESSION['email'] . PHP_EOL, FILE_APPEND);
            $_SESSION["success"] = "Votre adresse a bien été enregistrée";
            $_SESSION['email'] = null;
        }else{
            $_SESSION["error"] = "Votre email est invalide";
        }
    }
?>

<section class="newsletter_section">
    
    <h1 id="newsletter">Newsletter</h1>

    <?php if(array_key_exists('success', $_SESSION)): ?>
        <div class="success"><?= $_SESSION["success"] ?></div>
    <?php endif;  ?>
    <?php if(array_key_exists('error', $_SESSION)): ?>
        <div class="error"><?= $_SESSION["error"] ?></div>
    <?php endif;  ?>

    <form action="" method="POST">
        <input type="email" name="newsletter_email" id="newsletter_email" placeholder="contact@email.com" required value="<?= htmlentities($_SESSION['email']) ?>">
        <button type="submit">S'inscrire</button>
    </form>
    <p>Ne manquez plus aucune info essentielle : recevez en avant-première nos meilleures astuces, actualités et offres exclusives directement dans votre boîte mail !</p>
    
   
</section>

<?php
    session_unset();
    session_destroy()
?>