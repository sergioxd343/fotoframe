<template>
  <v-container class="py-16 faq-section">
    <!-- HEADER -->
    <div class="text-center mb-12">
      <h2 class="text-h4 font-weight-bold mb-2">
        Preguntas frecuentes
      </h2>
      <p class="text-medium-emphasis">
        Resolvemos las dudas más comunes sobre nuestros servicios
      </p>
    </div>

    <!-- FAQ CARD -->
    <v-card class="mx-auto faq-card" max-width="900" elevation="0">
      <v-expansion-panels variant="accordion">
        <v-expansion-panel
          v-for="(faq, i) in faqs"
          :key="i"
          class="faq-panel"
        >
          <!-- TITLE -->
          <v-expansion-panel-title>
            <div class="d-flex align-center justify-space-between w-100">
              <div class="d-flex align-center">
                <v-icon
                  icon="mdi-help-circle-outline"
                  class="mr-3"
                  color="primary"
                />
                <span class="font-weight-medium">
                  {{ faq.question }}
                </span>
              </div>
            </div>
          </v-expansion-panel-title>

          <!-- CONTENT -->
          <v-expansion-panel-text>
            <p class="faq-answer">
              {{ faq.answer }}
            </p>
          </v-expansion-panel-text>
        </v-expansion-panel>
      </v-expansion-panels>
    </v-card>
  </v-container>
</template>

<script setup lang="ts">
const faqs = [
  {
    question: '¿Cuánto tardan en entregar el material?',
    answer: 'El tiempo de entrega completo es de 1 a 3 semanas. Algunos paquetes incluyen preview en 24 a 72 horas.'
  },
  {
    question: '¿Incluye edición?',
    answer: 'Sí, todo el material se entrega editado con estilo cinematográfico según el paquete contratado.'
  },
  {
    question: '¿Cuántas fotos entregan?',
    answer: 'Depende del paquete: desde 80 hasta más de 200 fotos editadas en alta resolución.'
  },
  {
    question: '¿Trabajan fuera de León?',
    answer: 'Sí, cubrimos eventos en todo México. Puede aplicar costo de traslado según la ubicación.'
  },
  {
    question: '¿Se requiere anticipo?',
    answer: 'Sí, se requiere un anticipo del 30% para apartar tu fecha.'
  },
  {
  question: '¿Incluyen drone y tomas especiales?',
  answer: 'Sí, los paquetes más avanzados incluyen tomas con drone, 360° y estilo cinematográfico.'
},
{
  question: '¿Entregan videos para redes sociales?',
  answer: 'Sí, algunos paquetes incluyen reels verticales optimizados para Instagram y TikTok.'
},

];
</script>

<style scoped>
.faq-section {
  max-width: 1100px;
}

/* Card principal */
.faq-card {
  border-radius: 20px;
  padding: 10px;
}

/* Paneles */
.faq-panel {
  border-bottom: 1px solid rgba(0, 0, 0, 0.08);
}

/* Hover elegante */
.faq-panel:hover {
  background: rgba(0, 0, 0, 0.02);
  transition: 0.3s;
}

/* Texto respuesta */
.faq-answer {
  color: rgba(0, 0, 0, 0.7);
  line-height: 1.6;
  padding-left: 36px;
}

/* DARK MODE */
.v-theme--dark .faq-panel {
  border-bottom: 1px solid rgba(255, 255, 255, 0.08);
}

.v-theme--dark .faq-panel:hover {
  background: rgba(255, 255, 255, 0.04);
}

.v-theme--dark .faq-answer {
  color: rgba(255, 255, 255, 0.7);
}
</style>