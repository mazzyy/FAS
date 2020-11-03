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
            <div class="container">
                <div class="card">
                    <div class="card-header">
                        <p class="float-left mb-0 mt-2">Your Ideas for FPI Projects</p>
                        <div class="btn_act_idea float-right">
                            <form action="{{url ('/uplaod_idea_form') }}"  method="POST" enctype="multipart/form-data" >
                            {{csrf_field()}}
                                <a class="btn btn-success text-white" id="add_idea" data-toggle="modal" data-target="#exampleModal" >Add New Idea</a>
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
                                        <input type="text" required name="IdeaName" placeholder="Enter Your Idea Name">
                                        <input type="file" required name="IdeaPDF">
                                    
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Create</button>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="card-body cc_body">
                        @if(count($ideasList) > 0)
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Discription File</th>
                                   
                                    <th scope="col">Edit</th>
                                    <th scope="col" >Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($ideasList as $ideaList)
                                <tr>
                                    
                                    <th scope="row">{{$loop->iteration}}</th>
                
                                    <td>{{$ideaList->IdeaName}}</td>
                                    <td><a href="/ideaPDF/{{$ideaList->IdeaPDF}}" target="_blank">Click Here</a></td>
                                
                                    <td ><button  type="submit" class="btn btn-primary">Edit</button></td>
                                    <td><button type="submit" class="btn btn-danger">Delete</button></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        
                        @else
                        <h3>You did not submited any Idea.</h3>
                        @endif
                    </div>


                    @if($errors->any()) 
                        <div class="Notification-br error_br_color">
                            <p>{{$errors->first()}}</p>
                        </div>
                    @endif
                    
                    @if(\Session::has('success'))
                        <div class="Notification-br success_br_color">
                            <p>{!! \Session::get('success') !!}</p>
                        </div>
                    @endif
                  
                </div>
            </div>

            </div>
        </div>

</div>


@endsection






