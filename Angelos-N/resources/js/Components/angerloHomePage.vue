<div class="adverteerders"></div>
<template> 
    <div class="homepage-container">
      <div class="container">
        <div class="laatste-nieuws">
          <router-link class="route" to="/laatste-nieuws"><div class="laatste-nieuws-image"></div></router-link>
          <h3>Lentefeest Paulusschool</h3>
        </div>
        <div class="column-container">
          <div class="item">
            <div class="arrows">
              <div class="slider-images">
                <div class="slider-img">
                  <h3>Brandweer</h3>
                  <img src="/slider-image-brandweer.png" alt="slider image">
                </div>
                <div class="slider-img">
                  <h3>Politie</h3>
                  <img src="/slider-image-politie.jpg" alt="slider image">
                </div>
                <div class="slider-img">
                  <h3>Overheid</h3>
                  <img src="/slider-image-overheid.jpg" alt="slider image">
                </div>
              </div>
              <!-- <i class="fa-solid fa-chevron-left fa-2x"></i>
              <i class="fa-solid fa-chevron-right fa-2x"></i> -->
            </div>
            <div class="slider-images">
            </div>
          </div>
          <div class="item"></div>
        </div>
      </div>
      <div class="borapiemel">
        <a href=""><div class="borakontje">borakontje</div></a>
        <a href=""><div class="borakontje">borakontje</div></a>
        <a href=""><div class="borakontje">borakontje</div></a>
      </div>
      <div class="weather-container">
        <div class="weather-title">Het weer in Angerlo </div>
        <div class="day-cont" v-for="(day, index) in weather.forecast" style="margin-right: 20px;">
          <p>Max: {{ day.maxtemp }}°C</p>
          <p>Min: {{ day.mintemp }}°C</p> 
          <p> <i class="fa-solid fa-droplet"></i>{{ day.rain }}%</p>
          <!-- <p><i class="fa-solid fa-wind"></i> {{ day.wind }} km/u</p> -->
          <div class="day-info">
            <img :src="day.icon" alt="icon" class="weatherimg"/> 
            <p class="day" v-if="index === 0">Vandaag</p>
            <p class="day" v-else-if="index === 1">Morgen</p>
            <p class="day" v-else>{{ day.date }}</p>
          </div>
        </div>
      </div>
    </div>
</template>

<script>
export default {
  data() {
    return {
      weather: {
        location: '',
        lastUpdated: '',
        localTime: '',
        now: {
          temp: '',
          wind: '',
          humidity: '',
          condition: {
            icon: '',
            text: ''
          },
        },
        forecast: []
      }
    };
  },
  methods: {
    fetchForecast: async function() {
      let response = await fetch('http://api.weatherapi.com/v1/forecast.json?key=8f17aac2b90f43fea5a75922241904&q=Angerlo&days=6&aqi=no&alerts=no');
      response = await response.json();

      for (let i = 0; i <= 5; i++) {
        this.weather.forecast.push({
          maxtemp: response.forecast.forecastday[i].day.maxtemp_c,
          mintemp: response.forecast.forecastday[i].day.mintemp_c,
          wind: response.forecast.forecastday[i].day.maxwind_kph,
          rain: response.forecast.forecastday[i].day.daily_chance_of_rain,
          icon: response.forecast.forecastday[i].day.condition.icon,
          text: response.forecast.forecastday[i].day.condition.text,
          date: response.forecast.forecastday[i].date,
        })
      }
    }
  },
  created() {
    this.fetchForecast();
  }
};

document.addEventListener('DOMContentLoaded', async function() {

  function delay(time) {
    return new Promise(resolve => setTimeout(resolve, time));
  }

  // waiting for dom to load elements
  await delay(300);
  let sliderImages = document.querySelector('.slider-images');
  let images = document.querySelectorAll('.slider-images img');

  const slideSlider = async () => {
    // move the first image to the end
    document.querySelector('.slider-images .slider-img:first-of-type').style.marginLeft = '-100%';
    document.querySelector('.slider-images .slider-img:first-of-type').style.transition = 'margin-left 1s';
    await delay(1000);
    document.querySelector('.slider-images .slider-img:first-of-type').style.marginLeft = 'unset';
    document.querySelector('.slider-images .slider-img:first-of-type').style.transition = 'unset';
    sliderImages.appendChild(document.querySelector('.slider-images .slider-img:first-of-type'));
    await delay(3000);
    slideSlider();
  };
  slideSlider();
});
</script>