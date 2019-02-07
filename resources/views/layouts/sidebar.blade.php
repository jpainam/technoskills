<div class="user">
    <div class="photo">
        <img src="{{ URL::to('/img/faces/bernard.png') }}" />
    </div>
    <div class="user-info">
        <a data-toggle="collapse" href="#collapseExample" class="username">
            <span>
                Bernard Pierre
                <b class="caret"></b>
            </span>
        </a>
        <div class="collapse" id="collapseExample">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <span class="sidebar-mini"> MP </span>
                        <span class="sidebar-normal"> Profil </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <span class="sidebar-mini"> EP </span>
                        <span class="sidebar-normal"> Editer Profil </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <span class="sidebar-mini"> P </span>
                        <span class="sidebar-normal"> Param&egrave;tres </span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<ul class="nav">
    <li class="nav-item {{ (Request::is('/') ? 'active' : '') }} ">
        <a class="nav-link" href="{{URL::to('/')}}" data-background-color="danger">
            <i class="material-icons">dashboard</i>
            <p>{{ __('menu.home') }}  </p>
        </a>
    </li>
    <li class="nav-item {{ (Request::is('person') ? 'active' : '') }}">
        <a class="nav-link" href="{{ route('person') }}">
            <i class="material-icons">people</i>
            <p> {{ __('menu.persons') }} </p>
        </a>
    </li>
    <li class="nav-item {{ (Request::is('training') ? 'active' : '') }}">
        <a class="nav-link" href="{{ route('training') }}">
            <i class="material-icons">work</i>
            <p> {{ __('menu.training') }} </p>
        </a>
    </li>
    <li class="nav-item {{ (Request::is('competence') ? 'active' : '') }}">
        <a class="nav-link" href="{{ route('competence') }}">
            <i class="material-icons">apps</i>
            <p> {{ __('menu.competence') }}</p>
        </a>
    </li>
    <li class="nav-item {{ (Request::is('profil') ? 'active' : '') }} ">
        <a class="nav-link" href="{{ route('profil') }}">
            <i class="material-icons">content_paste</i>
            <p> {{ __('menu.profile') }}</p>
        </a>
    </li>
    <li class="nav-item {{ (Request::is('qcm') ? 'active' : '') }} ">
        <a class="nav-link" href="{{ route('qcm') }}">
            <i class="material-icons">timeline</i>
            <p>{{ __('menu.test') }}</p>
        </a>
    </li>
    <li class="nav-item {{ (Request::is('report') ? 'active' : '') }}">
        <a class="nav-link" href="{{ route('report') }}">
            <i class="material-icons">file_copy</i>
            <p> {{ __('menu.report') }} </p>
        </a>
    </li>
    <li class="nav-item ">
        <a class="nav-link" data-toggle="collapse" href="#settingsMenu">
            <i class="material-icons">settings</i>
            <p> {{ __('menu.settings') }}
                <b class="caret"></b>
            </p>
        </a>
        <div class="collapse show" id="settingsMenu">
            <ul class="nav">
                <li class="nav-item ">
                    <a class="nav-link" href="{{ route('settings.society') }}">
                        <span class="sidebar-mini"> SO </span>
                        <span class="sidebar-normal"> {{ __('menu.settings.society') }} </span>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="{{ route('settings.group') }}">
                        <span class="sidebar-mini"> GR </span>
                        <span class="sidebar-normal">{{ __('menu.settings.group') }} </span>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="{{ route('settings.section') }}">
                        <span class="sidebar-mini"> SE </span>
                        <span class="sidebar-normal"> {{ __('menu.settings.section') }} </span>
                    </a>
                </li>
                 <li class="nav-item ">
                    <a class="nav-link" href="{{ route('settings.domain') }}">
                        <span class="sidebar-mini"> DO </span>
                        <span class="sidebar-normal"> {{ __('menu.settings.domain') }} </span>
                    </a>
                </li>
                 <li class="nav-item ">
                    <a class="nav-link" href="{{ route('settings.agency') }}">
                        <span class="sidebar-mini"> AG </span>
                        <span class="sidebar-normal"> {{ __('menu.settings.agency') }} </span>
                    </a>
                </li>
                 <li class="nav-item ">
                    <a class="nav-link" href="{{ route('settings.catalogue') }}">
                        <span class="sidebar-mini"> CA </span>
                        <span class="sidebar-normal"> {{ __('menu.settings.catalogue') }} </span>
                    </a>
                </li>
                 <li class="nav-item ">
                    <a class="nav-link" href="{{ route('settings.modele') }}">
                        <span class="sidebar-mini"> MO </span>
                        <span class="sidebar-normal"> {{ __('menu.settings.modele') }} </span>
                    </a>
                </li>
                 <li class="nav-item ">
                    <a class="nav-link" href="{{ route('settings.places') }}">
                        <span class="sidebar-mini"> PL </span>
                        <span class="sidebar-normal"> {{ __('menu.settings.place') }} </span>
                    </a>
                </li>
                 <li class="nav-item ">
                    <a class="nav-link" href="{{ route('settings.trainer') }}">
                        <span class="sidebar-mini"> TE </span>
                        <span class="sidebar-normal"> {{ __('menu.settings.trainer') }} </span>
                    </a>
                </li>
            </ul>
        </div>
    </li>
    <li class="nav-item {{ (Request::is('users') ? 'active' : '') }} ">
        <a class="nav-link" href="{{ route('users') }}">
            <i class="material-icons">person</i>
            <p> {{ __('menu.user') }} </p>
        </a>
    </li>
</ul>