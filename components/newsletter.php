<?php
    $error = null;
    $success = null;
    $email = null;
    if(!empty($_POST['newsletter_email'])){
        $email = $_POST['newsletter_email'];
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            $file = dirname(__DIR__) . DIRECTORY_SEPARATOR . "data" . DIRECTORY_SEPARATOR . "newsletter_emails.txt";
            file_put_contents($file, $email . PHP_EOL, FILE_APPEND);
            $success = "Votre adresse a bien été enregistrée";
            $email = null;
        }else{
            $error = "Votre email est invalide";
        }
    }
?>

<section class="newsletter_section">
    
    <h1 id="newsletter">Newsletter</h1>

    <?php if($success): ?>
        <div class="success"><?= $success ?></div>
    <?php endif;  ?>
    <?php if($error): ?>
        <div class="error"><?= $error ?></div>
    <?php endif;  ?>

    <form action="" method="POST">
        <input type="email" name="newsletter_email" id="newsletter_email" placeholder="contact@email.com" required value="<?= htmlentities($email) ?>">
        <button type="submit">S'inscrire</button>
    </form>
    <p>Ne manquez plus aucune info essentielle : recevez en avant-première nos meilleures astuces, actualités et offres exclusives directement dans votre boîte mail !</p>
    
   
</section>