<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-gray-200 flex items-center justify-center min-h-screen">

    <div class="bg-blue-50 p-8 rounded-2xl shadow-lg w-full max-w-md">
        <h2 class="text-2xl font-bold mb-6 text-center">Student Form</h2>

       
        <form method="POST" action="form_action.php" enctype="multipart/form-data"  class="space-y-4">
            <div>
                <label for="text-medium">Name</label>
                <input type="text" name="name"  class="w-full px-4 py-2 border rounded-2xl" required>
            </div>
            <div>
                <label for="text-medium">image</label>
                <input type="file" name="image"  class="w-full px-4 py-2 border rounded-2xl" >
            </div>
            <div>
                <label for="text-medium">Email</label>
                <input type="email" name="email" class="w-full px-4 py-2 border rounded-2xl" required>
            </div>
            <div>
                <label for="text-medium">City</label>
                <select name="city"  class="w-full px-4 py-2 border rounded-2xl" required>
                    <option value="">--Select City--</option>
                    <option value="Lahore">Lahore</option>
                    <option value="Multan">Multan</option>
                    <option value="Islamabad">Islamabad</option>
                    <option value="Karachi">Karachi</option>
                </select>
            </div>
            <div>
                <label for="text-medium">Age</label>
                <input type="number" name="age" class="w-full px-4 py-2 border rounded-2xl" required>
            </div>
            <div>
                <label for="block mb-1 text-medium">Course_Id</label>
                <select  name="course_id"
                    class="w-full px-4 py-2 border rounded-2xl" required>
                    <option value="">--Select Courses--</option>
                    <option value="1">Web Development</option>
                    <option value="2">Digital Marketing</option>
                    <option value="3">Graphic Design</option>
                    <option value="4">Data Science</option>
                </select>
            </div>
            <button class="bg-blue-500 text-white flex justify-center text-center m-auto w-36
 px-4 py-2 border rounded-2xl hover:bg-pink-600 transition">Submit</button>
        </form>

    </div>
</body>

</html>