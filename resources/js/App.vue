<template>
  <v-app style="background-color: #34495E;">

    <!-- Toolbar | Navbar -->
    <v-toolbar color="primary" dark class="elevation-0">
      <v-toolbar-title>
        <v-avatar size="40" :tile="true">
          <img src="images/logo.png">
        </v-avatar>
        Laravel Passport Vue
      </v-toolbar-title>
      <v-spacer></v-spacer>
      <v-toolbar-items>
        <v-btn @click="logout()" falt icon v-show="token !== null">
          <v-icon>fas fa-sign-out-alt</v-icon>
        </v-btn>
      </v-toolbar-items>
    </v-toolbar>
    <v-divider dark></v-divider>

    <br>

    <v-content>
      <v-layout justify-center>
        <v-flex xs10 lg8>
          <router-view/>
        </v-flex>
      </v-layout>  
    </v-content>

  </v-app>
</template>

<script>

  import { mapState, mapActions } from 'vuex'

  export default {

    name: 'App',

    computed: {
      ...mapState([
        'token'
      ])
    },

    methods: {
      ...mapActions([
        'logout'
      ])
    }

  }

</script>