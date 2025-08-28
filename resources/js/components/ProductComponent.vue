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
                    <form action="">
                        <div class="form-group mb-2">
                            <label for="">Name: </label>
                            <input type="text" class="form-control mt-2">
                        </div>
                        <div class="form-group mb-2">
                            <label for="">Price: </label>
                            <input type="number" class="form-control mt-2">
                        </div>
                        <button class="btn btn-primary">
                            <i class="fa-solid fa-floppy-disk"></i>
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
                    <tr>
                        <td>1</td>
                        <td>Book</td>
                        <td>200</td>
                        <td>
                            <button class="btn btn-success btn-sm me-2">
                                Edit
                            </button>
                            <button class="btn btn-danger btn-sm">
                                Delete
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Cup</td>
                        <td>100</td>
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

}
</script>
