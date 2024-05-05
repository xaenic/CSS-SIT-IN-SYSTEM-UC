<div class="col-span-6 md:p-5 flex items-center">
    <form id="register" action="register" method="post" class="shadow-xl p-5 bg-white col-span-6 shadow-sm rounded-xl flex flex-col items-start w-full">

        <div class="flex flex-col">
            <div class="flex items-center gap-3">
                <img src="../assets/images/ccs_logo.png" class="w-10 h-10" />
                <h1 class="text-xl font-bold  text-slate-900">CCSLab</h1>
            </div>

            <p class="text-2xl font-bold text-slate-800 mt-3">Create your Account</p>
            <p class="text-md font-md text-slate-700">Start your website in seconds. Already have an account? <a href="/login" class="text-blue-500 hover:underline">Sign In.</a></p>
            <div id="error" class="mt-5 text-red-600 col-span-2"></div>
            <div id="success" class="mt-5 text-green-600 col-span-2"></div>
        </div>
        <div class="mt-5 grid grid-cols-1 lg:grid-cols-2 gap-5    w-full">
            <div class="flex flex-col gap-1">
                <label class="text-slate-600 font-medium">First Name</label>
                <div class="flex gap-2 items-center border border-gray-200 rounded-lg px-3 p-2 relative">

                    <input type="text" name="first_name" class="text-sm w-full outline-none" placeholder="e.g. King Kong">
                    <span id="f_error" class="text-red-600 absolute bottom-[-19px] left-0 text-sm"></span>
                </div>
            </div>
            <div class="flex flex-col gap-1">
                <label class="text-slate-600 font-medium">Last Name</label>
                <div class="flex gap-2 items-center border border-gray-200 rounded-lg px-3 p-2 relative">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M12 4a4 4 0 0 1 4 4a4 4 0 0 1-4 4a4 4 0 0 1-4-4a4 4 0 0 1 4-4m0 10c4.42 0 8 1.79 8 4v2H4v-2c0-2.21 3.58-4 8-4" />
                    </svg>
                    <input type="text" name="last_name" class="text-sm w-full outline-none" placeholder="Laon">
                    <span id="l_error" class="text-red-600 absolute bottom-[-19px] left-0 text-sm"></span>
                </div>
            </div>
            <div class="flex flex-col gap-1">
                <label class="text-slate-600 font-medium">Student ID</label>
                <div class="flex gap-2 items-center border border-gray-200 rounded-lg px-3 p-2 relative">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 15 15">
                        <path fill="currentColor" fill-rule="evenodd" d="M0 3.5A1.5 1.5 0 0 1 1.5 2h12A1.5 1.5 0 0 1 15 3.5v8a1.5 1.5 0 0 1-1.5 1.5h-12A1.5 1.5 0 0 1 0 11.5zM3 6a2 2 0 1 1 4 0a2 2 0 0 1-4 0m9 0H9V5h3zm0 3H9V8h3zM5 9a2.927 2.927 0 0 0-2.618 1.618l-.33.658A.5.5 0 0 0 2.5 12h5a.5.5 0 0 0 .447-.724l-.329-.658A2.927 2.927 0 0 0 5 9" clip-rule="evenodd" />
                    </svg>
                    <input type="text" name="id_no" class="text-sm w-full outline-none" placeholder="21419023">
                    <span id="id_error" class="text-red-600 absolute bottom-[-19px] left-0 text-sm"></span>
                </div>
            </div>
            <div class="flex flex-col gap-1">
                <label class="text-slate-600 font-medium">Course</label>
                <div class="flex gap-2 items-center border border-gray-200 rounded-lg px-3 p-2 text-sm relative">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M12 4a4 4 0 0 1 4 4a4 4 0 0 1-4 4a4 4 0 0 1-4-4a4 4 0 0 1 4-4m0 10c4.42 0 8 1.79 8 4v2H4v-2c0-2.21 3.58-4 8-4" />
                    </svg>
                    <select name="course" class="w-full text-slate-600 outline-none">
                        <option value="1st">BSIT</option>
                        <option value="2nd">BSCS</option>
                        <option value="3rd">BSBA</option>
                        <option value="4th">BSCPE</option>
                    </select>
                    <span id="c_error" class="text-red-600 absolute bottom-[-19px] left-0 text-sm"></span>
                </div>
            </div>
            <div class="flex flex-col gap-1">
                <label class="text-slate-600 font-medium">Year Level</label>
                <div class="flex gap-2 items-center border border-gray-200 rounded-lg text-sm px-3 p-2 relative">
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
                <label class="text-slate-600 font-medium">Email Address</label>
                <div class="flex gap-2 items-center border border-gray-200 rounded-lg px-3 p-2 relative">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M12 4a4 4 0 0 1 4 4a4 4 0 0 1-4 4a4 4 0 0 1-4-4a4 4 0 0 1 4-4m0 10c4.42 0 8 1.79 8 4v2H4v-2c0-2.21 3.58-4 8-4" />
                    </svg>
                    <input type="email" name="email" class="text-sm w-full outline-none" placeholder="suyaan@aldrich.com">
                    <span id="e_error" class="text-red-600 absolute bottom-[-19px] left-0 text-sm"></span>
                </div>
            </div>
            <div class="flex flex-col gap-1">
                <label class="text-slate-600 font-medium">Password</label>
                <div class="border border-gray-200 rounded-lg px-3 p-2 flex gap-2 items-center relative">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M6 22q-.825 0-1.412-.587T4 20V10q0-.825.588-1.412T6 8h1V6q0-2.075 1.463-3.537T12 1q2.075 0 3.538 1.463T17 6v2h1q.825 0 1.413.588T20 10v10q0 .825-.587 1.413T18 22zm6-5q.825 0 1.413-.587T14 15q0-.825-.587-1.412T12 13q-.825 0-1.412.588T10 15q0 .825.588 1.413T12 17M9 8h6V6q0-1.25-.875-2.125T12 3q-1.25 0-2.125.875T9 6z" />
                    </svg>
                    <input type="password" name="password" class="text-sm w-full outline-none" placeholder="AkoSiBurila123">
                    <span id="p_error" class="text-red-600 absolute bottom-[-19px] left-0 text-sm"></span>
                </div>
            </div>
            <div class="flex flex-col gap-1">
                <label class="text-slate-600 font-medium">Confirm Password</label>
                <div class="border border-gray-200 rounded-lg px-3 p-2 flex gap-2 items-center relative">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M6 22q-.825 0-1.412-.587T4 20V10q0-.825.588-1.412T6 8h1V6q0-2.075 1.463-3.537T12 1q2.075 0 3.538 1.463T17 6v2h1q.825 0 1.413.588T20 10v10q0 .825-.587 1.413T18 22zm6-5q.825 0 1.413-.587T14 15q0-.825-.587-1.412T12 13q-.825 0-1.412.588T10 15q0 .825.588 1.413T12 17M9 8h6V6q0-1.25-.875-2.125T12 3q-1.25 0-2.125.875T9 6z" />
                    </svg>
                    <input type="password" name="c_password" class="text-sm w-full outline-none" placeholder="AkoSiBurila123">
                    <span id="cp_error" class="text-red-600 absolute bottom-[-19px] left-0 text-sm"></span>
                </div>
            </div>

            <div class="lg:col-span-2 mt-5">
                <div class="bg-black text-center text-white rounded-lg px-4 p-3 hover:bg-zinc-700 duration-200 transition-color cursor-pointer ">
                    <input id="submitButton" type="submit" class="w-full" value="Create an Account" />
                </div>
            </div>
        </div>
    </form>
</div>
<div class="col-span-6  hidden lg:flex   ">
    <img src="../assets/images/Saly-16.png" class=" mt-[-20px] object-cover  w-full h-full" />


</div>


<script>
    $(document).ready(function() {
        $('#register').submit(function(event) {
            event.preventDefault();
            $('#submitButton').val('Loading')
            var formData = $(this).serialize();
            $('#error').html('');
            $('#success').html('');
            const formdata = $(this);
            $.ajax({
                type: 'POST',
                url: '/register',
                data: formData,
                success: function(response) {
                    $('#submitButton').val('Register')
                    console.log(response);
                    console.log(response == 'success')
                    if (response.includes('success')) {
                    $('#success').html(`
    <p>Registered Successfully!</p>
    <span class="text-red-500">Verify your email <a href="./verify?id=${response.split('.')[1]}" class="text-sky-600">Here</a></span>
`);


                        formdata.trigger('reset');
                        return
                    }
                    $('#error').html('<p>' + response + '</p>');
                },
                error: function(xhr, status, error) {
                    // Display error message
                    $('#error').html('<p>Error: ' + error + '</p>');
                }
            });
        });
    });
</script>

<script>
    $(document).ready(function() {

        function validateFirstName() {
            $('#f_error').text('')
            const firstName = $('input[name="first_name"]').val()
            if (firstName.length <= 0) return;
            const isValid = /^[a-zA-Z]+$/.test(firstName);

            if (!isValid) {

                $('#f_error').text('First Name must only contain letters')
                return
            }
        }

        function validateLastName() {
            $('#l_error').text('')
            const last_name = $('input[name="last_name"]').val()
            if (last_name.length <= 0) return;
            const isValid = /^[a-zA-Z]+$/.test(last_name);

            if (!isValid) {

                $('#l_error').text('Last Name must only contain letters')
                return
            }
        }

        function validateID() {
            $('#id_error').text('')
            const id_no = $('input[name="id_no"]').val()
            if (id_no.length <= 0) return;
            const isValid = /^[0-9]+$/.test(id_no);
            if (!isValid) {

                $('#id_error').text('IDNO must only contain numbers')
                return
            }
        }

        function validateCourse() {
            $('#c_error').text('')
            const firstName = $('input[name="course"]').val()
            if (firstName.length <= 0) return;
            const isValid = /^[a-zA-Z]+$/.test(firstName);

            if (!isValid) {

                $('#c_error').text('Course must only contain letters')
                return
            }
        }

        function validateYear() {
            $('#y_error').text('')
            const firstName = $('input[name="year"]').val()

            if (firstName.length <= 0) return;
            const isValid = /^[0-9]+$/.test(firstName);

            if (!isValid) {

                $('#y_error').text('Year must only contain numbers')
                return
            }
        }

        function validatePassword() {
            $('#p_error').text('')
            const firstName = $('input[name="password"]').val()
            if (firstName.length <= 0) return;
            const isValid = firstName.length >= 6;

            if (!isValid) {

                $('#p_error').text('Password must be at least 6 characters')
                return
            }
        }

        function validateCPassword() {
            $('#cp_error').text('')
            const c_password = $('input[name="c_password"]').val()
            const password = $('input[name="password"]').val()
            if (c_password.length <= 0) return;
            const isValid = c_password == password;

            if (!isValid) {
                $('#cp_error').text('Password must match')
                return
            }
        }
        $('input[name="first_name"]').on('input', function() {

            validateFirstName();
        });
        $('input[name="last_name"]').on('input', function() {

            validateLastName();
        });
        $('input[name="id_no"]').on('input', function() {

            validateID();
        });
        $('input[name="course"]').on('input', function() {

            validateCourse();
        });
        $('input[name="year"]').on('input', function() {

            validateYear();
        });
        $('input[name="password"]').on('input', function() {

            validatePassword();
        });
        $('input[name="c_password"]').on('input', function() {

            validateCPassword();
        });
    });
</script>

<script>
    const {
        motion,
        useAnimation
    } = window.FramerMotion;

    function simulateError() {
        // Add error class to input field
        inputField.classList.add('error');

        // Animate the input field
        motion(inputField).animate({
            x: [-10, 10, -10, 10, 0],
            transition: {
                duration: 0.5
            }
        }).then(() => {
            // Remove error class after animation completes
            inputField.classList.remove('error');
        });
    }
</script>