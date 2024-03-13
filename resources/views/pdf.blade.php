<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
			content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>
<form action="{{route('pdf')}}" method="post" id="form" enctype="multipart/form-data">
	@csrf
	<button type="submit">valider</button>
</form>
<input type="file" name="file" formenctype="multipart/form-data" accept="application/pdf" formaction="{{route('pdf')}}" formmethod="post" form="form" formtarget="#form" >
</body>
</html>
