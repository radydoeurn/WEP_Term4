<template>
  <div class="container mt-4">
    <div class="row">
      <div class="col-md-6">
        <h1 class="mb-4">Student Information Form</h1>
        <div class="mb-3">
          <label for="name" class="form-label" >Name</label>
          <input
            type="text"
            id="name"
            class="form-control"
            v-model="name"
          />
        </div>
        <div class="mb-3">
          <label for="gender" class="form-label">Gender</label>
          <select id="gender" class="form-select" v-model="gender">
            <option value="" disabled>Select Gender</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Other">Other</option>
          </select>
        </div>
        <div class="mb-3">
          <label for="dob" class="form-label">Date of Birth</label>
          <input
            type="date"
            id="dob"
            class="form-control"
            v-model="date_of_birth"
          />
        </div>
        <div class="mb-3">
          <label for="subject" class="form-label">Subject</label>
          <input
            type="text"
            id="subject"
            class="form-control"
            v-model="subject"
          />
        </div>
        <div class="mb-3">
          <label for="score" class="form-label">Score</label>
          <input
            type="number"
            id="score"
            class="form-control"
            v-model="score"
          />
        </div>
      </div>
      <div class="col-md-6">
        <div class="mt-4">
          <h2>Student Information</h2>
          <p>Name: {{name}}</p>
          <p>Gender: {{gender}}</p>
          <p>Date of Birth: {{date_of_birth}}</p>
          <p>Subject: {{subject}} </p>
          <p>Score: {{score}}</p>
          <p>Status: {{status}}</p>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "App",
  data(){
    return {
      name: "",
      gender: "",
      date_of_birth: "",
      subject: "",
      score: "",
      status: ""
    };
  },
  watch:{
    name(){
        return this.name;
    },
   score(){
        const score = this.score;
        if (score<50){
          this.status = "Fail";
        }else if (score >=50){
          this.status = "Pass";
        }
  },

  }
};
</script>

<style>
body {
  margin-top: 50px;
}
</style>
