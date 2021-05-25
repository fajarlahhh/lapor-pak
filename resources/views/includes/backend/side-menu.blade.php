
<!-- BEGIN: Side Menu -->
<nav class="side-nav">
    <a href="" class="intro-x flex items-center pl-5 pt-4">
        <img alt="Lapor Pak" class="w-6" src="/images/logo.svg">
        <span class="hidden xl:block text-white text-lg ml-3"> Lapor<span class="font-medium">Pak</span> </span>
    </a>
    <div class="side-nav__devider my-6"></div>
    <ul>
        @foreach (config('menu') as $row)
        <li>
            <a href="{{ $row['link'] }}" class="side-menu @if (strpos(Request::url(), $row['title'])) side-menu--active @endif">
                <div class="side-menu__icon"> <i data-feather="{{ $row['icon'] }}"></i> </div>
                <div class="side-menu__title"> {{ ucfirst($row['title']) }} </div>
            </a>
        </li>
        @endforeach
    </ul>
</nav>
<!-- END: Side Menu -->
