<div class="mt-10 flex flex-col relative gap-6">
    <div class="absolute -z-10 top-0 left-0 right-0 bottom-0 flex items-center justify-center"> 
        <div id="modal" class="hidden bg-gradient-to-t from-slate-900 to-gray-900 p-10 rounded-lg z-10 flex flex-col gap-4">
                <h1>Do you really want to delete?</h1>
                <div class="flex items-center justify-center gap-2">
                     <a href="" class="bg-green-500  cursor-pointer hover:bg-green-700 duration-200 transition-colors p-1 px-3 rounded-md">Yes</a>
                     <span class="bg-red-500 cursor-pointer hover:bg-red-700 duration-200 transition-colors  p-1 px-3 rounded-md">Cancel</span>
                </div>
        </div>
    </div>
    <div class="border-b pb-2 border-gray-700">
        <h1 class="text-xl">Sit In Records</h1>
    </div>

    <div class="bg-slate-800   rounded-lg flex flex-col ">
        <div class="overflow-x-auto flex-wrap  gap-3 flex items-center justify-between p-5 border-b border-gray-700">
            <div class="flex items-center gap-2">
                <h1>Show</h1>
                <select class="bg-gray-950 rounded-md text-sm p-1">
                    <option>
                        10
                    </option>
                    <option>
                        20
                    </option>
                </select>
                <h1>Entries</h1>
            </div>
            <div class="flex gap-3 items-center">
                <label>Search</label>
                <div class="bg-gray-950 p-2 -1.312T14 px-2 rounded-md flex gap-1 items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="text-slate-300" width="1em" height="1em"
                        viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="m19.6 21l-6.3-6.3q-.75.6-1.725.95T9.5 16q-2.725 0-4.612-1.888T3 9.5q0-2.725 1.888-4.612T9.5 3q2.725 0 4.613 1.888T16 9.5q0 1.1-.35 2.075T14.7 13.3l6.3 6.3zM9.5 14q1.875 0 3.188-1.312T14 9.5q0-1.875-1.312-3.187T9.5 5Q7.625 5 6.313 6.313T5 9.5q0 1.875 1.313 3.188T9.5 14" />
                    </svg>
                    <input id="search" type="text" placeholder="Search students..."
                        class="text-sm bg-transparent outline-none border-none" />
                </div>
            </div>

        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 ">
                <thead class="text-xs bg-gradient-to-l to-slate-800 from-gray-900 uppercase ">
                    <tr>
                        <th class="border px-4 py-4 font-medium border-none text-slate-300 text-center font-bold">ID NO
                        </th>
                        <th class="border px-4 py-4 font-medium border-none text-slate-300 text-center">NAME</th>
                        <th class="border px-4 py-4 font-medium border-none text-slate-300 text-center">PURPOSE</th>
                        <th class="border px-4 py-4 font-medium border-none text-slate-300 text-center">Laboratory</th>
                        <th class="border px-4 py-4 font-medium border-none text-slate-300 text-center">Time In</th>
                        <th class="border px-4 py-4 font-medium border-none text-slate-300 text-center">Time Out</th>
                        <th class="border px-4 py-4 font-medium border-none text-slate-300 text-center">Operation</th>
                    </tr>
                </thead>
                <tbody id="tbody" class="relative">

                 




                </tbody>

            </table>
            <div class="p-5 flex justify-between text-sm mt-5 border-t border-gray-600">
                <div>
                    Showing 1 to 1 of <?php echo count($students); ?> entries
                </div>
                <div>
                    prev next
                </div>
            </div>
        </div>

    </div>
</div>

<script>


     function append_students(students, term = "") {
        term = term.toLowerCase();
        console.log(term)
        let d_content = "";
        students.forEach(student => {
                   
                    if(term == "" ||  (student.id_no.toString().toLowerCase().includes(term) || student.first_name.toString().toLowerCase().includes(term) || student.last_name.toString().toLowerCase().includes(term) || student.email.toString().toLowerCase().includes(term))) {
                        d_content += `<tr class="odd:bg-gray-700 bg-slate-800">
                            <td class="border px-4 py-4 border-none text-center text-xs md:text-sm text-white">${student.id_no}</td>
                            <td class="border px-4 py-4 border-none text-center text-xs md:text-sm text-white">${student.first_name} ${student.last_name}</td>
                            <td class="border px-4 py-4 border-none text-center text-xs md:text-sm text-white">${student.purpose}</td>
                            <td class="border px-4 py-4 border-none text-center text-xs md:text-sm text-white">${student.lab_name}</td>
                            <td class="border px-4 py-4 border-none text-center text-xs md:text-sm text-white">${student.time_in !== null ? student.time_in : 'None'}</td>
                            <td class="border px-4 py-4 border-none text-center text-xs md:text-sm text-white">${student.time_out !== null ? student.time_out : 'Ongoing'}</td>
                            <td class="border px-4 py-4 border-none text-center text-xs md:text-sm text-white"> 
                            ${student.time_out !== null ? '<span>Finished</span>' : student.time_in == null ?`<a href="./timein?id=${student.id}&session_id=${student.session_id}" class="rounded-md cursor-pointer bg-green-500 px-3 p-1">Time In</a>`: `<a href="./timeout?id=${student.id}&session_id=${student.session_id}" class="rounded-md cursor-pointer bg-red-500 px-3 p-1">Logout</a>`}
                          
                            
                            </td>
                        </tr>`;

                    }
                    
                })
        return d_content;
     }
    $(document).ready(function () {

        const students = <?php echo json_encode($students); ?>;
        const tbody = $('#tbody')
        let d_content = append_students(students);
        tbody.html(d_content);
        let n_found = false
       
        $('#search').on('input', function() {
             let toast =  Toastify({
                        text: "NO STUDENTS FOUND",
                        gravity: "bottom",
                        className: "info rounded-xl ",
                        style: {
                            background: "linear-gradient(to right, #8E0E00, #1F1C18)",
                        },
                         duration: 1000,
        })
            const term = $(this).val();
           
            let d_content =  append_students(students,term)
            if(d_content == ""){ 
                if ($('#tbody').children().length !== 0) {
                   toast.showToast();
                }
                    
            }

              
             tbody.html(d_content);
        })


         $( "#delete" ).on( "click", function() {
               
                const id = $(this).find('input').val()
                const modal = $('#modal');

                modal.removeClass('hidden');

                modal.find('h1').html(`Do you really want to delete ${id}?`)


                modal.find('a').attr('href','/dashboard')

                modal.find('span').on('click',function(){
                    modal.addClass('hidden');
                })
        } );

    });
</script>