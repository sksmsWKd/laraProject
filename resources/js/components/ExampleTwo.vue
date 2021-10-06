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
          <div class="card-body">asd</div>
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
          <div class="card-body">
            <button
              type="button"
              class="btn btn-primary"
              data-toggle="modal"
              data-target="#exampleModal"
            >
              Launch demo modal
            </button>
            <button @click="goToEvents" type="button" class="btn btn-primary">
              Save changes
            </button>
            <button @click="postTest" type="button" class="btn btn-primary">
              postTest
            </button>

            <li v-for="todo in todos">{{ todo.title }}</li>

            <button onclick="location.href='/dashboard'">asd</button>
            <!-- Modal -->
            <div
              class="modal fade"
              id="exampleModal"
              tabindex="-1"
              role="dialog"
              aria-labelledby="exampleModalLabel"
              aria-hidden="true"
            >
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                      Modal title
                    </h5>
                    <button
                      type="button"
                      class="close"
                      data-dismiss="modal"
                      aria-label="Close"
                    >
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">...</div>
                  <div class="modal-footer">
                    <button
                      type="button"
                      class="btn btn-secondary"
                      data-dismiss="modal"
                    >
                      Close
                    </button>
                    <button
                      @click="goToEvents"
                      type="button"
                      class="btn btn-primary"
                    >
                      Save changes
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
const axios = require("axios");
export default {
  data() {
    return {
      string: "",
      todos: ["empty"],
    };
  },
  methods: {
    goToEvents: function () {
      axios
        .get("http://localhost:3000/")
        .then(function (response) {
          console.log(response);
          window.open("https://google.com");
        })
        .catch(function (error) {
          console.log(error);
        });

      //요청은 가는데 화면 이동이 안댐 확인할것..
    },
    postTest: function () {
      var vm = this;
      axios
        .get("https://jsonplaceholder.typicode.com/todos")
        .then(function (response) {
          console.log(response);

          vm.todos = response.data;
        })
        .catch(function (error) {
          console.log(error);
        });
    },
  },
};
</script>



