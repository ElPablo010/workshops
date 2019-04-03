<ul class="desktop-nav">
    <a class="toggle-nav" href="#">&#9776;</a>
    @if(Auth::check())
    <li><a href="https://dementiecoaching.be/">Home</a></li>
    <li><a href="{{ route('workshops.overview') }}">Workshops</a></li>
    <li><a href="{{ route('workshops.create') }}">Toevoegen</a></li>
    <li><a href="{{ route('logout') }}">Admin logout</a></li>
    @else
    <li><a href="https://dementiecoaching.be/">Home</a></li>
    <li><a href="https://dementiecoaching.be/aanbod/">Aanbod</a></li>
    <li><a href="{{ route('home') }}">Workshops</a></li>
    <li><a href="https://dementiecoaching.be/kennisdatabank/">Kennisdatabank</a></li>
    <li><a href="https://dementiecoaching.be/nieuwsoverzicht/">Nieuws</a></li>
    <li><a href="https://dementiecoaching.be/blog/">Blog</a></li>
    @endif
</ul>
<ul id="responsive-nav" class="responsive-nav">
    @if(Auth::check())
    <li><a href="https://dementiecoaching.be/">Home</a></li>
    <li><a href="{{ route('workshops.overview') }}">Workshops</a></li>
    <li><a href="{{ route('workshops.create') }}">Toevoegen</a></li>
    <li><a href="{{ route('logout') }}">Admin logout</a></li>
    @else
    <li><a href="https://dementiecoaching.be/">Home</a></li>
    <li><a href="https://dementiecoaching.be/aanbod/">Aanbod</a></li>
    <li><a href="{{ route('home') }}">Workshops</a></li>
    <li><a href="https://dementiecoaching.be/kennisdatabank/">Kennisdatabank</a></li>
    <li><a href="https://dementiecoaching.be/nieuwsoverzicht/">Nieuws</a></li>
    <li><a href="https://dementiecoaching.be/blog/">Blog</a></li>
    <li><a href="https://dementiecoaching.be/over-ons/">Over ons</a></li>
    <li><a href="https://dementiecoaching.be/contact/">Contact</a></li>
    <li><a href="{{ route('login') }}">Admin login</a></li>
    @endif
</ul>

