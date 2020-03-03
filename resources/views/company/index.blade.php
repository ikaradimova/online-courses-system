<style>

</style>
<header role="banner">
    <h1>Администраторски панел</h1>
    <ul class="utilities">
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                <span class="caret"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    Изход
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                      style="display: none;">
                    @csrf
                </form>
            </div>
        </li>
    </ul>
</header>

<nav role="navigation">
    <ul class="main">
        <?php /* <li class="dashboard"><a href="/home">Начално меню</a></li> */?>
        <li class="users"><a href="/users">Потребители</a></li>
    </ul>
</nav>
