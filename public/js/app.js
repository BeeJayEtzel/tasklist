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
                 .then(response => alert('Task saved'))
                 .catch(errors => alert('Error!'));
        },
        getSubtasks(task) {
            var url = '/home/subtasks/' + task; 
            console.log("url: " + url);
            axios.get(url).then(response => this.subtasks = response.data);
        },
    }
});