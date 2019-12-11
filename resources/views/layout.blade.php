<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>@yield('title')</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
</head>
<body>
	<div class="container-fluid">
		<form action="/search-id" method="post">
			@csrf
            <div class="form-group">
                <input type="number" id="id" name="id" placeholder="Search Item By ID (integer input only)" class="form-control">
                <input type="text" id="name" name="name" placeholder="Search Item By Name" class="form-control">
                <input type="text" id="effect" name="effect" placeholder="Search Item By Effect" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">
                Search
            </button>
        </form>
		@yield('main')
	</div>
</body>
</html>