<template>
  <!-- Button trigger modal -->
  <!-- <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modelId">
    Launch
  </button> -->
  
  <!-- Modal -->
  <div class="modal fade" id="addTask" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title">Modal title</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
              </div>
              <div class="modal-body">
                  <label for="task" >Add new Task</label>
                  <textarea name="tasks" id="tasks" class="form-control" v-model="record"></textarea>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary" @click="addTask" >Save</button>
              </div>
          </div>
      </div>
  </div>
</template>

<script>
export default {

    data(){
        return{
            record:'',
        }
    },
    methods:{
        addTask(){
            axios.post('http://127.0.0.1:8000/tasks',{
                'task':this.record,
            })
            .then(data => this.$emit('recordTask', data))
            .catch(error => console.log(error))
            $('#addTask').modal('hide');
        }

    },
    
    created() {
        console.log('from task component mounted.')
    }

}
</script>

<style>

</style>