<template>
  <div class="container-fluid mt-5 justify-content-center">
    <div class="row">
      <div class="col mt-3">
        <div class="card">
          <div class="card-header">asddddddd456546</div>
          <div class="card-body">zxc</div>
        </div>
      </div>
      <div class="w-100"></div>
      <div class="col mt-3">
        <div class="card">
          <div class="card-header">zz567asdasdasdasd</div>
          <div class="card-body">456asd</div>
        </div>
      </div>
    </div>
    <div class="w-100"></div>
    <div class="row">
      <div class="col mt-3">
        <div class="card">
          <div class="card-header">
            <input type="text" placeholder="여기 입력" v-model="string" />
          </div>
          <div class="card-body">
            <p>{{ string }}</p>
          </div>
        </div>
      </div>
      <div class="w-100"></div>
      <div class="col mt-3">
        <div class="card">
          <div class="card-header">aasadsdasd</div>
          <div v-if="show()" class="card-body">456123132345345</div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      string: "",
    };
  },
  methods: {
    // show: function () {
    //   if (string.length > 5) {
    //     return true;
    //   }
    //   //여기 지워야지 다시 화면나옴.
    // },
  },
};
</script>



