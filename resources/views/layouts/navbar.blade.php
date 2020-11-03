

<div class="vertical-nav bg-white" id="sidebar">
   <div class="py-0 px-3 mb-2 mt-2">
      <div class="media d-flex align-items-center">
         {{-- <img src="{{url('/images/userImg.png')}}" alt="..." width="65" class="mr-3 rounded-circle img-thumbnail shadow-sm"> --}}
         <img src="{{URL::asset('images')}}{{'/'.Auth::user()->image}}" alt="upload you display picture" width="75" height="50" class="mr-3 rounded-circle img-thumbnail shadow-sm">
         <div class="media-body">
           
            <h4 class="m-0">{{ Auth::user()->name }}</h4>
            <p class="font-weight-light text-muted mb-0">{{$userRole}}</p>
            
            <!---$role--->
         </div>
      </div>
   </div>
   <ul id="main_nav" class="nav flex-column bg-white mb-0 mt-4">
      <!-- Menu Items according to the roles of the users -->

      @if(Auth::user()->userRole == '1')
      <li class="nav-item {{ (request()->is('admin_home')) ? 'bg-light' : '' }}">
         <a href="admin_home" class="nav-link text-dark font-it "><i class="fas fa-tachometer-alt mr-3 text-primary fa-fw"></i>Dashboard</a>
      </li>
      <li class="nav-item">
         <a href="{{url('/create_committie')}}" class="nav-link text-dark font-it "><i class="fas fa-users mr-3 text-primary fa-fw"></i>Create Committie </a>
      </li>
      @elseif(Auth::user()->userRole == '3')
      <li class="nav-item {{ (request()->is('cm_home')) ? 'bg-light' : '' }}">
         <a href="/cm_home" class="nav-link text-dark font-it "><i class="fas fa-tachometer-alt mr-3 text-primary fa-fw"></i>Dashboard</a>
      </li>
      <li class="nav-item">
         <a href="{{url('/add_advisor')}}" class="nav-link text-dark font-it "><i class="fas fa-users mr-3 text-primary fa-fw"></i>Add Advisor</a>
      </li>
      <li class="nav-item">
         <a href="{{url('/add_std')}}" class="nav-link text-dark font-it "><i class="fas fa-users mr-3 text-primary fa-fw"></i>Add Student</a>
      </li>
      <li class="nav-item">
         <a href="{{url('/create-jury-team')}}" class="nav-link text-dark font-it "><i class="fas fa-users mr-3 text-primary fa-fw"></i>Jury Teams</a>
      </li>
    
      @elseif(Auth::user()->userRole == '5')
 
      <li class="nav-item">
         <a href="{{url('/ad_home')}}" class="nav-link text-dark font-it "><i class="fas fa-users mr-3 text-primary fa-fw"></i>Dashboard</a>
      </li>
      <li class="nav-item">
         <a href="{{url('/advisor_idea')}}" class="nav-link text-dark font-it "><i class="fas fa-users mr-3 text-primary fa-fw"></i>Publish Idea</a>
      </li>
      <li class="nav-item">
         <a href="/advisor_ideas" class="nav-link text-dark font-it "><i class="fas fa-tachometer-alt mr-3 text-primary fa-fw"></i>All Advisor Ideas</a>
      </li>
      <li class="nav-item">
            <a href="{{url('/jury-team')}}" class="nav-link text-dark font-it "><i class="fas fa-users mr-3 text-primary fa-fw"></i>Jury Teams</a>
      </li>
      @elseif(Auth::user()->userRole == '4')
      <li class="nav-item {{ (request()->is('st_home')) ? 'bg-light' : '' }}">
         <a href="/st_home" class="nav-link text-dark font-it "><i class="fas fa-tachometer-alt mr-3 text-primary fa-fw"></i>Dashboard</a>
      </li>
      
      <li class="nav-item {{ (request()->is('st_home')) ? 'bg-light' : '' }}"> 
         <a href="/advisor_ideast" class="nav-link text-dark font-it "><i class="fas fa-tachometer-alt mr-3 text-primary fa-fw"></i>Advisors Ideas</a>
      </li>
      @endif

      <!-- end of different menu items -->
      <!-- Defualt menus items for all users  -->
      <li class="nav-item">
         <a class="nav-link text-dark " href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
         <i class="fa fa-power-off mr-3 text-primary fa-fw" aria-hidden="true"></i>{{ __('Logout') }}
         </a>
         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
         </form>
      </li>
   </ul>
</div>
<!-- End vertical navbar -->
