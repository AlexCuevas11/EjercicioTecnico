<template>
    <div id="appTareas" class='ui container'><br><br>
        <div class="ui fluid right action input">
            <input type="text" autofocus v-on:keyup.enter='AgregarTarea' placeholder='Introducir Tarea' v-model='txtTarea'>
            <button class='ui teal right labeled icon button' v-on:click="AgregarTarea">
                <i class="add square icon"></i>
                Agregar Tarea
            </button>
        </div>
        <ul v-for="tarea in listaTareas" :key="tarea.id">
            <li>
                <div class="ui clearing red segment" v-bind:class="{disabled:tarea.checked}">
                    <input type="checkbox" v-model="tarea.checked">
                    <label class='ui label teal horizontal' v-bind:class="{disabled:tarea.checked}">{{tarea.texto}}</label>
                    <button class='mini ui red right floated button' v-on:click="EliminarTarea(tarea)">
                        <i class="remove icon"></i>
                        Eliminar Tarea
                    </button>
                </div>
            </li>
        </ul>
    </div>
</template>

<script>
export default {
    data() {
        return {
            listaTareas: [
                { id: 1, texto: 'Tarea 1', checked: false },
                { id: 2, texto: 'Tarea 2', checked: false },
                { id: 3, texto: 'Tarea 3', checked: false }
            ],
            txtTarea: ''
        };
    },
    methods: {
        AgregarTarea() {
            if (this.txtTarea !== '') {
                this.listaTareas.push({
                    id: this.listaTareas.length + 1,
                    texto: this.txtTarea,
                    checked: false
                });
                this.txtTarea = '';
            }
        },
        EliminarTarea(tarea) {
            const index = this.listaTareas.indexOf(tarea);
            if (index > -1) {
                this.listaTareas.splice(index, 1);
            }
        }
    }
};
</script>
