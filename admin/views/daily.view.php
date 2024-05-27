    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<div class="mt-10 flex flex-col relative gap-6">
    <div class="absolute -z-10 top-0 left-0 right-0 bottom-0 flex items-center justify-center"> 
        <div id="modal" class="hidden bg-gradient-to-t from-slate-900 to-gray-900 p-10 rounded-lg z-10 flex flex-col gap-4">
                <h1>Do you really want to delete?</h1>
                <div class="flex items-center justify-center gap-2">
                     <a href="" class="bg-green-500  cursor-pointer hover:bg-green-700 duration-200 transition-colors p-1 px-3 rounded-md">Yes</a>
                     <span class="bg-red-500 cursor-pointer hover:bg-red-700 duration-200 transition-colors  p-1 px-3 rounded-md">Cancel</span>
                </div>
        </div>
    </div>
    <div class="border-b pb-2 border-gray-700">
        <h1 class="text-xl">Daily Analytics</h1>
          <div class="flex justify-end">
            <div  id="generate"class="cursor-pointer flex items-center  gap-2 bg-green-500 text-white px-3 p-2 rounded-md">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M20.68 7.014a3.85 3.85 0 0 0-.92-1.22l-3-2.72a4.15 4.15 0 0 0-2.39-1.07H8.21A5 5 0 0 0 3 6.864v10.3a5 5 0 0 0 3.31 4.53a4.74 4.74 0 0 0 1.92.3h7.56a5 5 0 0 0 5.21-4.86v-8.57a3.75 3.75 0 0 0-.32-1.55m-4.84 8.08l-2.66 2.67a1.69 1.69 0 0 1-.53.35c-.133.06-.275.097-.42.11a.9.9 0 0 1-.4 0a1.308 1.308 0 0 1-.42-.11a1.69 1.69 0 0 1-.53-.35l-2.66-2.67a1 1 0 0 1 1.41-1.41l1.4 1.4v-4.61a1 1 0 1 1 2 0v4.61l1.4-1.4a1 1 0 0 1 1.41 1.41m.22-7.69a1.08 1.08 0 0 1-1.09-1.08v-2.65c.28.152.551.322.81.51l3 2.73c.166.14.307.305.42.49z"/></svg>
                <button class="">Export Data</button>
            </div>
        </div>
    </div>

    <div class="bg-slate-800 p-2  rounded-lg flex flex-col ">
        <div class="flex flex-col">
            <labe>Select Day</labe>
            <input type="text" id="datetimepicker" placeholder="From Date" class="bg-slate-900 outline-none px-3 p-3 rounded-md form-input w-full">
        </div>
    </div>
     <div class="container flex flex-col items-center justify-center">
    
        <div class="flex justify-center w-full">
             <div class="chart-container 1">
            <canvas id="purposeChart"></canvas>
        </div>
        <div class="chart-container 2">
            <canvas id="laboratoryChart"></canvas>
        </div>
        </div>
       
    </div>
</div>
   <script src="xlsx.full.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
 var records_json = <?php echo $records_json; ?>;

var purposeChart;
var laboratoryChart;

flatpickr('#datetimepicker', {
    dateFormat: "F j, Y",
    onChange: function(selectedDates, dateStr, instance) {
        const selectedDate = formatDate(dateStr);
        let filteredRecords = [];
        let old = records_json;
        records_json.forEach(student => {
              console.log(selectedDate)
            const studentDate = student.time_in.split(' ')[0];
          
            if (selectedDate === studentDate) {
                 console.log('yes')
                filteredRecords.push(student);
            }
        });
        
        // Log filtered records to ensure they are being updated correctly
        chartt(filteredRecords);

    }
});

function formatDate(dateString) {
    const date = new Date(dateString);
    const year = date.getFullYear();
    const month = String(date.getMonth() + 1).padStart(2, '0');
    const day = String(date.getDate()).padStart(2, '0');
    const formattedDate = `${year}-${month}-${day}`;
    return formattedDate;
}

function chartt(records_json) {
    var purposes = {};
    records_json.forEach(function(record) {
        var key = record.purpose;
        if (!purposes[key]) {
            purposes[key] = 0;
        }
        purposes[key]++;
    });

    var purposeLabels = Object.keys(purposes);
    var purposeCounts = Object.values(purposes);

    var laboratories = {};
    records_json.forEach(function(record) {
        var key = record.lab_name;
        if (!laboratories[key]) {
            laboratories[key] = 0;
        }
        laboratories[key]++;
    });

    var laboratoryLabels = Object.keys(laboratories);
    var laboratoryCounts = Object.values(laboratories);

    // Log chart data to ensure it's being calculated correctly
    console.log("Purpose Labels: ", purposeLabels);
    console.log("Purpose Counts: ", purposeCounts);
    console.log("Laboratory Labels: ", laboratoryLabels);
    console.log("Laboratory Counts: ", laboratoryCounts);

    // Destroy existing charts if they exist
    if (purposeChart) {
        purposeChart.destroy();
    }
    if (laboratoryChart) {
        laboratoryChart.destroy();
    }

    // Create new purpose chart
    var ctxPurpose = document.getElementById('purposeChart').getContext('2d');
    purposeChart = new Chart(ctxPurpose, {
        type: 'pie',
        data: {
            labels: purposeLabels,
            datasets: [{
                data: purposeCounts,
                backgroundColor: ['rgba(255, 99, 132, 0.2)', 'rgba(54, 162, 235, 0.2)', 'rgba(255, 206, 86, 0.2)'],
                borderColor: ['rgba(255, 99, 132, 1)', 'rgba(54, 162, 235, 1)', 'rgba(255, 206, 86, 1)'],
                borderWidth: 1
            }]
        },
        options: {}
    });

    // Create new laboratory chart
    var ctxLaboratory = document.getElementById('laboratoryChart').getContext('2d');
    laboratoryChart = new Chart(ctxLaboratory, {
        type: 'pie',
        data: {
            labels: laboratoryLabels,
            datasets: [{
                data: laboratoryCounts,
                backgroundColor: ['rgba(255, 99, 132, 0.2)', 'rgba(54, 162, 235, 0.2)', 'rgba(255, 206, 86, 0.2)'],
                borderColor: ['rgba(255, 99, 132, 1)', 'rgba(54, 162, 235, 1)', 'rgba(255, 206, 86, 1)'],
                borderWidth: 1
            }]
        },
        options: {}
    });
}

// Initial call to display charts with initial data
chartt(records_json);

</script>