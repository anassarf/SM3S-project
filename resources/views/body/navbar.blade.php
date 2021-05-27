    <div class="entete">
        <div class="left-entete">
            <div class="entete-content">
                <i class="fa fa-clock-o" aria-hidden="true"></i>
                <span> Monday-Friday:10:00-18:00 </span>
            </div>
            <div class="entete-content">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span> exemple@gmail.com</span>
            </div>
            <div class="entete-content">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>(+212) 623 061 248</span>
            </div>
            
        </div>
        <div class="right-entete">
            <div class="icons">
                <i class="fa fa-facebook" aria-hidden="true"></i>
                <i class="fa fa-instagram" aria-hidden="true"></i>
                <i class="fa fa-linkedin" aria-hidden="true"></i>
                <i class="fa fa-twitter" aria-hidden="true"></i>
            </div>
        </div>
    </div>
    <div class="navbar">
        <div class="title-company">
            <span class="col-blue">S</span>
            <span class="col-blue">M</span>
            <span class="col-red">3</span>
            <span class="col-blue">S</span>
        </div>
        <div class="links">
            <div class="link">
                <a class="{{ Route::is('home') ? 'active' : '' }}"  href="{{ route('home') }}">
                    <span>
                        Accueil
                    </span>
                </a>
            </div>
            <div id="link" class="link">
                <a class="{{ Route::is('about') ? 'active' : '' }}" href="{{ route('about') }}">
                    <span>
                        Nos activites
                    </span>
                </a>
            </div>
            <div class="link">
                <a  class="{{ Route::is('services') ? 'active' : '' }}" href="{{ route('services') }}">
                    <span>
                        Services
                    </span>
                </a>
            </div>
            <div class="link">
                <a class="{{ Route::is('contact') ? 'active' : '' }}" href="{{ route('contact') }}">
                    <span>
                        Contact
                    </span>
                </a>
            </div>
            
        </div>
        <div class="hamburger">
            <div class="hamburger-menu ">
                <div class="btn-line"></div>
                <div class="btn-line"></div>
                <div class="btn-line"></div>
            </div>
        </div>
        <div class="menu">
            <ul class="list-items">
                <li class="nav-item">
                    <a href="{{ route('home') }}" class="link-item">
                        Accueil
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('services') }}" class="link-item">
                        Services
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('contact') }}" class="link-item">
                        Contact
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('about') }}" class="link-item">
                        Nos activites
                    </a>
                </li>
              
            </ul>
        </div>
        
    </div>

    