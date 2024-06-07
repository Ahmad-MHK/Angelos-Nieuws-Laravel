<template>
  <div class="contact-container">
    <div class="contact-form">
      <div class="contact-form-title">
       <p>Contact formulier</p>
       <div class="horizontal-line"></div>
      </div>
      <form>
        <input type="text" placeholder="Naam" class="inputtext" required>
        <input type="email" placeholder="E-mail" class="inputtext" required> 
        <input type="number" placeholder="Telefoonnummer" class="inputtext" required>
        <textarea placeholder="Bericht" class="inputtext2" required></textarea>
        <input type="submit" value="Verzenden" class="submitbutton"> 
      </form>
    </div>
    <div class="contact-details">
       <div class="contact-details-title">
          <p>Contact details</p> 
          <div class="horizontal-line"></div>
       </div>
       <div class="contact-details-info-container">
          <div class="contact-details-info1">
            <p> tel: 0316-582617</p>
            <p>E-mail: info@angerlosnieuws.nl</p>
          </div>
          <div class="contact-details-info2">
            <p>
              Heeft u de krant niet ontvangen, neem dan contact op met 06–51562551.
               U kunt ook op deze website de kranten vinden zowel
               bij archief als bij laatste editie.
            </p>
          </div>
          <div class="contact-details-info3">
            <p>Angerlo’s Nieuws is ook verkrijgbaar bij:</p>
            <p>Kapsalon Judith | Lathum</p>
            <p>Bakkerij Ten Veen | Angerlo</p>
            <p>Spar De Molen | Giesbeek</p>
          </div> 
      </div>
    </div>
  </div>
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