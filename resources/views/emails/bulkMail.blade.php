<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $emailData['subject'] }}</title>
</head>

<body>
    <img src="{{ env('APP_URL') .'/'. $emailData['image'] }}" alt="Image">
    <p>{!! $emailData['msg'] !!}</p>
</body>

</html>

