<div class="mt-10 flex flex-col gap-6">
    <div class="border-b pb-2 border-gray-700">
        <h1 class="text-xl">List of Laboratories</h1>
    </div>
    <div class="flex justify-end">
        <a href="/actions/new_lab" class="px-3 p-2 bg-blue-600   rounded-md hover:bg-blue-900 duration-200 transition-colors flex items-center gap-1">
            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                <path fill="currentColor" d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6z" />
            </svg>
            <span class="tex-sm shrink-0">Add New</span>
        </a>
    </div>

    <div class="bg-gradient-to-r from-slate-800 to-gray-900  rounded-lg flex flex-col">
        <div class="flex items-center justify-between p-5 border-b border-gray-700">
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
                    <svg xmlns="http://www.w3.org/2000/svg" class="text-slate-300" width="1em" height="1em" viewBox="0 0 24 24">
                        <path fill="currentColor" d="m19.6 21l-6.3-6.3q-.75.6-1.725.95T9.5 16q-2.725 0-4.612-1.888T3 9.5q0-2.725 1.888-4.612T9.5 3q2.725 0 4.613 1.888T16 9.5q0 1.1-.35 2.075T14.7 13.3l6.3 6.3zM9.5 14q1.875 0 3.188-1.312T14 9.5q0-1.875-1.312-3.187T9.5 5Q7.625 5 6.313 6.313T5 9.5q0 1.875 1.313 3.188T9.5 14" />
                    </svg>
                    <input type="text" placeholder="Search laboratory..." class="text-sm bg-transparent outline-none border-none" />
                </div>
            </div>

        </div>

        <div class="w-[100%] overflow-x-auto">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 ">
                <thead class="text-xs bg-gradient-to-l to-slate-800 from-gray-900 uppercase ">
                    <tr>
                        <th class="border px-4 py-4 font-medium border-none text-slate-300 text-center font-bold">ID</th>
                        <th class="border px-4 py-4 font-medium border-none text-slate-300 text-center">ROOM NUMBER</th>
                        <th class="border px-4 py-4 font-medium border-none text-slate-300 text-center">ROOM NAME</th>
                        <th class="border px-4 py-4 font-medium border-none text-slate-300 text-center">ROOM STATUS</th>

                        <th class="border px-4 py-4 font-medium border-none text-slate-300 text-center">LAST UPDATE</th>
                        <th class="border px-4 py-4 font-medium border-none text-slate-300 text-center">ACTIONS</th>
                    </tr>
                </thead>
                <tbody class="">

                    <?php

                    foreach ($labs as $lab) {


                        echo '<tr class="odd:bg-gray-900 bg-slate-900">
                        <td class="border px-4 py-4 border-none text-center text-xs md:text-sm text-white">' . $lab['id'] . '</td>
                        <td class="border px-4 py-4 border-none text-center text-xs md:text-sm text-white">' . $lab['room_number'] . '</td>
                        <td class="border px-4 py-4 border-none text-center text-xs md:text-sm text-white">' . $lab['room_name'] . '</td>
                        <td class="border px-4 py-4 border-none text-center text-xs md:text-sm text-white">' . ($lab['active'] == 1 ? 'Active' : 'Inactive')  . '</td>
                        <td class="border px-4 py-4 border-none text-center text-xs md:text-sm text-white">' . $lab['updated_at'] . '</td>
                         <td class="border px-4 py-4 border-none text-center text-lg flex items-center justify-center text-white">
                         <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M9 15v-4.25l9.175-9.175q.3-.3.675-.45t.75-.15q.4 0 .763.15t.662.45L22.425 3q.275.3.425.663T23 4.4q0 .375-.137.738t-.438.662L13.25 15zm10.6-9.2l1.425-1.4l-1.4-1.4L18.2 4.4zM5 21q-.825 0-1.412-.587T3 19V5q0-.825.588-1.412T5 3h8.925L7 9.925V17h7.05L21 10.05V19q0 .825-.587 1.413T19 21z"/></svg>
                         <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M19 4h-3.5l-1-1h-5l-1 1H5v2h14M6 19a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V7H6z"/></svg>
                         
                         </td>
                    </tr>';
                    }

                    ?>




                </tbody>

            </table>
            <div class="p-5 flex justify-between text-sm mt-5 border-t border-gray-600">
                <div>
                    Showing 1 to 1 of <?php echo count($labs); ?> entries
                </div>
                <div>
                    prev next
                </div>
            </div>
        </div>

    </div>
</div>