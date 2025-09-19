<!DOCTYPE html>
<html>
<head>
    <title>Contact Form</title>
</head>
<body>
    <h2>New Contact Message</h2>
    <p><strong>Name:</strong> {{ $details['name'] }}</p>
    <p><strong>Email:</strong> {{ $details['email'] }}</p>
    <p><strong>Mobile:</strong> {{ $details['mobile_no'] ?? 'N/A' }}</p>
    <p><strong>City:</strong> {{ $details['city'] ?? 'N/A' }}</p>
    <p><strong>Message:</strong> {{ $details['message'] }}</p>
</body>
</html>
