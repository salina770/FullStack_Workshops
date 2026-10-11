<!DOCTYPE html>
<html>
<head>
    <title>Course Details</title>
</head>
<body>
    <h1>Course Details</h1>
    <p><strong>Title:</strong> {{ $course->title }}</p>
    <p><strong>Description:</strong> {{ $course->description }}</p>
    <p><strong>Difficulty:</strong> {{ $course->difficulty }}</p>

    <a href="{{ route('courses.edit', $course->id) }}">Edit</a> |
    <form action="{{ route('courses.destroy', $course->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
</body>
</html>
