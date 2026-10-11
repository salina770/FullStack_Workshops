<!DOCTYPE html>
<html>
<head>
    <title>Create Course</title>
</head>
<body>
    <h1>Add New Course</h1>

    <form action="{{ route('courses.store') }}" method="POST">
        @csrf
        <label>Title:</label>
        <input type="text" name="title" required><br><br>

        <label>Description:</label>
        <textarea name="description" required></textarea><br><br>

        <label>Difficulty:</label>
        <input type="text" name="difficulty" required><br><br>

        <button type="submit">Save</button>
    </form>
</body>
</html>
