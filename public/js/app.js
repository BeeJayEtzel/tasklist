var app = new Vue({
    el: '#app',
    data: { 
        tasks: [],
        subtasks: [],
        description: '',
        project_id: 0,
        due_date: '',
    },
    methods: { 
        getTasks(project) {
            var url = '/home/tasks/' + project; 
            this.project_id = project;
            console.log("url: " + url);
            axios.get(url).then(response => this.tasks = response.data);
        },
        addTask() {
            axios.post('/task/create', this.$data)
                 .then(response => this.tasks.push(this.$data))
                 .catch(errors => alert('Error!'));
            
        },
        getSubtasks() {
            var url = '/home/subtasks/' + event.target.id; 
            console.log("url: " + url);
            axios.get(url).then(response => this.subtasks = response.data);
        },
    }
});