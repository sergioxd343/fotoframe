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
                <a href="#inicio">Inicio</a>
                <a href="#servicios">Servicios</a>
                <a href="#galeria">Galería</a>
                <a href="#paquetes">Paquetes</a>
                <a href="#contacto">Contacto</a>
            </div>

            <!-- SOCIAL -->
            <div class="d-flex justify-center ga-4 mb-6">
                <v-btn icon variant="text" size="small" @click="abrirInstagram">
                    <v-icon size="20">mdi-instagram</v-icon>
                </v-btn>
                <v-btn icon variant="text" size="small" @click="abrirFacebook">
                    <v-icon size="20">mdi-facebook</v-icon>
                </v-btn>
                <v-btn icon variant="text" size="small" @click="abrirWhatsApp">
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

<script setup lang="ts">

// Funcion para abrir redes sociales en nueva pestaña
const abrirInstagram = () => {
    window.open('https://www.instagram.com/nova_frame/', '_blank');
};

const abrirFacebook = () => {
    window.open('https://www.facebook.com/nova.frame', '_blank');
};

const abrirWhatsApp = () => {
    const mensaje = encodeURIComponent('¡Hola! Estoy interesado en sus servicios de fotografía y video cinematográfico. ¿Podrían proporcionarme más información?');
    window.open('https://wa.me/5214772006766?text=' + mensaje, '_blank'); // Reemplaza con tu número de WhatsApp
};

</script>

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
