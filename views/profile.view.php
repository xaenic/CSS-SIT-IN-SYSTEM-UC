<div class="mt-10 flex flex-col gap-6 text-white">
    <div class="border-b pb-2 border-gray-700">
        <h1 class="text-xl">Profile Page</h1>
    </div>
    <div class="bg-slate-800 p-10 rounded-lg flex gap-4">
        <div>
            <a class="w-28 h-28 overflow-hidden items-center flex rounded-full hover:border border-gray-600 p-1"
                href="profile">
                <p
                    class="bg-slate-900 w-full h-full object-cover rounded-full text-white flex items-center justify-center text-3xl">
                    <?php echo $_SESSION['first_name'][0]; ?></p>
            </a>
        </div>
        <div class="flex  flex-col gap-4">
            <div class="flex gap-4">
                <div>
                    <label>First Name</label>
                    <div>
                        <input type="text" value="<?php echo $user['first_name']; ?>" disabled
                            class="bg-transparent text-slate-300" />
                    </div>
                </div>
                <div>
                    <label>Last Name</label>
                    <div>
                        <input type="text" value="<?php echo $user['last_name']; ?>" disabled
                            class="bg-transparent text-slate-300" />
                    </div>
                </div>
            </div>
            <div>
                <div>
                    <div>
                        <label>ID NO</label>
                        <div>
                            <input class="bg-transparent text-slate-300" type="text"
                                value="<?php echo $user['id_no'] ?>" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>