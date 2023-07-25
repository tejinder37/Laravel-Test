<x-app-layout>

    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <h1>Create Task</h1>
    <form action="{{route('tasks.store')}}" method="post">
        @csrf
        <label for="name">Task Name</label>
        <input type="text" name="name" id='name' required>
        <br>
        <label for="number">Number</label>
        <input type="number" name="number" id="number">
        <br>
        <label for="user_id">Assign Task to User:</label>
        <select name="user_id" id="user_id">
            <option value="">No User Assigned</option>
            @foreach ($users as $user)
            <option value="{{ $user->id }}">{{ $user->name }}</option>
            @endforeach
        </select>
        <br>
        <button type="submit"> Create Task</button>
    </form>
</x-app-layout>