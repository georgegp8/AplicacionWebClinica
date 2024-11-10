<template>
    <form @submit.prevent="submitForm">
      <div>
        <label>Número de tarjeta</label>
        <input v-model="cardNumber" @input="maskCardNumber" placeholder="XXXX XXXX XXXX XXXX" />
      </div>
      <div>
        <label>Fecha de vencimiento</label>
        <input v-model="expiryDate" @input="maskExpiryDate" placeholder="MM/YY" />
      </div>
      <div>
        <label>CVV</label>
        <input type="password" v-model="cvv" maxlength="3" placeholder="CVV" />
      </div>
      <button type="submit">Enviar</button>
    </form>
  </template>
  
  <script>
  export default {
    data() {
      return {
        cardNumber: '',
        expiryDate: '',
        cvv: ''
      };
    },
    methods: {
      maskCardNumber() {
        this.cardNumber = this.cardNumber.replace(/\D/g, '').replace(/(\d{4})(?=\d)/g, '$1 ');
      },
      maskExpiryDate() {
        this.expiryDate = this.expiryDate.replace(/\D/g, '').replace(/(\d{2})(?=\d)/, '$1/');
      },
      submitForm() {
        alert('Formulario enviado');
      }
    }
  };
  </script>
  
  <style scoped>
  /* Estilos opcionales para el formulario */
  form {
    display: flex;
    flex-direction: column;
    gap: 1rem;
    max-width: 300px;
  }
  </style>
  