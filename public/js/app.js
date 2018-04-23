var app = new Vue({
    el: '#app',
    data: { 
        projects: [],
        tasks: [],
        subtasks: [],
        notes: [],
        name: '',
        description: '',
        project_id: 0,
        activeProject: "Project",
        activeTask: "",
        activeTask: "",
        due_date: '',
        subtaskToCreate: {
            description: '',
            due_date: '',
            task_id: '',
        },
        noteToCreate: {
            body: '',
            task_id: '',
        }
    },
    methods: { 
        getTasks(project, projectName) {
            var url = '/home/tasks/' + project; 
            this.project_id = project;
            this.activeProject = projectName;
            this.activeTask = "";
            this.subtasks = [];
            this.notes = [];
            axios.get(url).then(response => this.tasks = response.data);
        },
        addTask() {
            console.log(this.$data);
            axios.post('/task/create', this.$data)
                 .then(response => this.updateTasks())
                 .catch(errors => alert('Error!'));
            
        },
        getSubtasks(taskName) {
            this.activeTask = taskName.description;
            var url = '/home/subtasks/' + event.target.id; 
            this.subtaskToCreate.task_id = event.target.id; 
            axios.get(url).then(response => this.subtasks = response.data);
        },
        addSubtask() {
            console.log(this.$data.subtaskToCreate);
            var data = this.$data.subtaskToCreate;
            axios.post('/subtask/create', data)
                 .then(response => this.updateSubtasks())
                 .catch(errors => alert('Error!'));
        },
        getNotes() {
            var url = '/home/notes/' + event.target.id; 
            this.noteToCreate.task_id = event.target.id; 
            axios.get(url).then(response => this.notes = response.data);
        },
        addNote() {
            axios.post('/note/create', this.$data.noteToCreate)
                 .then(response => this.notes.push({
                     body: this.$data.noteToCreate.body,
                     task_id: this.$data.noteToCreate.task_id,
                 }))
                 .catch(errors => alert('Error!'));
        },
        getNote() {
            var url = '/home/notes/' + event.target.id; 
            this.noteToCreate.task_id = event.target.id; 
            console.log("url: " + url);
            axios.get(url).then(response => this.notes = response.data);
        },
        addProject() {
            var projectToCreate = {
                name: this.$data.name
            }
            axios.post('/project/create', projectToCreate)
                 .then(response => window.location.reload())
                 .catch(errors => alert('Error!'));
        },
        toggleCompletion(task) {
            if (task.completed === 1) {
                task.completed = 0;
            }
            else {
                task.completed = 1;
            }
            var url = '/task/complete/' + task.id;
            axios.post(url, {completed: task.completed})
                 .then(response => console.log("Success!"))
                 .catch(errors => alert('Error!'));
            
        },
        toggleSubtaskCompletion(subtask) {
            if (subtask.completed === 1) {
                subtask.completed = 0;
            }
            else {
                subtask.completed = 1;
            }
            var url = '/subtask/complete/' + subtask.id;
            axios.post(url, {completed: subtask.completed})
                 .then(response => console.log("Success!"))
                 .catch(errors => alert('Error!'));
            
        },
        deleteTask(task) {
            var url = '/task/delete/' + task.id;
            this.subtasks = [];
            this.notes = [];
            this.activeTask = "";
            axios.post(url, {id: task.id})
                 .then(response => this.removeObject(this.tasks, 'id', task.id))
                 .catch(error => alert('Problem deleting task!'));
        },
        deleteSubtask(subtask) {
            var url = '/subtask/delete/' + subtask.id;
            axios.post(url, {id: subtask.id})
                 .then(response => this.removeObject(this.subtasks, 'id', subtask.id));
        },
        deleteNote(note) {
            var url = '/note/delete/' + note.id;
            axios.post(url, {id: note.id})
                 .then(response => this.removeObject(this.notes, 'id', note.id));
        },
        deleteProject(project) {
            var url = '/project/delete/' + project; 
            axios.post(url, {id: project})
                 .then(response => window.location.reload());

        },
        formatDate(datetime) {
            var d = new Date(datetime);
            var dateStr = d.toLocaleDateString();
            dateStr += " " + d.toLocaleTimeString();
            return dateStr;
        },
        removeObject(array, property, value){
             array.forEach(function(result, index){
                 if(result[property] === value){
                     array.splice(index, 1);
                 }
             });       
        },
        isLate(task){
            var now = new Date();
            var due = new Date(task.due_date);
            if (!task.completed)
            {
                if (due < now){
                    return "red"
                }
            }

            return "";
        },
        updateTasks() {
            document.getElementById('task-form').reset();
            this.description = "";
            this.due_date = "";
            var url = '/home/tasks/' + this.project_id;
            axios.get(url)
                 .then(response => this.tasks = response.data)
        },
        updateSubtasks() {
            document.getElementById('subtask-form').reset();
            var url = '/home/subtasks/' + this.subtaskToCreate.task_id;
            this.subtaskToCreate.description = "";
            this.subtaskToCreate.due_date = "";
            axios.get(url)
                 .then(response => this.subtasks = response.data)
        }
    },
});