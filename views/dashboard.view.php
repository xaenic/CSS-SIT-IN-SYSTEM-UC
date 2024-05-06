
<div class="grid lg:grid-cols-4 mt-10 gap-3">
    <div class="lg:col-span-3 flex flex-wrap gap-3">
       <div class="bg-slate-800 flex-col flex justify-center  p-5 w-full lg:w-[430px] rounded-md text-white">
            <div class="flex justify-between gap-10 items-center">
                <div class="flex  flex-col items-start gap-2">
                    <h1>Hello <?php echo $_SESSION['first_name'];?></h1>
                    <p class="text-sm">You have <?php echo $user['no_sessions'];?> sessions available</p>
                    <p class="text-slate-300 text-xs">Good to see you again!</p>
                </div>
                <div class="flex flex-col relative">
                   <img class="h-20" src="../assets/images/Illustration.png"/>
                </div>
            </div>
       </div>
        <div class="bg-slate-800 p-5 pt-2 w-full lg:w-[480px] rounded-md text-white">
            <div class="flex justify-between gap-10 items-center">
                <div class="flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" fill-rule="evenodd"><path d="M24 0v24H0V0zM12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035c-.01-.004-.019-.001-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427c-.002-.01-.009-.017-.017-.018m.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093c.012.004.023 0 .029-.008l.004-.014l-.034-.614c-.003-.012-.01-.02-.02-.022m-.715.002a.023.023 0 0 0-.027.006l-.006.014l-.034.614c0 .012.007.02.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01z"/><path fill="currentColor" d="M15.992 3.013C17.326 2.236 19 3.197 19 4.741V8a3 3 0 1 1 0 6v3c0 1.648-1.881 2.589-3.2 1.6l-2.06-1.546A8.658 8.658 0 0 0 10 15.446v2.844a2.71 2.71 0 0 1-5.316.744l-1.57-5.496a4.7 4.7 0 0 1 3.326-7.73l3.018-.168a9.344 9.344 0 0 0 4.19-1.259zM5.634 15.078l.973 3.407A.71.71 0 0 0 8 18.29v-3.01l-1.56-.087a4.723 4.723 0 0 1-.806-.115M20 11a1 1 0 0 0-1-1v2a1 1 0 0 0 1-1"/></g></svg>
                    <h1>Latest Announcement</h1>
                </div>
                <div class="flex flex-col">
                    <small>Niel Basabe</small>
                    <small class="text-slate-300">May 10, 2023</small>
                </div>
            </div>
            <div class="border-t border-slate-600 mt-2">
                <h1 class="text-sm mt-2 ">Message</h1>
                <p class="text-xs mt-2 text-slate-300">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquam velit unde dolores qui magni ex, tenetur quas? Voluptatum totam ipsum a, ab voluptates fugiat modi, explicabo odit id, aliquam ipsam?</p>
            </div>
       </div>
    </div>
    <!-- <div class="w-full">
        <div class="rounded-md bg-slate-800 p-5 w-full">
            <h1 class="text-white mb-5">Recent Sessions History</h1>
            <div class="flex flex-col gap-3">
            <?php foreach($sessions as $session) : ?>
            <div class="flex  gap-3 text-sm items-center">
                <div class=" p-4 rounded-full bg-gray-700">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 36 36"><path fill="#ccd6dd" d="M34 29.096c-.417-.963-.896-2.008-2-2.008h-1c1.104 0 2-.899 2-2.008V8.008A2.004 2.004 0 0 0 31 6H5c-1.104 0-2 .899-2 2.008V25.08c0 1.109.896 2.008 2 2.008H4c-1.104 0-1.667 1.004-2 2.008l-2 4.895C0 35.101.896 36 2 36h32c1.104 0 2-.899 2-2.008z"/><path fill="#9aaab4" d="m.008 34.075l.006.057l.17.692A1.998 1.998 0 0 0 2 36h32a2 2 0 0 0 1.992-1.925z"/><path fill="#5dadec" d="M31 24.075c0 .555-.447 1.004-1 1.004H6c-.552 0-1-.449-1-1.004V9.013c0-.555.448-1.004 1-1.004h24c.553 0 1 .45 1 1.004z"/><path fill="#aebbc1" d="m32.906 31.042l-.76-2.175c-.239-.46-.635-.837-1.188-.837H5.11c-.552 0-.906.408-1.156 1.036l-.688 1.977c-.219.596.448 1.004 1 1.004h7.578s.937-.047 1.103-.608c.192-.648.415-1.624.463-1.796c.074-.264.388-.531.856-.531h8.578c.5 0 .746.253.811.566c.042.204.312 1.141.438 1.782c.111.571 1.221.586 1.221.586h6.594c.551 0 1.217-.471.998-1.004"/><path fill="#9aaab4" d="M22.375 33.113h-7.781c-.375 0-.538-.343-.484-.675c.054-.331.359-1.793.383-1.963c.023-.171.274-.375.524-.375h7.015c.297 0 .49.163.55.489c.059.327.302 1.641.321 1.941c.019.301-.169.583-.528.583"/></svg>
                </div>
                <div class="text-slate-100 w-full">
                    <p><?php echo $session['lab_name']; ?></p>
                    <div class="flex justify-between w-full">
                         <p><?php echo $session['purpose']; ?></p>
                         <p class="text-right text-xs text-slate-300"><?php echo $session['time_in']; ?></p>
                    </div>
                   
                   
                </div>
            </div>
            <?php endforeach; ?>
            </div>

            <div class="flex justify-center text-xs text-sky-400 mt-3">
                <a href="./history">View All</a>
            </div>
        </div>
    </div> -->
</div>
 <!-- <div class="flex flex-wrap  items-center  mt-8 gap-4">
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
 </div> -->

 <!-- <h1 class="text-xl text-white my-5 ">Latest Announcements</h1> -->
<!-- <div class="flex flex-wrap gap-4">
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
</div> -->