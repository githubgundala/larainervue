<template>
  <div class="container">
    <!-- Outer Row -->
    <div class="row justify-content-center">
      <div class="col-xl-6 col-lg-6 col-md-6">
        <div class="my-5 border-0 shadow-lg card o-hidden">
          <div class="p-0 card-body">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <slot />
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
