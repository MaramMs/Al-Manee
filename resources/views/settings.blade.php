<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>{{config('app.name')}} </title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="card">
                        <div class="card-header">
                            <h6> Change Password</h6>
                        </div>
                        <div class="card-body">
                            @if (count($errors))
                                @foreach ($errors->all() as $error)
                                    <p class="alert alert-danger">{{$error}}</p>
                                @endforeach
                            @endif
                            <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="{{ route('settings.update') }}" method="post">
                                @csrf

                                <div class="form-group">
                                    <label>Enter Old Password :</label>
                                    <input type="password" id="first-name" class="form-control"  placeholder="Enter old password" name="oldpassword">
                                </div>
                                <div class="form-group">
                                    <label>Enter New Password :</label>
                                    <input type="password" id="first-name" placeholder="Enter new password" class="form-control" name="newpassword">
                                </div>
                                <div class="form-group">
                                    <label>Enter Confirm Password :</label>
                                    <input type="password" id="first-name"  class="form-control"placeholder="Enter password confirmation"  name="password_confirmation">
                                </div>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
