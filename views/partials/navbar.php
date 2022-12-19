<nav class="navbar bg-blue-50 shadow-lg py-3">
  <div class="w-full 2xl:container">
    <div class="flex-1">
      <a class="btn btn-ghost normal-case text-xl bg-blue-200" href="/">phpDemo</a>
    </div>
    <div class="flex-none">
      <div class="dropdown dropdown-end">
        <label tabindex="0" class="btn btn-ghost btn-circle avatar bg-blue-200">
          <div class="w-6 rounded-full flex items-center">
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
            </svg>
          </div>
        </label>
        <ul tabindex="0" class="menu menu-compact dropdown-content mt-3 p-2 shadow bg-base-100 rounded-box w-60 md:w-80">
          <li><a class="<?= urlIs("/notes") ? "active" : "" ?>" href="/notes">Notes</a></li>
          <li><a class="<?= urlIs("/about") ? "active" : "" ?>" href="/about">About us</a></li>
          <li><a class="<?= urlIs("/contact") ? "active" : "" ?>" href="/contact">Contact us</a></li>
        </ul>
      </div>
    </div>
  </div>
</nav>
