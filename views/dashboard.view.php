
 <div class="flex flex-wrap  items-center  mt-8 gap-4">
     <div class="bg-slate-800  text-white p-5 w-full lg:w-72 rounded-md flex flex-col gap-3">
         <div class="flex justify-between items-center">
             <h1>Remaining Sessions</h1>
             <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" width="1em" height="1em" viewBox="0 0 256 256">
                 <path fill="currentColor" d="m226.53 56.41l-96-32a8 8 0 0 0-5.06 0l-96 32A8 8 0 0 0 24 64v80a8 8 0 0 0 16 0V75.1l33.59 11.19a64 64 0 0 0 20.65 88.05c-18 7.06-33.56 19.83-44.94 37.29a8 8 0 1 0 13.4 8.74C77.77 197.25 101.57 184 128 184s50.23 13.25 65.3 36.37a8 8 0 0 0 13.4-8.74c-11.38-17.46-27-30.23-44.94-37.29a64 64 0 0 0 20.65-88l44.12-14.7a8 8 0 0 0 0-15.18ZM176 120a48 48 0 1 1-86.65-28.45l36.12 12a8 8 0 0 0 5.06 0l36.12-12A47.89 47.89 0 0 1 176 120" />
             </svg>
         </div>
         <div class="flex flex-col gap-3">
             <h1 class="text-2xl font-semibold"><?php echo $user['no_sessions']; ?></h1>
         </div>
     </div>
 </div>

 <h1 class="text-xl text-white my-5 ">Latest Announcements</h1>
<div class="flex flex-wrap gap-4">
    <?php foreach($announcements as $announcement):?>
    <div class="min-w-[400px] min-h-[220px] text-sm text-white  p-4 rounded-md bg-slate-800 overflow-hidden ">
        <div class="flex justify-between items-center text-sm"> 
            <h1><?php echo $announcement['title'];?></h1>
            <span class="text-slate-300">Admin</span>
        </div>
        <div class="mt-2 h-full overflow-hidden">
          
            <div class=" p-2 bg-slate-700 rounded-md h-full">
                <?php echo $announcement['content'];?>
            </div>
        </div>
        <div class="flex text-white">
            <p><?php echo $announcement['date_created'];?></p>
        </div>
    </div>
    <?php endforeach; ?>
</div>