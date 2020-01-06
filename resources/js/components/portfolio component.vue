<template>
    <div class="panel panel-primary">
        <div class="panel-heading">Panel with panel-primary class</div>
        <div class="panel-body">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Blog Name</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>fasdfadsf</td>
                    <td><input type="checkbox" checked data-toggle="toggle"></td>
                    <td>
                        <a href="#" class="btn btn-success"><i style="font-size:17px;" class="fa fa-eye"></i></a>
                        <a href="#" class="btn btn-info"> <i style="font-size:17px;" class="fa fa-edit"></i></a>
                        <a href="#" onclick="return ConfirmDelete();" class="btn btn-danger"><i  style="font-size:17px;" class="fa fa-close"></i></a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        data(){
            return{

            }
        },
        created: function () {
            //this.init();
            alert('hello world');
        },
        methods:{
            init(){

            },
            CategorySave(){

            }
        }
    }
</script>
