<?php require('template/header.php'); ?>

<div class="home">
    <?php require('template/navbar.php'); ?>
    <div class="story-container">
        <h2 class="my-3">Le chat et le poisson</h2>
        <div class="main-container">
            <form method="POST" id="form">
                <div class="img-container">
                    <img src="assets/image/story-1/vignette-2.png" class="rounded d-block mx-auto mb-3" alt="Tom">
                    <div class="input-group form-story">
                        <input type="text" class="form-control" id="response" name="response" placeholder="Ta réponse">
                        <div class="input-group-append">
                            <button class="btn btn-success" type="submit">
                                <i class="fa fa-check"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </form>
            <div class="text-container">
                <p>De quoi a besoin Tom pour pêcher ?</p>
            </div>
        </div>
        <div class="btn-container">
            <div class="btn-action" id="start">
                <i class="fa fa-microphone btn-icon"></i>
            </div>
            <div class="btn-action">
                <i class="fa fa-keyboard btn-icon" onclick="document.getElementById('response').focus()"></i>
            </div>
        </div>
    </div>
</div>

<?php require('template/footer.php');?>

<!-- Traitement du post -->
<?php

if(isset($_POST['response']) && !empty($_POST['response'])) {
    $response = strtolower($_POST['response']);
    $isOkay = strpos($response, 'canne à pêche');

    if($isOkay !== false) {
        echo '<script>window.location.href = "story-5-success.php";</script>';
    } else {
        echo '<script>window.location.href = "story-false.php?redirect=story-5";</script>';
    }
}