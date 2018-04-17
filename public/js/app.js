var app = new Vue({
    el: '#app',
    data: { 
        tasks: [],
        subtasks: [],
        notes: [],
        name: '',
        description: '',
        project_id: 0,
        activeProject: "Today",
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
            console.log("url: " + url);
            axios.get(url).then(response => this.tasks = response.data);
        },
        addTask() {
            axios.post('/task/create', this.$data)
                 .then(response => this.tasks.push(this.$data))
                 .catch(errors => alert('Error!'));
            
        },
        getSubtasks(taskName) {
            this.activeTask = taskName.description;
            var url = '/home/subtasks/' + event.target.id; 
            this.subtaskToCreate.task_id = event.target.id; 
            console.log("url: " + url);
            axios.get(url).then(response => this.subtasks = response.data);
        },
        addSubtask() {
            console.log(this.$data.subtaskToCreate);
            var data = this.$data.subtaskToCreate;
            document.getElementById('subtask-text').value = "";
            axios.post('/subtask/create', data)
                 .then(response => this.subtasks.push({
                     description: this.$data.subtaskToCreate.description,
                     task_id: this.$data.subtaskToCreate.task_id,
                 }))
                 .catch(errors => alert('Error!'));
        },
        getNotes() {
            var url = '/home/notes/' + event.target.id; 
            this.noteToCreate.task_id = event.target.id; 
            console.log("url: " + url);
            axios.get(url).then(response => this.notes = response.data);
        },
        addNote() {
            console.log(this.$data.subtaskToCreate);
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
                 .then(response => console.log("Success!"))
                 .catch(errors => alert('Error!'));
        },
        toggleCompletion(task) {
            if (task.completed === 1) {
                task.completed = 0;
            }
            else {
                task.completed = 1;
            }
            
        },
        formatDate(datetime) {
            var d = new Date(datetime);
            var dateStr = d.toLocaleDateString();
            dateStr += " " + d.toLocaleTimeString();
            return dateStr;
        }
    }
});