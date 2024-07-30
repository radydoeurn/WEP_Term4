<template>
  <div class="container mt-4">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <div class="mb-3">
          <label for="number1" class="form-label">Number 1</label>
          <input
            type="number"
            id="number1"
            class="form-control"
          />
        </div>
        <div class="mb-3">
          <label for="number2" class="form-label">Number 2</label>
          <input
            type="number"
            id="number2"
            class="form-control"
          />
        </div>
        <div class="mb-3">
          <button class="btn btn-primary me-2">+</button>
          <button class="btn btn-secondary me-2">
            -
          </button>
          <button class="btn btn-danger" >Clear</button>
        </div>
        <div class="mt-3">
          <h5>Result: {{ result }}</h5>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "App",
  data() {
    return {
      number1: "",
      number2: "",
      result: "",
    };
  },
  methods: {
    //write method to add number
    addNumbers() {
      this.result = parseInt(this.number1) + parseInt(this.number2);
      return this.result;      
    },
    //write method to subtract number
    subtractNumbers() {
      this.result = parseInt(this.number1) - parseInt(this.number2);
      return this.result;

    },
    //write method to clear inputs and result
    clearInputs() {
      this.number1 = "";
      this.number2 = "";
      this.result = "";
    },
  },
};
</script>

<style>
body {
  margin-top: 50px;
}
</style>
