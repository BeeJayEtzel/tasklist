<div class="note-panel" v-if="notes != 0 ">
    <h1>Notes</h1>
    <p v-for="note in notes">@{{ note.body }}</p>

    <form action="/note/create" method="post" @submit.prevent="addNote()">
        <input type="text" name="description" v-model="noteToCreate.body">
        <input type="submit" value="Submit">
    </form>

</div>