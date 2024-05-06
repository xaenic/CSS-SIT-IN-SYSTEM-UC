


<div class="mt-10 flex flex-col relative gap-6">
    <div class="border-b pb-2 border-gray-700">
        <h1 class="text-xl"><?php echo $page_title;?></h1>
          <div class="flex justify-end">
            <div id="add"  class="cursor-pointer flex items-center  gap-2 bg-green-500 text-white px-3 p-2 rounded-md">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M20 14h-6v6h-4v-6H4v-4h6V4h4v6h6z"></path></svg>
                <button  class="text-sm">Announcement</button>
            </div>
        </div>
    </div>

    <div class="overflow-x-auto">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 ">
                <thead class="text-xs bg-gradient-to-l to-slate-800 from-gray-900 uppercase ">
                    <tr>
                        <th class="border px-4 py-4 font-medium border-none text-slate-300 text-center font-bold">STUDENT ID</th>
                        <th class="border px-4 py-4 font-medium border-none text-slate-300 text-center font-bold">NAME</th>
                        <th class="border px-4 py-4 font-medium border-none text-slate-300 text-center">FEEDBACk</th>
                        <th class="border px-4 py-4 font-medium border-none text-slate-300 text-center">SUBMITTED AT</th>
                    </tr>
                </thead>
                <tbody id="tbody" class="relative">
                    <?php foreach($feedbacks as $feedback) : ?>
                    <tr class="odd:bg-gray-700 bg-slate-800">
                            <td class="border px-4 py-4 border-none text-center text-xs md:text-sm text-white"><?php echo $feedback['user_id'];?></td>
                            <td class="border px-4 py-4 border-none text-center text-xs md:text-sm text-white"><?php echo $feedback['first_name'];?> <?php echo $feedback['last_name'];?></td>
                            <td class="border px-4 py-4 border-none text-center text-xs md:text-sm text-white"><?php echo $feedback['content'];?></td>
                            
                            <td class="border px-4 py-4 border-none text-center text-xs md:text-sm text-white"><?php echo $feedback['date_created'];?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>

            </table>
            <div class="p-5 flex justify-between text-sm mt-5 border-t border-gray-600">
                <div>
                    Showing 1 to 1 of <?php echo count($feedbacks); ?> entries
                </div>
                <div>
                    prev next
                </div>
            </div>
        </div>
</div>



<script>
     $(document).ready(function() {
        const modal = $("#modal");
        const announement = $("#announcement");
        const status = $("#status");
        const title = $("#title");
        const visibility = $("#visibility");
        const content = $("#editor");
        $("#add").click(function() {
            modal.removeClass("hidden");
            modal.addClass("flex");
        })
         $("#close").click(function() {
            modal.addClass("hidden");
            modal.removeClass("flex");
        })
         $("#saveDraftBtn").click(function() {
            status.val('0');

            if(content.val() == "" || title.val() == "" ||visibility.val() == ""){
                alert('input all fields');
                return;
            }
            announcement.submit();
        })
         $("#publishBtn").click(function() {
            status.val('1');
            if(content.val() == "" || title.val() == "" ||visibility.val() == ""){
                alert('input all fields');
                return;
            }
            announcement.submit();
        })
        var editor = new Simditor({
            textarea: $('#editor')
            //optional options
            });
     });
</script>