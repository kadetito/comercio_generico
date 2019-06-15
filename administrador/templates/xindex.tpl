<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>jQeury.steps Demos</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        <link href="estilos/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="estilos/normalize.css">
        <link rel="stylesheet" href="estilos/main.css">
        <link rel="stylesheet" href="estilos/jquery.steps.css">
		<script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
		<script src="javascript/bootstrap.min.js"></script>
    </head>
    <body>
 <div class="content">


 <!-- Thanks to Pieter B. for helping out with the logistics -->
<div class="container">
<form id="contact" action="#">
    <div>
        <h3>Account</h3>
        <section>
            <label for="userName">User name *</label>
            <input id="userName" name="userName" type="text" class="required">
            <label for="password">Password *</label>
            <input id="password" name="password" type="text" class="required">
            <label for="confirm">Confirm Password *</label>
            <input id="confirm" name="confirm" type="text" class="required">
            <p>(*) Mandatory</p>
        </section>
        <h3>Profile</h3>
        <section>
            <label for="name">First name *</label>
            <input id="name" name="name" type="text" class="required">
            <label for="surname">Last name *</label>
            <input id="surname" name="surname" type="text" class="required">
            <label for="email">Email *</label>
            <input id="email" name="email" type="text" class="required email">
            <label for="address">Address</label>
            <input id="address" name="address" type="text">
            <p>(*) Mandatory</p>
        </section>
        <h3>Hints</h3>
        <section>
            <ul>
                <li>Foo</li>
                <li>Bar</li>
                <li>Foobar</li>
            </ul>
        </section>
        <h3>Finish</h3>
        <section>
            <input id="acceptTerms" name="acceptTerms" type="checkbox" class="required"> <label for="acceptTerms">I agree with the Terms and Conditions.</label>
        </section>
    </div>
</form>
</div>
</div>
		<script src='https://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.js'></script>
		<script src='javascript/jquery.steps.min.js'></script>
		<script src="javascript/steps_form.js"></script>
		<script src="javascript/jquery.cookie-1.3.1.js"></script>
    </body>
</html>