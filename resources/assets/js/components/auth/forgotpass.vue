<template lang="html">
  <div id="forgotpass" :class="$style.BgWhite">
    <header class="navbar">
      <div class="navbar--landing">
        <div class="button-forgotpass">
        <router-link :to="{path: '/'}">
          <a class="button button--xl button--nofill borderRadius-s">
            Kembali
          </a>
          </router-link>
        </div>
      </div>
    </header>
    <main>
      <div class="wrap-login universe">
        <div class="wrap-login--content marginMagic">
          <form class="wrap-login--form" action="index.html" method="post">
            <h3 class="fontSize-l fontWeight-4 textAlignCenter marginBottom-xl">Lupa password ?</h3>
            <div class="marginBottom-s">
              <input type="email" name="" value="" class="input-nofill input-text fontSize-s" placeholder="Alamat email">
            </div>
            <div class="marginTop-l">
              <button type="button" name="button" class="login-button textAlignCenter button button-landing button--xl borderRadius-s button--melting-blue">Kirimkan aduan saya</button>
            </div>
          </form>
        </div>
      </div>
    </main>
  </div>
</template>

<script>
export default {
}
</script>

<style lang="css" module>
  .BgWhite {
    background: white!important;
    height: 100vh;
  }
</style>

