<nav class="col-md-3 col-lg-2 d-md-block bg-cTua fixed-top vh-100" style="margin-top: 10vh;">
    <div class="position-sticky" style="height: 50%;">
        <ul class="nav flex-column bg-cTua" style="height: 100%;">
            <li class="nav-item btn-cTua d-flex justify-content-start align-items-center mt-3" style="height: 20%;">
                <a class="nav-link {{ $activePage == 'dashboard' ? 'bg-cMedium' : '' }}" href="{{ url('/') }}"
                    style="width: 100%; display: flex; align-items: center; justify-content: start; height: 100%;">
                    <svg xmlns="http://www.w3.org/2000/svg" class="me-3" width="25" height="25" fill="white"
                        viewBox="0 0 16 16">
                        <path
                            d="M0 4s0-2 2-2h12s2 0 2 2v6s0 2-2 2h-4q0 1 .25 1.5H11a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1h.75Q6 13 6 12H2s-2 0-2-2zm1.398-.855a.76.76 0 0 0-.254.302A1.5 1.5 0 0 0 1 4.01V10c0 .325.078.502.145.602q.105.156.302.254a1.5 1.5 0 0 0 .538.143L2.01 11H14c.325 0 .502-.078.602-.145a.76.76 0 0 0 .254-.302 1.5 1.5 0 0 0 .143-.538L15 9.99V4c0-.325-.078-.502-.145-.602a.76.76 0 0 0-.302-.254A1.5 1.5 0 0 0 13.99 3H2c-.325 0-.502.078-.602.145" />
                    </svg>
                    Dashboard
                </a>
            </li>
            <li class="nav-item btn-cTua d-flex justify-content-start align-items-center mt-3" style="height: 20%;">
                <a class="nav-link {{ $activePage == 'book' ? 'bg-cMedium' : '' }}" href="{{ url('/book') }}"
                    style="width: 100%; display: flex; align-items: center; justify-content: start; height: 100%;">
                    <svg xmlns="http://www.w3.org/2000/svg" class="me-3" width="25" height="25"
                        fill="currentColor" viewBox="0 0 16 16">
                        <path
                            d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783" />
                    </svg>
                    Book
                </a>
            </li>
            <li class="nav-item btn-cTua d-flex justify-content-start align-items-center mt-3" style="height: 20%;">
                <a class="nav-link {{ $activePage == 'user' ? 'bg-cMedium' : '' }}" href="{{ url('/user') }}"
                    style="width: 100%; display: flex; align-items: center; justify-content: start; height: 100%;">
                    <svg xmlns="http://www.w3.org/2000/svg" class="me-3" width="25" height="25"
                        fill="currentColor" class="bi bi-people" viewBox="0 0 16 16">
                        <path
                            d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1zm-7.978-1L7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002-.014.002zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0M6.936 9.28a6 6 0 0 0-1.23-.247A7 7 0 0 0 5 9c-4 0-5 3-5 4q0 1 1 1h4.216A2.24 2.24 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816M4.92 10A5.5 5.5 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0m3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4" />
                    </svg>
                    User
                </a>
            </li>
            <li class="nav-item btn-cTua d-flex justify-content-start align-items-center mt-3" style="height: 20%;">
                <a class="nav-link {{ $activePage == 'pinjam' ? 'bg-cMedium' : '' }}" href="{{ url('/pinjam') }}"
                    style="width: 100%; display: flex; align-items: center; justify-content: start; height: 100%;">
                    <svg xmlns="http://www.w3.org/2000/svg" class="me-3" width="25" height="25"
                        fill="currentColor" class="bi bi-journal-check" viewBox="0 zzz0 16 16">
                        <path fill-rule="evenodd"
                            d="M10.854 6.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 8.793l2.646-2.647a.5.5 0 0 1 .708 0" />
                        <path
                            d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2" />
                        <path
                            d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1z" />
                    </svg>
                    Peminjaman
                </a>
            </li>
        </ul>
    </div>
</nav>
