<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
</script>

<template>
    <div>
        <div class="p-6 sm:px-20 bg-white border-b border-gray-200">

        </div>

        <div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2 pb-3" >
            <div v-if="$page.props.user.permissions.includes('View Roles')" class="pt-2">
                <!-- <b-button :type="type">View Roles</b-button> -->
                <button :type="type" class="inline-flex items-center px-4 py-2 pt-4 bg-blue-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">
                <slot /> View Roles
                </button>
            </div>


            <div v-if="$page.props.user.permissions.includes('Create Roles')" class="pt-2">
                <button :type="type" class="inline-flex items-center px-4 py-2 pt-4 bg-gray-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">
                <slot /> Create Roles
                </button>
            </div>

            <div v-if="$page.props.user.permissions.includes('Edit Roles')" class="pt-2">
                <button :type="type" class="inline-flex items-center px-4 py-2 pt-4 bg-green-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">
                <slot /> Edit Roles
                </button>

            </div>

            <div v-if="$page.props.user.permissions.includes('Delete Roles')" class="pt-2 pb-5">
                <button :type="type" class="inline-flex items-center px-4 py-2 pt-4 bg-red-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">
                <slot /> Delete Roles
                </button>
            </div>
            
            
            <div v-if="$page.props.user.permissions.includes('View Products')" class="pt-2">
                <button :type="type" class="inline-flex items-center px-4 py-2 bg-blue-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">
                <slot /> View Products
                </button>
            </div>

            <div v-if="$page.props.user.permissions.includes('Create Products')" class="pt-2">
                <button :type="type" class="inline-flex items-center px-4 py-2 bg-gray-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">
                <slot /> Create Products
                </button>
            </div>

            <div v-if="$page.props.user.permissions.includes('Edit Products')" class="pt-2">
                <button :type="type" class="inline-flex items-center px-4 py-2 bg-green-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">
                <slot /> Edit Products
                </button>

            </div>

            <div v-if="$page.props.user.permissions.includes('Delete Products')" class="pt-2">
                <button :type="type" class="inline-flex items-center px-4 py-2 bg-red-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">
                <slot /> Delete Products
                </button>
            </div>
        </div>
    </div>
</template>
