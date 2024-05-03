<?php
    $title = "Acceuil";

    include("./src/block/header.php");

    session_destroy();
?>

<main>
    <a id="startGame" href="#">commencer une partie</a>  
</main>

<?php
    include("./src/block/footer.php");
?>