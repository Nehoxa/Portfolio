<script setup>
defineProps({
  skills: Object
});
</script>

<template>
  <section class="bg-light-tail-100 dark:bg-dark-navy-500 py-12">
    <div class="container mx-auto">
      <div class="md:grid-flow-col flex justify-between">
        <div class="flex items-center justify-center" v-for="skill in skills.data" :key="skill.id">
          <img :src="skill.image" :alt="skill.name" class="lg:h-20" />
        </div>
      </div>
    </div>
  </section>
</template>

