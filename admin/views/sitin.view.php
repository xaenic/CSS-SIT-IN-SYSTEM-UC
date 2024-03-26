<div class="mt-10 flex flex-col gap-6">
    <div class="border-b pb-2 border-gray-700">
        <h1 class="text-xl">Student Sit-In</h1>
    </div>
    <main>
        <section>
            <?php if($exist ) {?>
            
            <div class="bg-slate-800 p-10 rounded-lg flex flex-col gap-3">
                <h1 class="font-semibold ">Status: <span class="text-sky-400">Already Occupying</span></h1>
                <div>
                    <label >Name:   <span class="text-slate-300"><?php echo $student[0]['first_name'] ?> <?php echo $student[0]['last_name'] ?></span></label>
                </div>
                <div>
                    <label >IDNO:   <span class="text-slate-300"><?php echo $student[0]['id_no'] ?></span></label>
                </div>
                <div>
                    <label >Available Sessions:   <span class="text-slate-300"><?php echo $student[0]['no_sessions'] ?></span></label>
                </div>
                <hr class="text-slate-600"/>
                <h1 class="mt-3 text-xl font-semibold">Sit-In Details</h1>
                
                <div>
                    <label >Purpose:   <span class="text-slate-300"><?php echo $result['purpose'] ?></span></label>
                </div>
                <div>
                    <label >Laboratory:   <span class="text-slate-300"><?php echo $result['lab_name'] ?></span></label>
                </div>
                <div>
                    <label class="italic" >Started At:   <span class="text-slate-300"><?php echo $result['time_in'] ?></span></label>
                </div>
                 <div class="mt-4">
                     <a href="./timeout?id=<?php echo $student[0]['id'];?>&session_id=<?php echo $result['session_id']?>" class="rounded-md cursor-pointer bg-red-500 px-3 p-1">Logout</a>
                 </div>
            </div>

            <?php } else { ?>
            <form method="post" action="" class="bg-slate-800 p-10 rounded-lg flex flex-col gap-3">
                <div class="flex flex-col gap-1">
                    
                    <label class="text-slate-300">IDNO</label>
                  <input type="hidden" name="id" Disabled value="<?php echo $student[0]['id']?>"/>
                    <div>
                            <input type="text" name="id_no" Disabled value="<?php echo $student[0]['id_no']?>" class="bg-slate-700 px-3 rounded-md outline-none p-1"/>
                    </div>
                </div>
               <div class="flex flex-col gap-2">
                    <label class="text-slate-300">Purpose</label>
                    <select name="purpose" class="bg-slate-700 p-2 rounded-md">
                        <option value="Java">Java</option>
                        <option value="Python">Python</option>
                        <option value="C">C</option>
                        <option value="C++">C++</option>
                        <option value="C#">C#</option>
                        <option value="Others">Others</option>
                    </select>
               </div>
                <div class="flex flex-col gap-2">
                    <label class="text-slate-300">Laboratory</label>
                    <select name="laboratory" class="bg-slate-700 p-2 rounded-md">
                        <option value="Lab 524">Lab 524</option>
                        <option value="Lab 526">Lab 526</option>
                        <option value="Lab 528">Lab 528</option>
                        <option value="Lab 542">Lab 542</option>
                        <option value="Lab 543">Lab 543</option>
                    </select>
               </div>
               <div class="flex flex-col gap-1">
                    <label class="text-slate-300">REMAINING SESSIONS</label>
                    <div>
                        <input type="text"  Disabled value="<?php echo $student[0]['no_sessions'];?>" class="px-3 bg-slate-700 rounded-md outline-none p-1"/>
                    </div>
                </div>
                  <div class="flex flex-col gap-1 items-start">
                    <input type="submit" value="Start" class="rounded-md cursor-pointer bg-green-500 px-3 p-1"/>
                </div>
            </form>
            <?php }?>
        </section>
    </main>
</div>