<?php require('template/header.php'); ?>
<?php $page = "histoire"; ?>

<div class="home">
    <?php require('template/navbar.php'); ?>

    <div class="container"> 
        <h2 class="text-white text-center mt-3">Nos histoires</h2>
        <hr class="w-25 mx-auto">
        <div class="stories-container">
            <h4>Le chat et le poisson</h4>
            <div class="price">Gratuit</div>
            <p><i class="far fa-clock"></i> 5 minutes</p>
            <a href="story-1.php" class="btn btn-warning w-50">Jouer</a>
            </div>
        <div class="stories-container inactive">
            <h4>Cabane magique</h4>
            <div class="price">Premium</div>
            <p><i class="far fa-clock"></i> 8 minutes</p>
            <button class="btn btn-warning w-50">Jouer</button>
        </div>
        <div class="stories-container inactive">
            <h4>La rivière mystère</h4>
            <div class="price">Premium</div>
            <p><i class="far fa-clock"></i> 5 minutes</p>
            <button class="btn btn-warning w-50">Jouer</button>
        </div>
    </div>
</div>

<?php require('template/footer.php'); ?>