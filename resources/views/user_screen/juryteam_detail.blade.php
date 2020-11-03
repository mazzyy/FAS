@extends('layouts.app')

@section('content')
    
<div class="container-fluid">

    <div class="row justify-content-center">
        <div class="col-md-3">
            @component('layouts.navbar')
            @slot('userRole')
            Committee Member
            @endslot
            @endcomponent
        </div>

        

        <div class="col-md-9 mt-4 ">
            <div class="card">
                <div class="card-header"><h5><b>{{$teamName}}</b></h5></div>
                <div class="card-body">
                      
                   @foreach($userName as $name)
                     <img src="{{url('/images/userImg.png')}}" alt="..." width="65" class="mr-3 rounded-circle img-thumbnail shadow-sm">
                   <span>{{$name}},</span>
                   &nbsp;&nbsp;&nbsp;&nbsp;
                   @endforeach
                </div>
            </div>  
        </div>
    </div>

</div>


@endsection
