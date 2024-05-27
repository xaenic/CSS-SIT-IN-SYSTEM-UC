<?php
$dashboard = isset($_SESSION['role']) ? '/dashboard' : '/admin/dashboard';

?>
<div id="reportModal" class="hidden   justify-center bg-opacity-50 w-full h-full bg-black z-50 absolute p-10 bg-slate-800 mr-5">
        <div class="mt-24">
            <form class="flex-col gap-3 flex w-96 bg-white rounded-md p-5  gap-4  text-white " action="./report" method="post">
                <div class="text-sm flex flex-col justify-between gap-2 text-black">
                    <div class="flex justify-between ">
                        <label>Write your feedback</label>
                        <div id="closeReport"class="cursor-pointer text-gray-700"><svg xmlns="http://www.w3.org/2000/svg" width="1.4em" height="1.4em" viewBox="0 0 24 24"><g fill="none" fill-rule="evenodd"><path d="M24 0v24H0V0zM12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035c-.01-.004-.019-.001-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427c-.002-.01-.009-.017-.017-.018m.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093c.012.004.023 0 .029-.008l.004-.014l-.034-.614c-.003-.012-.01-.02-.02-.022m-.715.002a.023.023 0 0 0-.027.006l-.006.014l-.034.614c0 .012.007.02.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01z"/><path fill="currentColor" d="m12 14.122l5.303 5.303a1.5 1.5 0 0 0 2.122-2.122L14.12 12l5.304-5.303a1.5 1.5 0 1 0-2.122-2.121L12 9.879L6.697 4.576a1.5 1.5 0 1 0-2.122 2.12L9.88 12l-5.304 5.304a1.5 1.5 0 1 0 2.122 2.12z"/></g></svg></div>
                    
                    </div>
                    <div class="bg-slate-200 text-black rounded-md px-3 p-2 text-sm">
                    <textarea id="feedback" name="feedback" rows="4" cols="50" class="bg-transparent outline-none"></textarea>
                    </div>
                </div>
                <button class="col-span-2 w-full bg-gray-900 text-white p-2 rounded-md">Report</button>
            </form>
        </div>
    </div>
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
                <div class="flex gap-2 items-center hover:bg-slate-900 <?php if ($page_title == 'Announcements' || $parent[0] == 'Announcements') { echo 'bg-gray-900'; } ?> cursor-pointer text-white rounded-lg px-3 p-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M20.664 3.478L8 8v7l.748.267l-1.127 2.254a1.999 1.999 0 0 0 1.156 2.792l4.084 1.361a2.015 2.015 0 0 0 2.421-1.003l1.303-2.606l4.079 1.457A1 1 0 0 0 22 18.581V4.419a1 1 0 0 0-1.336-.941m-7.171 16.299L9.41 18.416l1.235-2.471l4.042 1.444zM4 15h2V8H4c-1.103 0-2 .897-2 2v3c0 1.103.897 2 2 2"></path></svg>
                    <a href="./announcement" class="w-full">Announcements</a>
                </div>
            </section>
              <section id="widget_2" class="mt-5 flex flex-col gap-5">
                <div class="flex gap-2 items-center hover:bg-slate-900 <?php if ($page_title == 'FeedBacks' || $parent[0] == 'Reservations') { echo 'bg-gray-900'; } ?> cursor-pointer text-white rounded-lg px-3 p-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M2 22V4q0-.825.588-1.412T4 2h16q.825 0 1.413.588T22 4v12q0 .825-.587 1.413T20 18H6zm10-7q.425 0 .713-.288T13 14t-.288-.712T12 13t-.712.288T11 14t.288.713T12 15m-1-4h2V5h-2z"/></svg>
                    <a href="./feedback" class="w-full">FeedBacks</a>
                </div>
            </section>
             <section id="widget_2" class="mt-5 flex flex-col gap-5">
                <div class="flex gap-2 items-center hover:bg-slate-900 <?php if ($page_title == 'View Records') { echo 'bg-gray-900'; } ?> cursor-pointer text-white rounded-lg px-3 p-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 16 16"><path fill="currentColor" d="M4 9h4v2H4z"></path><path fill="currentColor" d="M16 2h-1V0H5v2H3v1.25L2.4 4H1v1.75L0 7v9h12l4-5zM2 5h8v2H2zm9 10H1V8h10zm1-8h-1V4H4V3h8zm2-2.5l-1 1.25V2H6V1h8z"></path></svg>
                    <a href="./records" class="w-full">View Records</a>
                </div>
            </section>
             <section id="widget_2" class="mt-5 flex flex-col gap-5">
                <div class="flex gap-2 items-center hover:bg-slate-900 <?php if ($page_title == 'Reservations' || $parent[0] == 'Reservations') { echo 'bg-gray-900'; } ?> cursor-pointer text-white rounded-lg px-3 p-2">
                     <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M13 15v4h3v2H8v-2h3v-4H4a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1zM8 8v2h8V8z"/></svg>x
                    <a href="./reservations" class="w-full">Reservations</a>
                </div>
            </section>
             <section id="widget_2" class="mt-5 flex flex-col gap-5">
                <div class="flex gap-2 items-center hover:bg-slate-900 <?php if ($page_title == 'Generate Report') { echo 'bg-gray-900'; } ?> cursor-pointer text-white rounded-lg px-3 p-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="m20 8l-6-6H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2zM9 19H7v-9h2zm4 0h-2v-6h2zm4 0h-2v-3h2zM14 9h-1V4l5 5z"></path></svg>
                    <a href="./generate" class="w-full">Generate Report</a>
                </div>
            </section>
              <section id="widget_2" class="mt-5 flex flex-col gap-5">
                <div class="flex gap-2 items-center hover:bg-slate-900 <?php if ($page_title == 'Daily Analytics') { echo 'bg-gray-900'; } ?> cursor-pointer text-white rounded-lg px-3 p-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="m20 8l-6-6H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2zM9 19H7v-9h2zm4 0h-2v-6h2zm4 0h-2v-3h2zM14 9h-1V4l5 5z"></path></svg>
                    <a href="./daily" class="w-full">Daily Analytics</a>
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
                <div class="flex gap-2 items-center hover:bg-slate-900 <?php if ($page_title == 'Reserve' || $parent[0] == 'Reserve') { echo 'bg-gray-900'; } ?> cursor-pointer text-white rounded-lg px-3 p-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M13 15v4h3v2H8v-2h3v-4H4a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1zM8 8v2h8V8z"/></svg>
                    <a href="./reserve" class="w-full">Reservation</a>
                </div>
            </section>
            <section id="widget_2" class="mt-5 flex flex-col gap-5">
                <div class="flex gap-2 items-center hover:bg-slate-900 <?php if ($page_title == 'Announcements' || $parent[0] == 'Students') { echo 'bg-gray-900'; } ?> cursor-pointer text-white rounded-lg px-3 p-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M20.664 3.478L8 8v7l.748.267l-1.127 2.254a1.999 1.999 0 0 0 1.156 2.792l4.084 1.361a2.015 2.015 0 0 0 2.421-1.003l1.303-2.606l4.079 1.457A1 1 0 0 0 22 18.581V4.419a1 1 0 0 0-1.336-.941m-7.171 16.299L9.41 18.416l1.235-2.471l4.042 1.444zM4 15h2V8H4c-1.103 0-2 .897-2 2v3c0 1.103.897 2 2 2"></path></svg>
                    <a href="./announcement" class="w-full">Announcements</a>
                </div>
            </section>
            <section id="widget_2" class="mt-5 flex flex-col gap-5">
                <div class="flex gap-2 items-center hover:bg-slate-900 <?php if ($page_title == 'Profile Settings') { echo 'bg-gray-900'; } ?> cursor-pointer text-white rounded-lg px-3 p-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1.4em" height="1.4em" viewBox="0 0 24 24"><path fill="currentColor" d="m9.25 22l-.4-3.2q-.325-.125-.612-.3t-.563-.375L4.7 19.375l-2.75-4.75l2.575-1.95Q4.5 12.5 4.5 12.338v-.675q0-.163.025-.338L1.95 9.375l2.75-4.75l2.975 1.25q.275-.2.575-.375t.6-.3l.4-3.2h5.5l.4 3.2q.325.125.613.3t.562.375l2.975-1.25l2.75 4.75l-2.575 1.95q.025.175.025.338v.674q0 .163-.05.338l2.575 1.95l-2.75 4.75l-2.95-1.25q-.275.2-.575.375t-.6.3l-.4 3.2zM11 20h1.975l.35-2.65q.775-.2 1.438-.587t1.212-.938l2.475 1.025l.975-1.7l-2.15-1.625q.125-.35.175-.737T17.5 12t-.05-.787t-.175-.738l2.15-1.625l-.975-1.7l-2.475 1.05q-.55-.575-1.212-.962t-1.438-.588L13 4h-1.975l-.35 2.65q-.775.2-1.437.588t-1.213.937L5.55 7.15l-.975 1.7l2.15 1.6q-.125.375-.175.75t-.05.8q0 .4.05.775t.175.75l-2.15 1.625l.975 1.7l2.475-1.05q.55.575 1.213.963t1.437.587zm1.05-4.5q1.45 0 2.475-1.025T15.55 12t-1.025-2.475T12.05 8.5q-1.475 0-2.488 1.025T8.55 12t1.013 2.475T12.05 15.5M12 12"></path></svg>
                    <a href="./settings" class="w-full">Profile Settings</a>
                </div>
            </section>
            <section id="report"id="widget_2" class="mt-5 flex flex-col gap-5">
                <div class="flex gap-2 items-center hover:bg-slate-900 <?php if ($page_title == 'Report') { echo 'bg-gray-900'; } ?> cursor-pointer text-white rounded-lg px-3 p-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1.4em" height="1.4em" viewBox="0 0 24 24"><path fill="currentColor" d="M12 17q.425 0 .713-.288T13 16t-.288-.712T12 15t-.712.288T11 16t.288.713T12 17m-1-4h2V7h-2zm-2.75 8L3 15.75v-7.5L8.25 3h7.5L21 8.25v7.5L15.75 21z"/></svg>
                    <span href="" class="w-full">Report</span>
                </div>
            </section>
             <section id="report"id="widget_2" class="mt-5 flex flex-col gap-5">
                <div class="flex gap-2 items-center hover:bg-slate-900 <?php if ($page_title == 'Rules') { echo 'bg-gray-900'; } ?> cursor-pointer text-white rounded-lg px-3 p-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1.4em" height="1.4em" viewBox="0 0 32 32"><path fill="none" d="M9 16h14v2H9zm0-6h14v2H9z"/><path fill="currentColor" d="M26 2H6a2 2 0 0 0-2 2v13a10.98 10.98 0 0 0 5.824 9.707L16 30l6.176-3.293A10.98 10.98 0 0 0 28 17V4a2 2 0 0 0-2-2m-3 16H9v-2h14Zm0-6H9v-2h14Z"/></svg>
                    <a href="./rules" class="w-full">Rules</a>
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
<script>

      $(document).ready(function() {
         <?php if(isset($_SESSION['flash_message'])) : ?> 
            let toast =  Toastify({
                        text: "<?php echo $_SESSION['flash_message'];?>",
                        gravity: "top",
                        className: "info rounded-xl ",
                        style: {
                            background: "linear-gradient(to right, #8E0E00, #1F1C18)",
                        },
                         duration: 1000,
            })

           
            toast.showToast();
            <?php unset($_SESSION['flash_message']);endif;?>
            const modal = $("#reportModal");
            $("#report").click(function() {
                modal.removeClass('hidden');
                modal.addClass('flex');
            })
            $("#closeReport").click(function() {
                modal.addClass('hidden');
                modal.removeClass('flex');
            })

         });
</script>