<script setup>

</script>

<template>
  <section id="home"
    class="lg-[85vh] flex items-center bg-light-primary dark:bg-dark-primary lg:py-0 overflow-hidden">
    <div class="container mx-auto h-full pt-20">
      <div class="flex flex-col md:flex-row items-center h-full py-8">
        <div class="flex-1 flex flex-col items-center lg:items-start">
          <p class="text-lg text-accent text-md mb-[22px]">Hey, I'm Julien ! 👋</p>
          <h1 class="
              text-4xl
              leading-[44px]
              md:text-5xl md:leading-tight
              lg:text-7xl lg:leading-[1.2]
              font-bold
              md:tracking-[-2px]
            ">
            Créer & Design <br />
            Web Application.
          </h1>
          <p class="
              pt-4
              pb-8
              md:pt-6 md:pb-12
              max-w-[480px]
              text-lg text-center
              lg:text-left
            ">
            Jeune développeur web autodidact.
          </p>
          <a 
          type="button"
          target="_blank"
          class="
              btn btn-md
              text-dark-primary
              dark:text-light-primary
              bg-accent
              hover:bg-light-secondary hover:text-light-tail-500
              dark:hover:bg-dark-secondary dark:hover:text-dark-navy-100
              md:btn-lg
              hover:border
              border-dark-primary
              dark:border-light-primary
              rounded-md
              transition-all
            "
            href="https://www.linkedin.com/in/julien-loire-2547b718b/"
            >
            Travailler avec moi
          </a>
        </div>
        <div class="flex flex-1 justify-end items-center h-full mt-8 md:mt-0">
          <img class="rounded-lg" src="/storage/img/Hero.jpg" alt="Hero">
        </div>
      </div>
    </div>
  </section>
</template>
