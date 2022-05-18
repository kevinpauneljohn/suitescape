@extends('layouts.apps')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Staycations</h2>
            </div>
            <div class="pull-right">
                @can('staycation-create')
                <a class="btn btn-success" href="{{ route('staycations.create') }}"> Create New Staycation </a>
                @endcan
            </div>
        </div>
    </div>


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Details</th>
            <th>Price</th>
            @role('Host')
            <th width="280px">Action</th>
            @endrole
        </tr>
	    @foreach ($staycations as $staycation)
	    <tr> 
	        <td>{{ ++$i }}</td>
	        <td>{{ $staycation->name }}</td>
	        <td>{{ $staycation->detail }}</td>
	        <td>{{ $staycation->price }}</td>
	        <td>
                <form action="{{ route('staycations.destroy',$staycation->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('staycations.show',$staycation->id) }}">Show</a>
                    @can('staycation-edit')
                    <a class="btn btn-primary" href="{{ route('staycations.edit',$staycation->id) }}">Edit</a>
                    @endcan


                    @csrf
                    @method('DELETE')
                    @can('staycation-delete')
                    <button type="submit" class="btn btn-danger">Delete</button>
                    @endcan
                </form>
	        </td>
	    </tr>
	    @endforeach
    </table>

    {!! $staycations->links() !!}

@endsection