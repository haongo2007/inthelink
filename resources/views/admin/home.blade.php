Login success {{ auth('admin')->user()->name }} 
@if (Auth('admin')->user())
    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
        {{ Auth('admin')->user()->name }} <span class="caret"></span>
    </a>

    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="#"
           onclick="event.preventDefault();
                         document.getElementById('logout-admin').submit();">
            {{ __('Logout') }}
        </a>

        <form id="logout-admin" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>
@endif