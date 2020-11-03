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
                <div class="card-header"><h5><b>Upload excel file with the Student name and email.</b></h5></div>
                <div class="card-body cc_body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                    </div>
                    @endif

        <form action="{{ route('import-std') }}" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
            <input type="file" name="file" accept=".csv"     style="width: 20%;">
            <button class="btn btn-success">Import User Data</button>
        </form>
              @yield('csv_data')

              @if( isset($status) != NULL)
                    <div class="alert alert-success mt-4 w-75">
                    <strong></strong> Users Created.
                    </div>
                    @endif
              </div>
            </div>
        </div>
    </div>

</div>


@endsection
