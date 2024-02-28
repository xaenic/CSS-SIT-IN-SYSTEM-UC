<div class="bg-gradient-to-l  from-slate-700 to-slate-800 rounded-xl p-2 flex justify-between px-5 items-center">
    <div>
        <div class="flex gap-2 items-center text-white">


            <svg id="showSide" class="cursor-pointer lg:hidden" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                <path fill="currentColor" d="M2 5.995c0-.55.446-.995.995-.995h8.01a.995.995 0 0 1 0 1.99h-8.01A.995.995 0 0 1 2 5.995M2 12c0-.55.446-.995.995-.995h18.01a.995.995 0 1 1 0 1.99H2.995A.995.995 0 0 1 2 12m.995 5.01a.995.995 0 0 0 0 1.99h12.01a.995.995 0 0 0 0-1.99z" />
            </svg>
            <?php
            if (isset($_SESSION['role'])) {
                echo '<a href="/admin/dashboard.php" class="text-white hover:text-blue-600">Dashboard</a>';
            } else echo '<a href="/dashboard.php" class="text-white hover:text-blue-600">Dashboard</a>';



            if ($page_title != 'Dashboard') {


                if ($parent[0] != "") {
                    echo '<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" class="text-white" viewBox="0 0 16 16">
                <path fill="currentColor" d="m5.157 13.069l4.611-4.685a.546.546 0 0 0 0-.768L5.158 2.93a.552.552 0 0 1 0-.771a.53.53 0 0 1 .759 0l4.61 4.684a1.65 1.65 0 0 1 0 2.312l-4.61 4.684a.53.53 0 0 1-.76 0a.552.552 0 0 1 0-.771" />
            </svg>
            <a  href="' . $parent[0] . '" class=" text-sm text-white hover:text-blue-600">' . $parent[1] . '</a>';
                }

                echo '<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" class="text-white" viewBox="0 0 16 16">
                <path fill="currentColor" d="m5.157 13.069l4.611-4.685a.546.546 0 0 0 0-.768L5.158 2.93a.552.552 0 0 1 0-.771a.53.53 0 0 1 .759 0l4.61 4.684a1.65 1.65 0 0 1 0 2.312l-4.61 4.684a.53.53 0 0 1-.76 0a.552.552 0 0 1 0-.771" />
            </svg>
            <span class=" text-sm text-slate-300">' . $page_title . '</span>';
            }
            ?>
        </div>
    </div>
    <a class="w-10 h-10 overflow-hidden items-center flex rounded-full hover:border border-gray-600 p-1" href="profile">
        <p class="bg-slate-900 w-full h-full object-cover rounded-full text-white flex items-center justify-center text-md"><?php echo $_SESSION['first_name'][0]; ?></p>
    </a>
</div>