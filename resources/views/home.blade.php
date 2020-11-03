@extends('layouts.app')

@section('content')
<div class="container-fluid">    
    <!--_right menu -->
        <div class="row justify-content-center">
                <div class="col-3">
                    
                 </div>
         
                
                 <div class="col-md-9 ">
                     <div class="card">
                         <div class="card-header">Dashboard</div>
         
                         <div class="card-body">
                             @if (session('status'))
                                 <div class="alert alert-success" role="alert">
                                     {{ session('status') }}
                                 </div>
                             @endif
         
                             <form action="{{ url ('creatCommettiee') }}" method="POST">
                                {{ csrf_field() }}
                                    <div >
                                      <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                    </div>
                                
                                    <button type="submit" class="btn btn-primary">Submit</button>
                             </form>
                         </div>
                     </div>
                 </div>
         </div>
  <!-- Vertical navbar -->
<div class="vertical-nav bg-white" id="sidebar">
    <div class="py-0 px-3 mb-4 bg-light pt-5 mt-5">
      <div class="media d-flex align-items-center"><img src="https://res.cloudinary.com/mhmd/image/upload/v1556074849/avatar-1_tcnd60.png" alt="..." width="65" class="mr-3 rounded-circle img-thumbnail shadow-sm">
        <div class="media-body">
          <h4 class="m-0">Jason Doe</h4>
          <p class="font-weight-light text-muted mb-0">Web developer</p>
        </div>
      </div>
    </div>
  
    <p class="text-gray font-weight-bold text-uppercase px-3 small pb-4 mb-0">Main</p>
  
    <ul class="nav flex-column bg-white mb-0">
      <li class="nav-item">
        <a href="#" class="nav-link text-dark font-italic bg-light">
                  <i class="fa fa-th-large mr-3 text-primary fa-fw"></i>
                  Home
              </a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link text-dark font-italic">
                  <i class="fa fa-address-card mr-3 text-primary fa-fw"></i>
                  About
              </a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link text-dark font-italic">
                  <i class="fa fa-cubes mr-3 text-primary fa-fw"></i>
                  Services
              </a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link text-dark font-italic">
                  <i class="fa fa-picture-o mr-3 text-primary fa-fw"></i>
                  Gallery
              </a>
      </li>
    </ul>
  
    <p class="text-gray font-weight-bold text-uppercase px-3 small py-4 mb-0">Charts</p>
  
    <ul class="nav flex-column bg-white mb-0">
      <li class="nav-item">
        <a href="#" class="nav-link text-dark font-italic">
                  <i class="fa fa-area-chart mr-3 text-primary fa-fw"></i>
                  Area charts
              </a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link text-dark font-italic">
                  <i class="fa fa-bar-chart mr-3 text-primary fa-fw"></i>
                  Bar charts
              </a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link text-dark font-italic">
                  <i class="fa fa-pie-chart mr-3 text-primary fa-fw"></i>
                  Pie charts
              </a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link text-dark font-italic">
                  <i class="fa fa-line-chart mr-3 text-primary fa-fw"></i>
                  Line charts
              </a>
      </li>
    </ul>
  </div>
  <!-- End vertical navbar -->
  
  
  <!-- Page content holder -->
  <div class="page-content p-5" id="content">
    <!-- Toggle button -->
    <button id="sidebarCollapse" type="button" class="btn btn-light bg-white rounded-pill shadow-sm px-4 mb-4"><i class="fa fa-bars "></i><small class="text-uppercase font-weight-bold"></small></button>
</div>




@endsection
