<!DOCTYPE html>
<html>

<head>
    <title>Laravel Vue JS Item CRUD</title>
    <meta id="token" name="token" value="{{ csrf_token() }}">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css">
</head>

<body>

    <div class="container" id="manage-vue">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Laravel Vue JS Item CRUD</h2>
                    <span> from @{{ pagination.from  }} - from @{{ pagination.to  }} total @{{ pagination.total }}</span>
                </div>
                <div class="pull-right">
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#create-item">
                        Create Item
                    </button>
                </div>
            </div>
        </div>

        <!-- Item Listing -->
        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Maker</th>
                <th width="200px">Action</th>
            </tr>
            <tr v-for="item in items">
                <td>@{{ item.id }}</td>
                <td>@{{ item.title }}</td>
                <td>@{{ item.description }}</td>
                <td>@{{ item.maker }}</td>
                <td>
                    <button class="btn btn-primary" @click.prevent="editItem(item)">Edit</button>
                    <button class="btn btn-danger" @click.prevent="deleteItem(item)">Delete</button>
                </td>
            </tr>
        </table>

        <!-- Pagination -->
        <nav>
            <ul class="pagination">
                <li v-if="pagination.current_page > 1">
                    <a href="#" aria-label="Previous" @click.prevent="changePage(pagination.current_page - 1)">
                        <span aria-hidden="true">«</span>
                    </a>
                </li>
                <li v-for="page in pagesNumber" v-bind:class="[ page == isActived ? 'active' : '']">
                    <a href="#" @click.prevent="changePage(page)">@{{ page }}</a>
                </li>
                <li v-if="pagination.current_page < pagination.last_page">
                    <a href="#" aria-label="Next" @click.prevent="changePage(pagination.current_page + 1)">
                        <span aria-hidden="true">»</span>
                    </a>
                </li>
            </ul>
        </nav>

        <!-- Create Item Modal -->
        <div class="modal fade" id="create-item" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        <h4 class="modal-title" id="myModalLabel">Create Item</h4>
                    </div>
                    <div class="modal-body">
                        <!-- Form-->
                        <form method="POST" enctype="multipart/form-data" v-on:submit.prevent="createItem">
                            <div class="form-group">
                                <label for="title">Title:</label>
                                <input type="text" name="title" class="form-control" v-model="newItem.title" />
                                <span v-if="formErrors['title']" class="error text-danger">@{{ formErrors['title'] }}</span>
                            </div>

                            <div class="form-group">
                                <label for="title">Description:</label>
                                <textarea name="description" class="form-control" v-model="newItem.description"></textarea>
                                <span v-if="formErrors['description']" class="error text-danger">@{{ formErrors['description'] }}</span>
                            </div>

                            <div class="form-group">
                                <label for="title">Maker:</label>
                                <textarea name="maker" class="form-control" v-model="newItem.maker"></textarea>
                                <span v-if="formErrors['maker']" class="error text-danger">@{{ formErrors['maker'] }}</span>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Edit Item Modal -->
        <div class="modal fade" id="edit-item" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        <h4 class="modal-title" id="myModalLabel">Edit Item @{{fillItem.id}}</h4>
                    </div>
                    <div class="modal-body">
                        <!--Form edit -->
                        <form method="POST" enctype="multipart/form-data" v-on:submit.prevent="updateItem(fillItem.id)">

                            <div class="form-group">
                                <label for="title">Title:</label>
                                <input type="text" name="title" class="form-control" v-model="fillItem.title" />
                                <span v-if="formErrorsUpdate['title']" class="error text-danger">@{{ formErrorsUpdate['title'] }}</span>
                            </div>

                            <div class="form-group">
                                <label for="title">Description:</label>
                                <textarea name="description" class="form-control" v-model="fillItem.description"></textarea>
                                <span v-if="formErrorsUpdate['description']" class="error text-danger">@{{ formErrorsUpdate['description'] }}</span>
                            </div>

                            <div class="form-group">
                                <label for="title">Maker:</label>
                                <textarea name="maker" class="form-control" v-model="fillItem.maker"></textarea>
                                <span v-if="formErrorsUpdate['maker']" class="error text-danger">@{{ formErrorsUpdate['maker'] }}</span>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.26/vue.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/vue.resource/0.9.3/vue-resource.min.js"></script>

    <script type="text/javascript" src="/js/item.js"></script>

</body>

</html>