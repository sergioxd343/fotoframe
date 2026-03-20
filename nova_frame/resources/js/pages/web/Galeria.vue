<template>
    <v-container fluid class="gallery-section py-16">
        <!-- HEADER -->
        <div class="text-center mb-12">
            <h2 class="text-h4 font-weight-bold mb-2">Galería</h2>
            <p class="text-medium-emphasis">
                Una muestra de nuestras historias capturadas
            </p>
        </div>

        <!-- GRID -->
        <v-row>
            <v-col
                v-for="(image, i) in gallery"
                :key="i"
                cols="12"
                sm="6"
                md="4"
            >
                <div class="image-card" @click="openImage(i)">
                    <v-img
                        :src="image"
                        height="300"
                        cover
                        class="rounded-xl img"
                    />

                    <!-- OVERLAY -->
                    <div class="overlay">
                        <v-icon size="40">mdi-eye</v-icon>
                        <span>Ver imagen</span>
                    </div>
                </div>
            </v-col>
        </v-row>

        <!-- MODAL -->
        <v-dialog v-model="dialog" fullscreen transition="fade-transition">
            <div class="dialog-overlay">
                <!-- CLOSE -->
                <v-btn icon class="close-btn" @click="dialog = false">
                    <v-icon size="30">mdi-close</v-icon>
                </v-btn>

                <!-- PREV -->
                <v-btn icon class="nav-btn left" @click="prevImage">
                    <v-icon size="35">mdi-chevron-left</v-icon>
                </v-btn>

                <!-- IMAGE -->
                <v-img
                    :src="gallery[currentIndex]"
                    class="dialog-image"
                    contain
                />

                <!-- NEXT -->
                <v-btn icon class="nav-btn right" @click="nextImage">
                    <v-icon size="35">mdi-chevron-right</v-icon>
                </v-btn>
            </div>
        </v-dialog>
    </v-container>
</template>

<script setup lang="ts">
import { ref } from 'vue';

const dialog = ref(false);
const currentIndex = ref(0);

const gallery = ref([
    'https://images.unsplash.com/photo-1492724441997-5dc865305da7',
    'https://images.unsplash.com/photo-1487412912498-0447578fcca8',
    'https://images.unsplash.com/photo-1495567720989-cebdbdd97913',
    'https://images.unsplash.com/photo-1519681393784-d120267933ba',
]);

const openImage = (index: number) => {
    currentIndex.value = index;
    dialog.value = true;
};

const nextImage = () => {
    currentIndex.value =
        (currentIndex.value + 1) % gallery.value.length;
};

const prevImage = () => {
    currentIndex.value =
        (currentIndex.value - 1 + gallery.value.length) %
        gallery.value.length;
};
</script>

<style scoped>
.gallery-section {
    background: linear-gradient(
        to bottom,
        rgba(0, 0, 0, 0.02),
        rgba(0, 0, 0, 0.05)
    );
}

/* IMAGE CARD */
.image-card {
    position: relative;
    cursor: pointer;
    overflow: hidden;
    border-radius: 16px;
}

/* IMAGE */
.img {
    transition: transform 0.5s ease;
}

/* OVERLAY */
.overlay {
    position: absolute;
    inset: 0;
    background: rgba(0, 0, 0, 0.5);
    color: white;

    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;

    opacity: 0;
    transition: all 0.3s ease;
}

/* HOVER EFFECT */
.image-card:hover .img {
    transform: scale(1.08);
}

.image-card:hover .overlay {
    opacity: 1;
}

/* MODAL */
.dialog-overlay {
    background: rgba(0, 0, 0, 0.95);
    height: 100vh;

    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
}

/* IMAGE MODAL */
.dialog-image {
    max-width: 90%;
    max-height: 85vh;
    border-radius: 12px;
}

/* CLOSE */
.close-btn {
    position: absolute;
    top: 20px;
    right: 20px;
}

/* NAV BUTTONS */
.nav-btn {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
}

.nav-btn.left {
    left: 20px;
}

.nav-btn.right {
    right: 20px;
}

/* DARK MODE */
:deep(.v-theme--dark) .gallery-section {
    background: linear-gradient(
        to bottom,
        rgba(255, 255, 255, 0.02),
        rgba(255, 255, 255, 0.05)
    );
}
</style>