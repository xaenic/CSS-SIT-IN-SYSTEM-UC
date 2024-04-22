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
        <h1 class="text-xl">Generate Report</h1>
          <div class="flex justify-end">
            <div  id="generate"class="cursor-pointer flex items-center  gap-2 bg-green-500 text-white px-3 p-2 rounded-md">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M20.68 7.014a3.85 3.85 0 0 0-.92-1.22l-3-2.72a4.15 4.15 0 0 0-2.39-1.07H8.21A5 5 0 0 0 3 6.864v10.3a5 5 0 0 0 3.31 4.53a4.74 4.74 0 0 0 1.92.3h7.56a5 5 0 0 0 5.21-4.86v-8.57a3.75 3.75 0 0 0-.32-1.55m-4.84 8.08l-2.66 2.67a1.69 1.69 0 0 1-.53.35c-.133.06-.275.097-.42.11a.9.9 0 0 1-.4 0a1.308 1.308 0 0 1-.42-.11a1.69 1.69 0 0 1-.53-.35l-2.66-2.67a1 1 0 0 1 1.41-1.41l1.4 1.4v-4.61a1 1 0 1 1 2 0v4.61l1.4-1.4a1 1 0 0 1 1.41 1.41m.22-7.69a1.08 1.08 0 0 1-1.09-1.08v-2.65c.28.152.551.322.81.51l3 2.73c.166.14.307.305.42.49z"/></svg>
                <button class="">Export Data</button>
            </div>
        </div>
    </div>

    <div class="bg-slate-800   rounded-lg flex flex-col ">
        
        <div class="overflow-x-auto flex-wrap  gap-3 flex items-center justify-between p-5 border-b border-gray-700">
            <div class="flex items-center gap-2">
                <div class="flex items-center gap-2">
                    <label>Year</label>
                    <select id="year" class="text-sm pr-14 w-full bg-gray-900  px-3 p-2 rounded-md text-white outline-none">
                            <option value="Java" hidden>Choose Year</option>
                            <option value="1st">1st Year</option>
                            <option value="2nd">2nd Year</option>
                            <option value="3rd">3rd Year</option>
                            <option value="4th">4th Year</option>
                    </select>
                </div>
                <div class="flex items-center gap-2">
                    <label>Purpose</label>
                    <select id="purpose" class="text-sm pr-14 w-full bg-gray-900  px-3 p-2 rounded-md text-white outline-none">
                            <option value="Java" hidden>Choose Purpose</option>

                            <option value="Java">Java</option>
                            <option value="Python">Python</option>
                            <option value="C">C</option>
                            <option value="C++">C++</option>
                            <option value="C#">C#</option>
                            <option value="Others">Others</option>
                    </select>
                </div>
                 <div class="flex items-center gap-2">
                    <label>Laboratory</label>
                    <select id="laboratory" class="text-sm pr-14 w-full bg-gray-900  px-3 p-2 rounded-md text-white outline-none">
                        <option value="Java" hidden>Choose Laboratory</option>
                        <option value="Lab 524">Lab 524</option>
                        <option value="Lab 526">Lab 526</option>
                        <option value="Lab 528">Lab 528</option>
                        <option value="Lab 542">Lab 542</option>
                        <option value="Lab 543">Lab 543</option>
                    </select>
                </div>
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
            <table id="oktable" class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 ">
                <thead class="text-xs bg-gradient-to-l to-slate-800 from-gray-900 uppercase ">
                    <tr>
                        <th class="border px-4 py-4 font-medium border-none text-slate-300 text-center font-bold">ID NO
                        </th>
                        <th class="border px-4 py-4 font-medium border-none text-slate-300 text-center">NAME</th>
                        <th class="border px-4 py-4 font-medium border-none text-slate-300 text-center">YEAR</th>
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
   <script src="xlsx.full.min.js"></script>
<script>


     function append_students(students, term = "") {
        term = term.toLowerCase();
        console.log(term)
        let d_content = "";
        students.forEach(student => {
                   
                    if(term == "" ||  student.id_no.toString().toLowerCase().includes(term) || student.purpose.toString().toLowerCase().includes(term) || student.year.toString().toLowerCase().includes(term) || student.lab_name.toString().toLowerCase().includes(term)) {
                        d_content += `<tr class="odd:bg-gray-700 bg-slate-800">
                            <td class="border px-4 py-4 border-none text-center text-xs md:text-sm text-white">${student.id_no}</td>
                            <td class="border px-4 py-4 border-none text-center text-xs md:text-sm text-white">${student.first_name} ${student.last_name}</td>
                            <td class="border px-4 py-4 border-none text-center text-xs md:text-sm text-white">${student.year}</td>
                            <td class="border px-4 py-4 border-none text-center text-xs md:text-sm text-white">${student.purpose}</td>
                            <td class="border px-4 py-4 border-none text-center text-xs md:text-sm text-white">${student.lab_name}</td>
                            <td class="border px-4 py-4 border-none text-center text-xs md:text-sm text-white">${student.time_in}</td>
                            <td class="border px-4 py-4 border-none text-center text-xs md:text-sm text-white">${student.time_out !== null ? student.time_out : 'Ongoing'}</td>
                            <td class="border px-4 py-4 border-none text-center text-xs md:text-sm text-white"> 
                            ${student.time_out !== null ? '<span>Finished</span>' : `<a href="./timeout?id=${student.id}&session_id=${student.session_id}" class="rounded-md cursor-pointer bg-red-500 px-3 p-1">Logout</a>`}
                          
                            
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
        let filter = "all";
        let toast =  Toastify({
            text: "NO STUDENTS FOUND",
            gravity: "bottom",
            className: "info rounded-xl ",
            style: {
                background: "linear-gradient(to right, #8E0E00, #1F1C18)",
            },
            duration: 1000,
        })
         $("#generate").click(function(){

                var table = document.getElementById('oktable');
               var wb = XLSX.utils.table_to_book(table);

    // Save the workbook as an Excel file
                XLSX.writeFile(wb, `export_${filter}.xlsx`);
        })
        $("#year").change(function(){
            const term = $(this).val();
            filter = `by_year_${this.value}`
            let d_content =  append_students(students,term)
            if(d_content == ""){ 
                if ($('#tbody').children().length !== 0) {
                   toast.showToast();
                }    
            }
             tbody.html(d_content);
        })
        $("#purpose").change(function(){
            const term = $(this).val();
            filter = `by_purpose_${this.value}`

            let d_content =  append_students(students,term)
            if(d_content == ""){ 
                if ($('#tbody').children().length !== 0) {
                   toast.showToast();
                }    
            }
             tbody.html(d_content);
        })
        $("#laboratory").change(function(){
            const term = $(this).val();
            filter = `by_laboratory_${this.value}`
            let d_content =  append_students(students,term)
            if(d_content == ""){ 
                if ($('#tbody').children().length !== 0) {
                   toast.showToast();
                }    
            }
             tbody.html(d_content);
        })
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
            filter = `by_id_${this.value}`
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