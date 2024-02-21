<?php
require "core.php";
$page_title = "Home";
require './shared/header.php';
?>

<div class="md:p-5 md:px-36   bg-gradient-to-tl from-[#FFDEC1] to-[#FBD7FF] rounded-xl md:pt-14 p-3 min-h-screen flex flex-col justify-between">

    <div>
        <?php require './shared/navbar.php'; ?>
        <?php require './views/index.view.php'; ?>
    </div>
    <div>
        <?php require './shared/footer.php'; ?>
    </div>


</div>
<script>
    gsap.from('#box', {
        opacity: 0, // Start opacity
        duration: 0.5, // Duration of the animation
        ease: 'bounce.out' // Easing function
    });
</script>