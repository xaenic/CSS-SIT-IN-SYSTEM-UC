<div class="bg-gradient-to-l to-slate-800 from-gray-900 rounded-xl p-2 flex justify-between px-5 items-center">

    <div>
        <!-- <div class="border border-gray-200  gap-1 rounded-xl flex items-center pl-2 w-96">
            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                <path fill="currentColor" d="M9.5 3A6.5 6.5 0 0 1 16 9.5c0 1.61-.59 3.09-1.56 4.23l.27.27h.79l5 5l-1.5 1.5l-5-5v-.79l-.27-.27A6.516 6.516 0 0 1 9.5 16A6.5 6.5 0 0 1 3 9.5A6.5 6.5 0 0 1 9.5 3m0 2C7 5 5 7 5 9.5S7 14 9.5 14S14 12 14 9.5S12 5 9.5 5" />
            </svg>
            <input type="text" placeholder="Search..." class="w-full px-3 p-2 text-sm outline-none rounded-xl border-none rounded-lg" />
        </div> -->
        <div class="flex gap-2 items-center">
            <?php
            if (isset($_SESSION['role'])) {
                echo '<a href="/admin/dashboard.php" class="text-white">Dashboard</a>';
            } else echo '<a href="/dashboard.php" class="text-white">Dashboard</a>';



            if ($page_title != 'Dashboard') {
                echo '<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" class="text-white" viewBox="0 0 16 16">
                <path fill="currentColor" d="m5.157 13.069l4.611-4.685a.546.546 0 0 0 0-.768L5.158 2.93a.552.552 0 0 1 0-.771a.53.53 0 0 1 .759 0l4.61 4.684a1.65 1.65 0 0 1 0 2.312l-4.61 4.684a.53.53 0 0 1-.76 0a.552.552 0 0 1 0-.771" />
            </svg>
            <span class=" text-sm text-slate-300">' . $page_title . '</span>';
            }
            ?>



        </div>
    </div>
    <div>
        <a href="/profile">
            <img src="https://yt3.googleusercontent.com/-CFTJHU7fEWb7BYEb6Jh9gm1EpetvVGQqtof0Rbh-VQRIznYYKJxCaqv_9HeBcmJmIsp2vOO9JU=s900-c-k-c0x00ffffff-no-rj" class="w-10 h-10 object-cover rounded-full" />
        </a>
    </div>
</div>