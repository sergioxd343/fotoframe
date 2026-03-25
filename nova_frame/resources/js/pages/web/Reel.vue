<template>
  <v-container class="py-16">
    <!-- HEADER -->
    <div class="text-center mb-10">
      <h2 class="text-h4 font-weight-bold mb-2">
        Nuestro estilo en acción
      </h2>
      <p class="text-medium-emphasis">
        Historias reales, capturadas con enfoque cinematográfico
      </p>
    </div>

    <!-- VIDEO REEL -->
    <div class="reel-wrapper mx-auto">
      <v-responsive aspect-ratio="16/9">
        <div class="video-container">
          <!-- VIDEO -->
          <video
            autoplay
            muted
            loop
            playsinline
            class="reel-video"
          >
            <source src="/videos/reel.mp4" type="video/mp4" />
          </video>

          <!-- OVERLAY -->
          <div class="overlay"></div>

          <!-- CONTENT -->
          <div class="reel-content">
            <h3 class="text-h5 font-weight-bold mb-2">
              Creamos experiencias visuales
            </h3>
            <p class="mb-4">
              Más que imágenes, contamos historias que conectan
            </p>

            <v-btn color="primary" size="large" @click="irAPortafolio">
              Ver portafolio <v-icon right>mdi-arrow-right</v-icon>
            </v-btn>
          </div>
        </div>
      </v-responsive>
    </div>
  </v-container>
</template>

<script setup lang="ts">
const irAPortafolio = () => {
  // Abrir instagram en nueva pestaña
  window.open('https://www.instagram.com/nova_frame/', '_blank');
};
</script>

<style scoped>
.reel-wrapper {
  max-width: 900px;
  border-radius: 20px;
  overflow: hidden;
}

/* VIDEO CONTAINER */
.video-container {
  position: relative;
  width: 100%;
  height: 100%;
}

/* VIDEO */
.reel-video {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform 0.6s ease;
}

/* OVERLAY */
.overlay {
  position: absolute;
  inset: 0;
  background: linear-gradient(
    to top,
    rgba(0, 0, 0, 0.7),
    rgba(0, 0, 0, 0.2)
  );
}

/* CONTENT */
.reel-content {
  position: absolute;
  bottom: 30px;
  left: 30px;
  color: white;
  max-width: 400px;
}

/* HOVER EFFECT */
.video-container:hover .reel-video {
  transform: scale(1.05);
}

/* DARK MODE (ajuste fino) */
:deep(.v-theme--dark) .overlay {
  background: linear-gradient(
    to top,
    rgba(0, 0, 0, 0.8),
    rgba(0, 0, 0, 0.3)
  );
}
</style>