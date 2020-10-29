<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel | Add product</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row" style="padding: 15px">
            <div class="panel panel-success">
                  <div class="panel-heading">
                        <h3 class="panel-title">Add new product</h3>
                  </div>
                  <div class="panel-body">
                        <form action="{{route('products.store')}}" method="POST" role="form" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" class="form-control" name="name" placeholder="Input name">
                            </div>
                            <div class="form-group">
                                <label for="">Image</label>
                                <input type="file" class="form-control" name="image[]" multiple>
                            </div>
                            <div class="form-group">
                                <label for="">Description</label>
                                <input type="text" class="form-control" name="description" placeholder="Input description">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                  </div>
            </div>
        </div>
    </div>
</body>
</html>