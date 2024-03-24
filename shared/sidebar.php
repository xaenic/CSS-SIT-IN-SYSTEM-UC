<?php
$dashboard = isset($_SESSION['role']) ? '/dashboard' : '/admin/dashboard';

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

      <?php
      
        if(isset($_SESSION['role'])) { ?>
            <section id="widget_2" class="mt-5 flex flex-col gap-5">
                <div class="flex gap-2 items-center hover:bg-slate-900 <?php if ($page_title == 'Dashboard') { echo 'bg-gray-900'; } ?> cursor-pointer text-white rounded-lg px-3 p-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M10 20v-6h4v6h5v-8h3L12 3L2 12h3v8z" />
                    </svg>
                    <a href="<?php echo $dashboard; ?>" class="w-full">Dashboard</a>
                </div>
            </section>
            <section id="widget_2" class="mt-5 flex flex-col gap-5">
                <div class="flex gap-2 items-center hover:bg-slate-900 <?php if ($page_title == 'Students' || $parent[0] == 'Students') { echo 'bg-gray-900'; } ?> cursor-pointer text-white rounded-lg px-3 p-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M10 20v-6h4v6h5v-8h3L12 3L2 12h3v8z" />
                    </svg>
                    <a href="./students" class="w-full">Students</a>
                </div>
            </section>
             <section id="widget_2" class="mt-5 flex flex-col gap-5">
                <div class="flex gap-2 items-center hover:bg-slate-900 <?php if ($page_title == '') { echo 'bg-gray-900'; } ?> cursor-pointer text-white rounded-lg px-3 p-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M10 20v-6h4v6h5v-8h3L12 3L2 12h3v8z" />
                    </svg>
                    <a href="./students" class="w-full">Sit-In Records</a>
                </div>
            </section>
             <section id="widget_2" class="mt-5 flex flex-col gap-5">
                <div class="flex gap-2 items-center hover:bg-slate-900 <?php if ($page_title == '') { echo 'bg-gray-900'; } ?> cursor-pointer text-white rounded-lg px-3 p-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M10 20v-6h4v6h5v-8h3L12 3L2 12h3v8z" />
                    </svg>
                    <a href="./students" class="w-full">Generate Report</a>
                </div>
            </section>
        <?php } ?>
            
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