<?php
$dashboard = isset($_POST['role']) ? '/dashboard' : '/admin/dashboard';

?>
<aside class="lg:flex hidden w-56 bg-gradient-to-t to-slate-800 from-gray-900 p-5 rounded-xl  m-4 text-gray-100 fixed top-0 left-0 bottom-0 overflow-y-auto  flex-col justify-between">
    <div class="h-full text-white  ">
        <section id="widget_1" class="border-b border-gray-200 pb-4 flex items-center gap-2 justify-center ">
            <img src="../assets/images/ccs_logo.png" class="w-10 h-10" />
            <h1 class="text-center font-bold">CCSLab</h1>
        </section>
        <section id="widget_2" class="mt-5 flex flex-col gap-5">
            <div class="flex gap-2 items-center hover:bg-slate-900 <?php if ($page_title == 'Dashboard') {
                                                                        echo 'bg-gray-900';
                                                                    } ?> cursor-pointer text-white rounded-lg px-3 p-2  ">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M10 20v-6h4v6h5v-8h3L12 3L2 12h3v8z" />
                </svg>
                <a href="<?php echo $dashboard; ?>" class="">Dashboard</a>
            </div>


            <div class="flex gap-2 items-center hover:bg-slate-900 <?php if ($page_title == 'Laboratories') {
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

            <div class="flex gap-2 items-center  duration-200 transition-colors cursor-pointer rounded-lg px-3 p-2  ">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M12 21q-3.45 0-6.012-2.287T3.05 13H5.1q.35 2.6 2.313 4.3T12 19q2.925 0 4.963-2.037T19 12q0-2.925-2.037-4.962T12 5q-1.725 0-3.225.8T6.25 8H9v2H3V4h2v2.35q1.275-1.6 3.113-2.475T12 3q1.875 0 3.513.713t2.85 1.924q1.212 1.213 1.925 2.85T21 12q0 1.875-.712 3.513t-1.925 2.85q-1.213 1.212-2.85 1.925T12 21m2.8-4.8L11 12.4V7h2v4.6l3.2 3.2z" />
                </svg>
                <a href="/dashboard" class="">Session History</a>
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