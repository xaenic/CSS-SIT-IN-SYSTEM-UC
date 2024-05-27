<?php
$page_title = "Rules";
$parent = [""];
require "core.php";
require './shared/header.php';

?>

<div class="md:p-5 md:px-36   bg-gradient-to-tl from-[#FFDEC1] to-[#FBD7FF] rounded-xl md:pt-1 p-3 min-h-screen flex flex-col ">

    <div>
        <?php require './shared/navbar.php'; ?>
        <?php require './views/rules.view.php'; ?>
    </div>
    <div>
        <?php require './shared/footer.php'; ?>
    </div>


</div>
