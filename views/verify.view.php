<div class="max-w-[680px] mx-auto mt-14 shadow-lg bg-white rounded-md p-10 relative border border-gray-200">
    <div class="absolute top-[-20px] left-0 right-0 flex justify-center">
           <img src="../assets/images/ccs_logo.png" class="w-20 h-20" />
    </div>
    <div class="flex flex-col items-center gap-4 mt-14">

    <?php if ($message == "Email verified successfully!"): ?>
        <h1 class="text-green-500 text-lg font-medium">Email verified successfully!</h1>

        <div class="text-center text-md ">
            <p>You can now login</p>
            <span>Click <a href="./login" class="mx-1 text-blue-500">here</a> to login.</span>
        </div>
    <?php else: ?>
          <h1>Please Verify Your Email Address</h1>

        <div class="text-center text-sm ">
            <p>You're almost there! We sent an email to containing your 6-characters code</p>
            <strong><?php echo $email;?></strong>
        </div>
        <span class="text-sm text-red-500"><?php echo $message;?></span>
        <form action="" method="post">
            <div class="text-sm text-center">
                <label>Enter 6 characters-code</label>
                <div class="bg-white px-3 p-2 border mt-2">
                    <input  name="token"type="text" placeholder="### ###" class="outline-none border-none bg-transparent"/>
                </div>
            </div>
            <div class=" mt-3">
                <button class="hover:bg-green-600 duration-200 transition-colors bg-green-500 w-full px-3 p-2 rounded-md text-white text-sm">Verify Email</button>
            </div>
        </form>
    <?php endif;?>
    </div>
</div>
