<script setup>
</script>

<template>
  <section id="about" class="section py-8 bg-light-primary dark:bg-dark-primary">
    <div class="container mx-auto">
      <div class="flex flex-col xl:flex-row gap-24">
        <img class="object-cover h-full w-[566px] md:mx-auto lg:mx-0 rounded-2xl"
          src="http://portfolio.test/img/about.jpg" alt="about">
        <div class="flex flex-col items-center text-center lg:items-start lg:text-left">
          <div class="flex flex-col pb-6">
            <h2 class="text-3xl lg:text-4xl font-medium lg:font-extrabold mb-3">
              About Me
            </h2>
            <p class="mb-4 text-accent">Freelance backend Web developer</p>
            <hr class="mb-8 opacity-90 dark:opacity-5">
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, asperiores! Ipsum dolorem magni hic
              nulla et, omnis laboriosam neque maiores iusto nihil. Quia unde voluptate reiciendis voluptatibus!
              Dolorem, qui culpa! <br>
              <br>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi tenetur vel est aut totam laboriosam,
              eligendi soluta et fuga repellat. Quia obcaecati voluptates deleniti quisquam pariatur magni, culpa sit
              laboriosam.
            </p>
          </div>
          <a href="#contact" class="btn btn-md 
              text-dark-primary
              dark:text-light-primary
              bg-accent
              hover:bg-light-secondary hover:text-light-tail-500
              dark:hover:bg-dark-secondary dark:hover:text-dark-navy-100
              hover:border
              border-dark-primary
              dark:border-light-primary
          ">
            Contact me
          </a>
        </div>
      </div>
    </div>
  </section>
</template>