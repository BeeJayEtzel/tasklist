<div class="subtask-panel">
    <h1>Subtasks</h1>
    <p v-for="subtask in subtasks">
            <div class="subtask" v-if="subtask.completed">
                <i class="far fa-check-square" @click="toggleCompletion"></i> 
                    <s>@{{ subtask.description }}</s>
            </div>
            <div class="subtask" v-if="!subtask.completed">
                <i class="far fa-square" @click="toggleCompletion"></i> @{{ subtask.description }}
            </div>
    </p>

    <form action="/subtask/create" method="post" @submit.prevent="addSubtask()">
        <input type="text" name="description" v-model="subtaskToCreate.description">
        <input type="datetime-local" name="due_date" v-model="subtaskToCreate.due_date">
        <input type="submit" value="Submit" class="panel-button">
    </form>

</div>