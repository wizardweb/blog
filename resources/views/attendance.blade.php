@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                
				<div class="panel-heading">
				Dashboard
				</div>

				<div class="panel-body">
					You are logged in!
				</div>
					
				<table class="table table-bordered">
						<tr>
							<th>No</th>
							<th>Title</th>
							<th>Description</th>
							<th width="280px">Action</th>
						</tr>
					@foreach ($items as $key => $item)
						<tr>
							<td>{{ ++$i }}</td>
							<td>{{ $item->title }}</td>
							<td>{{ $item->description }}</td>
							<td>
								<a class="btn btn-info" href="{{ route('itemCRUD.show',$item->id) }}">Show</a>
								<a class="btn btn-primary" href="{{ route('itemCRUD.edit',$item->id) }}">Edit</a>
								{!! Form::open(['method' => 'DELETE','route' => ['itemCRUD.destroy', $item->id],'style'=>'display:inline']) !!}
								{!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
								{!! Form::close() !!}
							</td>
						</tr>
					@endforeach

				</table>
				
				
            </div>
        </div>
    </div>
</div>
@endsection
