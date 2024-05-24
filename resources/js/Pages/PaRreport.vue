<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import { computed } from 'vue';
import { ref } from 'vue';
import { Head, Link, router } from '@inertiajs/vue3';
import ApplicationMark from '@/Components/ApplicationMark.vue';
import Banner from '@/Components/Banner.vue';
import Dropdown from '@/Components/Dropdown.vue';
import DropdownLink from '@/Components/DropdownLink.vue';
import NavLink from '@/Components/NavLink.vue';
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';



const showingNavigationDropdown = ref(false);

const switchToTeam = (team) => {
    router.put(route('current-team.update'), {
        team_id: team.id,
    }, {
        preserveState: false,
    });
};

const props = defineProps({
    groupedUsers: {
        type: Array,
        required: true,
    },
    uters: {
        type: Array,
        required: true,
    }
});

const filteredUters = computed(() => {
    return (user) => {
        // Use `props.groupedUsers` instead of `groupedUsers`
        if (props.groupedUsers.length === 1) {
            // Filter `uters` based on email only (if only one group exists)
            return props.uters.filter(uter => uter.email === user.email);
        } else {
            // Filter `uters` based on email and name (if more than one group exists)
            const name = `${user.firstName} ${user.middleName} ${user.lastName}`;
            return props.uters.filter(uter => uter.email === user.email &&
                                         uter.firstName === user.firstName &&
                                         uter.middleName === user.middleName &&
                                         uter.lastName === user.lastName);
        }
    };
});

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
                <template v-for="(group, groupKey) in groupedUsers" :key="groupKey">
                    <!-- Render sections for each group -->
                    <div class="group-container">
                        <table>
                <tr v-for="user in group" :key="user.id">
                   
                    
                    <th><img src="homes/img/logo/logo.png" class="h-20"></th>
                    <th>GRACE SCHOOLS KIGAMBONI.<br> Registration No. EM.17031 Kigamboni-Mjimwema Road.</th>
                    <th v-for="uter in uters" :key="uter.id">
                        <img :src="uter.photo" class="h-20">
                    </th>
                    
                </tr>
            </table>

                        <!-- Example: Render tables and other data presentations here -->
                        <table>
                            <tr v-for="user in group" :key="user.id">
                                <th class="grac"> ANNUAL EXAMINATION REPORT</th>
                            </tr>
                        </table><br>
                        <table>
                            <tr v-for="user in group" :key="user.id">
                                <th>Name</th>
                                <td>{{user.name}}</td>
                                <th>Sex</th>
                                <td>{{user.sex}}</td>
                            </tr>
                            <tr v-for="user in group" :key="user.id">
                                <th>Class</th>
                                <td>{{user.class}}</td>
                                <th>Stream</th>
                                <td>{{user.stream}}</td>
                            </tr>
                        </table><br>

                        <!-- Add other data presentations for the group as needed -->
                        
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
                                <!-- Iterate through each user in the group and render their data -->
                                <tr v-for="user in group" :key="user.id">
                                    <td>1</td>
                                    <td>ENGLISH</td>
                                    <td>{{ user.engscore }}</td>
                                    <td>{{ user.enggrd }}</td>
                                    <td>{{ user.engpos }}</td>
                                    <td>{{ user.classTotal }}</td>
                                    <td>{{ user.engre }}</td>
                                    <td>{{ user.engte }}</td>
                                </tr>
                                <tr v-for="user in group" :key="user.id">
                                    <td>2</td>
                                    <td>KISWAHILI</td>
                                    <td>{{ user.kiswscore }}</td>
                                    <td>{{ user.kiswgrd }}</td>
                                    <td>{{ user.kiswpos }}</td>
                                    <td>{{ user.classTotal }}</td>
                                    <td>{{ user.kiswre }}</td>
                                    <td>{{ user.kiswte }}</td>
                                </tr>
                                <tr v-for="user in group" :key="user.id">
                                   <td>3</td>
                                   <td>Civics Moral</td>
                                   <td>{{ user.cmscore }}</td>
                                   <td>{{ user.cmgrd }}</td>
                                   <td>{{ user.cmpos }}</td>
                                   <td>{{ user.classTotal}}</td> 
                                   <td>{{ user.cmre }}</td>
                                   <td>{{ user.cmete }}</td>
           
                              </tr>
                              
                              <tr v-for="user in group" :key="user.id">
                               <td>4</td>
                               <td>Social Studies</td>
                               <td>{{ user.sstscore }}</td>
                               <td>{{ user.sstgrd }}</td>
                               <td>{{ user.sstpos }}</td>
                               <td>{{ user.classTotal}}</td> 
                               <td>{{ user.sstre }}</td>
                               <td>{{ user.sstte }}</td>
                            </tr>
                            <tr v-for="user in group" :key="user.id">
                               <td>5</td>
                               <td>Science Techn</td>
                               <td>{{ user.sciescore }}</td>
                               <td>{{ user.sciegrd }}</td>
                               <td>{{ user.sciepos }}</td>
                               <td>{{ user.classTotal}}</td> 
                               <td>{{ user.sciere }}</td>
                               <td>{{ user.sciete }}</td>
           
                           </tr>
                           <tr v-for="user in group" :key="user.id">
                                <td>6</td>
                                <td>Mathematics</td>
                                <td>{{ user.mathscore }}</td>
                                <td>{{ user.mathgrd }}</td>
                                <td>{{ user.mathpos }}</td>
                                <td>{{ user.classTotal}}</td> 
                                <td>{{ user.mathre }}</td>
                                <td>{{ user.mathte }}</td>
                            </tr>
                        
                                <!-- Repeat for other subjects and data presentations -->
                            </tbody>
                        </table><br><br>
                        <table>
                            <tr v-for="user in group" :key="user.id">
                                <th>TOTAL MARKS: {{ user.total }}</th>
                                <th>AVERAGE: {{ user.average }}</th>
                                <th>GRADE: {{ user.grade }}</th>
                                <th>REMARK: {{ user.remarks}}</th>
                                <th>POSITION: {{ user.position }} </th>
                                <th>OUT OF: {{ user.classTotal }} students</th>
                            </tr>
                        </table>
                        <br><br>




                        <!-- Render other data sections for the group as needed -->
                       

                     
                    </div>

                    <!-- Optional separator row between groups -->
                    <div v-if="groupKey < Object.keys(groupedUsers).length - 1">
                        <div style="height: 20px;"></div> <!-- Optional separator row -->
                    </div>
                </template>
            </div>
        </body>
    </AppLayout>
</template>




<style>
/* Add this CSS to your HTML file within a <style> block */


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
        .table-container th, .table-container td {
        font-size: 12px; /* Smaller font size */
        padding: 6px; /* Smaller padding */
        }
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

