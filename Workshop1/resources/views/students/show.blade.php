<!DOCTYPE html>
<html>
<head>
    <title>Student Details</title>
</head>
<body>
    <h1>Student Details</h1>
    <p><strong>Name:</strong> {{ $student->name }}</p>
    <p><strong>Email:</strong> {{ $student->email }}</p>
    <p><strong>Fee:</strong> Rs.{{ $student->fee }}</p>

    <a href="{{ route('students.edit', $student->id) }}">Edit</a> |
    <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
</body>
</html>
