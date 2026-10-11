<!DOCTYPE html>
<html>
<head>
    <title>Students</title>
</head>
<body>
    <h1>Students List</h1>

    <a href="{{ route('students.create') }}">➕ Add New Student</a>

    <ul>
        @foreach($students as $student)
            <li>
                {{ $student->name }} - {{ $student->email }} - Rs.{{ $student->fee }}
                <a href="{{ route('students.show', $student->id) }}">View</a> |
                <a href="{{ route('students.edit', $student->id) }}">Edit</a> |
                <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>
