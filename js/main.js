const app = new Vue({
    el: "#app",
    data: {
        db: []
    },
    mounted(){
        axios.get("api.php")
            .then(resp => {
                this.db = resp.data.datas
            })
    }
})
