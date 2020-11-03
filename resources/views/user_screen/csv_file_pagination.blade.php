@extends('committeeHead')

@section('csv_data')

<table class="table table-bordered table-striped">
 <thead>
  <tr>
   <th>Name</th>
   <th>Email Address</th>
  </tr>
 </thead>
 <tbody>
 @foreach($data as $row)
  <tr>
   <td>{{ $row->name }}</td>
   <td>{{ $row->email }}</td>
  </tr>
 @endforeach
 </tbody>
</table>

{!! $data->links() !!}

@endsection