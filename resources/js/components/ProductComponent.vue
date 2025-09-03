<template>
<div class="container my-5">
    <!-- create -->
    <div class="row">
        <div class="col-8 offset-4">
            <div class="row justify-content-between">
                <div class="col-2">
                    <button class="btn btn-primary" @click="create">Create</button>
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
    <!-- create end -->
    <!-- show -->
    <div class="row">
        <div class="col-4">
            <div class="card">
                <h4 class="card-header">{{ isEditMode? "Edit": "Create"}}</h4>
                <div class="card-body">
                    <form @submit.prevent="isEditMode? update():store()">
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
                    <tr v-for="product in products.data" :key="product.id">
                        <td>{{ product.id}}</td>
                        <td>{{ product.name}}</td>
                        <td>{{ product.price}}</td>
                        <td>
                            <button class="btn btn-success btn-sm me-2" @click="Edit(product)">
                                Edit
                            </button>
                            <button class="btn btn-danger btn-sm" @click="destory(product.id)">
                                Delete
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- show end -->
   <Pagination
  :data="products"
  @pagination-change-page="fetchPage"
/>
</div>
</template>

<script>

export default {
    name: "ProductComponent",
    data() {
        return {
            isEditMode: false,
            products: {},
            product: {
                "id": "",
                "name": "",
                "price": ""
            }
        }
    },
    methods: {
        fetchPage(page = 1) {
            fetch(`/api/product?page=${page}`)
            .then(res => res.json())
            .then(data => {
            this.products = data;
             })
            .catch(error => console.error(error));
        },
        view()
        {
            this.fetchPage(1);
            // fetch('/api/product/')
            // .then(response => response.json())
            // .then(data => this.products=data)
            // .catch(error => console.error('Error:', error));
        } ,
        store()
        {
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
        },
        Edit(product)
        {
            this.isEditMode = true;
            this.product.id = product.id;
            this.product.name = product.name;
            this.product.price = product.price;
        },
        create()
        {
            this.isEditMode = false;
            this.product.id = "";
            this.product.name = "";
            this.product.price = "";
        },
        update()
        {
            fetch(`api/product/${this.product.id}`, {
                method: 'PUT',
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

        },
        destory(id)
        {

            if(!(confirm('Are you sure delete?'))){
                return false;
            }

            fetch(`api/product/${id}`, {
                method: 'DELETE',
            })
            .then(response =>{
                 this.view();
            })
        }
    },
    created() {
        this.view();
    }
}
</script>
