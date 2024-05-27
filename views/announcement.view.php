
<h1 class="mt-5 text-xl font-semibold text-white">Latest Announcements</h1>
<div class="grid lg:grid-cols-3 mt-5 gap-3">

        <?php foreach($announcements as $ann) :?>
        <div class="bg-slate-800 p-5 pt-2 w-full  rounded-md text-white">
            <div class="flex justify-between gap-10 items-center">
                <div class="flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" fill-rule="evenodd"><path d="M24 0v24H0V0zM12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035c-.01-.004-.019-.001-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427c-.002-.01-.009-.017-.017-.018m.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093c.012.004.023 0 .029-.008l.004-.014l-.034-.614c-.003-.012-.01-.02-.02-.022m-.715.002a.023.023 0 0 0-.027.006l-.006.014l-.034.614c0 .012.007.02.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01z"/><path fill="currentColor" d="M15.992 3.013C17.326 2.236 19 3.197 19 4.741V8a3 3 0 1 1 0 6v3c0 1.648-1.881 2.589-3.2 1.6l-2.06-1.546A8.658 8.658 0 0 0 10 15.446v2.844a2.71 2.71 0 0 1-5.316.744l-1.57-5.496a4.7 4.7 0 0 1 3.326-7.73l3.018-.168a9.344 9.344 0 0 0 4.19-1.259zM5.634 15.078l.973 3.407A.71.71 0 0 0 8 18.29v-3.01l-1.56-.087a4.723 4.723 0 0 1-.806-.115M20 11a1 1 0 0 0-1-1v2a1 1 0 0 0 1-1"/></g></svg>
                    <h1><?php echo $ann['title'];?></h1>
                   
                </div>
                <div class="flex flex-col">
                    <small>Admin</small>
                    <small class="text-slate-300">May 10, 2023</small>
                </div>
            </div>
            <div class="border-t border-slate-600 mt-2">
                <h1 class="text-sm mt-2 ">Message</h1>
                <p class="text-xs mt-2 text-slate-300"><?php echo $ann['content'];?></p>
            </div>
       </div>
            <?php endforeach;?>

 
</div>

