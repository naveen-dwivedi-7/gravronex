<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Contact Message</title>
</head>
<body>
    <h2>New Contact Message</h2>
    <p><strong>Name:</strong> {{ $contactData['name'] }}</p>
    <p><strong>Email:</strong> {{ $contactData['email'] }}</p>
    <p><strong>Message:</strong></p>
    <p>{{ $contactData['message'] }}</p>
</body>
</html>
