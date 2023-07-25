<x-app-layout>

    <h1>Task List</h1>

    @if ($users->isEmpty())
    <p>No users found.</p>
    @else
    <table class="task-table">
        <thead>
            <tr>
                <th>Sr. No</th>
                <th>User</th>
                <th>Task Name</th>
                <th>Task Number</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            @if ($user->tasks->isEmpty())
            <tr>
                <td>{{ $user->name }}</td>
                <td colspan="2">No tasks assigned.</td>
            </tr>
            @else
            @foreach ($user->tasks as $task)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $task->name }}</td>
                <td>{{ $task->number }}</td>
            </tr>
            @endforeach
            @endif
            @endforeach
        </tbody>
    </table>
    @endif

</x-app-layout>