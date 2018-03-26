<div class="menu-panel">
    <p>Today</p>
    <p>Next 7 days</p>
    <p>Calendar</p>
    <hr>
    <h3>Projects</h3>
    @foreach($user->projects as $project)
        <p @click="getTasks({{ $project->id }})">{{ $project->name }}</p>
    @endforeach
</div>