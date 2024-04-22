 <h1 class="text-xl text-white mt-5">Profile Page</h1>
 <?php echo $message;?>
 <div class="flex  justify-start  items-center  mt-8 gap-4">
     <div class=" flex  justify-start text-white  w-full  rounded-md  gap-3">
         <form class="bg-slate-800 grid grid-cols-2 gap-4  text-white  rounded-md p-5 " action="" method="post">
            <div class="text-sm flex flex-col justify-between gap-2">
                <label>First Name</label>
                <div class="bg-gray-900 rounded-md px-3 p-2 text-sm">
                    <input name="first_name"  value="<?php echo $user['first_name']; ?>" type="text" class="w-full outline-none bg-transparent"/>
                </div>
            </div>
            <div class="text-sm flex flex-col justify-between gap-2">
                <label>Last Name</label>
                <div class="bg-gray-900 rounded-md px-3 p-2 text-sm">
                    <input name="last_name" value="<?php echo $user['last_name']; ?>" type="text" class="w-full outline-none bg-transparent"/>
                </div>
            </div>
             <div class="text-sm flex flex-col justify-between gap-2">
                <label class="shrink-0 flex-1">Course</label>
                <select name="course" class="w-full bg-gray-900  px-3 p-2 rounded-md text-white outline-none">
                        <option value="BSIT" <?php if ($user['course'] == 'BSIT') echo 'selected'; ?>>BSIT</option>
                        <option value="BSCS" <?php if ($user['course'] == 'BSCS') echo 'selected'; ?>>BSCS</option>
                        <option value="BSBA" <?php if ($user['course'] == 'BSBA') echo 'selected'; ?>>BSBA</option>
                        <option value="BSCPE" <?php if ($user['course'] == 'BSCPE') echo 'selected'; ?>>BSCPE</option>
                </select>
                
            </div>
              <div class="text-sm flex flex-col justify-between gap-2">
                <label class="shrink-0 flex-1">Year</label>
                <select name="year" class="w-full bg-gray-900  px-3 p-2 rounded-md text-white outline-none">
                        <option value="1st" <?php if ($user['year'] == '1st') echo 'selected'; ?>>1st Year</option>
                        <option value="2nd" <?php if ($user['year'] == '2nd') echo 'selected'; ?>>2nd Year</option>
                        <option value="3rd" <?php if ($user['year'] == '3rd') echo 'selected'; ?>>3rd Year</option>
                        <option value="4th" <?php if ($user['year'] == '4th') echo 'selected'; ?>>4th Year</option>
                </select>
                
            </div>
            <div class="col-span-2 text-sm flex flex-col justify-between gap-2">
                <label>Email</label>
                <div class="bg-gray-900 rounded-md px-3 p-2 text-sm">
                    <input type="email" name="email"  value="<?php echo $user['email']; ?>"  class="w-full outline-none bg-transparent"/>
                </div>
            </div>
             <div class="col-span-2 text-sm flex flex-col justify-between gap-2">
                <label>Password</label>
                <div class="bg-gray-900 rounded-md px-3 p-2 text-sm">
                    <input type="password" name="password" class="w-full outline-none bg-transparent"/>
                </div>
            </div>
            <button class="col-span-2 w-full bg-gray-950 text-white p-2 rounded-md">Update Profile</button>
         </form>
     </div>
 </div>