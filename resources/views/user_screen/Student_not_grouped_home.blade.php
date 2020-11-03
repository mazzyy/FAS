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

        <div class="col-md-8 mt-4 ">
            <div class="card">
                <div class="card-body" style="padding-top: 60px;">
                    <div class="text-center">
                        <h4 style="font-size: 30px;">Group Creation</h4>
                        <small class="font-italic" style="font-size: 16px;">*You Need to Send Request to Your Team Members, Once they Accept Your Request You can Create Group</small>
                        <br>
                        <a class="btn btn-success text-white mt-2 mb-2" id="creaet_STD_group" data-toggle="modal" data-target="#exampleModal">Send Request for Group</a>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                <div class="modal-header flex-column">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                    <div>
                                        <h5 class="modal-title" id="exampleModalLabel">Request Students for Your Group</h5>
                                    </div>
                                    <div style="line-height: 1;text-align: justify;">
                                    <small><i>Only 3 memebrs can be your group partners once first 3 student accept your request your group will be created. (You may cancel any one after exceptance also)</i></small>
                                    </div>
                                    
                                </div>
                                <div class="modal-body text-left">
                                
                                    <div class="text-info"  id="msg_member_sel" style="display:none;">You can select only three members</div>
                                        @foreach ($users_not_in_group as $user_not_in_group)    
                                        <div class="form-check" style="padding: 1%;">
                                                <span  p-5 id="std_req_btn-{{$user_not_in_group->id}}" class="btn btn-primary" onclick="req_std({{$user_not_in_group->id}});">Send Request</span>
                                            <label class="form-check-label" for="defaultCheck1">
                                                {{ $user_not_in_group->name }}
                                            </label>
                                            {{-- <span id="std_req_btn-{{$user_not_in_group->id}}" class="btn btn-primary" onclick="req_std({{$user_not_in_group->id}});">Send Request</span> --}}
                                        </div>
                                        @endforeach
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        
                                    </div>
                                
                                </div>
                            </div>
                        </div>

                        
                        <br>
                        <i>OR</i>
                        <br>
                        <a class="btn btn-primary text-white mt-2 mb-5" href="/std_all_req">View All Requests</a>
                        
                    </div>
                </div>
            </div>
        </div>
        

</div>


@endsection
