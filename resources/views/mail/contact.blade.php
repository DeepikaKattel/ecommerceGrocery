<!DOCTYPE html>
<html lang="">
<head>

</head>
<body>
    {{--image should not be directly linked from folder as it increases execution time. instead change to base 64 using online services--}}
    <h3>{{$contactMessage['body']}}</h3>
    <p>Email Address: {{$contact->email}}</p>
    <p>Subject: {{$contact->subject}}</p>
    <p>Message: {{$contact->message}}</p>
</body>
</html>
