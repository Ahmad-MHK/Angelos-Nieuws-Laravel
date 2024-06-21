<template>
  <div class="adverteerders"><p>Angerlo's Nieuws zoekt adverteerders, neem contact met ons op via info@angerlosnieuws.nl</p></div>
    <header>
      <div class="logo-container">
        <a href="/">
          <img class="header-logo" src="/angerlo-logo.png" alt="Angerlo logo">
        </a>
        <div class="vertical-devider"></div>
      </div>

      <nav>
        <ul>
          <router-link class="route" to="/laatste-nieuws">laatste nieuws</router-link>
          <router-link class="route" to="/laatste-edities">Laatste edities</router-link>
          <router-link class="route" to="/contact">contact</router-link>
        </ul>
      </nav>

      <div class="account-container">
        <span class="weather">
          <span>
            {{ weather.localTime }} 
          </span>
          <img alt="weather icon" :src="weather.now.condition.icon">
          {{ weather.now.temp }}°
        </span>
        <router-link class="route" to="/Inloggen"><button>Inloggen</button></router-link>
      </div>
    </header>
</template>

<script>
export default {
  data() {
    return {
      weather: {
        localTime: '',
        now: {
          temp: '',
          condition: {
            icon: '',
          },
        },
      }
    };
  },
  methods: {
    fetchWeather: async function() {
      let response = await fetch('http://api.weatherapi.com/v1/current.json?key=8f17aac2b90f43fea5a75922241904&q=Angerlo&aqi=no');
      response = await response.json();

      this.weather.localTime = response.location.localtime;
      this.weather.now.temp = response.current.temp_c;
      this.weather.now.condition.icon = response.current.condition.icon;
    }
  },
  created() {
    this.fetchWeather();
  }
};
</script>