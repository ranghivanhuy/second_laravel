@extends('admin.layout.master')
@section('title', 'Add user')
@section('breadcumb')
<h1>
    Add user
</h1>
<ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">User</a></li>
    <li class="active">Add user</li>
</ol>


@endsection

@section('main-content')

<div class="row">
    <!-- left column -->
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Add user</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="" method="POST" role="form" enctype="multipart/form-data">
                @csrf
                <div class="box-body">
                    <div class="form-group">
                        <label for="fullname">Full Name</label>
                        <input type="text" class="form-control" name="fullname" id="fullname" placeholder="Enter your full name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" name="email" id="email" placeholder="Enter your email address">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Enter your password">
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" class="form-control" name="phone" id="phone" placeholder="Enter your phone number">
                    </div>
                    <div class="form-group">
                        <label for="phone">birthday</label>
                        <input type="date" class="form-control" name="birthday" id="birthday">
                    </div>
                    <div class="form-group">
                        <label for="avatar">Avatar</label>
                        <input type="file" class="form-control" name="avatar" id="avatar">
                    </div>
                    <div class="form-group">
                        <label for="gender">Gender</label>
                        <select name="gender" id="gender" class="form-control">
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="current_address">Currently Address</label>
                        <input type="text" class="form-control" name="current_address" id="current_address" placeholder="Enter your currently address">
                    </div>
                    <div class="form-group">
                        <label for="hometown_address">Hometown Address</label>
                        <input type="text" class="form-control" name="hometown_address" id="hometown_address" placeholder="Enter your hometown address">
                    </div>
                    <div class="form-group">
                        <label for="relationship">Relationship</label>
                        <select name="relationship" id="relationship" class="form-control">
                            <option value="">Single</option>
                            <option value="">Married</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="note">Note</label>
                        <textarea name="note" id="note" class="form-control">Some message</textarea>
                    </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection