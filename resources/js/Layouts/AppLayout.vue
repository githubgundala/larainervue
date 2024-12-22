<template>
  <div id="wrapper">
    <Sidebar ref="sidebarComponent" />
    <div id="content-wrapper" class="d-flex flex-column">
      <!-- Main Content -->
      <div id="content">
        <Topbar @toggle-sidebar="handleToggleSidebar" />

        <div class="container-fluid">
          <div
            class="mb-4 d-sm-flex align-items-center justify-content-between"
          >
            <h1 class="mb-0 text-gray-800 h3">Dashboard</h1>
          </div>
          <slot />
        </div>
      </div>

      <!-- Footer -->
      <footer class="bg-white sticky-footer">
        <div class="container my-auto">
          <div class="my-auto text-center copyright">
            <span>Copyright &copy; AGRP 2024</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->
    </div>
  </div>

  <!-- Scroll to Top Button-->
  <a class="rounded scroll-to-top" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div
    class="modal fade"
    id="logoutModal"
    tabindex="-1"
    role="dialog"
    aria-labelledby="exampleModalLabel"
    aria-hidden="true"
  >
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button
            class="close"
            type="button"
            data-dismiss="modal"
            aria-label="Close"
          >
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          Select "Logout" below if you are ready to end your current session.
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">
            Cancel
          </button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import Sidebar from "@/Components/Sidebar.vue";
import Topbar from "@/Components/Topbar.vue";

export default {
  components: {
    Sidebar,
    Topbar,
  },
  methods: {
    // Handle event emitted by Topbar and trigger Sidebar's method via ref
    handleToggleSidebar() {
      this.$refs.sidebarComponent.toggleSidebar();
    },
  },
};
</script>
