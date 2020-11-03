@extends('layouts.app')

@section('content')


    
<div class="container-fluid">

    <div class="row justify-content-center">
        <div class="col-md-3">
            @component('layouts.navbar')
            @slot('userRole')
            {{-- {{$role}} --}}
            @endslot
            @endcomponent
        </div>
  

        <div class="col-md-9 mt-4 ">
            <div class="card">
                <div class="card-header">User change information </div>
                <div class="card-body cc_body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                    </div>
                    @endif
{{-- change user image --}}
{{-- <img src="{{ asset('img/' . Auth::user()->image) }}" alt="..." width="65" class="mr-3 rounded-circle img-thumbnail shadow-sm"> --}}

<form class="pb-5 pt-2 " action="{{ url ('myaccountimage') }}" method="POST" enctype="multipart/form-data">
    <p class="text-secondary pl-5"><small>Select image to update</small></p>
    {{ csrf_field() }}
    {{-- Select image to upload: --}}
    <input type="file" name="file" required id="fileToUpload"  class=" img-thumbnail shadow-sm" > 
 
    <button type="submit"  class="btn btn-primary" value="Upload Image" name="submit">update</button>
</form>



{{-- user name change --}}

                    <form  class="pb-5" action="{{ url ('myaccount') }}" method="POST">
                    {{ csrf_field() }}
                    
                        <input  type="text" name="name" required class="form-control" id="exampleInputEmail1" placeholder="Change Name">
                        <button type="submit"  class="btn btn-primary  ">Submit</button>
                    </form>
                   

{{-- user password --}}

                        <form class="pb-5" action="{{ url ('myaccountpassword') }}" method="POST">
                            {{ csrf_field() }}
                        <input type="password" name="password" required class="form-control" id="exampleInputEmail1" placeholder="Change Password">
                        <button type="submit"  class="btn btn-primary  ">Submit</button>
                        </form>
                    

                    @if( isset($userCreated) != NULL)
                    <div class="alert alert-success mt-4 w-75">
                    <strong></strong> Success
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

</div>


@endsection
