 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" 
 crossorigin="anonymous" referrerpolicy="no-referrer" />
 
 <nav id="sidebar">
        <!-- Sidebar Header-->
        <div class="sidebar-header d-flex align-items-center">
          <div class="avatar"><img src="admin/img/avatar-6.jpg" alt="..." class="img-fluid rounded-circle"></div>
          <div class="title">
            <h1 class="h5">Mark Stephen</h1>
            <p>Web Designer</p>
          </div>
        </div>
        <!-- Sidebar Navidation Menus--><<ul class="list-unstyled">
  <li class="active">
    <a href="index.html"><i class="icon-home"></i> Home</a>
  </li>

  <li>
   
      <li><a href="{{ url('create_room') }}"><i class="fa-brands fa-intercom"></i>Add Rooms</a></li>
      <li><a href="{{ url('view_room')}}"><i class="fa-regular fa-eye"></i>View Rooms</a></li>

  </li>
    <li>
    <a href="{{ url('bookings')}}"><i class="icon-home"></i>Bookings</a>
  </li>
  <li>
    <a href="{{ url('view_gallary')}}"><i class="icon-home"></i>Gallary</a>
  </li>
   <li>
    <a href="{{url('all_messages')}}"><i class="icon-home"></i>Messages</a>
  </li>
</ul>


      </nav>