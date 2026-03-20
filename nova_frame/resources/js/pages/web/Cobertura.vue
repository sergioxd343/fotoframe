<template>
  <v-container class="py-16 coverage-section">
    <!-- HEADER -->
    <div class="text-center mb-12">
      <h2 class="text-h4 font-weight-bold mb-2">
        Cobertura
      </h2>
      <p class="text-medium-emphasis">
        Trabajamos en León, Guanajuato y zonas cercanas
      </p>
    </div>

    <!-- CARDS -->
    <v-row justify="center" class="ga-6">
      <!-- LEÓN -->
      <v-col cols="12" md="4">
        <v-card class="coverage-card pa-8 text-center" elevation="0">
          <div class="icon-wrapper mb-4">
            <v-icon size="36" color="primary">
              mdi-map-marker
            </v-icon>
          </div>

          <h3 class="text-h6 font-weight-bold mb-2">
            León, Gto
          </h3>

          <p class="text-medium-emphasis">
            Sesiones y cobertura completa dentro de la ciudad
          </p>
        </v-card>
      </v-col>

      <!-- ALREDEDORES -->
      <v-col cols="12" md="4">
        <v-card class="coverage-card pa-8 text-center" elevation="0">
          <div class="icon-wrapper mb-4">
            <v-icon size="36" color="primary">
              mdi-car
            </v-icon>
          </div>

          <h3 class="text-h6 font-weight-bold mb-2">
            Zonas cercanas
          </h3>

          <p class="text-medium-emphasis">
            Disponibilidad para eventos en ciudades cercanas (puede aplicar traslado)
          </p>
        </v-card>
      </v-col>
    </v-row>

    <!-- BADGE -->
    <div class="text-center mt-10">
      <v-chip color="primary" variant="tonal">
        📍 Cobertura local y regional
      </v-chip>
    </div>
  </v-container>
</template>

<style scoped>
.coverage-section {
  max-width: 1100px;
}

/* CARD */
.coverage-card {
  border-radius: 20px;
  transition: all 0.3s ease;
  border: 1px solid rgba(0, 0, 0, 0.06);
}

/* HOVER */
.coverage-card:hover {
  transform: translateY(-8px);
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
}

/* ICON */
.icon-wrapper {
  width: 64px;
  height: 64px;
  margin: 0 auto;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  background: rgba(0, 0, 0, 0.04);
}

/* DARK MODE */
.v-theme--dark .coverage-card {
  border: 1px solid rgba(255, 255, 255, 0.08);
}

.v-theme--dark .coverage-card:hover {
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.6);
}

.v-theme--dark .icon-wrapper {
  background: rgba(255, 255, 255, 0.06);
}
</style>