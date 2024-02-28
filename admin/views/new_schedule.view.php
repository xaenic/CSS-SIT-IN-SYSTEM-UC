<div class="mt-10 flex flex-col gap-6">
    <div class="border-b pb-2 border-gray-700">
        <h1 class="text-xl">New Schedule</h1>
    </div>
    <h1 class="text-red-400"><?php echo $error; ?></h1>
    <div class="bg-slate-800   rounded-lg flex flex-col p-5">

        <form action="" method="post" class="flex flex-col gap-4">
            <div class="flex flex-col gap-2">

                <label class="text-slate-300 text-sm font-thin ">DAY</label>
                <select id="mySelect" name="days[]" data-placeholder="Choose a day..." multiple class="!bg-slate-700">
                    <option></option>
                    <option value="MONDAY">MONDAY</option>
                    <option value="TUESDAY">TUESDAY</option>
                    <option value="WEDNESDAY">WEDNESDAY</option>
                    <option value="THURSDAY">THURSDAY</option>
                    <option value="FRIDAY">FRIDAY</option>
                    <option value="SATURDAY">SATURDAY</option>
                </select>
            </div>
            <div class="flex flex-col gap-2">
                <label class="text-slate-300 text-sm font-thin">START TIME</label>
                <div class="bg-slate-700  p-2 rounded-md ">
                    <input value="<?php echo $start_time; ?>" type="time" name="start_time" class="bg-slate-700 border-none outline-none">

                </div>
            </div>
            <div class="flex flex-col gap-2">
                <label class="text-slate-300 text-sm font-thin">END TIME</label>
                <div class="bg-slate-700  p-2 rounded-md ">
                    <input type="time" value="<?php echo $end_time; ?>" name="end_time" class="bg-slate-700 border-none outline-none">

                </div>
            </div>

            <div class="flex justify-end">
                <input type="submit" value="Save" class="cursor-pointer bg-slate-900 px-3 p-2 rounded-md" />
            </div>
        </form>

    </div>
</div>