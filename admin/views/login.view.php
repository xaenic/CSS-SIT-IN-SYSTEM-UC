<div class="max-w-[480px] mx-auto mt-14">
    <form id="login" action="/login" method="POST" class="flex flex-col bg-white p-10 rounded-lg gap-4 ">

        <div class="flex items-center flex-col gap-2 col-span-12">

            <small class="text-xl font-medium">Welcome to SitHub</small>
<small class="text-sm  text-slate-500">Admin Dashboard</small>
            <h1 class="text-md font-normal"> Let's get started.</h1>

        </div>
        <div id="error" class="text-red-600"></div>
        <div class="">
            <div class="flex gap-2 items-center border border-gray-200 rounded-lg px-3 p-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M12 4a4 4 0 0 1 4 4a4 4 0 0 1-4 4a4 4 0 0 1-4-4a4 4 0 0 1 4-4m0 10c4.42 0 8 1.79 8 4v2H4v-2c0-2.21 3.58-4 8-4" />
                </svg>
                <input type="email" name="email" class="w-full outline-none" placeholder="Email address">
            </div>
        </div>
        <div class="">
            <div class="border border-gray-200 rounded-lg px-3 p-2 flex gap-2 items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M6 22q-.825 0-1.412-.587T4 20V10q0-.825.588-1.412T6 8h1V6q0-2.075 1.463-3.537T12 1q2.075 0 3.538 1.463T17 6v2h1q.825 0 1.413.588T20 10v10q0 .825-.587 1.413T18 22zm6-5q.825 0 1.413-.587T14 15q0-.825-.587-1.412T12 13q-.825 0-1.412.588T10 15q0 .825.588 1.413T12 17M9 8h6V6q0-1.25-.875-2.125T12 3q-1.25 0-2.125.875T9 6z" />
                </svg>
                <input type="password" name="password" class="w-full outline-none" placeholder="Password">
            </div>
        </div>
        <div class="">
            <div class="bg-black text-center text-white rounded-lg px-3 p-2 hover:bg-zinc-700 duration-200 transition-color cursor-pointer ">
                <input id="submitButton" type="submit" class="w-full" value="Login" />
            </div>
        </div>
        <div class="flex justify-between">
            <div>
                <a href="/register" class="text-slate-500">Don't have an account? </a>
            </div>
            <div>
                <a href="/register" class="text-blue-500">Forgot Password? </a>
            </div>
        </div>
    </form>

</div>


<script>
    $(document).ready(function() {
        // Function to change text color
        $('#login').submit(function(event) {
            // Prevent default form submission
            event.preventDefault();

            $('#submitButton').val('Loading')
            var formData = $(this).serialize();

            // // AJAX request to submit form data
            $.ajax({
                type: 'POST',
                url: '/login', // Change 'submit.php' to your backend script URL
                data: formData,
                success: function(response) {
                    $('#submitButton').val('Login')
                    console.log(response)
                    console.log(response == 'success')
                    if (response == 'success') {
                        return window.location.href = '/dashboard';
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