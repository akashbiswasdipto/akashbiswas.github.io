<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/signup.css') }}">
</head>
<body>
    @include('header')
    <div class='signup_form'>
        <h1>Join Now and Start Scheduling with Ease!</h1>
        <form>
            <input type='text' name='user_name' class='signupfield' placeholder="Enter your full name" required><br>
            <input type='email' name='user_email' class='signupfield' placeholder="Enter your email ID" required><br>
            <input type='text' name='user_contact' class='signupfield' placeholder="Enter your Contact Number" required></br>
            <input type='date' name='user_dob' class="singupfield_date" placeholder="Your Date of Birth" required><br>
            <input type='password' name='user_pass' class='signupfield' placeholder="Enter your Password" required><br>
            <input type='password' name='user_passc' class='signupfield' placeholder="Enter your Password Again" required><br>
            <button type='submit' class='signup_submit' href=''>Signup</button>
        </form>
    </div>
</body>
</html>