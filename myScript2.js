const app = new Vue({
    el: "#app",
    data: {
        listaDischi: [],
    },

    methods: {
        fetchData() {
            axios.get("./server.php")
            
            .then((resp) => {
             this.listaDischi = resp.data;
            });
        },
    },





    mounted() {
        this.fetchData()
    }
})