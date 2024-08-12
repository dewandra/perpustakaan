<!-- resources/views/admin/sidebar.blade.php -->
<nav id="sidebar">
  <!-- Sidebar Header-->
  <div class="sidebar-header d-flex align-items-center">
      <div class="avatar">
          <img src="img/avatar-6.jpg" alt="..." class="img-fluid rounded-circle">
      </div>
      <div class="title">
          <h1 class="h5">Mark Stephen</h1>
          <p>Web Designer</p>
      </div>
  </div>
  <!-- Sidebar Navigation Menus-->
  <span class="heading">Main</span>
  <ul class="list-unstyled">
      <li class="{{ request()->is('home') ? 'active' : '' }}">
          <a href="{{ url('home') }}">
              <i class="icon-home"></i> Home
          </a>
      </li>
      <li class="{{ request()->is('category') ? 'active' : '' }}">
          <a href="{{ url('category') }}">
              <i class="icon-grid"></i> Category
          </a>
      </li>
      <li class="{{ request()->is('addBook') || request()->is('addBooks/*') ? 'active' : '' }}">
          <a href="#addBooks" aria-expanded="{{ request()->is('addBook') || request()->is('addBooks/*') ? 'true' : 'false' }}" data-toggle="collapse">
              <i class="icon-windows"></i> addBook
          </a>
          <ul id="addBooks" class="collapse list-unstyled {{ request()->is('addBook') || request()->is('addBooks/*') ? 'show' : '' }}">
              <li class="{{ request()->is('addBook') ? 'active' : '' }}">
                  <a href="{{ url('addBook') }}">Add Book</a>
              </li>
              <li><a href="#">Page</a></li>
              <li><a href="#">Page</a></li>
          </ul>
      </li>
  </ul>
</nav>
