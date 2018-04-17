<div class="task-panel" id='task-panel'>
    <h2>@{{ activeProject }}</h2>
        <div class="task">
            <p v-for="task in tasks" :id='task.id' @click="getSubtasks(), getNotes()">
            <div class="task" v-if="task.completed">
                <i class="far fa-check-square" @click="toggleCompletion"></i> 
                    <s>@{{ task.description }}</s>
            </div>
            <div class="task" v-if="!task.completed">
                <i class="far fa-square" @click="toggleCompletion"></i> @{{ task.description }}
            </div>
            </p>
        </div>

    <form action="/task/create" method="post" @submit.prevent="addTask()">
        <input type="text" name="description" v-model="description">
        <input type="datetime-local" name="due_date" v-model="due_date">
        <input type="submit" value="Submit" class="panel-button">
    </form>

</div>
