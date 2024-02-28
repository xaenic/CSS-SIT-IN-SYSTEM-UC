<div class="mt-10 flex flex-col gap-6">
    <div class="border-b pb-2 border-gray-700">
        <h1 class="text-xl">New Laboratory</h1>
    </div>
    <h1 class="text-red-400"><?php echo $error; ?></h1>
    <div class="bg-slate-800   rounded-lg flex flex-col p-5">

        <form action="" method="post" class="flex flex-col gap-4">
            <div class="flex flex-col gap-2">

                <label class="text-slate-300 text-sm font-thin">Name</label>

                <div class="bg-slate-700  p-2 rounded-md ">
                    <input type="text" value="<?php echo $room_name ?>" name="room_name" class="border-none outline-none bg-transparent w-full" />
                </div>
            </div>
            <div class="flex flex-col gap-2">
                <label class="text-slate-300 text-sm font-thin">Number</label>
                <div class="bg-slate-700  p-2 rounded-md ">
                    <input type="number" name="room_number" value="<?php echo $room_number ?>" class="border-none outline-none bg-transparent w-full" />
                </div>
            </div>
            <div class="flex flex-col gap-2">
                <label class="text-slate-300 text-sm font-thin">Status</label>
                <select name="active" class="bg-slate-700 p-2 rounded-md">
                    <option value="1">Active</option>
                    <option value="0">Inactive</option>
                </select>
            </div>
            <div class="flex justify-end">
                <input type="submit" value="Save" class="cursor-pointer bg-slate-900 px-3 p-2 rounded-md" />
            </div>
        </form>

    </div>
</div>