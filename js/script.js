const  { createApp } = Vue;

createApp(
    {
        data(){
            return {
                title: 'Todo list',
                todoList:[],
                apiUrl: 'server.php',
                
            }
        },
        methods : {
            readList(){
                axios.get(this.apiUrl).then((res) => {
                    // console.log(res.data);
                    this.todoList = res.data;
                });
            }
        },
        mounted(){
            this.readList();
        }
    }
).mount('#app');