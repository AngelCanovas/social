<template>
    <div>
        <form @submit.prevent="submit">
            <div class="card-body">
                <textarea v-model="body" class="form-control border-0 bg-light" name="body" placeholder="¿Que estas pensando Angel?"></textarea>
            </div>

            <div class="card-footer">
                <button class="btn btn-primary" id="create-status">Publicar</button>
            </div>
        </form>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                body: '',
            }
        },
        methods: {
            submit() {
                axios.post('/statuses', {body: this.body})
                .then(res => {
                    EventBus.$emit('status-created', res.data.data); // ['data' => ['body' => 'asdfg']]
                    this.body = ''
                })
                .catch(err => {
                    console.log(err.response.data)
                })
            }
        }
    }
</script>

<style scoped>

</style>
