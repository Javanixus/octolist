<template>
<div :class="$style.bgwhite">
    <header class="navbar">
      <div class="navbar--landing">
        <div class="button-forgotpass">
          <router-link :to="{ path: '/forgot'}">
            <a class="button button--xl button--nofill borderRadius-s">
                Lupa Password
            </a>
          </router-link>
        </div>
      </div>
    </header>
    <main class="content--landing">
      <div class="wrap-landing">
        <div data-v-4c1678ef="" data-v-6ef1d408="" class="floating"><svg data-v-4c1678ef="" xmlns="http://www.w3.org/2000/svg" version="1.1" id="_x33_" x="0" y="0" width="46.33" height="43" viewBox="0 0 46.33 43" enable-background="new 0 0 46.333 43" xml:space="preserve" class="red-square spin shape"><path data-v-4c1678ef="" fill="#F95943" d="M19.34 37.33c-2.26 0-4.32-1.34-5.25-3.4L8.14 20.59c-1.29-2.89 0.01-6.3 2.9-7.59l13.33-5.95c0.74-0.33 1.53-0.5 2.34-0.5 2.26 0 4.32 1.34 5.25 3.4l5.95 13.33c1.29 2.89-0.01 6.3-2.9 7.59l-13.33 5.95C20.94 37.16 20.15 37.33 19.34 37.33zM26.72 11.56c-0.1 0-0.2 0.02-0.3 0.07l-13.33 5.95c-0.37 0.17-0.54 0.61-0.37 0.98l5.95 13.33c0.15 0.33 0.46 0.44 0.68 0.44 0.1 0 0.2-0.02 0.3-0.06l13.33-5.95c0.38-0.17 0.54-0.61 0.38-0.98l-5.95-13.33C27.25 11.67 26.94 11.56 26.72 11.56z"></path></svg>        <svg data-v-4c1678ef="" xmlns="http://www.w3.org/2000/svg" version="1.1" id="_x33_" x="0" y="0" width="51" height="29" viewBox="0 0 51 29" enable-background="new 0 0 51 29" xml:space="preserve" class="yellow-line spin shape" style="position: absolute;right: 5em;"><path data-v-4c1678ef="" fill="#FFCC00" d="M42.74 20.21c-0.17 0-0.34-0.02-0.51-0.05L8.26 13.06c-1.35-0.28-2.22-1.61-1.94-2.96C6.6 8.75 7.93 7.88 9.28 8.16l33.97 7.1c1.35 0.28 2.22 1.61 1.94 2.96C44.94 19.4 43.9 20.21 42.74 20.21z" style=""></path></svg>        <svg data-v-4c1678ef="" xmlns="http://www.w3.org/2000/svg" version="1.1" id="_x33_" x="0" y="0" width="76" height="66" viewBox="0 0 76 66" enable-background="new 0 0 76 66" xml:space="preserve" class="blue-square-big spin shape" style="position: absolute;left: 40em;"><path data-v-4c1678ef="" fill="#5276FF" d="M34.86 56.17c-4.53 0-8.71-2.46-10.92-6.41l-7.31-13.09c-3.36-6.02-1.2-13.65 4.82-17.01l13.1-7.31c1.86-1.04 3.97-1.59 6.09-1.59 4.53 0 8.72 2.46 10.92 6.41l7.31 13.1c3.36 6.02 1.2 13.65-4.82 17.01l-13.1 7.31C39.09 55.62 36.98 56.17 34.86 56.17zM40.62 15.76c-1.27 0-2.53 0.33-3.65 0.95l-13.1 7.31c-3.61 2.02-4.91 6.6-2.89 10.21l7.31 13.1c1.32 2.37 3.84 3.85 6.56 3.85 1.27 0 2.53-0.33 3.65-0.95l13.1-7.31c3.61-2.02 4.91-6.59 2.89-10.2L47.18 19.6C45.86 17.23 43.34 15.76 40.62 15.76z"></path></svg>        <svg data-v-4c1678ef="" xmlns="http://www.w3.org/2000/svg" version="1.1" id="_x33_" x="0" y="0" width="33" height="33" viewBox="0 0 33 33" enable-background="new 0 0 33 33" xml:space="preserve" class="blue-circle shape" style="position: absolute;right: 30em;"><path data-v-4c1678ef="" fill="#5276FF" d="M17.23 27.52c-5.75 0-10.43-4.68-10.43-10.43 0-5.75 4.68-10.43 10.43-10.43s10.43 4.68 10.43 10.43C27.66 22.84 22.98 27.52 17.23 27.52zM17.23 11.66c-2.99 0-5.43 2.44-5.43 5.43s2.44 5.43 5.43 5.43 5.43-2.44 5.43-5.43S20.22 11.66 17.23 11.66z"></path></svg>        <svg data-v-4c1678ef="" xmlns="http://www.w3.org/2000/svg" version="1.1" id="_x33_" x="0" y="0" width="66" height="64.5" viewBox="0 0 66 64.5" enable-background="new 0 0 65.996 64.497" xml:space="preserve" class="green-rectangle-big spin shape"
            style="right: 20em;position: absolute;top: 80px;"><path data-v-4c1678ef="" fill="#45DBBE" d="M42.24 55.9c-2.32 0-4.58-0.82-6.36-2.3L10.11 32.16c-2.04-1.7-3.3-4.09-3.54-6.74 -0.24-2.65 0.56-5.23 2.26-7.27l7.15-8.59c1.9-2.28 4.68-3.58 7.65-3.58 2.32 0 4.57 0.82 6.36 2.3l25.76 21.44c2.04 1.7 3.3 4.09 3.54 6.74 0.24 2.65-0.56 5.23-2.26 7.27l-7.15 8.59C47.99 54.59 45.2 55.9 42.24 55.9zM23.63 10.98c-1.48 0-2.86 0.65-3.81 1.78l-7.15 8.59c-0.85 1.02-1.24 2.3-1.12 3.62 0.12 1.32 0.75 2.51 1.76 3.35L39.07 49.75c0.9 0.75 1.99 1.15 3.16 1.15 1.48 0 2.86-0.65 3.81-1.78l7.15-8.59c0.85-1.02 1.24-2.3 1.12-3.61 -0.12-1.32-0.75-2.5-1.76-3.35L26.79 12.12C25.89 11.37 24.79 10.98 23.63 10.98z"></path></svg>        <svg data-v-4c1678ef="" xmlns="http://www.w3.org/2000/svg" version="1.1" id="_x33_" x="0px" y="0px" width="47px" height="49px" viewBox="0 0 47 49" enable-background="new 0 0 47 49" xml:space="preserve" class="yellow-circle shape" style="position: absolute;right: 20em;bottom: 0;"><g data-v-4c1678ef=""><path data-v-4c1678ef="" fill="#FFD00E" d="M24.226 44.19c-10.348 0-18.767-8.418-18.767-18.766 0-10.347 8.419-18.766 18.767-18.766s18.766 8.418 18.766 18.766C42.991 35.772 34.573 44.19 24.226 44.19zM24.226 11.659c-7.591 0-13.767 6.175-13.767 13.766 0 7.591 6.176 13.766 13.767 13.766s13.766-6.175 13.766-13.766C37.991 17.834 31.816 11.659 24.226 11.659z"></path></g></svg>        <svg data-v-4c1678ef="" xmlns="http://www.w3.org/2000/svg" version="1.1" id="_x33_" x="0" y="0" width="131.99" height="52.5" viewBox="0 0 131.99 52.5" enable-background="new 0 0 131.994 52.498" xml:space="preserve" class="green-line spin shape"
            style="bottom: 0;position: absolute;right: 5em;"><path data-v-4c1678ef="" fill="#45DBBE" d="M13.33 42.03c-1.11 0-2.12-0.74-2.42-1.87 -0.35-1.34 0.45-2.7 1.79-3.05L124.43 7.91c1.33-0.35 2.7 0.45 3.05 1.79 0.35 1.34-0.45 2.7-1.79 3.05L13.96 41.95C13.75 42 13.54 42.03 13.33 42.03z"></path></svg>        <svg data-v-4c1678ef="" xmlns="http://www.w3.org/2000/svg" version="1.1" id="_x33_" x="0" y="0" width="111.66" height="52.64" viewBox="0 0 111.66 52.64" enable-background="new 0 0 111.66 52.64" xml:space="preserve" class="red-line shape spin"
            style="position: absolute;left: 30px;bottom: 0;"><path data-v-4c1678ef="" fill="#F95943" d="M19.02 43.76c-1.01 0-1.97-0.62-2.34-1.63 -0.48-1.29 0.18-2.73 1.47-3.21l71.08-26.43c1.29-0.48 2.73 0.18 3.21 1.47 0.48 1.29-0.18 2.73-1.47 3.22l-71.08 26.43C19.6 43.71 19.31 43.76 19.02 43.76z"></path></svg>        <svg data-v-4c1678ef="" xmlns="http://www.w3.org/2000/svg" version="1.1" id="_x33_" x="0" y="0" width="76" height="66" viewBox="0 0 76 66" enable-background="new 0 0 76 66" xml:space="preserve" class="blue-square-small shape" style="position: absolute;bottom: -10em;left: 30em;"><path data-v-4c1678ef="" fill="#5276FF" d="M38.04 49.39c-2.46 0-4.77-0.97-6.49-2.74l-6.89-7.05c-1.69-1.73-2.61-4.02-2.58-6.44 0.03-2.42 1-4.69 2.73-6.38l7.06-6.89c1.7-1.66 3.95-2.58 6.34-2.58 2.47 0 4.77 0.97 6.49 2.74l6.89 7.06c1.69 1.73 2.61 4.02 2.58 6.45 -0.03 2.42-1 4.69-2.73 6.38l-7.05 6.89C42.67 48.47 40.42 49.39 38.04 49.39zM38.21 22.3c-1.07 0-2.08 0.41-2.84 1.16l-7.05 6.89c-0.78 0.76-1.21 1.78-1.23 2.87 -0.01 1.09 0.4 2.11 1.16 2.89l6.89 7.06c0.77 0.79 1.81 1.23 2.91 1.23 1.07 0 2.08-0.41 2.84-1.16l7.06-6.88c0.78-0.76 1.22-1.78 1.23-2.86 0.01-1.09-0.4-2.12-1.16-2.89l-6.88-7.05C40.35 22.74 39.32 22.3 38.21 22.3z"></path></svg>        <svg data-v-4c1678ef="" xmlns="http://www.w3.org/2000/svg" version="1.1" id="_x33_" x="0" y="0" width="66" height="64.5" viewBox="0 0 66 64.5" enable-background="new 0 0 65.996 64.497" xml:space="preserve" class="green-rectangle-small shape spin"
            style="position: absolute;left: 10em;top: -2em;"><path data-v-4c1678ef="" fill="#45DBBE" d="M39.24 44.21c-0.67 0-1.31-0.14-1.92-0.43l-11.79-5.56c-2.25-1.06-3.21-3.75-2.15-6l3.42-7.25c0.74-1.57 2.34-2.58 4.08-2.58 0.67 0 1.32 0.15 1.92 0.43l11.78 5.56c1.09 0.51 1.91 1.42 2.32 2.55 0.41 1.13 0.35 2.36-0.17 3.45l-3.42 7.25C42.57 43.2 40.97 44.21 39.24 44.21zM28.11 33.91l10.89 5.14 3-6.35 -10.89-5.13L28.11 33.91z"></path></svg>        <svg data-v-4c1678ef="" xmlns="http://www.w3.org/2000/svg" version="1.1" id="_x33_" x="0" y="0" width="71.75" height="71" viewBox="0 0 71.75 71" enable-background="new 0 0 71.75 71" xml:space="preserve" class="yellow-triangle spin shape" style="position: absolute;right: 30em;bottom: 50px;"><path data-v-4c1678ef="" fill="#FFD00E" d="M15.74 62.29L15.74 62.29c-3.24 0-4.7-1.65-5.29-2.64 -0.83-1.41-1.39-3.88 0.7-7.67L34.58 9.41c2.27-4.13 5.03-4.75 6.48-4.75 2.74 0 5.11 2.04 6.5 5.6l10.99 28.18c1.23 3.15 1.09 6.48-0.38 9.36s-4.09 4.94-7.37 5.79l-31.96 8.27C17.73 62.15 16.69 62.29 15.74 62.29zM14.76 57.11c0 0 0.23 0.19 0.98 0.19l0 0c0.52 0 1.14-0.09 1.84-0.27l31.96-8.27c1.87-0.48 3.35-1.63 4.17-3.22s0.88-3.47 0.18-5.27L42.89 12.08c-0.69-1.76-1.49-2.42-1.84-2.42 -0.36 0-1.22 0.58-2.09 2.16L15.53 54.39C14.59 56.1 14.68 56.98 14.76 57.11L14.76 57.11z"></path></svg>
        </div>
        <div class="wrap-landing__content">
          <div class="cover-preview">
            <div class="cover-preview__content">
              <img src="../../images/dribbble.gif" alt="Octolist Introduce">
              <div class="cover-preview__disdragg" title="Octolist Introduce"></div>
            </div>
          </div>
          <div class="landing-desc">
            <div class="landing-desc__content">
              <p class="ask-subheading">CARA KERJA KAMI</p>
              <!-- CARA KERJA KAMI -->
              <!-- HOW ITS WORK  -->
              <h1>Merencanakan Alur Proyek</h1>
              <!-- Merencanakan Alur Proyek atau Rencanakan Alur Proyek-->
              <!-- Unleash your inner startup -->
              <p>Membuat rencana Proyek dan mengatur dengan mudah. Octolist membantu anda memaksimalkan proyek dan tim.</p>
              <!-- Membuat rencana Proyek dan mengatur dengan mudah. Octolist membantu anda memaksimalkan proyek dan tim. -->
              <!-- Plan projects and manage resources with ease. Octolist helps you get the most out of your projects and teams. -->
              <div class="wrap-landing-button">
                <router-link :to="{path: '/login'}">
                  <a :class="{'isCollapsed': !userLogged }" class="button button-landing button--xl borderRadius-s button--melting-blue">
                      {{ 'Masuk '+ this.dataUser.name}}
                      <!-- Masuk -->
                      <!-- Login Now  -->
                  </a>
                  <a :class="{'isCollapsed': !!userLogged }" class="button button-landing button--xl borderRadius-s button--melting-blue">
                      {{'Masuk ' }}
                      <!-- Masuk -->
                      <!-- Login Now  -->
                  </a>
                </router-link>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <footer>
      <div class="footer--landing-page">
        <ul>
          <li><a href="#">Hubungi Kami</a></li>
          <li>
            <router-link :to="{path: '/about'}">
              <a>Tentang</a>
            </router-link>
          </li>
          <li><a href="#">Kebijakan Privasi</a></li>
          <li><a href="#">FAQ</a></li>
        </ul>
      </div>
    </footer>
</div>
</template>

<script>
    import axios from 'axios'
    import router from './../router'
    import store from './../store/index';

    export default {
        beforeCreate(){
          if (store.state.isLogged){
            axios.get('http://localhost:8000/api/v1/student', {
                headers: {
                    "Authorization": `Bearer ${window.localStorage.getItem('token')}`,
                }
            })
            .then((response) => {
                this.dataUser = response.data.profile;
                // console.log(response);
                this.userLogged = true;
            })
          }
        },
        data(){
          return {
            dataUser: [],
            userLogged: false,
          }
        }
    }
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style module>
.bgwhite {
  background-color: white;
  width: 100%;
  min-height: 100vh;
}
</style>
