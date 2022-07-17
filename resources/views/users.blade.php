<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>users</title>
</head>
<body>

	@foreach ($users as $user)
	<h1>{{$user['first_name']}}</h1>
	<h1>{{$user->last_name}}</h1>
	<h1>{{$user->birthday}}</h1>
	<h1>{{$user->gender}}</h1>
	<h1>{{$user->district->name}}</h1>
	<h1>{{$user->district->city->name}}</h1>
	<hr>
	@endforeach
</body>
</html>