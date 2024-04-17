<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link href="src/output.css" rel="stylesheet">
    <title>Document</title>
</head>
<body class="w-full">
    <div class="w-1/2 mx-auto flex flex-col mt-20">
        <div class="w-full flex py-1">
            <p class="w-1/2 font-medium">Message</p>
        </div>
        <div id="table" class="w-full py-1">
        </div>
    </div>
    <script>
        $(document).ready(function(){
            // Function to fetch data asynchronously
            function fetchData() {
                $.ajax({
                    url: 'live.php', // Path to PHP file to fetch data
                    type: 'GET',
                    success: function(html) {
                        $('#table').html(html);
                        console.log("Changed")
                    },
                    error: function(xhr, status, error) {
                        console.error('Error fetching data:', error);
                    }
                });
            }

            // Initial data fetch
            fetchData();

            // Fetch data every 5 seconds
            setInterval(fetchData, 1000);
        });
    </script>
</body>
</html>