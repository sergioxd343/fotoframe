<template>
    <v-container class="py-16 text-center">
        <h2 class="mb-10">¿Cómo trabajamos?</h2>
        <p class="text-medium-emphasis mb-10">Un proceso simple para un resultado cinematográfico</p>

        <v-timeline align="center" side="end">
            <v-timeline-item v-for="(step, i) in steps" :key="i" :dot-color="'primary'" size="small">
                <template #icon>
                    <v-icon color="white" size="small" >{{ step.icon }}</v-icon>
                </template>

                <v-card class="pa-5 timeline-card" elevation="3">
                    <h3 class="mb-2">{{ step.title }}</h3>
                    <p>{{ step.desc }}</p>
                </v-card>
            </v-timeline-item>
        </v-timeline>
    </v-container>
</template>

<script setup lang="ts">

const steps = [
    {
        icon: 'mdi-message-text',
        title: 'Contacto',
        desc: 'Cuéntanos sobre tu evento y te ayudamos a elegir el paquete ideal.',
    },
    {
        icon: 'mdi-lightbulb-on',
        title: 'Planeación Creativa',
        desc: 'Definimos estilo, tomas clave, locaciones y detalles para lograr un resultado cinematográfico.',
    },
    {
        icon: 'mdi-camera',
        title: 'Producción',
        desc: 'Capturamos tu evento con equipo profesional: foto, video, drone y tomas dinámicas.',
    },
    {
        icon: 'mdi-movie-open',
        title: 'Edición & Entrega',
        desc: 'Editamos tu material y recibes fotos y videos listos para compartir, incluyendo highlights y contenido para redes.',
    },
];
</script>

<style scoped>
.timeline-card {
    border-radius: 16px;
    transition: all 0.3s ease;
}

.timeline-card:hover {
    transform: translateY(-6px) scale(1.01);
}

/* Mejora visual de la línea */
.v-timeline {
    max-width: 800px;
    margin: auto;
}
</style>
