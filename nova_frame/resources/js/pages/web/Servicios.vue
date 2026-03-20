<template>
    <v-container class="py-16">
        <!-- HEADER -->
        <div class="text-center mb-12">
            <h2 class="text-h4 font-weight-bold mb-2">Servicios</h2>
            <p class="text-medium-emphasis">
                Soluciones visuales diseñadas para capturar y contar tu historia
            </p>
        </div>

        <!-- CARDS -->
        <v-row>
            <v-col
                cols="12"
                md="4"
                v-for="service in services"
                :key="service.title"
            >
                <v-card
                    elevation="4"
                    class="pa-8 rounded-xl text-center hover-card d-flex flex-column justify-space-between"
                    height="100%"
                >
                    <!-- ICON -->
                    <div class="icon-wrapper mb-4 mx-auto">
                        <v-icon size="36" color="primary">
                            {{ service.icon }}
                        </v-icon>
                    </div>

                    <!-- TITLE -->
                    <h3 class="text-h6 font-weight-bold mb-2">
                        {{ service.title }}
                    </h3>

                    <!-- DESCRIPTION -->
                    <p class="text-medium-emphasis mb-6">
                        {{ service.description }}
                    </p>

                    <!-- CTA -->
                    <v-btn
                        variant="outlined"
                        color="primary"
                        class="mt-auto"
                    >
                        Ver más
                    </v-btn>
                </v-card>
            </v-col>
        </v-row>
    </v-container>
</template>

<script setup lang="ts">
import { ref } from 'vue';

const services = ref([
    {
        title: 'Fotografía Profesional',
        description: 'Cobertura completa con fotografía de alta calidad y edición cuidada.',
        icon: 'mdi-camera',
    },
    {
        title: 'Video Cinematográfico',
        description: 'Desde highlights hasta video completo del evento con storytelling.',
        icon: 'mdi-video',
    },
    {
        title: 'Tomas Aéreas con Drone',
        description: 'Captura perspectivas únicas que elevan la calidad visual de tu evento.',
        icon: 'mdi-drone',
    },
    {
        title: 'Tomas 360° & Creativas',
        description: 'Contenido dinámico e impactante ideal para redes sociales.',
        icon: 'mdi-rotate-360',
    },
    {
        title: 'Contenido para Redes',
        description: 'Reels verticales optimizados para Instagram y TikTok.',
        icon: 'mdi-cellphone-play',
    },
    {
        title: 'Edición Profesional',
        description: 'Color, ritmo y narrativa para lograr un resultado cinematográfico.',
        icon: 'mdi-palette',
    },
]);
</script>

<style scoped>
.hover-card {
    transition: all 0.3s ease;
    border: 1px solid rgba(0, 0, 0, 0.05);
}

.hover-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
}

/* ICON BACKGROUND */
.icon-wrapper {
    width: 70px;
    height: 70px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;

    background: rgba(25, 118, 210, 0.1); /* primary suave */
}

/* DARK MODE SUPPORT */
:deep(.v-theme--dark) .hover-card {
    border: 1px solid rgba(255, 255, 255, 0.08);
}

:deep(.v-theme--dark) .hover-card:hover {
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.6);
}

:deep(.v-theme--dark) .icon-wrapper {
    background: rgba(255, 255, 255, 0.08);
}
</style>