<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link href="src/output.css" rel="stylesheet">
    <title>Document</title>
</head>
<body class="w-full overflow-hidden bg-[#f0f0f0]">
    <div class="absolute w-[100px] h-[100px] rounded-full bg-google-red"></div>
    <div class="absolute right-[500px] -top-64 w-[400px] h-[400px] rounded-full bg-google-blue"></div>
    <div class="absolute right-[100px] top-10 w-[130px] h-[130px] rounded-full bg-google-yellow"></div>
    <div class="absolute left-[200px] bottom-40 w-[70px] h-[70px] rounded-full bg-google-yellow"></div>
    <div class="absolute right-[10px] top-40 w-[70px] h-[70px] rounded-full bg-google-green"></div>
    <div class="absolute left-8 bottom-8 w-[150px] h-[150px] rounded-full bg-google-blue"></div>
    <div class="absolute left-[300px] bottom-20 w-[40px] h-[40px] rounded-full bg-google-green"></div>
    <div class="absolute -right-20 -bottom-[550px] w-[700px] h-[700px] rounded-full bg-google-red"></div>
    <div class="w-3/4 absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 px-10 py-10 rounded-3xl bg-white">
        <div class="w-full flex flex-col">
            <img src="src/public/images/logo.png" alt="" class="w-1/12 mb-4">
            <div class="w-full flex">
                <div class="w-1/2 flex flex-col gap-3">
                    <p class="text-3xl text-gray-800 mb-2 font-medium">Create a Google Rapid Response Account</p>
                    <p class="text-sm text-gray-800">Enter your Barangay Name</p>
                </div>
                <div class="w-1/2 relative">
                    <form action="" class="w-full">
                        <input type="text" name="barangay" class="w-full rounded-md shadow-sm outline-none border border-gray-500 p-4 placeholder-gray-500 mb-4" placeholder="Barangay">
                        <input type="password" name="password" class="w-full rounded-md shadow-sm outline-none border border-gray-500 p-4 placeholder-gray-500" placeholder="Password">
                        <div class="w-full flex items-center justify-end gap-4 mt-12">
                            <button class="py-2 px-8 bg-google-blue text-sm text-white rounded-full">Next</button>
                        </div>
                    </form>
                </div>
            </div>
            
        </div>
    </div>
</body>
</html>