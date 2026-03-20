<template>
    <v-app-bar app flat class="px-6" :class="isDark ? 'navbar-dark' : 'navbar-light'" elevation="2">
        <v-container class="d-flex align-center justify-space-between">
            <!-- LOGO -->
            <div class="d-flex align-center">
                <v-icon size="28" class="mr-2">mdi-camera-outline</v-icon>
                <span class="logo-text">NovaFrame</span>
            </div>

            <!-- MENU -->
            <div class="d-flex align-center nav-links">
                <v-btn variant="text" class="nav-btn" href="#inicio">Inicio</v-btn>
                <v-btn variant="text" class="nav-btn" href="#servicios">Servicios</v-btn>
                <v-btn variant="text" class="nav-btn" href="#galeria">Galería</v-btn>
                <v-btn variant="text" class="nav-btn" href="#contacto">Contacto</v-btn>
            </div>

            <!-- RIGHT ACTIONS -->
            <div class="d-flex align-center">
                <v-btn icon class="mr-2" @click="toggleDark">
                    <v-icon>{{ props.isDark ? 'mdi-weather-night' : 'mdi-white-balance-sunny' }}</v-icon>
                </v-btn>
            </div>
        </v-container>
    </v-app-bar>
</template>

<script setup lang="ts">
const props = defineProps<{
    isDark: boolean;
}>();

const emit = defineEmits<{
    'update:isDark': [value: boolean];
}>();

const toggleDark = () => {
    emit('update:isDark', !props.isDark);
};
</script>

<style scoped>
/* LOGO */
.logo-text {
    font-family: 'Playfair Display', serif;
    font-size: 1.4rem;
    font-weight: 600;
    letter-spacing: 1px;
}

/* BOTONES / NAV */
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
