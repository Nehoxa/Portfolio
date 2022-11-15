<template>

  <Head title="Nouvelle Compétence" />

  <AuthenticatedLayout>
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Editer projet
      </h2>
    </template>

    <div class="py-12">
      <div class="max-w-lg mx-auto sm:px-6 lg:px-8">
        <form @submit.prevent="submit">
          <div>
            <InputLabel for="name" value="Name" />
            <TextInput id="name" type="text" class="mt-1 block w-full" v-model="form.name" autofocus
              autocomplete="name" />
            <InputError class="mt-2" :message="$page.props.errors.name" />
          </div>

          <div class="mt-2">
            <InputLabel for="project_url" value="Url du projet" />
            <TextInput id="project_url" type="text" class="mt-1 block w-full" v-model="form.project_url"
              autocomplete="project_url" />
            <InputError class="mt-2" :message="$page.props.errors.project_url" />
          </div>

          <div class="mt-2">
            <InputLabel for="image" value="Image" />
            <TextInput id="image" type="file"
              class="block w-full text-sm text-gray-900 bg-gray-50 rounded-md border border-gray-300 cursor-pointer focus:outline-none"
              @input="form.image = $event.target.files[0]" />
            <InputError class="mt-2" :message="$page.props.errors.image" />
          </div>

          <div class="mt-2">
            <InputLabel for="skills" value="Compétence utilisé" />
            <select v-model="form.skill_id" id="skill_id" name="skill_id"
              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
              <option v-for="skill in skills" :key="skill.id" :value="skill.id">{{ skill.name }}</option>
            </select>
            <InputError class="mt-2" :message="$page.props.errors.skill_id" />
          </div>

          <div class="flex items-center justify-end mt-4">
            <PrimaryButton class="ml-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
              Editer
            </PrimaryButton>
          </div>
        </form>
      </div>
    </div>
  </AuthenticatedLayout>


</template>

<script setup>
import { Head, useForm } from '@inertiajs/inertia-vue3';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import TextInput from '@/Components/TextInput.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import { Inertia } from '@inertiajs/inertia';

const props = defineProps({
  project: Object,
  skills: Object,
});

const form = useForm({
  name: props.project.name,
  image: null,
  skill_id: props.project.skill_id,
  project_url: props.project.project_url,
})

const submit = () => {
  Inertia.post(`/projects/${props.project.id}`, {
  _method: 'put',
  name: form.name,
  image: form.image,
  skill_id: form.skill_id,
  project_url: form.project_url,
})
}

</script>