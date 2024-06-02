import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
});
//Vite é uma ferramenta de construção e desenvolvimento de front-end extremamente rápida, criada por Evan You, o mesmo criador do Vue.js. Vite foi projetado para proporcionar uma experiência de desenvolvimento rápida, moderna e eficiente. Ele é especialmente útil para projetos que utilizam frameworks JavaScript modernos como Vue, React e, mais recentemente, tem sido adotado em projetos Laravel para substituir ferramentas de construção mais tradicionais como o Laravel Mix.

//No Laravel, Vite está substituindo o Laravel Mix como a ferramenta de construção recomendada para projetos que envolvem front-end moderno. A configuração que você forneceu mostra como o Vite está sendo integrado no seu projeto Laravel usando o plugin laravel-vite-plugin.