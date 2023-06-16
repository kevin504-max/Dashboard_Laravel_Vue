<template>
    <div class="lists">
        <div class="top">
            <p><strong>{{ description }}</strong> <span class="badge text-bg-info">{{ data.length }}</span></p>
        </div>
        <div class="content">
            <table class="table table-striped custom-table">
                <thead>
                    <tr>
                        <th class="text-center" scope="col">ID</th>
                        <th class="text-center" scope="col">{{ columns[0] }}</th>
                        <th class="text-center" scope="col">{{ columns[1] }}</th>
                        <!-- <th class="text-center" scope="col">Contact</th> -->
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="item in data" :key="item.id">
                        <td class="text-center align-middle"><p class="users">{{ item.id }}</p></td>
                        <td class="text-center align-middle"><p class="users">{{ item.name }}</p></td>
                        <td class="text-center align-middle"><p class="users">{{ (description == 'Clients') ? item.email : item.price }}</p></td>
                        <!-- <td class="text-center align-middle"><p class="users">{{ user.phone }}</p></td> -->
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>

<script>
export default {
    name: 'ListsComponent',
    props: {
        data: Array,
        description: String,
        columns: []
    }
}
</script>

<style lang="scss" scoped>
.lists {
    width: 100%;
    padding: 20px;
    border: 1px solid #E5E5E5;
    border-radius: 3px;
    background-color: #FFF;

    .users {
        font-size: 15px;
    }
}
</style>