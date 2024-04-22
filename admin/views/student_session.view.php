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
        <div class="flex gap-3">
        <div class="flex items-center gap-2 mt-5">
            <a href="./sitin?id=<?php echo $student[0]['id']?>" class=" px-3 p-1 rounded-md bg-green-500">Sit-In</a>
        </div>  
        <div class="flex items-center gap-2 mt-5">
            <a href="./delete?id=<?php echo $student[0]['id']?>" class=" px-3 p-1 rounded-md bg-red-500">Delete</a>
        </div>
        </div>
      
        
    </div>

    <h1 class="text-lg border-t border-gray-600 pt-6">Session Records</h1>
         <table id="oktable" class=" mb-10 w-full text-sm text-left rtl:text-right text-white rounded-lg overflow-hidden">
                <thead class="text-xs bg-gradient-to-l to-slate-800 from-gray-900 uppercase rounded-md">
                    <tr>
                        <th class="border px-4 py-4 font-medium border-none  text-center">PURPOSE</th>
                        <th class="border px-4 py-4 font-medium border-none  text-center">LABORATORY</th>
                        <th class="border px-4 py-4 font-medium border-none  text-center">TIME IN</th>
                        <th class="border px-4 py-4 font-medium border-none  text-center">TIME OUT</th>
                    </tr>
                </thead>
                <tbody id="tbody" class="relative">
                    

                <?php 

            foreach ($students as $student) {
                   echo '<tr class="odd:bg-gray-700 bg-slate-800">
                                <td class="border px-4 py-4 border-none text-center text-xs md:text-sm text-white">'.$student['purpose'].'</td>
                                <td class="border px-4 py-4 border-none text-center text-xs md:text-sm text-white">'.$student['lab_name'].'</td>
                         
                                <td class="border px-4 py-4 border-none text-center text-xs md:text-sm text-white">'.date('F j, Y H:i:s', strtotime($student['time_in'])).'</td>
                                <td class="border px-4 py-4 border-none text-center text-xs md:text-sm text-white">'.date('F j, Y H:i:s', strtotime($student['time_out'])).'</td></tr>
                                ';
                }
            ?>

                </tbody>

            </table>
</div>