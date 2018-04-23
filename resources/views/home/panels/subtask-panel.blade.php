<div class="subtask-panel">
    <h2>Subtasks</h2>
    <p v-if="activeTask" class="bold">- @{{ activeTask }}</p>
    <hr>
    <form action="/subtask/create" method="post" @submit.prevent="addSubtask()" id='subtask-form'>
        <input type="text" name="description" v-model="subtaskToCreate.description" id="subtask-text" placeholder="Add subtask...">
        <input type="datetime-local" name="due_date" v-model="subtaskToCreate.due_date">
        <input type="submit" value="Add" class="panel-button">
    </form>
    <hr>
        <div v-for="subtask in subtasks">
            <input type="checkbox" v-if="subtask.completed === 0" @click="toggleSubtaskCompletion(subtask)">
            <input type="checkbox" v-else checked @click="toggleSubtaskCompletion(subtask)">
            <span :id="subtask.id" class="task" v-if="subtask.completed === 0">
                @{{ subtask.description }} 
            </span>
            <span class="grey" :id="subtask.id" class="task" v-if="subtask.completed === 1">
                <s>@{{ subtask.description }}</s>
            </span>
            <a @click="deleteSubtask(subtask)"> &nbsp; &nbsp; &nbsp; <i class="fas fa-trash-alt"></i></a>
            <hr>
        </div>
</div>