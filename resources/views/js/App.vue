<script setup>
import 'bootstrap/dist/css/bootstrap.min.css'
import "bootstrap"
import { ref, computed, watchEffect } from 'vue';
import { useFetch } from './composables/fetch.js';
import TheConnexion from './components/TheConnexion.vue';
/*                       import TheSelection from './components/TheSelection.vue'; */
import TheHoraire from './components/TheHoraire.vue';
import TheHeader from './components/TheHeader.vue';
import TheMenuAddTask from './components/TheMenuAddTask.vue';
import 'bootstrap/dist/js/bootstrap.min.js';
import "/node_modules/vue-simple-calendar/dist/style.css";
/* import 'https://fonts.googleapis.com/css2?family=Material+Icons';
import 'https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;700&display=swap'; */

//ira dans section affichage
import { coursChecked, testChecked, eventChecked, devoirChecked } from "./state.js";
import { MDCRipple } from '@material/ripple';
watchEffect(() => {
    affichageSelectionne(coursChecked.value, testChecked.value, eventChecked.value, devoirChecked.value);
})

function affichageSelectionne(cours, test, event, devoir) {
    //fetch uniquement les valeurs true (cours, devoir..)
    console.log("je veux fetch");
    if (cours) {
        console.log("les cours");
    }
    if (test) {
        console.log("les tests");
    }
    if (event) {
        console.log("les events");
    }
    if (devoir) {
        console.log("les devoirs");
    }
}
</script>

<template>
    <!--     @use "@material/fab";
    @include fab.core-styles;
 -->

    <head>
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    </head>

    <div class="app">
        <the-header></the-header>
        <div class="body">
            <the-connexion></the-connexion>
            <the-menu-add-task></the-menu-add-task>

            <!-- <the-selection></the-selection> -->
            <the-horaire></the-horaire>

        </div>
    </div>
</template>



<style scoped>
.app {
    display: flex;
    flex-direction: column;
   min-height: 100vh;
        flex-basis:auto;
        background-color: black;
}

.body {
    display: flex;
    flex-direction: column;
    margin-top: 70px;
    background-color: black;
            flex-basis:auto;
    padding: 10px;
    height: 100%;
}

@media(min-width:769px) {
    .body {
        margin-left: 15%;
        padding: 10px;
        display: flex;
        flex-direction: column;
        height: 100%
    }
}

@media(min-width:993) {
    /*     .body {
  margin-left:10%;
  padding:10px;
} */
}

h1 {
    color: white;
}
</style>
