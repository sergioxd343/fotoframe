<template>
    <v-container fluid class="pa-0">
        <v-img src="https://images.unsplash.com/photo-1500530855697-b586d89ba3ee" height="90vh" cover>
            <div class="overlay d-flex flex-column align-center justify-center text-white">
                <h1 class="text-h2 font-weight-bold text-center">Tu historia merece verse increíble</h1>
                <p class="text-subtitle-1 mt-4 text-center">Capturamos momentos con estilo cinematográfico</p>
                <v-btn color="white" class="mt-6" variant="outlined"> Explorar </v-btn>
            </div>
        </v-img>
    </v-container>
</template>

<script setup lang="ts">
</script>

<style scoped>
h1,
h2,
h3 {
    font-family: 'Playfair Display', serif;
}

.overlay {
    background: rgba(0, 0, 0, 0.6);
    height: 100%;
}
</style>