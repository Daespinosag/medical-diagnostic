<template>
    <div>

        <div class="col-lg-12">
            <slot name="title"></slot>
        </div>

        <div class="col-lg-12 card">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <td>Variable</td>
                        <td>Criterion Name</td>
                        <td>Value One</td>
                        <td>Value Two</td>
                        <td>Comparison Operator</td>
                        <td>Unit</td>
                        <td>Actions</td>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="criterion in localCriterion" >
                        <td>{{ criterion.variable.name }}</td>
                        <td>{{ criterion.name }}</td>
                        <td>{{ criterion.value_1 }}</td>
                        <td>{{ criterion.value_2 }}</td>
                        <td>{{ criterion.comparison_operator }}</td>
                        <td>{{ criterion.unit}}</td>
                        <td>
                            <button class="btn btn-rounded btn-danger btn-inline ink-reaction pull-left"
                                    @click="deleteCriterion( criterion.id, localCriterion)" >
                                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                            </button>
                        </td>
                    </tr>
                    <tr class="">
                        <td colspan="7" ></td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr class="style-primary" >
                        <td colspan="7">
                            <strong>Copiar : </strong> Utilizar un criterio ya creado
                         </td>
                    </tr>
                    <tr>
                        <td>
                            <select class="form-control" v-model="variableSelected" v-on:change="getListCriterion">
                                <option v-for="variable in variables" v-bind:value="variable.id">
                                        {{ variable.name }}
                                </option>
                            </select>
                        </td>
                        <td>
                            <select class="form-control" v-model="criterionSelected" v-on:change="getCriterion">
                                <option v-for="criterion in listCriterionSelect" v-bind:value="criterion.id">
                                    {{ criterion.name }}
                                </option>
                            </select>
                        </td>
                        <td>{{ criterion.value_1 }}</td>
                        <td>{{ criterion.value_2 }}</td>
                        <td>{{ criterion.comparison_operator }}</td>
                        <td>{{ criterion.unit }}</td>
                        <td>
                            <button class="btn btn-rounded btn-primary btn-inline ink-reaction pull-left"
                                    @click="copyCriterion">
                                    <i class="fa fa-external-link" aria-hidden="true"></i>
                            </button>
                        </td>
                    </tr>
                    <tr class="style-primary" >
                        <td colspan="7" >
                            <strong>Create : </strong> Crear un criterio desde cero
                        </td>

                    </tr>
                    <tr>
                        <td>
                            <select class="form-control" v-model="variableCreateSelected" v-on:change="changeCreateCriterionSelected">
                                <option v-for="variable in variables" v-bind:value="variable.id">
                                    {{ variable.name }}
                                </option>
                            </select>
                        </td>
                        <td>
                            <span class="tag label label-danger">Esta propiedad es calculada</span>
                        </td>
                        <td>
                            <input type="number" class="form-control" v-model="criterionInCreation.value_1" placeholder="ingrese un valor">
                        </td>
                        <td>
                            <input type="number" class="form-control" v-model="criterionInCreation.value_2" placeholder="ingrese un valor">
                        </td>
                        <td>
                            <select class="form-control" v-model="criterionInCreation.comparison_operator">
                                <option :value="'='">Igual</option>
                                <option :value="'>'">Mayor que</option>
                                <option :value="'>='">Mayor o igual</option>
                                <option :value="'<'">Menor que</option>
                                <option :value="'<='">Menor o igual</option>
                                <option :value="'!='">Diferente</option>
                                <option :value="'<>'">Entre</option>
                            </select>
                        </td>
                        <td>
                            <input class="form-control" v-model="criterionInCreation.unit" placeholder="ingrese una unidad">
                        </td>
                        <td>
                            <button class="btn btn-rounded btn-primary btn-inline ink-reaction pull-left"
                                    @click="createCriterion">
                                    <i class="fa fa-floppy-o" aria-hidden="true"></i>
                            </button>
                        </td>
                    </tr>
                </tfoot>
            </table>

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
        props:['dataStepOne','level'],
        data() {
            return{
                variables: [],
                localCriterion: [],

                listCriterionSelect:[],
                variableSelected: null,
                criterion: { name:'-',value_1: '-',value_2: '-',comparison_operator : '-',unit: '-',},
                criterionSelected : null,

                variableCreateSelected:null,
                criterionCreateSelected : null,
                criterionInCreation: { value_1: null,value_2: null,comparison_operator : null,unit: null,},
                errors: [],
            }
        },
        methods: {
            clickButtonCancel(){
                console.log('hola desde hijo cancel')
            },
            clickButtonNext(){
                this.errors = [];
                if (this.localCriterion.length > 0){
                    this.$emit('clickButtonNext',this.localCriterion);
                }else{
                    this.errors.push({0 : 'Debes seleccionar o crear al menos un criterio'});
                }
            },
            getListCriterion(){
                this.errors = [];
                if (this.variableSelected) {
                    axios.post(`/admin/processLevel/getListCriterion`,
                        {variable_id: this.variableSelected}
                    ).then(response => {
                        this.listCriterionSelect = response.data;
                    })
                    .catch(error => {
                        this.errors = error.response.data;
                    });

                }
            },
            getCriterion(){
                this.errors = [];
                if(this.criterionSelected) {
                    axios.post(`/admin/processLevel/getCriterion`,
                        {id: this.criterionSelected}
                    ).then(response => {
                        this.criterion = response.data[0];
                    })
                    .catch(error => {
                        this.errors = error.response.data;
                    });
                }
            },
            changeCreateVariableSelected(){
                //this.listCriterionCreate = this.getListCriterion(this.variableCreateSelected);
            },
            changeCreateCriterionSelected(){

            },
            changeCriterionSelected(){

            },
            copyCriterion(){
                this.errors = [];
                if (this.variableSelected && this.criterionSelected) {
                    axios.post(`/admin/processLevel/saveCriterion`,
                        {
                            level_id: this.level.id,
                            variable_id: this.variableSelected,
                            value_1: this.criterion.value_1,
                            value_2: this.criterion.value_2,
                            comparison_operator: this.criterion.comparison_operator,
                            unit: this.criterion.unit
                        }).then(response => {
                            this.localCriterion.push(response.data);
                            this.listCriterionSelect = [];
                            this.variableSelected = null;
                            this.criterion = {value_1: null, value_2: null, comparison_operator: null, unit: null,};
                            this.criterionSelected = null;
                        })
                        .catch(error => {
                            this.errors = error.response.data;
                        });
                }else {
                    this.errors.push({0 : 'Debes seleccionar una variable y un criterio'});
                }
            },
            createCriterion(){
                this.errors = [];
                if(this.variableCreateSelected) {
                    axios.post(`/admin/processLevel/saveCriterion`,
                        {
                            level_id: this.level.id,
                            variable_id: this.variableCreateSelected,
                            value_1: this.criterionInCreation.value_1,
                            value_2: this.criterionInCreation.value_2,
                            comparison_operator: this.criterionInCreation.comparison_operator,
                            unit: this.criterionInCreation.unit
                        }).then(response => {
                            this.localCriterion.push(response.data);
                            this.variableCreateSelected = null;
                            this.criterionInCreation = {value_1: null,value_2: null,comparison_operator: null,unit: null,};
                        }).catch(error => {
                            this.errors = error.response.data;
                        });
                }else {
                    this.errors.push({0 : 'Debes seleccionar una variable'});
                }
            },
            deleteCriterion(id,index){
                this.errors = [];
                axios.post(`/admin/processLevel/deleteCriterion`,{id})
                    .then(response => {
                        if (response.data){
                            this.localCriterion.splice(index, 1);
                        }
                    })
                    .catch(error => {
                        this.errors = error.response.data;
                    });
            }

        },
        mounted() {
            axios.post(`/admin/processLevel/getVariables`)
                .then(response => {
                    this.variables = response.data;
                })
                .catch(error => {
                    this.errors = error.response.data;
                });
        }
    }
</script>