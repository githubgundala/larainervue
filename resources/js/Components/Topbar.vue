<template>
  <nav
    class="mb-4 bg-white shadow navbar navbar-expand navbar-light topbar static-top"
  >
    <!-- Sidebar Toggle (Topbar) -->
    <button
      id="sidebarToggleTop"
      @click="toggleSidebar"
      class="mr-3 btn btn-link d-md-none rounded-circle"
    >
      <i class="fa fa-bars"></i>
    </button>
    <!-- Topbar Navbar -->
    <ul class="ml-auto navbar-nav">
      <!-- Nav Item - User Information -->
      <li class="nav-item dropdown no-arrow">
        <a
          class="nav-link dropdown-toggle"
          href="#"
          id="userDropdown"
          role="button"
          data-toggle="dropdown"
          aria-haspopup="true"
          aria-expanded="false"
        >
          <span class="mr-2 text-gray-600 d-none d-lg-inline small"
            >Douglas McGee</span
          >
          <img
            class="img-profile rounded-circle"
            src="img/undraw_profile.svg"
          />
        </a>
        <!-- Dropdown - User Information -->
        <div
          class="shadow dropdown-menu dropdown-menu-right animated--grow-in"
          aria-labelledby="userDropdown"
        >
          <a class="dropdown-item" href="#">
            <i class="mr-2 text-gray-400 fas fa-user fa-sm fa-fw"></i>
            Profile
          </a>
          <div class="dropdown-divider"></div>
          <a
            class="dropdown-item"
            href="#"
            data-toggle="modal"
            data-target="#logoutModal"
          >
            <i class="mr-2 text-gray-400 fas fa-sign-out-alt fa-sm fa-fw"></i>
            Logout
          </a>
        </div>
      </li>
    </ul>
  </nav>
</template>

<script>
export default {
  methods: {
    // Emit event to the parent to toggle the sidebar
    toggleSidebar() {
      this.$emit('toggle-sidebar');
    }
  }
};
</script>
