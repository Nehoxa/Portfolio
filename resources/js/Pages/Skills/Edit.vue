<template>

  <Head title="Editer Compétence" />

  <AuthenticatedLayout>
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Editer Compétence
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

          <div class="mt-4">
            <InputLabel for="image" value="Image" />
            <TextInput id="image" type="file"
              class="block w-full text-sm text-gray-900 bg-gray-50 rounded border border-gray-300 cursor-pointer focus:outline-none mt-2"
              @input="form.image = $event.target.files[0]" />
            <InputError class="mt-2" :message="$page.props.errors.image" />
          </div>

          <div class="flex items-center justify-end mt-4">
            <PrimaryButton class="ml-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
              Enregistrer
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
  skill: Object
});

const form = useForm({
  name: props.skill?.name,
  image: null,
})

const submit = () => {
  Inertia.post(`/skills/${props.skill.id}`, {
    _method: 'put',
    name: form.name,
    image: form.image,
  });
}

</script>