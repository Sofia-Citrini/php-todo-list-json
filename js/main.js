const {createApp} = Vue;

const app =  createApp({
    data(){
        return{
            toDo: [],
            newTask: {}
        }
    },
    methods: {
        //chiamata api che mi forniscce la lista
        fetchListToDo(){
            axios.get("api/toDoList.php")
                .then (resp => {
                    //salvo i dati nella variabile locale toDo
                    this.toDo = resp.data;
                })
        },
        //aggiungere un nuovo task alla lista
        submitForm(){
            axios.post("api/createTask.php", this.newTask, {
                headers: { 'Content-Type': 'multipart/form-data' }
            })
                .then(resp => {
                    //riscarico tuitti i dati
                    this.fetchListToDo();
                    this.newTask = "";
                })
                .catch(error => {
                    error.response.stutus = 400;
                })
        },
        //elimino un task
        delateTask(taskId){
            axios.post("api/delete.php", {taskId}, {
                headers: { 'Content-Type': 'multipart/form-data' }
            })
                .then(resp => {
                    //riscarico tuitti i dati
                    this.fetchListToDo();
                })
        }
    },
    mounted() {
        this.fetchListToDo();
    },
}).mount("#app");