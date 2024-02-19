<div class="max-w-[680px] mx-auto mt-20">
    <form id="register" method="POST" class="grid grid-cols-1 md:grid-cols-2 bg-white p-10 rounded-lg gap-7 ">

        <div class="flex items-center flex-col gap-2 col-span-2">

            <small class="text-xl font-medium">Welcome to SitHub</small>

            <h1 class="text-md font-normal">Fill all fields to create an account.</h1>

        </div>
        <div id="error" class="text-red-600 col-span-2"></div>
        <div id="success" class="text-green-600 col-span-2"></div>
        <div class="">

            <div class="flex gap-2 items-center border border-gray-200 rounded-lg px-3 p-2 relative">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M12 4a4 4 0 0 1 4 4a4 4 0 0 1-4 4a4 4 0 0 1-4-4a4 4 0 0 1 4-4m0 10c4.42 0 8 1.79 8 4v2H4v-2c0-2.21 3.58-4 8-4" />
                </svg>
                <input type="text" name="first_name" class="text-sm w-full outline-none" placeholder="First Name">
                <span id="f_error" class="text-red-600 absolute top-[-19px] left-0 text-sm"></span>
            </div>
        </div>
        <div class="">
            <div class="flex gap-2 items-center border border-gray-200 rounded-lg px-3 p-2 relative">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M12 4a4 4 0 0 1 4 4a4 4 0 0 1-4 4a4 4 0 0 1-4-4a4 4 0 0 1 4-4m0 10c4.42 0 8 1.79 8 4v2H4v-2c0-2.21 3.58-4 8-4" />
                </svg>
                <input type="text" name="last_name" class="text-sm w-full outline-none" placeholder="Last Name">
                <span id="l_error" class="text-red-600 absolute top-[-19px] left-0 text-sm"></span>
            </div>
        </div>
        <div class="">
            <div class="flex gap-2 items-center border border-gray-200 rounded-lg px-3 p-2 relative">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M12 4a4 4 0 0 1 4 4a4 4 0 0 1-4 4a4 4 0 0 1-4-4a4 4 0 0 1 4-4m0 10c4.42 0 8 1.79 8 4v2H4v-2c0-2.21 3.58-4 8-4" />
                </svg>
                <input type="text" name="id_no" class="text-sm w-full outline-none" placeholder="Student ID e.g 21419023">
                <span id="id_error" class="text-red-600 absolute top-[-19px] left-0 text-sm"></span>
            </div>
        </div>
        <div class="">
            <div class="flex gap-2 items-center border border-gray-200 rounded-lg px-3 p-2 relative">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M12 4a4 4 0 0 1 4 4a4 4 0 0 1-4 4a4 4 0 0 1-4-4a4 4 0 0 1 4-4m0 10c4.42 0 8 1.79 8 4v2H4v-2c0-2.21 3.58-4 8-4" />
                </svg>
                <input type="text" name="course" class="text-sm w-full outline-none" placeholder="Course e.g BSIT">
                <span id="c_error" class="text-red-600 absolute top-[-19px] left-0 text-sm"></span>
            </div>
        </div>
        <div class="">
            <div class="flex gap-2 items-center border border-gray-200 rounded-lg px-3 p-2 relative">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M12 4a4 4 0 0 1 4 4a4 4 0 0 1-4 4a4 4 0 0 1-4-4a4 4 0 0 1 4-4m0 10c4.42 0 8 1.79 8 4v2H4v-2c0-2.21 3.58-4 8-4" />
                </svg>
                <input type="text" name="year" class="text-sm w-full outline-none" placeholder="Year Level">
                <span id="y_error" class="text-red-600 absolute top-[-19px] left-0 text-sm"></span>
            </div>
        </div>
        <div class="">
            <div class="flex gap-2 items-center border border-gray-200 rounded-lg px-3 p-2 relative">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M12 4a4 4 0 0 1 4 4a4 4 0 0 1-4 4a4 4 0 0 1-4-4a4 4 0 0 1 4-4m0 10c4.42 0 8 1.79 8 4v2H4v-2c0-2.21 3.58-4 8-4" />
                </svg>
                <input type="email" name="email" class="text-sm w-full outline-none" placeholder="Email address">
                <span id="e_error" class="text-red-600 absolute top-[-19px] left-0 text-sm"></span>
            </div>
        </div>

        <div class="">
            <div class="border border-gray-200 rounded-lg px-3 p-2 flex gap-2 items-center relative">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M6 22q-.825 0-1.412-.587T4 20V10q0-.825.588-1.412T6 8h1V6q0-2.075 1.463-3.537T12 1q2.075 0 3.538 1.463T17 6v2h1q.825 0 1.413.588T20 10v10q0 .825-.587 1.413T18 22zm6-5q.825 0 1.413-.587T14 15q0-.825-.587-1.412T12 13q-.825 0-1.412.588T10 15q0 .825.588 1.413T12 17M9 8h6V6q0-1.25-.875-2.125T12 3q-1.25 0-2.125.875T9 6z" />
                </svg>
                <input type="password" name="password" class="text-sm w-full outline-none" placeholder="Password">
                <span id="p_error" class="text-red-600 absolute top-[-19px] left-0 text-sm"></span>
            </div>
        </div>
        <div class="">
            <div class="border border-gray-200 rounded-lg px-3 p-2 flex gap-2 items-center relative">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M6 22q-.825 0-1.412-.587T4 20V10q0-.825.588-1.412T6 8h1V6q0-2.075 1.463-3.537T12 1q2.075 0 3.538 1.463T17 6v2h1q.825 0 1.413.588T20 10v10q0 .825-.587 1.413T18 22zm6-5q.825 0 1.413-.587T14 15q0-.825-.587-1.412T12 13q-.825 0-1.412.588T10 15q0 .825.588 1.413T12 17M9 8h6V6q0-1.25-.875-2.125T12 3q-1.25 0-2.125.875T9 6z" />
                </svg>
                <input type="password" name="c_password" class="text-sm w-full outline-none" placeholder="Confirm Password">
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
                    if (response == 'success') {
                        $('#success').html('<p> Registered Successfully!</p>');

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