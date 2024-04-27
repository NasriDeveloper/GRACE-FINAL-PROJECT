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

defineProps(["users"]);

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




 
<body>
    <!--== MAIN CONTAINER ==-->
    <nav class="bg-red-700 text-white p-4 fixed top-0 w-full z-10">
        <div class="max-w-screen-xl mx-auto flex justify-between items-center">
            <a href="#" class="text-2xl font-semibold" style="padding-bottom: 50px;">
                <img src="homes/img/logo/logo.png" class="h-8" alt="Flowbite Logo" />
                Graceschools
            </a>
            <div class="flex items-center space-x-4">
                <form @submit.prevent="logout">
                    <DropdownLink as="button">
                        <a class='waves-effect dropdown-button top-user-pro' data-activates='top-menu'>LOGOUT<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                    </DropdownLink>
                </form>
            </div>
        </div>
    </nav><br><br><br><br><br><br><br><br>
    
    <div class="table-container">
  <table>
    <tr>
        <th><img src="homes/img/logo/logo.png" class="h-20"></th>
        <th> GRACE SCHOOLS KIGAMBONI.<br> Registration No. EM.17031 Kigamboni-Mjimwema Road.</th>
        <!-- Display the image in the PDF -->
        <th><img src="homes/img/logo/logo.png" class="h-20">
        </th>

    </tr>
  </table><br>


  <table>
    <tr v-for="user in users" :key="user.id">
        <th class="grac"> ANNUAL EXAMINATION REPORT {{ user.dop }}</th>
    </tr>
  </table><br>
  <table>
        <tr v-for="user in users" :key="user.id">
            <th>Name</th>
            <td>{{user.NAME}}</td>
            <th>Sex</th>
            <td>{{user.SEX}}</td>
        </tr>
        <tr v-for="user in users" :key="user.id">
            <th>Class</th>
            <td>{{user.CLASS}}</td>
            <th>Stream</th>
            <td>{{user.STREAM}}</td>
        </tr>
     
    </table><br>

    <table>
    <thead>
        <tr>
            <th>S/N</th>
            <th>Subject</th>
            <th>Score</th>
            <th>Grade</th>
            <th>Rank</th>
            <th>Out of</th>
            <th>Remarks</th>
            <th>Subject's Teacher</th>
        </tr>
    </thead>
    <tbody>
        <!-- Loop over subjects and display data -->
        <tr v-for="user in users" :key="user.id">
            <td>1</td>
            <td>ENGLISH</td>
            <td>{{ user.ENGSCORE }}</td>
            <td>{{ user.ENGGRD }} </td>
            <td>{{ user.ENGPOS }}</td>
            <td>{{ users.length}}</td> 
            <td>{{ user.ENGRE }} </td>
            <td>{{ user.ENGTE }} </td>          
            
           
        </tr>
        <tr v-for="user in users" :key="user.id">
            <td>2</td>
            <td>KISWAHILI</td>
            <td>{{ user.KISWSCORE }}</td>
            <td>{{ user.KISWGRD }}</td>
            <td>{{ user.KISWPOS }}</td>
            <td>{{ users.length }}</td>
            <td>{{ user.KISWRE }}</td>
            <td>{{ user.KISWTE }}</td>

     
           
        </tr>
        <tr v-for="user in users" :key="user.id">
            <td>3</td>
            <td>Civics Moral</td>
            <td>{{ user.CMSCORE }}</td>
            <td>{{ user.CMGRD }}</td>
            <td>{{ user.CMPOS }}</td>
            <td>{{ users.length }}</td>
            <td>{{ user.CMRE }}</td>
            <td>{{ user.CMETE }}</td>
           

           
        </tr>
        <tr v-for="user in users" :key="user.id">
            <td>4</td>
            <td>Social Studies</td>
            <td>{{ user.SSTSCORE }}</td>
            <td>{{ user.SSTGRD }}</td>
            <td>{{ user.SSTPOS }}</td>
            <td>{{ users.length }}</td>
            <td>{{ user.SSTRE }}</td>
            <td>{{ user.SSTTE }}</td>
           

           
        </tr>
        <tr v-for="user in users" :key="user.id">
            <td>5</td>
            <td>Science Techn</td>
            <td>{{ user.SCIESCORE }}</td>
            <td>{{ user.SCIEGRD }}</td>
            <td>{{ user.SCIEPOS }}</td>
            <td>{{ users.length }}</td>
            <td>{{ user.SCIERE }}</td>
            <td>{{ user.SCIETE }}</td>
           


           
        </tr>
        <tr v-for="user in users" :key="user.id">
            <td>6</td>
            <td>Mathematics</td>
            <td>{{ user.MATHSCORE }}</td>
            <td>{{ user.MATHGRD }}</td>
            <td>{{ user.MATHPOS }}</td>
            <td>{{ users.length }}</td>
            <td>{{ user.MATHRE }}</td>
            <td>{{ user.MATHTE }}</td>
          


           
        </tr>
    </tbody>
</table>

<table>
    <tr v-for="user in users" :key="user.id">
        <th>TOTAL MARKS: {{ user.TOTAL }}</th>
        <th>AVERAGE:  {{ user.AVERAGE }}</th>
        <th>GRADE: {{ user.GRADE }}</th>
        <th>REMARK: {{ user.REMARKS}}</th>
        <th> POSITION: {{ user.POSITION }} </th>
        <th>OUTOF: {{ users.length }}students</th>
    </tr>
</table><br><br>

<table>
        <th class="grace">CHARACTER ASSESMENT.</th>
</table>

<table>
    <thead>
        <tr>
        <th>DOMAIN</th>
        <th>Sport</th>
        <th>Cooperation</th>
        <th>Discipline</th>
        <th>Cleanliness</th>
        <th>Hardworking</th>
    </tr>
    </thead>
    <tbody>
        <tr v-for="user in users" :key="user.id">
            <td>REMARK</td>
            <td>{{ user.sports }}</td>
            <td>{{ user.Cooperation }}</td>
            <td>{{ user.Discipline }}</td>
            <td>{{ user.Cleanliness }}</td>
            <td>{{ user.Hardworking }}</td>
        </tr>
    </tbody>
    
</table><br>

<table>
    <thead>
        <th class="grace">PRINCIPAL'S COMMENT</th>
    </thead>
    <tbody>
        <tr v-for="user in users" :key="user.id">
            <td>{{ user.principalcoment }}</td>
             
        </tr>
        <tr v-for="user in users" :key="user.id">
            <td>Principal's Name: {{ user.principalname }}  Phone No: {{ user.principalphone }}</td>
        </tr>
    </tbody>
</table><br><br><br>

<table>
    <thead>
        <th class="grace">CLASS TEACHER'S COMMENT</th>
    </thead>
    <tbody>
        <tr v-for="user in users" :key="user.id">
            <td>{{ user.clasteachcoment }}</td>
             
        </tr>
        <tr v-for="user in users" :key="user.id">
            <td>Principal's Name: {{ user.clasteachname }}  Phone No: {{ user.clasteachphone }}</td>
        </tr>
    </tbody>
</table><br><br>

<table>
    <thead>
    <tr>
        <th>CLASS TEACHER'S SIGN</th>
        <th>PRINCIPAL'S SIGN</th>
    </tr>
    </thead>
    <tbody>
        <tr v-for="user in users" :key="user.id">
            <td><img src="homes/img/logo/logo.png" class="h-20"></td>
            <td><img src="homes/img/logo/logo.png" class="h-20"></td>
        </tr>
       
    </tbody>
   
</table>

<table>
    <tr v-for="user in users" :key="user.id">
        <th>DATE OF REPORTING {{ user.dop }}</th>
    </tr>
</table>

<table>
    <thead>
    <tr>
        <th>STAMP</th>
    </tr>
    </thead>
   <tbody>
    <tr v-for="user in users" :key="user.id">
        <td><img src="homes/img/logo/logo.png" class="h-20"></td>
    </tr>
   </tbody>
   
</table>
</div>
   
  


    <!--== BODY CONTAINER ==-->
    
    <!-- Import jQuery before materialize.js -->
  
   
</body>


</AppLayout>

</template>




<style>
    .table-container {
        width: 100%; /* Enable horizontal scrolling on small screens */
        overflow-x: auto; /* Add horizontal scroll bar if needed */
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    td,
    th {
        text-align: center;
        padding: 8px;
        border: 1px solid black;
    }

    .grace {
        background-color: gray;
    }

    .grac {
        background-color: yellow;
    }

    .card-title {
        text-align: center;
        padding-left: 400px;
    }

    img {
        display: block; /* Make sure the image is a block element */
        margin: auto; /* Center the image horizontally */
    }

    /* Responsive CSS */
    @media only screen and (max-width: 768px) {
        .table-container {
            overflow-x: auto;
        }

        table {
            width: 100%;
        }

        td,
        th {
            padding: 4px;
            font-size: 0.8em; /* Adjust font size for smaller screens */
        }
    }
</style>

