<template>
    <v-footer class="footer-section py-10">
        <v-container>
            <v-row class="text-md-left text-center">
                <!-- BRAND -->
                <v-col cols="12" md="4">
                    <h3 class="mb-2">NovaFrame</h3>
                    <p class="footer-text">Fotografía y video con estilo cinematográfico.</p>
                </v-col>

                <!-- LINKS -->
                <v-col cols="12" md="4">
                    <h4 class="mb-2">Explorar</h4>
                    <div class="d-flex flex-column footer-links">
                        <a href="#">Servicios</a>
                        <a href="#">Galería</a>
                        <a href="#">Paquetes</a>
                    </div>
                </v-col>

                <!-- CONTACTO -->
                <v-col cols="12" md="4">
                    <h4 class="mb-2">Contacto</h4>
                    <p class="footer-text">contacto@novaframe.com.mx</p>

                    <div class="d-flex justify-md-start ga-3 mt-2 justify-center">
                        <v-btn icon variant="text">
                            <v-icon>mdi-instagram</v-icon>
                        </v-btn>
                        <v-btn icon variant="text">
                            <v-icon>mdi-facebook</v-icon>
                        </v-btn>
                        <v-btn icon variant="text">
                            <v-icon>mdi-whatsapp</v-icon>
                        </v-btn>
                    </div>
                </v-col>
            </v-row>

            <v-divider class="my-6"></v-divider>

            <p class="footer-copy text-center">© 2026 NovaFrame · Todos los derechos reservados</p>
        </v-container>
    </v-footer>
</template>
