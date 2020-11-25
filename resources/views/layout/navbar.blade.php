<nav class="navbar sticky-top navbar-dark navbar-expand-md bg-black text-uppercase px-0">
    <button class="navbar-toggler mx-3" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav bg-black mx-auto">
            <li class="nav-item p-1 {{ (request()->is('/')) ? 'active' : '' }}">
                <a class="nav-link" href="/">Главная</a>
            </li>
            <li class="nav-item p-1">
                <a class="nav-link" href="https://my.blackmine.pro/" target="_blank">Личный кабинет</a>
            </li>
            <li class="nav-item p-1">
                <a class="nav-link disabled" href="/mods">Модлист</a>
            </li>
            <li class="nav-item p-1 dropdown">
                <a class="nav-link dropdown-toggle" id="clientDropdown" role="button" data-toggle="dropdown">
                    Скачать клиент
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="/updates/BlackmineLauncher.exe" target="_blank">.exe (Windows
                        x64)</a>
                    <a class="dropdown-item" href="/updates/BlackmineLauncher.jar" target="_blank">.jar (Другие
                        платформы)</a>
                </div>
            </li>
            <li class="nav-item p-1">
                <a class="nav-link" href="/updates/JRE8.exe" target="_blank">Скачать Java</a>
            </li>
        </ul>
    </div>
</nav>