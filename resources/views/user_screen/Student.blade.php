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

               
            </div>

            </div>
        </div>

</div>


@endsection
