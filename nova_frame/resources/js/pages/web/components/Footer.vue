<template>
    <v-footer class="footer-section py-12">
        <v-container class="text-center">

            <!-- LOGO + BRAND -->
            <div class="d-flex flex-column align-center mb-6">
                <v-avatar size="48" class="mb-3">
                    <img src="/logos/logo.png" alt="logo" />
                </v-avatar>

                <h2 class="brand-title mb-1">NovaFrame</h2>
                <p class="footer-text">
                    Fotografía y video cinematográfico
                </p>
            </div>

            <!-- LINKS -->
            <div class="footer-links d-flex justify-center ga-8 mb-6">
                <a href="#">Servicios</a>
                <a href="#">Galería</a>
                <a href="#">Paquetes</a>
            </div>

            <!-- SOCIAL -->
            <div class="d-flex justify-center ga-4 mb-6">
                <v-btn icon variant="text" size="small">
                    <v-icon size="20">mdi-instagram</v-icon>
                </v-btn>
                <v-btn icon variant="text" size="small">
                    <v-icon size="20">mdi-facebook</v-icon>
                </v-btn>
                <v-btn icon variant="text" size="small">
                    <v-icon size="20">mdi-whatsapp</v-icon>
                </v-btn>
            </div>

            <!-- COPY -->
            <div class="footer-copy">
                © 2026 NovaFrame
            </div>

        </v-container>
    </v-footer>
</template>

<style scoped>
.footer-section {
    color: #aaa;
}

.brand-title {
    font-weight: 500;
    letter-spacing: 1px;
}

.footer-text {
    font-size: 0.85rem;
    color: #777;
}

.footer-links a {
    text-decoration: none;
    color: #888;
    font-size: 0.9rem;
    letter-spacing: 0.5px;
    transition: all 0.2s ease;
}

.footer-links a:hover {
    color: #fff;
}

.v-btn {
    opacity: 0.6;
    transition: all 0.25s ease;
}

.v-btn:hover {
    opacity: 1;
    transform: translateY(-3px);
}

.footer-copy {
    font-size: 0.75rem;
    color: #555;
    letter-spacing: 0.5px;
}
</style>
