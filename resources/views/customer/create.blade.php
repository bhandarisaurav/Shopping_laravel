<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <h2>Laravel Form</h2>
    <form action="/customer/store" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="org">Organisation Or Person:</label>
            <input type="text" class="form-control" id="org" placeholder="Organisation Or Person" name="organisation_or_person">
        </div>
        <div class="form-group">
            <label for="gender">Gender:</label>
            <input type="text" class="form-control" id="gender" placeholder="Enter Gender" name="gender">
        </div>
        <div class="form-group">
            <label for="name">First Name:</label>
            <input type="text" class="form-control" id="name" placeholder="Enter First Name" name="first_name">
        </div>
        <div class="checkbox">
            <label><input type="checkbox" name="remember"> Remember me</label>
        </div>
        <input type="submit" class="btn btn-default">Submit</input>
    </form>
</div>

</body>
</html>
