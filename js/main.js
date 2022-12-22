const {createApp} = Vue;

const app =  createApp({
    data(){
        return{
            toDo: []
        }
    },
    methods: {
        //chiamata api che mi forniscce la lista
        fetchListToDo(){
            axios.get("api/toDoList.php")
                .then (resp => {
                    this.toDo = resp.data;
                })
        }
    },
    mounted() {
        this.fetchListToDo();
    },
}).mount("#app");