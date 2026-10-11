<!DOCTYPE html>
<html>
<head>
    <title>Edit Course</title>
</head>
<body>
    <h1>Edit Course</h1>

    <form action="{{ route('courses.update', $course->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Title:</label>
        <input type="text" name="title" value="{{ $course->title }}" required><br><br>

        <label>Description:</label>
        <textarea name="description" required>{{ $course->description }}</textarea><br><br>

        <label>Difficulty:</label>
        <input type="text" name="difficulty" value="{{ $course->difficulty }}" required><br><br>

        <button type="submit">Update</button>
    </form>
</body>
</html>
