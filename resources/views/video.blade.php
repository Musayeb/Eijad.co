<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>

<form action="{{url('upload')}}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="file" name="file" id="">
    <input type="submit">
</form>

<img src="{{url('show')}}">
</body>
</html>

