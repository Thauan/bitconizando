<template>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-12" v-for="(value, key) in cryptos">
                <div class="card shadow m-2">
                    <div class="card-body">
                        <h2>{{ key }}</h2> ${{ value.USD }}
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
                // console.log(response)
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
