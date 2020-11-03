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
                        <p class="float-left mb-0 mt-2">Your Advisors  ideas for FPI Projects</p>
                        <div class="btn_act_idea float-right">
                            
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
                                  
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($ideasList as $ideaList)
                                <tr>
                                    <th scope="row">{{$loop->iteration}}</th>
                                    <td>{{$ideaList->IdeaName}}</td>
                                    <td><a href="/ideaPDF/{{$ideaList->IdeaPDF}}" target="_blank">Click Here</a></td>
                          
                                   
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






