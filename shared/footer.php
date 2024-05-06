     <script type="text/javascript" src="../assets/chosen.jquery.js"></script>
     <script>
         $(document).ready(function() {
            const modal = $("#reportModal");
             $('#mySelect').chosen({
                 allow_single_deselect: true,
                 placeholder_text_multiple: 'Choose some countries...',
                 width: '100%',
                 background: 'black',
             });
         });
     </script>

     </body>

     </html>