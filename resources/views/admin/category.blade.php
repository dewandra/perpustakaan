<!DOCTYPE html>
<html>
  <head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dark Bootstrap Admin </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    @include('admin.css')
  </head>
  <body>
    <!-- Header -->
    @include('admin.header')
    <!-- Header end -->
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      @include('admin.sidebar')
      <!-- Sidebar Navigation end-->

      <!-- Page content-->
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Category</h2>
          </div>
        </div>
        <div class="mt-0">
          @if (session()->has('msg'))
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                  {{session()->get('msg')}}
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
          @endif
          @if ($errors->any())
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
        @endif
      </div>

        <form action="{{url('addCat')}}" method="POST">
          @csrf
          <div class="col form-group" >
            <input type="text" name="category" placeholder="add category" required>
            <input type="submit" class="btn btn-primary" value="add category">
          </div>
        </form>

        <div class="col-lg-3 col-md-6">
          <strong class="text-uppercase">Category List</strong>
          <table class="table">
              <thead>
                  <tr>
                      <th>Category Title</th>
                      <th>Action</th>
                  </tr>
              </thead>
              <tbody>
                  @foreach ($cat as $d)
                      <tr>
                          <td><a href="#">{{ $d->cat_title }}</a></td>
                          <td><a href="{{url('deleteCat',$d->id)}}" class="text-danger" onclick="confirmDelete(event)">Delete</a></td>
                      </tr>
                  @endforeach
              </tbody>
          </table>
      </div>
      

        
        <!-- Page content end-->
      <!-- Footer-->
      @include('admin.footer')
      <!-- Footer end-->
    </div>
    <!-- JavaScript files-->
    @include('admin.js')

    <script>
      function confirmDelete(ev) {
        ev.preventDefault();
        var url = ev.currentTarget.getAttribute('href');
        console.log(url)
          Swal.fire({
              title: 'Are you sure deleting this category?',
              text: "You won't be able to revert this!",
              icon: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Yes, delete it!'
          }).then((result) => {
              if (result.isConfirmed) {
                  window.location.href = url;
              }
          });
      }
  </script>
  
  </body>
</html>