<template>
  <div class="container-fluid">
    <div class="row justify-content-center">
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
            <span class="right">$ {{ item.USD }}</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import axios from "axios";
import SyncLoader from "vue-spinner/src/PulseLoader.vue";

export default {
  components: { SyncLoader },
  data: () => ({
    cryptos: [],
    color: "#fff",
    size: "30px",
    loading: true,
    errors: [],
    cryptocurrency: ["BTC", "ETH"],
    currency: ["USD", "EUR"]
  }),

  created() {
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
        console.log(this.errors);
      });
  },

  mounted() {
    console.log("Component mounted.");
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
  font-size: 20px;
}
</style>
