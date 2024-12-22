<template>

    <div class="col-lg-12">
      <div class="p-5">
        <div class="text-center">
          <h1 class="mb-4 text-gray-900 h4">Welcome To Inventory Management System</h1>
        </div>
        <form class="user">
          <div class="form-group">
            <input
              type="email"
              class="form-control form-control-user"
              id="exampleInputEmail"
              aria-describedby="emailHelp"
              placeholder="Enter Email Address..."
            />
          </div>
          <div class="form-group">
            <input
              type="password"
              class="form-control form-control-user"
              id="exampleInputPassword"
              placeholder="Password"
            />
          </div>
          <div class="form-group">
            <div class="custom-control custom-checkbox small">
              <input
                type="checkbox"
                class="custom-control-input"
                id="customCheck"
              />
              <label class="custom-control-label" for="customCheck"
                >Remember Me</label
              >
            </div>
          </div>
          <Link href="/dashboard" class="btn btn-primary btn-user btn-block" as="button">Login</Link>
        </form>
        <hr />
        <div class="text-center">
          <a class="small" href="forgot-password.html">Forgot Password?</a>
        </div>
      </div>
    </div>

</template>

<script setup>
import Layout from '@/Layouts/AuthLayout.vue';
import { Link } from '@inertiajs/vue3'

defineOptions({ layout: Layout });
</script>

<script>
import { Link } from '@inertiajs/vue3'

export default {
  components: {
    Link,
  },
}
</script>
