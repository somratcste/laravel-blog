<nav class="navbar navbar-inverse">
  <div class="container-fluid">

    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{ route('blog.index') }}">Blog</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li {{ Request::is('blog/about') ? 'class=active' : ''}}><a href="{{ route('about') }}">About</a></li>
        <li {{ Request::is('blog/contact') ? 'class=active' : ''}}><a href="{{ route('contact') }}">Contact</a></li>
        <li {{ Request::is('admin/login') ? 'class=active' : '' }}><a href="{{ route('admin.login') }}">Login</a> </li>
      </ul>
    </div>
  </div>
</nav>