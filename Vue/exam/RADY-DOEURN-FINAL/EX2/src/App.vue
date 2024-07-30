<template>
  <div class="container">
    <!-- Add User Form -->
    <div class="row">
      <div class="col-md-6 mx-auto">
        <form @submit.prevent="addUser" class="mb-3">
          <div class="input-group" >
            <input type="text" class="form-control" placeholder="Name" v-model="name">
            <input type="email" class="form-control" placeholder="Email" v-model="email">
            <button type="submit" class="btn btn-primary" @click="addUser(user)">Add User</button>
          </div>
        </form>
      </div>
    </div>

    <!-- User List -->
    <div class="row">
      <div class="col-md-6 mx-auto">
        <ul class="list-group">
          <li>
            <div v-for="user in users" :key="user.name">
              <span>{{name}}</span> - <span>{{email}}</span>
              <button  class="btn btn-danger btn-sm float-end">Remove</button>
              <button  class="btn btn-primary btn-sm float-end me-2">Edit</button>
            </div>
            <div>
              <div class="input-group">
                <input type="text" class="form-control" v-model="name">
                <input type="email" class="form-control" v-model="email">
                <button  class="btn btn-success btn-sm">Save</button>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      users: [
        { name: 'Alice', email: 'alice@example.com', editMode: false },
        { name: 'Bob', email: 'bob@example.com', editMode: false },
        { name: 'Charlie', email: 'charlie@example.com', editMode: false }
      ],
      newUser: { name: '', email: '' }
    };
  },
  methods: {
    addUser() {
      this.users.push(this.newUser);
      this.newUser = { name: '', email: '' };
      
    },
    removeUser() {
      this.users.splice(this.users.indexOf(this.user), 1);

    },
    toggleEditMode() {
      this.user.editMode =!this.user.editMode;
    },
    saveUserEdit() {
      this.user.editMode = false;   
    }
  }
};
</script>

<style>

</style>
