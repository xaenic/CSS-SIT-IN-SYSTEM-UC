<div class="mt-10 flex flex-col gap-6">
    <div class="border-b pb-2 border-gray-700">
        <h1 class="text-xl">Students</h1>
    </div>
    <div class="flex justify-end">
        <!-- <a href="new_lab"
            class="px-3 p-2 bg-slate-800  rounded-md hover:bg-blue-900 duration-200 transition-colors flex items-center gap-1">
            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                <g fill="none" fill-rule="evenodd">
                    <path
                        d="M24 0v24H0V0zM12.594 23.258l-.012.002l-.071.035l-.02.004l-.014-.004l-.071-.036c-.01-.003-.019 0-.024.006l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427c-.002-.01-.009-.017-.016-.018m.264-.113l-.014.002l-.184.093l-.01.01l-.003.011l.018.43l.005.012l.008.008l.201.092c.012.004.023 0 .029-.008l.004-.014l-.034-.614c-.003-.012-.01-.02-.02-.022m-.715.002a.023.023 0 0 0-.027.006l-.006.014l-.034.614c0 .012.007.02.017.024l.015-.002l.201-.093l.01-.008l.003-.011l.018-.43l-.003-.012l-.01-.01z" />
                    <path fill="currentColor"
                        d="M9 5a2 2 0 0 1 2-2h2a2 2 0 0 1 2 2v4h4a2 2 0 0 1 2 2v2a2 2 0 0 1-2 2h-4v4a2 2 0 0 1-2 2h-2a2 2 0 0 1-2-2v-4H5a2 2 0 0 1-2-2v-2a2 2 0 0 1 2-2h4z" />
                </g>
            </svg>
            <span class="tex-sm shrink-0">Add New</span>
        </a> -->
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
                        <th class="border px-4 py-4 font-medium border-none text-slate-300 text-center">FIRST NAME</th>
                        <th class="border px-4 py-4 font-medium border-none text-slate-300 text-center">LAST NAME</th>
                        <th class="border px-4 py-4 font-medium border-none text-slate-300 text-center">EMAIL</th>
                        <th class="border px-4 py-4 font-medium border-none text-slate-300 text-center">ACTIONS</th>
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
                            d_content+=`<tr class="odd:bg-gray-700 bg-slate-800">
                                <td class="border px-4 py-4 border-none text-center text-xs md:text-sm text-white"> ${student.id_no}</td>
                                <td class="border px-4 py-4 border-none text-center text-xs md:text-sm text-white">
                                    ${student.first_name}</td>
                                <td class="border px-4 py-4 border-none text-center text-xs md:text-sm text-white"> ${student.last_name}</td>
                                <td class="border px-4 py-4 border-none text-center text-xs md:text-sm text-white"> ${student.email}</td>
                                <td class="border px-4 py-4 border-none text-center text-lg flex items-center justify-center text-white">
                               <a href="./student_session?id=${student.id_no}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M12 9a3 3 0 0 0-3 3a3 3 0 0 0 3 3a3 3 0 0 0 3-3a3 3 0 0 0-3-3m0 8a5 5 0 0 1-5-5a5 5 0 0 1 5-5a5 5 0 0 1 5 5a5 5 0 0 1-5 5m0-12.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5"/></svg>
                               </a>
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M9 15v-4.25l9.175-9.175q.3-.3.675-.45t.75-.15q.4 0 .763.15t.662.45L22.425 3q.275.3.425.663T23 4.4q0 .375-.137.738t-.438.662L13.25 15zm10.6-9.2l1.425-1.4l-1.4-1.4L18.2 4.4zM5 21q-.825 0-1.412-.587T3 19V5q0-.825.588-1.412T5 3h8.925L7 9.925V17h7.05L21 10.05V19q0 .825-.587 1.413T19 21z"/></svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M19 4h-3.5l-1-1h-5l-1 1H5v2h14M6 19a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V7H6z"/></svg>
                                </td></tr>`;
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
    });
</script>