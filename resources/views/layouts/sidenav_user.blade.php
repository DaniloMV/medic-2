<div class="navbar navbar-default collapse navbar-collapse" id="navbarCollapse">
	<div class="row">
	    <ul class="nav navbar-nav side-nav">
{{-- 	        <li class="{{ strpos(Request::path(), 'profile') !== false ? 'active' : '' }}">
	            <a href="/profile" ><i class="glyphicon glyphicon-info-sign"></i>
	            	<span class="sidenav-caption">&nbsp
	            		Company Profile
	            	</span>
	            </a>
	        </li> --}}
	        <li class="{{ strpos(Request::path(), 'patient') !== false ? 'active' : '' }}">
	            <a href="/patient" ><i class="glyphicon glyphicon-user"></i>
	            	<span class="sidenav-caption">&nbsp
	            		Patients Profile
	            	</span>
	            </a>
	        </li>
	    </ul>
    </div>
</div>