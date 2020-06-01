<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Tasks List <span class="btn btn-success btn-sm float-right">+</span> </div>

                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item" v-for="data in tasks" :key="data.id"> {{data.id}} - {{data.task}}  <span class="float-right"> <button class="btn btn-info btn-sm">Edit</button>|<button class="btn btn-dark btn-sm">View</button>|<button class="btn btn-danger btn-sm">Delete</button></span> </li>
                        </ul>
                    </div>

                    <div class="card-footer">Task Footer</div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return{
                tasks:{},
            }
        },
        method:{

        },
        created() {
            axios.get('http://127.0.0.1:8000/tasks')
            .then((response) => this.tasks = response.data)
            .catch((error) => console.log(error));
            console.log('from task component mounted.')
        }
    }
</script>

<style lang="scss" scoped>

</style>