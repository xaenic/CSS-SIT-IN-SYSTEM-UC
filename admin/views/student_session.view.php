<div class="mt-10 flex flex-col gap-6">
    <div class="border-b pb-2 border-gray-700">
        <h1 class="text-xl">Student Profile</h1>
    </div>
    <h1 class="text-red-400"><?php echo $error; ?></h1>

    
    <div>
        <div class="flex items-center gap-2">
            <span class="text-slate-300">Name: </span>
            <h1><?php echo $student[0]['first_name'] ?></h1>
             <h1><?php echo $student[0]['last_name'] ?></h1>
        </div>
         <div class="flex items-center gap-2">
            <span class="text-slate-300">ID NO: </span>
            <h1><?php echo $student[0]['id_no'] ?></h1>
        </div>
         <div class="flex items-center gap-2">
            <span class="text-slate-300">EMAIL: </span>
            <h1><?php echo $student[0]['email'] ?></h1>
        </div>
         <div class="flex items-center gap-2">
            <span class="text-slate-300">COURSE: </span>
            <h1><?php echo $student[0]['course'] ?></h1>
        </div>
        <div class="flex items-center gap-2">
            <span class="text-slate-300">YEAR: </span>
            <h1><?php echo $student[0]['year'] ?></h1>
        </div>
        <div class="flex items-center gap-2">
            <span class="text-slate-300">REMAINING SESSIONS: </span>
            <h1><?php echo $student[0]['no_sessions'] ?></h1>
        </div>
        <div class="flex items-center gap-2">
            <span class="text-slate-300">Disabled: </span>
           <h1><?php echo ($student[0]['active'] == 1 ? 'False' : 'True'); ?></h1>
        </div>
    </div>

    <h1 class="text-lg border-t border-gray-600 pt-6">Session Records</h1>
    <div class="bg-slate-800   rounded-lg flex flex-col p-5">

      

    </div>
</div>