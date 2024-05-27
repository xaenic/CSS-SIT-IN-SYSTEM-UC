

<?php if(!$exist) : ?>
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<div class="flex flex-col items-center mt-10">
 <form class="bg-slate-800 flex flex-col gap-4  text-white  rounded-md p-5 w-[350px] " action="" method="post">
            
             <div class="text-sm flex flex-col justify-between gap-2 w-full">
                    <label class="shrink-0 flex-1">Purpose</label>
                    <select name="purpose" class="w-full bg-gray-900  px-3 p-2 rounded-md text-white outline-none">
                        <option value="Java">Java</option>
                        <option value="Python">Python</option>
                        <option value="C">C</option>
                        <option value="C++">C++</option>
                        <option value="C#">C#</option>
                        <option value="Others">Others</option>
                    </select>
                </div>
              <div class="text-sm flex flex-col justify-between gap-2 w-full">
                <label class="shrink-0 flex-1">Laboratory</label>
               <select name="laboratory" class="w-full bg-gray-900  px-3 p-2 rounded-md text-white outline-none">
                            <option value="Lab 524">Lab 524</option>
                            <option value="Lab 526">Lab 526</option>
                            <option value="Lab 528">Lab 528</option>
                            <option value="Lab 542">Lab 542</option>
                            <option value="Lab 543">Lab 543</option>
                        </select>
                
            </div>

            <div>
                <label class="shrink-0 flex-1">Select Date</label>
                 <input type="text" id="datetimepicker" placeholder="From Date" name="date" class="bg-gray-900 outline-none px-3 p-3 rounded-md form-input w-full">
            </div>
            <button class="col-span-2 w-full bg-gray-950 text-white p-2 rounded-md">Submit Reservation</button>
         </form>
</div>

 <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

 <script>

 flatpickr('#datetimepicker', {
                dateFormat: "F j, Y",
                onChange: function(selectedDates, dateStr, instance) {
                    const selectedDate = formatDate(dateStr);
                    let data = "";
                    students.forEach(student => {
                        const studentDate = student.time_in.split(' ')[0];
                        const time_in = new Date(student.time_in).toLocaleString('en-US', { month: 'long', day: '2-digit', year: 'numeric', hour: '2-digit', minute: '2-digit', second: '2-digit' });
                         const time_out = new Date(student.time_in).toLocaleString('en-US', { month: 'long', day: '2-digit', year: 'numeric', hour: '2-digit', minute: '2-digit', second: '2-digit' });
                        if(selectedDate == studentDate) {
                            const statusElement = student.time_out !== null 
                            ? `<span href="#" class="text-white bg-green-500 px-3 p-2 rounded-md">Finished</span>` 
                            : `<a href="./timeout.php?id=${student['id']}&s_id=${student['session_id']}" class="text-white bg-red-500 px-3 p-2 rounded-md">Logout</a>`;
                            data += studentRow(student,statusElement,time_in,time_out);
                        }
                       
                    })
                   if(data != "")
                   $("#tbody").html(data)
                   else 
                    $("#tbody").html('<span class="text-xl font-semibold text-purple-700 text-center w-full">No records found</span>')
                }
            
            });
</script>

<?php else : ?>

<h1 class=" text-xl text-sky-500 font-semibold mt-10">You can't make a reservation if you have pending reservations.</h1>
<?php endif;?>
<h1 class="text-white text-xl font-semibold my-5">Booking History</h1>
 <div class="overflow-x-auto">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 ">
                <thead class="text-xs bg-gradient-to-l to-slate-800 from-gray-900 uppercase ">
                    <tr>
                        <th class="border px-4 py-4 font-medium border-none text-slate-300 text-center font-bold">BOOKING ID
                        </th>
                     
                        <th class="border px-4 py-4 font-medium border-none text-slate-300 text-center">PURPOSE</th>
                        <th class="border px-4 py-4 font-medium border-none text-slate-300 text-center">Laboratory</th>
                        <th class="border px-4 py-4 font-medium border-none text-slate-300 text-center">Reservation Date</th>
                        <th class="border px-4 py-4 font-medium border-none text-slate-300 text-center">Status</th>
                    </tr>
                </thead>
                <tbody id="tbody" class="relative">
                    <?php foreach($result as $book) :?> 
                      <tr class="odd:bg-gray-700 bg-slate-800">
                         
                            <td class="border px-4 py-4 border-none text-center text-xs md:text-sm text-white"><?php echo $book['id'];?></td>
                            <td class="border px-4 py-4 border-none text-center text-xs md:text-sm text-white"><?php echo $book['purpose'];?></td>
                            <td class="border px-4 py-4 border-none text-center text-xs md:text-sm text-white"><?php echo $book['laboratory'];?></td>
                            <td class="border px-4 py-4 border-none text-center text-xs md:text-sm text-white"><?php echo $book['reservation_date'];?></td>
                            <td class="border px-4 py-4 border-none text-center text-xs md:text-sm text-white"><?php echo ($book['status'] == "Pending" ? '<a href="/cancel?id='.$book['id'].'" class="bg-red-500 p-2 rounded-md cursor-pointer">Cancel</a>' : $book['status']);?></td>
                            
                        </tr>
                        <?php endforeach;?>
                </tbody>

            </table>
        </div>