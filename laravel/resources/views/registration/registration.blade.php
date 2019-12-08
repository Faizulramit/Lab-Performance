<!DOCTYPE html>
<html>
<head>
	<title>registration</title>
</head>
<body>
	<h1>registration </h1>

	<a href="{{route('home.index')}}">Back</a> |
	<a href="{{route('logout.index')}}">logout</a>

<br><br>

<form method="post" enctype="multipart/form-data" >
	{{csrf_field()}}
	<table border="0">
		<tr>
			<td>Employeename</td>
			<td><input type="text" name="Employeename" value="{{old('username')}}"></td>
		</tr>
		<tr>
			<td>Company name</td>
			<td><input type="text" name="Companyname" value="{{old('username')}}"></td>
		</tr>

		<tr>
			<td>Contact number</td>
			<td><input type="text" name="Contactnumber" value="{{old('username')}}"></td>
		</tr>


		<tr>
			<td>Username</td>
			<td><input type="text" name="username" value="{{old('username')}}"></td>
		</tr>

		<tr>
			<td>PASSWORD</td>
			<td><input type="password" name="password" value="{{old('password')}}"></td>
		</tr>
		<tr>
			<td>Image</td>
			<td><input type="file" name="pic"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="submit" value="Save"></td>
		</tr>
	</table>
</form>

@foreach($errors->all() as $err)
	{{$err}} <br>
@endforeach
</body>
</html>