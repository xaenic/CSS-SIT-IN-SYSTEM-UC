<?php
$dashboard = isset($_POST['role']) ? '/dashboard' : '/admin/dashboard';

?>
<aside id="sidebar" class="left-[-1000px] lg:left-0 h-screen pb-36 duration-300 transition-all  w-56 bg-gradient-to-t to-slate-800 from-gray-900 p-5 rounded-xl  lg:m-4 text-gray-100 fixed top-0 left-0 bottom-0   flex-col justify-between">
    <div class="h-full text-white  ">
        <section id="widget_1" class="border-b border-gray-200 pb-4 flex items-center gap-2 justify-center ">
            <img src="../assets/images/ccs_logo.png" class="w-10 h-10" />
            <h1 class="text-center font-bold">CCSLab</h1>
            <svg id="hideSide" xmlns="http://www.w3.org/2000/svg" class="cursor-pointer ml-3 lg:hidden" width="1em" height="1em" viewBox="0 0 24 24">
                <path fill="currentColor" d="M22 18.005c0 .55-.446.995-.995.995h-8.01a.995.995 0 0 1 0-1.99h8.01c.55 0 .995.445.995.995M22 12c0 .55-.446.995-.995.995H2.995a.995.995 0 1 1 0-1.99h18.01c.55 0 .995.446.995.995m-.995-5.01a.995.995 0 0 0 0-1.99H8.995a.995.995 0 1 0 0 1.99z" />
            </svg>
        </section>
        <section id="widget_2" class="mt-5 flex flex-col gap-5">
            <div class="flex gap-2 items-center hover:bg-slate-900 <?php if ($page_title == 'Dashboard') {
                                                                        echo 'bg-gray-900';
                                                                    } ?> cursor-pointer text-white rounded-lg px-3 p-2  ">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M10 20v-6h4v6h5v-8h3L12 3L2 12h3v8z" />
                </svg>
                <a href="<?php echo $dashboard; ?>" class="w-full">Dashboard</a>
            </div>


            <div class="flex gap-2 items-center hover:bg-slate-900 <?php if ($page_title == 'Laboratories' || $page_title == 'Reservation') {
                                                                        echo 'bg-gray-900';
                                                                    } ?>  duration-200 transition-colors cursor-pointer rounded-lg px-3 p-2  ">


                <?php if (isset($_SESSION['role'])) {
                    echo '
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                             <path fill="currentColor" d="M13 18v2h4v2H7v-2h4v-2H2.992A.998.998 0 0 1 2 16.992V4.008C2 3.451 2.455 3 2.992 3h18.016c.548 0 .992.449.992 1.007v12.985c0 .557-.455 1.008-.992 1.008z" />
                        </svg>
                        <a href="/admin/labs" class="text-white">Laboratories</a>';
                } else echo '<a href="/reservation" class="text-white">Reservation</a>';

                ?>

            </div>

            <div class="flex gap-2 hover:bg-slate-900 items-center  duration-200 transition-colors cursor-pointer rounded-lg px-3 p-2 
            <?php if ($page_title == 'Staffs') {
                echo 'bg-gray-900';
            } ?> duration-200 transition-colors cursor-pointer rounded-lg px-3 p-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M16 17v2H2v-2s0-4 7-4s7 4 7 4m-3.5-9.5A3.5 3.5 0 1 0 9 11a3.5 3.5 0 0 0 3.5-3.5m3.44 5.5A5.32 5.32 0 0 1 18 17v2h4v-2s0-3.63-6.06-4M15 4a3.39 3.39 0 0 0-1.93.59a5 5 0 0 1 0 5.82A3.39 3.39 0 0 0 15 11a3.5 3.5 0 0 0 0-7" />
                </svg>
                <a href="/admin/staffs" class="text-white">Staffs</a>
            </div>
            <div class="flex gap-2 hover:bg-slate-900 items-center  duration-200 transition-colors cursor-pointer rounded-lg px-3 p-2 
            <?php if ($page_title == 'Schedules') {
                echo 'bg-gray-900';
            } ?> duration-200 transition-colors cursor-pointer rounded-lg px-3 p-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M19 19H5V8h14m-3-7v2H8V1H6v2H5c-1.11 0-2 .89-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2h-1V1m-1 11h-5v5h5z" />
                </svg>
                <a href="/admin/schedules" class="text-white">Schedules</a>
            </div>
        </section>
    </div>
    <div class=" hover:bg-slate-900 p-2 rounded-lg duration-200 transition-colors ">
        <div class="flex gap-1 justify-center items-center w-full">

            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                <path fill="currentColor" d="m17 7l-1.41 1.41L18.17 11H8v2h10.17l-2.58 2.58L17 17l5-5M4 5h8V3H4c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h8v-2H4z" />
            </svg>
            <a href="/logout" class=" text-center">Logout</a>
        </div>

    </div>
</aside>