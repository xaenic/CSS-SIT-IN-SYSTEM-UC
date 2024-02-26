<?php
$dashboard = isset($_POST['role']) ? '/dashboard' : '/admin/dashboard';

?>
<aside class="w-64 bg-white p-5 rounded-xl shadow-lg m-2 text-gray-100 fixed top-0 left-0 bottom-0 overflow-y-auto">
    <div class="h-full text-black  ">
        <section id="widget_1" class="border-b border-gray-200 pb-1">
            <h1 class="text-center font-bold">SitHub</h1>
        </section>
        <section id="widget_2" class="mt-5 flex flex-col gap-5">
            <div class="flex gap-2 items-center bg-gray-900 hover:bg-slate-400 duration-200 transition-colors cursor-pointer text-white rounded-lg px-3 p-2  ">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M10 20v-6h4v6h5v-8h3L12 3L2 12h3v8z" />
                </svg>
                <a href="<?php echo $dashboard; ?>" class="">Dashboard</a>
            </div>
            <div class="flex gap-2 items-center duration-200 transition-colors cursor-pointer rounded-lg px-3 p-2  ">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M19 19H5V8h14m-3-7v2H8V1H6v2H5c-1.11 0-2 .89-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2h-1V1m-1 11h-5v5h5z" />
                </svg>
                <a href="/dashboard" class="">Reservation</a>
            </div>

            <div class="flex gap-2 items-center  duration-200 transition-colors cursor-pointer rounded-lg px-3 p-2  ">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M12 21q-3.45 0-6.012-2.287T3.05 13H5.1q.35 2.6 2.313 4.3T12 19q2.925 0 4.963-2.037T19 12q0-2.925-2.037-4.962T12 5q-1.725 0-3.225.8T6.25 8H9v2H3V4h2v2.35q1.275-1.6 3.113-2.475T12 3q1.875 0 3.513.713t2.85 1.924q1.212 1.213 1.925 2.85T21 12q0 1.875-.712 3.513t-1.925 2.85q-1.213 1.212-2.85 1.925T12 21m2.8-4.8L11 12.4V7h2v4.6l3.2 3.2z" />
                </svg>
                <a href="/dashboard" class="">Session History</a>
            </div>
        </section>
    </div>

</aside>