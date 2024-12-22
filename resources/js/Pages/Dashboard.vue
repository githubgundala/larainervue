<template>
  <Head title="Dashboard" />
  <!-- Content Row -->
  <div class="row">
    <!-- Earnings (Monthly) Card Example -->
    <div class="mb-4 col-xl-3 col-md-6">
      <div class="py-2 shadow card border-left-primary h-100">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="mr-2 col">
              <div
                class="mb-1 text-xs font-weight-bold text-primary text-uppercase"
              >
                Earnings (Monthly)
              </div>
              <div class="mb-0 text-gray-800 h5 font-weight-bold">$40,000</div>
            </div>
            <div class="col-auto">
              <i class="text-gray-300 fas fa-calendar fa-2x"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="mb-4 col-xl-3 col-md-6">
      <div class="py-2 shadow card border-left-success h-100">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="mr-2 col">
              <div
                class="mb-1 text-xs font-weight-bold text-success text-uppercase"
              >
                Earnings (Annual)
              </div>
              <div class="mb-0 text-gray-800 h5 font-weight-bold">$215,000</div>
            </div>
            <div class="col-auto">
              <i class="text-gray-300 fas fa-dollar-sign fa-2x"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="mb-4 col-xl-3 col-md-6">
      <div class="py-2 shadow card border-left-info h-100">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="mr-2 col">
              <div
                class="mb-1 text-xs font-weight-bold text-info text-uppercase"
              >
                Tasks
              </div>
              <div class="row no-gutters align-items-center">
                <div class="col-auto">
                  <div class="mb-0 mr-3 text-gray-800 h5 font-weight-bold">
                    50%
                  </div>
                </div>
                <div class="col">
                  <div class="mr-2 progress progress-sm">
                    <div
                      class="progress-bar bg-info"
                      role="progressbar"
                      style="width: 50%"
                      aria-valuenow="50"
                      aria-valuemin="0"
                      aria-valuemax="100"
                    ></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-auto">
              <i class="text-gray-300 fas fa-clipboard-list fa-2x"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Pending Requests Card Example -->
    <div class="mb-4 col-xl-3 col-md-6">
      <div class="py-2 shadow card border-left-warning h-100">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="mr-2 col">
              <div
                class="mb-1 text-xs font-weight-bold text-warning text-uppercase"
              >
                Pending Requests
              </div>
              <div class="mb-0 text-gray-800 h5 font-weight-bold">18</div>
            </div>
            <div class="col-auto">
              <i class="text-gray-300 fas fa-comments fa-2x"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-xl-6 col-lg-6">
      <div class="mb-4 shadow card">
        <!-- Card Header - Dropdown -->
        <div
          class="flex-row py-3 card-header d-flex align-items-center justify-content-between"
        >
          <h6 class="m-0 font-weight-bold text-primary">Bar Chart</h6>
        </div>
        <!-- Card Body -->
        <div class="card-body">
          <Bar id="my-chart-id" :options="chartOptions" :data="chartData" />
        </div>
      </div>
    </div>

    <div class="col-xl-6 col-lg-6">
      <div class="mb-4 shadow card">
        <!-- Card Header - Dropdown -->
        <div
          class="flex-row py-3 card-header d-flex align-items-center justify-content-between"
        >
          <h6 class="m-0 font-weight-bold text-primary">Datatable</h6>
        </div>
        <!-- Card Body -->
        <div class="card-body">
          <DataTable :data="data" class="display">
            <thead>
              <tr>
                <th>A</th>
                <th>B</th>
              </tr>
            </thead>
          </DataTable>
        </div>
      </div>
    </div>
  </div>

  <!-- Content Row -->
</template>

<script setup>
import DataTable from 'datatables.net-vue3';
import DataTablesCore from 'datatables.net-dt';
import 'datatables.net-select-dt';
import 'datatables.net-responsive-dt';
import Layout from "@/Layouts/AppLayout.vue";
import { Bar } from "vue-chartjs";
import {
  Chart as ChartJS,
  Title,
  Tooltip,
  Legend,
  BarElement,
  CategoryScale,
  LinearScale,
} from "chart.js";

DataTable.use(DataTablesCore);

ChartJS.register(
  Title,
  Tooltip,
  Legend,
  BarElement,
  CategoryScale,
  LinearScale
);

defineOptions({
  layout: Layout,
  name: "Dashboard",
});

const data = [
  [1, 2],
  [3, 4],
];
</script>

<script>
import { Head } from "@inertiajs/vue3";
export default {
  components: {
    Head,
    Bar,
  },
  data() {
    return {
      chartData: {
        labels: ["January", "February", "March"],
        datasets: [
          {
            label: "Dataset 1",
            data: [1, 2, 3],
            borderColor: "#36A2EB",
            backgroundColor: "#9BD0F5",
          },
          {
            label: "Dataset 2",
            data: [2, 3, 4],
            borderColor: "#FF6384",
            backgroundColor: "#FFB1C1",
          },
        ],
      },
      chartOptions: {
        responsive: true,
      },
    };
  },
};
</script>
