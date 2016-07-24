<nav class="navbar navbar-inverse">
  <div class="container-fluid">

    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{ route('admin.index') }}">Dashboard</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li {{ Request::is('admin/posts') ? 'class=active' : ''}}><a href="{{ route('admin.blog.posts') }}">Posts</a></li>
        <li {{ Request::is('admin/categories') ? 'class=active' : ''}}><a href="{{ route('admin.blog.categories') }}">Categories</a></li>
        <li {{ Request::is('admin/contact') ? 'class=active' : ''}}><a href="{{route('admin.blog.contact')}}">Contact Messages</a></li>
        <li><a href="{{ route('admin.logout') }}">Logout</a></li>
      </ul>
    </div>
  </div>
</nav>