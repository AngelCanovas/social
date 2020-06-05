<template>
    <li class="nav-item dropdown">
        <a dusk="notifications" class="nav-link dropdown-toggle" href="#" id="dropdownNotifications" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <slot></slot>
        </a>
        <div class="dropdown-menu-right" aria-labelledby="dropdownNotifications">
            <a v-for="notification in notifications"
               :dusk="notification.id"
               :href="notification.data.link"
               class="dropdown-item">
                {{ notification.data.message}}
            </a>
        </div>
    </li>
</template>

<script>
    export default {
        data(){
            return {
               notifications: []
            }
        },
        created() {
            axios.get('/notifications')
                .then(res => {
                    this.notifications = res.data;
                })
        }
    }
</script>

<style scoped>

</style>
