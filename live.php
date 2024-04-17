<?php
include("db.php");
$ref = "distress";
$fetch = $database->getReference($ref)->getValue();
foreach($fetch as $key => $row){
    // var_dump($row);
    $name = $row['firstName'] . ' ' . $row['lastName'];
?>
    <div class="flex mb-3 border border-[#bebebe] bg-white shadow-md rounded-md p-2">
        <div class="w-[5%] flex items-center justify-center p-1">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="red" height='40' width="40"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M256 32c14.2 0 27.3 7.5 34.5 19.8l216 368c7.3 12.4 7.3 27.7 .2 40.1S486.3 480 472 480H40c-14.3 0-27.6-7.7-34.7-20.1s-7-27.8 .2-40.1l216-368C228.7 39.5 241.8 32 256 32zm0 128c-13.3 0-24 10.7-24 24V296c0 13.3 10.7 24 24 24s24-10.7 24-24V184c0-13.3-10.7-24-24-24zm32 224a32 32 0 1 0 -64 0 32 32 0 1 0 64 0z"/></svg>
        </div>
        <div class="w-[80%] px-3">
            <p class="font-semibold"><?php echo $row['distress'] ?></p>
            <div class="flex justify-between items-center text-sm">
                <p><?php echo $name ?></p>
                <p><?php echo $row['address'] ?></p>
                <p><?php echo $row['phoneNumber'] ?></p>
                <p><?php echo $row['gender'] ?></p>
                <p><?php echo $row['age'] ?></p>
                <p><?php echo $row['medicalHistory'] ?></p>
            </div>
        </div>
        <div class="w-[15%] flex items-center text-sm">
            <button id="btn" name="view" class="block mx-auto px-6 py-1 bg-google-blue text-white rounded-sm">
                View
            </button>
        </div>
    </div>
    <script>
        $(document).ready(function(){
            // Define the click event for the button
            $("#fetchDataBtn").click(function(){
                // Additional data to be sent to the server
                var name = "John Doe";

                // Make an AJAX request when the button is clicked
                $.ajax({
                    url: 'modal.php', // URL of the PHP script to handle the request
                    type: 'GET', // HTTP method
                    data: { name: name }, // Additional data to be sent to the server
                    success: function(html) {
                        // Handle successful response
                        $("#result").html(html); // Display response in the result div
                    },
                    error: function(xhr, status, error) {
                        // Handle errors
                        console.error('Error fetching data:', error);
                    }
                });
            });
        });
    </script>
<?php
}
?>
