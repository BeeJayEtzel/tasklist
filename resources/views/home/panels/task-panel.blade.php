<div class="task-panel" id='task-panel' v-if="tasks != 0">
    <h2>Project name</h2>
        <div class="task">
            <p v-for="task in tasks" :id='task.id' @click="getSubtasks(), getNotes()">@{{ task.description }}</p>
        </div>

    <form action="/task/create" method="post" @submit.prevent="addTask()">
        <input type="text" name="description" v-model="description">
        <input type="datetime-local" name="due_date" v-model="due_date">
        <input type="submit" value="Submit">
    </form>

</div>
