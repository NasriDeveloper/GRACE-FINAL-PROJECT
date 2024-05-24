<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';

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

  <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banking website</title>
    <link rel="stylesheet" href="homes/css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>




<body class="bg-color-primary text-color-white tracking-wider" >
    <!--== MAIN CONTRAINER ==-->
    <nav class="bg-red-700 text-white p-4 fixed top-0 w-full z-10">
  <div class="max-w-screen-xl mx-auto flex justify-between items-center">
    <a href="#" class="text-2xl font-semibold" style="padding-bottom: 50px;">
      <img src="homes/img/logo/logo.png" class="h-8" alt="Flowbite Logo" />
      Graceschools
    </a>
    <div class="flex items-center space-x-4">
        <form @submit.prevent="logout">
                <DropdownLink as="button">
                <a class='waves-effect dropdown-button top-user-pro' data-activates='top-menu'>LOGOUT<i class="fa fa-angle-down" aria-hidden="true"></i>
                </a>
                </DropdownLink>
         </form>
    </div>
  </div>
</nav><br><br><br><br><br><br><br>

            

<div class="bg-gray-700 text-white p-4">
  <p class="text-center text-white">Welcome to the Grace Schools system!</p>
  <div class="text-center mt-4">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline-block text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
    </svg>
    <p class="inline-block ml-2">WHHOPS!! THIS IS NOT YOUR CHILD CLASS OR THE REPORTS ARE NOT UPLOADED YET.</p>
  </div>
</div>

<div class="text-center">
  <img 
    src="homes/img/logo/box.png" 
    class="mx-auto" 
    alt="Flowbite Logo"
    style="height: 300px; width: 300px;" 
  />
</div>









    <!--== BODY CONTNAINER ==-->
    

    <!--Import jQuery before materialize.js-->
  
   
</body>

</html>



</AppLayout>

</template>
