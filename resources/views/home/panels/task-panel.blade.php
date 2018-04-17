<div class="task-panel" id='task-panel'>
    <h2>@{{ activeProject }}</h2>
        <div class="task">
            <div v-for="task in tasks" :id='task.id' >
            <a v-if="true" @click="toggleCompletion(task)">
                <span v-if="task.completed === 1" class="far fa-check-square"></span> 
                <span v-if="task.completed === 0" class="far fa-square"></span> 
            </a>
            <a v-else="task.completed === 0" @click="toggleCompletion(task)">
                this is a test
            </a>
                <span :id="task.id" class="task" v-if="task.completed === 0" @click="getSubtasks(task), getNotes()">
                    @{{ task.description }} 
                </span>
                <span class="right">@{{ formatDate(task.due_date) }}</span>
                <span :id="task.id" class="task" v-if="task.completed === 1" @click="getSubtasks(), getNotes()">
                    <s>@{{ task.description }}</s>
                </span>
                <hr>
            </div>
        </div>

    <form action="/task/create" method="post" @submit.prevent="addTask()">
        <input type="text" name="description" v-model="description" placeholder="Add task...">
        <input type="datetime-local" name="due_date" v-model="due_date">
        <input type="submit" value="Submit" class="panel-button">
    </form>

</div>
