<div class="menu-panel">
    <h3>Projects</h3>
    @foreach($user->projects as $project)
        <p @click="getTasks({{ $project->id }}, '{{ $project->name }}')">{{ $project->name }}</p>
    @endforeach
        
    <form action="/project/create" method="post" @submit.prevent="addProject()">
        <input type="text" name="name" v-model="name" placeholder="Add project..." class="menu-text">
        <input type="submit" value="Add" class="panel-button menu-button">
    </form>
</div>