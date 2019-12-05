<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>@yield('title')</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
</head>
<body>
	<div class="container-fluid">
		<p>Now editing effects of "{{$item[0]->item_name}}" </p>
		<form action="/real-edit/{{$item[0]->item_name}}" method="post" id="add-form">
            @csrf
            <div class="form-group">
                <input type="text" id="title" name="effect" placeholder="Input new effects" class="form-control" value="{{$item[0]->item_effect}}">
                <small class="text-danger">{{$errors->first('effect')}}</small>
            </div>
            <button type="submit" class="btn btn-primary">
                Save
            </button>
        </form>
        </br>
        <form action="/real-delete/{{$item[0]->item_name}}" method="post" id="add-form">
            @csrf
            <button type="submit" class="btn btn-danger">
                Delete
            </button>
        </form>
	</div>
</body>
</html>