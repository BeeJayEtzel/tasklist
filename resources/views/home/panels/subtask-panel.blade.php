<div class="subtask-panel">
    <h2>Subtasks</h2>
    <p v-if="activeTask" class="bold">- @{{ activeTask }}</p>
    <hr>
    <form action="/subtask/create" method="post" @submit.prevent="addSubtask()">
        <input type="text" name="description" v-model="subtaskToCreate.description" id="subtask-text" placeholder="Add subtask...">
        <input type="datetime-local" name="due_date" v-model="subtaskToCreate.due_date">
        <input type="submit" value="Add" class="panel-button">
    </form>
    <hr>
    <div v-for="subtask in subtasks">
        <p class="subtask" v-if="subtask.completed">
            <i class="far fa-check-square" @click="toggleCompletion"></i> 
                <s>@{{ subtask.description }}</s>
        </p>
        <p class="subtask" v-if="!subtask.completed">
            <i class="far fa-square" @click="toggleCompletion"></i> @{{ subtask.description }}
        </p>
    </div>


</div>