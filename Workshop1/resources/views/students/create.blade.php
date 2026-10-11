<!DOCTYPE html>
<html>
<head>
    <title>Create Student</title>
</head>
<body>
    <h1>Add New Student</h1>

    <form action="{{ route('students.store') }}" method="POST">
        @csrf
        <label>Name:</label>
        <input type="text" name="name" required><br><br>

        <label>Email:</label>
        <input type="email" name="email" required><br><br>

        <label>Fee:</label>
        <input type="number" step="0.01" name="fee" required><br><br>

        <button type="submit">Save</button>
    </form>
</body>
</html>
