
<html>
	<body>
	<h2>New Qeury</h2>
<h3>You Have a New Mail from {{$name}}</h3>

<p>Message body: </p>
<div>
	{{ $bodyMessage }}
</div>
<br>
<br>

<p>Sender name: {{ $name }}</p>
<p>Sender mail: <a href="mailto:{{ $email }}">{{ $email }}</a></p>

	</body>
</html>