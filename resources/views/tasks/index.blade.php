<!DOCTYPE html>
<html>
<head><title>Tasks</title></head>
<body>
    <h2>Welcome, {{ Auth::user()->name }}</h2>
    <form method="POST" action="{{ route('tasks.store') }}">
        @csrf
        <input type="text" name="title" placeholder="New Task">
        <button type="submit">Add Task</button>
    </form>

    <h3>Your Tasks</h3>
    <ul>
        @foreach ($tasks as $task)
            <li>{{ $task->title }}</li>
        @endforeach
    </ul>

    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit">Logout</button>
    </form>
</body>
</html>
