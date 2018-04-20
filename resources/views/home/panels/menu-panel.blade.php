<div class="menu-panel">
    <h1><a href="/">Tasklist</a></h1>
    <h3>Projects</h3>
    <hr> 
    @foreach($user->projects as $project)
        <p class="project" @click="getTasks({{ $project->id }}, '{{ $project->name }}')">
            {{ $project->name }}
            <a @click="deleteProject({{ $project->id }})" class="right"> &nbsp; &nbsp; &nbsp; <i class="fas fa-trash-alt"></i></a>
        </p>
    @endforeach
    <hr> 
    <form action="/project/create" method="post" @submit.prevent="addProject()">
        <input type="text" name="name" v-model="name" placeholder="Add project..." class="menu-text">
        <input type="submit" value="Add" class="panel-button menu-button">
    </form>
</div>