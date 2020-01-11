<template>
  <div class="container">
    <carousel
      v-if="this.cryptocurrency && !this.loading"
      :items="breakpoints"
      :nav="false"
      :dots="true"
      :loop="true"
    >
      <div class="cardItem text-center" v-for="(item, index) in cryptocurrency" :key="index">
        <div class="currencyItem">
          <i class="fab fa-3x fa-bitcoin"></i>
          <h4 class="text-center">{{ item['CoinInfo'].Name }}</h4>
        </div>
        <a class="btn btn-primary" v-on:click="addItem(item)">
          <i class="fas fas-3x fa-plus text-white"></i>
        </a>
        <a class="btn btn-danger" v-on:click="removeItem(index)">
          <i class="fas fas-3x fa-times text-white"></i>
        </a>
      </div>
    </carousel>
    <div class="row justify-content-center pt-3">
      <sync-loader :loading="this.loading" :color="this.color" :size="this.size"></sync-loader>
      <div
        class="col-md-12 col-lg-12"
        v-on="loading"
        v-for="(item, key) in cryptos"
        v-bind:key="item.key"
      >
        <div class="card shadow m-2">
          <div class="card-body">
            <span class="left">{{ key }}</span>
            <span class="right price">$ {{ item.USD }}</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import axios from "axios";
import SyncLoader from "vue-spinner/src/PulseLoader.vue";
import carousel from "vue-owl-carousel2";

export default {
  components: { SyncLoader, carousel },

  data() {
    return {
      cryptos: [],
      color: "#fff",
      size: "30px",
      screen: {},
      loading: true,
      errors: [],
      cryptocurrency: ["BTC"],
      currency: ["USD"],
      breakpoints: this.sizeRecognition()
    };
  },

  created() {
    this.sizeRecognition();
    this.fetchCryptos();
    this.fetchCryptocurrency();
  },

  methods: {
    sizeElement() {
      this.screen = window.innerWidth;
      return this.screen;
    },

    sizeRecognition() {
      if (this.sizeElement() < 426) {
        let item = 2;
        return item;
      } else if (this.sizeElement() > 426 && this.sizeElement() < 740) {
        let item = 3;
        return item;
      } else if (this.sizeElement() > 768 && this.sizeElement() < 1036) {
        let item = 6;
        return item;
      } else if (this.sizeElement() > 1036 && this.sizeElement() < 1500) {
        let item = 8;
        return item;
      } else {
        let item = 5;
        return item;
      }
    },

    fetchCryptos() {
      axios
        .get(
          `https://min-api.cryptocompare.com/data/pricemulti?fsyms=${this.cryptocurrency}&tsyms=${this.currency}`
        )
        .then(response => {
          this.cryptos = response.data;
          this.loading = false;
        })
        .catch(e => {
          this.errors.push(e);
          this.loading = false;
        });
    },

    fetchCryptocurrency() {
      axios
        .get(
          `https://min-api.cryptocompare.com/data/top/totaltoptiervolfull?limit=10&tsym=${this.currency}`
        )
        .then(response => {
          this.cryptocurrency = response.data.Data;
          console.log(this.cryptocurrency);
          this.loading = false;
        })
        .catch(e => {
          this.errors.push(e);
          this.loading = false;
        });
    },

    addItem(item) {
      this.cryptocurrency.push(item["CoinInfo"].Name);
      this.fetchCryptos();
      this.fetchCryptocurrency();
    },

    removeItem(index) {
      this.$delete(this.cryptocurrency, index);
    }
  },

  mounted() {
    // console.log("Component mounted.");
  }
};
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style>
span.left {
  font-weight: bold;
  font-size: 25px;
}
span.right {
  float: right;
  /* font-size: 20px; */
}

.currencyItem i {
  padding: 20px;
  padding-top: 10px;
  padding-bottom: 10px;
  color: grey;
}

.price {
  font-size: 25px;
}

/* .addButton {
  padding: 8px;
}

.addButton i {
  padding: 5px;
  font-size: 18px;
  color: green;
}

.removeButton {
  padding: 8px;
}

.removeButton i {
  padding: 5px;
  font-size: 18px;
  color: red;
} */

.currencyItem i:hover {
  padding: 20px;
  color: orange;
}

.cardItem {
  background: #fff;
  border-radius: 10px;
  margin: 10px;
  padding: 15px;
  padding-top: 2px;
}
</style>
