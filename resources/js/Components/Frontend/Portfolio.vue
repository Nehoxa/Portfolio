
<script setup>
import Projects from '@/Components/Frontend/Projects.vue';

defineProps({
  projects: Object,
  skills: Object,
});
</script>
<template>
  <section id="portfolio" class="section bg-light-primary dark:bg-dark-primary min-h-[1400px]">
    <div class="container mx-auto"
    v-motion 
      :initial="{
        opacity: 0,
        y: 100,
      }" 
      :visibleOnce="{
        opacity: 1,
        y: 0,
      }"
    >
      <div class="flex flex-col items-center text-center">
        <h2 class="section-title">Mes derniers projets</h2>
      </div>
    </div>
    <Projects :projects="projects" :skills="skills" />
  </section>
</template>
