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




  <body class="hold-transition sidebar-mini">
<div class="wrapper">
<AdNavHeader />


<AdSidebar />


<div class="content-wrapper">

  <div class="card card-dark">
    <div class="card-header">
        <h3 class="card-title"><b>REPORT UPLOAD</b></h3>
    </div>
    <div v-if="successMessage" class="alert alert-success">
        {{ successMessage }}
        <button @click="closeSuccessMessage" class="close" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>

    <form @submit.prevent="submitForm">
                        <div class="card-body">
                            
                           <div class="form-group">
                         <label for="photo3">Upload Excel File Here</label>
                           <input
                               type="file"
                               id="excel"
                               name="excel"
                               class="form-control-file"
                               ref="excel"
                           />
                         </div>

                        

                        <div class="row">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary full-width-btn">Submit</button>
                            </div>
                        </div>
                        </div>
                    </form>

  </div>
    
  
</div>
</div>

   
   
</body>


</AppLayout>

</template>


<script>
export default {
  data() {
    return {
      formData: {
      
       excel: null,
   
      },
      successMessage: '',
    };
  },
  methods: {
    async submitForm() {
    try {
        // Ensure a file is selected before proceeding
        if (!this.$refs.excel.files.length) {
            console.error("No file selected.");
            return;
        }

        let formData = new FormData();
        
        // Append the file data to FormData
        formData.append('excel', this.$refs.excel.files[0]);
        
        // Log the form data (optional)
        console.log('FormData:', formData);

        // Make the POST request with the form data
        await this.$inertia.post(route('Submitexcel'), formData);

        // Set the success message
        this.successMessage = 'Form submitted successfully!';
    } catch (error) {
        // Handle errors gracefully
        console.error('Error during form submission:', error);
        // Optionally, display an error message to the user
    }
},

  closeSuccessMessage() {
      this.successMessage = ''; // Clear the success message when the close button is clicked
    },
},
};
</script>

