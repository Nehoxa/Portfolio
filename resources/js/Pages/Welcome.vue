<script setup>
import Frontend from '@/Layouts/Frontend.vue';
import { Head } from '@inertiajs/inertia-vue3';
import Hero from '@/Components/Frontend/Hero.vue';
import Promote from '@/Components/Frontend/Promote.vue';
import About from '@/Components/Frontend/About.vue';
import Skills from '@/Components/Frontend/Skills.vue';
import Portfolio from '@/Components/Frontend/Portfolio.vue';
import Services from '@/Components/Frontend/Services.vue';
import ContactMe from '@/Components/Frontend/ContactMe.vue';

defineProps({
    skills: Object,
    projects: Object,
});
</script>

<template>

    <Head title="Welcome to portfolio" />

    <Frontend>
        <!-- Hero primary -->
        <Hero />
        <!-- Promote tail-100-->
        <Promote />
        <!-- About seconday -->
        <About />
        <!-- Skill tail-100 -->
        <Skills :skills="skills" />
        <!-- Portfolio primary -->
        <Portfolio :projects="projects" :skills="skills" />
        <!-- Services secondary -->
        <Services />
        <!-- Contact primary -->
        <ContactMe />
    </Frontend>

</template>
