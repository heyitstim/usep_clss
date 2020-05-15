<div class="sidebar" data-color="rose" data-background-color="white" data-image="{{ asset('material') }}/img/eagle.jpg">
    <div class="logo" style="text-align: center">
        <img style="text-align: center;" src="{{ asset('material')}}/img/faces/avatar.jpg" alt="" height="100" width="100">
        <div>
            <b>
                <font color="black" style="text-align: center; font-size: 20px;"> {{ auth()->user()->name }} </font>
            </b>
            <h5 style="text-align: center;">
                {{ auth()->user()->college }}
                {{ auth()->user()->course }}
            </h5>
        </div>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item {{ $activePage == 'dashboard' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('home') }}">
                    <i class="material-icons"> dashboard</i>
                    <p>{{ __('Home') }}</p>
                </a>
            </li>
            <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">
                <a class="nav-link" data-toggle="collapse" href="#FrontlineServices" aria-expanded="true">
                    <i class="material-icons">account_balance</i>
                    <p>{{ __('Utilities') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="FrontlineServices">
                    <ul class="nav">
                        <li class="nav-item{{ $activePage == 'OCSC' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('customer_feedback_form_ocsc') }}">
                                <i class="material-icons">notes</i>
                                <span class="sidebar-normal">{{ __('OCSC') }} </span>
                            </a>
                        </li>
                        <li class="nav-item{{ $activePage == 'OSAS' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('customer_feedback_form_osas') }}">
                                <i class="material-icons">notes</i>
                                <span class="sidebar-normal">{{ __('OSAS') }} </span>
                            </a>
                        </li>
                        <li class="nav-item{{ $activePage == 'HSD (Clinic)' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('customer_feedback_form_clinic') }}">
                                <i class="material-icons">notes</i>
                                <span class="sidebar-normal">{{ __('HSD (Clinic)') }} </span>
                            </a>
                        </li>
                        <li class="nav-item{{ $activePage == 'UAGC' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('customer_feedback_form_uagc') }}">
                                <i class="material-icons">notes</i>
                                <span class="sidebar-normal">{{ __('UAGC') }} </span>
                            </a>
                        </li>
                        <li class="nav-item{{ $activePage == 'Finance' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('customer_feedback_form_finance') }}">
                                <i class="material-icons">notes</i>
                                <span class="sidebar-normal">{{ __('Finance') }} </span>
                            </a>
                        </li>
                        <li class="nav-item{{ $activePage == 'OUR' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('customer_feedback_form_our') }}">
                                <i class="material-icons">notes</i>
                                <span class="sidebar-normal">{{ __('OUR') }} </span>
                            </a>
                        </li>
                        <li class="nav-item{{ $activePage == 'ULRC' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('customer_feedback_form_ulrc') }}">
                                <i class="material-icons">notes</i>
                                <span class="sidebar-normal">{{ __('ULRC') }} </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item{{ $activePage == 'notifications' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="material-icons">reply</i>
                    <p>{{ __('Log Out') }}</p>
                </a>
                </a>
            </li>
        </ul>
    </div>
</div>
