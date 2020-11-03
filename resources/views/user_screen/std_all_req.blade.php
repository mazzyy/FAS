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
                <section id="tabs" class="project-tab">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <nav>
                                        
                                    <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Received Requests</a>
                                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Sent Requests</a>
                                        
                                    </div>
                                </nav>
                                <div class="tab-content" id="nav-tabContent">
                                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                        <table class="table" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>Student Name</th>
                                                    <th></th>   
                                                    <th class="text-right pr-5">Request Action</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                           {{-- sent request --}}
                                           @foreach($testing as $transport)
                                           
                                           <form  class="pb-5" action="{{ url ('myaccount') }}" method="POST">
                                                {{ csrf_field() }}
                                                <tr>
                                                        <td>{{$transport}}</td>
                                                         
                                                
                                                  
                                                        
                                                   <td class="text-right" style="padding-left:43%">
                                                        <a class="btn btn-primary text-white " href="/std_all_req">ACCEPT</a>
                                                   </td>
                                                   <td class="text-right">
                                                        <a class="btn btn-danger text-white " href="/std_all_req">REJECT</a>
                                                   </td>
                                                </tr>   
                                            </form>
                                           @endforeach 
                                                


                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                        <table class="table" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>Student Name</th>
                                                    <th></th>   
                                                    <th class="text-right pr-5">Request Action</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                                {{-- sent request --}}
                                                    @foreach($usernames as $transport)
                                                    <tr>
                                                          <td>{{$transport}}</td>
                                                           <td>
                                                   </td>
                                                
                                                   <td class="text-right">
                                                       
                                                        <a class="btn btn-primary text-white " href="/std_all_req">Delete</a>
                                                    </td>
                                                    @endforeach </a></td>

                                                
                                            </tbody>




                                            
                                        </table>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                </div>
            </div>
        </div>
        

</div>


@endsection
