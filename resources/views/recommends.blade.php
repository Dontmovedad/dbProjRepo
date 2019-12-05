@extends('layout')

@section('title', 'Recommend')

@section('main')
<body>
	<table class="table">
		<tr>
			<th>Recommed ID</th>
			<th>Item Name</th>
			<th>Champion Name</th>
			<th>Reason</th>
		</tr>
		@if (!empty($results))
			@foreach($results as $result)
		    <tr>
		        <td>
					{{$result->recom_id}}
		        </td>
		        <td>
					{{$result->item_name}}
		        </td>
		        <td>
					{{$result->champ_name}}
		        </td>
		        <td>
					{{$result->reason}}
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