<?php
$dashboard = isset($_SESSION['role']) ? '/dashboard' : '/admin/dashboard';

?>
<aside id="sidebar"
    class="z-40 left-[-1000px] lg:left-0 h-screen pb-36 duration-300 transition-all  w-56 bg-gradient-to-t to-slate-800 from-gray-900 p-5 rounded-xl  lg:m-4 text-gray-100 fixed top-0 left-0 bottom-0   flex-col justify-between">
    <div class="h-full text-white  ">
        <section id="widget_1" class="border-b border-gray-200 pb-4 flex items-center gap-2 justify-center ">
            <img src="../assets/images/ccs_logo.png" class="w-10 h-10" />
            <h1 class="text-center font-bold">CCSLab</h1>
            <svg id="hideSide" xmlns="http://www.w3.org/2000/svg" class="cursor-pointer ml-3 lg:hidden" width="1.4em"
                height="1.4em" viewBox="0 0 24 24">
                <path fill="currentColor"
                    d="M22 18.005c0 .55-.446.995-.995.995h-8.01a.995.995 0 0 1 0-1.99h8.01c.55 0 .995.445.995.995M22 12c0 .55-.446.995-.995.995H2.995a.995.995 0 1 1 0-1.99h18.01c.55 0 .995.446.995.995m-.995-5.01a.995.995 0 0 0 0-1.99H8.995a.995.995 0 1 0 0 1.99z" />
            </svg>
        </section>

      <?php
      
        if(isset($_SESSION['role'])) { ?>
            <section id="widget_2" class="mt-5 flex flex-col gap-5">
                <div class="flex gap-2 items-center hover:bg-slate-900 <?php if ($page_title == 'Dashboard') { echo 'bg-gray-900'; } ?> cursor-pointer text-white rounded-lg px-3 p-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1.4em" height="1.4em" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M10 20v-6h4v6h5v-8h3L12 3L2 12h3v8z" />
                    </svg>
                    <a href="<?php echo $dashboard; ?>" class="w-full">Dashboard</a>
                </div>
            </section>
            <section id="widget_2" class="mt-5 flex flex-col gap-5">
                <div class="flex gap-2 items-center hover:bg-slate-900 <?php if ($page_title == 'Students' || $parent[0] == 'Students') { echo 'bg-gray-900'; } ?> cursor-pointer text-white rounded-lg px-3 p-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 256 256"><path fill="currentColor" d="m226.53 56.41l-96-32a8 8 0 0 0-5.06 0l-96 32A8 8 0 0 0 24 64v80a8 8 0 0 0 16 0V75.1l33.59 11.19a64 64 0 0 0 20.65 88.05c-18 7.06-33.56 19.83-44.94 37.29a8 8 0 1 0 13.4 8.74C77.77 197.25 101.57 184 128 184s50.23 13.25 65.3 36.37a8 8 0 0 0 13.4-8.74c-11.38-17.46-27-30.23-44.94-37.29a64 64 0 0 0 20.65-88l44.12-14.7a8 8 0 0 0 0-15.18ZM176 120a48 48 0 1 1-86.65-28.45l36.12 12a8 8 0 0 0 5.06 0l36.12-12A47.89 47.89 0 0 1 176 120"></path></svg>
                    <a href="./students" class="w-full">Students</a>
                </div>
            </section>
            <section id="widget_2" class="mt-5 flex flex-col gap-5">
                <div class="flex gap-2 items-center hover:bg-slate-900 <?php if ($page_title == 'Announcements' || $parent[0] == 'Students') { echo 'bg-gray-900'; } ?> cursor-pointer text-white rounded-lg px-3 p-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M20.664 3.478L8 8v7l.748.267l-1.127 2.254a1.999 1.999 0 0 0 1.156 2.792l4.084 1.361a2.015 2.015 0 0 0 2.421-1.003l1.303-2.606l4.079 1.457A1 1 0 0 0 22 18.581V4.419a1 1 0 0 0-1.336-.941m-7.171 16.299L9.41 18.416l1.235-2.471l4.042 1.444zM4 15h2V8H4c-1.103 0-2 .897-2 2v3c0 1.103.897 2 2 2"></path></svg>
                    <a href="./announcement" class="w-full">Announcements</a>
                </div>
            </section>
             <section id="widget_2" class="mt-5 flex flex-col gap-5">
                <div class="flex gap-2 items-center hover:bg-slate-900 <?php if ($page_title == 'View Records') { echo 'bg-gray-900'; } ?> cursor-pointer text-white rounded-lg px-3 p-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 16 16"><path fill="currentColor" d="M4 9h4v2H4z"></path><path fill="currentColor" d="M16 2h-1V0H5v2H3v1.25L2.4 4H1v1.75L0 7v9h12l4-5zM2 5h8v2H2zm9 10H1V8h10zm1-8h-1V4H4V3h8zm2-2.5l-1 1.25V2H6V1h8z"></path></svg>
                    <a href="./records" class="w-full">View Records</a>
                </div>
            </section>
             <section id="widget_2" class="mt-5 flex flex-col gap-5">
                <div class="flex gap-2 items-center hover:bg-slate-900 <?php if ($page_title == 'Generate Report') { echo 'bg-gray-900'; } ?> cursor-pointer text-white rounded-lg px-3 p-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="m20 8l-6-6H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2zM9 19H7v-9h2zm4 0h-2v-6h2zm4 0h-2v-3h2zM14 9h-1V4l5 5z"></path></svg>
                    <a href="./generate" class="w-full">Generate Report</a>
                </div>
            </section>
        <?php }  else {?>
            <section id="widget_2" class="mt-5 flex flex-col gap-5">
                <div class="flex gap-2 items-center hover:bg-slate-900 <?php if ($page_title == 'Dashboard') { echo 'bg-gray-900'; } ?> cursor-pointer text-white rounded-lg px-3 p-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1.4em" height="1.4em" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M10 20v-6h4v6h5v-8h3L12 3L2 12h3v8z" />
                    </svg>
                    <a href="./dashboard" class="w-full">Dashboard</a>
                </div>
            </section>
            <section id="widget_2" class="mt-5 flex flex-col gap-5">
                <div class="flex gap-2 items-center hover:bg-slate-900 <?php if ($page_title == 'History' || $parent[0] == 'History') { echo 'bg-gray-900'; } ?> cursor-pointer text-white rounded-lg px-3 p-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1.4em" height="1.4em" viewBox="0 0 24 24"><path fill="currentColor" d="M12 21q-3.45 0-6.012-2.287T3.05 13H5.1q.35 2.6 2.313 4.3T12 19q2.925 0 4.963-2.037T19 12t-2.037-4.962T12 5q-1.725 0-3.225.8T6.25 8H9v2H3V4h2v2.35q1.275-1.6 3.113-2.475T12 3q1.875 0 3.513.713t2.85 1.924t1.925 2.85T21 12t-.712 3.513t-1.925 2.85t-2.85 1.925T12 21m2.8-4.8L11 12.4V7h2v4.6l3.2 3.2z"></path></svg>
                    <a href="./history" class="w-full">History</a>
                </div>
            </section>
            <section id="widget_2" class="mt-5 flex flex-col gap-5">
                <div class="flex gap-2 items-center hover:bg-slate-900 <?php if ($page_title == 'Profile Settings') { echo 'bg-gray-900'; } ?> cursor-pointer text-white rounded-lg px-3 p-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1.4em" height="1.4em" viewBox="0 0 24 24"><path fill="currentColor" d="m9.25 22l-.4-3.2q-.325-.125-.612-.3t-.563-.375L4.7 19.375l-2.75-4.75l2.575-1.95Q4.5 12.5 4.5 12.338v-.675q0-.163.025-.338L1.95 9.375l2.75-4.75l2.975 1.25q.275-.2.575-.375t.6-.3l.4-3.2h5.5l.4 3.2q.325.125.613.3t.562.375l2.975-1.25l2.75 4.75l-2.575 1.95q.025.175.025.338v.674q0 .163-.05.338l2.575 1.95l-2.75 4.75l-2.95-1.25q-.275.2-.575.375t-.6.3l-.4 3.2zM11 20h1.975l.35-2.65q.775-.2 1.438-.587t1.212-.938l2.475 1.025l.975-1.7l-2.15-1.625q.125-.35.175-.737T17.5 12t-.05-.787t-.175-.738l2.15-1.625l-.975-1.7l-2.475 1.05q-.55-.575-1.212-.962t-1.438-.588L13 4h-1.975l-.35 2.65q-.775.2-1.437.588t-1.213.937L5.55 7.15l-.975 1.7l2.15 1.6q-.125.375-.175.75t-.05.8q0 .4.05.775t.175.75l-2.15 1.625l.975 1.7l2.475-1.05q.55.575 1.213.963t1.437.587zm1.05-4.5q1.45 0 2.475-1.025T15.55 12t-1.025-2.475T12.05 8.5q-1.475 0-2.488 1.025T8.55 12t1.013 2.475T12.05 15.5M12 12"></path></svg>
                    <a href="./settings" class="w-full">Profile Settings</a>
                </div>
            </section>
        <?php } ?>
            
    </div>
    <div class=" hover:bg-slate-900 p-2 rounded-lg duration-200 transition-colors ">
        <div class="flex gap-1 justify-center items-center w-full">

            <svg xmlns="http://www.w3.org/2000/svg" width="1.4em" height="1.4em" viewBox="0 0 24 24">
                <path fill="currentColor"
                    d="m17 7l-1.41 1.41L18.17 11H8v2h10.17l-2.58 2.58L17 17l5-5M4 5h8V3H4c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h8v-2H4z" />
            </svg>
            <a href="/logout" class=" text-center">Logout</a>
        </div>

    </div>
</aside>