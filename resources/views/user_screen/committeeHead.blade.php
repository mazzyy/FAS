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

                <div class="card-columns cards-cc">
                    <div class="card bg-primary">
                        <div class="card-body text-left p-1 pl-3 pt-3 ">
                            <p class="card-text m-0">200<br>Register Students</p>
                            <i class="fas fa-users mr-1"></i>
                        </div>
                    </div>
                    <div class="card bg-secondary">
                        <div class="card-body text-left p-1 pl-3 pt-3 ">
                            <p class="card-text m-0">110<br>Advisors Ideas</p>
                            <i class="fas fa-users mr-1"></i>
                        </div>
                    </div>
                    <div class="card bg-success">
                        <div class="card-body text-left p-1 pl-3 pt-3 ">
                            <p class="card-text m-0">138<br>Advisors</p>
                            <i class="fas fa-users mr-1"></i>
                        </div>
                    </div>
                    <div class="card bg-danger">
                        <div class="card-body text-left p-1 pl-3 pt-3 ">
                            <p class="card-text m-0">15<br>Groups</p>
                            <i class="fas fa-users mr-1"></i>
                        </div>
                    </div>
                    <div class="card bg-dark">
                        <div class="card-body text-left p-1 pl-3 pt-3 ">
                            <p class="card-text m-0">15<br>Groups</p>
                            <i class="fas fa-users mr-1"></i>
                        </div>
                    </div>
                    <div class="card bg-info">
                        <div class="card-body text-left p-1 pl-3 pt-3 ">
                            <p class="card-text m-0">200<br>Register Students</p>
                            <i class="fas fa-users mr-1"></i>
                        </div>
                    </div>
                </div>
            </div>

            </div>
        </div>

</div>


@endsection






