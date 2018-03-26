<div class="subtask-panel">
     <p v-for="subtask in subtasks" @click="getSubtasks()">@{{ subtask.description }}</p>
</div>