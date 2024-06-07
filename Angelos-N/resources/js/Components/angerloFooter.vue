<template>
    <footer>

      <div class="contact">
        <div class="contact-title">Contact</div>
        <p>Tel: 0316-582617</p>
        <p>E-mail: info@angerlosnieuws.nl </p>
        <p>Heeft u de krant niet ontvangen,<br>neem dan contact op met 06–51562551.</p>
        <ul>
          <a href="https://www.facebook.com/angerlos.nieuws"><i class="fa-brands fa-facebook fa-2x"></i></a>
        </ul>
      </div>
      <div class="nieuws-container">
        <div class="nieuws-title"><a href="/">Angerlo's Nieuws</a></div>
        <ul>
          <router-link class="route" to="/laatste-nieuws">laatste nieuws</router-link>
          <router-link class="route" to="/laatste-edities">Laatste edities</router-link>
          <router-link class="route" to="/contact">Contact</router-link>
        </ul>
      </div>  
      <div class="info-footer">
        <router-link class="route" to="/"><img class="footer-logo" src="/angerlo-logo.png" alt="Angerlo logo"></router-link>
        <div class="info-container">
          <p>KVK: </p>
          <p>BTW: </p>
          <div class="info-title"> Angerlo’s Nieuws is ook verkrijgbaar bij: </div>
          <p>Kapsalon Judith | Lathum</p>
          <p>Bakkerij Ten Veen | Angerlo</p>
          <p>Spar De Molen | Giesbeek</p>
       </div>
      </div>
    </footer>
    <div class="footerbar"><p>Een website gemaakt door Ahmad, Bora, Daan en Jayro</p></div>
</template>

<script>
export default {
  data() {
    return {
    };
  },
  methods: {
  },
};
</script>