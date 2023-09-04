<script setup>
</script>

<template>
  <section id="about" class="section bg-light-primary dark:bg-dark-primary">
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
      <div class="flex flex-col xl:flex-row gap-24">
        <img class="object-cover h-full w-[566px] md:mx-auto lg:mx-0 rounded-2xl"
          src="/storage/img/about.jpg" alt="about">
        <div class="flex flex-col items-center text-center lg:items-start lg:text-left">
          <div class="flex flex-col pb-6">
            <h2 class="text-3xl lg:text-4xl font-medium lg:font-extrabold mb-3">
              À Propos de moi
            </h2>
            <p class="mb-4 text-accent">Backend Web developer</p>
            <hr class="mb-4 opacity-90 dark:opacity-5">
            <p>
              Passionné de code, je suis un développeur autodidacte. <br>
              Je recherche activement mon premier poste en tant que développeur web, prêt à plonger dans l'univers du développement backend tout en étant tout à fait à l'aise avec le frontend. <br>
              Mon parcours autodidacte m'a armé d'une polyvalence et d'une détermination sans faille pour relever les défis technologiques. <br>
              Découvrez mon portfolio et laissez-moi vous montrer comment je peux apporter une valeur ajoutée à votre équipe.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>