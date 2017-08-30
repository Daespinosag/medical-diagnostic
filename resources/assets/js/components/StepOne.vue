<template>
    <div>
        <div class="col-lg-12">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-head card-head-xs style-primary text-center">
                        <label class="control-label card-tiles">Tipo de Diagnóstico</label>
                    </div>
                    <div class="card-body" v-if="!typesDisplayForm">
                        <div class="form-group col-md-12">
                            <label class="control-label col-md-12">Tipo de Diagnóstico</label>
                            <select class="form-control col-md-12" v-model="localTypesSelected" v-on:change="loadDiagnosis">
                                <option selected="selected" disabled="disabled" hidden="hidden" value="null">Seleccione el tipo de diagnóstico</option>
                                <option v-for="typesOption in typesOptions" v-bind:value="typesOption.id">
                                    {{ typesOption.name }}
                                 </option>
                            </select>
                        </div>
                        <div class="col-md-2 col-md-offset-9">
                            <button class="btn btn-raised btn-primary btn-inline ink-reaction" v-on:click="stateTypeDiagnosis" >Nuevo</button>
                        </div>
                    </div>
                    <div class="" v-show="typesDisplayForm">
                        <div class="col-md-12">
                            <section>
                                <div class="form-group floating-label">
                                    <label for="name" class="col-md-12 control-label">Nombre</label>
                                    <div class="col-md-12">
                                        <input class="form-control" required="" name="name" type="text" id="name" v-model="typeDiagnosisName"><div class="form-control-line"></div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="description" class="col-md-12 control-label">Descripción</label>
                                    <div class="col-md-12">
                                        <textarea class="form-control" required="" name="description" cols="20" rows="10" id="description" v-model="typeDiagnosisDescription"></textarea><div class="form-control-line"></div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class="card-actionbar-row col-md-10 col-md-offset-1">
                            <a class="btn btn-raised btn-default btn-inline ink-reaction pull-left" v-on:click="stateTypeDiagnosis">Cancelar</a>
                            <button class="btn btn-raised btn-primary btn-inline ink-reaction pull-right" v-on:click="saveTypeDiagnosis">Guardar</button>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-md-5 col-md-offset-1">
                <div class="card">
                    <div class="card-head card-head-xs style-primary text-center">
                        <label class="control-label col-md-4">Diagnóstico</label>
                    </div>
                    <div class="card-body" v-if="!diagnosisDisplayForm">
                        <div class="form-group col-md-12">
                            <label class="control-label col-md-12">Diagnóstico</label>
                            <select class="form-control col-md-12" v-model="localDiagnosisSelected" v-on:change="changeDiagnosis">
                                <option selected="selected" disabled="disabled" hidden="hidden" value="null">Seleccione el diagnóstico</option>
                                <option v-for="diagnosisOption in diagnosisOptions" v-bind:value="diagnosisOption.id">
                                    {{ diagnosisOption.name }}
                                 </option>
                            </select>
                        </div>
                        <div class="col-md-2 col-md-offset-9">
                            <button class="btn btn-raised btn-primary btn-inline ink-reaction" v-on:click="stateDiagnosis" v-show="buttonDiagnosisDisplay">Nuevo</button>
                        </div>
                    </div>

                    <div class="" v-show="diagnosisDisplayForm">
                        <div class="col-md-12">
                            <section>
                                <div class="form-group ">
                                    <label for="name" class="col-md-12 control-label">Nombre</label>
                                    <div class="col-md-12">
                                        <input class="form-control" required="" name="name" type="text"  v-model="diagnosisName"><div class="form-control-line"></div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="description" class="col-md-12 control-label">Descripción</label>
                                    <div class="col-md-12">
                                        <textarea class="form-control" required="" name="description" cols="20" rows="10"  v-model="diagnosisDescription"></textarea><div class="form-control-line"></div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class="">
                            <div class="card-actionbar-row col-md-10 col-md-offset-1">
                                <a class="btn btn-raised btn-default btn-inline ink-reaction pull-left" v-on:click="stateDiagnosis">Cancelar</a>
                                <button class="btn btn-raised btn-primary btn-inline ink-reaction pull-right" v-on:click="saveDiagnosis">Guardar</button>
                            </div>
                        </div>
                    </div>
                </div>
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
                >Siguiente</button>
            </div>
        </div>

    </div>
</template>

<script>
    export default {
        props: {
            redirectLevel: String,
        },
        data() {
            return{
                typesDisplayForm: false,
                diagnosisDisplayForm: false,
                buttonDiagnosisDisplay: false,
                typeDiagnosisName: '',
                diagnosisName: '',
                typeDiagnosisDescription: '',
                diagnosisDescription: '',
                typesOptions: [],
                diagnosisOptions: [],
                localTypesSelected: null,
                localDiagnosisSelected: null,
                errors: [],
            }
        },
        methods: {
            stateTypeDiagnosis() {
                this.localTypesSelected = null;
                this.typesDisplayForm = !this.typesDisplayForm;
                this.buttonDiagnosisDisplay = false;
            },
            saveTypeDiagnosis(){
                this.errors = [];
                axios.post(
                    `/admin/processLevel/createTypeDiagnosis`,
                    { name: this.typeDiagnosisName, description: this.typeDiagnosisDescription }
                )
                    .then(response => {
                        this.typesDisplayForm = !this.typesDisplayForm;
                        this.typesOptions.push({id : response.data.id, name: this.typeDiagnosisName});
                        this.localTypesSelected = response.data.id;
                        this.localDiagnosisSelected = null;
                        this.diagnosisOptions = [];
                        this.buttonDiagnosisDisplay = true;
                    })
                    .catch(error => {
                        this.errors = error.response.data;
                    });
            },
            loadDiagnosis(){
                this.errors = [];
                this.localDiagnosisSelected = null;
                axios.post(`/admin/processLevel/loadDiagnosis`,{id: this.localTypesSelected})
                    .then(response => {
                        this.diagnosisOptions = response.data;
                        this.buttonDiagnosisDisplay = true;
                    })
            },
            stateDiagnosis(){
                this.localDiagnosisSelected = null;
                this.diagnosisDisplayForm = !this.diagnosisDisplayForm;
            },
            saveDiagnosis(){
                this.errors = [];
                axios.post(
                    `/admin/processLevel/createDiagnosis`,
                    { type_diagnosis_id: this.localTypesSelected, name: this.diagnosisName, description: this.diagnosisDescription }
                )
                    .then(response => {
                        this.diagnosisDisplayForm = !this.diagnosisDisplayForm;
                        this.diagnosisOptions.push({id : response.data.id, name: this.diagnosisName});
                        this.localDiagnosisSelected = response.data.id;
                    })
                    .catch(error => {
                        this.errors = error.response.data;
                    });
            },
            changeDiagnosis(){
                //TODO
            },
            clickButtonCancel(){
                window.location.replace(this.redirectLevel);
            },
            clickButtonNext(){
                this.errors = [];
                if (this.localTypesSelected){
                    if (this.localDiagnosisSelected){
                        let value =  {
                            diagnosisSelected: this.localDiagnosisSelected,
                            diagnosisName: this.diagnosisName,
                            typesSelected: this.localTypesSelected,
                            typeDiagnosisName: this.typeDiagnosisName
                        };

                        this.$emit('clickButtonNext',value);
                    }else {
                        this.errors.push({0 : 'Debes seleccionar un diagnostico'});
                    }
                }else {
                    this.errors.push({0 : 'Debes seleccionar un tipo de diagnostico'});
                }
            }
        },
        mounted() {
            axios.post(`/admin/processLevel/typeDiagnosis`)
                .then(response => {
                    this.typesOptions = response.data;
                })
        }
    }
</script>