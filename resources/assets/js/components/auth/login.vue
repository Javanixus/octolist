<template lang="html">
  <div :class="$style.BgWhite">
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
    <main>
      <div class="wrap-login universe">
        <div class="wrap-login--content marginMagic">
          <form @keyup.enter.prevent="authUser" class="wrap-login--form" action="index.html" method="post">
            <h3 class="fontSize-l fontWeight-4 textAlignCenter">Selamat Datang</h3>
            <h3 class="fontSize-l fontWeight-4 textAlignCenter marginBottom-xl">Kembali</h3>
            <div class="marginBottom-s">
              <label for="loginUser"></label>
              <input @focus="$event.target.select()" id="loginUser"type="text" v-validate="'required'" :class="{'input-nofill': true, 'input--danger': errors.has('username') }" v-model="logItIn.username" class="input-text fontSize-s" placeholder="Username" name="username">
              <span style="font-size: 12px; color: red;" v-if="errors.has('username')">
                {{ errors.first('username') }}
              </span>
              <label for="loginPass"></label>
              <input @focus="$event.target.select()" id="loginPass" type="password" v-validate="'required'" v-model="logItIn.password" name="password" :class="{'input-nofill': true, 'input--danger': errors.has('password') }" class="input-nofill input-text fontSize-s" placeholder="Password">
              <span style="font-size: 12px; color: red;" v-if="errors.has('password')">
                {{ errors.first('password') }}
              </span>
            </div>
            <p class="red-color textAlignCenter">{{ logItIn.msg }}</p>
            <div class="marginTop-l">
              <button @click.prevent="authUser" :disabled="!authUserIsPassed" type="button" name="button" class="login-button textAlignCenter button button-landing button--xl borderRadius-s button--melting-blue"><div style="background-image: url('/images/spinner.png');" :class="{'spinner':logItIn.loader}"></div>{{ state.login }}</button>
            </div>
          </form>
        </div>
      </div>
    </main>
  </div>
</template>

<script>
  import axios from 'axios';
  import store from './../../store/index';
  import router from './../../router';

  export default {
    data() {
      return {
        logItIn : {
          username: '',
          password: '',
          msg: '',
          loader: false,

      },
      state: {
        login: 'Login',
      },
      }
    },
    computed: {
      authUserIsPassed() {
        return this.logItIn.username && this.logItIn.password;
      },
    },
    beforeCreate(){
      if (store.state.isLogged){
        router.push('/board')
      }
    },
    methods: {
      authUser() {
        this.logItIn.loader = true,
        this.state.login = ''
        axios.post('http://localhost:8000/api/v1/user/login', this.logItIn,{
          headers: {
            'X-Requested-With': 'XMLHttpRequest'
          },
          withCredentials: true
        })
        .then((response) => {
          console.log(response)
          if (response.data.passed == true){
            window.localStorage.setItem('token', response.data.token);
            store.commit('LOGIN_USER');
            router.push('/board');
          }
          else {
            this.logItIn.msg = (response.data.msg);
            this.logItIn.loader = false;
            this.state.login = 'Login';
          }
          () => {
            this.logItIn.loader = false
          }
        }).catch((error) =>{
          console.log(error.response.data)
        })
      }
    }
  }
</script>

<style lang="css" module>
  .BgWhite {
    background: white!important;
    height: 100vh;
  }
</style>
