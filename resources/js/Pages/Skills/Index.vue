<template>

  <Head title="Skills Index" />

  <AuthenticatedLayout>
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Compétences
      </h2>
    </template>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="py-12">
        <div v-if="$page.props.flash.message"
          :class="$page.props.flash.class"
          role="alert">
          <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
              d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
              clip-rule="evenodd"></path>
          </svg>
          <span class="sr-only">Info</span>
          <div>
            <span class="font-medium">{{ $page.props.flash.message }}</span>
          </div>
        </div>

        <div class="flex justify-end my-2 py-2">
          <Link :href="route('skills.create')"
            class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 text-white rounded-md">Nouvelle Compétence</Link>
        </div>


        <div class="overflow-x-auto relative rounded-md">
          <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
              <tr>
                <th scope="col" class="py-3 px-6">
                  ID
                </th>
                <th scope="col" class="py-3 px-6">
                  Nom
                </th>
                <th scope="col" class="py-3 px-6">
                  Image
                </th>
                <th scope="col" class="py-3 px-6">
                </th>
              </tr>
            </thead>
            <tbody v-for="skill in skills.data" :key="skill.id">
              <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                  {{ skill.id }}
                </th>
                <td class="py-4 px-6">
                  {{ skill.name }}
                </td>
                <td class="py-4 px-6">
                  <img class="h-12 w-12" :src="skill.image" />
                </td>
                <td class="py-4 px-6">
                  <div class="flex justify-end">
                    <Link :href="route('skills.edit', skill.id)" class="pr-2 hover:underline hover:text-blue-500">
                    Modifier
                    </Link>
                    <span> | </span>
                    <Link :href="route('skills.destroy', skill.id)" class="pl-2 hover:underline hover:text-red-500"
                      method="delete" as="button" type="button">
                    Supprimer
                    </Link>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>

      </div>
    </div>
  </AuthenticatedLayout>


</template>

<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';

defineProps({
  skills: Object,
});

</script>