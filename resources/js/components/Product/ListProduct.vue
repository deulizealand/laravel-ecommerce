<template>
    <div class="container-fluid">
        <v-client-table
            :data="tableData"
            :columns="columns"
            :options="options"
        />
    </div>
</template>

<script>
export default {
    data() {
        return {
            action: "htpp://localhost:8000/product",
            columns: ["id", "name", "age"],
            tableData: [
                { id: 1, name: "John", age: "20" },
                { id: 2, name: "Jane", age: "24" },
                { id: 3, name: "Susan", age: "16" },
                { id: 4, name: "Chris", age: "55" },
                { id: 5, name: "Dan", age: "40" }
            ],
            options: {
                // see the options API
            }
        };
    },
    methods: {
        async getProduct() {
            const res = await axios.get(this.action);
            const resData = await res.data;
            console.log(resData);
        }
    },
    created() {
        this.getProduct();
    }
};
</script>
