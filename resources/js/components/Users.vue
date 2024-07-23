<script setup>
const users = [
    {
        id: 1,
        name: "Jon",
        email: "1234@1234.com",
        date: "11/09/2023",
    },
    {
        id: 2,
        name: "Jack",
        email: "4566@3452.com",
        date: "02/09/2023",
    },
];
</script>
<template>
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Users 1234</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Starter Page</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container-fluid">
            <table>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Date</th>
                    <th>Role</th>
                    <th>Options</th>
                </tr>
                <tr v-for="item in users">
                    <td>{{ item.id }}</td>
                    <td>{{ item.name }}</td>
                    <td>{{ item.email }}</td>
                    <td>{{ item.date }}</td>
                    <td>{{ item.role }}</td>
                    <td>{{ item.options }}</td>
                </tr>
            </table>
        </div>
    </div>
</template>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td,
th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}
</style>
