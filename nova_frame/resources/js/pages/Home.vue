<template>
    <v-app :theme="theme">
        <!-- NAVBAR -->
        <Nav :isDark="isDark" @update:isDark="isDark = $event"></Nav>

        <!-- HERO -->
        <section id="inicio">
            <Hero />
        </section>

        <!-- SERVICIOS -->
        <section id="servicios">
            <Servicios />
        </section>

        <!-- REEL -->
        <section id="reel">
            <Reel />
        </section>

        <!-- GALERÍA -->
        <section id="galeria">
            <Galeria />
        </section>

        <!-- PROCESO -->
        <section id="proceso">
            <Proceso />
        </section>

        <!-- PAQUETES -->
        <section id="paquetes">
            <Paquetes />
        </section>

        <!-- METODOS DE PAGO -->
        <section id="metodos-pago">
            <MetodosPago />
        </section>

        <!-- FAQ -->
        <section id="faq">
            <FAQ />
        </section>

        <!-- COBERTURA -->
        <section id="cobertura">
            <Cobertura />
        </section>

        <!-- CONTACTO -->
        <section id="contacto">
            <Contacto />
        </section>

        <!-- FOOTER -->
        <Footer></Footer>

        <v-btn icon class="whatsapp-btn" href="https://wa.me/524772006766" target="_blank">
            <v-icon>mdi-whatsapp</v-icon>
        </v-btn>
    </v-app>
</template>

<script lang="ts" setup>
import { computed, ref } from 'vue';

import Footer from './web/components/Footer.vue';
import Nav from './web/components/Nav.vue';

import Cobertura from './web/Cobertura.vue';
import Contacto from './web/Contacto.vue';
import FAQ from './web/FAQ.vue';
import Galeria from './web/Galeria.vue';
import Hero from './web/Hero.vue';
import Paquetes from './web/Paquetes.vue';
import Proceso from './web/Proceso.vue';
import Reel from './web/Reel.vue';
import Servicios from './web/Servicios.vue';
import MetodosPago from './web/MetodosPago.vue';

const isDark = ref(false);

const theme = computed(() => (isDark.value ? 'dark' : 'light'));
</script>

<style scoped>
body {
    font-family: 'Inter', sans-serif;
}

.whatsapp-btn {
    position: fixed;
    bottom: 20px;
    right: 20px;
    background: #25d366;
    color: white;
    z-index: 1000;
}
</style>
