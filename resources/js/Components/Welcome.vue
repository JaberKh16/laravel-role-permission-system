<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
</script>

<template>
    <div>
        <div class="p-6 sm:px-20 bg-white border-b border-gray-200">

        </div>

        <div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2">
            <div v-if="$page.props.user.permissions.includes('View Roles')">
                <b-button type="button">View Roles</b-button>
            </div>

            <div v-if="$page.props.user.permissions.includes('Create Roles')">
                <vbutton type="button">Write Roles</vbutton>
            </div>

            <div v-if="$page.props.user.permissions.includes('Edit Roles')">
                <b-button type="button" variant="danger">Edit Roles</b-button>

            </div>

            <div v-if="$page.props.user.permissions.includes('Delete Roles')">
                <b-button type="button">Delete Roles</b-button>
            </div>
            
            <div v-if="$page.props.user.permissions.includes('View Products')">
                <b-button type="button">View Products</b-button>
            </div>

            <div v-if="$page.props.user.permissions.includes('Create Products')">
                <b-button type="button">Write Products</b-button>
            </div>

            <div v-if="$page.props.user.permissions.includes('Edit Products')">
                <b-button type="button" variant="danger">Edit Products</b-button>

            </div>

            <div v-if="$page.props.user.permissions.includes('Delete Products')">
                <b-button type="button">Delete Products</b-button>
            </div>
        </div>
    </div>
</template>
