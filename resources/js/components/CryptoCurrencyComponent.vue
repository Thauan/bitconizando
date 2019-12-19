<template>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-12" v-for="(item, key) in cryptos" v-bind:key="item.key">
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

    import axios from 'axios'

    export default {
        data: () => ({
            cryptos: [],
            errors: [],
        }),

        created() {
            axios.get('https://min-api.cryptocompare.com/data/pricemulti?fsyms=BTC,ETH&tsyms=USD,EUR')
            .then(response =>{
                this.cryptos = response.data
                console.log(response)
            })
            .catch(e =>{
                this.errors.push(e);
            })
        },

        mounted() {
            console.log('Component mounted.')
        }
    }
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style>
  span.left {
    font-weight: bold;
    font-size: 25px;
  }
  span.right {
    float:right;
    font-size: 20px;
  }
</style>
