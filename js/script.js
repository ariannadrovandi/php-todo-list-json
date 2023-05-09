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
            }
        },
        mounted(){
            this.readList();
        }
    }
).mount('#app');