<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import AdNavHeader from "./AdNavHeader.vue";
import AdSidebar from "./AdSidebar.vue";
import { ref } from 'vue';
import { Head, Link, router } from '@inertiajs/vue3';
import ApplicationMark from '@/Components/ApplicationMark.vue';
import Banner from '@/Components/Banner.vue';
import Dropdown from '@/Components/Dropdown.vue';
import DropdownLink from '@/Components/DropdownLink.vue';
import NavLink from '@/Components/NavLink.vue';
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';

defineProps({
  title: String,
});

const showingNavigationDropdown = ref(false);

const switchToTeam = (team) => {
  router.put(route('current-team.update'), {
    team_id: team.id,
  }, {
    preserveState: false,
  });
};

const logout = () => {
  router.post(route('logout'));
};




</script>

<template>
  <AppLayout title="Dash">
    <body class="hold-transition sidebar-mini">
<div class="wrapper">
<AdNavHeader />


<AdSidebar />


<div class="content-wrapper">
  <div class="card card-dark">
    <div class="card-header border-0">
        <h3 class="card-title"><b>THIS IS NOT YOUR CLASS.</b></h3>
        <div class="card-tools">
            <a href="#" class="btn btn-tool btn-sm">
                <i class="fas fa-download"></i>
            </a>
            <a href="#" class="btn btn-tool btn-sm">
                <i class="fas fa-bars"></i>
            </a>
        </div>
    </div>
  </div>
  
</div>
</div>

   
   
</body>
  </AppLayout>
</template>



<style>

.card-title{
  text-align: center;
  padding-left: 400px;
}

</style>


