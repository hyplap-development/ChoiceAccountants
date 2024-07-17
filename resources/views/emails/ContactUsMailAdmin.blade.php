<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Enquiry Received - Choice Accountants Pty Ltd!</title>
</head>
<body>
    <p>Dear Admin Team,</p>
    <p>Congratulations! We have received a new enquiry through our website. Please find the details below:</p>
    <p>
        <b>Name:</b> {{ $emailData['fname'] }} <br>
        <b>Email:</b> <a href="mailto:{{ $emailData['email'] }}">{{ $emailData['email'] }}</a> <br>
        <b>Contact Number:</b> <a href="tel:{{ $emailData['phone'] }}">{{ $emailData['phone'] }}</a> <br>
        <b>Enquiry Source:</b> {{ $emailData['subject'] }}
    </p>
    <p>To know more details <a href="{{ env('APP_URL') }}/login">Click here</a></p>
    <br><br>
    <p>Best regards,<br>Automatic Mail Generator by HYPLAP<br>Choice Accountants Pty Ltd</p>
</body>
</html>
