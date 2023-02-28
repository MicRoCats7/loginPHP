<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3 sidebar-sticky">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/book/all') ? 'active' :''}}" href="/dashboard/book/all">
            <span data-feather="file" class="align-text-bottom"></span>
            Book
          </a>
        </li>
      </ul>
    </div>
  </nav>