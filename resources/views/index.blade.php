@extends('layout')

@section('title', 'Home')

@section('main')
	<body>
		<a href='add-item'>Add New Item</a>
		<table class="table">
			<tr>
				<th>Item ID</th>
				<th>Item Name</th>
				<th>Item Effect</th>
			</tr>
			@if (!empty($items))
				@foreach($items as $item)
			    <tr>
			        <td>
						{{$item->item_id}}
			        </td>
			        <td>
						{{$item->item_name}}
			        </td>
			        <td>
						{{$item->item_effect}}
			        </td>
			        <td>
						<a href="/edit/{{$item->item_name}}">Edit/Delete</a>
			        </td>
			        <td>
						<form action="/show-recommend/{{$item->item_name}}" method="POST">
						@csrf
							<button type="submit" class="btn btn-primary">
				                Show Recommend
				            </button>
						</form>
			        </td>
			        <td>
						<a href="/add/{{$item->item_name}}">Add Recommend</a>
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