<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>
</head>
<body>
    <h1>Edit Student</h1>

    <form action="{{ route('students.update', $student->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Name:</label>
        <input type="text" name="name" value="{{ $student->name }}" required><br><br>

        <label>Email:</label>
        <input type="email" name="email" value="{{ $student->email }}" required><br><br>

        <label>Fee:</label>
        <input type="number" step="0.01" name="fee" value="{{ $student->fee }}" required><br><br>

        <button type="submit">Update</button>
    </form>
</body>
</html>
