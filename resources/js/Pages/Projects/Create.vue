<template>

  <Head title="Nouvelle Compétence" />

  <AuthenticatedLayout>
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Nouveau Projet
      </h2>
    </template>

    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <form @submit.prevent="submit">
        </form>
      </div>
    </div>
  </AuthenticatedLayout>


</template>

<script setup>
import { Head, useForm  } from '@inertiajs/inertia-vue3';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';

const form = useForm({
      name: null,
      avatar: null,
    })

    function submit() {
      form.post('/users')
    }

return { form, submit }

</script>