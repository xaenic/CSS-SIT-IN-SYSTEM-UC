<div class="max-w-[680px] mx-auto">
    <form id="register" method="POST" class="grid grid-cols-1 md:grid-cols-2 bg-white p-10 rounded-lg gap-7 ">

        <div class="flex items-center flex-col gap-2 col-span-2">

            <small class="text-xl font-medium">Welcome to SitHub</small>

            <h1 class="text-md font-normal">Fill all fields to create an account.</h1>

        </div>
        <div id="error" class="text-red-600 col-span-2"></div>
        <div id="success" class="text-green-600 col-span-2"></div>
        <div class="flex flex-col gap-1">
            <label class="text-slate-600">First Name</label>
            <div class="flex gap-2 items-center border border-gray-200 rounded-lg px-3 p-2 relative">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M5.5 7A1.5 1.5 0 0 1 4 5.5A1.5 1.5 0 0 1 5.5 4A1.5 1.5 0 0 1 7 5.5A1.5 1.5 0 0 1 5.5 7m15.91 4.58l-9-9C12.05 2.22 11.55 2 11 2H4c-1.11 0-2 .89-2 2v7c0 .55.22 1.05.59 1.41l8.99 9c.37.36.87.59 1.42.59c.55 0 1.05-.23 1.41-.59l7-7c.37-.36.59-.86.59-1.41c0-.56-.23-1.06-.59-1.42" />
                </svg>
                <input type="text" name="first_name" class="text-sm w-full outline-none" placeholder="King Kong">
                <span id="f_error" class="text-red-600 absolute top-[-19px] left-0 text-sm"></span>
            </div>
        </div>
        <div class="flex flex-col gap-1">
            <label class="text-slate-600">Last Name</label>
            <div class="flex gap-2 items-center border border-gray-200 rounded-lg px-3 p-2 relative">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M12 4a4 4 0 0 1 4 4a4 4 0 0 1-4 4a4 4 0 0 1-4-4a4 4 0 0 1 4-4m0 10c4.42 0 8 1.79 8 4v2H4v-2c0-2.21 3.58-4 8-4" />
                </svg>
                <input type="text" name="last_name" class="text-sm w-full outline-none" placeholder="Laon">
                <span id="l_error" class="text-red-600 absolute top-[-19px] left-0 text-sm"></span>
            </div>
        </div>
        <div class="flex flex-col gap-1">
            <label class="text-slate-600">Student ID</label>
            <div class="flex gap-2 items-center border border-gray-200 rounded-lg px-3 p-2 relative">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 15 15">
                    <path fill="currentColor" fill-rule="evenodd" d="M0 3.5A1.5 1.5 0 0 1 1.5 2h12A1.5 1.5 0 0 1 15 3.5v8a1.5 1.5 0 0 1-1.5 1.5h-12A1.5 1.5 0 0 1 0 11.5zM3 6a2 2 0 1 1 4 0a2 2 0 0 1-4 0m9 0H9V5h3zm0 3H9V8h3zM5 9a2.927 2.927 0 0 0-2.618 1.618l-.33.658A.5.5 0 0 0 2.5 12h5a.5.5 0 0 0 .447-.724l-.329-.658A2.927 2.927 0 0 0 5 9" clip-rule="evenodd" />
                </svg>
                <input type="text" name="id_no" class="text-sm w-full outline-none" placeholder="21419023">
                <span id="id_error" class="text-red-600 absolute top-[-19px] left-0 text-sm"></span>
            </div>
        </div>
        <div class="flex flex-col gap-1">
            <label class="text-slate-600">Course</label>
            <div class="flex gap-2 items-center border border-gray-200 rounded-lg px-3 p-2 relative">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M12 4a4 4 0 0 1 4 4a4 4 0 0 1-4 4a4 4 0 0 1-4-4a4 4 0 0 1 4-4m0 10c4.42 0 8 1.79 8 4v2H4v-2c0-2.21 3.58-4 8-4" />
                </svg>
                <select name="year" class="w-full text-slate-600 outline-none">
                    <option value="1st">BSIT</option>
                    <option value="2nd">BSCS</option>
                    <option value="3rd">BSBA</option>
                    <option value="4th">BSCPE</option>
                </select>
                <span id="c_error" class="text-red-600 absolute top-[-19px] left-0 text-sm"></span>
            </div>
        </div>
        <div class="flex flex-col gap-1">
            <label class="text-slate-600">Year Level</label>
            <div class="flex gap-2 items-center border border-gray-200 rounded-lg px-3 p-2 relative">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M12 4a4 4 0 0 1 4 4a4 4 0 0 1-4 4a4 4 0 0 1-4-4a4 4 0 0 1 4-4m0 10c4.42 0 8 1.79 8 4v2H4v-2c0-2.21 3.58-4 8-4" />
                </svg>
                <select name="year" class="w-full text-slate-600 outline-none">
                    <option value="1st">1st Year</option>
                    <option value="2nd">2nd Year</option>
                    <option value="3rd">3rd Year</option>
                    <option value="4th">4th Year</option>
                </select>
                <span id="y_error" class="text-red-600 absolute top-[-19px] left-0 text-sm"></span>
            </div>
        </div>
        <div class="flex flex-col gap-1">
            <label class="text-slate-600">Email Address</label>
            <div class="flex gap-2 items-center border border-gray-200 rounded-lg px-3 p-2 relative">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M12 4a4 4 0 0 1 4 4a4 4 0 0 1-4 4a4 4 0 0 1-4-4a4 4 0 0 1 4-4m0 10c4.42 0 8 1.79 8 4v2H4v-2c0-2.21 3.58-4 8-4" />
                </svg>
                <input type="email" name="email" class="text-sm w-full outline-none" placeholder="suyaan@aldrich.com">
                <span id="e_error" class="text-red-600 absolute top-[-19px] left-0 text-sm"></span>
            </div>
        </div>

        <div class="flex flex-col gap-1">
            <label class="text-slate-600">Password</label>
            <div class="border border-gray-200 rounded-lg px-3 p-2 flex gap-2 items-center relative">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M6 22q-.825 0-1.412-.587T4 20V10q0-.825.588-1.412T6 8h1V6q0-2.075 1.463-3.537T12 1q2.075 0 3.538 1.463T17 6v2h1q.825 0 1.413.588T20 10v10q0 .825-.587 1.413T18 22zm6-5q.825 0 1.413-.587T14 15q0-.825-.587-1.412T12 13q-.825 0-1.412.588T10 15q0 .825.588 1.413T12 17M9 8h6V6q0-1.25-.875-2.125T12 3q-1.25 0-2.125.875T9 6z" />
                </svg>
                <input type="password" name="password" class="text-sm w-full outline-none" placeholder="AkoSiBurila123">
                <span id="p_error" class="text-red-600 absolute top-[-19px] left-0 text-sm"></span>
            </div>
        </div>
        <div class="flex flex-col gap-1">
            <label class="text-slate-600">Confirm Password</label>
            <div class="border border-gray-200 rounded-lg px-3 p-2 flex gap-2 items-center relative">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M6 22q-.825 0-1.412-.587T4 20V10q0-.825.588-1.412T6 8h1V6q0-2.075 1.463-3.537T12 1q2.075 0 3.538 1.463T17 6v2h1q.825 0 1.413.588T20 10v10q0 .825-.587 1.413T18 22zm6-5q.825 0 1.413-.587T14 15q0-.825-.587-1.412T12 13q-.825 0-1.412.588T10 15q0 .825.588 1.413T12 17M9 8h6V6q0-1.25-.875-2.125T12 3q-1.25 0-2.125.875T9 6z" />
                </svg>
                <input type="password" name="c_password" class="text-sm w-full outline-none" placeholder="AkoSiBurila123">
                <span id="cp_error" class="text-red-600 absolute top-[-19px] left-0 text-sm"></span>
            </div>
        </div>
        <div class="col-span-2">
            <div class="bg-black text-center text-white rounded-lg px-4 p-3 hover:bg-zinc-700 duration-200 transition-color cursor-pointer ">
                <input id="submitButton" type="submit" class="w-full" value="Register" />
            </div>
        </div>
        <div class="flex justify-end col-span-2">

            <div>
                <a href="/login" class="text-blue-500">Already have an account?</a>
            </div>
        </div>
    </form>

</div>