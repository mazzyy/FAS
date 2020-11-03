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
                <div class="card-header">Create Committe</div>
                <div class="card-body cc_body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                    </div>
                    @endif
                    <form action="{{ url ('committe-user-create') }}" method="POST">
                    {{ csrf_field() }}

                        <input type="text" name="comMember-Name" class="form-control" id="exampleInputEmail1" placeholder="Enter Name">
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        
                    
                    <button type="submit"  class="btn btn-primary mt-4 cc-btn">Submit</button>
                    </form>
                    @if( isset($userCreated) != NULL)
                    <div class="alert alert-success mt-5 clearfix">
                    <strong></strong> User Created.
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

</div>


@endsection
