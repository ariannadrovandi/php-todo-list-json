const  { createApp } = Vue;

createApp(
    {
        data(){
            return {
                title: 'Todo list',
                todoList:[],
                apiUrl: 'server.php',
                newTodo: ''
            }
        },
        methods : {
            readList(){
                axios.get(this.apiUrl).then((res) => {
                    // console.log(res.data);
                    this.todoList = res.data;
                });
            },
            updateList(){
                console.log(this.newTodo);
                const data = {
                    newTodo: this.newTodo
                }
                axios.post(this.apiUrl, data, {headers: {'Content-Type': 'multipart/form-data'}}).then((res) => {
                    this.newTodo = '';
                    console.log(res.data);
                });
            },
            toggleTaskDone(index){
                //this.todoList[index].done = !this.todoList[index].done;
                const data = {
                    updateData: index
                }
                axios.post(this.apiUrl, data, {headers: {'Content-Type': 'multipart/form-data'}}).then((res) => {
                    console.log(res.data);
                });
            }
        },
        mounted(){
            this.readList();
        }
    }
).mount('#app');