<?php
// Check if rowData is set
if(isset($_GET['rowData'])) {
    // Decode the JSON data
    $rowData = $_GET['rowData']
?>
<!-- Modal HTML -->
<div id="myModal" class="modal bg-transparent flex items-center justify-center fixed left-0 bottom-0 w-full h-full z-50">
    <div class="modal-overlay absolute w-full h-full bg-black opacity-50"></div>

    <div class="modal-container bg-red-500 w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto py-12">

        <div class="modal-content py-4 text-left px-6">
            <span class="close absolute top-0 right-0 cursor-pointer py-4 px-4" onclick="closeModal()">
                <svg class="fill-current h-6 w-6 text-gray-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M6.293 6.293a1 1 0 011.414 0L10 8.586l2.293-2.293a1 1 0 111.414 1.414L11.414 10l2.293 2.293a1 1 0 01-1.414 1.414L10 11.414l-2.293 2.293a1 1 0 01-1.414-1.414L8.586 10 6.293 7.707a1 1 0 010-1.414z"/></svg>
            </span>

            <div class="text-center text-white">
            <div class="flex items-center justify-center p-1">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="white" height='50' width="50"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M256 32c14.2 0 27.3 7.5 34.5 19.8l216 368c7.3 12.4 7.3 27.7 .2 40.1S486.3 480 472 480H40c-14.3 0-27.6-7.7-34.7-20.1s-7-27.8 .2-40.1l216-368C228.7 39.5 241.8 32 256 32zm0 128c-13.3 0-24 10.7-24 24V296c0 13.3 10.7 24 24 24s24-10.7 24-24V184c0-13.3-10.7-24-24-24zm32 224a32 32 0 1 0 -64 0 32 32 0 1 0 64 0z"/></svg>
            </div>    
            <h2 class="text-2xl font-bold mb-4 text-white"><?php echo $rowData['distress']; ?></h2>
                <p class="text-white"><strong>Name:</strong> <?php echo $rowData['firstName'] . ' ' . $rowData['lastName']; ?></p>
                <p><strong>Address:</strong> <?php echo $rowData['address']; ?></p>
                <p><strong>Phone Number:</strong> <?php echo $rowData['phoneNumber']; ?></p>
                <p><strong>Gender:</strong> <?php echo $rowData['gender']; ?></p>
                <p><strong>Age:</strong> <?php echo $rowData['age']; ?></p>
                <p><strong>Medical History:</strong> <?php echo $rowData['medicalHistory']; ?></p>
            </div>
        </div>
    </div>
</div>

<script>
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
