<template>
    <div class="">
        <div class="card col-lg-12">
            <div class="form-group col-lg-6">
                <label class="form-group">Genero</label>
                <select class="form-control" v-model="gender">
                    <option v-bind:value="'M'">Male</option>
                    <option v-bind:value="'F'">Female</option>
                    <option v-bind:value="'ALL'">Unisex</option>
                </select>
            </div>
            <div class="card  col-lg-10 col-lg-offset-1">
                <div class="form-group" >
                    <label class="form-group">Formula</label>
                    <textarea name="Text" class="form-control" cols="40" rows="2" v-model="form" disabled></textarea>
                    <button class="btn btn-rounded btn-primary btn-inline ink-reaction pull-right"
                            style=""
                            @click="deleteForm">
                        Borrar
                    </button>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="col-lg-5">
                    <div class="card">
                        <div class="card-head  card-head-xs style-primary">
                            <label class="control-label col-md-4">Lista de criterios</label>
                        </div>
                        <div class="card-body">
                                <button class="btn btn-default btn-block"
                                        v-for="criterion in criterionList"
                                        @click="addCriterion(criterion)"
                                >
                                    {{ criterion.name }}
                                </button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-lg-offset-1">
                    <div class="card">
                        <div class="card-head card-head-xs style-primary">
                            <label class="control-label col-md-4">Lista de Operadores</label>
                        </div>
                        <div class="card-body">
                                <button class="btn btn-raised btn-primary btn-inline ink-reaction pull-left"
                                        v-for="operator in operatorList"
                                        @click="addOperator(operator)"
                                >
                                    {{ operator.name }}
                                </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group col-md-8">
                <label class="form-group">Respuesta</label>
                <input type="text" class="form-control" v-model="response" placeholder="Inserte Una Respuesta">
            </div>
        </div>

        <div class="col-lg-12">
            <div class="col-lg-8 col-lg-offset-3">
                <ul>
                    <li v-for="error in errors" class="text-danger">
                        {{ error[0] }}
                    </li>
                </ul>
            </div>
            <div class="card-actionbar-row">
                <button class="btn btn-raised btn-default btn-inline ink-reaction pull-left"
                        @click="clickButtonCancel"
                >Cancelar</button>
                <button class="btn btn-raised btn-primary btn-inline ink-reaction"
                        @click="clickButtonNext"
                >Finalizar</button>
            </div>
        </div>

    </div>
</template>

<script>
    export default {
        props:['criterionList','level'],
        data(){
            return{
                gender: 'ALL',
                form : "",
                formBack: "",
                response: null,
                formArray:[],
                autoIncrementForm: 0,
                operatorList:[
                    { name: '(', value: '(' , type:'group'},
                    { name: ')', value: ')' , type:'group'},
                    { name: 'AND' , value: 'AND', type:'logic'},
                    { name: 'OR' ,  value: 'OR', type:'logic'}
                ],
                errors: [],

            }
        },
        methods:{
            addCriterion(criterion){
                 this.form += criterion.name + ' ';
                 this.formBack += "_" + criterion.id + "_ ";
                 this.formArray[this.autoIncrementForm] = {value: criterion.name , type: 'criterion' , extra: null};
                this.autoIncrementForm++;
            },
            addOperator(operator){
                this.form += operator.name + ' ';
                this.formBack += operator.value + ' ';
                this.formArray[this.autoIncrementForm] = {value :operator.value ,type: 'operator', extra: operator.type};
                this.autoIncrementForm++;
            },
            deleteForm(){
                this.form = '';
                this.formBack = '';
                this.formArray = [];
                this.autoIncrementForm = 0;
                this.errors= [];
            },
            clickButtonCancel(){
                //TODO

            },
            validateForm(){
                this.errors = [];
                let flag = false;
                if (this.validateParenthesis()){
                    if (this.validateVariableExistence()){
                        if (this.validateSequence()){
                            flag = true;
                        }else {this.errors.push({0 : 'Error en la formula revise las indicaciones para su creación'})}
                    }else {this.errors.push({0 : 'Error en la formula revise las indicaciones para su creación'})}
                }else {this.errors.push({0 : 'Error en la formula: La distribución de parentesis es incorrecta'})}

                return flag;
            },

            updateLevel(){
                axios.post(`/admin/processLevel/updateLevel`,
                    {
                        id: this.level.id,
                        diagnosis_id: this.level.diagnosis_id,
                        name: this.level.name,
                        gender: this.gender,
                        formula:this.formBack,
                        response:this.response
                    })
                    .then(response => {

                    })
            },
            clickButtonNext(){
                this.errors = [];
                if (this.response ){
                    if  (this.validateForm()){
                        this.updateLevel();
                        window.location.replace(`/admin/level`);
                    }
                }else {this.errors.push({0 : 'El campo respuesta es obligatorio'})}
            },

            validateSequence(){
                let i = 1;
                let limit = this.formArray.length -1;
                let flag = true;
                while (i <= limit && flag){
                    let a = this.formArray[i-1];
                    let b = this.formArray[i];
                    if (i === 1 && a.extra === 'logic'){flag = false}
                    if (i === limit && this.formArray[limit].extra === 'logic'){flag = false}
                    if ( a.type === b.type){
                        if (a.type === 'criterion'){flag = false}else if(a.extra === 'logic'){flag = false}
                    }else {
                        if(a.type === 'criterion' && b.value === '('){flag = false}
                        if(a.value === ')' && b.type === 'criterion'){flag = false}
                        if(a.type === 'operator' && a.extra === 'logic' && b.value === ')'){flag = false}
                    }
                    i++;
                }
                return flag;
            },
            validateVariableExistence(){
                let i = 0;
                this.formArray.forEach(function (element) {if(element.type === 'criterion'){i++}});
                return !(i === 0);
            },
            validateParenthesis(){
                let i = 0;
                let cont = 0;
                let flag = true;

                while (cont < this.formArray.length && flag){
                    if ( i === 0){
                        if (this.formArray[cont].value === "("){
                            i++;
                        }else if(this.formArray[cont].value === ")"){
                            i++;
                            flag = false;
                        }
                    }else {
                        if (this.formArray[cont].value === "("){i++;}else if(this.formArray[cont].value === ")"){i--;}
                    }
                    cont++;
                }
                return (i === 0);
            },
        },

        mounted() {

        }
    }
</script>