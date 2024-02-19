<div class="max-w-[680px] mx-auto mt-20">
    <form id="register" method="POST" class="grid grid-cols-1 md:grid-cols-2 bg-white p-10 rounded-lg gap-4 ">

        <div class="flex items-center flex-col gap-2 col-span-2">

            <small class="text-xl font-medium">Welcome to SitHub</small>

            <h1 class="text-md font-normal">Fill all fields to create an account.</h1>

        </div>
        <div id="error" class="text-red-600 col-span-2"></div>
        <div id="success" class="text-green-600 col-span-2"></div>
        <div class="">
            <div class="flex gap-2 items-center border border-gray-200 rounded-lg px-3 p-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M12 4a4 4 0 0 1 4 4a4 4 0 0 1-4 4a4 4 0 0 1-4-4a4 4 0 0 1 4-4m0 10c4.42 0 8 1.79 8 4v2H4v-2c0-2.21 3.58-4 8-4" />
                </svg>
                <input type="text" name="first_name" class="text-sm w-full outline-none" placeholder="First Name">
            </div>
        </div>
        <div class="">
            <div class="flex gap-2 items-center border border-gray-200 rounded-lg px-3 p-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M12 4a4 4 0 0 1 4 4a4 4 0 0 1-4 4a4 4 0 0 1-4-4a4 4 0 0 1 4-4m0 10c4.42 0 8 1.79 8 4v2H4v-2c0-2.21 3.58-4 8-4" />
                </svg>
                <input type="text" name="last_name" class="text-sm w-full outline-none" placeholder="Last Name">
            </div>
        </div>
        <div class="">
            <div class="flex gap-2 items-center border border-gray-200 rounded-lg px-3 p-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M12 4a4 4 0 0 1 4 4a4 4 0 0 1-4 4a4 4 0 0 1-4-4a4 4 0 0 1 4-4m0 10c4.42 0 8 1.79 8 4v2H4v-2c0-2.21 3.58-4 8-4" />
                </svg>
                <input type="text" name="id_no" class="text-sm w-full outline-none" placeholder="Student ID e.g 21419023">
            </div>
        </div>
        <div class="">
            <div class="flex gap-2 items-center border border-gray-200 rounded-lg px-3 p-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M12 4a4 4 0 0 1 4 4a4 4 0 0 1-4 4a4 4 0 0 1-4-4a4 4 0 0 1 4-4m0 10c4.42 0 8 1.79 8 4v2H4v-2c0-2.21 3.58-4 8-4" />
                </svg>
                <input type="text" name="course" class="text-sm w-full outline-none" placeholder="Course e.g BSIT">
            </div>
        </div>
        <div class="">
            <div class="flex gap-2 items-center border border-gray-200 rounded-lg px-3 p-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M12 4a4 4 0 0 1 4 4a4 4 0 0 1-4 4a4 4 0 0 1-4-4a4 4 0 0 1 4-4m0 10c4.42 0 8 1.79 8 4v2H4v-2c0-2.21 3.58-4 8-4" />
                </svg>
                <input type="text" name="year" class="text-sm w-full outline-none" placeholder="Year Level">
            </div>
        </div>
        <div class="">
            <div class="flex gap-2 items-center border border-gray-200 rounded-lg px-3 p-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M12 4a4 4 0 0 1 4 4a4 4 0 0 1-4 4a4 4 0 0 1-4-4a4 4 0 0 1 4-4m0 10c4.42 0 8 1.79 8 4v2H4v-2c0-2.21 3.58-4 8-4" />
                </svg>
                <input type="email" name="email" class="text-sm w-full outline-none" placeholder="Email address">
            </div>
        </div>

        <div class="">
            <div class="border border-gray-200 rounded-lg px-3 p-2 flex gap-2 items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M6 22q-.825 0-1.412-.587T4 20V10q0-.825.588-1.412T6 8h1V6q0-2.075 1.463-3.537T12 1q2.075 0 3.538 1.463T17 6v2h1q.825 0 1.413.588T20 10v10q0 .825-.587 1.413T18 22zm6-5q.825 0 1.413-.587T14 15q0-.825-.587-1.412T12 13q-.825 0-1.412.588T10 15q0 .825.588 1.413T12 17M9 8h6V6q0-1.25-.875-2.125T12 3q-1.25 0-2.125.875T9 6z" />
                </svg>
                <input type="password" name="password" class="text-sm w-full outline-none" placeholder="Password">
            </div>
        </div>
        <div class="">
            <div class="border border-gray-200 rounded-lg px-3 p-2 flex gap-2 items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M6 22q-.825 0-1.412-.587T4 20V10q0-.825.588-1.412T6 8h1V6q0-2.075 1.463-3.537T12 1q2.075 0 3.538 1.463T17 6v2h1q.825 0 1.413.588T20 10v10q0 .825-.587 1.413T18 22zm6-5q.825 0 1.413-.587T14 15q0-.825-.587-1.412T12 13q-.825 0-1.412.588T10 15q0 .825.588 1.413T12 17M9 8h6V6q0-1.25-.875-2.125T12 3q-1.25 0-2.125.875T9 6z" />
                </svg>
                <input type="password" name="c_password" class="text-sm w-full outline-none" placeholder="Confirm Password">
            </div>
        </div>
        <div class="col-span-2">
            <div class="bg-black text-center text-white rounded-lg px-4 p-3 hover:bg-zinc-700 duration-200 transition-color cursor-pointer ">
                <input id="submitButton" type="submit" class="w-full" value="Register" />
            </div>
        </div>
        <div class="flex justify-end col-span-2">

            <div>
                <a href="/register" class="text-blue-500">Already have an account?</a>
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


            $.ajax({
                type: 'POST',
                url: '/register',
                data: formData,
                success: function(response) {
                    $('#submitButton').val('Register')
                    console.log(response == 'success')
                    if (response == 'success') {
                        $('#success').html('<p> Registered Successfully!</p>');
                        $(this).trigger('reset');
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