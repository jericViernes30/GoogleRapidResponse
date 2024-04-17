<?php
date_default_timezone_set('Asia/Manila');
$current_date = date('l - F d, Y');
$current_time = date('g : i : s A');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link href="../src/output.css" rel="stylesheet">
    <title>Admin Home</title>
    <script>
    function updateClock() {
        // Get current time
        var currentTime = new Date();
        var hours = currentTime.getHours();
        var minutes = currentTime.getMinutes();
        var seconds = currentTime.getSeconds();

        // Convert to 12-hour format
        var meridiem = "AM"; // Default is AM
        if (hours >= 12) {
            meridiem = "PM";
        }
        if (hours > 12) {
            hours = hours - 12;
        }
        if (hours === 0) {
            hours = 12; // 12 AM is midnight
        }

        // Add leading zeros if needed
        hours = (hours < 10 ? "0" : "") + hours;
        minutes = (minutes < 10 ? "0" : "") + minutes;
        seconds = (seconds < 10 ? "0" : "") + seconds;

        // Display the time
        document.getElementById('clock').innerHTML = hours + ":" + minutes + ":" + seconds + " " + meridiem;
    }

        // Start the clock when the page loads
        window.onload = function() {
        updateClock(); // Call initially to avoid delay in displaying the time
        setInterval(updateClock, 1000); // Update the clock every second
    };
</script>

</head>
<body class="w-full flex bg-[#fffeff]">
    <div class="w-1/6 h-screen">
        <img src="../src/public/images/logo.png" alt="" class="w-1/2 block mx-auto py-10">
        <p class="text-center font-semibold text-lg">Google</p>
        <p class="text-center mb-10">Rapid Response</p>
    <div class="w-full flex flex-col justify-start">
        <button class="py-3 flex gap-4 items-center text-left bg-[#e8f0fd] px-8 rounded-tr-full rounded-br-full text-[#4778bc] text-sm">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" fill="#4778bc" width="15" height="15"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M80.3 44C69.8 69.9 64 98.2 64 128s5.8 58.1 16.3 84c6.6 16.4-1.3 35-17.7 41.7s-35-1.3-41.7-17.7C7.4 202.6 0 166.1 0 128S7.4 53.4 20.9 20C27.6 3.6 46.2-4.3 62.6 2.3S86.9 27.6 80.3 44zM555.1 20C568.6 53.4 576 89.9 576 128s-7.4 74.6-20.9 108c-6.6 16.4-25.3 24.3-41.7 17.7S489.1 228.4 495.7 212c10.5-25.9 16.3-54.2 16.3-84s-5.8-58.1-16.3-84C489.1 27.6 497 9 513.4 2.3s35 1.3 41.7 17.7zM352 128c0 23.7-12.9 44.4-32 55.4V480c0 17.7-14.3 32-32 32s-32-14.3-32-32V183.4c-19.1-11.1-32-31.7-32-55.4c0-35.3 28.7-64 64-64s64 28.7 64 64zM170.6 76.8C163.8 92.4 160 109.7 160 128s3.8 35.6 10.6 51.2c7.1 16.2-.3 35.1-16.5 42.1s-35.1-.3-42.1-16.5c-10.3-23.6-16-49.6-16-76.8s5.7-53.2 16-76.8c7.1-16.2 25.9-23.6 42.1-16.5s23.6 25.9 16.5 42.1zM464 51.2c10.3 23.6 16 49.6 16 76.8s-5.7 53.2-16 76.8c-7.1 16.2-25.9 23.6-42.1 16.5s-23.6-25.9-16.5-42.1c6.8-15.6 10.6-32.9 10.6-51.2s-3.8-35.6-10.6-51.2c-7.1-16.2 .3-35.1 16.5-42.1s35.1 .3 42.1 16.5z"/></svg>
            <p>Dashboard</p>
        </button>
        <button class="py-3 flex gap-4 items-center text-left hover:bg-[#dddfdd] px-8 rounded-tr-full rounded-br-full text-sm">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="black" width="15" height="15"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M75 75L41 41C25.9 25.9 0 36.6 0 57.9V168c0 13.3 10.7 24 24 24H134.1c21.4 0 32.1-25.9 17-41l-30.8-30.8C155 85.5 203 64 256 64c106 0 192 86 192 192s-86 192-192 192c-40.8 0-78.6-12.7-109.7-34.4c-14.5-10.1-34.4-6.6-44.6 7.9s-6.6 34.4 7.9 44.6C151.2 495 201.7 512 256 512c141.4 0 256-114.6 256-256S397.4 0 256 0C185.3 0 121.3 28.7 75 75zm181 53c-13.3 0-24 10.7-24 24V256c0 6.4 2.5 12.5 7 17l72 72c9.4 9.4 24.6 9.4 33.9 0s9.4-24.6 0-33.9l-65-65V152c0-13.3-10.7-24-24-24z"/></svg>
            <p>Emergency History</p>
        </button>
        <button class="py-3 flex gap-4 items-center text-left hover:bg-[#dddfdd] px-8 rounded-tr-full rounded-br-full text-sm">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" fill="black" width="15" height="15"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M72 88a56 56 0 1 1 112 0A56 56 0 1 1 72 88zM64 245.7C54 256.9 48 271.8 48 288s6 31.1 16 42.3V245.7zm144.4-49.3C178.7 222.7 160 261.2 160 304c0 34.3 12 65.8 32 90.5V416c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V389.2C26.2 371.2 0 332.7 0 288c0-61.9 50.1-112 112-112h32c24 0 46.2 7.5 64.4 20.3zM448 416V394.5c20-24.7 32-56.2 32-90.5c0-42.8-18.7-81.3-48.4-107.7C449.8 183.5 472 176 496 176h32c61.9 0 112 50.1 112 112c0 44.7-26.2 83.2-64 101.2V416c0 17.7-14.3 32-32 32H480c-17.7 0-32-14.3-32-32zm8-328a56 56 0 1 1 112 0A56 56 0 1 1 456 88zM576 245.7v84.7c10-11.3 16-26.1 16-42.3s-6-31.1-16-42.3zM320 32a64 64 0 1 1 0 128 64 64 0 1 1 0-128zM240 304c0 16.2 6 31 16 42.3V261.7c-10 11.3-16 26.1-16 42.3zm144-42.3v84.7c10-11.3 16-26.1 16-42.3s-6-31.1-16-42.3zM448 304c0 44.7-26.2 83.2-64 101.2V448c0 17.7-14.3 32-32 32H288c-17.7 0-32-14.3-32-32V405.2c-37.8-18-64-56.5-64-101.2c0-61.9 50.1-112 112-112h32c61.9 0 112 50.1 112 112z"/></svg>
            <p>Rescue Teams</p>
        </button>
        <button></button>
    </div>
    </div>
    <div class="w-4/5 p-4">
        <div class="w-full mb-10">
            <iframe class="block mx-auto" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3866.8920819198215!2d121.13128317486584!3d14.259515486187457!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397d88258da3383%3A0x3db6c2402700f58f!2sPamantasan%20ng%20Cabuyao!5e0!3m2!1sen!2sph!4v1713369464289!5m2!1sen!2sph" width="800" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <p class="text-center mb-5">As of <?php echo $current_date; ?> <span id="clock"></span></p>
        <div id="table" class="w-2/3 block mx-auto">

        </div>
    </div>
    <script>
        $(document).ready(function(){
            // Function to fetch data asynchronously
            function fetchData() {
                $.ajax({
                    url: '../live.php', // Path to PHP file to fetch data
                    type: 'GET',
                    success: function(html) {
                        // Clear previous content
                        $('#table').html(html)
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