<h2>New Contact Message</h2>
<p><strong>Name:</strong> {{ $data['name'] }}</p>
<p><strong>Email:</strong> {{ $data['email'] ?? 'N/A' }}</p>
<p><strong>Phone:</strong> {{ $data['phone'] ?? 'N/A' }}</p>
<p><strong>Company:</strong> {{ $data['company'] ?? 'N/A' }}</p>
<p><strong>Message:</strong></p>
<p>{{ $data['message'] }}</p>