@inject('request', 'Illuminate\Http\Request')
<div class="page-sidebar-wrapper">
    <div class="page-sidebar navbar-collapse collapse">
        <ul class="page-sidebar-menu"
            data-keep-expanded="false"
            data-auto-scroll="true"
            data-slide-speed="200">
            
            <li class="{{ $request->segment(1) == 'home' ? 'active' : '' }}">
                <a href="{{ url('/') }}">
                    <i class="fa fa-wrench"></i>
                    <span class="title">@lang('quickadmin.dashboard')</span>
                </a>
            </li>

            <li>
                <a href="#">
                    <i class="fa fa-users"></i>
                    <span class="title">@lang('quickadmin.user-management.title')</span>
                    <span class="fa arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="{{ $request->segment(1) == 'roles' ? 'active active-sub' : '' }}">
                        <a href="{{ route('roles.index') }}">
                            <i class="fa fa-briefcase"></i>
                            <span class="title">
                                @lang('quickadmin.roles.title')
                            </span>
                        </a>
                    </li>
                    <li class="{{ $request->segment(1) == 'users' ? 'active active-sub' : '' }}">
                        <a href="{{ route('users.index') }}">
                            <i class="fa fa-user"></i>
                            <span class="title">
                                @lang('quickadmin.users.title')
                            </span>
                        </a>
                    </li>
                
                </ul>
            </li><li class="{{ $request->segment(1) == 'cadastro_de_clientes' ? 'active' : '' }}">
                <a href="{{ route('cadastro_de_clientes.index') }}">
                    <i class="fa fa-user"></i>
                    <span class="title">@lang('quickadmin.cadastro-de-clientes.title')</span>
                </a>
            </li>
            <li class="{{ $request->segment(1) == 'cadastro_de_produtos' ? 'active' : '' }}">
                <a href="{{ route('cadastro_de_produtos.index') }}">
                    <i class="fa fa-tint"></i>
                    <span class="title">@lang('quickadmin.cadastro-de-produto.title')</span>
                </a>
            </li>
            

            <li>
                <a href="{{ url('/logout') }}">
                    <i class="fa fa-arrow-left"></i>
                    <span class="title">@lang('quickadmin.logout')</span>
                </a>
            </li>
        </ul>
    </div>
</div>
