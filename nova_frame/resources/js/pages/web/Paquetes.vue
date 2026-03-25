<template>
    <v-container fluid class="packages-section py-16">
        <v-container>
            <div class="mb-10 text-center">
                <h2 class="text-h4 font-weight-bold mb-2">Paquetes</h2>
                <p class="text-medium-emphasis">Elige la experiencia que mejor capture tu historia</p>
            </div>

            <v-row justify="center" align="stretch">
                <v-col cols="12" sm="6" md="6" lg="4" xl="3" v-for="pack in packages" :key="pack.title" class="d-flex">
                    <v-card
                        elevation="0"
                        class="package-card d-flex flex-column"
                        :class="{ featured: pack.featured }"
                        @click="openDialog(pack)"
                        style="cursor: pointer"
                    >
                        <!-- Badge -->
                        <div v-if="pack.featured" class="badge">MÁS POPULAR</div>

                        <div class="d-flex flex-column flex-grow-1">
                            <h3 class="text-h5 font-weight-bold mb-2 text-center">
                                {{ pack.title }}
                            </h3>

                            <!-- PRECIO -->
                            <div class="mb-4 text-center">
                                <!-- PRECIO ANTERIOR -->
                                <div v-if="pack.oldPrice" class="old-price">${{ pack.oldPrice }} MXN</div>

                                <!-- PRECIO ACTUAL -->
                                <div>
                                    <span class="currency">$</span>
                                    <span class="price">{{ pack.price }}</span>
                                    <span class="mxn">MXN</span>
                                </div>

                                <!-- AHORRO -->
                                <div v-if="pack.oldPrice" class="discount">
                                    Ahorra ${{
                                        (parseFloat(pack.oldPrice.replace(',', '')) - parseFloat(pack.price.replace(',', ''))).toLocaleString()
                                    }}
                                </div>
                            </div>

                            <v-divider class="mb-4"></v-divider>

                            <!-- FEATURES -->
                            <v-list density="compact" class="flex-grow-1">
                                <v-list-item v-for="(item, i) in pack.features" :key="i">
                                    <template #prepend>
                                        <v-icon size="18" color="primary"> mdi-check </v-icon>
                                    </template>

                                    <v-list-item-title class="feature-text">
                                        {{ item }}
                                    </v-list-item-title>
                                </v-list-item>
                            </v-list>
                        </div>

                        <!-- BOTÓN -->
                        <div class="mt-6">
                            <v-btn class="btn-package" :class="{ 'btn-featured': pack.featured }" size="large" block> Reservar ahora </v-btn>

                            <p class="disclaimer mt-2 text-center">*Aparta con el 30%</p>
                        </div>
                    </v-card>
                </v-col>
            </v-row>
        </v-container>
    </v-container>

    <v-dialog v-model="dialog" max-width="520" transition="dialog-bottom-transition">
        <v-card class="dialog-card">
            <!-- HEADER -->
            <div class="dialog-header">
                <div>
                    <h3 class="dialog-title">
                        {{ selectedPack?.title }}
                    </h3>
                    <p class="dialog-price">${{ selectedPack?.price }} <span>MXN</span></p>
                </div>

                <!-- BOTÓN CERRAR -->
                <v-btn icon variant="text" @click="dialog = false">
                    <v-icon>mdi-close</v-icon>
                </v-btn>
            </div>

            <v-divider></v-divider>

            <!-- CONTENIDO -->
            <v-card-text class="dialog-content">
                <v-list density="comfortable">
                    <v-list-item v-for="(item, i) in selectedPack?.features" :key="i" class="dialog-item">
                        <template #prepend>
                            <v-icon size="20" color="primary">mdi-check-circle</v-icon>
                        </template>

                        <v-list-item-title class="dialog-feature-text">
                            {{ item }}
                        </v-list-item-title>
                    </v-list-item>
                </v-list>
            </v-card-text>

            <!-- FOOTER -->
            <v-card-actions class="dialog-actions">
                <v-btn block size="large" class="dialog-btn"> Reservar ahora </v-btn>
            </v-card-actions>
        </v-card>
    </v-dialog>
</template>
<script setup lang="ts">
import { ref } from 'vue';

const dialog = ref(false);
const selectedPack = ref<any>(null);

const openDialog = (pack: any) => {
    selectedPack.value = pack;
    dialog.value = true;
};

const packages = ref([
    {
        title: 'ESENCIAL',
        price: '9,500.00',
        oldPrice: '11,000.00',
        featured: false,
        features: [
            'Cobertura de 3–4 hora',
            'Fotografía profesional (1 cámara)',
            'Fotos ilimitadas en alta resolución',
            '80-100 fotos editadas',
            'Edición básica',
            '1 lugar de sesión',
        ],
    },
    {
        title: 'PRO',
        price: '13,500.00',
        oldPrice: '15,500.00',
        featured: true,
        features: [
            'Cobertura de 4–6 horas',
            'Fotografía profesional (2 cámaras)',
            'Video highlight (1–2 min)',
            'Fotos ilimitadas en alta resolución',
            '120–180 fotos editadas',
            'Tomas en 360° (dinámicas, creativas)',
        ],
    },
    {
        title: 'PREMIUM',
        price: '17,000.00',
        oldPrice: '20,000.00',
        featured: false,
        features: [
            'Cobertura de hasta 8 horas',
            'Foto + video completo',
            'Video highlight (2–4 min)',
            'Video largo (evento completo o resumen extendido)',
            '200+ fotos editadas',
            'Tomas con drone',
            'Tomas en 360° (dinámicas, creativas)',
            'Tomas cinematicas (movimientos, storytelling)',
            '3 locaciones',
            'Entrega express (48–72h preview)',
        ],
    },
    {
        title: 'ELITE',
        price: '22,000.00',
        oldPrice: '27,000.00',
        featured: false,
        features: [
            'Cobertura total del evento',
            '2 videógrafos + 2 fotógrafos',
            'Edición cinematográfica avanzada',
            'Drone + tomas planificadas',
            'Teaser rápido para redes (24h)',
            'Reel vertical optimizado (Instagram/TikTok)',
            'Correcciones / revisiones incluidas',
            'Entrega prioritaria',
        ],
    },
]);
</script>
<style scoped>
.packages-section {
    background: rgb(var(--v-theme-background));

    .packages-section {
        background: rgb(var(--v-theme-background));
        overflow: visible;
    }

    .v-container {
        overflow: visible;
    }

    .v-row {
        overflow: visible;
    }
}

.subtitle {
    opacity: 0.7;
}

/* CARD */
.package-card {
    position: relative;
    padding: 32px 24px;
    border-radius: 20px;
    background: rgb(var(--v-theme-surface));
    color: rgb(var(--v-theme-on-surface));
    transition: all 0.3s ease;
    border: 1px solid rgba(var(--v-theme-on-surface), 0.08);
    backdrop-filter: blur(10px);
}

.package-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.08);
}

/* FEATURED */
.featured {
    border: 2px solid #1976d2;
    box-shadow: 0 20px 50px rgba(25, 118, 210, 0.2);
    transform: scale(1.06);
}

/* Solo aplica el scale en pantallas grandes */
@media (min-width: 960px) {
    .featured {
        transform: scale(1.06);
    }
}

.dialog-feature-text {
    white-space: normal !important;
    overflow: visible !important;
    text-overflow: unset !important;
    display: block !important;
}

/* PRECIO */
.price {
    font-size: 2.6rem;
    font-weight: 700;
    color: #1976d2;
}

.currency {
    font-size: 1.2rem;
    vertical-align: top;
    margin-right: 2px;
}

.mxn {
    font-size: 0.9rem;
    opacity: 0.6;
    margin-left: 4px;
}

/* FEATURES */
.feature-text {
    display: -webkit-box;
    -webkit-line-clamp: 1;
    line-clamp: 1;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

/* BOTONES */
.btn-package {
    padding: 40px 24px 32px;
    border-radius: 12px;
    font-weight: 600;
    letter-spacing: 0.5px;
    text-transform: none;
    transition: all 0.25s ease;
    background: rgba(var(--v-theme-primary), 0.08);
    color: rgb(var(--v-theme-primary));
}

.btn-package:hover {
    transform: translateY(-2px);
    background: rgba(var(--v-theme-primary), 0.15);
}

.btn-featured {
    background: rgb(var(--v-theme-primary));
    color: white;
    box-shadow: 0 8px 20px rgba(25, 118, 210, 0.3);
}

.btn-featured:hover {
    transform: translateY(-3px) scale(1.02);
    box-shadow: 0 12px 30px rgba(25, 118, 210, 0.4);
}

/* BADGE */
.badge {
    position: inherit;
    top: -14px;
    left: 50%;
    transform: translateX(-50%);
    background: rgb(var(--v-theme-primary));
    color: white;
    font-size: 0.7rem;
    padding: 6px 14px;
    border-radius: 20px;
    font-weight: bold;
    letter-spacing: 0.5px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
    text-align: center;
}

/* CARD GENERAL */
.dialog-card {
    border-radius: 20px;
    padding: 10px 10px 16px;
    backdrop-filter: blur(12px);
}

/* HEADER */
.dialog-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 16px 20px 8px;
}

/* TÍTULO */
.dialog-title {
    font-size: 1.3rem;
    font-weight: 700;
}

/* PRECIO */
.dialog-price {
    font-size: 1.8rem;
    font-weight: 700;
    color: #1976d2;
    margin: 2px 0 0;
}

.dialog-price span {
    font-size: 0.8rem;
    opacity: 0.6;
    margin-left: 4px;
}

/* CONTENIDO */
.dialog-content {
    padding: 8px 16px 0;
}

/* ITEMS */
.dialog-item {
    border-radius: 10px;
    margin-bottom: 4px;
    transition: background 0.2s ease;
}

.dialog-item:hover {
    background: rgba(var(--v-theme-primary), 0.08);
}

/* TEXTO */
.dialog-feature-text {
    white-space: normal;
    overflow: visible;
    text-overflow: unset;
}

/* FOOTER */
.dialog-actions {
    padding: 16px 20px 8px;
}

/* BOTÓN */
.dialog-btn {
    border-radius: 12px;
    font-weight: 600;
    background: rgb(var(--v-theme-primary));
    color: white;
    box-shadow: 0 8px 20px rgba(25, 118, 210, 0.3);
    transition: all 0.25s ease;
}

.dialog-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 12px 25px rgba(25, 118, 210, 0.4);
}

.old-price {
    font-size: 1rem;
    color: rgba(var(--v-theme-on-surface), 0.5);
    text-decoration: line-through;
    margin-bottom: 4px;
}

.discount {
    font-size: 0.8rem;
    color: #2e7d32; /* verde */
    font-weight: 600;
    margin-top: 4px;
}
</style>
