<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student</title>
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
						<a class="nav-link" href="/dashboard"><i class="fa fa-home fa-fw mr-1"></i>My Dashboard</a>
					</li>
					<li class="nav-item  pl-1">
						<a class="nav-link" href="/allbooks"><i class="fa fa-th-list fa-fw mr-1"></i>All Books</a>
					</li>
					<li class="nav-item pl-1">
						<a class="nav-link" href="/studentprofile"><i class="fa fa-phone fa-fw fa-rotate-180 mr-1"></i>Profile</a>
					</li>
					<li class="nav-item pl-1" style="margin-left:700px;">
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
  <div >@yield('book')</div>
</html>