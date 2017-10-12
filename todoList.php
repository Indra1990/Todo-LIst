<!DOCTYPE html>
<html>
  <head>
    <style media="screen">
      .completed{
        text-decoration: line-through;
      }
    </style>
    <title>Vue Todo List</title>
  </head>
  <body>
    <div class="" id="app">
      <ul>
        <input type="text" name="" value="" v-model="newTodo" v-on:keyup.enter="addTodo">
        <li v-if="!todos.length">Belum ada tugas </li>
        <li v-for="todo in todos">
            <span v-bind:class="{'completed' : todo.done}" >  {{ todo.text}} </span>
          <button  v-on:click="removeTodo($index)">X</button>
          <button  v-on:click="toggleC(todo)">DONE</button>
        </li>
      </ul>
    </div>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.4.4/vue.js">
    </script>
    <script type="text/javascript">
      new Vue({
        el:'#app',
        data: {
          newTodo : '',
          todos   :[],
          done    :false
        },

        methods : {
          addTodo : function () {
            var newItem = this.newTodo.trim()
            if (newItem) {
              this.todos.push({text: newItem , done:false})
              this.newTodo=''
            }
          },

          removeTodo : function (index) {
            this.todos.splice(index, 1)
          },

          toggleC : function (todo) {
            todo.done = !todo.done
          },

        }

      });
    </script>
  </body>
</html>
