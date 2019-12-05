@extends('layout')

@section('title', 'Result')

@section('main')
	<body>
		<a href='add-item'>Add New Item</a>
		<table class="table">
			<tr>
				<th>Item ID</th>
				<th>Item Name</th>
				<th>Item Effect</th>
			</tr>
			@if (!empty($results))
				@foreach($results as $result)
			    <tr>
			        <td>
						{{$result->item_id}}
			        </td>
			        <td>
						{{$result->item_name}}
			        </td>
			        <td>
						{{$result->item_effect}}
			        </td>
			        <td>
						<a href="/edit/{{$result->item_name}}">Edit/Delete</a>
			        </td>
			        <td>
						<form action="/show-recommend/{{$result->item_name}}" method="POST">
						@csrf
							<button type="submit" class="btn btn-primary">
				                Show Recommend
				            </button>
						</form>
			        </td>
			        <td>
						<a href="/add/{{$result->item_name}}">Add Recommend</a>
			        </td>
			    </tr>
			    @endforeach
			@else
				<tr>
			        <td>
						No result
			        </td>
			    </tr>
			@endif
		</table>
	</body>
@endsection