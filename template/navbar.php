<div class="navbar">
    <div>
        <a href="histoire.php">
            <img src="assets/image/<?php if(isset($page) && $page == "histoire") { echo 'book-active.png'; } else { echo 'book.png'; } ?>">
        </a>
    </div>
    <div>
        <a href="trophees.php">
            <img src="assets/image/<?php if(isset($page) && $page == "trophees") { echo 'truc-active.png'; } else { echo 'truc.png'; } ?>">
        </a>
    </div>
    <div>
        <img src="assets/image/profile.png">
    </div>
    <div>
        <img src="assets/image/settings.png">
    </div>
</div>