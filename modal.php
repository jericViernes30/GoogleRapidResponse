<?php
// Check if rowData is set
if(isset($_GET['rowData'])) {
    // Decode the JSON data
    $rowData = $_GET['rowData'];
    $name = $rowData['firstName'] . ' ' . $rowData['lastName'];
?>
<!-- Modal HTML -->
<div id="myModal" class="modal w-1/4 bg-google-red rounded-xl absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 p-6">
    <div class="flex flex-col w-full">
        <div class="w-full flex items-center justify-end">
            <button onclick="closeModal()">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="white" width="20" height="20"><path d="M6.293 6.293a1 1 0 011.414 0L10 8.586l2.293-2.293a1 1 0 111.414 1.414L11.414 10l2.293 2.293a1 1 0 01-1.414 1.414L10 11.414l-2.293 2.293a1 1 0 01-1.414-1.414L8.586 10 6.293 7.707a1 1 0 010-1.414z"/></svg>
            </button>
        </div>
        <div class="w-full mb-4 py-4">
            <svg class="block mx-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="white" height='50' width="50"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M256 32c14.2 0 27.3 7.5 34.5 19.8l216 368c7.3 12.4 7.3 27.7 .2 40.1S486.3 480 472 480H40c-14.3 0-27.6-7.7-34.7-20.1s-7-27.8 .2-40.1l216-368C228.7 39.5 241.8 32 256 32zm0 128c-13.3 0-24 10.7-24 24V296c0 13.3 10.7 24 24 24s24-10.7 24-24V184c0-13.3-10.7-24-24-24zm32 224a32 32 0 1 0 -64 0 32 32 0 1 0 64 0z"/></svg>
            <p class="text-center uppercase font-semibold text-white"><?php echo $rowData['distress'] ?></p>
        </div>
        <div class="flex w-full text-white mb-4">
            <div class="w-1/4 text-left font-medium">
                <p>Name</p>
                <p>Address</p>
                <p>Phone</p>
                <p>Gender</p>
                <p>Age</p>
                <p>Medical History</p>
            </div>
            <div class="w-3/4 text-left font-normal">
                <p><?php echo $name ?></p>
                <p><?php echo $rowData['address']; ?></p>
                <p><?php echo $rowData['phoneNumber']; ?></p>
                <p><?php echo $rowData['gender']; ?></p>
                <p><?php echo $rowData['age']; ?></p>
                <p><?php echo $rowData['medicalHistory']; ?></p>
            </div>
        </div>
        <div class="w-full text-white">
            <form action="../calls.php" method="POST" class="w-full flex gap-2 justify-between">
                <button name="noted" class="bg-google-yellow w-1/3 py-2 rounded-md">
                    Note call
                </button>
                <button name="confirm" class="bg-google-blue w-1/3 py-2 rounded-md">
                    Confirm
                </button>
                <button name="dispatch" class="bg-google-green w-1/3 py-2 rounded-md">
                    Dispatch
                </button>
                <input type="hidden" name="name" value="<?php echo $name ?>">
                <input type="hidden" name="address" value="<?php echo $rowData['address']; ?>">
                <input type="hidden" name="number" value="<?php echo $rowData['phoneNumber']; ?>">
            </form>
        </div>
    </div>
</div>

<script>
    var modal = document.getElementById('myModal');
    // Function to close modal
    function closeModal() {
        var modal = document.getElementById('myModal');
        modal.style.display = 'none';
    }
</script>

<?php
} else {
    // If rowData is not set, display an error message or handle it accordingly
    echo "Error: Row data not provided.";
}
?>