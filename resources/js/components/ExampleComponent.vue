<template>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">Example Component</div>

          <div class="card-body">I'm an example componentdddddd.</div>
          <v-alert border="left" color="indigo" dark>
            I'm an alert with a border left type info
          </v-alert>

          <v-alert border="left" color="indigo" dark>
            I'm an alert with a border left type info
          </v-alert>
          <v-alert border="left" color="indigo" dark>
            I'm an alert with a border left type info
          </v-alert>
          <v-alert border="left" color="indigo" dark>
            I'm an alert with a border left type info
          </v-alert>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  mounted() {
    console.log("Component mounted.");
  },
};
</script>
