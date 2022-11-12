<template>

  <Head title="Skills Index" />

  <AuthenticatedLayout>
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Compétences
      </h2>
    </template>

    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="flex justify-end m-2 p-2">
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
                    <Link class="pr-2 hover:underline">Modifier</Link>
                    <span> | </span>
                    <Link class="pl-2 hover:underline">Supprimer</Link>
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
})

</script>