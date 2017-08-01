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
            <div class="card form-group  col-lg-8 col-lg-offset-2">
                <label class="form-group">Formula</label>
                <input type="text"  class="form-control" v-model="form">
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
                                        @click="addCriterion(criterion in criterionList)"
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
                                        @click="addOperator(operator in operatorList)"
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
    </div>
</template>

<script>
    export default {
        props:['criterionList'],
        data(){
            return{
                gender: 'ALL',
                form : null,
                response: null,
                operatorList:[
                    { name: '(', value: '('},
                    { name: ')', value: ')'}
                ],

            }
        },
        methods:{
            addCriterion(criterion, criterionList){
                //TODO
            },
            addOperator(operator, operatorList){
                //TODO
            }

        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>