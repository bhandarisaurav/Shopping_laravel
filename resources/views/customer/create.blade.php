<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add Customer</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
<div class="pen-title">
    <h1>Add Customer Form</h1>
</div>
<div class="container">
    <div class="card"></div>
    <div class="card">
        <h1 class="title">Add Data</h1>
        <form action="/customer/store" method="post">
            {{ csrf_field() }}
            <div class="input-container">
                <input type="text" id="#{label}" required="required" name="organisation_or_person"/>
                <label for="#{label}">Organisation Or Person</label>
                <div class="bar"></div>
            </div>
            <div class="input-container">
                <input type="text" id="#{label}" required="required" name="gender"/>
                <label for="#{label}">Gender</label>
                <div class="bar"></div>
            </div>
            <div class="input-container">
                <input type="text" id="#{label}" required="required" name="first_name"/>
                <label for="#{label}">First Name</label>
                <div class="bar"></div>
            </div>
            <div class="button-container">
                <button><span>Go</span></button>
            </div>
            <div class="footer"><a href="#">Forgot your password?</a></div>
        </form>
    </div>
</div>

</body>
</html>

<!-- Mixins-->
<!-- Pen Title-->
