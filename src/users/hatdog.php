<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="../output.css" rel="stylesheet">
</head>
<body>
  <div class="w-full mt-20">
    <p class="font-semibold text-center mb-5">Add Users</p>
    <form action="add.php" method="POST" class="w-1/4 flex mx-auto flex-col gap-2 px-6">
      <div class="flex w-full flex-col gap-2">
        <label for="">Name</label>
        <input type="text" name="name" class="w-full py-1 rounded-md outline-none border border-[#bebebe] shadow-md px-2">
      </div>
      <div class="flex w-full flex-col gap-2">
        <label for="">Gender</label>
        <input type="text" name="gender" class="w-full py-1 rounded-md outline-none border border-[#bebebe] shadow-md px-2">
      </div>
      <button name="add" class="bg-blue-500 w-1/2 text-white rounded-lg py-1 mt-2">Submit</button>
    </form>
  </div>
</body>
</html>