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
            action: "http://localhost:8000/api/products",
            columns: ["id", "product_name", "product_price", "product_status","product_stock"],
            tableData: [

            ],
            options: {
                // see the options API
            }
        };
    },
    methods: {
        async getProduct() {
            const res = await axios.get(this.action, {
                headers: {
                    Accept: "application/json"
                }
            });
            const resData = await res.data;
            console.log(resData);

            this.tableData = resData.data
        }
    },
    created() {
        this.getProduct();
    }
};
</script>
