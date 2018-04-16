<div class="subtask-panel">
    <h1>Subtasks</h1>
    <p v-for="subtask in subtasks">@{{ subtask.description }}</p>

    <form action="/subtask/create" method="post" @submit.prevent="addSubtask()">
        <input type="text" name="description" v-model="subtaskToCreate.description">
        <input type="datetime-local" name="due_date" v-model="subtaskToCreate.due_date">
        <input type="submit" value="Submit">
    </form>

</div>