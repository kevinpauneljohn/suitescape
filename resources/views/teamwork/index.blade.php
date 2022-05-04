@extends('layouts.apps')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading clearfix">
                    @if(!auth()->user()->isTeamOwner())
                    @role('Guest')
                    <form class="form-horizontal" method="post" action="{{route('teams.store')}}">
                            {!! csrf_field() !!}

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                

                                <div class="col-md-6">
                                    <input type="hidden" class="form-control" name="name" value= "team{{auth()->user()->id}}">

                                    
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fa fa-btn fa-save"></i>Become a host
                                    </button>
                                </div>
                            </div>
                        </form>
                        @endrole
                        @endif
                    </div>
                    <div class="panel-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Status</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($teams as $team)
                                    <tr>
                                        <td>
                                            @if(auth()->user()->isOwnerOfTeam($team))
                                                <span class="label label-success">Host</span>
                                            @else
                                                <span class="label label-primary">Co-host</span>
                                            @endif
                                        </td>
                                        <td>
                                            

                                            <a href="{{route('teams.members.show', $team)}}" class="btn btn-sm btn-default">
                                                <i class="fa fa-users"></i> Co-hosts
                                            </a>

                                            <!-- @if(auth()->user()->isOwnerOfTeam($team))

                        

                                                <form style="display: inline-block;" action="{{route('teams.destroy', $team)}}" method="post">
                                                    {!! csrf_field() !!}
                                                    <input type="hidden" name="_method" value="DELETE" />
                                                    <button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i> Delete</button>
                                                </form>
                                            @endif -->
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
