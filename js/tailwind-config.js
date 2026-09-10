/* ==========================================================================
   Estoff Car - Configuração do Tailwind (CDN)
   Deve ser carregado DEPOIS do script do Tailwind e ANTES do <body>.
   ========================================================================== */

tailwind.config = {
    theme: {
        extend: {
            colors: {
                brandRed: '#FF2A2A',
                brandRedDark: '#CC0000',
                brandDark: '#0D0D0D',
                brandGrayDark: '#1A1A1A',
                brandGrayCard: '#242424',
            },
            fontFamily: {
                sans: ['Roboto', 'sans-serif'],
                heading: ['Montserrat', 'sans-serif'],
            }
        }
    }
};
