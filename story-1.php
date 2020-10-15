<?php require('template/header.php'); ?>

<div class="home">
    <?php require('template/navbar.php'); ?>
    <div class="story-container">
        <h2 class="my-3">Le chat et le poisson</h2>
        <div class="main-container">
            <div class="img-container">
                <img src="assets/image/story-1/vignette-1.png" class="rounded d-block mx-auto mb-3" alt="Tom">
            </div>
            <div class="text-container">
                <p>Salut, moi c’est Tom.  <br>
                J’aurai besoin de toi,  <br>
                j'ai faim ! <br>
                Tu peux m’aider ? </p>
            </div>
        </div>
        <a href="story-2.php" class="btn-story btn btn-warning mt-3 w-50">OUI !</a>
    </div>
</div>

<?php require('template/footer.php');?>