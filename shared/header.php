<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?> - <?php echo APPLICATION_NAME; ?></title>
    <meta name="description" content="Welcome to our Campus CCS Monitoring System, a comprehensive solution for monitoring laboratory usage and student attendance in real-time. With our system, students can easily check in and out of laboratory sessions, ensuring efficient use of resources and better tracking of attendance. Designed with user convenience in mind, our platform offers intuitive features for both students and administrators, allowing seamless management of laboratory facilities. Experience hassle-free laboratory management with our Campus CCS Monitoring System today!">
    <link rel="icon" href="../assets/images/ccs_logo.png" type="image/x-icon">
    <script src="../assets/tailwind.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <!-- <script src="../assets/framer-motion.dev.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/Flip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/Observer.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollToPlugin.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/Draggable.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/MotionPathPlugin.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/TextPlugin.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="
    https://cdn.jsdelivr.net/npm/toastify-js@1.12.0/src/toastify.min.js
    "></script>
    <link href="
    https://cdn.jsdelivr.net/npm/toastify-js@1.12.0/src/toastify.min.css
    " rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../assets/styles/simditor.css" />
    <script type="text/javascript" src="../assets/scripts/jquery.min.js"></script>
    <script type="text/javascript" src="../assets/scripts/module.js"></script>
    <script type="text/javascript" src="../assets/scripts/hotkeys.js"></script>
    <script type="text/javascript" src="../assets/scripts/uploader.js"></script>
    <script type="text/javascript" src="../assets/scripts/simditor.js"></script>


    <link href="../assets/chosen.css" rel="stylesheet" />
    <style>
            * {
            scrollbar-width: none;
            -webkit-scrollbar {
                display: none;
            }
            }

            /* For WebKit (Chrome, Safari) */
           * ::-webkit-scrollbar {
            width: 12px; /* You can adjust the width as needed */
            display: none;
            }

            * ::-webkit-scrollbar-thumb {
            background-color: transparent;
            width: 0px;
            display: none;
            }

            * ::-webkit-scrollbar-track {
            background-color: transparent;
            width: 0px;
            display: none;
            }
    </style>
</head>

<script>
    $(document).ready(function() {
        
        const showButton = $('#showSide');
        const hideButton = $('#hideSide');
        showButton.click(function() {

            $("#sidebar").removeClass("left-[-1000px]");
        })
        hideButton.click(function() {

            $("#sidebar").addClass("left-[-1000px]");
        })
    })
</script>

<body class="min-h-screen">