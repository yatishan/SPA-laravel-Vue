<template>
<div class="container my-5">
    <div class="row">
        <div class="col-8 offset-4">
            <div class="row justify-content-between">
                <div class="col-2">
                    <button class="btn btn-primary">Create</button>
                </div>
                <div class="col-6">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="search" aria-label="Recipient’s username" aria-describedby="basic-addon2">
                        <button class="input-group-text btn  btn-primary" id="basic-addon2">Search</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-4">
            <div class="card">
                <h4 class="card-header">Create</h4>
                <div class="card-body">
                    <form @submit.prevent="store">
                        <div class="form-group mb-2">
                            <label for="">Name: </label>
                            <input v-model="product.name" type="text" class="form-control mt-2">
                        </div>
                        <div class="form-group mb-2">
                            <label for="">Price: </label>
                            <input v-model="product.price" type="number" class="form-control mt-2">
                        </div>
                        <button class="btn btn-primary" type="submit">
                            Save
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-8">
            <table class="table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="product in products" :key="product.id">
                        <td>{{ product.id}}</td>
                        <td>{{ product.name}}</td>
                        <td>{{ product.price}}</td>
                        <td>
                            <button class="btn btn-success btn-sm me-2">
                                Edit
                            </button>
                            <button class="btn btn-danger btn-sm">
                                Delete
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
</template>

<script>

export default {
    name: "ProductComponent",
    data() {
        return {
            products: [
                {"id":1,"name":"book","price":100},
                {"id":2,"name":"pencle","price":100},
                {"id":3,"name":"air pod","price":100}
            ],
            product: {
                "name": "",
                "price": ""
            }
        }
    },
    methods: {
        view() {
            fetch('/api/product/')
            .then(response => response.json())
            .then(data => this.products=data)
            .catch(error => console.error('Error:', error));
        } ,
        store() {
            fetch('api/product/', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify(this.product)
            })
            .then(response =>{
                 this.view();
                 this.product={
                    "name": "",
                    "price": ""
                 }
            })
        }
    },
    created() {
        this.view();
    }
}
</script>
