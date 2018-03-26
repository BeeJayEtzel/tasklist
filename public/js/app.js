var app = new Vue({
    el: '#app',
    data: { 
        tasks: [] 
    },
    methods: { 
        getTasks(project){
            var url = '/home/tasks/' + project; 
            console.log("url: " + url);
            axios.get(url).then(response => this.tasks = response.data);
        },
    }
});