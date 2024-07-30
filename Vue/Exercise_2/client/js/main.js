const URL = 'http://localhost:3000/api/v1/todos';
function getTodo(res) {
   // TODO
   let student = res.data.data;
   let tr = '';
   for(let i = 0; i<student.length; i++){
      console.log(student[i]);
      let itComplete = '';
      let text = '';
      if(student[i].itComplete == false){
         itComplete = 'badge bg-danger';
         text = 'TODO';
      }else{
         itComplete = 'badge bg-success';
         text = 'DONE';
      }
      tr += `
      <tr>
                    <td>${student[i].id}</td>
                    <td>${student[i].title}</td>
                    <td>${student[i].description}</td>
                    <td><span class="${itComplete}">${text}</span></td>
                </tr>
      `
   }
   document.querySelector('tbody').innerHTML = tr;
}



// TODO : request axios.get(...)...
axios.get(URL).then(getTodo);
