<template>
    <v-container class="py-16">
        <!-- HEADER -->
        <div class="mb-12 text-center">
            <h2 class="text-h4 font-weight-bold mb-2">Servicios</h2>
            <p class="text-medium-emphasis">Soluciones visuales diseñadas para capturar y contar tu historia</p>
        </div>

        <!-- CARDS -->
        <v-row>
            <v-col cols="12" md="4" v-for="service in services" :key="service.title">
                <v-card elevation="4" class="pa-8 hover-card d-flex flex-column justify-space-between rounded-xl text-center" height="100%">
                    <!-- ICON -->
                    <div class="icon-wrapper mx-auto mb-4">
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
                    <v-btn variant="outlined" color="primary" class="mt-auto" @click="openDialog(service)"> Ver más </v-btn>
                </v-card>
            </v-col>
        </v-row>
    </v-container>

    <v-dialog v-model="dialog" max-width="520">
        <v-card class="pa-6 rounded-xl">
            <!-- ICONO -->
            <div class="d-flex mb-4 justify-center">
                <div class="icon-wrapper">
                    <v-icon size="36" color="primary">
                        {{ selectedService?.icon }}
                    </v-icon>
                </div>
            </div>

            <!-- TITULO -->
            <h3 class="text-h6 font-weight-bold mb-2 text-center">
                {{ selectedService?.title }}
            </h3>

            <!-- DESCRIPCIÓN -->
            <p class="text-medium-emphasis mb-4 text-center">
                {{ selectedService?.longDescription }}
            </p>

            <!-- INCLUYE -->
            <div class="mb-4">
                <p class="font-weight-medium mb-2">Incluye:</p>
                <ul class="pl-4">
                    <li v-for="item in selectedService?.includes" :key="item">
                        {{ item }}
                    </li>
                </ul>
            </div>

            <!-- PAQUETE -->
            <p class="text-caption text-medium-emphasis mb-4 text-center">
                {{ selectedService?.package }}
            </p>

            <!-- CTA -->
            <v-btn color="primary" block class="rounded-lg" @click="contactar(selectedService?.title)"> Cotizar servicio </v-btn>
        </v-card>
    </v-dialog>
</template>

<script setup lang="ts">
import { ref } from 'vue';

const dialog = ref(false);
const selectedService = ref<any>(null);

const openDialog = (service: any) => {
    selectedService.value = service;
    dialog.value = true;
};

const contactar = (servicio: string) => {
    const mensaje = `Hola, me interesa el servicio de ${servicio}`;
    window.open(`https://wa.me/5214772006766?text=${encodeURIComponent(mensaje)}`);
};

const services = ref([
    {
        title: 'Fotografía Profesional',
        icon: 'mdi-camera',
        description: 'Cobertura completa con fotografía de alta calidad.',
        longDescription:
            'Capturamos cada momento importante con enfoque artístico y técnico. Desde detalles hasta emociones, todo queda documentado con calidad profesional.',
        includes: ['Fotos ilimitadas en alta resolución', 'Edición profesional de color', 'Entrega digital optimizada'],
        package: 'Desde ESENCIAL',
    },
    {
        title: 'Video Cinematográfico',
        icon: 'mdi-video',
        description: 'Videos con storytelling y calidad cinematográfica.',
        longDescription: 'Creamos videos que cuentan tu historia con narrativa, ritmo y emoción. Ideal para revivir tu evento de forma impactante.',
        includes: ['Highlight (1–4 min)', 'Video completo del evento', 'Edición cinematográfica'],
        package: 'Desde PRO',
    },
    {
        title: 'Tomas Aéreas con Drone',
        icon: 'mdi-drone',
        description: 'Perspectivas únicas desde el aire.',
        longDescription:
            'Capturamos tomas aéreas que elevan la producción visual de tu evento, mostrando locaciones y momentos desde ángulos espectaculares.',
        includes: ['Tomas aéreas estabilizadas', 'Integración en video final', 'Planeación de tomas'],
        package: 'Desde PREMIUM',
    },
    {
        title: 'Tomas 360° & Creativas',
        icon: 'mdi-rotate-360',
        description: 'Contenido dinámico ideal para redes.',
        longDescription: 'Generamos contenido creativo en 360° que destaca en redes sociales y crea una experiencia inmersiva.',
        includes: ['Videos dinámicos 360°', 'Contenido listo para redes', 'Enfoque creativo'],
        package: 'Desde PRO',
    },
    {
        title: 'Contenido para Redes',
        icon: 'mdi-cellphone-play',
        description: 'Reels listos para Instagram y TikTok.',
        longDescription: 'Creamos contenido vertical optimizado para redes sociales, listo para captar atención y generar impacto.',
        includes: ['Reels verticales', 'Edición rápida y dinámica', 'Optimización para redes'],
        package: 'Desde ELITE',
    },
    {
        title: 'Edición Profesional',
        icon: 'mdi-palette',
        description: 'Color, ritmo y narrativa profesional.',
        longDescription: 'Transformamos el material en una pieza final con estilo cinematográfico, cuidando cada detalle visual y auditivo.',
        includes: ['Corrección de color', 'Edición avanzada', 'Narrativa visual'],
        package: 'Incluido en todos',
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
