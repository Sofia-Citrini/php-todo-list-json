const {createApp} = Vue;

const app =  createApp({
    data(){
        return{
            toDo: [],
            newTask: {
            }
        }
    },
    methods: {
        //chiamata api che mi forniscce la lista
        fetchListToDo(){
            axios.get("api/toDoList.php")
                .then (resp => {
                    this.toDo = resp.data;
                })
        },
        //aggiungere un nuovo task alla lista
        submitForm(){
            axios.post("api/createTask.php", this.newTask, {
                headers: { 'Content-Type': 'multipart/form-data' }
            })
                .then(resp => {
                    this.fetchListToDo();
                })
        }
    },
    mounted() {
        this.fetchListToDo();
    },
}).mount("#app");