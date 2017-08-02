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
                <input type="text" class="form-control" v-model="response">
            </div>
        </div>

        <div class="col-lg-12">
            <div class="card-actionbar-row">
                <button class="btn btn-raised btn-default btn-inline ink-reaction pull-left"
                        @click="clickButtonCancel"
                >Cancel</button>
                <button class="btn btn-raised btn-primary btn-inline ink-reaction"
                        @click="clickButtonNext"
                >Next</button>
            </div>
        </div>

    </div>
</template>

<script>
    export default {
        props:['criterionList'],
        data(){
            return{
                gender: 'ALL',
                form : "",
                formBack: "",
                response: null,
                formArray:[],
                autoIncrementForm: 0,
                operatorList:[
                    { name: '(', value: '('},
                    { name: ')', value: ')'},
                    { name: 'AND' , value: 'AND'},
                    { name: 'OR' ,  value: 'OR'}
                ],

            }
        },
        methods:{
            addCriterion(criterion){
                 this.form += criterion.name + ' ';
                 this.formBack += "_" + criterion.id + "_ ";
                 this.formArray[this.autoIncrementForm] = criterion.name;
                this.autoIncrementForm++;
            },
            addOperator(operator){
                this.form += operator.name + ' ';
                this.formBack += operator.value + ' ';
                this.formArray[this.autoIncrementForm] = operator.value;
                this.autoIncrementForm++;
            },
            deleteForm(){
                this.form = '';
                this.formBack = '';
                this.formArray = [];
                this.autoIncrementForm = 0;
            },
            clickButtonCancel(){
                //TODO

            },
            validateForm(){
                //TODO return true or false
            },
            updateLevel(){

            },
            clickButtonNext(){

                if (this.response ){
                    if  (this.validateForm()){
                        this.updateLevel();
                        this.$emit('clickButtonNext',true);
                    }
                }else {
                    //TODO
                    console.log('error debe ingresar una respuesta')
                }
            }
        },
        mounted() {

        }
    }
</script>