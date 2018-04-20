<div class="note-panel">
    <h2>Notes</h2>
    <p v-if="activeTask" class="bold">- @{{ activeTask }}</p>
    <hr>
    <br>
    <div class="note" v-for="note in notes">
        <span>@{{ note.body }}</span>
        <a @click="deleteNote(note)"> &nbsp; &nbsp; &nbsp; <i class="fas fa-trash-alt"></i></a>
        <hr>
        <br>
    </div>

    <form action="/note/create" method="post" @submit.prevent="addNote()">
        <input type="text" name="description" v-model="noteToCreate.body" placeholder="Add note...">
        <input type="submit" value="Add" class="panel-button">
    </form>

</div>