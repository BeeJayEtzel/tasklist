<div class="note-panel">
    <h2>Notes</h2>
    <p v-if="activeTask" class="bold">- @{{ activeTask }}</p>
    <p v-for="note in notes">@{{ note.body }}</p>

    <form action="/note/create" method="post" @submit.prevent="addNote()">
        <input type="text" name="description" v-model="noteToCreate.body" placeholder="Add note...">
        <input type="submit" value="Add" class="panel-button">
    </form>

</div>