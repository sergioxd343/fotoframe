<template>
  <v-container class="py-16 text-center">
    <!-- HEADER -->
    <h2 class="font-weight-medium mb-2">Métodos de pago</h2>
    <p class="text-medium-emphasis mb-10">
      Opciones seguras y rápidas para tu compra
    </p>

    <v-row justify="center">
      <v-col cols="12" sm="10" md="6">
        <v-card flat class="pa-8 payment-card text-center">
          
          <!-- LABEL -->
          <span class="payment-label mb-6 d-inline-block">
            Mercado Pago
          </span>

          <!-- ICONOS -->
          <div class="d-flex justify-center ga-4 mb-6 flex-wrap">
            <v-icon size="22">mdi-credit-card-outline</v-icon>

            <v-img src="https://upload.wikimedia.org/wikipedia/commons/9/98/Visa_Inc._logo_%282005%E2%80%932014%29.svg" max-width="36" contain />
            <v-img src="https://upload.wikimedia.org/wikipedia/commons/2/2a/Mastercard-logo.svg" max-width="36" contain />
            <v-img src="https://upload.wikimedia.org/wikipedia/commons/f/fa/American_Express_logo_%282018%29.svg" max-width="36" contain />

            <v-icon size="22">mdi-cash</v-icon>
          </div>

          <!-- TEXTO -->
          <p class="text-medium-emphasis mb-4">
            Tarjetas de crédito, débito y efectivo
          </p>

          <!-- BENEFICIOS -->
          <div class="benefits">
            <span>Pagos seguros</span>
            <span>Rápido</span>
            <span>Confiable</span>
          </div>

        </v-card>
      </v-col>
    </v-row>
  </v-container>
</template>

<script setup lang="ts"></script>

<style scoped>
.payment-card {
  border: 1px solid rgba(0,0,0,0.06);
  border-radius: 16px;
}

/* LABEL SIMPLE */
.payment-label {
  font-size: 0.8rem;
  color: rgba(0,0,0,0.6);
  letter-spacing: 1px;
  text-transform: uppercase;
}

/* BENEFICIOS EN LÍNEA */
.benefits {
  display: flex;
  justify-content: center;
  gap: 16px;
  font-size: 0.85rem;
  color: rgba(0,0,0,0.6);
}
</style>