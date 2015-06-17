<div class="input-group">
    <input type="text" class="form-control" placeholder="Search...">
      <span class="input-group-btn">
        <button class="btn btn-default" type="button">
            <i class="fa fa-search"></i>
        </button>
      </span>
</div>


<ul class="nav nav-pills nav-stacked" id="menu">

    <li {{ (Request::is('admin/dashboard') ? ' class=active' : '') }}>
        <a href="{{URL::to('admin/dashboard')}}"
                >
            <i class="fa fa-dashboard fa-fw"></i><span class="hidden-sm text"> Dashbord</span>
        </a>
    </li>

{{--    <li {{ (Request::is('admin/language*') ? ' class=active' : '') }}>
        <a href="{{URL::to('admin/language')}}"
                >
            <i class="fa fa-language"></i><span
                    class="hidden-sm text"> Talen</span>
        </a>
    </li>--}}

    <li {{ (Request::is('admin/leerplan*') ? ' class=active' : '') }}>
        <a href="{{URL::to('admin/leerplan')}}"
                >
            <i class="fa fa-bars fa-1x"></i><span
                    class="hidden-sm text"> Leerplannen</span>
        </a>
    </li>




    <li {{ (Request::is('admin/users*') ? ' class=active' : '') }} >
        <a href="{{URL::to('admin/users')}}"
                >
            <i class="glyphicon glyphicon-user"></i><span
                    class="hidden-sm text"> Gebruikers</span>
        </a>
    </li>
</ul>
