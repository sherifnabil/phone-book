<!-- navbar -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

             <a class="navbar-brand text-uppercase" href="{{ route('contacts.index') }}">            
            @lang('main.phone_book')
          </a> 
        </div>
        <!-- /.navbar-header -->
        <div class="collapse navbar-collapse" id="navbar-collapse">
          <div class="row">

            <div class="nav navbar-right navbar-btn">
             <a href="{{ route('contacts.create') }}" class="btn btn-default">
              <i class="glyphicon glyphicon-plus"></i> 
              @lang('main.add_contact')
            </a>
            <a href="{{ route('home') }}" class="btn btn-default">
              <i class="glyphicon glyphicon-home"></i> 
              @lang('main.home')
            </a>
{{--       
      <!-- Authentication Links -->
              @guest
              <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
              </li>
              @if (Route::has('register'))
              <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
              </li>
              @endif 
              @else
              <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                  aria-expanded="false" v-pre>
                                                  {{ Auth::user()->name }} <span class="caret"></span>
                                              </a>
              
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                    document.getElementById('logout-form').submit();">
                                                      {{ __('Logout') }}
                                                  </a>
              
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                  </form>
                </div>
              </li>
              @endguest --}}
            </div>
            
            <form action="{{ route('contacts.search') }}" class="navbar-form navbar-right" role="search">
              <div class="input-group">
                <input type="text" name="search"  placeholder="{{ __('main.search') }}" class="text-center form-control">
                <span class="input-group-btn">
                  <button class="btn btn-default" type="submit">
                    <i class="glyphicon glyphicon-search"></i>
                  </button>
                </span>
                
              </div>
              </form>
          </div>

   
    </div>
</nav>