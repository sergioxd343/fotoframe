<template>
    <!-- APP BAR -->
    <v-app-bar app flat class="px-md-6 px-4" :class="isDark ? 'navbar-dark' : 'navbar-light'" elevation="2">
        <v-container class="d-flex align-center justify-space-between">
            <!-- LOGO -->
            <div class="d-flex align-center">
                <!-- BOTÓN HAMBURGUESA (solo móvil) -->
                <v-app-bar-nav-icon class="d-md-none mr-2" @click="drawer = !drawer" />

                <v-avatar size="40" class="mr-2">
                    <img src="/logos/logo.png" alt="logo" />
                </v-avatar>
                <span class="logo-text">NovaFrame</span>
            </div>

            <!-- MENU DESKTOP -->
            <div class="d-none d-md-flex align-center nav-links">
                <v-btn variant="text" class="nav-btn" href="#inicio">Inicio</v-btn>
                <v-btn variant="text" class="nav-btn" href="#servicios">Servicios</v-btn>
                <v-btn variant="text" class="nav-btn" href="#galeria">Galería</v-btn>
                <v-btn variant="text" class="nav-btn" href="#contacto">Contacto</v-btn>
            </div>

            <!-- RIGHT ACTIONS -->
            <div class="d-flex align-center">
                <v-btn icon @click="toggleDark">
                    <v-icon>
                        {{ props.isDark ? 'mdi-weather-night' : 'mdi-white-balance-sunny' }}
                    </v-icon>
                </v-btn>
            </div>
        </v-container>
    </v-app-bar>

    <!-- DRAWER (MÓVIL) -->
    <v-navigation-drawer v-model="drawer" temporary location="left" class="d-md-none">
        <v-list>
            <v-list-item @click="goTo('#inicio')">Inicio</v-list-item>
            <v-list-item @click="goTo('#servicios')">Servicios</v-list-item>
            <v-list-item @click="goTo('#galeria')">Galería</v-list-item>
            <v-list-item @click="goTo('#contacto')">Contacto</v-list-item>
        </v-list>
    </v-navigation-drawer>
</template>

<script setup lang="ts">
import { ref } from 'vue';

const drawer = ref(false);

const props = defineProps<{
    isDark: boolean;
}>();

const emit = defineEmits<{
    'update:isDark': [value: boolean];
}>();

const toggleDark = () => {
    emit('update:isDark', !props.isDark);
};

const goTo = (id: string) => {
    drawer.value = false;
    const el = document.querySelector(id);
    if (el) el.scrollIntoView({ behavior: 'smooth' });
};
</script>

<style scoped>
/* LOGO */
.logo-text {
    font-family: 'Playfair Display', serif;
    font-size: 1.2rem;
    font-weight: 600;
    letter-spacing: 1px;
}

/* NAV */
.nav-btn {
    font-weight: 500;
    letter-spacing: 0.5px;
    text-transform: none;
}

.nav-btn:hover {
    transform: translateY(-2px);
    opacity: 0.8;
}
</style>
