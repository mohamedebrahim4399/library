 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" type="text/css" href="{{ url('/css/home.css') }}" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<header>
	<!--- Navbar --->
	<nav class="navbar navbar-expand-lg">
		<div class="container">
			<div class="collapse navbar-collapse" id="nvbCollapse">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item pl-1">
						<a class="nav-link" href="/home"><i class="fa fa-home fa-fw mr-1"></i>All Books</a>
					</li>
					<li class="nav-item  pl-1">
						<a class="nav-link" href="/add"><i class="fa fa-th-list fa-fw mr-1"></i>Add Book</a>
					</li>
					<li class="nav-item pl-1">
						<a class="nav-link" href="/borrow"><i class="fa fa-info-circle fa-fw mr-1"></i>Borrowed Books</a>
					</li>
					<li class="nav-item pl-1">
						<a class="nav-link" href="/profile"><i class="fa fa-phone fa-fw fa-rotate-180 mr-1"></i>Account</a>
					</li>
					<li class="nav-item pl-1">
						<a class="nav-link" href="/liststudents"><i class="fa fa-user-plus fa-fw mr-1"></i>List students</a>
          </li>
          <li class="nav-item pl-1" style="margin-left:130px;">
          <form class="form-inline my-2 my-lg-0" method="POST" action="/search">
      @csrf
        <p style="color:white;" >{{$errors->first('id')}}</p>
        <input class="form-control mr-sm-2" name="id" type="search" placeholder="Get student by id" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        
      </form>
      </li>
					<li class="nav-item pl-1">
          <form method="POST" action="{{ route('logout') }}" style="margin-bottom: 0px;">
              @csrf
            <a href="{{ route('logout') }}" class="nav-link"
            onclick="event.preventDefault();
                        this.closest('form').submit();">Log out  <span class="fa fa-sign-out"></span></a>
                  </form>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<!--# Navbar #-->
	</header>
	<div>	@yield('book')</div>
	<div> @yield('add')</div>
	<div> @yield('search')</div>
	<div> @yield('moredetails')</div>
	<div> @yield('liststudents')</div>
	</body>
	</html>