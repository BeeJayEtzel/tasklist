<div class="subtask-panel" v-if="subtasks != 0">
    <h1>Subtasks</h1>
    <p v-for="subtask in subtasks">@{{ subtask.description }}</p>
</div>