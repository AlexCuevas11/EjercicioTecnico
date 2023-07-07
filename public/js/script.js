new Vue({
    el:'#appTareas',
    data:{
      txtTarea:"",
      listaTareas:[]
    },
    // Acciones de Agregar y Eliminar
    methods:{
      // Acción AgregarTarea
      AgregarTarea:function(){
        var tarea = this.txtTarea.trim();
        if(tarea){
          this.listaTareas.push({
            texto: tarea,
            checked: false
          });
        }
        this.txtTarea="";
      },
      EliminarTarea:function(tarea){
        var index = this.listaTareas.indexOf(tarea);
        this.listaTareas.splice(index,1);
      }
    }
  });