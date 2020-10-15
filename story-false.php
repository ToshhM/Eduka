<?php $redirection = $_GET['redirect']; ?>

<?php require('template/header.php'); ?>

<div class="home">
    <?php require('template/navbar.php'); ?>
    <div class="story-container">
        <h2 class="my-3">Le chat et le poisson</h2>
        <div class="main-container">
            <form method="POST" id="form">
                <div class="img-container">
                    <img src="assets/image/story-1/dead.png" class="rounded d-block mx-auto mb-3" alt="Tom">
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
                <p>Oups ! Ce n'était pas la bonne réponse.</p>
            </div>
        </div>
        <a href="<?php echo $redirection; ?>.php" class="btn-story btn btn-danger mt-3 w-50">OUPS, RÉESSAYE !</a>
    </div>
</div>

<?php require('template/footer.php');?>