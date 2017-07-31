<template>
    <div>

        <div class="col-lg-12">
            <slot name="title"></slot>
        </div>

        <div class="col-lg-12">
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
                            <button class="btn btn-raised btn-default btn-inline ink-reaction pull-left" >Delete</button>
                        </td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td>
                            <select class="form-control col-md-8" v-model="variableSelected" v-on:change="getListCriterion">
                                <option v-for="variable in variables" v-bind:value="variable.id">
                                        {{ variable.name }}
                                </option>
                            </select>
                        </td>
                        <td>
                            <select class="form-control col-md-8" v-model="criterionSelected" v-on:change="getCriterion">
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
                            <button class="btn btn-raised btn-default btn-inline ink-reaction pull-left" @click="copyCriterion">Copy</button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <select class="form-control col-md-8" v-model="variableCreateSelected" v-on:change="changeCreateCriterionSelected">
                                <option v-for="variable in variables" v-bind:value="variable.id">
                                    {{ variable.name }}
                                </option>
                            </select>
                        </td>
                        <td>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tfoot>
            </table>

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
        props:['dataStepOne','level'],
        data() {
            return{
                variables: [],
                localCriterion: [],

                listCriterionSelect:[],
                variableSelected: null,
                criterion: { value_1: null,value_2: null,comparison_operator : null,unit: null,},
                criterionSelected : null,

                variableCreateSelected:null,
                criterionCreateSelected : null,
            }
        },
        methods: {
            clickButtonCancel(){
                console.log('hola desde hijo cancel')
            },
            clickButtonNext(){
                this.$emit('clickButtonNext');
            },
            getListCriterion(){
                axios.post(`http://medical-diagnostic.app/admin/processLevel/getListCriterion`,
                    { variable_id: this.variableSelected}
                    ).then(response => {
                        this.listCriterionSelect =  response.data;
                    })
            },
            getCriterion(){
                axios.post(`http://medical-diagnostic.app/admin/processLevel/getCriterion`,
                    { id: this.criterionSelected}
                ).then(response => {
                    this.criterion = response.data[0];
                })
            },
            changeCreateVariableSelected(){
                //this.listCriterionCreate = this.getListCriterion(this.variableCreateSelected);
            },
            changeCreateCriterionSelected(){

            },
            changeCriterionSelected(){

            },
            copyCriterion(){
                axios.post(`http://medical-diagnostic.app/admin/processLevel/saveCriterion`,
                    {
                        level_id : this.level.id,
                        variable_id : this.variableSelected,
                        value_1 : this.criterion.value_1,
                        value_2 : this.criterion.value_2,
                        comparison_operator : this.criterion.comparison_operator,
                        unit : this.criterion.unit
                    }).then(response => {
                        this.localCriterion.push(response.data);
                        this.listCriterionSelect = [];
                        this.variableSelected =  null;
                        this.criterion =  { value_1: null,value_2: null,comparison_operator : null,unit: null,};
                        this.criterionSelected = null;
                    });
            }

        },
        mounted() {
            axios.post(`http://medical-diagnostic.app/admin/processLevel/getVariables`)
                .then(response => {
                    this.variables = response.data;
                })
        }
    }
</script>