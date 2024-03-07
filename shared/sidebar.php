<?php
$dashboard = isset($_POST['role']) ? '/dashboard' : '/admin/dashboard';

?>
<aside id="sidebar"
    class="left-[-1000px] lg:left-0 h-screen pb-36 duration-300 transition-all  w-56 bg-gradient-to-t to-slate-800 from-gray-900 p-5 rounded-xl  lg:m-4 text-gray-100 fixed top-0 left-0 bottom-0   flex-col justify-between">
    <div class="h-full text-white  ">
        <section id="widget_1" class="border-b border-gray-200 pb-4 flex items-center gap-2 justify-center ">
            <img src="../assets/images/ccs_logo.png" class="w-10 h-10" />
            <h1 class="text-center font-bold">CCSLab</h1>
            <svg id="hideSide" xmlns="http://www.w3.org/2000/svg" class="cursor-pointer ml-3 lg:hidden" width="1em"
                height="1em" viewBox="0 0 24 24">
                <path fill="currentColor"
                    d="M22 18.005c0 .55-.446.995-.995.995h-8.01a.995.995 0 0 1 0-1.99h8.01c.55 0 .995.445.995.995M22 12c0 .55-.446.995-.995.995H2.995a.995.995 0 1 1 0-1.99h18.01c.55 0 .995.446.995.995m-.995-5.01a.995.995 0 0 0 0-1.99H8.995a.995.995 0 1 0 0 1.99z" />
            </svg>
        </section>
        <section id="widget_2" class="mt-5 flex flex-col gap-5">
            <div
                class="flex gap-2 items-center hover:bg-slate-900 <?php if ($page_title == 'Dashboard') {
                                                                        echo 'bg-gray-900';
                                                                    } ?> cursor-pointer text-white rounded-lg px-3 p-2  ">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M10 20v-6h4v6h5v-8h3L12 3L2 12h3v8z" />
                </svg>
                <a href="<?php echo $dashboard; ?>" class="w-full">Dashboard</a>
            </div>


            <div
                class="flex gap-2 items-center hover:bg-slate-900 <?php if ($page_title == 'Laboratories' || $page_title == 'Reservation') {
                                                                        echo 'bg-gray-900';
                                                                    } ?>  duration-200 transition-colors cursor-pointer rounded-lg px-3 p-2  ">


                <?php if (isset($_SESSION['role'])) {
                    echo '
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                             <path fill="currentColor" d="M13 18v2h4v2H7v-2h4v-2H2.992A.998.998 0 0 1 2 16.992V4.008C2 3.451 2.455 3 2.992 3h18.016c.548 0 .992.449.992 1.007v12.985c0 .557-.455 1.008-.992 1.008z" />
                        </svg>
                        <a href="/admin/labs" class="text-white">Laboratories</a>';
                } else echo '
                  <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M19 19H5V8h14m-3-7v2H8V1H6v2H5c-1.11 0-2 .89-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2h-1V1m-1 11h-5v5h5z"/></svg>
                <a href="/reservation" class="text-white">Reservation</a>';

                ?>

            </div>
            <?php
            if (isset($_SESSION['role'])) {
                 echo '<div class="flex gap-2 hover:bg-slate-900 items-center duration-200 transition-colors cursor-pointer rounded-lg px-3 p-2 ';
                if ($page_title == "Students") { echo 'bg-gray-900' ; } echo ' duration-200 transition-colors cursor-pointer rounded-lg px-3 p-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                <path fill="currentColor" d="M19 19H5V8h14m-3-7v2H8V1H6v2H5c-1.11 0-2 .89-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2h-1V1m-1 11h-5v5h5z" />
            </svg>
            <a href="/admin/Students" class="text-white">Students</a>
        </div>' ;
                echo '<div class="flex gap-2 hover:bg-slate-900 items-center duration-200 transition-colors cursor-pointer rounded-lg px-3 p-2 ';
                if ($page_title == "Schedules") { echo 'bg-gray-900' ; } echo ' duration-200 transition-colors
                cursor-pointer rounded-lg px-3 p-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                <path fill="currentColor" d="M19 19H5V8h14m-3-7v2H8V1H6v2H5c-1.11 0-2 .89-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2h-1V1m-1 11h-5v5h5z" />
            </svg>
            <a href="/admin/schedules" class="text-white">Schedules</a>
        </div>';
            } else {

                echo ' <div class="flex gap-2 hover:bg-slate-900 items-center  duration-200 transition-colors cursor-pointer rounded-lg px-3 p-2 ';
                if ($page_title == 'Schedules') {
                    echo 'bg-gray-900';
                }
                echo 'duration-200 transition-colors cursor-pointer rounded-lg px-3 p-2">
               <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="M5 12s2.545-5 7-5c4.454 0 7 5 7 5s-2.546 5-7 5c-4.455 0-7-5-7-5"/><path d="M12 13a1 1 0 1 0 0-2a1 1 0 0 0 0 2m9 4v2a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-2M21 7V5a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v2"/></g></svg>
                <a href="/admin/schedules" class="text-white">Sessions</a>
            </div>';
                echo ' <div class="flex gap-2 hover:bg-slate-900 items-center  duration-200 transition-colors cursor-pointer rounded-lg px-3 p-2 ';
                if ($page_title == 'Profile') {
                    echo 'bg-gray-900';
                }
                echo ' duration-200 transition-colors cursor-pointer rounded-lg px-3 p-2">
              <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M12 4a4 4 0 0 1 4 4a4 4 0 0 1-4 4a4 4 0 0 1-4-4a4 4 0 0 1 4-4m0 10c4.42 0 8 1.79 8 4v2H4v-2c0-2.21 3.58-4 8-4"/></svg>
                <a href="/profile" class="text-white">Profile</a>
            </div>';
            }
            ?>

        </section>
    </div>
    <div class=" hover:bg-slate-900 p-2 rounded-lg duration-200 transition-colors ">
        <div class="flex gap-1 justify-center items-center w-full">

            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                <path fill="currentColor"
                    d="m17 7l-1.41 1.41L18.17 11H8v2h10.17l-2.58 2.58L17 17l5-5M4 5h8V3H4c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h8v-2H4z" />
            </svg>
            <a href="/logout" class=" text-center">Logout</a>
        </div>

    </div>
</aside>