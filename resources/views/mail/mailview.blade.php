
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('assets/css/style.css?v='.time())}}">
    <style>

.contact_name {
    margin-top: 60px;
    margin-left : 50px;
}
.contact_email {
    margin-top: 10px;
    margin-left : 50px;
}
.contact_message {
    margin-top: 10px;
    margin-left : 50px;
    float: left;
    font-size: 15px;
}
    </style>
</head>
<body>
       <h1 class="contact_name"> Name :{{$details['firstname']}} {{$details['lastname']}}</h1>
       <h3 class="contact_email">Email : {{$details['email']}}</h3>
       <p class="contact_message"> <strong>Message : </strong>{{$details['message']}}</p>
</body>
</html>