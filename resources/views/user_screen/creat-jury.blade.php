@extends('layouts.app')

@section('content')
    
<div class="container-fluid">

    <div class="row justify-content-center">
        <div class="col-md-3">
            @component('layouts.navbar')
            @slot('userRole')
            {{$role}}
            @endslot
            @endcomponent
        </div>

        

        <div class="col-md-9 mt-4 ">
            <div class="card">
                <div class="card-header"><h5><b>Create FYP Jury Team</b></h5></div>
                <div class="card-body">
                    <form action="{{ url ('create_jury') }}" method="POST" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <input type="text" id="teamName" value="{{old('juryTeamName')}}" name="juryTeamName" class="p-1" require placeholder="Enter Team Name" style="width: 80%;">
                        <a class="btn btn-success text-white disabled" id="add_team_member" data-toggle="modal" data-target="#exampleModal">Add Team Member</a>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Select Max Three Team Members</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                            <div class="text-info"  id="msg_member_sel" style="display:none;">You can select only three members</div>
                            @foreach ($advisors as $advisor)
                                
                                <div class="form-check">
                                    <input class="jury_mem_select_feild" name="userId[]" class="form-check-input" type="checkbox" value="{{$advisor->id}}" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                        {{$advisor->name}}
                                    </label>
                                </div>    
                            @endforeach

                            
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                            </div>
                        </div>
                        </div>



                    </form>
                    @if($errors->any()) 
                        <h4 class="text-danger" style="font-size: 16px;margin-top: 5px;font-weight: 500;">{{$errors->first()}}</h4>
                    @endif

                    @if(isset($Success))
                        <h4 class="text-success" style="font-size: 16px;margin-top: 5px;font-weight: 500;">{{$Success}}</h4>
                    @endif
                    

                    <div class="listTeam">
                        <ul>
                        @foreach ($teamNames as $teamName) 
                                <li>
                                    {{$teamName->juryTeamName}}
                                    <div>
                                        <ol>
                                            <li><a href="{{url('/jury-team-details/'.$teamName->juryTeamId)}}"><i class="far fa-eye text-info"></i></a></li>
                                            <li><button><i class="fas fa-trash text-danger"></i></button></li>
                                        </ol>
                                    </div>
                                </li>
                        @endforeach
                        </ul>
                    <div>
                </div>
            </div>
        </div>
    </div>

</div>


@endsection
