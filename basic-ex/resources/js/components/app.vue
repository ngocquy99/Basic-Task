<template>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered text-center">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Username</th>
                                        <th>Email</th>
                                        <th>Gender</th>
                                    </tr>
                                </thead>
                                <tbody v-if="users && users.data.length > 0">
                                    <tr
                                        v-for="(user, index) in users.data"
                                        :key="index"
                                    >
                                        <td>{{ user.id }}</td>
                                        <td>{{ user.name }}</td>
                                        <td>{{ user.username }}</td>
                                        <td>{{ user.email }}</td>
                                        <td>{{ user.gender }}</td>
                                        <td>
                                            <a href="/user-edit?id={{$user->id}}"class="text-decoration-none text-white btn btn-primary"> Update </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <pagination
                            align="center"
                            :data="users"
                            @pagination-change-page="list"
                        ></pagination>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import pagination from 'laravel-vue-pagination'
    export default {
        name:"users",
        components:{
            pagination
        },
        data(){
            return {
                users:{
                    type:Object
                }
            }
        },
         mounted(){
            this.list()
</script>
