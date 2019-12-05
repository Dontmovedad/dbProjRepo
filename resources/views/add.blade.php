<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>@yield('title')</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
</head>
<body>
	<div class="container-fluid">
		<p>Now adding champion to "{{$name}}" </p>
		<form action="/add-recommend/{{$name}}" method="post" id="add-form">
            @csrf
            <div class="form-group">
            	<select form="add-form" name='champ_name'>
            		@foreach($champions as $champion)
            			<option value="{{$champion->champ_name}}">{{$champion->champ_name}}</option>
            		@endforeach
            	</select>
            	<small class="text-danger">{{$errors->first('champ_name')}}</small>
                <input type="text" id="title" name="reason" placeholder="Input reason" class="form-control" value="{{old('reason')}}">
                <small class="text-danger">{{$errors->first('reason')}}</small>
            </div>
            <button type="submit" class="btn btn-primary">
                Add
            </button>
        </form>
	</div>
</body>
</html>