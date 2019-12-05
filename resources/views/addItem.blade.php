<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>@yield('title')</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
</head>
<body>
	<div class="container-fluid">
		<p>Now adding new item </p>
		<form action="/real-add-item" method="post" id="add-form">
            @csrf
            <div class="form-group">
            	<select form="add-form" name='type_name'>
            		@foreach($types as $type)
            			<option value="{{$type->item_type_name}}">{{$type->item_type_name}}</option>
            		@endforeach
            	</select>
                <input type="text" id="title" name="item_name" placeholder="Input item name" class="form-control" value="{{old('item_name')}}">
                <small class="text-danger">{{$errors->first('item_name')}}</small>
                <input type="text" id="title" name="item_effect" placeholder="Input item effect" class="form-control" value="{{old('item_effect')}}">
                <small class="text-danger">{{$errors->first('item_effect')}}</small>
            </div>
            <button type="submit" class="btn btn-primary">
                Add
            </button>
        </form>
	</div>
</body>
</html>