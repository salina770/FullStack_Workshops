<!DOCTYPE html>
<html>
<head>
    <title>Courses</title>
</head>
<body>
    <h1>Courses List</h1>

    <a href="{{ route('courses.create') }}">➕ Add New Course</a>

    <ul>
        @foreach($courses as $course)
            <li>
                {{ $course->title }} ({{ $course->difficulty }}) - {{ $course->description }}
                <a href="{{ route('courses.show', $course->id) }}">View</a> |
                <a href="{{ route('courses.edit', $course->id) }}">Edit</a> |
                <form action="{{ route('courses.destroy', $course->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>
