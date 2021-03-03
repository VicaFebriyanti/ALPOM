<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>ALPOM | Register</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="{{asset('admin/css/roboto-font.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('admin/fonts/font-awesome-5/css/fontawesome-all.min.css')}}">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="{{asset('admin/css/style.css')}}"/>
</head>
<body class="form-v5">
	<div class="page-content">
		<div class="form-v5-content">
			<form class="form-detail" method="POST" action="/postregister">
            @csrf
				<h2>Register</h2>
				<div class="form-row">
					<input type="text" name="nik" id="nik" class="input-text @error('nik') is-invalid @enderror" value="{{ old('nik') }}" placeholder="NIK" required>
					<i class="fas fa-address-card"></i>
				</div>
				<div class="form-row">
					<input type="text" name="nama" id="nama" class="input-text @error('name') is-invalid @enderror" value="{{ old('nama') }}" placeholder="Nama Lengkap" required>
					<i class="fas fa-male"></i>
				</div>
				<div class="form-row">
					<input type="text" name="username" id="username" class="input-text @error('username') is-invalid @enderror" value="{{ old('username') }}" placeholder="Username" required>
					<i class="fas fa-user"></i>
				</div>
				<div class="form-row">
					<input type="text" name="telp" id="telp" class="input-text @error('telp') is-invalid @enderror" value="{{ old('telp') }}" placeholder="No Telepon" required>
					<i class="fas fa-phone"></i>
				</div>
				<div class="form-row">
					<input type="password" name="password" id="password" class="input-text @error('password') is-invalid @enderror" value="{{ old('password') }}" placeholder="Password" required>
					<i class="fas fa-lock"></i>
				</div>
				<div class="form-row-last">
					<input type="submit" name="register" class="register" value="Register">
				</div>
			</form>
		</div>
	</div>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>